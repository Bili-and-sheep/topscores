<?php

namespace App\Controller;

use App\Form\ListeJeuxType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TopScoresController extends AbstractController
{
    #[Route('/topscores', name: 'app_top_scores')]
    public function index(Request $request): Response
    {
        $formSelectJeux = $this->createForm(ListeJeuxType::class);
        $formSelectJeux->handleRequest($request);

        return $this->render('top_scores/index.html.twig', [
            'formListJeux' => $formSelectJeux,

        ]);
    }
}
