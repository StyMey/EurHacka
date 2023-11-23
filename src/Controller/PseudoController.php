<?php

namespace App\Controller;

use App\Model\PseudoManager;

class PseudoController extends AbstractController
{
    /*add a pseudo */
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            /*$user = array_map('trim', $_POST);*/
            $pseudoManager = new PseudoManager();
            $pseudoManager->insert($_POST);
            header('Location: /transition');
        }
    }
}
