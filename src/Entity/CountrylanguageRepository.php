<?php

namespace App\Entity;

use App\Entity\Countrylanguage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Countrylanguage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Countrylanguage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Countrylanguage[]    findAll()
 * @method Countrylanguage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CountrylanguageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Countrylanguage::class);
    }

    // /**
    //  * @return Countrylanguage[] Returns an array of Countrylanguage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Countrylanguage
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
