<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index()
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }
    /**
     * @Route("/panier/Ajouter", name="panier")
     */
    public function AjouterPanier()
    {
        return $this->render('panier/Ajouter.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }
    /**
     * @Route("/panier/Modifier", name="panier")
     */
    public function ModifierPanier()
    {
        return $this->render('panier/Modifier.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }
    /**
     * @Route("/panier/Supprimer", name="panier")
     */
    public function SupprimerPanier()
    {
        return $this->render('panier/Supprimer.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }
}
