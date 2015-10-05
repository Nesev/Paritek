<?php

namespace testBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $phrase ='Moi';

        return new Response(
            '<html><body>Lucky number:'.$phrase.'</body></html>'
        );
    }
}
