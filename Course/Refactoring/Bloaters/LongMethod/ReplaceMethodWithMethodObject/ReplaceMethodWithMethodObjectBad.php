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
        // van egy hosszú metódus amiben a helyi változók annyira egymásba fonódnak
        // hogy nem tudunk kiemelést végezni

        $primaryBasePrice = 10;
        $secondaryBasePrice = 20;
        $tertiaryBasePrice = 30;

        //long compution
    }
}