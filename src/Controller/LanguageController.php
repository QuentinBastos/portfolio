<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LanguageController extends AbstractController
{
    #[Route('/change-language/{language}', name: 'change_language')]
    public function changeLanguage(Request $request, string $language): Response
    {
        $request->getSession()->set('_locale', $language);
        $this->addFlash('success', 'Language changed to ' . $language);

        return $this->redirectToRoute('default');
    }
}