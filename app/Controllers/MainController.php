<?php

namespace App\Controllers;


use App\Requests\MainRequest;

class MainController
{
    public function index(MainRequest $request)
    {
        var_dump($request->test_params);
    }
}
