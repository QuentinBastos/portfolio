<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class AboutController extends AbstractController
{
    #[Route('/about', name: 'about')]
    public function index(Request $request) : Response
    {
        $contact = new Contact();
        return $this->render('about/index2.html.twig', [
            'form'
        ]);
    }
}