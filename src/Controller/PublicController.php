<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PublicController extends AbstractController
{
    // route '/' qui se nomme 'homepage'
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            'name' => 'Pitz Michaël',
            'controller_name' => 'PublicController',
            'xss' => "<script> alert('XSS'); </script>",
            'scriptok' => "<script>document.write('Hello World!'); </script>",
        ]);
    }
}
