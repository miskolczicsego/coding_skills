<?php

/**
 * Created by PhpStorm.
 * User: miskolczicsego
 * Date: 2017.01.28.
 * Time: 22:19
 */
class ReplaceTypeCodeWithClassGood
{
    /**
     * @var BloodGroup
     */
    public static $O;
    /**
     * @var BloodGroup
     */
    public static $A;
    /**
     * @var BloodGroup
     */
    public static $B;
    /**
     * @var BloodGroup
     */
    public static $AB;
    /**
     * @var BloodGroup
     */
    private $bloodgroup;

    public function __construct(BloodGroup $bloodgroup)
    {
        $this->bloodgroup = Bloodgroup::code($bloodgroup);
        self::$A = BloodGroup::$A->getCode();
        self::$B = BloodGroup::$B->getCode();
        self::$AB = BloodGroup::$AB->getCode();
        self::$O = BloodGroup::$O->getCode();
    }

    /**
     * @return int
     */
    public function getBloodGroupCode()
    {
        return $this->bloodgroup->getCode();
    }

    /**
     * @param int $bloodgroup
     */
    public function setBloodGroupCode($bloodgroup)
    {
        $this->bloodgroup = BloodGroup::code($bloodgroup);
    }
}

class BloodGroup
{
    /**
     * @var BloodGroup
     */
    public static $O;
    /**
     * @var BloodGroup
     */
    public static $A;
    /**
     * @var BloodGroup
     */
    public static $B;
    /**
     * @var BloodGroup
     */
    public static $AB;

    private static $_values = array();

    /**
     * @var int
     */
    private $code;

    public function __construct($code)
    {
        self::$_values = array(self::$O, self::$A, self::$B, self::$AB);
        $this->code = $code;
        self::$A = new BloodGroup(0);
        self::$B = new BloodGroup(1);
        self::$AB = new BloodGroup(2);
        self::$O = new BloodGroup(3);
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    public static function code($arg)
    {
        return self::$_values[$arg];
    }
}