<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/blog',name:'blog')]
class BlogController extends AbstractController
{
    #[Route('/', name: '_home')]
    public function index(): Response
    {
        //$url=$this->generateUrl('blog_article',['id'=>7,'name'=>'Anguler']);
        //return $this->redirect($url);
        //return $this->render('blog/index.html.twig');
        return $this->redirectToRoute('blog_article',['id'=>7,'name'=>'Anguler']);
    }
    #[Route('/article/{id<\d+>}/{name<[a-z A-Z 0-9]+>}', name: '_article')]
    public function article($id,$name): Response
    {
        
        return $this->render('blog/article_detaille.html.twig', [
            'id' => $id,'name'=>$name,
        ]);

    }
}
