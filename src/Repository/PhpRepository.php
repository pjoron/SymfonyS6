<?php

namespace App\Repository;

use App\Entity\Php;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Php>
 *
 * @method Php|null find($id, $lockMode = null, $lockVersion = null)
 * @method Php|null findOneBy(array $criteria, array $orderBy = null)
 * @method Php[]    findAll()
 * @method Php[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Php::class);
    }

//    /**
//     * @return Php[] Returns an array of Php objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Php
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
