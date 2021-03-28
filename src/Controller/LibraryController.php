<?php

namespace App\Controller;

use App\Entity\Library;
use App\Form\LibraryType;
use App\Repository\LibraryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @Route("/library")
 */
class LibraryController extends AbstractController
{
    private $encoder;
    private $translator;

    public function __construct(UserPasswordEncoderInterface $encoder, TranslatorInterface $translator)
    {
        $this->encoder = $encoder;
        $this->translator = $translator;
    }

    /**
     * @Route("/", name="library_index", methods={"GET"})
     */
    public function index(LibraryRepository $libraryRepository): Response
    {
        return $this->render('library/index.html.twig');
    }

    /**
     * @Route("/new", name="library_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $library = new Library();
        $form = $this->createForm(LibraryType::class, $library);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();   
            $entityManager = $this->getDoctrine()->getManager();

            $library->setName($data->getName());
            $library->setCreatedAt(new \Datetime());
            $entityManager->persist($library);
            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.created_success'));

            return $this->redirectToRoute('library_index');
        }

        return $this->render('library/new.html.twig', [
            'library' => $library,
            'form' => $form->createView(),
        ]);
    }
 
    /**
     * @Route("/{id}/edit", name="library_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Library $library): Response
    {
        $form = $this->createForm(LibraryType::class, $library);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                    
            $data = $form->getData();   
            $entityManager = $this->getDoctrine()->getManager();

            $library->setName($data->getName());
            $library->setUpdatedAt(new \Datetime());
            $entityManager->persist($library);
            $entityManager->flush();

            $this->addFlash('success', $this->translator->trans('admin.edited_success'));

            return $this->redirectToRoute('library_index');
        }

        return $this->render('library/edit.html.twig', [
            'library' => $library,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="library_delete")
     */
    public function delete(Request $request, Library $library): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($library);
        $entityManager->flush();
      
        $this->addFlash('success', $this->translator->trans('admin.deleted_success'));

        return $this->redirectToRoute('library_index');
    }

    /**
     * @Route("/data-list", name="library_data_list")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function dataList(LibraryRepository $libraryRepository): JsonResponse
    {      
        $result = $libraryRepository->findAllArray();

        if(!empty($result))
            $result = $this->formatDataList($result);  

        return new JsonResponse(['data' => $result]);
    }

    /**
     * @Route("/csv", name="csv")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function csv(LibraryRepository $libraryRepository) :void
    {      
        $serializer = $this->container->get('serializer');

        $result = $libraryRepository->findAllArray();

        if(!empty($result))
            $result = $this->formatDataList($result);  

        $filename = 'library_list_' . date("Y-m-d") . '.csv';

        file_put_contents(
            $filename,
            $this->container->get('serializer')->encode($result, 'csv')
        );

        $content = file_get_contents($filename, true);

        header('Content-type: application/x-download');
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        header('Content-Transfer-Encoding: binary');
        echo $content;

        exit();
    }

    private function formatDataList(array $result) : array
    {
        foreach ($result as $key => &$value) 
        {
            $value['createdAt'] = $value['createdAt']->format('d/m/Y');
            $value['updatedAt'] = $value['updatedAt'] ? $value['updatedAt']->format('d/m/Y') : '';
        }

        return $result;
    }
}
