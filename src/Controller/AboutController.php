<?php

namespace App\Controller;

use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class AboutController extends AbstractController
{


    public function __construct(
        private readonly EntityManagerInterface $em,
    )
    {
    }

    #[Route('/about', name: 'about')]
    public function index(Request $request) : Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $this->em->persist($contact);
            $this->em->flush();
            $this->addFlash('success', 'Votre message a bien été envoyé !');

            return $this->redirectToRoute('about');
        }
        return $this->render('about/index2.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}