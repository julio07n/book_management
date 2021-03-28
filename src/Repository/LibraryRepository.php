<?php

namespace App\Repository;

use App\Entity\Library;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method Library|null find($id, $lockMode = null, $lockVersion = null)
 * @method Library|null findOneBy(array $criteria, array $orderBy = null)
 * @method Library[]    findAll()
 * @method Library[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LibraryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Library::class);
    }

    public function findAllArray(): array
    {
        $entityManager = $this->getEntityManager();

        $dql = 'SELECT l FROM App\Entity\Library l ORDER BY l.id ASC'; 
        $query = $entityManager->createQuery($dql);
         
        return $query->getResult(Query::HYDRATE_ARRAY);
    }
}
