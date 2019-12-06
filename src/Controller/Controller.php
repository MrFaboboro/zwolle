<?php

namespace App\Controller;

use App\Entity\Stadgegevens;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


class Controller extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
//
        return $this->render('dashboard.html.twig', [
            'controller_name' => 'Controller',
        ]);
    }
}