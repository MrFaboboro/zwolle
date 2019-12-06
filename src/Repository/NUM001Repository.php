<?php

namespace App\Repository;

use App\Entity\NUM001;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NUM001|null find($id, $lockMode = null, $lockVersion = null)
 * @method NUM001|null findOneBy(array $criteria, array $orderBy = null)
 * @method NUM001[]    findAll()
 * @method NUM001[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NUM001Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NUM001::class);
    }

    // /**
    //  * @return NUM001[] Returns an array of NUM001 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NUM001
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
