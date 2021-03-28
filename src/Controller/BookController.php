<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
/**
 * @Route("/book")
 */
class BookController extends AbstractController
{
    private $encoder;
    private $translator;

    public function __construct(UserPasswordEncoderInterface $encoder, TranslatorInterface $translator)
    {
        $this->encoder = $encoder;
        $this->translator = $translator;
    }


    /**
     * @Route("/", name="book_index", methods={"GET"})
     */
    public function index(BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig');
    }

    /**
     * @Route("/new", name="book_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();   
            $entityManager = $this->getDoctrine()->getManager();

            $book->setLibrary($data->getLibrary());
            $book->setTitle($data->getTitle());
            $book->setCreatedAt(new \Datetime());
            $entityManager->persist($book);
            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.created_success'));

            return $this->redirectToRoute('book_index');
        }

        return $this->render('book/new.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="book_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Book $book): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
    
            $data = $form->getData();   
            $entityManager = $this->getDoctrine()->getManager();

            $book->setTitle($data->getTitle());
            $book->setUpdatedAt(new \Datetime());
            $entityManager->persist($book);
            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.edited_success'));


            return $this->redirectToRoute('book_index');
        }

        return $this->render('book/edit.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="book_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Book $book): Response
    {
        if ($this->isCsrfTokenValid('delete'.$book->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($book);
            $entityManager->flush();
        }

        return $this->redirectToRoute('book_index');
    }

    /**
     * @Route("/data-list", name="book_data_list")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function dataList(BookRepository $bookRepository): JsonResponse
    {      
        $result = $bookRepository->findAllArray();

        if(!empty($result))
        {
            foreach ($result as $key => &$value) 
            {
                $value['library'] = $value['library']['name'];
                $value['createdAt'] = $value['createdAt']->format('d/m/Y');
                $value['updatedAt'] = $value['updatedAt'] ? $value['updatedAt']->format('d/m/Y') : '';
            }
        }   

        return new JsonResponse(['data' => $result]);
    }


    /**
     * @Route("/list/", name="book_list", methods={"POST"})
     */
    public function listBook(Request $request): Response
    {      
      $user_id = $this->getUser()->getId();
      $library_id = $request->request->get('lib_id');
      $entityManager = $this->getDoctrine()->getManager();
      $result = $entityManager->getRepository(Book::class)->findByLibraryId($library_id, $user_id);

      return new JsonResponse($result);
    }
}
