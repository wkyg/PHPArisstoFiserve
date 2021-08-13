<?php
/**
 * RecurringPaymentDetails
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
 * RecurringPaymentDetails Class Doc Comment
 *
 * @category Class
 * @description Details about existing gateway schedule.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RecurringPaymentDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RecurringPaymentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'storeId' => 'string',
        'purchaseOrderNumber' => 'string',
        'invoiceNumber' => 'string',
        'creationDate' => 'string',
        'startDate' => 'string',
        'nextAttemptDate' => 'string',
        'transactionAmount' => '\FirstData\FirstApi\Client\Model\Amount',
        'paymentMethodDetails' => '\FirstData\FirstApi\Client\Model\PaymentMethodDetails',
        'frequency' => '\FirstData\FirstApi\Client\Model\Frequency',
        'numberOfPayments' => 'int',
        'runCount' => 'int',
        'state' => 'string',
        'comments' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'storeId' => null,
        'purchaseOrderNumber' => null,
        'invoiceNumber' => null,
        'creationDate' => null,
        'startDate' => null,
        'nextAttemptDate' => null,
        'transactionAmount' => null,
        'paymentMethodDetails' => null,
        'frequency' => null,
        'numberOfPayments' => 'int32',
        'runCount' => 'int32',
        'state' => null,
        'comments' => null
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
        'storeId' => 'storeId',
        'purchaseOrderNumber' => 'purchaseOrderNumber',
        'invoiceNumber' => 'invoiceNumber',
        'creationDate' => 'creationDate',
        'startDate' => 'startDate',
        'nextAttemptDate' => 'nextAttemptDate',
        'transactionAmount' => 'transactionAmount',
        'paymentMethodDetails' => 'paymentMethodDetails',
        'frequency' => 'frequency',
        'numberOfPayments' => 'numberOfPayments',
        'runCount' => 'runCount',
        'state' => 'state',
        'comments' => 'comments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'storeId' => 'setStoreId',
        'purchaseOrderNumber' => 'setPurchaseOrderNumber',
        'invoiceNumber' => 'setInvoiceNumber',
        'creationDate' => 'setCreationDate',
        'startDate' => 'setStartDate',
        'nextAttemptDate' => 'setNextAttemptDate',
        'transactionAmount' => 'setTransactionAmount',
        'paymentMethodDetails' => 'setPaymentMethodDetails',
        'frequency' => 'setFrequency',
        'numberOfPayments' => 'setNumberOfPayments',
        'runCount' => 'setRunCount',
        'state' => 'setState',
        'comments' => 'setComments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'storeId' => 'getStoreId',
        'purchaseOrderNumber' => 'getPurchaseOrderNumber',
        'invoiceNumber' => 'getInvoiceNumber',
        'creationDate' => 'getCreationDate',
        'startDate' => 'getStartDate',
        'nextAttemptDate' => 'getNextAttemptDate',
        'transactionAmount' => 'getTransactionAmount',
        'paymentMethodDetails' => 'getPaymentMethodDetails',
        'frequency' => 'getFrequency',
        'numberOfPayments' => 'getNumberOfPayments',
        'runCount' => 'getRunCount',
        'state' => 'getState',
        'comments' => 'getComments'
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

    const STATE_INSTALLED = 'Installed';
    const STATE_INACTIVATED = 'Inactivated';
    const STATE_CANCELLED = 'Cancelled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_INSTALLED,
            self::STATE_INACTIVATED,
            self::STATE_CANCELLED,
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
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['purchaseOrderNumber'] = isset($data['purchaseOrderNumber']) ? $data['purchaseOrderNumber'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['nextAttemptDate'] = isset($data['nextAttemptDate']) ? $data['nextAttemptDate'] : null;
        $this->container['transactionAmount'] = isset($data['transactionAmount']) ? $data['transactionAmount'] : null;
        $this->container['paymentMethodDetails'] = isset($data['paymentMethodDetails']) ? $data['paymentMethodDetails'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['numberOfPayments'] = isset($data['numberOfPayments']) ? $data['numberOfPayments'] : null;
        $this->container['runCount'] = isset($data['runCount']) ? $data['runCount'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['storeId']) && (mb_strlen($this->container['storeId']) > 20)) {
            $invalidProperties[] = "invalid value for 'storeId', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['numberOfPayments']) && ($this->container['numberOfPayments'] > 999)) {
            $invalidProperties[] = "invalid value for 'numberOfPayments', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['numberOfPayments']) && ($this->container['numberOfPayments'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberOfPayments', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['runCount']) && ($this->container['runCount'] > 999)) {
            $invalidProperties[] = "invalid value for 'runCount', must be smaller than or equal to 999.";
        }

        if (!is_null($this->container['runCount']) && ($this->container['runCount'] < 0)) {
            $invalidProperties[] = "invalid value for 'runCount', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
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
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId Store ID number.
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        if (!is_null($storeId) && (mb_strlen($storeId) > 20)) {
            throw new \InvalidArgumentException('invalid length for $storeId when calling RecurringPaymentDetails., must be smaller than or equal to 20.');
        }

        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets purchaseOrderNumber
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchaseOrderNumber'];
    }

    /**
     * Sets purchaseOrderNumber
     *
     * @param string|null $purchaseOrderNumber Purchase order number.
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->container['purchaseOrderNumber'] = $purchaseOrderNumber;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string|null $invoiceNumber Invoice number.
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param string|null $creationDate Date recurring payment was created.
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string|null $startDate Date of mandate signature.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets nextAttemptDate
     *
     * @return string|null
     */
    public function getNextAttemptDate()
    {
        return $this->container['nextAttemptDate'];
    }

    /**
     * Sets nextAttemptDate
     *
     * @param string|null $nextAttemptDate Date of next transaction process attempt.
     *
     * @return $this
     */
    public function setNextAttemptDate($nextAttemptDate)
    {
        $this->container['nextAttemptDate'] = $nextAttemptDate;

        return $this;
    }

    /**
     * Gets transactionAmount
     *
     * @return \FirstData\FirstApi\Client\Model\Amount|null
     */
    public function getTransactionAmount()
    {
        return $this->container['transactionAmount'];
    }

    /**
     * Sets transactionAmount
     *
     * @param \FirstData\FirstApi\Client\Model\Amount|null $transactionAmount transactionAmount
     *
     * @return $this
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->container['transactionAmount'] = $transactionAmount;

        return $this;
    }

    /**
     * Gets paymentMethodDetails
     *
     * @return \FirstData\FirstApi\Client\Model\PaymentMethodDetails|null
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['paymentMethodDetails'];
    }

    /**
     * Sets paymentMethodDetails
     *
     * @param \FirstData\FirstApi\Client\Model\PaymentMethodDetails|null $paymentMethodDetails paymentMethodDetails
     *
     * @return $this
     */
    public function setPaymentMethodDetails($paymentMethodDetails)
    {
        $this->container['paymentMethodDetails'] = $paymentMethodDetails;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return \FirstData\FirstApi\Client\Model\Frequency|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param \FirstData\FirstApi\Client\Model\Frequency|null $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets numberOfPayments
     *
     * @return int|null
     */
    public function getNumberOfPayments()
    {
        return $this->container['numberOfPayments'];
    }

    /**
     * Sets numberOfPayments
     *
     * @param int|null $numberOfPayments Number of times the recurring payment will process.
     *
     * @return $this
     */
    public function setNumberOfPayments($numberOfPayments)
    {

        if (!is_null($numberOfPayments) && ($numberOfPayments > 999)) {
            throw new \InvalidArgumentException('invalid value for $numberOfPayments when calling RecurringPaymentDetails., must be smaller than or equal to 999.');
        }
        if (!is_null($numberOfPayments) && ($numberOfPayments < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfPayments when calling RecurringPaymentDetails., must be bigger than or equal to 1.');
        }

        $this->container['numberOfPayments'] = $numberOfPayments;

        return $this;
    }

    /**
     * Gets runCount
     *
     * @return int|null
     */
    public function getRunCount()
    {
        return $this->container['runCount'];
    }

    /**
     * Sets runCount
     *
     * @param int|null $runCount Times the recurring payment has already run.
     *
     * @return $this
     */
    public function setRunCount($runCount)
    {

        if (!is_null($runCount) && ($runCount > 999)) {
            throw new \InvalidArgumentException('invalid value for $runCount when calling RecurringPaymentDetails., must be smaller than or equal to 999.');
        }
        if (!is_null($runCount) && ($runCount < 0)) {
            throw new \InvalidArgumentException('invalid value for $runCount when calling RecurringPaymentDetails., must be bigger than or equal to 0.');
        }

        $this->container['runCount'] = $runCount;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State of the recurring payment.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments User supplied comments.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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


