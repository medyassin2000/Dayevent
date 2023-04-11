<?php

namespace App\Repository;

use App\Entity\CommandeInstruments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeInstruments>
 *
 * @method CommandeInstruments|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeInstruments|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeInstruments[]    findAll()
 * @method CommandeInstruments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeInstrumentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeInstruments::class);
    }

    public function save(CommandeInstruments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CommandeInstruments $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CommandeInstruments[] Returns an array of CommandeInstruments objects
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

//    public function findOneBySomeField($value): ?CommandeInstruments
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
