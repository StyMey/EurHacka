<?php

namespace App\Controller;

use App\Controller\AbstractController;

class HomeController extends AbstractController
{
    /* Display home page */
    public function index(): string
    {
        return $this->twig->render('Home/accueil/index.html.twig');
    }
}
