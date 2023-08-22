<?php

namespace App\Controller;

use App\Entity\Voyage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/voyage', name: 'app_voyage')]
class VoyageController extends AbstractController
{
    #[Route('/{id}', name: 'voyage')]
    public function voyage(Voyage $voyage): Response
    {
        return $this->render('voyage/index.html.twig', [
            'controller_name' => 'VoyageController',
        ]);
    }
}