<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 18:13
 */
class ReplaceTempWithQueryGood
{
    public $quantity;
    public $itemprice;

    public function giveSpecialDependOnBasePrice()
    {
        // a metódus visszatérési értékével hasonlítjuk össze a számokat, illetve
        // felhasználjuk a végeredmény kiszámításához is
        if ($this->calculateBasePrice() > 1000) {
            return $this->calculateBasePrice() * 0.95;
        } else {
            return $this->calculateBasePrice() * 0.98;
        }
    }

    public function calculateBasePrice()
    {
        return $this->quantity * $this->itemprice;
    }
}