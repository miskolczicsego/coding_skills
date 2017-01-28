<?php
namespace StrategyPattern;
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.27.
 * Time: 20:25
 */

class Dog extends Animal
{
    public function digHole()
    {
        echo 'Dug hole';
    }

    public function __construct()
    {
        $this->setSound('Bark');
        $this->flyingType = new CantFly();
    }


}