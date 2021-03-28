<?php

namespace App\Repository;

use App\Entity\Book;
use App\Entity\Loan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;

/**
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

 
    public function findByLibraryId($library_id, $user_id): array
    {
        $entityManager = $this->getEntityManager();

        $dql = 'SELECT b FROM App\Entity\Book b
                WHERE b.library = :library_id
                AND b.id NOT IN (SELECT b_2.id FROM App\Entity\Loan l JOIN l.book b_2 WHERE  l.createdBy = :user_id)
                ORDER BY b.id ASC'; 
        $query = $entityManager->createQuery($dql)
                ->setParameter('library_id', $library_id)
                ->setParameter('user_id', $user_id);
         
        return $query->getResult(Query::HYDRATE_ARRAY);
    }

    public function isReserved($book_id): bool
    {
        $entityManager = $this->getEntityManager();

        $dql = 'SELECT l FROM App\Entity\Loan l
                WHERE l.book = :book_id'; 
        $query = $entityManager->createQuery($dql)
                ->setParameter('book_id', $book_id);
 
        return !empty($query->getResult());
    }
  

    public function findAllArray(): array
    {
        $entityManager = $this->getEntityManager();

        $dql = 'SELECT b, li FROM App\Entity\Book b JOIN b.library li ORDER BY b.id ASC'; 
        $query = $entityManager->createQuery($dql);
         
        return $query->getResult(Query::HYDRATE_ARRAY);
    }
}
