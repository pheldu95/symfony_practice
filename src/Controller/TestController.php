<?php

// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    #[Route('/test', name: 'test_page')]
    public function testPage(): Response
    {
        return new Response(
            '<html><body>Test</body></html>'
        );
    }
}