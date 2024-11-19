<?php

namespace App\Controllers;

use App\Models\color;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = new Product($this->getDB());

        $products = $product->all();

        return $this->view('products.index', compact('products'));
    }

    public function show(int $id)
    {
        $product = new Product($this->getDB());

        $product = $product->findById($id);

        return $this->view('products.show', compact('product'));
    }

    public function color(int $id)
    {
        $color = (new color($this->getDB()))->findById($id);

        return $this->view('products.color', compact('color'));
    }
}
