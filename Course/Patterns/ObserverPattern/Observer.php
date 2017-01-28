<?php
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 14:59
 */

namespace ObserverPattern;


interface Observer
{
    public function update($ibmPrice, $applePrice, $googPrice);
}