<?php
namespace StrategyPattern;
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.27.
 * Time: 21:10
 */
class ItFly implements FlyStrategyInterface
{
    public function fly()
    {
        return 'Flying high';
    }
}