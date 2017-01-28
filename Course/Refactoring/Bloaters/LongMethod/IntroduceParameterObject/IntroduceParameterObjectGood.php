<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 18:20
 */
class IntroduceParameterObjectBad
{
    // kiváltottuk a két paramétert eggyel
    public function amountInvoicedIn(DateInterval $interval)
    {
        
    }

    public function amountReceivedIn(DateInterval $interval)
    {

    }

    public function amountOverdueIn(DateInterval $interval)
    {

    }
}

class DateInterval
{
    // Dátum intervallum osztály
}