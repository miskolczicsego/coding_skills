<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 18:13
 */
class ReplaceTempWithQueryBad
{
    public $quantity;
    public $itemprice;

    public function giveSpecialDependOnBasePrice()
    {
        //ezt a számolós logikát ki lehet tenni egy metódusba
        $basePrice = $this->quantity * $this->itemprice;

        if ($basePrice > 1000) {
            return $basePrice * 0.95;
        } else {
            return $basePrice * 0.98;
        }
    }
}