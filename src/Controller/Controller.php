<?php

namespace App\Controller;

use App\Entity\Stadgegevens;
use App\Entity\ZwolleGegevens;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function home()
    {
        $ZwolleGegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findAll();

        return $this->render('home/homepage.html.twig', [
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
