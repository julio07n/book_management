<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;


/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function findAllArray(): array
    {
        $entityManager = $this->getEntityManager();

        $dql = 'SELECT u FROM App\Entity\User u ORDER BY u.id ASC'; 
        $query = $entityManager->createQuery($dql);
         
        return $query->getResult(Query::HYDRATE_ARRAY);
    }

    public function getRoles(): array
    {
        return [ 'ADMIM' => 'ROLE_ADMIN', 'LIBRARIAN' => 'ROLE_LIBRARIAN'];  
    }

}
