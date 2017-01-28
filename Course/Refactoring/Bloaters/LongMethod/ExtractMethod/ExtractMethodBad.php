<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 17:44
 */
class ExtractMethodBad
{
    public $name;

    //Itt van egy kódrészlet amit össze tudunk rakni egy csoportba
    public function printOwing()
    {
        $this->printBanner();

        //print details
        print("name: " . $this->name);
        print("amount: " . $this->getOutStanding());
   }

    public function getOutStanding()
    {
    }

    private function printBanner()
    {
    }
}