<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/at1',name:'at1')]
class CalculController extends AbstractController
{
    #[Route('/', name: '_hr')]
    public function index(): Response
    {
        //$url=$this->generateUrl('blog_article',['id'=>7,'name'=>'Anguler']);
        //return $this->redirect($url);
        //return $this->render('blog/index.html.twig');
        return $this->redirectToRoute('somme',['a'=>7,'b'=>8]);
    }
    #[Route('/somme/{a<\d+>}/{b<\d+>}', name: '_somme')]
    public function somme($a,$b): Response
    {
        
        return $this->render('calcul/somme.html.twig', [
            'a' => $a,'b'=>$b,
        ]);

    }
    #[Route('/moi/{a<\d+>}/{b<\d+>}', name: '_somme')]
    public function moi($a,$b): Response
    {
        
        return $this->render('calcul/moi.html.twig', [
            'a' => $a,'b'=>$b,
        ]);

    }
}

