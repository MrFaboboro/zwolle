<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\AbstractType;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(AuthenticationUtils $authenticationUtils, Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $em = $this->getDoctrine()->getManager();
        $aanmeld = new User();

        $form = $this->createForm(UserType::class, $aanmeld);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($aanmeld, $aanmeld->getPassword());
            $aanmeld->setPassword($password);


            $em->persist($aanmeld);
            $em->flush();

            $this->addFlash('succes', 'Aanmelding succesvol!');

            return $this->redirectToRoute('app_login');
        }



        return $this->render('security/register.html.twig', [
            'error' => $error,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
       return $this->render('home');
    }
}
