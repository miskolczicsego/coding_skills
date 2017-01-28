<?php
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 15:23
 */

namespace ObserverPattern;


class StockObserver implements Observer
{
    private $ibmPrice;
    private $applPrice;
    private $googPrice;

    private static $observerIDTracker = 1;

    private $observerID;

    /**
     * @var Subject
     */
    private $stockGrabber;

    public function __construct(Subject $stockGrabber)
    {
        $this->stockGrabber = $stockGrabber;

        $this->observerID = self::$observerIDTracker++;

        print_r("New Observer " . $this->observerID . "<br />");

        $stockGrabber->register($this);
    }

    public function update($ibmPrice, $applePrice, $googPrice)
    {
        $this->ibmPrice = $ibmPrice;
        $this->applPrice = $applePrice;
        $this->googPrice = $googPrice;

        $this->printPrices();
    }

    private function printPrices()
    {
        print_r("Observer ID: " . $this->observerID . "<br / >");
        print_r("Ibm price: " . $this->ibmPrice . "$ <br />");
        print_r("Apple price: " . $this->applPrice . "$ <br />");
        print_r("Google price: " . $this->googPrice . "$ <br />");
        print_r("<br/>");
    }
}