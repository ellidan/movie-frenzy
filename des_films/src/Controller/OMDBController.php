<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OMDBController extends AbstractController
{
    /**
     * @Route("/omdb", name="omdb")
     */
    public function index()
    {
        return $this->render('omdb/index.html.twig', [
            'controller_name' => 'OMDBController',
        ]);
    }

    /**
     * @Route("/query", name="query")
     */
    public function query()
    {
        echo "Coucou, tu veux voir ma requête ?";
        die;

       /* return $this->render('omdb/index.html.twig', [
            'controller_name' => 'OMDBController',
        ]); */
    }
}
