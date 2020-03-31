<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $auth){
        $lastUsername = $auth -> getLastUsername();
        $error = $auth -> getLastAuthenticationError();

        if($error){
            $this -> addFlash('errors', 'Problème d\'identifiant');
        }

        return $this -> render('security/login.html.twig', [
            'lastUsername' => $lastUsername
        ]);
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheck(){}

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){}



}
