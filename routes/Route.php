<?php

namespace Router;

use Database\DBConnection;

class Route
{

    public $matches;

    public function __construct(public $path, public $action)
    {
        $this->path = trim($path, '/');
    }

    public function matches(string $url)
    {
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $pathtoMatch = "#^$path$#";

        if (preg_match($pathtoMatch, $url, $matches)) {
            $this->matches = $matches;

            return true;
        } else {
            return false;
        }
    }

    public function execute()
    {
        $params = explode('@', $this->action);
        $controller = new $params[0](new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD));
        $method = $params[1];

        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }
}
