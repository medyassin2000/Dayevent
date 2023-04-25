<?php

namespace App\Repository;

use App\Entity\CommandeTicket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeTicket>
 *
 * @method CommandeTicket|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeTicket|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeTicket[]    findAll()
 * @method CommandeTicket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeTicketRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeTicket::class);
    }

    public function save(CommandeTicket $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CommandeTicket $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CommandeTicket[] Returns an array of CommandeTicket objects
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

//    public function findOneBySomeField($value): ?CommandeTicket
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    /*public function findByNomEvenementAndPrix($nomEvenement, $prix)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.nomEvenement = :nomEvenement')
            ->andWhere('c.prix = :prix')
            ->setParameter('nomEvenement', $nomEvenement)
            ->setParameter('prix', $prix)
            ->getQuery()
            ->getResult();

    }*/
}