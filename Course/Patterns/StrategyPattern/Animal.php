<?php

namespace StrategyPattern;
/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.27.
 * Time: 20:19
 */
class Animal
{
    private $name;
    private $height;
    private $weight;
    private $favFood;
    private $speed;
    private $sound;

    /**
     * @var FlyStrategyInterface
     */
    public $flyingType;
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

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        if ($weight > 0) {
            $this->weight = $weight;
        } else {
            echo 'Weight must be bigger than 0';
        }
    }

    /**
     * @return mixed
     */
    public function getFavFood()
    {
        return $this->favFood;
    }

    /**
     * @param mixed $favFood
     */
    public function setFavFood($favFood)
    {
        $this->favFood = $favFood;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @param mixed $sound
     */
    public function setSound($sound)
    {
        $this->sound = $sound;
    }

    public function tryToFly()
    {
        return $this->flyingType->fly();
    }

    public function setFlyingAbility(FlyStrategyInterface $newFlyType)
    {
        $this->flyingType = $newFlyType;
    }
}