<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 20:32
 */
class ExtractClassBad
{
    // ez az osztály nem egy dologért felelős
    // személy neve + telószám
    private $name;
    private $officeAreaCode;
    private $officeNumber;

    public function getTelephoneNumber()
    {
        return 1;
    }
}