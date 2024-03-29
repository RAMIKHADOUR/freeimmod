<?php

namespace App\Repository;

use App\Entity\TypeProperty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeProperty>
 *
 * @method TypeProperty|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeProperty|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeProperty[]    findAll()
 * @method TypeProperty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypePropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeProperty::class);
    }

//    /**
//     * @return TypeProperty[] Returns an array of TypeProperty objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeProperty
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
