<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\ZwolleGegevens;
use App\Form\UserType;
use App\Form\ZwolleGegevensType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
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
        $userId = $user->getId();
        $zwollegegevens = $this->getDoctrine()->getRepository(User::class)->
        findBy(
            array('id' => $userId)
        );

        $em = $this->getDoctrine()->getManager();
        $aanmeld = new ZwolleGegevens();

//        $form = $this->createForm(ZwolleGegevensType::class, $aanmeld);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $em->persist($aanmeld);
//            $em->flush();
//
//            return $this->redirectToRoute('app_account');


            return $this->render('account/index.html.twig', [
                'zwollegegevens' => $zwollegegevens

        ]);
    }


    /**
     * @Route("/bedrijf`/{slug}", name="app_show")
     */
    public function show(UserInterface $user)
    {
        $userId = $user->getId();
        $ZwolleGegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->
        findBy(
            array('gebruikersid' => $userId),
            array('id'=>'DESC'),
            1,
            0);
        return $this->render('account/show.html.twig', [
            'ZwolleGegevens' => $ZwolleGegevens
        ]);
    }

    /**
     * @Route("/account/bedrijven", name="bedrijven")
     */
    public function bedrijven(UserInterface $user)
    {
        $userId = $user->getId();
        $ZwolleGegevens = $this->getDoctrine()->getRepository(ZwolleGegevens::class)->
        findBy(
            array('gebruikersid' => $userId),
            array('id'=>'DESC')
        );
        return $this->render('account/bedrijfoverzicht.html.twig', [
            'ZwolleGegevens' => $ZwolleGegevens
        ]);

    }

    /**
     * @Route("/account/aanmaken", name="bedrijf_aanmaken")
     */
    public function aanmaken(Request $request, UserInterface $user)
    {
        $em = $this->getDoctrine()->getManager();
        $aanmeld = new ZwolleGegevens();
        $userId = $user->getId();

        $form = $this->createForm(ZwolleGegevensType::class, $aanmeld);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($aanmeld);
            $em->flush();

            return $this->redirectToRoute('bedrijven');
        }

        return $this->render('account/aanmaken.html.twig', [
            'form' => $form->createView(),
            'userId' => $userId

        ]);
    }
    /**
     * @Route("/account/update", name="update_user")
     */
    public function userupdate( UserPasswordEncoderInterface $passwordEncoder, Request $request, UserInterface $user)
    {
        $em = $this->getDoctrine()->getManager();
        $aanmeld = new User();
        $userId = $user->getId();
        $voornaam = $user->getVoornaam();
        $achternaam = $user->getAchternaam();

        $logingegevens = $this->getDoctrine()->getRepository(User::class)->
        findBy(
            array('id' => $userId),
            array('id'=>'DESC')
        );

        $form = $this->createForm(UserType::class, $aanmeld);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $gegevens = $form->getData();

            $password = $passwordEncoder->encodePassword($aanmeld, $aanmeld->getPassword());
            $aanmeld->setPassword($password);
            $aanmeld->setUsername('username');
            $aanmeld->setEmail('email');
            $aanmeld->setVoornaam($voornaam);
            $aanmeld->setAchternaam($achternaam);


            $em->persist($aanmeld);
            $em->flush();


        return $this->redirectToRoute('app_account');
    }
        return $this->render('account/update.html.twig', [
            'form' => $form->createView(),
            'userId' => $userId
        ]);
    }

}
