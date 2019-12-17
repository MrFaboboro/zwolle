<?php

namespace App\Repository;

use App\Entity\Zwollebackuptest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Zwollebackuptest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zwollebackuptest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zwollebackuptest[]    findAll()
 * @method Zwollebackuptest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZwollebackuptestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Zwollebackuptest::class);
    }

    public function finditemByName(string $zoek)
    {
        $qb = $this->createQueryBuilder('b');
        $qb
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->orX(
                        $qb->expr()->like('b.add1', ':Zoek'),
                        $qb->expr()->like('b.pc', ':Zoek'),
                        $qb->expr()->like('b.org ', ':Zoek'),
                        $qb->expr()->like('b.desc', ':Zoek'),
                        $qb->expr()->like('b.desc1', ':Zoek')

                    )
//                    $qb->expr()->isNotNull('b.desc1')
                )
            )
            ->setParameter('Zoek', '%' . $zoek . '%')
        ;
        return $qb
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Zwollebackuptest[] Returns an array of Zwollebackuptest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('z.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }


    */

    /*
    public function findOneBySomeField($value): ?Zwollebackuptest
    {
        return $this->createQueryBuilder('z')
            ->andWhere('z.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
