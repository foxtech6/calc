<?php

namespace App\Controllers;

use App\Requests\MainRequest;
use Kernel\AbstractController;

class MainController extends AbstractController
{
    public function index(/*MainRequest $request*/)
    {
        $this->render('main', [
            'title' => 'My first page'
        ]);

    }
}
