<?php

namespace App\Repository;

use App\Entity\Txt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Txt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Txt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Txt[]    findAll()
 * @method Txt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TxtRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Txt::class);
    }

    // /**
    //  * @return Txt[] Returns an array of Txt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Txt
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
