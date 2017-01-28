<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.27.
 * Time: 20:38
 */

use ObserverPattern\StockGrabber;
use ObserverPattern\StockObserver;
use StrategyPattern\Bird;
use StrategyPattern\Dog;
use StrategyPattern\ItFly;

require_once 'Course/start.php';

//$sparky = new Dog();
//$tweety = new Bird();
//
//print_r("Dog " . $sparky->tryToFly() . "</br>");
//print_r("Bird " . $tweety->tryToFly() . "</br>");
//
//$sparky->setFlyingAbility(new ItFly());
//
//print_r("Dog " . $sparky->tryToFly() . "</br>");

$stockGrabber = new StockGrabber();
$observer1 = new StockObserver($stockGrabber);

$stockGrabber->setApplPrice(197.00);
$stockGrabber->setIbmPrice(667.00);
$stockGrabber->setGoogPrice(676.00);