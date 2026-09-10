<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LanguageController extends AbstractController
{
    #[Route('/change-language/{language}', name: 'change_language', requirements: ['language' => 'fr|en'])]
    public function changeLanguage(Request $request, string $language): Response
    {
        $request->getSession()->set('_locale', $language);
        $this->addFlash('success', 'Language changed to ' . $language);

        // Sans Referer (lien ouvert directement, navigateur qui le masque), redirect(null)
        // levait une erreur 500. On ne renvoie que vers une page du site, sinon vers l'accueil.
        $referer = $request->headers->get('referer');
        if ($referer && str_starts_with($referer, $request->getSchemeAndHttpHost().'/')) {
            return $this->redirect($referer);
        }

        return $this->redirectToRoute('default');
    }
}