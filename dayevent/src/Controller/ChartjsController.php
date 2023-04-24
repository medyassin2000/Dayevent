<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MusicRepository;
class ChartjsController extends AbstractController
{
     /**
     * @Route("/chartjs", name="chartjs")
     */
    public function artistStatistique(ChartBuilderInterface $chartBuilder,EntityManagerInterface $entityManager)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT m.nomArtiste, COUNT(m) AS nombreMusiques 
            FROM App\Entity\Music m 
            GROUP BY m.nomArtiste 
            ORDER BY nombreMusiques DESC'
        );

        $results = $query->getResult();
        $labels = array();
        $values = array();

        foreach ($results as $result) {
            array_push($labels, $result['nomArtiste']);
            array_push($values, $result['nombreMusiques']);
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Nombre de musiques',
                    'backgroundColor' => '#3498db',
                    'data' => $values,
                ],
            ],
        ]);
        $chart->setOptions([
            'scales' => [
                'yAxes' => [
                    [
                        'ticks' => [
                            'beginAtZero' => true,
                        ],
                    ],
                ],
            ],
        ]);

        return $this->render('chartjs/index.html.twig', [
            'chart' => $chart,
        ]);
    }
}
   
  /*   public function artistStatistique(ChartBuilderInterface $chartBuilder, MusicRepository $musicRepository): Response
    {
        $musicResults = $musicRepository->findAll();

        $labels = [];
        $data = [];

        foreach ($musicResults as $musicResult) {
            $labels[] = $musicResult->getNomMorceaux();
            $data[] = $musicResult->getNomMorceaux();
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'My First dataset',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $data,
                ],
            ],
        ]);
        
        $chart->setOptions([]);

        return $this->render('chartjs/index.html.twig', [
            'controller_name' => 'ChartjsController',
            'chart' => $chart,
        ]);
    }
}
  
  
  
  
  
  
  
  
  
  
        /*      $musicResults = $musicRepository->findAll();

        $labels = [];
        $data = [];

        foreach ($musicResults as $musicResult) {
            $labels[] = $musicResult->getNomMorceaux();
            $data[] = $musicResult->getNomArtiste();
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'My First dataset',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $data,
                ],
            ],
        ]);
        
        $chart->setOptions([]);

        return $this->render('chartjs/index.html.twig', [
            'controller_name' => 'ChartjsController',
            'chart' => $chart,
        ]);*/
 

