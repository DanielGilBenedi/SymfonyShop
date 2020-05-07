<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/*Tienes que estar registrado para entrar en esta pagina */
class MiCuentaController extends AbstractController
{
    /**
     * @Route("/micuenta", name="micuenta")
     */
    public function index()
    {
        if ($this->getUser() != null){
            $form=$this->createForm(UserType::class, $this->getUser());
            return $this->render('mi_cuenta/index.html.twig', [
                'controller_name' => 'MiCuentaController',         
                'form' => $form->createView(),
            ]);
        }

        else {
            return $this->redirect($this->generateUrl('index'));
        }
        
    }

     /**
     * @Route("/mispedidos", name="mispedidos")
     */
    public function mispedidos()
    {
        if ($this->getUser() != null){
            $form=$this->createForm(UserType::class, $this->getUser());
            return $this->render('mi_cuenta/mispedidos.html.twig', [
                
            ]);
        }


         else {
            return $this->redirect($this->generateUrl('index'));
        }
    }
}
