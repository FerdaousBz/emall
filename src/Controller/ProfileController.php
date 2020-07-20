<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index()
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    /**
     * @Route("/profile/Ajouter", name="profile")
     */
    public function AjouterProfile()
    {
        return $this->render('profile/Ajouter.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    /**
     * @Route("/profile/Modifier", name="profile")
     */
    public function ModifierProfile()
    {
        return $this->render('profile/Modifier.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    /**
     * @Route("/profile/Supprimer", name="profile")
     */
    public function SupprimerProfile()
    {
        return $this->render('profile/Supprimer.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
