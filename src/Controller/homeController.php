<?php
namespace App\Controller;
use App\Controller\homeController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class homeController extends AbstractController{
    public function show(){
        return $this->render('home/show.html.twig');
    }
    #[Route('/afficher')]
    public function afficher(){
        dd("Hello bonjour tout le monde !");
        
    }
    #[Route('/test')]
    public function test():Response{
        return new Response("<h1>tout vas bien</h1>");
    }
}