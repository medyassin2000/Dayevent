<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    /**
     * Search for reclamations based on given criteria.
     *
     * @param array $criteria
     * @return Reclamation[]
     */
    public function findByFilters($searchTerm = null, array $orderBy = null, $limit = null, $offset = null): array
{
    $queryBuilder = $this->createQueryBuilder('r');

    // Apply search term filter
    if (!empty($searchTerm)) {
        $queryBuilder
            ->andWhere('r.titre LIKE :searchTerm OR r.description LIKE :searchTerm OR r.tel LIKE :searchTerm OR r.dateRec LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%');
    }

    // Apply order by clause
    if ($orderBy !== null) {
        foreach ($orderBy as $field => $direction) {
            $queryBuilder->orderBy('r.' . $field, $direction);
        }
    }

    // Apply limit and offset clauses
    if ($limit !== null) {
        $queryBuilder->setMaxResults($limit);
    }

    if ($offset !== null) {
        $queryBuilder->setFirstResult($offset);
    }

    return $queryBuilder->getQuery()->getResult();
}


    
    /**
     * Find all reclamations.
     *
     * @return Reclamation[]
     */
    public function findAll(): array
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.dateRec', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
    public function findAllstat():array
    {
        return $this->createQueryBuilder('r')
        ->select('YEAR(r.dateRec) AS annee, COUNT(r.idRec) AS total_reclamations')
        ->groupBy ('annee')
        ->getQuery()
        ->getResult();
    } 

    public function findtotal():int
    {
        return $this->createQueryBuilder('r')
            ->select('COUNT(r.idRec) AS total') 
            ->getQuery()
            ->getSingleScalarResult();
    }
}
