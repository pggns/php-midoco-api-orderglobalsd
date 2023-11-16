<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSavedReportExt StructType
 * @subpackage Structs
 */
class MidocoSavedReportExt extends JasperReportDTO
{
    /**
     * The JasperReportType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: JasperReportType
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType[]
     */
    protected array $JasperReportType = [];
    /**
     * Constructor method for MidocoSavedReportExt
     * @uses MidocoSavedReportExt::setJasperReportType()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType[] $jasperReportType
     */
    public function __construct(array $jasperReportType = [])
    {
        $this
            ->setJasperReportType($jasperReportType);
    }
    /**
     * Get JasperReportType value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType[]
     */
    public function getJasperReportType(): array
    {
        return $this->JasperReportType;
    }
    /**
     * This method is responsible for validating the values passed to the setJasperReportType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJasperReportType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJasperReportTypeForArrayConstraintsFromSetJasperReportType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSavedReportExtJasperReportTypeItem) {
            // validation for constraint: itemType
            if (!$midocoSavedReportExtJasperReportTypeItem instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType) {
                $invalidValues[] = is_object($midocoSavedReportExtJasperReportTypeItem) ? get_class($midocoSavedReportExtJasperReportTypeItem) : sprintf('%s(%s)', gettype($midocoSavedReportExtJasperReportTypeItem), var_export($midocoSavedReportExtJasperReportTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JasperReportType property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JasperReportType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType[] $jasperReportType
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSavedReportExt
     */
    public function setJasperReportType(array $jasperReportType = []): self
    {
        // validation for constraint: array
        if ('' !== ($jasperReportTypeArrayErrorMessage = self::validateJasperReportTypeForArrayConstraintsFromSetJasperReportType($jasperReportType))) {
            throw new InvalidArgumentException($jasperReportTypeArrayErrorMessage, __LINE__);
        }
        $this->JasperReportType = $jasperReportType;
        
        return $this;
    }
    /**
     * Add item to JasperReportType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType $item
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSavedReportExt
     */
    public function addToJasperReportType(\Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType) {
            throw new InvalidArgumentException(sprintf('The JasperReportType property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\JasperReportType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JasperReportType[] = $item;
        
        return $this;
    }
}
