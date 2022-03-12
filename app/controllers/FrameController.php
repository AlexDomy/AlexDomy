<?php

namespace App\Controllers;

use Firework\Controller;
use Exception;

class FrameController extends Controller
{
    /**
     * @return void
     * @throws Exception
     */
    public function render(): void
    {
        $this->view->renderView('frame4', []);
    }
}
