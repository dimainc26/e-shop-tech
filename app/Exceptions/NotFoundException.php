<?php

namespace App\Exceptions;


class NotFoundException extends \Exception
{
    public function __construct($message = "", $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function error404()
    {
        require VIEWS . 'errors/404.php';
    }
}
