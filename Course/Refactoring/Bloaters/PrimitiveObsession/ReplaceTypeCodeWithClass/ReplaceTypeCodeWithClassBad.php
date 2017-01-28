<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 22:19
 */
class ReplaceTypeCodeWithClassBad
{

    //tipuskódot használunk hogy meghatározzuk a vércsoportot($bloodgroup)
    public static $O = 0;
    public static $A = 1;
    public static $B = 2;
    public static $AB = 3;

    /**
     * @var int
     */
    private $bloodgroup;

    public function __construct($bloodgroup)
    {
        $this->bloodgroup = $bloodgroup;
    }

    /**
     * @return int
     */
    public function getBloodgroup()
    {
        return $this->bloodgroup;
    }

    /**
     * @param int $bloodgroup
     */
    public function setBloodgroup($bloodgroup)
    {
        $this->bloodgroup = $bloodgroup;
    }



}