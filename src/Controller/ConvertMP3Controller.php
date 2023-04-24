<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
class ConvertMP3Controller extends AbstractController
{
    #[Route('/convert', name: 'app_convert_m_p3')]
    public function index(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $videoFile = $request->files->get('video');

            if ($videoFile) {
                $videoName = uniqid() . ".mp3";
                $videoFile->move(__DIR__.'/../public/video/', $videoName);

                return $this->redirectToRoute('app_convert_m_p3', ['fl' => $videoName]);
            }
        } else {
            $dir = __DIR__.'/../public/video/';
            $filename = $request->query->get('fl');
            $file_path = $dir . $filename;
            $ctype = "application/octet-stream";

            if (!empty($file_path) && file_exists($file_path)) {
                $response = new BinaryFileResponse($file_path);
                $response->headers->set('Content-Type', $ctype);
                $response->setContentDisposition(
                    'attachment',
                    basename($file_path),
                    \Symfony\Component\HttpFoundation\ResponseHeaderBag::DISPOSITION_INLINE
                );
                return $response;
            }
        }

        throw $this->createNotFoundException("The File does not exist.");
    }
}
    
    
    
       
 
