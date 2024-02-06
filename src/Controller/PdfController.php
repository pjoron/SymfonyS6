<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\Routing\Annotation\Route; // Assurez-vous d'importer la classe Route

class PdfController extends AbstractController
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route("/generate-pdf", name: "generate_pdf", methods: ["POST"])]
    public function generatePdf(): Response
    {
        $htmlContent = '<h1>Titre de votre document</h1><p>Contenu de votre document...</p>';
        
        $response = $this->client->request('POST', 'https://demo.gotenberg.dev', [
            'headers' => [
                'Content-Type' => 'multipart/form-data',
            ],
            'body' => [
                'files' => $htmlContent,
                'filename' => 'document.html',
            ],
        ]);

        $pdfContent = $response->getContent();

        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="document.pdf"',
        ]);
    }
}
