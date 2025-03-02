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
    public function changeLanguage(Request $request): Response
    {
        return $this->render('projects/chess.html.twig');
    }
}