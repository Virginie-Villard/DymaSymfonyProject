<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/', name: "app_homepage")]
    public function homepage() : Response
    {

        $tracks = [
            [ 'song' => "Gangsta's Paradise", 'artist' => "Coolio"],
            [ 'song' => "Waterfalls", 'artist' => "TLC"],
            [ 'song' => "Creep", 'artist' => "Radiohead"],
            [ 'song' => "Kiss from a Rose", 'artist' => "Seal"],
            [ 'song' => "On Bended Knee", 'artist' => "Boys II men"],
            [ 'song' => "Fantasy", 'artist' => "Mariah Carey"],
            ['song' => "Take a Bow", 'artist' => "Madonna"],
        ];

        /**
         * Common : directory name = same name of the class (vinyl)
         * & file name = same name than the function (homepage)
         *
         * first argument = the name of the template
         * second argument = an array with all the variables I want to pass into the template.
         */
        return $this->render('vinyl/homepage.html.twig',
        [
            'title' => 'PB & Jams',
            'tracks' => $tracks
        ]);
    }

    /**
     * @return Response
     * (slug could be anything else, like coolMusicCategory)
     *
     * $slug = null -> slug becomes optional in the url
     */
    #[Route('/browse/{slug}', name: "app_browse")]
    public function browse(String $slug = null) : Response
    {
        /**
         * function u comes from symfony to format strings :
         * Here it take the genre in the url and give it in the page without '-' but with uppercase
         */
        $genre = $slug ? u(str_replace('-',' ',$slug))->title(true) : null;

        return $this->render('vinyl/browse.html.twig', [
            "genre" => $genre
        ]);
    }
}


