<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 17:54
 */
class ExtractMethodGood
{
    public $name;

    public function printOwing()
    {
        $this->printBanner();
        $this->printDetails();
    }

    //kitettük az összetartozó kódot egy külön metódusba
    public function printDetails()
    {
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