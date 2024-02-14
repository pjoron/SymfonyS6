<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Pdf;
use App\Entity\User;

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
}
