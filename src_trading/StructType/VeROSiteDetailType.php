<?php

namespace macropage\ebaysdk\trading\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VeROSiteDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type used by the <b>VeROSiteDetailType</b> container, which is returned in <b>GetVeROReasonCodeDetails</b>. Each <b>VeROSiteDetailType</b> container will contain one or more reasons how an eBay listing could possibly infringe upon
 * the intellectual property rights of a product owner.
 * @subpackage Structs
 */
class VeROSiteDetailType extends AbstractStructBase
{
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - documentation: This enumeration value indicates the eBay site for which reason code details are returned.
     * - minOccurs: 0
     * @var string
     */
    public $Site;
    /**
     * The ReasonCodeDetail
     * Meta informations extracted from the WSDL
     * - documentation: This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container
     * also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[]
     */
    public $ReasonCodeDetail;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VeROSiteDetailType
     * @uses VeROSiteDetailType::setSite()
     * @uses VeROSiteDetailType::setReasonCodeDetail()
     * @uses VeROSiteDetailType::setAny()
     * @param string $site
     * @param \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[] $reasonCodeDetail
     * @param \DOMDocument $any
     */
    public function __construct($site = null, array $reasonCodeDetail = array(), \DOMDocument $any = null)
    {
        $this
            ->setSite($site)
            ->setReasonCodeDetail($reasonCodeDetail)
            ->setAny($any);
    }
    /**
     * Get Site value
     * @return string|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $site
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
     */
    public function setSite($site = null)
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\SiteCodeType::valueIsValid($site)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $site, implode(', ', \macropage\ebaysdk\trading\EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->Site = $site;
        return $this;
    }
    /**
     * Get ReasonCodeDetail value
     * @return \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[]|null
     */
    public function getReasonCodeDetail()
    {
        return $this->ReasonCodeDetail;
    }
    /**
     * Set ReasonCodeDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType[] $reasonCodeDetail
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
     */
    public function setReasonCodeDetail(array $reasonCodeDetail = array())
    {
        foreach ($reasonCodeDetail as $veROSiteDetailTypeReasonCodeDetailItem) {
            // validation for constraint: itemType
            if (!$veROSiteDetailTypeReasonCodeDetailItem instanceof \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType) {
                throw new \InvalidArgumentException(sprintf('The ReasonCodeDetail property can only contain items of \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType, "%s" given', is_object($veROSiteDetailTypeReasonCodeDetailItem) ? get_class($veROSiteDetailTypeReasonCodeDetailItem) : gettype($veROSiteDetailTypeReasonCodeDetailItem)), __LINE__);
            }
        }
        $this->ReasonCodeDetail = $reasonCodeDetail;
        return $this;
    }
    /**
     * Add item to ReasonCodeDetail value
     * @throws \InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType $item
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
     */
    public function addToReasonCodeDetail(\macropage\ebaysdk\trading\StructType\ReasonCodeDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType) {
            throw new \InvalidArgumentException(sprintf('The ReasonCodeDetail property can only contain items of \macropage\ebaysdk\trading\StructType\ReasonCodeDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReasonCodeDetail[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \macropage\ebaysdk\trading\StructType\VeROSiteDetailType::setAny()
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
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
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
     * @return \macropage\ebaysdk\trading\StructType\VeROSiteDetailType
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
