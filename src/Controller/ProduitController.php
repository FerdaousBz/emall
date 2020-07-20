<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index()
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/produit/Ajouter", name="produit")
     */
    public function AjouterProduit()
    {
        return $this->render('produit/Ajouter.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/produit/Modifier", name="produit")
     */
    public function ModifierProduit()
    {
        return $this->render('produit/Modifier.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/produit/Supprimer", name="produit")
     */
    public function SupprimerProduit()
    {
        return $this->render('produit/Supprimer.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
}
