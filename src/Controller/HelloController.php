<?php
// src/Controller/HelloController.php
namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController
{
    #[Route('/')]
    public function print_hello(): Response
    {

        return new Response(
            '<html><body>Hello my fren pepo</body></html>'
        );
    }
}