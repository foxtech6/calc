<?php

namespace App\Controllers;

use App\Requests\CalculateRequest;
use Foxtech\Kernel\AbstractController;
use Foxtech\Kernel\Exceptions\NotFoundException;

/**
 * Class CalculateController
 *
 * @author Mykhailo Bavdys <bavdysmyh@ukr.net>
 * @since 28.01.2019
 */
class CalculateController extends AbstractController
{
    /**
     * Calculate
     *
     * @param CalculateRequest $request Request params
     *
     * @throws NotFoundException
     */
    public function index(CalculateRequest $request)
    {
        $this->render('result', [
            'estimated' => $request->estimated,
            'tax'       => $request->tax,
            'number'    => $request->number,
        ]);
    }
}
