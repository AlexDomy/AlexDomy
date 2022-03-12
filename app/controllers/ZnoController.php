<?php

namespace App\Controllers;

use Exception;
use Firework\Controller;

class ZnoController extends Controller
{
    /**
     * @return void
     * @throws Exception
     */
    public function render(): void
    {
        $this->view->renderView('zno', []);
    }
}
