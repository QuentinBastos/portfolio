<?php

namespace App\Controller;

use App\Portfolio\ProjectCatalog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    public function __construct(private readonly ProjectCatalog $catalog)
    {
    }

    #[Route('/', name: 'default')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'works' => true,
            'projects' => $this->catalog->all(),
        ]);
    }
}
