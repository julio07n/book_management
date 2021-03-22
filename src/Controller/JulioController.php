<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JulioController extends AbstractController
{
    /**
     * @Route("/julio", name="julio")
     */
    public function index(): Response
    {
        return $this->render('julio/index.html.twig', [
            'controller_name' => 'JulioController',
        ]);
    }
}
