<?php

namespace macropage\ebaysdk\trading\EnumType;

/**
 * This class stands for CompleteStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated type that contains values which indicate whether an order or order line item is complete, incomplete, or pending.
 * @subpackage Enumerations
 */
class CompleteStatusCodeType
{
    /**
     * Constant for value 'Incomplete'
     * @return string 'Incomplete'
     */
    const VALUE_INCOMPLETE = 'Incomplete';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_INCOMPLETE
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCOMPLETE,
            self::VALUE_COMPLETE,
            self::VALUE_PENDING,
            self::VALUE_CUSTOM_CODE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
