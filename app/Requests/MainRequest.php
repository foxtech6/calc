<?php

namespace App\Requests;


use Foxtech\Kernel\AbstractRequestHandler;

class MainRequest extends AbstractRequestHandler
{
    public function rules(): array
    {
        return [
            'testParams' => 'int|max:21|min:10',
        ];
    }
}
