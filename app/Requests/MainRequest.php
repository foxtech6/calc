<?php

namespace App\Requests;


use Kernel\AbstractRequestHandler;

class MainRequest extends AbstractRequestHandler
{
    public function rules(): array
    {
        return [
            'test_params' => 'int|max:21|min:10',
        ];
    }
}