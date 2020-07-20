<?php


namespace App\Controller;


class DefaultController extends Controller
{
    public function index(){
        $user=$this->container->get('security.token_storage');
        return $this->render('base.html.twig');
    }
}