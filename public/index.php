<?php

require '../vendor/autoload.php';

use App\Exceptions\NotFoundException;
use Router\Router;

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

define('DB_NAME', 'eshop-tech');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$router = new Router($_GET['url']);

// Guest
$router->get('/', 'App\Controllers\GuestController@welcome');

// Products
$router->get('/products', 'App\Controllers\ProductController@index');
$router->get('/products/:id', 'App\Controllers\ProductController@show');
$router->get('/products/colors/:id', 'App\Controllers\ProductController@color');

// Auth
$router->get('/login', 'App\Controllers\UserController@login');
$router->post('/login', 'App\Controllers\UserController@loginPost');
$router->get('/logout', 'App\Controllers\UserController@logout');
$router->get('/register', 'App\Controllers\UserController@register');

// Admin
$router->get('/admin/products', 'App\Controllers\Admin\ProductController@index');
$router->post('/admin/products/delete/:id', 'App\Controllers\Admin\ProductController@destroy');

$router->get('/admin/products/create', 'App\Controllers\Admin\ProductController@create');
$router->post('/admin/products/createPost', 'App\Controllers\Admin\ProductController@createPost');

$router->get('/admin/products/edit/:id', 'App\Controllers\Admin\ProductController@edit');
$router->post('/admin/products/edit/:id', 'App\Controllers\Admin\ProductController@update');

try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}
