<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 21:13
 */
interface Billable
{
    public function getRate();
    public function hasSpecialSkill();
}
class ExtractInterfaceBad implements Billable
{
    //Tegyük ki ezt a bizonyos részt a saját interfészébe
    public function getRate()
    {

    }
    public function hasSpecialSkill()
    {

    }
    public function getName()
    {

    }
    public function getDepartment()
    {

    }
}