<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TexteDescriptionController extends AbstractController
{
    #[Route('/texte/description', name: 'app_texte_description')]
    public function index(): Response
    {
        return $this->render('texte_description/index.html.twig', [
            'controller_name' => 'TexteDescriptionController',
        ]);
    }
}
