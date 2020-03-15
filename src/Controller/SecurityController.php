<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(){
        return $this -> render('security/login.html.twig', []);
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
