<?php

declare(strict_types=1);

namespace macropage\ebaysdk\trading\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityType StructType
 * Meta information extracted from the WSDL
 * - documentation: Basic type for specifying quantities.
 * @subpackage Structs
 */
class QuantityType extends AbstractStructBase
{
    /**
     * The _
     * @var float|null
     */
    protected ?float $_ = null;
    /**
     * The unit
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $unit = null;
    /**
     * Constructor method for QuantityType
     * @uses QuantityType::set_()
     * @uses QuantityType::setUnit()
     * @param float $_
     * @param string $unit
     */
    public function __construct(?float $_ = null, ?string $unit = null)
    {
        $this
            ->set_($_)
            ->setUnit($unit);
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_(): ?float
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \macropage\ebaysdk\trading\StructType\QuantityType
     */
    public function set_(?float $_ = null): self
    {
        // validation for constraint: float
        if (!is_null($_) && !(is_float($_) || is_numeric($_))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \macropage\ebaysdk\trading\StructType\QuantityType
     */
    public function setUnit(?string $unit = null): self
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        
        return $this;
    }
}
