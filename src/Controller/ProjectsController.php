<?php

namespace App\Controller;

use App\Portfolio\ProjectCatalog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/projects')]
class ProjectsController extends AbstractController
{
    public function __construct(private readonly ProjectCatalog $catalog)
    {
    }

    #[Route('/{slug}', name: 'project_show', requirements: ['slug' => '[a-z0-9-]+'])]
    public function show(string $slug): Response
    {
        $project = $this->catalog->find($slug);
        if (null === $project) {
            throw $this->createNotFoundException();
        }

        return $this->render('projects/show.html.twig', [
            'project' => $project,
            'previous' => $this->catalog->previous($slug),
            'next' => $this->catalog->next($slug),
        ]);
    }
}
