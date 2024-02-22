<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Gotenberg
{
    public function __construct(
        private HttpClientInterface $client,
    ) {
    }

    public function fetchGitHubInformation($url):string
    {


        $response = $this->client->request(
            'POST',
            'http://localhost:3000/forms/chromium/convert/url',

            [
                'headers' =>[
                    'Content-Type' => 'multipart/form-data'
                ],
                'body' => $url]

        );

        return $response->getContent();


    }

    public function createBasePdf(): string
    {
        $htmlFilePath = __DIR__ . '/../html_de_base/index.html';
        $htmlContent = file_get_contents($htmlFilePath);
        
        // $htmlContent = str_replace('{{ date }}', date('Y-m-d H:i:s'), $htmlContent);
    
        $response = $this->client->request(
            'POST',
            'http://localhost:3000/forms/chromium/convert/html',
            [
                'headers' => [
                    'Content-Type' => 'multipart/form-data',
                ],
                'body' => [
                    'files' => [
                        'index.html' => $htmlContent,
                    ],
                ],
            ]
        );
    
        return $response->getContent();
    }

public function mergePdfs(array $pdfPaths): string
{
    $response = $this->client->request(
        'POST',
        'http://localhost:3000/forms/pdfengines/merge',
        [
            'headers' => [
                'Content-Type' => 'multipart/form-data',
            ],
            'body' => [
                'files' => $pdfPaths, 
            ],
        ]
    );

    return $response->getContent(); 
}



    
}

?>