<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class StatistiqueService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getReclamationsParAnnee()
    {
        $conn = $this->entityManager->getConnection();

        $sql = 'SELECT YEAR(date_rec) AS annee, COUNT(*) AS total_reclamations
                FROM reclamation
                GROUP BY YEAR(date_rec)';

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();

        $totalReclamations = 0;
        foreach ($results as $result) {
            $totalReclamations += $result['total_reclamations'];
        }

        foreach ($results as &$result) {
            $percentage = ($result['total_reclamations'] / $totalReclamations) * 100;
            $result['percentage'] = $percentage;
        }

        return $results;
    }
}
