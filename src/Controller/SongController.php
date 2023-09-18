<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    // Click on the Route class to see all the arguments usable :
    // We can see in the ```php bin/console debug:router``` the GET method :
    #[Route('/api/songs/{id}', methods: 'GET')]
    public function getSong(int $id) : Response
    {
        // TODO : query the database

        $song = [
            "id" => $id,
            "name" => "Waterfalls",
            "url" => "https://symfonycasts.s3.amazonaws.com/sample.mp3",
        ];

        // Because SongController extends AbstractController, we can use the JsonResponse :
        return $this->json($song);
    }
}