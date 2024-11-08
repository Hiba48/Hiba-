<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeContollerController extends AbstractController
{
    #[Route('/home/contoller', name: 'app_home_contoller')]
    public function index(): Response
    {
       return new Response(content: "Hello World !");
    }
#[Route ('/home/contact', name:'app_home_contact')]
public function contact():Response 
{
    return new Response (content:"Welcom to contact ");
}    
}
 