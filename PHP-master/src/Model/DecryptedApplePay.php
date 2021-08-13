<?php
/**
 * DecryptedApplePay
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
 * DecryptedApplePay Class Doc Comment
 *
 * @category Class
 * @description Decrypted Apple Pay payload.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DecryptedApplePay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DecryptedApplePay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountNumber' => 'string',
        'expiration' => 'string',
        'cardholderName' => 'string',
        'brand' => 'string',
        'cryptogram' => 'string',
        'eciIndicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accountNumber' => null,
        'expiration' => null,
        'cardholderName' => null,
        'brand' => null,
        'cryptogram' => null,
        'eciIndicator' => null
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
        'accountNumber' => 'accountNumber',
        'expiration' => 'expiration',
        'cardholderName' => 'cardholderName',
        'brand' => 'brand',
        'cryptogram' => 'cryptogram',
        'eciIndicator' => 'eciIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountNumber' => 'setAccountNumber',
        'expiration' => 'setExpiration',
        'cardholderName' => 'setCardholderName',
        'brand' => 'setBrand',
        'cryptogram' => 'setCryptogram',
        'eciIndicator' => 'setEciIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountNumber' => 'getAccountNumber',
        'expiration' => 'getExpiration',
        'cardholderName' => 'getCardholderName',
        'brand' => 'getBrand',
        'cryptogram' => 'getCryptogram',
        'eciIndicator' => 'getEciIndicator'
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
        $this->container['accountNumber'] = isset($data['accountNumber']) ? $data['accountNumber'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
        $this->container['cardholderName'] = isset($data['cardholderName']) ? $data['cardholderName'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['cryptogram'] = isset($data['cryptogram']) ? $data['cryptogram'] : null;
        $this->container['eciIndicator'] = isset($data['eciIndicator']) ? $data['eciIndicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accountNumber'] === null) {
            $invalidProperties[] = "'accountNumber' can't be null";
        }
        if (!preg_match("/[0-9]{13,19}/", $this->container['accountNumber'])) {
            $invalidProperties[] = "invalid value for 'accountNumber', must be conform to the pattern /[0-9]{13,19}/.";
        }

        if ($this->container['expiration'] === null) {
            $invalidProperties[] = "'expiration' can't be null";
        }
        if (!preg_match("/[0-9]{6}/", $this->container['expiration'])) {
            $invalidProperties[] = "invalid value for 'expiration', must be conform to the pattern /[0-9]{6}/.";
        }

        if (!is_null($this->container['cardholderName']) && (mb_strlen($this->container['cardholderName']) > 96)) {
            $invalidProperties[] = "invalid value for 'cardholderName', the character length must be smaller than or equal to 96.";
        }

        if (!is_null($this->container['cardholderName']) && !preg_match("/^(?!\\s*$).+/", $this->container['cardholderName'])) {
            $invalidProperties[] = "invalid value for 'cardholderName', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if (!is_null($this->container['brand']) && !preg_match("/^(?!\\s*$).+/", $this->container['brand'])) {
            $invalidProperties[] = "invalid value for 'brand', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if ($this->container['cryptogram'] === null) {
            $invalidProperties[] = "'cryptogram' can't be null";
        }
        if (!preg_match("/^(?!\\s*$).+/", $this->container['cryptogram'])) {
            $invalidProperties[] = "invalid value for 'cryptogram', must be conform to the pattern /^(?!\\s*$).+/.";
        }

        if (!is_null($this->container['eciIndicator']) && !preg_match("/[0-9]{2}/", $this->container['eciIndicator'])) {
            $invalidProperties[] = "invalid value for 'eciIndicator', must be conform to the pattern /[0-9]{2}/.";
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
     * Gets accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     *
     * @param string $accountNumber Payment card number.
     *
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {

        if ((!preg_match("/[0-9]{13,19}/", $accountNumber))) {
            throw new \InvalidArgumentException("invalid value for $accountNumber when calling DecryptedApplePay., must conform to the pattern /[0-9]{13,19}/.");
        }

        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return string
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param string $expiration Card expiration date in MMYYYY format.
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {

        if ((!preg_match("/[0-9]{6}/", $expiration))) {
            throw new \InvalidArgumentException("invalid value for $expiration when calling DecryptedApplePay., must conform to the pattern /[0-9]{6}/.");
        }

        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets cardholderName
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholderName'];
    }

    /**
     * Sets cardholderName
     *
     * @param string|null $cardholderName Name of the cardholder.
     *
     * @return $this
     */
    public function setCardholderName($cardholderName)
    {
        if (!is_null($cardholderName) && (mb_strlen($cardholderName) > 96)) {
            throw new \InvalidArgumentException('invalid length for $cardholderName when calling DecryptedApplePay., must be smaller than or equal to 96.');
        }
        if (!is_null($cardholderName) && (!preg_match("/^(?!\\s*$).+/", $cardholderName))) {
            throw new \InvalidArgumentException("invalid value for $cardholderName when calling DecryptedApplePay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['cardholderName'] = $cardholderName;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Card brand.
     *
     * @return $this
     */
    public function setBrand($brand)
    {

        if (!is_null($brand) && (!preg_match("/^(?!\\s*$).+/", $brand))) {
            throw new \InvalidArgumentException("invalid value for $brand when calling DecryptedApplePay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets cryptogram
     *
     * @return string
     */
    public function getCryptogram()
    {
        return $this->container['cryptogram'];
    }

    /**
     * Sets cryptogram
     *
     * @param string $cryptogram The wallet cryptogram from the decrypted data.
     *
     * @return $this
     */
    public function setCryptogram($cryptogram)
    {

        if ((!preg_match("/^(?!\\s*$).+/", $cryptogram))) {
            throw new \InvalidArgumentException("invalid value for $cryptogram when calling DecryptedApplePay., must conform to the pattern /^(?!\\s*$).+/.");
        }

        $this->container['cryptogram'] = $cryptogram;

        return $this;
    }

    /**
     * Gets eciIndicator
     *
     * @return string|null
     */
    public function getEciIndicator()
    {
        return $this->container['eciIndicator'];
    }

    /**
     * Sets eciIndicator
     *
     * @param string|null $eciIndicator The ECI indicator from the decrypted data.
     *
     * @return $this
     */
    public function setEciIndicator($eciIndicator)
    {

        if (!is_null($eciIndicator) && (!preg_match("/[0-9]{2}/", $eciIndicator))) {
            throw new \InvalidArgumentException("invalid value for $eciIndicator when calling DecryptedApplePay., must conform to the pattern /[0-9]{2}/.");
        }

        $this->container['eciIndicator'] = $eciIndicator;

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


