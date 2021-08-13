<?php
/**
 * IndustrySpecificExtensions
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
 * IndustrySpecificExtensions Class Doc Comment
 *
 * @category Class
 * @description Industry-specific information.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IndustrySpecificExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IndustrySpecificExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'airline' => '\FirstData\FirstApi\Client\Model\Airline',
        'lodging' => '\FirstData\FirstApi\Client\Model\Lodging',
        'carRental' => '\FirstData\FirstApi\Client\Model\CarRental',
        'mcc6012' => '\FirstData\FirstApi\Client\Model\Mcc6012'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'airline' => null,
        'lodging' => null,
        'carRental' => null,
        'mcc6012' => null
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
        'airline' => 'airline',
        'lodging' => 'lodging',
        'carRental' => 'carRental',
        'mcc6012' => 'mcc6012'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'airline' => 'setAirline',
        'lodging' => 'setLodging',
        'carRental' => 'setCarRental',
        'mcc6012' => 'setMcc6012'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'airline' => 'getAirline',
        'lodging' => 'getLodging',
        'carRental' => 'getCarRental',
        'mcc6012' => 'getMcc6012'
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
        $this->container['airline'] = isset($data['airline']) ? $data['airline'] : null;
        $this->container['lodging'] = isset($data['lodging']) ? $data['lodging'] : null;
        $this->container['carRental'] = isset($data['carRental']) ? $data['carRental'] : null;
        $this->container['mcc6012'] = isset($data['mcc6012']) ? $data['mcc6012'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets airline
     *
     * @return \FirstData\FirstApi\Client\Model\Airline|null
     */
    public function getAirline()
    {
        return $this->container['airline'];
    }

    /**
     * Sets airline
     *
     * @param \FirstData\FirstApi\Client\Model\Airline|null $airline airline
     *
     * @return $this
     */
    public function setAirline($airline)
    {
        $this->container['airline'] = $airline;

        return $this;
    }

    /**
     * Gets lodging
     *
     * @return \FirstData\FirstApi\Client\Model\Lodging|null
     */
    public function getLodging()
    {
        return $this->container['lodging'];
    }

    /**
     * Sets lodging
     *
     * @param \FirstData\FirstApi\Client\Model\Lodging|null $lodging lodging
     *
     * @return $this
     */
    public function setLodging($lodging)
    {
        $this->container['lodging'] = $lodging;

        return $this;
    }

    /**
     * Gets carRental
     *
     * @return \FirstData\FirstApi\Client\Model\CarRental|null
     */
    public function getCarRental()
    {
        return $this->container['carRental'];
    }

    /**
     * Sets carRental
     *
     * @param \FirstData\FirstApi\Client\Model\CarRental|null $carRental carRental
     *
     * @return $this
     */
    public function setCarRental($carRental)
    {
        $this->container['carRental'] = $carRental;

        return $this;
    }

    /**
     * Gets mcc6012
     *
     * @return \FirstData\FirstApi\Client\Model\Mcc6012|null
     */
    public function getMcc6012()
    {
        return $this->container['mcc6012'];
    }

    /**
     * Sets mcc6012
     *
     * @param \FirstData\FirstApi\Client\Model\Mcc6012|null $mcc6012 mcc6012
     *
     * @return $this
     */
    public function setMcc6012($mcc6012)
    {
        $this->container['mcc6012'] = $mcc6012;

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

