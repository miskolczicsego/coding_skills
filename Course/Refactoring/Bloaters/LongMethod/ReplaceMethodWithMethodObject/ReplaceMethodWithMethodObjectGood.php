<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 18:55
 */
class ReplaceMethodWithMethodObjectBad
{
    public function price()
    {
        //a rossz részben lévő lokális változók kikerültek egy osztályba
        // az új osztályban lévő metódus végzi a számítást
        //példányosítjuk az osztályt és meghívjuk a metódust
        $priceCalculator = new PriceCalculator($this);
        return $priceCalculator->calculate();
    }
}

class PriceCalculator
{
    public $primaryBasePrice = 10;
    public $secondaryBasePrice = 20;
    public $tertiaryBasePrice = 30;

    public function __construct(ReplaceMethodWithMethodObjectBad $rmwmob)
    {

    }

    public function calculate()
    {
        return 1;
    }
}