<?php
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 14:58
 */

namespace ObserverPattern;


interface Subject
{
    public function register(Observer $o);
    public function unregister(Observer $o);
    public function notifyObserver();
}