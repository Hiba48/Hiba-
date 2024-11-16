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
   #[Route ('/home/contact/{nom}', name:'app_home_contact')]
    public function contact(string $nom = "Anonyme"):Response 
{
    return new Response (content:"Welcom to contact ".$nom);
}
   #[Route ('/about/{entier}', name:'app_about' , requirements:['entier'=> '\d+'])]
    public function about(string $entier): Response
 {
    return new Response(content:"Hello". $entier );
 }    
}
 
