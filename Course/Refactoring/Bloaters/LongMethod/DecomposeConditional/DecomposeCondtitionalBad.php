<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 19:49
 */

abstract class FourSeasonDates
{
    const
        SUMMER_START = '2017-06-01',
        SUMMER_END = '2017-06-01';
}
class DecomposeCondtitionalBad
{
    /**
     * @var Date
     */
    private $date;

    public function __construct()
    {
        $this->date = new Date();
        $this->calculateChargeDependOnDate($this->date);
    }
    public function calculateChargeDependOnDate($date)
    {
        $quantity = 10;
        $winterRate = 5;
        $summerRate = 15;
        $winterServiceCharge = 15;
        if ($date->before(FourSeasonDates::SUMMER_START) || $date->after(FourSeasonDates::SUMMER_END)) {
            $charge = $quantity * $winterRate + $winterServiceCharge;
        } else {
            $charge = $quantity * $summerRate;
        }

        return $charge;
    }
}
class Date
{
    public function before($start)
    {
        return true;
    }

    public function after($end)
    {
        return false;
    }
}