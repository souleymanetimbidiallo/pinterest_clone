<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/")
     */ 
    public function index(): Response
    {
        //return $this->json(['message' => 'Hello World',]);

        //return new Response('<h1>Hello World</h1>');

        return $this->render('pins/index.html.twig');
    }
}
