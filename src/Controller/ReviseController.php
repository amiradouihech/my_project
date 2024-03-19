<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/revise',name:'revise')]
class ReviseController extends AbstractController
{
    #[Route('/', name: '_r1')]
    public function index(): Response
    {
        return $this->redirectToRoute('revise_r2',['mes'=>"amira"]);
    }
    #[Route('/r2/{mes<[a-z A-Z]+>}', name: '_r2')]
    public function es1($mes): Response
    {
        return $this->render('revise/revise.html.twig',['mes'=>$mes]);
    }
}

