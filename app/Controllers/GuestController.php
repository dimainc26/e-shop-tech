<?php

namespace App\Controllers;

use App\Models\Creator;
use App\Models\Product;

class GuestController extends Controller
{
    public function welcome()
    {

        $product = new Product($this->getDB());

        $homeProducts = $product->preview();

        $creator = new Creator($this->getDB());

        $creator = $creator->myData();

        return $this->view('guest.welcome', compact('homeProducts', 'creator'));
    }
}
