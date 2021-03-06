<?php

namespace App\Repository;

use App\Entity\ZwolleGegevens;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ZwolleGegevens|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZwolleGegevens|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZwolleGegevens[]    findAll()
 * @method ZwolleGegevens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZwolleGegevensRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZwolleGegevens::class);
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

    /**
     * @return zwolle[]
     */
    public function findAllMatching(string $query, int $limit = 5)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.org LIKE :query')
            ->setParameter('query', '%'.$query.'%')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return ZwolleGegevens[] Returns an array of ZwolleGegevens objects
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
    public function findOneBySomeField($value): ?ZwolleGegevens
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
