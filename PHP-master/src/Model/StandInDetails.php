<?php
/**
 * StandInDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * The version of the OpenAPI document: 21.3.0.20210608.001
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * StandInDetails Class Doc Comment
 *
 * @category Class
 * @description Indicates standin transaction.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StandInDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandInDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'standInType' => 'string',
        'numberOfDebits' => 'string',
        'siValidated' => 'bool',
        'maximumTransactionAmount' => 'float',
        'siHubId' => 'string',
        'frequency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'standInType' => null,
        'numberOfDebits' => null,
        'siValidated' => null,
        'maximumTransactionAmount' => null,
        'siHubId' => null,
        'frequency' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'standInType' => 'standInType',
        'numberOfDebits' => 'numberOfDebits',
        'siValidated' => 'siValidated',
        'maximumTransactionAmount' => 'maximumTransactionAmount',
        'siHubId' => 'siHubId',
        'frequency' => 'frequency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'standInType' => 'setStandInType',
        'numberOfDebits' => 'setNumberOfDebits',
        'siValidated' => 'setSiValidated',
        'maximumTransactionAmount' => 'setMaximumTransactionAmount',
        'siHubId' => 'setSiHubId',
        'frequency' => 'setFrequency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standInType' => 'getStandInType',
        'numberOfDebits' => 'getNumberOfDebits',
        'siValidated' => 'getSiValidated',
        'maximumTransactionAmount' => 'getMaximumTransactionAmount',
        'siHubId' => 'getSiHubId',
        'frequency' => 'getFrequency'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const STAND_IN_TYPE_FIXED_AMOUNT = 'FIXED_AMOUNT';
    const STAND_IN_TYPE_MAXIMUM_AMOUNT = 'MAXIMUM_AMOUNT';
    const FREQUENCY_WEEKLY = 'WEEKLY';
    const FREQUENCY_FORTNIGHTLY = 'FORTNIGHTLY';
    const FREQUENCY_MONTHLY = 'MONTHLY';
    const FREQUENCY_QUARTERLY = 'QUARTERLY';
    const FREQUENCY_HALFYEARLY = 'HALFYEARLY';
    const FREQUENCY_YEARLY = 'YEARLY';
    const FREQUENCY_UNSCHEDULED = 'UNSCHEDULED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStandInTypeAllowableValues()
    {
        return [
            self::STAND_IN_TYPE_FIXED_AMOUNT,
            self::STAND_IN_TYPE_MAXIMUM_AMOUNT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_FORTNIGHTLY,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_QUARTERLY,
            self::FREQUENCY_HALFYEARLY,
            self::FREQUENCY_YEARLY,
            self::FREQUENCY_UNSCHEDULED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['standInType'] = isset($data['standInType']) ? $data['standInType'] : null;
        $this->container['numberOfDebits'] = isset($data['numberOfDebits']) ? $data['numberOfDebits'] : null;
        $this->container['siValidated'] = isset($data['siValidated']) ? $data['siValidated'] : null;
        $this->container['maximumTransactionAmount'] = isset($data['maximumTransactionAmount']) ? $data['maximumTransactionAmount'] : null;
        $this->container['siHubId'] = isset($data['siHubId']) ? $data['siHubId'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standInType'] === null) {
            $invalidProperties[] = "'standInType' can't be null";
        }
        $allowedValues = $this->getStandInTypeAllowableValues();
        if (!is_null($this->container['standInType']) && !in_array($this->container['standInType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'standInType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['numberOfDebits'] === null) {
            $invalidProperties[] = "'numberOfDebits' can't be null";
        }
        if (!preg_match("/(UN)|(ND)|([0-9]{2})/", $this->container['numberOfDebits'])) {
            $invalidProperties[] = "invalid value for 'numberOfDebits', must be conform to the pattern /(UN)|(ND)|([0-9]{2})/.";
        }

        if ($this->container['siValidated'] === null) {
            $invalidProperties[] = "'siValidated' can't be null";
        }
        if ($this->container['maximumTransactionAmount'] === null) {
            $invalidProperties[] = "'maximumTransactionAmount' can't be null";
        }
        if ($this->container['siHubId'] === null) {
            $invalidProperties[] = "'siHubId' can't be null";
        }
        if ((mb_strlen($this->container['siHubId']) > 10)) {
            $invalidProperties[] = "invalid value for 'siHubId', the character length must be smaller than or equal to 10.";
        }

        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets standInType
     *
     * @return string
     */
    public function getStandInType()
    {
        return $this->container['standInType'];
    }

    /**
     * Sets standInType
     *
     * @param string $standInType Indicates standin instruction type.
     *
     * @return $this
     */
    public function setStandInType($standInType)
    {
        $allowedValues = $this->getStandInTypeAllowableValues();
        if (!in_array($standInType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'standInType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['standInType'] = $standInType;

        return $this;
    }

    /**
     * Gets numberOfDebits
     *
     * @return string
     */
    public function getNumberOfDebits()
    {
        return $this->container['numberOfDebits'];
    }

    /**
     * Sets numberOfDebits
     *
     * @param string $numberOfDebits Indicates number of standin instruction debits.Possible values can be two digit number or UN (Until it is cancelled) or ND (Not defined).
     *
     * @return $this
     */
    public function setNumberOfDebits($numberOfDebits)
    {

        if ((!preg_match("/(UN)|(ND)|([0-9]{2})/", $numberOfDebits))) {
            throw new \InvalidArgumentException("invalid value for $numberOfDebits when calling StandInDetails., must conform to the pattern /(UN)|(ND)|([0-9]{2})/.");
        }

        $this->container['numberOfDebits'] = $numberOfDebits;

        return $this;
    }

    /**
     * Gets siValidated
     *
     * @return bool
     */
    public function getSiValidated()
    {
        return $this->container['siValidated'];
    }

    /**
     * Sets siValidated
     *
     * @param bool $siValidated Indicates standin instruction validation flag, it can be true or false. \"false\" - Not validated, \"true\" - Validated.
     *
     * @return $this
     */
    public function setSiValidated($siValidated)
    {
        $this->container['siValidated'] = $siValidated;

        return $this;
    }

    /**
     * Gets maximumTransactionAmount
     *
     * @return float
     */
    public function getMaximumTransactionAmount()
    {
        return $this->container['maximumTransactionAmount'];
    }

    /**
     * Sets maximumTransactionAmount
     *
     * @param float $maximumTransactionAmount Maximum debit amount per standin instruction transaction.
     *
     * @return $this
     */
    public function setMaximumTransactionAmount($maximumTransactionAmount)
    {
        $this->container['maximumTransactionAmount'] = $maximumTransactionAmount;

        return $this;
    }

    /**
     * Gets siHubId
     *
     * @return string
     */
    public function getSiHubId()
    {
        return $this->container['siHubId'];
    }

    /**
     * Sets siHubId
     *
     * @param string $siHubId Unique identifier for standin instruction.
     *
     * @return $this
     */
    public function setSiHubId($siHubId)
    {
        if ((mb_strlen($siHubId) > 10)) {
            throw new \InvalidArgumentException('invalid length for $siHubId when calling StandInDetails., must be smaller than or equal to 10.');
        }

        $this->container['siHubId'] = $siHubId;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency Indicates frequency of the standin instruction debit.
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


