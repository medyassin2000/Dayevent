<?php
/*
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class YouTubeDownloader
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getVideoDetails($videoId)
    {
        $response = $this->httpClient->request('GET', 'https://youtube-media-downloader.p.rapidapi.com/v2/video/details', [
            'query' => [
                'videoId' => $videoId
            ],
            'headers' => [
                'X-RapidAPI-Host' => 'youtube-media-downloader.p.rapidapi.com',
                'X-RapidAPI-Key' => '8c3fdcdf1bmsh13be57d57a468f5p145305jsn646e548c0caa',
            ]
        ]);

        return $response->getContent();
    }
}*/

/*public function getVideoDetails($videoId)
{
    $response = $this->httpClient->request('GET', 'https://youtube-media-downloader.p.rapidapi.com/v2/video/details', [
        'query' => [
            'videoId' => $videoId
        ],
        'headers' => [
            'X-RapidAPI-Host' => 'youtube-media-downloader.p.rapidapi.com',
            'X-RapidAPI-Key' => '8c3fdcdf1bmsh13be57d57a468f5p145305jsn646e548c0caa',
        ]
    ]);

    $content = $response->getContent();

    // Convertir la réponse JSON en tableau associatif PHP
    $details = json_decode($content, true);

    return $details;
}
*/


?>