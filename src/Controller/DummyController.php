<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DummyController extends AbstractController
{
    #[Route(path: '/dummy', name: 'app_dummy')]
    public function index(): Response
    {
        return $this->render('dummy/index.html.twig', [
            'controller_name' => 'DummyController',
        ]);
    }

    #[Route(path: '/news', name: 'app_news')]
    public function news(): Response
    {
        return $this->render('dummy/news.html.twig', [
            'title' => 'News',
            'content' => 'Welcome to the News page!',
        ]);
    }

    #[Route(path: '/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('dummy/contact.html.twig', [
            'title' => 'Contact',
            'content' => 'Welcome to the Contact page!',
        ]);
    }

    #[Route(path: '/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('dummy/about.html.twig', [
            'title' => 'About',
            'content' => 'Welcome to the About page!',
        ]);
    }
}
