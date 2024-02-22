<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Gotenberg;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Pdf;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use App\Repository\PdfRepository;


class PdfFormController extends AbstractController
{
    #[Route('/pdf-form', name: 'app_pdf_form')]
    public function new(Request $request, Gotenberg $gotenberg, EntityManagerInterface $entityManager, PdfRepository $pdfRepository): Response
    {
        
        if ($request->isMethod('POST')) {

            $user = $this->getUser();
            if ($user) {
            $subscription = $user->getSubscriptionId();


            $startOfDay = new \DateTime("today", new \DateTimeZone('UTC'));
            $endOfDay = new \DateTime("tomorrow", new \DateTimeZone('UTC'));
            $endOfDay->modify('-1 second'); 

                $pdfCountToday = $pdfRepository->findPdfGeneratedByUserOnDate($user->getId(), $startOfDay, $endOfDay);

                if ($subscription && $pdfCountToday >= $subscription->getLimitsPdf()) {
                    $this->addFlash('error', 'Vous avez atteint votre limite quotidienne de PDFs pour votre abonnement.');
                    return $this->redirectToRoute('app_pdf_form');
                }

        }

            $url = $request->request->get('url');
            $title = $request->request->get('title');

            if (filter_var($url, FILTER_VALIDATE_URL)) {
                $convertedPdf = $gotenberg->fetchGitHubInformation(['url' => $url]);
        
                $pdfFileName = uniqid() . '.pdf'; // Générez un nom de fichier unique
                $pdfFilePath = 'pdfs/' . $pdfFileName; 
                $pdfFullPath = $this->getParameter('kernel.project_dir') . '/public/' . $pdfFilePath;
        
                file_put_contents($pdfFullPath, $convertedPdf); 
        
                $pdf = new Pdf();
                $pdf->setCreatedAt(new \DateTimeImmutable());
                $pdf->setTitle($title);
                $pdf->setFilePath($pdfFilePath); 
        
                if ($this->getUser()) {
                    $pdf->setUserId($this->getUser());
                }
        
                $entityManager->persist($pdf);
                $entityManager->flush();

                // Retournez le PDF généré
                return new Response($convertedPdf, 200, [
                    'Content-Type' => 'application/pdf',
                ]);
            }

            $this->addFlash('error', 'URL invalide.');
        }

        return $this->render('pdf_form/index.html.twig');
    }
}



