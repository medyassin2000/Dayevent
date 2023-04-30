<?php

namespace App\Repository;

use App\Entity\CategorieInstrument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CategorieInstrument>
 *
 * @method CategorieInstrument|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieInstrument|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieInstrument[]    findAll()
 * @method CategorieInstrument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieInstrumentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieInstrument::class);
    }

    public function save(CategorieInstrument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CategorieInstrument $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function searchBynom($query)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.nomCategorie LIKE :query')

            ->setParameter('query', '%' . $query . '%')
            ->orderBy('c.nomCategorie', 'ASC')
            ->getQuery()
            ->getResult();
    }



//    /**
//     * @return CategorieInstrument[] Returns an array of CategorieInstrument objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CategorieInstrument
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
