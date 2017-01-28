<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 20:32
 */
class ExtractClassBad
{
    //mostmár minden osztály csak egy dologért felelős
    private $name;
}
class TelephoneNumber
{
    private $officeAreaCode;
    private $officeNumber;

    public function getTelephoneNumber()
    {
        return '+' . $this->officeAreaCode . '/' . $this->officeNumber;
    }
}