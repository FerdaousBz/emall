<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BoutiqueController extends AbstractController
{


    /**
     * @Route("/boutique", name="boutique")
     */
    public function index()
    {
        return $this->render('boutique/index.html.twig', [
            'controller_name' => 'BoutiqueController',
        ]);
    }



    /**
     * @Route("/boutique/Ajouter", name="boutique")
     */
    public function AjouterBoutique()
    {
        return $this->render('boutique/Ajouter.html.twig', [
            'controller_name' => 'BoutiqueController',
        ]);
    }




    /**
     * @Route("/boutique/Modifier", name="boutique")
     */
    public function ModifierBoutique()
    {
        return $this->render('boutique/Modifier.html.twig', [
            'controller_name' => 'BoutiqueController',
        ]);
    }




    /**
     * @Route("/boutique/Supprimer", name="boutique")
     */
    public function SupprimerBoutique()
    {
        return $this->render('boutique/Supprimer.html.twig', [
            'controller_name' => 'BoutiqueController',
        ]);
    }
}
