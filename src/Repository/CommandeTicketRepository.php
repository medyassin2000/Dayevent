<?php

namespace App\Repository;

use App\Entity\CommandeTicket;
use App\Entity\PropertySearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
//use Doctrine\DBAL\Query;

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

    public function search($query)
{
    return $this->createQueryBuilder('ct')
        ->where('ct.nomEvenement LIKE :query')
        ->orWhere('ct.prix LIKE :query')
        ->setParameter('query', '%'.$query.'%')
        ->orderBy('ct.nomEvenement', 'ASC')
        ->getQuery()
        ->getResult();
}

    /*public function search($nomEvenement, $prix)
    {
        $qb = $this->createQueryBuilder('ct');

        if ($nomEvenement) {
            $qb->andWhere('ct.nomEvenement LIKE :nomEvenement')
                ->setParameter('nomEvenement', '%'.$nomEvenement.'%');
        }

        if ($prix) {
            $qb->andWhere('ct.prix = :prix')
                ->setParameter('prix', $prix);
        }

        return $qb->getQuery()->getResult();
    }*/

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