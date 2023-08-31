<?php

namespace App\Controller;

use App\Entity\Voyage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/voyage', name: 'app_voyage_')]
class VoyageController extends AbstractController
{
    #[Route('/{id}', name: 'details')]
    public function voyage(Voyage $voyage): Response
    {

        return $this->render('voyage/details.html.twig', [
            'voyage' => $voyage
        ]);
    }


    // #[Route('/voyage/{id}', 'voyage.show')]
    // public function show(
    //     Voyage $voyage,
    //     Request $request,
        
    // ) : Response{
    //     // new Voyage();


    //     return $this->render('voyage/details.html.twig', [
    //        'voyage' => $voyage 
    //     ]);

    // }

}