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
        $dateNow = '2017-01-28';
        $quantity = 10;
        $winterRate = 5;
        $summerRate = 15;
        $winterServiceCharge = 15;
        // a hosszú feltétel helyett amit senki nem ért
        // egy beszédes metódus van, ami ugyanazt csinálja, de így első ránézésre érthetőbb
        if ($this->date->notSummer($dateNow)) {
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
        //some logic
        return true;
    }

    public function after($end)
    {
        //some logic
        return false;
    }

    //az új metódus ami eldönti hogy vmi nyár vagy sem
    public function notSummer($dateNow)
    {
        if ($dateNow->before(FourSeasonDates::SUMMER_START) || $dateNow->after(FourSeasonDates::SUMMER_END)) {
            return true;
        }
        return false;
    }
}