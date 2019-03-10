<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeaveFeedbackResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base response for the <b>LeaveFeedback</b> call. The response includes a <b>FeedbackID</b> value, which is automatically generated by eBay if the caller is successfully at submitting the Feedback entry.
 * @subpackage Structs
 */
class LeaveFeedbackResponseType extends AbstractResponseType
{
    /**
     * The FeedbackID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier of the Feedback entry that has been submitted by the caller.
     * - minOccurs: 0
     * @var string
     */
    public $FeedbackID;
    /**
     * Constructor method for LeaveFeedbackResponseType
     * @uses LeaveFeedbackResponseType::setFeedbackID()
     * @param string $feedbackID
     */
    public function __construct($feedbackID = null)
    {
        $this
            ->setFeedbackID($feedbackID);
    }
    /**
     * Get FeedbackID value
     * @return string|null
     */
    public function getFeedbackID()
    {
        return $this->FeedbackID;
    }
    /**
     * Set FeedbackID value
     * @param string $feedbackID
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackResponseType
     */
    public function setFeedbackID($feedbackID = null)
    {
        // validation for constraint: string
        if (!is_null($feedbackID) && !is_string($feedbackID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feedbackID)), __LINE__);
        }
        $this->FeedbackID = $feedbackID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\LeaveFeedbackResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
