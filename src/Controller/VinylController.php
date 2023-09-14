<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage() : Response
    {
        return new Response('Title : PB and Jams');
    }

    /**
     * @return Response
     * (slug could be anything else, like coolMusicCategory)
     *
     * $slug = null -> slug becomes optional in the url
     */
    #[Route('/browse/{slug}')]
    public function browse(String $slug = null) : Response
    {
        /**
         * function u comes from symfony to format strings :
         * Here it take the genre in the url and give it in the page without '-' but with uppercase
         */
        if ($slug)
        {
            $title = 'Genre : '.u(str_replace('-',' ',$slug))->title(true);
        }
        else
        {
            $title = ('All genres');
        }

        return new Response($title);
    }
}


