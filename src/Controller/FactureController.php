<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FactureController extends AbstractController
{
    /**
     * @Route("/facture", name="facture")
     */
    public function index()
    {
        return $this->render('facture/index.html.twig', [
            'controller_name' => 'FactureController',
        ]);
    }
    /**
     * @Route("/facture/Ajouter", name="facture")
     */
    public function AjouterFacture()
    {
        return $this->render('facture/Ajouter.html.twig', [
            'controller_name' => 'FactureController',
        ]);
    }
    /**
     * @Route("/facture/Modifier", name="facture")
     */
    public function ModifierBoutique()
    {
        return $this->render('facture/Modifier.html.twig', [
            'controller_name' => 'FactureController',
        ]);
    }
    /**
     * @Route("/facture/Supprimer", name="facture")
     */
    public function SupprimerFacture()
    {
        return $this->render('facture/Supprimer.html.twig', [
            'controller_name' => 'FactureController',
        ]);
    }



}
