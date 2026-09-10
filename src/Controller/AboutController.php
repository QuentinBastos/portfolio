<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'about')]
    public function index(): Response
    {
        return $this->render('about/index2.html.twig', [
            // Les textes vivent dans les traductions (experience.<clé>.*, education.<clé>.*).
            'experience' => [
                ['key' => 'effetb', 'points' => 3],
                ['key' => 'sparklequiz', 'points' => 2],
                ['key' => 'baxter', 'points' => 1],
            ],
            'education' => ['cpe', 'iut'],
        ]);
    }
}
