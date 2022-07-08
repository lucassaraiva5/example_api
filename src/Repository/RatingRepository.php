<?php

namespace App\Repository;

use App\Entity\Ratings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ratings>
 *
 * @method Ratings|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ratings|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ratings[]    findAll()
 * @method Ratings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ratings::class);
    }
}
