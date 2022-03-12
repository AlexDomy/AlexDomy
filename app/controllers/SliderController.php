<?php

namespace App\Controllers;

use Exception;
use Firework\Controller;

class SliderController extends Controller
{
    /**
     * @return void
     * @throws Exception
     */
    public function render(): void
    {
        $this->view->renderView('slider', []);
    }
}
