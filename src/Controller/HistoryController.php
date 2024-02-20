<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Pdf;
use App\Entity\User;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Doctrine\ORM\EntityManagerInterface;

class HistoryController extends AbstractController
{
    #[Route('/pdf-history', name: 'app_pdf_history')]
    public function index(): Response
    {

        
        $user = $this->getUser();

                // Vérification si l'utilisateur est connecté
                if (!$user) {
                    $this->addFlash('error', 'Vous devez être connecté pour accéder à l\'historique des PDF.');
                    return $this->redirectToRoute('app_login'); // Redirection vers la page de connexion
                }

                
        $pdfs = $user->getPdfs();



        return $this->render('history/index.html.twig', [
            'pdfs' => $pdfs,
        ]);
    }

    #[Route('/pdf-view/{id}', name: 'app_pdf_view')]
    public function viewPdf(int $id, EntityManagerInterface $entityManager): Response
    {
        $pdfRepository = $entityManager->getRepository(Pdf::class);
        $pdf = $pdfRepository->find($id);
    
        if (!$pdf || !$this->getUser() || $pdf->getUserId() !== $this->getUser()) {
            throw $this->createNotFoundException('Le fichier PDF demandé n\'existe pas ou vous n\'avez pas les droits pour le visualiser.');
        }
    
        $pdfFilePath = $this->getParameter('kernel.project_dir') . '/public/' . $pdf->getFilePath();
    
        if (!file_exists($pdfFilePath)) {
            throw $this->createNotFoundException('Le fichier PDF demandé n\'existe pas sur le serveur.');
        }
    
        // Retourne une réponse qui visualise
        return $this->file($pdfFilePath, null, ResponseHeaderBag::DISPOSITION_INLINE);
    }
}



