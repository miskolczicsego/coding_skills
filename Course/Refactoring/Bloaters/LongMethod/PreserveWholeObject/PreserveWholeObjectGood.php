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

        //jó megoldásként adjuk oda az egész objektumot, és kérjük ki később az adatokat
        $withinPlan = $plan->withinRange($daysTempRange);

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
    public function withinRange(DaysTempRange $daysTempRange)
    {
        $avarage = $this->getAvarage($daysTempRange->getLow(), $daysTempRange->getHigh());
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