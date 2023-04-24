<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YoutubeSerachController extends AbstractController
{
    #[Route('/youtube/serach', name: 'app_youtube_serach')]
    public function index(): Response
    {
        return $this->render('youtube_serach/index.html.twig', [
            'controller_name' => 'YoutubeSerachController',
        ]);
    }
}
