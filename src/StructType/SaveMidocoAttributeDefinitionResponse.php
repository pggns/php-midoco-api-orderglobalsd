<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeDefinitionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAttributeDefinitionResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeDefinition
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeDefinition
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition $MidocoSystemAttributeDefinition = null;
    /**
     * Constructor method for SaveMidocoAttributeDefinitionResponse
     * @uses SaveMidocoAttributeDefinitionResponse::setMidocoSystemAttributeDefinition()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition = null)
    {
        $this
            ->setMidocoSystemAttributeDefinition($midocoSystemAttributeDefinition);
    }
    /**
     * Get MidocoSystemAttributeDefinition value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition|null
     */
    public function getMidocoSystemAttributeDefinition(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition
    {
        return $this->MidocoSystemAttributeDefinition;
    }
    /**
     * Set MidocoSystemAttributeDefinition value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveMidocoAttributeDefinitionResponse
     */
    public function setMidocoSystemAttributeDefinition(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoSystemAttributeDefinition $midocoSystemAttributeDefinition = null): self
    {
        $this->MidocoSystemAttributeDefinition = $midocoSystemAttributeDefinition;
        
        return $this;
    }
}
