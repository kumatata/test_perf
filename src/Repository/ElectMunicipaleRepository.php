<?php

namespace App\Repository;

use App\Entity\ElectMunicipale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ElectMunicipale|null find($id, $lockMode = null, $lockVersion = null)
 * @method ElectMunicipale|null findOneBy(array $criteria, array $orderBy = null)
 * @method ElectMunicipale[]    findAll()
 * @method ElectMunicipale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElectMunicipaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ElectMunicipale::class);
    }

    // /**
    //  * @return ElectMunicipale[] Returns an array of ElectMunicipale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ElectMunicipale
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
