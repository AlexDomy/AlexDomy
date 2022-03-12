<?php

namespace App\Controllers;

use Exception;
use Firework\Controller;

class MainController extends Controller
{
    /**
     * Render main.fire.php view
     * @return void
     * @throws Exception
     */
    public function render(): void
    {
        $this->view->renderView('main', []);
    }
}