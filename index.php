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

$router->get('/home', [MainController::class, 'render']); // Готово
$router->get('/galery', [GaleryController::class, 'render']); // Не готово
$router->get('/zno', [ZnoController::class, 'render']); // Готово
$router->get('/frame4', [FrameController::class, 'render']); // Готово
$router->get('/contacts', [ContactsController::class, 'render']); // Готово
$router->get('/slider', [SliderController::class, 'render']); // Создать файл контроллера
$router->post('/form_decode', [ContactsController::class, 'form']); // Не вёрстка