<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MaxFlatShippingCostDefinitionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>MaxFlatShippingCost</b> field that is returned under the <b>FeatureDefinitions</b> container. The <b>MaxFlatShippingCost</b> field is returned as empty and indicates that a maximum flat-rate shipping cost
 * threshold is enforced for some categories on the corresponding eBay site. This field will not be returned if one or more <b>FeatureID</b> fields are included in the call request and <b>MaxFlatShippingCost</b> is not one of the values passed into
 * those <b>FeatureID</b> fields.
 * @subpackage Structs
 */
class MaxFlatShippingCostDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for MaxFlatShippingCostDefinitionType
     * @uses MaxFlatShippingCostDefinitionType::setAny()
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
     * @uses \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType
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
     * @return \macropage\ebaysdk\trading\StructType\MaxFlatShippingCostDefinitionType
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
