<?php
/**
 * User: Alexander Hinrichs (alexander.hinrichs@vergleich.org)
 * Date: 24.01.2018
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', []);
    }

}
