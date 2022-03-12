<?php

namespace App\Controllers;

use Firework\Controller;
use Exception;
use Firework\Request;

class ContactsController extends Controller
{
    /**
     * @return void
     * @throws Exception
     */
    public function render(): void
    {
        $this->view->renderView('contacts', []);
    }

    public function form(Request $request): void
    {
        $post = $request->post;
        $body = 'Имя: ' . $post['name'] . '<br>' . 'Email: ' . $post['email'] . '<br>' . 'Текст: ' . $post['text'];

        $this->mail->mail('cryptoupik@gmail.com', 'NEW REQUEST', $body);
    }
}