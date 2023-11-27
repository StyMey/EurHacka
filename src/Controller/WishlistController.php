<?php

namespace App\Controller;

use App\Controller\AbstractController;

class WishlistController extends AbstractController
{
    public function index(): string
    {
        return $this->twig->render('Wishlist/wishlist.html.twig');
    }
}
