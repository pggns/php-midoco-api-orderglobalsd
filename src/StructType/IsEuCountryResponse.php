<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsEuCountryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsEuCountryResponse extends AbstractStructBase
{
    /**
     * The isEuCountry
     * @var bool|null
     */
    protected ?bool $isEuCountry = null;
    /**
     * Constructor method for IsEuCountryResponse
     * @uses IsEuCountryResponse::setIsEuCountry()
     * @param bool $isEuCountry
     */
    public function __construct(?bool $isEuCountry = null)
    {
        $this
            ->setIsEuCountry($isEuCountry);
    }
    /**
     * Get isEuCountry value
     * @return bool|null
     */
    public function getIsEuCountry(): ?bool
    {
        return $this->isEuCountry;
    }
    /**
     * Set isEuCountry value
     * @param bool $isEuCountry
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\IsEuCountryResponse
     */
    public function setIsEuCountry(?bool $isEuCountry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEuCountry) && !is_bool($isEuCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEuCountry, true), gettype($isEuCountry)), __LINE__);
        }
        $this->isEuCountry = $isEuCountry;
        
        return $this;
    }
}
