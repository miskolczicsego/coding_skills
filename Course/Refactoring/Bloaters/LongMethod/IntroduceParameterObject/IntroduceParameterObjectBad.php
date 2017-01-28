<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 18:20
 */
class IntroduceParameterObjectBad
{
    // két ugyanolyan objektum paraméter van a metódusokban
    public function amountInvoicedIn(Date $start, Date $end)
    {
        
    }

    public function amountReceivedIn(Date $start, Date $end)
    {

    }

    public function amountOverdueIn(Date $start, Date $end)
    {

    }
}

class Date
{
    // Dátum osztály
}