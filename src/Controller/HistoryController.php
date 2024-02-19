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
    
        // Retourne une réponse qui télécharge le fichier PDF
        return $this->file($pdfFilePath, null, ResponseHeaderBag::DISPOSITION_INLINE);
    }
}



