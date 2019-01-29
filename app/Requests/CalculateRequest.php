<?php

namespace App\Requests;

use Foxtech\Kernel\AbstractRequest;

/**
 * Class CalculateRequest
 *
 * @author Mykhailo Bavdys <bavdysmyh@ukr.net>
 * @since 28.01.2019
 */
class CalculateRequest extends AbstractRequest
{
    /**
     * {@inheritdoc}
     * @see AbstractRequestHandler::rules()
     */
    public function rules(): array
    {
        return [
            'estimated' => 'required|float|max:100000|min:100',
            'tax'       => 'required|int|max:100|min:0',
            'number'    => 'required|int|max:12|min:1',
        ];
    }
}
