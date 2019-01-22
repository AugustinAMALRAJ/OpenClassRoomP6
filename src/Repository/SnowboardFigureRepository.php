<?php

namespace App\Repository;

use App\Entity\SnowboardFigure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SnowboardFigure|null find($id, $lockMode = null, $lockVersion = null)
 * @method SnowboardFigure|null findOneBy(array $criteria, array $orderBy = null)
 * @method SnowboardFigure[]    findAll()
 * @method SnowboardFigure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SnowboardFigureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SnowboardFigure::class);
    }

    // /**
    //  * @return SnowboardFigure[] Returns an array of SnowboardFigure objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SnowboardFigure
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
