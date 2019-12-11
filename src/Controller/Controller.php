<?php

namespace App\Controller;

use App\Entity\Stadgegevens;
use App\Entity\ZwolleGegevens;
use App\Repository\ZwolleGegevensRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


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
    public function home(Request $request, ZwolleGegevensRepository $zwolleGegevensRepository)
    {
        $ZwolleGegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findAll();

        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('handleSearch'))
            ->add('Zoek', TextType::class, ['label' => 'Zoek bedrijven op naam, adres of branche...'])
            ->add('submit', SubmitType::class, ['label' => 'Zoek'])
            ->getForm()
        ;

        $zoek = $request->request->get('form')['Zoek'];
        if ($zoek) {
            $ZwolleGegevens = $zwolleGegevensRepository->finditemsByName($zoek);
        }

        return $this->render('home/homepage.html.twig', [
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
