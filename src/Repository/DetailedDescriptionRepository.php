<?php

namespace App\Repository;

use App\Entity\DetailedDescription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetailedDescription>
 *
 * @method DetailedDescription|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailedDescription|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailedDescription[]    findAll()
 * @method DetailedDescription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailedDescriptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailedDescription::class);
    }

//    /**
//     * @return DetailedDescription[] Returns an array of DetailedDescription objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DetailedDescription
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
