<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The <b>GetItem</b> call returns listing data such as title, description, price information, user information, and so on, for the specified <b>ItemID</b>.
 * @subpackage Structs
 */
class GetItemRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: This field is used to identify the eBay listing by Item ID value. <br><br> <b>ItemID</b> is a required input in most cases. <b>SKU</b> can be used instead in certain cases (see the description of SKU). If both <b>ItemID</b> and
     * <b>SKU</b> are specified for items where the inventory tracking method is <b>ItemID</b>, <b>ItemID</b> takes precedence. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemID = null;
    /**
     * The IncludeWatchCount
     * Meta information extracted from the WSDL
     * - documentation: The seller can include this field and set its value to <code>true</code> if that seller wants to see how many prospective bidders/buyers currently have the item added to their Watch Lists. The Watch count is returned in the
     * <b>WatchCount</b> field in the response. <br> <br> This field will only be returnd to the seller of the item.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeWatchCount = null;
    /**
     * The IncludeCrossPromotion
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeCrossPromotion = null;
    /**
     * The IncludeItemSpecifics
     * Meta information extracted from the WSDL
     * - documentation: If this field is included and set to <code>true</code>, the call response includes the <b>ItemSpecifics</b> container if Item Specifics are defined for the listing.<br> <br> An Item Specific is any aspect that helps define/classify
     * the item. Many eBay categories mandate including specific Item Specifics, so it is always a good idea to make a call to <b>GetCategorySpecifics</b> to see what Item Specifics are required and which ones are recommended.<br> <br> Including this field
     * and setting it to <code>true</code> will also return the <strong>UnitInfo</strong> container if applicable. The <strong>UnitInfo</strong> container will provide information about the weight, volume or other quantity measurement of a listed item. The
     * European Union requires listings for certain types of products to include the price per unit so buyers can accurately compare prices. eBay uses the <strong>UnitType</strong> and <strong>UnitQuantity</strong> values and the item's listed price to
     * calculate and display the per-unit price on eBay EU sites.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeItemSpecifics = null;
    /**
     * The IncludeTaxTable
     * Meta information extracted from the WSDL
     * - documentation: The seller will include this field and set its value to <code>true</code> if the seller wishes to view the defined sales tax rates for the various jurisdictions in the country (generally, states and provinces). Information for each
     * defined sales tax rate will be returned in the <b>TaxTable</b> container in the response. <br/><br/> Even if this field is included and set to <code>true</code>, no <b>TaxTable</b> container will be returned If no sales tax rates are defined for any
     * tax jurisdiction in the seller's sales tax table. <br/><br/> Sales tax tables are only available for eBay US and Canada marketplaces. Sales tax rates can be added/modified in My eBay, through the <b>SetTaxTable</b> and <b>GetTaxTable</b> calls of the
     * Trading API, or through the Sales Tax calls of the Account API.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeTaxTable = null;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: Retrieves an item that was listed by the user identified in AuthToken and that is being tracked by this SKU.<br> <br> A SKU (stock keeping unit) is an identifier defined by a seller. Some sellers use SKUs to track complex flows of
     * products and information on the client side. eBay preserves the SKU on the item, enabling you to obtain it before and after an order line item is created. (SKU is recommended as an alternative to ApplicationData.)<br> <br> In <b>GetItem</b>,
     * <b>SKU</b> can only be used to retrieve one of your own items, where you listed the item by using <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b>, and you set <b>Item.InventoryTrackingMethod</b> to <b>SKU</b> at the time the item was listed.
     * (These criteria are necessary to uniquely identify the listing by a SKU.)<br> <br> Either <b>ItemID</b> or <b>SKU</b> is required in the request. If both are passed, they must refer to the same item, and that item must have
     * <b>InventoryTrackingMethod</b> set to <b>SKU</b>. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SKU = null;
    /**
     * The VariationSKU
     * Meta information extracted from the WSDL
     * - documentation: Variation-level SKU that uniquely identifes a Variation within the listing identified by <b>ItemID</b>. Only applicable when the seller listed the item with Variation-level SKU (<b>Variation.SKU</b>) values. Retrieves all the usual
     * <b>Item</b> fields, but limits the <b>Variations</b> content to the specified Variation. If not specified, the response includes all Variations. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in
     * different contexts. For usage information and rules, see the fields that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $VariationSKU = null;
    /**
     * The VariationSpecifics
     * Meta information extracted from the WSDL
     * - documentation: Name-value pairs that identify one or more Variations within the listing identified by <b>ItemID</b>. Only applicable when the seller listed the item with Variations. Retrieves all the usual <b>Item</b> fields, but limits the
     * Variations content to the specified Variation(s). If the specified pairs do not match any Variation, eBay returns all Variations.<br> <br> To retrieve only one variation, specify the full set of name/value pairs that match all the name-value pairs of
     * one Variation. <br> <br> To retrieve multiple variations (using a wildcard), specify one or more name/value pairs that partially match the desired variations. For example, if the listing contains Variations for shirts in different colors and sizes,
     * specify Color as Red (and no other name/value pairs) to retrieve all the red shirts in all sizes (but no other colors).
     * - minOccurs: 0
     * @var \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    protected ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $VariationSpecifics = null;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for an order line item. An order line item is created when a buyer commits to purchasing an item. <br><br> Since you can change active multiple-quantity fixed-price listings even after one of the items has been
     * purchased, the <b>TransactionID</b> is associated with a snapshot of the item data at the time of the purchase. <br><br> After one item in a multi-quantity listing has been sold, sellers can not change the values in the Title, Primary Category,
     * Secondary Category, Listing Duration, and Listing Type fields. However, all other fields are editable. <br><br> Specifying a <b>TransactionID</b> in the <b>GetItem</b> request allows you to retrieve a snapshot of the listing as it was when the order
     * line item was created. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionID = null;
    /**
     * The IncludeItemCompatibilityList
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify whether or not to retrieve Parts Compatiblity information for a motor part or accessory listing. If this field is included and set to <code>true</code>, the <b>Item.ItemCompatibilityList</b> container
     * will be returned if a Parts Compatibility list exists for the listing. A Parts Compatibility list is a list of motor vehicles that are compatible with the listed motor part or accesory item. If a Parts Compatibility list does not exist for the
     * listing, this field will have no effect if it is included, regardless of its value (<code>true</code> or <code>false</code>). <br><br> If this field is included and set to <code>false</code> or omitted, but a Parts Compatibility list does exist for
     * the listing, the <b>Item.ItemCompatibilityList</b> container will not be returned, but the <b>Item.ItemCompatibilityCount</b> field will be returned, and this field will simply indicate the quantity of motor vehicles that are compatible with the the
     * listed motor part or accesory item. <br><br> Parts Compatibility lists are only applicable to motor parts and accessory categories on the sites that support eBay Motors - US, CA, UK, and DE.
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeItemCompatibilityList = null;
    /**
     * Constructor method for GetItemRequestType
     * @uses GetItemRequestType::setItemID()
     * @uses GetItemRequestType::setIncludeWatchCount()
     * @uses GetItemRequestType::setIncludeCrossPromotion()
     * @uses GetItemRequestType::setIncludeItemSpecifics()
     * @uses GetItemRequestType::setIncludeTaxTable()
     * @uses GetItemRequestType::setSKU()
     * @uses GetItemRequestType::setVariationSKU()
     * @uses GetItemRequestType::setVariationSpecifics()
     * @uses GetItemRequestType::setTransactionID()
     * @uses GetItemRequestType::setIncludeItemCompatibilityList()
     * @param string $itemID
     * @param bool $includeWatchCount
     * @param bool $includeCrossPromotion
     * @param bool $includeItemSpecifics
     * @param bool $includeTaxTable
     * @param string $sKU
     * @param string $variationSKU
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @param string $transactionID
     * @param bool $includeItemCompatibilityList
     */
    public function __construct(?string $itemID = null, ?bool $includeWatchCount = null, ?bool $includeCrossPromotion = null, ?bool $includeItemSpecifics = null, ?bool $includeTaxTable = null, ?string $sKU = null, ?string $variationSKU = null, ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null, ?string $transactionID = null, ?bool $includeItemCompatibilityList = null)
    {
        $this
            ->setItemID($itemID)
            ->setIncludeWatchCount($includeWatchCount)
            ->setIncludeCrossPromotion($includeCrossPromotion)
            ->setIncludeItemSpecifics($includeItemSpecifics)
            ->setIncludeTaxTable($includeTaxTable)
            ->setSKU($sKU)
            ->setVariationSKU($variationSKU)
            ->setVariationSpecifics($variationSpecifics)
            ->setTransactionID($transactionID)
            ->setIncludeItemCompatibilityList($includeItemCompatibilityList);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID(): ?string
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setItemID(?string $itemID = null): self
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        
        return $this;
    }
    /**
     * Get IncludeWatchCount value
     * @return bool|null
     */
    public function getIncludeWatchCount(): ?bool
    {
        return $this->IncludeWatchCount;
    }
    /**
     * Set IncludeWatchCount value
     * @param bool $includeWatchCount
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setIncludeWatchCount(?bool $includeWatchCount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeWatchCount) && !is_bool($includeWatchCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeWatchCount, true), gettype($includeWatchCount)), __LINE__);
        }
        $this->IncludeWatchCount = $includeWatchCount;
        
        return $this;
    }
    /**
     * Get IncludeCrossPromotion value
     * @return bool|null
     */
    public function getIncludeCrossPromotion(): ?bool
    {
        return $this->IncludeCrossPromotion;
    }
    /**
     * Set IncludeCrossPromotion value
     * @param bool $includeCrossPromotion
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setIncludeCrossPromotion(?bool $includeCrossPromotion = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeCrossPromotion) && !is_bool($includeCrossPromotion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCrossPromotion, true), gettype($includeCrossPromotion)), __LINE__);
        }
        $this->IncludeCrossPromotion = $includeCrossPromotion;
        
        return $this;
    }
    /**
     * Get IncludeItemSpecifics value
     * @return bool|null
     */
    public function getIncludeItemSpecifics(): ?bool
    {
        return $this->IncludeItemSpecifics;
    }
    /**
     * Set IncludeItemSpecifics value
     * @param bool $includeItemSpecifics
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setIncludeItemSpecifics(?bool $includeItemSpecifics = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeItemSpecifics) && !is_bool($includeItemSpecifics)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeItemSpecifics, true), gettype($includeItemSpecifics)), __LINE__);
        }
        $this->IncludeItemSpecifics = $includeItemSpecifics;
        
        return $this;
    }
    /**
     * Get IncludeTaxTable value
     * @return bool|null
     */
    public function getIncludeTaxTable(): ?bool
    {
        return $this->IncludeTaxTable;
    }
    /**
     * Set IncludeTaxTable value
     * @param bool $includeTaxTable
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setIncludeTaxTable(?bool $includeTaxTable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeTaxTable) && !is_bool($includeTaxTable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeTaxTable, true), gettype($includeTaxTable)), __LINE__);
        }
        $this->IncludeTaxTable = $includeTaxTable;
        
        return $this;
    }
    /**
     * Get SKU value
     * @return string|null
     */
    public function getSKU(): ?string
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setSKU(?string $sKU = null): self
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
        
        return $this;
    }
    /**
     * Get VariationSKU value
     * @return string|null
     */
    public function getVariationSKU(): ?string
    {
        return $this->VariationSKU;
    }
    /**
     * Set VariationSKU value
     * @param string $variationSKU
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setVariationSKU(?string $variationSKU = null): self
    {
        // validation for constraint: string
        if (!is_null($variationSKU) && !is_string($variationSKU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variationSKU, true), gettype($variationSKU)), __LINE__);
        }
        $this->VariationSKU = $variationSKU;
        
        return $this;
    }
    /**
     * Get VariationSpecifics value
     * @return \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType|null
     */
    public function getVariationSpecifics(): ?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType
    {
        return $this->VariationSpecifics;
    }
    /**
     * Set VariationSpecifics value
     * @param \macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setVariationSpecifics(?\macropage\ebaysdk\trading\ArrayType\NameValueListArrayType $variationSpecifics = null): self
    {
        $this->VariationSpecifics = $variationSpecifics;
        
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID(): ?string
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setTransactionID(?string $transactionID = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        
        return $this;
    }
    /**
     * Get IncludeItemCompatibilityList value
     * @return bool|null
     */
    public function getIncludeItemCompatibilityList(): ?bool
    {
        return $this->IncludeItemCompatibilityList;
    }
    /**
     * Set IncludeItemCompatibilityList value
     * @param bool $includeItemCompatibilityList
     * @return \macropage\ebaysdk\trading\StructType\GetItemRequestType
     */
    public function setIncludeItemCompatibilityList(?bool $includeItemCompatibilityList = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeItemCompatibilityList) && !is_bool($includeItemCompatibilityList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeItemCompatibilityList, true), gettype($includeItemCompatibilityList)), __LINE__);
        }
        $this->IncludeItemCompatibilityList = $includeItemCompatibilityList;
        
        return $this;
    }
}
