<?php
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 15:01
 */

namespace ObserverPattern;


class StockGrabber implements Subject
{
    /**
     * Array of observers
     * @var array
     */
    private $observers;
    private $ibmPrice;
    private $applPrice;
    private $googPrice;

    public function __construct()
    {
        $this->observers = array();
    }

    /**
     * @param Observer $o
     */
    public function register(Observer $o)
    {
        array_push($this->observers, $o);
    }

    /**
     * @param Observer $o
     */
    public function unregister(Observer $o)
    {
        $index = array_keys($this->observers, $o);
        print_r("ObserverPattern " . ($index + 1) . "deleted");
        unset($this->observers[$index[0]]);
    }

    public function notifyObserver()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->ibmPrice, $this->applPrice, $this->googPrice);
        }
    }

    /**
     * @param mixed $ibmPrice
     */
    public function setIbmPrice($ibmPrice)
    {
        $this->ibmPrice = $ibmPrice;
        $this->notifyObserver();
    }

    /**
     * @param mixed $applPrice
     */
    public function setApplPrice($applPrice)
    {
        $this->applPrice = $applPrice;
        $this->notifyObserver();
    }

    /**
     * @param mixed $googPrice
     */
    public function setGoogPrice($googPrice)
    {
        $this->googPrice = $googPrice;
        $this->notifyObserver();
    }


}