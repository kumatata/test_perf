<?php

namespace App\Repository;

use App\Entity\ElecMunicipale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ElecMunicipale|null find($id, $lockMode = null, $lockVersion = null)
 * @method ElecMunicipale|null findOneBy(array $criteria, array $orderBy = null)
 * @method ElecMunicipale[]    findAll()
 * @method ElecMunicipale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ElecMunicipaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ElecMunicipale::class);
    }

    // /**
    //  * @return ElecMunicipale[] Returns an array of ElecMunicipale objects
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
    public function findOneBySomeField($value): ?ElecMunicipale
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
