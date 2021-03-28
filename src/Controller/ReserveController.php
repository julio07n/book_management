<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use App\Entity\Library;
use App\Entity\Loan;
use App\Entity\Book;
use App\Form\LoanType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\Translation\TranslatorInterface;


/** @Route("/reserve", name="reserve_") */
class ReserveController extends AbstractController
{
    private $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @Route("/new", name="new")
     * @Security("has_role('ROLE_LIBRARIAN')")
     */
    public function index(Request $request): Response
    {    	
        $entityManager = $this->getDoctrine()->getManager();
 
        $loan = new Loan();  

        $optionsForm = [ 'action' => $this->generateUrl('reserve_new'),
                         'method' => 'post'];

        if( $request->request->has('loan') )        
            $optionsForm['library_selected'] = $request->request->get('loan')['library'];

 
        $form = $this->createForm(LoanType::class, $loan, $optionsForm);

        if ($request->isMethod('POST')) {

            $form->submit($request->request->get($form->getName()));

            if ($form->isSubmitted() && $form->isValid()) {

                $data = $form->getData();   
                $repository = $entityManager->getRepository(Book::class);
                
                $book_id = $request->request->get('loan')['book'];
                $book = $repository->find($book_id);
                $bookTitle = $book->getTitle();

                if($this->bookIsReserved($book_id))
                { 
                    $this->forward('App\Controller\NotificationController::bookNotAvailable', [
                        'bookTitle'  => $bookTitle
                    ]);


                    $this->addFlash('error', $this->translator->trans('reserve.book_reserved'));

                    return $this->render('reserve/index.html.twig',[
                        'form' => $form->createView()
                    ]);
                }  

                $loan = new Loan();
                $loan->setBook($book);
                $loan->setName($data->getName());
                $loan->setEmail($data->getEmail());
                $loan->setLanguage($data->getLanguage());
                $loan->setcreatedBy($this->getUser());
                $loan->setcreatedAt(new \Datetime());
                $entityManager->persist($loan);
                $entityManager->flush();
          
                $this->forward('App\Controller\NotificationController::bookSuccessfullyReserved', [
                    'bookTitle' => $bookTitle,
                    'to' => $data->getEmail(),
                    'lang' => $data->getLanguage(),
                ]);


                $this->addFlash('success', $this->translator->trans('reserve.success'));

                return $this->redirectToRoute('reserve_new');
            }
        }

        return $this->render('reserve/index.html.twig',[
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/list", name="list")
     * @Security("has_role('ROLE_LIBRARIAN')")
     */
    public function list(): Response
    {       
        $entityManager = $this->getDoctrine()->getManager();

        $query = $entityManager->createQuery('SELECT l FROM App\Entity\Library l');
        $data = $query->getResult();

        return $this->render('reserve/list.html.twig', [
            'data' => $data,
        ]);
    }


    /**
     * @Route("/delete/{id}", name="delete", methods={"GET"})
     * @Security("has_role('ROLE_LIBRARIAN')")
     */
    public function delete(int $id): Response
    {      
        $entityManager = $this->getDoctrine()->getManager();
        $loan = $entityManager->getRepository(Loan::class)->find($id);

        if (!$loan) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $entityManager->remove($loan);
        $entityManager->flush();

        $this->addFlash('success', $this->translator->trans('reserve.delete'));

        return $this->redirectToRoute('reserve_list');
    }


    /**
     * @Route("/data-list", name="data_list")
     * @Security("has_role('ROLE_LIBRARIAN')")
     */
    public function dataList(): JsonResponse
    {      
        $user_id = $this->getUser()->getId();        
        
        $entityManager = $this->getDoctrine()->getManager();        
        $result = $entityManager->getRepository(Loan::class)->findReserved($user_id);

        return new JsonResponse(['data' => $result]);
    }
    

    private function bookIsReserved($book_id): bool
    {
        $entityManager = $this->getDoctrine()->getManager();        
        
        return $entityManager->getRepository(Book::class)->isReserved($book_id);        
    }
}
