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
    private const FRIDAY_NUMBER_DAY = 1;
    private const FIRST_HOUR = 15;
    private const SECOND_HOUR = 20;
    private $basePricePolicy = 0.11;
    private $commission = 0.17;

    public function __construct()
    {
        $this->checkDate();
    }

    /**
     * Calculate
     *
     * @param CalculateRequest $request Request params
     *
     * @throws NotFoundException
     */
    public function index(CalculateRequest $request)
    {
        $basePremium = round($request->estimated / $request->number * $this->basePricePolicy, 2);
        $commission = round($basePremium * $this->commission, 2);
        $tax = round($basePremium * $request->tax / 100, 2);
        $sum = round($basePremium + $commission + $tax, 2);

        $result = [];
        $total = [
            'base' => 0,
            'commission' => 0,
            'tax' => 0,
            'sum' => 0,
        ];

        for ($i = 0; $i < $request->number; $i++) {
            $result[] = [
                'base' => $basePremium,
                'commission' => $commission,
                'tax' => $tax,
                'sum' => $sum,
            ];

            $total['base'] += $basePremium;
            $total['commission'] += $commission;
            $total['tax'] += $tax;
            $total['sum'] += $sum;
        }

        $this->render('result', [
            'result' => $result,
            'total' => $total,
        ]);
    }

    private function checkDate(): void
    {
        if (self::FRIDAY_NUMBER_DAY != date('w')) {
            return;
        }

        $hour = date('H');

        if (self::FIRST_HOUR > $hour) {
            return;
        }

        if (self::SECOND_HOUR < $hour) {
            return;
        }

        $this->basePricePolicy = 0.13;
    }
}
