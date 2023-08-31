<?php

namespace App\Twig;

use App\Entity\Voyage;
use Doctrine\ORM\EntityManagerInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    // public function getFilters()
    // {
    //     return [
    //         new TwigFilter('price', [$this, 'formatPrice']),
    //     ];
    // }
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    
    public function getFunctions()
    {
        return [
            new TwigFunction('getVoyages', [$this, 'getVoyages']),
        ];
    }

    public function getVoyages()
    {
        $voyageRepository = $this->em->getRepository(Voyage::class);
        $voyages = $voyageRepository->findAll();
        return $voyages;
    }
}