<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Gotenberg;

class PdfFormController extends AbstractController
{
    #[Route('/pdf-form', name: 'app_pdf_form')]
    public function new(Request $request, Gotenberg $gotenberg): Response
    {
        if ($request->isMethod('POST')) {
            $url = $request->request->get('url');
            
            if (filter_var($url, FILTER_VALIDATE_URL)) {
                $conversion = $gotenberg->fetchGitHubInformation(['url' => $url]);

                return new Response($conversion, 200, [
                    'Content-Type' => 'application/pdf',
                ]);
            }

            $this->addFlash('error', 'URL invalide.');
        }

        return $this->render('pdf_form/index.html.twig');
    }
}