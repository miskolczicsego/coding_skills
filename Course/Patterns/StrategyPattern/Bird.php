<?php
namespace StrategyPattern;
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.27.
 * Time: 20:36
 */
class Bird extends Animal
{
    public function __construct()
    {
        $this->setSound('Tweet');

        $this->flyingType = new ItFly();
    }


}