<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Entity\Library;


class LibraryController extends AbstractController
{
    /**
     * @Route("/library", name="library")
     * @Security("has_role('ROLE_LIBRARIAN')")
     */
    public function index(): Response
    {    	
        $entityManager = $this->getDoctrine()->getManager();

        $query = $entityManager->createQuery('SELECT l FROM App\Entity\Library l');
        $data = $query->getResult();

        return $this->render('library/index.html.twig', [
            'data' => $data,
        ]);
    }
}
