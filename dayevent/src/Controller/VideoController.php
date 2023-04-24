<?php

namespace App\Controller;

use App\Service\Yt;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VideoController extends AbstractController
{
   /* private $youTubeDownloader;

    public function __construct(YouTubeDownloader $youTubeDownloader)
    {
        $this->youTubeDownloader = $youTubeDownloader;
    }*/
   
    #[Route('/video/download', name: 'video_download')]
    public function download(Request $request)
    {
        @$video_id = $_POST['video_id'];
		$start_downloader = new Yt();
		$start_downloader->Download($video_id);

        

        return $this->render('video/download.html.twig');
    }
}
