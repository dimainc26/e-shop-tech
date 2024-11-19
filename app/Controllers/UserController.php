<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return $this->view('auth.register');
    }

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $user = (new User($this->getDB()))->getByEmail($_POST['email']);

        // TODO: verifier si le mot de passe est correcte, ensuite voir si c'est un creator
        // $_SESSION['auth'] = (int) $user->admin;
        $_SESSION['auth'] = 1;

        return header('Location: /admin/products?success=true');
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /welcome');
    }
}
