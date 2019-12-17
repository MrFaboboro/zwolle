<?php

namespace App\Controller;

use App\Entity\Zwollebackuptest;
use App\Entity\ZwolleGegevens;
use App\Repository\ZwollebackuptestRepository;
use App\Repository\ZwolleGegevensRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



class Controller extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->redirectToRoute('home');
    }


    /**
     * @Route("/home", name="home")
     */
    public function home(Request $request, ZwollebackuptestRepository $zwollebackuptestrepository)
    {
        $ZwolleGegevens = $this->getDoctrine()->getRepository(Zwollebackuptest::class)->findAll();
//
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('Zoek', TextType::class, [
                'required' => true,
                'trim' => true,
                'label' => false,
                'attr' => array('placeholder' => 'Zoek naar bedrijven, branches, postcodes, straatnamen etc...' )
            ])
//            ->add('submit', SubmitType::class, ['label' => 'Zoek'])
            ->getForm()
        ;

        $zoek = $request->request->get('form')['Zoek'];
        if ($zoek) {
            $ZwolleGegevens = $zwollebackuptestrepository->finditemsByName($zoek);
        }

        return $this->render('home/homepage.html.twig', [
            'form' => $form->createView(),
            'ZwolleGegevens' => $ZwolleGegevens
        ]);
    }

    /**
     * @Route("/student/ajax")
     */
    public function ajaxAction(Request $request) {
        $ZwolleGegevens = $this->getDoctrine()
            ->getRepository(Zwollebackuptest::class)
            ->findAll();

        if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
            $jsonData = array();
            $idx = 0;
            foreach($ZwolleGegevens as $ZwolleGegevens) {
                $temp = array(
                    'add1' => $ZwolleGegevens->getadd1(),
                    'pc' => $ZwolleGegevens->getpc(),
                );
                $jsonData[$idx++] = $temp;
            }
            return new JsonResponse($jsonData);
        } else {
            return $this->render('student/ajax.html.twig');
        }
    }

    /**
     * @Route("/home/handleSearch", name="handleSearch")
     */
    public function handleSearch(Request $request, ZwollebackuptestRepository $zwollebackuptestrepository)
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('Zoek', TextType::class, [
                'required' => true,
                'trim' => true,
                'label' => false,
                'attr' => array('placeholder' => 'Zoek naar bedrijven, branches, postcodes, straatnamen etc...' )
            ])
//            ->add('submit', SubmitType::class, ['label' => 'Ga'])
            ->getForm()
        ;

        $zoek = $request->request->get('form')['Zoek'];
        if ($zoek) {
            $ZwolleGegevens = $zwollebackuptestrepository->finditemByName($zoek);
        }

        return $this->render('home/search.html.twig', [
            'form' => $form->createView(),
            'ZwolleGegevens' => $ZwolleGegevens
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        return $this->render('home/test.html.twig');
    }
}
