<?php

namespace App\Controller;

use App\Model\transitionManager;

class transitionController extends AbstractController
{
    public function index(): string
    {
        return $this->twig->render('transition/transition.html.twig');
    }
}