<?php

namespace App\Repository;

use App\Entity\CatTournois;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CatTournois>
 */
class CatTournoisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CatTournois::class);
    }

    //    /**
    //     * @return CatTournois[] Returns an array of CatTournois objects
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

    //    public function findOneBySomeField($value): ?CatTournois
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findNextAvailableId(): int
    {
        $qb = $this->createQueryBuilder('c');
        $qb->select('MIN(c.id + 1) as next_id')
           ->from('App\Entity\CatTournois', 'c2')
           ->where('c2.id + 1 NOT IN (SELECT c3.id FROM App\Entity\CatTournois c3)');

        $result = $qb->getQuery()->getSingleScalarResult();

        return $result ?: 1;
    }
}
