<?php

namespace App\Repository;

use App\Entity\Loan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Loan|null find($id, $lockMode = null, $lockVersion = null)
 * @method Loan|null findOneBy(array $criteria, array $orderBy = null)
 * @method Loan[]    findAll()
 * @method Loan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loan::class);
    }
 
    public function findReserved(int $user_id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "select l.name, l.email, li.name as library_name, b.title as title_book, DATE_FORMAT(l.created_at,'%d/%m/%Y') as date, l.id from loan l
	          inner join book b on b.id = l.book_id
	          inner join library li on li.id = b.library_id
	          where l.`created_by_id`  = :user_id
	          ORDER BY b.title ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['user_id' => $user_id]);

        return $stmt->fetchAll();
    }

    public function findAllReserved(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "select l.name, l.email, li.name as library_name, b.title as title_book, DATE_FORMAT(l.created_at,'%d/%m/%Y') as date,
                DATE_FORMAT( DATE_ADD( l.created_at, INTERVAL 15 DAY) ,'%Y-%m-%d'  ) as date_end,
                l.language
                from loan l
                inner join book b on b.id = l.book_id
                inner join library li on li.id = b.library_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
