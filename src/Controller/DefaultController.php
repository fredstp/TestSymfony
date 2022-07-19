<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     * @return Response
     */
    public function appDefaultAction(): Response
    {


        return $this->render('app/index.html.twig', ['']);
    }
}
