<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
	public function __construct(UserPasswordEncoderInterface $encoder)
	{
		$this->encoder = $encoder;
	}

    public function load(ObjectManager $manager)
    {
    	$user = new User();
    	$user->setName('Julio');
    	$user->setUsername('admin');
      	$user->setPassword( $this->encoder->encodePassword($user, '12312312') );
    	$user->setRoles(['ROLE_ADMIN']);
    	$user->setCreatedAt(new \Datetime());
    	$manager->persist($user);

		$user = new User();
    	$user->setName('Cesar');
    	$user->setUsername('user_cesar');
      	$user->setPassword( $this->encoder->encodePassword($user, '12312312') );
    	$user->setRoles(['ROLE_LIBRARIAN']);
    	$user->setCreatedAt(new \Datetime());
    	$manager->persist($user);

        $manager->flush();
    }
}
