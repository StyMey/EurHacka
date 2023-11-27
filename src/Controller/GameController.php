<?php

namespace App\Controller;

use App\Controller\Component\NewsletterController;
use App\Model\GameManager;

class GameController extends AbstractController
{
    public function index(): string
    {
        return $this->twig->render('Home/game.html.twig');
    }
}
