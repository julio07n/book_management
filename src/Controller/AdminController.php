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
    public function index(UserPasswordEncoderInterface $encoder): Response
    {

    }
}
