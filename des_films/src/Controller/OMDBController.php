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
     * @Route(
     *     "/film/{query}",
     *      name="film")
     */
    public function film( $query )
    {
        $apiKey= "733e3e1";
        $ctrl_name= "OMDBController";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s='. $query .'&apikey=' . $apiKey);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);

        $result_curl = curl_exec($ch);
        $json = json_decode($result_curl);


        return $this->render('omdb/index.html.twig',
            [
                'controller_name' => $ctrl_name,
                'query' => 'Alooors, avec '. $query .' dans le titre, on a trouvé ça : ',
                //J'accède à la case search de mon tableau Json (la seule case du tableau)
                'movies' => $json->Search
            ]);
    }

    /**
     * @Route("/query", name="query")
     */
    public function query()
    {
        $apiKey= "733e3e1";
        $query= "Hello";
        $ctrl_name= "OMDBController";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.omdbapi.com/?s='. $query .'&apikey=' . $apiKey);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);

        $result_curl = curl_exec($ch);
        $json = json_decode($result_curl);


        return $this->render('omdb/index.html.twig',
            [
                'controller_name' => $ctrl_name,
                'query' => 'Alooors, avec '. $query .' dans le titre, on a trouvé ça : ',
                //J'accède à la case search de mon tableau Json (la seule case du tableau)
                'movies' => $json->Search
            ]);
    }




}
