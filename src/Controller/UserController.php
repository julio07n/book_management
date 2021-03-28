<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;


/** @Route("/user") */
class UserController extends AbstractController
{
    private $encoder;
    private $translator;

    public function __construct(UserPasswordEncoderInterface $encoder, TranslatorInterface $translator)
    {
        $this->encoder = $encoder;
        $this->translator = $translator;
    }

    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig');
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = new User();

        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository(User::class);

        $optionsForm = [ 'action' => $this->generateUrl('user_new'),
                         'method' => 'post',
                         'roles' => $repository->getRoles() ];

 
        if( $request->request->has('user') )        
            $optionsForm['role_selected'] = $request->request->get('user')['roles'];


        $form = $this->createForm(UserType::class, $user, $optionsForm);
        $form->handleRequest($request);

 
        if ($form->isSubmitted() && $form->isValid()) {

            $role = $request->request->get('user')['roles'];
            $data = $form->getData();   
            
            $user->setName($data->getName());
            $user->setUsername($data->getUsername());
            $user->setPassword( $this->encoder->encodePassword($user, $data->getPassword() ) );
            $user->setRoles([$role]);
            $user->setCreatedAt(new \Datetime());
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.created_success'));

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository(User::class);
 
        $optionsForm = [ 'roles' => $repository->getRoles() ];

        if( $request->request->has('user') )        
            $optionsForm['role_selected'] = $request->request->get('user')['roles'];
        else
            $optionsForm['role_selected'] = $user->getRoles()[0];

        $form = $this->createForm(UserType::class, $user, $optionsForm);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $role = $request->request->get('user')['roles'];
            $data = $form->getData();   

            $user->setName($data->getName());
            $user->setUsername($data->getUsername());
            $user->setPassword( $this->encoder->encodePassword($user, $data->getPassword() ) );
            $user->setRoles([$role]);
            $user->setCreatedAt($user->getCreatedAt());
            $user->setUpdatedAt(new \Datetime());
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.edited_success'));

            return $this->redirectToRoute('user_index');
        }


        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="user_delete")
     */
    public function delete(Request $request, User $user): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', $this->translator->trans('admin.deleted_success'));

        return $this->redirectToRoute('user_index');
    }


    /**
     * @Route("/data-list", name="user_data_list")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function dataList(UserRepository $userRepository): JsonResponse
    {      
        $result = $userRepository->findAllArray();

        if(!empty($result))
        {
            foreach ($result as $key => &$value) 
            {
                $value['createdAt'] = $value['createdAt']->format('d/m/Y');
                $value['updatedAt'] = $value['updatedAt'] ? $value['updatedAt']->format('d/m/Y') : '';
                $value['roles'] = unserialize($value['roles'])[0];
            }
        }   

        return new JsonResponse(['data' => $result]);
    }

}
