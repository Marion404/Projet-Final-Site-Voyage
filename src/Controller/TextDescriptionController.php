<?php

namespace App\Controller;

use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TextDescriptionController extends AbstractController
{
    #[Route('/text/description/{id}', name: 'app_text_description')]
    
    public function index(int $id, VoyageRepository $voyageRepository): Response
    {
        $voyageId = $voyageRepository->find($id);

        return $this->render('text_description/index.html.twig', [
            'controller_name' => 'TextDescriptionController',
            'voyageId' => $voyageId,
        ]);
    }
}