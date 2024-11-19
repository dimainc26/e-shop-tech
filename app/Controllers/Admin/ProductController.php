<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\color;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $this->isAdmin();

        $products = (new Product($this->getDB()))->all();

        return $this->view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $color = (new color($this->getDB()))->all();

        return $this->view('admin.product.form', compact('color'));
    }

    public function createPost()
    {
        $product = new Product($this->getDB());

        $colors = array_pop($_POST);

        $result = $product->create($_POST,  $colors);

        if ($result) {
            return header('Location: /admin/products');
        }
    }

    public function edit(int $id)
    {
        $product = (new Product($this->getDB()))->findById($id);

        $color = (new color($this->getDB()))->all();

        return $this->view('admin.product.form', compact('product', 'color'));
    }

    public function update(int $id)
    {
        $product = new Product($this->getDB());

        $colors = array_pop($_POST);

        $result = $product->update($id, $_POST,  $colors);

        if ($result) {
            return header('Location: /admin/products');
        }
    }

    public function destroy(int $id)
    {
        $product = new Product($this->getDB());

        $result = $product->destroy($id);

        if ($result) {
            return header('Location: /admin/products');
        }
    }
}
