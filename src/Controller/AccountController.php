<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\ZwolleGegevens;
use App\Form\ZwolleGegevensType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @IsGranted("ROLE_USER")
 */
class AccountController extends AbstractController
{
    /**
     * @Route("/account", name="app_account")
     */
    public function index(Request $request, UserInterface $user)
    {
        $em = $this->getDoctrine()->getManager();
        $repoArticles = $em->getRepository(ZwolleGegevens::class);

        $zwollegegevens = $repoArticles->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();


        $userId = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $aanmeld = new ZwolleGegevens();

        $form = $this->createForm(ZwolleGegevensType::class, $aanmeld);
        $form->get('gebruikersid')->setData($userId);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($aanmeld);
            $em->flush();

            return $this->redirectToRoute('app_account');

        }
            return $this->render('account/index.html.twig', [
                'form' => $form->createView(),
                'zwollegegevens' => $zwollegegevens

        ]);
    }

    /**
     * @Route("/show", name="app_show")
     */
    public function show(UserInterface $user)
    {
        $userId = $user->getId();
        $ZwolleGegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->
        findBy(
            array('gebruikersid' => $userId),
            array('id'=>'DESC')
        );
        return $this->render('account/show.html.twig', [
            'ZwolleGegevens' => $ZwolleGegevens
        ]);
    }
}
