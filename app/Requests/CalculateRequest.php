<?php

namespace App\Requests;


use Foxtech\Kernel\AbstractRequestHandler;

class CalculateRequest extends AbstractRequestHandler
{
    public function rules(): array
    {
        return [
            'estimated' => 'number|max:100000|min:100',
            'tax'       => 'number|max:100|min:0',
            'number'    => 'number|max:12|min:1',
        ];
    }
}
