<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test4', name: 'app_test',priority:1)]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route('/article/{id<\d{1,3}>?1}', name: 'app_article',priority:2)]//d+ dicimal + n ou plusieur chifre d{le nombre de chiffre} valeur par défaut priority:1 prioriter de router s
    public function article_show($id):Response
    {
        return $this->render('test/article_show.html.twig',['identifiant'=>$id]);
    }
    #[Route('/article/findAll', name: 'app_article_findAll')]//d+ dicimal + n ou plusieur chifre d{le nombre de chiffre} valeur par défaut priority:1 prioriter de router s
    public function findAll(Request $requset)
    {
        dd($requset->get('_controller'));
    }

}
