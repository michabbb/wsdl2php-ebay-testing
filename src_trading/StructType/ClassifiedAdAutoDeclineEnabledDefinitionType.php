<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClassifiedAdAutoDeclineEnabledDefinitionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type defining the <b>ClassifiedAdAutoDeclineEnabled</b> field that is returned under the <b>FeatureDefinitions</b> container of the <b>GetCategoryFeatures</b> response (as long as 'ClassifiedAdAutoDeclineEnabled' or
 * 'ClassifiedAdAutoAcceptEnabled' is included as a <b>FeatureID</b> value in the call request or no <b>FeatureID</b> values are passed into the call request). This field is returned as an empty element (a boolean value is not returned) if one or more
 * eBay API-enabled sites support the Classified Ad Auto Decline feature. <br/><br/> To verify if a specific eBay site supports the Classified Ad Auto Decline feature (for most categories), look for a 'true' value in the
 * <b>SiteDefaults.ClassifiedAdAutoDeclineEnabled</b> field. <br/><br/> To verify if a specific category on a specific eBay site supports the Classified Ad Auto Decline feature, pass in a <b>CategoryID</b> value in the request, and then look for a
 * 'true' value in the <b>ClassifiedAdAutoDeclineEnabled</b> field of the corresponding Category node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
 * @subpackage Structs
 */
class ClassifiedAdAutoDeclineEnabledDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ClassifiedAdAutoDeclineEnabledDefinitionType
     * @uses ClassifiedAdAutoDeclineEnabledDefinitionType::setAny()
     * @param \DOMDocument $any
     */
    public function __construct(\DOMDocument $any = null)
    {
        $this
            ->setAny($any);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\trading\StructType\ClassifiedAdAutoDeclineEnabledDefinitionType
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
