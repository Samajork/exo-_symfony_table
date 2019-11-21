<?php


    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    class AccueilController extends AbstractController
    {


        /**
         * Commentaire qui est une annotation et qui permet de créer une
         * url "/accueil" qui appelle la méthode "Accueil"
         * @Route("/twig_accueil",name="twig_accueil")
         */
        public function TwigAccueil()
        {
            return $this->render('accueil.html.twig');
        }
    }

