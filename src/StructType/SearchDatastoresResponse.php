<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDatastoresResponse StructType
 * @subpackage Structs
 */
class SearchDatastoresResponse extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO[]
     */
    protected array $MidocoDatastore = [];
    /**
     * Constructor method for SearchDatastoresResponse
     * @uses SearchDatastoresResponse::setMidocoDatastore()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO[] $midocoDatastore
     */
    public function __construct(array $midocoDatastore = [])
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO[]
     */
    public function getMidocoDatastore(): array
    {
        return $this->MidocoDatastore;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDatastore method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDatastore method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDatastoreForArrayConstraintsFromSetMidocoDatastore(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDatastoresResponseMidocoDatastoreItem) {
            // validation for constraint: itemType
            if (!$searchDatastoresResponseMidocoDatastoreItem instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO) {
                $invalidValues[] = is_object($searchDatastoresResponseMidocoDatastoreItem) ? get_class($searchDatastoresResponseMidocoDatastoreItem) : sprintf('%s(%s)', gettype($searchDatastoresResponseMidocoDatastoreItem), var_export($searchDatastoresResponseMidocoDatastoreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDatastore property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO[] $midocoDatastore
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SearchDatastoresResponse
     */
    public function setMidocoDatastore(array $midocoDatastore = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDatastoreArrayErrorMessage = self::validateMidocoDatastoreForArrayConstraintsFromSetMidocoDatastore($midocoDatastore))) {
            throw new InvalidArgumentException($midocoDatastoreArrayErrorMessage, __LINE__);
        }
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
    /**
     * Add item to MidocoDatastore value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO $item
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SearchDatastoresResponse
     */
    public function addToMidocoDatastore(\Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDatastore property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\DatastoreDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDatastore[] = $item;
        
        return $this;
    }
}
