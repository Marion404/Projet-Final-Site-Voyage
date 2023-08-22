<?php

namespace App\Controller;

use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(VoyageRepository $voyageRepository): Response
    {
        $voyages = $voyageRepository->findAll();
        return $this->render('home/home.html.twig', [
            'voyages' => $voyages
        ]);
    }
}