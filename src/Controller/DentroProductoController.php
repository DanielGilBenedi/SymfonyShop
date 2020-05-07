<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DentroProductoController extends AbstractController
{
    /**
     * @Route("/producto", name="producto")
     */
    public function index()
    {
        return $this->render('dentro_producto/index.html.twig', [
            'controller_name' => 'DentroProductoController',
        ]);
    }
}
