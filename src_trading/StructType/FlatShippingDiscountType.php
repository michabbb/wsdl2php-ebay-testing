<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlatShippingDiscountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of an individual discount profile defined by the user for flat-rate shipping.
 * @subpackage Structs
 */
class FlatShippingDiscountType extends AbstractStructBase
{
    /**
     * The DiscountName
     * Meta information extracted from the WSDL
     * - documentation: The type of discount or rule that is being used by the profile. The value corresponding to the selected rule is set in the same-named field of <b>FlatShippingDiscount.DiscountProfile</b>.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiscountName = null;
    /**
     * The DiscountProfile
     * Meta information extracted from the WSDL
     * - documentation: Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is
     * <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\StructType\DiscountProfileType[]
     */
    protected array $DiscountProfile = [];
    /**
     * The any
     * @var \DOMDocument|string|null
     */
    protected $any = null;
    /**
     * Constructor method for FlatShippingDiscountType
     * @uses FlatShippingDiscountType::setDiscountName()
     * @uses FlatShippingDiscountType::setDiscountProfile()
     * @uses FlatShippingDiscountType::setAny()
     * @param string $discountName
     * @param \macropage\ebaysdk\trading\StructType\DiscountProfileType[] $discountProfile
     * @param \DOMDocument|string|null $any
     */
    public function __construct(?string $discountName = null, array $discountProfile = [], $any = null)
    {
        $this
            ->setDiscountName($discountName)
            ->setDiscountProfile($discountProfile)
            ->setAny($any);
    }
    /**
     * Get DiscountName value
     * @return string|null
     */
    public function getDiscountName(): ?string
    {
        return $this->DiscountName;
    }
    /**
     * Set DiscountName value
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid()
     * @uses \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $discountName
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public function setDiscountName(?string $discountName = null): self
    {
        // validation for constraint: enumeration
        if (!\macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::valueIsValid($discountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType', is_array($discountName) ? implode(', ', $discountName) : var_export($discountName, true), implode(', ', \macropage\ebaysdk\trading\EnumType\DiscountNameCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountName = $discountName;
        
        return $this;
    }
    /**
     * Get DiscountProfile value
     * @return \macropage\ebaysdk\trading\StructType\DiscountProfileType[]
     */
    public function getDiscountProfile(): array
    {
        return $this->DiscountProfile;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountProfile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountProfileForArrayConstraintsFromSetDiscountProfile(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $flatShippingDiscountTypeDiscountProfileItem) {
            // validation for constraint: itemType
            if (!$flatShippingDiscountTypeDiscountProfileItem instanceof \macropage\ebaysdk\trading\StructType\DiscountProfileType) {
                $invalidValues[] = is_object($flatShippingDiscountTypeDiscountProfileItem) ? get_class($flatShippingDiscountTypeDiscountProfileItem) : sprintf('%s(%s)', gettype($flatShippingDiscountTypeDiscountProfileItem), var_export($flatShippingDiscountTypeDiscountProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountProfile property can only contain items of type \macropage\ebaysdk\trading\StructType\DiscountProfileType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountProfile value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DiscountProfileType[] $discountProfile
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public function setDiscountProfile(array $discountProfile = []): self
    {
        // validation for constraint: array
        if ('' !== ($discountProfileArrayErrorMessage = self::validateDiscountProfileForArrayConstraintsFromSetDiscountProfile($discountProfile))) {
            throw new InvalidArgumentException($discountProfileArrayErrorMessage, __LINE__);
        }
        $this->DiscountProfile = $discountProfile;
        
        return $this;
    }
    /**
     * Add item to DiscountProfile value
     * @throws InvalidArgumentException
     * @param \macropage\ebaysdk\trading\StructType\DiscountProfileType $item
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public function addToDiscountProfile(\macropage\ebaysdk\trading\StructType\DiscountProfileType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \macropage\ebaysdk\trading\StructType\DiscountProfileType) {
            throw new InvalidArgumentException(sprintf('The DiscountProfile property can only contain items of type \macropage\ebaysdk\trading\StructType\DiscountProfileType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DiscountProfile[] = $item;
        
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|string|null
     */
    public function getAny(bool $asDomDocument = false)
    {
        $domDocument = null;
        if (!empty($this->any) && $asDomDocument) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asDomDocument ? $domDocument : $this->any;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument|string|null $any
     * @return \macropage\ebaysdk\trading\StructType\FlatShippingDiscountType
     */
    public function setAny($any = null): self
    {
        // validation for constraint: xml
        if (!is_null($any) && !$any instanceof \DOMDocument && (!is_string($any) || (is_string($any) && (empty($any) || (($anyDoc = new \DOMDocument()) && false === $anyDoc->loadXML($any)))))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a valid XML string', var_export($any, true)), __LINE__);
        }
        $this->any = ($any instanceof \DOMDocument) ? $any->saveXML($any->hasChildNodes() ? $any->childNodes->item(0) : null) : $any;
        
        return $this;
    }
}
