<?php

namespace App\Controllers;

use App\Requests\MainRequest;
use Foxtech\Kernel\AbstractController;

class MainController extends AbstractController
{
    public function index(/*MainRequest $request*/)
    {
        //var_dump($request->testParams);
        $this->render('main', [
            'title' => 'My first page'
        ]);

    }
}
