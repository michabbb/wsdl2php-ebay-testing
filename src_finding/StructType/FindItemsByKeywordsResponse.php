<?php

namespace macropage\ebaysdk\finding\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindItemsByKeywordsResponse StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response container for the findItemsByKeywords call.
 * @subpackage Structs
 */
class FindItemsByKeywordsResponse extends BaseFindingServiceResponse
{
    /**
     * The categoryHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for category histograms. Only returned when one or more category histograms are returned. A category histogram is not returned if the search query returns no matching items. <br><br> <span
     * class="tablenote"><strong>Note:</strong> When searching the eBay Motors site, category histograms may not be available for some parent categories. In these cases, aspect histograms should be used to refine search results. This behavior is consistent
     * with eBay Motors site search behavior. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer
     */
    public $categoryHistogramContainer;
    /**
     * The aspectHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for aspect histograms.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\AspectHistogramContainer
     */
    public $aspectHistogramContainer;
    /**
     * The conditionHistogramContainer
     * Meta informations extracted from the WSDL
     * - documentation: Response container for condition histograms.<br> <br> Not returned when <b>Condition</b> is specified in <b>itemFilter</b>. That is, only returned when you have not yet narrowed your search based on specific conditions.<br> <br>
     * Supported for all eBay sites except US eBay Motors, India (IN), Malaysia (MY) and Philippines (PH). International items that appear in search results are included in a site's histogram counts.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer
     */
    public $conditionHistogramContainer;
    /**
     * Constructor method for FindItemsByKeywordsResponse
     * @uses FindItemsByKeywordsResponse::setCategoryHistogramContainer()
     * @uses FindItemsByKeywordsResponse::setAspectHistogramContainer()
     * @uses FindItemsByKeywordsResponse::setConditionHistogramContainer()
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer
     */
    public function __construct(\macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer = null, \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer = null, \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer = null)
    {
        $this
            ->setCategoryHistogramContainer($categoryHistogramContainer)
            ->setAspectHistogramContainer($aspectHistogramContainer)
            ->setConditionHistogramContainer($conditionHistogramContainer);
    }
    /**
     * Get categoryHistogramContainer value
     * @return \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer|null
     */
    public function getCategoryHistogramContainer()
    {
        return $this->categoryHistogramContainer;
    }
    /**
     * Set categoryHistogramContainer value
     * @param \macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsResponse
     */
    public function setCategoryHistogramContainer(\macropage\ebaysdk\finding\StructType\CategoryHistogramContainer $categoryHistogramContainer = null)
    {
        $this->categoryHistogramContainer = $categoryHistogramContainer;
        return $this;
    }
    /**
     * Get aspectHistogramContainer value
     * @return \macropage\ebaysdk\finding\StructType\AspectHistogramContainer|null
     */
    public function getAspectHistogramContainer()
    {
        return $this->aspectHistogramContainer;
    }
    /**
     * Set aspectHistogramContainer value
     * @param \macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsResponse
     */
    public function setAspectHistogramContainer(\macropage\ebaysdk\finding\StructType\AspectHistogramContainer $aspectHistogramContainer = null)
    {
        $this->aspectHistogramContainer = $aspectHistogramContainer;
        return $this;
    }
    /**
     * Get conditionHistogramContainer value
     * @return \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer|null
     */
    public function getConditionHistogramContainer()
    {
        return $this->conditionHistogramContainer;
    }
    /**
     * Set conditionHistogramContainer value
     * @param \macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsResponse
     */
    public function setConditionHistogramContainer(\macropage\ebaysdk\finding\StructType\ConditionHistogramContainer $conditionHistogramContainer = null)
    {
        $this->conditionHistogramContainer = $conditionHistogramContainer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \macropage\ebaysdk\finding\StructType\FindItemsByKeywordsResponse
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
