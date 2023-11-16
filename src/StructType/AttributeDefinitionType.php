<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeDefinitionType StructType
 * @subpackage Structs
 */
class AttributeDefinitionType extends AttributeDefinitionDTO
{
    /**
     * The MidocoAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO[]
     */
    protected array $MidocoAttributeChoiceValue = [];
    /**
     * The localization
     * @var string|null
     */
    protected ?string $localization = null;
    /**
     * Constructor method for AttributeDefinitionType
     * @uses AttributeDefinitionType::setMidocoAttributeChoiceValue()
     * @uses AttributeDefinitionType::setLocalization()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO[] $midocoAttributeChoiceValue
     * @param string $localization
     */
    public function __construct(array $midocoAttributeChoiceValue = [], ?string $localization = null)
    {
        $this
            ->setMidocoAttributeChoiceValue($midocoAttributeChoiceValue)
            ->setLocalization($localization);
    }
    /**
     * Get MidocoAttributeChoiceValue value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO[]
     */
    public function getMidocoAttributeChoiceValue(): array
    {
        return $this->MidocoAttributeChoiceValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAttributeChoiceValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAttributeChoiceValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAttributeChoiceValueForArrayConstraintsFromSetMidocoAttributeChoiceValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeDefinitionTypeMidocoAttributeChoiceValueItem) {
            // validation for constraint: itemType
            if (!$attributeDefinitionTypeMidocoAttributeChoiceValueItem instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO) {
                $invalidValues[] = is_object($attributeDefinitionTypeMidocoAttributeChoiceValueItem) ? get_class($attributeDefinitionTypeMidocoAttributeChoiceValueItem) : sprintf('%s(%s)', gettype($attributeDefinitionTypeMidocoAttributeChoiceValueItem), var_export($attributeDefinitionTypeMidocoAttributeChoiceValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAttributeChoiceValue property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAttributeChoiceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO[] $midocoAttributeChoiceValue
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeDefinitionType
     */
    public function setMidocoAttributeChoiceValue(array $midocoAttributeChoiceValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAttributeChoiceValueArrayErrorMessage = self::validateMidocoAttributeChoiceValueForArrayConstraintsFromSetMidocoAttributeChoiceValue($midocoAttributeChoiceValue))) {
            throw new InvalidArgumentException($midocoAttributeChoiceValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoAttributeChoiceValue = $midocoAttributeChoiceValue;
        
        return $this;
    }
    /**
     * Add item to MidocoAttributeChoiceValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO $item
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeDefinitionType
     */
    public function addToMidocoAttributeChoiceValue(\Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAttributeChoiceValue property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAttributeChoiceValue[] = $item;
        
        return $this;
    }
    /**
     * Get localization value
     * @return string|null
     */
    public function getLocalization(): ?string
    {
        return $this->localization;
    }
    /**
     * Set localization value
     * @param string $localization
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeDefinitionType
     */
    public function setLocalization(?string $localization = null): self
    {
        // validation for constraint: string
        if (!is_null($localization) && !is_string($localization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localization, true), gettype($localization)), __LINE__);
        }
        $this->localization = $localization;
        
        return $this;
    }
}
