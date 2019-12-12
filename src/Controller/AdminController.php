<?php

namespace App\Controller;

use App\Entity\ZwolleGegevens;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @IsGranted("ROLE_USER")
     */
    public function index()
    {
        # alle database gegevens
        $em = $this->getDoctrine()->getManager();
        $repoArticles = $em->getRepository(ZwolleGegevens::class);
        $zwollegegevens = $repoArticles->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();

        return $this->render('admin/dashboard.html.twig', [
            'zwollegegevens' => $zwollegegevens
    ]);
    }
}
