<?php
namespace App\Routes;

use Bramus\Router\Router;

use App\Controllers\HomeController;
use App\Controllers\AnotherPageController;
use App\Controllers\ApiPageController;

$router = new Router();
$router->get('/', function() {
    (new HomeController)->index();
});
$router->get('/page(/\d+)?', function($pageNbr) {
    (new AnotherPageController)->index($pageNbr);
});
$router->get('/api', function() {
    (new ApiPageController)->index();
});
$router->run();