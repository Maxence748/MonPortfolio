<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestController extends AbstractController
{
    #[Route('/', name: 'app_Monportfolio')]
    public function index(): Response
    {
        return $this->render('Monportfolio/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    #[Route ('/loisir' , name:'app_mes_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('Monportfolio/loisir.html.twig');
    }
    
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('Monportfolio/cv.html.twig');
    }

    #[Route('/eportfolio',name:'app_e-portfolio')]
    public function eportfolio(): Response
    {
        return $this->render('Monportfolio/eportfolio.html.twig');
    }

    #[Route('/choix_du_parcours',name:'choix_du_parcours')]
    public function choix_du_parcours(): Response
    {
        return $this->render('Monportfolio/choix_du_parcours.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('Monportfolio/portfolio.html.twig');
    }

    #[Route('/analysereflexives1', name: 'app_reflexives1')]
    public function analysereflexives1(): Response
    {
        return $this->render('Monportfolio/analysereflexives1.html.twig');
    }

    #[Route('/analysereflexives2', name: 'app_reflexives2')]
    public function analysereflexives2(): Response
    {
        return $this->render('Monportfolio/analysereflexives2.html.twig');
    }

}
