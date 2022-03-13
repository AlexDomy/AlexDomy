<?php

require './app/bootstrap.php';

use Firework\Router;

use App\Controllers\MainController;
use App\Controllers\ZnoController;
use App\Controllers\FrameController;
use App\Controllers\ContactsController;
use App\Controllers\GaleryController;
use App\Controllers\SliderController;

$router = new Router();

$router->get('/', [MainController::class, 'render']); // Готово
$router->get('/gallery', [GaleryController::class, 'render']); // Готово
$router->get('/zno', [ZnoController::class, 'render']); // Готово
$router->get('/info', [FrameController::class, 'render']); // Готово
$router->get('/contacts', [ContactsController::class, 'render']); // Готово
$router->get('/helpful', [SliderController::class, 'render']); // Готово
$router->post('/form_decode', [ContactsController::class, 'form']); // Не вёрстка