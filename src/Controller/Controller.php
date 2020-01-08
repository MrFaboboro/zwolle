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
    public function home()
    {
        $ZwolleGegevens = $this->getDoctrine()->getRepository(Zwollebackuptest::class)->findAll();
//
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('Zoek', TextType::class, [
                'label' => false,
            ])
            ->getForm()
        ;

//        $zoek = $request->request->get('form')['Zoek'];
//        if ($zoek) {
//            $ZwolleGegevens = $zwollebackuptestrepository->finditemsByName($zoek);
//        }

        return $this->render('home/homepage.html.twig', [
            'form' => $form->createView()
        ]);
    }



    /**
     * @Route("/home/handleSearch", name="handleSearch")
     */
    public function handleSearch(Request $request, ZwollebackuptestRepository $zwollebackuptestrepository)
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('Zoek', TextType::class, ['label' => false,])
            ->add('submit', SubmitType::class, ['label' => 'Zoek'])
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
