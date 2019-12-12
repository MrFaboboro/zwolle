<?php
namespace App\Controller;

use App\Entity\ZwolleGegevens;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BedrijfsController extends AbstractController
{
    /**
     * @Route("/home/bedrijf/{slug}", name="bedrijf")
     */
    public function bedrijf($slug)
    {
        $ZwolleGegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findBy([
            'id' => $slug
        ]);

        return $this->render('home/bedrijsinformatie.html.twig',[
            'ZwolleGegevens' => $ZwolleGegevens
        ]);
    }
}