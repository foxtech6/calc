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
     * Number day from week
     */
    private const FRIDAY_NUMBER_DAY = 5;

    /**
     * Start hour
     */
    private const FIRST_HOUR = 15;

    /**
     * End hour
     */
    private const SECOND_HOUR = 20;

    /**
     * Base price policy
     *
     * @var float
     */
    private $basePricePolicy = 0.11;

    /**
     * Commission
     *
     * @var float
     */
    private $commission = 0.17;

    /**
     * CalculateController constructor
     */
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
    public function index(CalculateRequest $request): void
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
            'basePricePolicy' => $this->basePricePolicy,
            'commission' => $this->commission,
            'tax' => $request->tax
        ]);
    }

    /**
     * Check day for friday 15-20
     */
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
