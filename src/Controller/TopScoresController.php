<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TopScoresController extends AbstractController
{
    #[Route('/topscores', name: 'app_top_scores')]
    public function index(): Response
    {
        $uneVariable = 'Hello World';

        return $this->render('top_scores/index.html.twig', [
            'controller_name' => 'TopScoresController',
            'uneVariable' => $uneVariable,
        ]);
    }
}
