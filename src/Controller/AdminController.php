<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


use App\Entity \User;

class AdminController extends AbstractController
{
 
    /**
     * @Route("/admin", name="admin")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function index(UserPasswordEncoderInterface $encoder, MailerInterface $mailer): Response
    {

   /*
    	$em = $this->getDoctrine()->getManager();
    
   

        $user = new User();
    	$user->setName('Julio Cesar');
    	$user->setUsername('admin1');
    	$user->setPassword( $encoder->encodePassword($user, '12312312') );


    	$user->setRoles(['ROLE_ADMIN']);
    	$user->setCreateAt(  new \Datetime() );
    	$em->persist($user);
        $em->flush();
*/



      $email = (new Email())
            ->from('julio_tell35@hotmail.com')
            ->to('julio_tell35@hotmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);


        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
