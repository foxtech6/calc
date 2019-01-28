<?php

namespace App\Controllers;

use App\Requests\MainRequest;
use Foxtech\Kernel\AbstractController;

class MainController extends AbstractController
{
    public function index()
    {
        $this->render('main', [
            'title' => 'My first page'
        ]);

    }

    public function handleInformation(MainRequest $request)
    {
        $this->render('result', [
            'estimated' => $request->estimated,
            'tax'       => $request->tax,
            'number'    => $request->number,
        ]);
    }
}
