<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class SocialController extends AbstractController
{
    /**
     * @Route("/twig_contact",name="twig_contact")
     */
    public function ContactController()
    {
        return $this->render('contact.html.twig');
        $title = 'contact de formulaire';




    }

    /**
     * @Route("/twig_profil",name="twig_profil")
     */
    public function ProfilController()
    {
        return $this->render('profil.html.twig');




    }
}