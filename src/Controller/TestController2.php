<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController2 extends AbstractController
{
    #[Route('/test2', name: 'test_page2')]
    public function testPage(): Response
    {
        return $this->render('test2.html.twig');
    }
}