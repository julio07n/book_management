<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Library;
use App\Entity\Book;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	$library = new Library();
    	$library->setName('Poema épico griego');
    	$library->setCreatedAt(new \Datetime());
    	$manager->persist($library);


    	$book = new Book();
    	$book->setTitle('La Iiada');
    	$book->setLibrary($library);
    	$book->setCreatedAt(new \Datetime());
    	$manager->persist($book);


    	$library = new Library();
    	$library->setName('Novela');
    	$library->setCreatedAt(new \Datetime());
    	$manager->persist($library);


    	$book = new Book();
    	$book->setTitle('El retrato de Dorian Gray');
    	$book->setLibrary($library);
    	$book->setCreatedAt(new \Datetime());
    	$manager->persist($book);

    	$manager->flush();
    }
}
