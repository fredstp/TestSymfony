<?php

namespace App\Controller;

use App\Entity\Vehicles;
use App\Repository\VehiclesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiclesController extends AbstractController
{
    /**
     * @Route("/vehicles", name="app_vehicles")
     * @return []
     */
    public function index(VehiclesRepository $vehiclesRepository): response
    {
        $vehicles = $vehiclesRepository->findSearch();

        return $this->render('vehicles/index.html.twig', [
            'vehicles' => $vehicles,
        ]);
    }
}
