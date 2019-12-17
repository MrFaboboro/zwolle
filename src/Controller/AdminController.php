<?php

namespace App\Controller;

use App\Entity\ZwolleGegevens;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * Class AdminController
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @IsGranted("ROLE_ADMIN")
     */
    public function index()
    {
        if($this->getUser()->hasRole('ROLE_ADMIN'))
            return $this->redirect($this->generateUrl('admin_area'));
        elseif($this->getUser()->hasRole('ROLE_USER'))
            return $this->redirect($this->generateUrl('client_area'));

        # alle database gegevens
        $em = $this->getDoctrine()->getManager();
        $repoArticles = $em->getRepository(ZwolleGegevens::class);
        $zwollegegevens = $repoArticles->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();

        $table = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findAll();


        return $this->render('admin/dashboard.html.twig', [
            'zwollegegevens' => $zwollegegevens,
            'table' => $table
    ]);
    }
}
