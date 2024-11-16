<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TemplateController extends AbstractController
{
    #[Route('/dammy', name: 'app_dammy')]
    public function index(): Response
    {
        return $this->render('dammy/index.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }
}
