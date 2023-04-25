<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;

class RemotePdfController extends AbstractController
{
    
    #[Route('/download-remote-pdf', name:'download_remote_pdf')]

    public function download(): Response
    {
        // create a new Guzzle HTTP client
        $client = new Client();

        // send a GET request to the remote API
        $response = $client->get('http://localhost:8000/api/pdf');

        // create a new response with the PDF file as the body
        $pdfResponse = new Response($response->getBody());

        // set the content type and headers for downloading the file
        $pdfResponse->headers->set('Content-Type', 'application/pdf');
        $pdfResponse->headers->set('Content-Disposition', 'attachment; filename="document.pdf"');

        return $pdfResponse;
    }
}
