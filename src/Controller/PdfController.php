<?php

namespace App\Controller;

use App\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Dompdf\Dompdf;
use Symfony\Component\Routing\Annotation\Route;


class PdfController extends AbstractController
{
    #[Route('/generate-pdf', name: 'generate_pdf')]
    public function generatePdf(): Response
    {
        // Get all reclamations from the database
        $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();

        // create a new Dompdf instance
        $dompdf = new Dompdf();

        // load the HTML content
        $html = $this->renderView('pdf_template.html.twig', [
            'title' => 'Reclamation PDF Document',
            'reclamations' => $reclamations,
        ]);
        $dompdf->loadHtml($html);

        // set the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // render the PDF as a string
        $pdfContent = $dompdf->output();

        // send the PDF as a response
        $response = new Response($pdfContent);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="document.pdf"');

        return $response;
    }
}
