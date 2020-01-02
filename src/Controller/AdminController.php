<?php

namespace App\Controller;

use App\Entity\ZwolleGegevens;
use App\Form\AcceptType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
        # alle database gegevens
        $em = $this->getDoctrine()->getManager();
        $repoArticles = $em->getRepository(ZwolleGegevens::class);

        $aanmeld = $em->getRepository(ZwolleGegevens::class);
        $gechecked = $aanmeld->createQueryBuilder('a')->select('count(a.gechecked)')->getQuery()->getSingleScalarResult();
        $zwollegegevens = $repoArticles->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();

        $table = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findAll();


        return $this->render('admin/dashboard.html.twig', [
            'zwollegegevens' => $zwollegegevens,
            'table' => $table,
            'gechecked' => $gechecked
    ]);
    }

    /**
     * @Route("/admin/aanmeldingen", name="aanmeldingen")
     */
    public function aanmeldingen()
    {

    $form = new AcceptType();
        $zwollegegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findAll();


        return $this->render('admin/aanmeldingen.html.twig', [
            'zwollegegevens' => $zwollegegevens,
            'form' => $form->createView()
        ]);

    }

    /**
     *  @Route("/admin/aanmeldingen/{slug}", name="show_aanmelding")
     */
    public function show_aanmeld($slug)
    {
        $aanmeld = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->findBy([
            'id' => $slug
        ]);

        return $this->render('admin/aanmeldingshow.html.twig', [
            'aanmeldingen' => $aanmeld
        ]);
    }

}
