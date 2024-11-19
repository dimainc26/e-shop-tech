<?php

namespace App\Controllers;

use Database\DBConnection;

abstract class Controller
{

    public function __construct(protected DBConnection $db)
    {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    protected function view(string $path, array $params = null)
    {

        ob_start();

        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);

        $forMiniLayout = explode("\\", $path)[0];

        require VIEWS . $path . '.php';

        $content = ob_get_clean();

        if ('auth' === $forMiniLayout) {
            require VIEWS . 'Minilayout.php';
        } else if ($forMiniLayout === 'admin') {

            require VIEWS . 'AdminLayout.php';
        } else {
            require VIEWS . 'layout.php';
        }
    }

    protected function getDB()
    {
        return $this->db;
    }

    protected function isAdmin()
    {
        if (isset($_SESSION['auth'])  && $_SESSION['auth'] === 1) {
            return true;
        }

        return header('Location: /login');
    }
}
