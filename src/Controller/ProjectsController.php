<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/projects')]
class ProjectsController extends AbstractController
{
    #[Route('/chess', name: 'project_chess')]
    public function chess(Request $request): Response
    {
        return $this->render('projects/chess.html.twig');
    }

    #[Route('/phase10', name: 'project_phase10')]
    public function phase10(Request $request): Response
    {
        return $this->render('projects/phase10.html.twig');
    }

    #[Route('/interactive-book', name: 'project_interactive_book')]
    public function interactiveBook(Request $request): Response
    {
        return $this->render('projects/interactive_book.html.twig');
    }

    #[Route('/spotify', name: 'project_spotify')]
    public function spotify(Request $request): Response
    {
        return $this->render('projects/spotify.html.twig');
    }

    #[Route('/aloas', name: 'project_aloas')]
    public function aloas(Request $request): Response
    {
        return $this->render('projects/aloas.html.twig');
    }
}