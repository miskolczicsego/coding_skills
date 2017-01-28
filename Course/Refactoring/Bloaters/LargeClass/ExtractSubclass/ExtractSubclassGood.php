<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 21:08
 */
class ExtractSubclassGood
{
    public function getEmployee()
    {

    }
    public function getTotalPrice()
    {

    }
    public function getUnitPrice()
    {

    }
}

class SubClass extends ExtractSubclassGood
{
    //tegyük ezt a funkcionalitás egy gyerek osztályba, és használjuk akkor amikor kell
    public function getUnitPrice()
    {

    }

    public function getEmployee()
    {

    }
}