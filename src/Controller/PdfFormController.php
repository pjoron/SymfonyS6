<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Gotenberg;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Pdf;

class PdfFormController extends AbstractController
{
    #[Route('/pdf-form', name: 'app_pdf_form')]
    public function new(Request $request, Gotenberg $gotenberg, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $url = $request->request->get('url');
            $title = $request->request->get('title'); // Récupérer le titre depuis le formulaire

            if (filter_var($url, FILTER_VALIDATE_URL)) {
                $convertedPdf = $gotenberg->fetchGitHubInformation(['url' => $url]);

                $pdf = new Pdf();
                $pdf->setCreatedAt(new \DateTimeImmutable());
                $pdf->setTitle($title); 
                
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
