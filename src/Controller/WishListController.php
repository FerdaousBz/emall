<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WishListController extends AbstractController
{
    /**
     * @Route("/wish/list", name="wish_list")
     */
    public function index()
    {
        return $this->render('wish_list/index.html.twig', [
            'controller_name' => 'WishListController',
        ]);
    }

}
