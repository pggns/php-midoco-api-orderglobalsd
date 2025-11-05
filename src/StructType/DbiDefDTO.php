<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DbiDefDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DbiDefDTO extends AbstractStructBase
{
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The dbiKey
     * @var string|null
     */
    protected ?string $dbiKey = null;
    /**
     * The defaultValue
     * @var string|null
     */
    protected ?string $defaultValue = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The mapping
     * @var string|null
     */
    protected ?string $mapping = null;
    /**
     * The matchCriteria
     * @var string|null
     */
    protected ?string $matchCriteria = null;
    /**
     * The maxlength
     * @var int|null
     */
    protected ?int $maxlength = null;
    /**
     * The minlength
     * @var int|null
     */
    protected ?int $minlength = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The rule
     * @var string|null
     */
    protected ?string $rule = null;
    /**
     * The selection
     * @var string|null
     */
    protected ?string $selection = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for DbiDefDTO
     * @uses DbiDefDTO::setCcNo()
     * @uses DbiDefDTO::setCreationTimestamp()
     * @uses DbiDefDTO::setCreationUser()
     * @uses DbiDefDTO::setDbiKey()
     * @uses DbiDefDTO::setDefaultValue()
     * @uses DbiDefDTO::setDescription()
     * @uses DbiDefDTO::setItemType()
     * @uses DbiDefDTO::setMapping()
     * @uses DbiDefDTO::setMatchCriteria()
     * @uses DbiDefDTO::setMaxlength()
     * @uses DbiDefDTO::setMinlength()
     * @uses DbiDefDTO::setModifyTimestamp()
     * @uses DbiDefDTO::setModifyUser()
     * @uses DbiDefDTO::setPosition()
     * @uses DbiDefDTO::setRule()
     * @uses DbiDefDTO::setSelection()
     * @uses DbiDefDTO::setType()
     * @param string $ccNo
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $dbiKey
     * @param string $defaultValue
     * @param string $description
     * @param string $itemType
     * @param string $mapping
     * @param string $matchCriteria
     * @param int $maxlength
     * @param int $minlength
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param int $position
     * @param string $rule
     * @param string $selection
     * @param string $type
     */
    public function __construct(?string $ccNo = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $dbiKey = null, ?string $defaultValue = null, ?string $description = null, ?string $itemType = null, ?string $mapping = null, ?string $matchCriteria = null, ?int $maxlength = null, ?int $minlength = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?int $position = null, ?string $rule = null, ?string $selection = null, ?string $type = null)
    {
        $this
            ->setCcNo($ccNo)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setDbiKey($dbiKey)
            ->setDefaultValue($defaultValue)
            ->setDescription($description)
            ->setItemType($itemType)
            ->setMapping($mapping)
            ->setMatchCriteria($matchCriteria)
            ->setMaxlength($maxlength)
            ->setMinlength($minlength)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setPosition($position)
            ->setRule($rule)
            ->setSelection($selection)
            ->setType($type);
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get dbiKey value
     * @return string|null
     */
    public function getDbiKey(): ?string
    {
        return $this->dbiKey;
    }
    /**
     * Set dbiKey value
     * @param string $dbiKey
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setDbiKey(?string $dbiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiKey) && !is_string($dbiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiKey, true), gettype($dbiKey)), __LINE__);
        }
        $this->dbiKey = $dbiKey;
        
        return $this;
    }
    /**
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setDefaultValue(?string $defaultValue = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get mapping value
     * @return string|null
     */
    public function getMapping(): ?string
    {
        return $this->mapping;
    }
    /**
     * Set mapping value
     * @param string $mapping
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setMapping(?string $mapping = null): self
    {
        // validation for constraint: string
        if (!is_null($mapping) && !is_string($mapping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mapping, true), gettype($mapping)), __LINE__);
        }
        $this->mapping = $mapping;
        
        return $this;
    }
    /**
     * Get matchCriteria value
     * @return string|null
     */
    public function getMatchCriteria(): ?string
    {
        return $this->matchCriteria;
    }
    /**
     * Set matchCriteria value
     * @param string $matchCriteria
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setMatchCriteria(?string $matchCriteria = null): self
    {
        // validation for constraint: string
        if (!is_null($matchCriteria) && !is_string($matchCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($matchCriteria, true), gettype($matchCriteria)), __LINE__);
        }
        $this->matchCriteria = $matchCriteria;
        
        return $this;
    }
    /**
     * Get maxlength value
     * @return int|null
     */
    public function getMaxlength(): ?int
    {
        return $this->maxlength;
    }
    /**
     * Set maxlength value
     * @param int $maxlength
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setMaxlength(?int $maxlength = null): self
    {
        // validation for constraint: int
        if (!is_null($maxlength) && !(is_int($maxlength) || ctype_digit($maxlength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxlength, true), gettype($maxlength)), __LINE__);
        }
        $this->maxlength = $maxlength;
        
        return $this;
    }
    /**
     * Get minlength value
     * @return int|null
     */
    public function getMinlength(): ?int
    {
        return $this->minlength;
    }
    /**
     * Set minlength value
     * @param int $minlength
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setMinlength(?int $minlength = null): self
    {
        // validation for constraint: int
        if (!is_null($minlength) && !(is_int($minlength) || ctype_digit($minlength))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minlength, true), gettype($minlength)), __LINE__);
        }
        $this->minlength = $minlength;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get rule value
     * @return string|null
     */
    public function getRule(): ?string
    {
        return $this->rule;
    }
    /**
     * Set rule value
     * @param string $rule
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setRule(?string $rule = null): self
    {
        // validation for constraint: string
        if (!is_null($rule) && !is_string($rule)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rule, true), gettype($rule)), __LINE__);
        }
        $this->rule = $rule;
        
        return $this;
    }
    /**
     * Get selection value
     * @return string|null
     */
    public function getSelection(): ?string
    {
        return $this->selection;
    }
    /**
     * Set selection value
     * @param string $selection
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setSelection(?string $selection = null): self
    {
        // validation for constraint: string
        if (!is_null($selection) && !is_string($selection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($selection, true), gettype($selection)), __LINE__);
        }
        $this->selection = $selection;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DbiDefDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
