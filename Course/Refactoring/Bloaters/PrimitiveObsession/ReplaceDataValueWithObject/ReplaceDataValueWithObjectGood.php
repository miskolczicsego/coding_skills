<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 22:09
 */
class ReplaceDataValueWithObjectGood
{
    //tegyük a régi mezőt, meg a viselkedést egy új osztályba
    // és és tároljuk ezt az objektumot itt

    /**
     * @var Customer
     */
    protected $customer;
    protected $data;

    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    public function setOrderData()
    {
        $this->data['customer_name'] = $this->customer->getName();
    }
}
class Customer
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}
$order = new ReplaceDataValueWithObjectGood(new Customer('Csegő'));