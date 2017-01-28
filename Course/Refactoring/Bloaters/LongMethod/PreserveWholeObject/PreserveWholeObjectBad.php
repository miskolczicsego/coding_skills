<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 18:32
 */
class PreserveWholeObjectBad
{
    public function isTemperatureWithinPlan()
    {
        $daysTempRange = new DaysTempRange();
        $plan = new Plan();
        //kiszedjük a két értéket
        $low = $daysTempRange->getLow();
        $high = $daysTempRange->getHigh();

        //paraméterként odaadjuk, és a metódus majd kezd velük valamit (számol értékekeket stb)
        $withinPlan = $plan->withinRange($low, $high);

        return $withinPlan;
    }
}

class DaysTempRange
{

    public function getLow()
    {
        return 0;
    }

    public function getHigh()
    {
        return 100;
    }
}

class Plan
{
    public static $range = 30;
    public function withinRange($l, $h)
    {

        $avarage = $this->getAvarage($l, $h);
        if ($avarage > self::$range) {
            return true;
        } else {
            return false;
        }

    }

    public function getAvarage($l, $h)
    {
        return ($l + $h) / 2;
    }
}