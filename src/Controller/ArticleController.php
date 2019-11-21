<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class ArticleController extends AbstractController
{
    /**
     * @Route("/article",name="article")
     */
    public function ArticlelList()
    {
        return $this->render('articlel.html.twig');
    }
}

?>