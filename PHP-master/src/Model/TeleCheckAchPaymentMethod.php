<?php
/**
 * TeleCheckAchPaymentMethod
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
 * TeleCheckAchPaymentMethod Class Doc Comment
 *
 * @category Class
 * @description ACH means automated clearing house. Contains properties common across TeleCheck message types. Abstract class, do not use this class directly, use one of its children.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeleCheckAchPaymentMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'achType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TeleCheckAchPaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'achType' => 'string',
        'routingNumber' => 'string',
        'accountNumber' => 'string',
        'accountType' => 'string',
        'checkNumber' => 'string',
        'checkType' => 'string',
        'productCode' => 'string',
        'manualIdInfo' => '\FirstData\FirstApi\Client\Model\IdInfo',
        'supplementIdInfo' => '\FirstData\FirstApi\Client\Model\IdInfo',
        'agentId' => 'string',
        'terminalId' => 'string',
        'registrationId' => 'string',
        'registrationDate' => '\DateTime',
        'releaseType' => 'string',
        'vipCustomer' => 'string',
        'sessionId' => 'string',
        'terminalState' => 'string',
        'terminalCity' => 'string',
        'achBillTo' => '\FirstData\FirstApi\Client\Model\TeleCheckAchPaymentMethodAchBillTo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'achType' => null,
        'routingNumber' => null,
        'accountNumber' => null,
        'accountType' => null,
        'checkNumber' => null,
        'checkType' => null,
        'productCode' => null,
        'manualIdInfo' => null,
        'supplementIdInfo' => null,
        'agentId' => null,
        'terminalId' => null,
        'registrationId' => null,
        'registrationDate' => 'date',
        'releaseType' => null,
        'vipCustomer' => null,
        'sessionId' => null,
        'terminalState' => null,
        'terminalCity' => null,
        'achBillTo' => null
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
        'achType' => 'achType',
        'routingNumber' => 'routingNumber',
        'accountNumber' => 'accountNumber',
        'accountType' => 'accountType',
        'checkNumber' => 'checkNumber',
        'checkType' => 'checkType',
        'productCode' => 'productCode',
        'manualIdInfo' => 'manualIdInfo',
        'supplementIdInfo' => 'supplementIdInfo',
        'agentId' => 'agentId',
        'terminalId' => 'terminalId',
        'registrationId' => 'registrationId',
        'registrationDate' => 'registrationDate',
        'releaseType' => 'releaseType',
        'vipCustomer' => 'vipCustomer',
        'sessionId' => 'sessionId',
        'terminalState' => 'terminalState',
        'terminalCity' => 'terminalCity',
        'achBillTo' => 'achBillTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'achType' => 'setAchType',
        'routingNumber' => 'setRoutingNumber',
        'accountNumber' => 'setAccountNumber',
        'accountType' => 'setAccountType',
        'checkNumber' => 'setCheckNumber',
        'checkType' => 'setCheckType',
        'productCode' => 'setProductCode',
        'manualIdInfo' => 'setManualIdInfo',
        'supplementIdInfo' => 'setSupplementIdInfo',
        'agentId' => 'setAgentId',
        'terminalId' => 'setTerminalId',
        'registrationId' => 'setRegistrationId',
        'registrationDate' => 'setRegistrationDate',
        'releaseType' => 'setReleaseType',
        'vipCustomer' => 'setVipCustomer',
        'sessionId' => 'setSessionId',
        'terminalState' => 'setTerminalState',
        'terminalCity' => 'setTerminalCity',
        'achBillTo' => 'setAchBillTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'achType' => 'getAchType',
        'routingNumber' => 'getRoutingNumber',
        'accountNumber' => 'getAccountNumber',
        'accountType' => 'getAccountType',
        'checkNumber' => 'getCheckNumber',
        'checkType' => 'getCheckType',
        'productCode' => 'getProductCode',
        'manualIdInfo' => 'getManualIdInfo',
        'supplementIdInfo' => 'getSupplementIdInfo',
        'agentId' => 'getAgentId',
        'terminalId' => 'getTerminalId',
        'registrationId' => 'getRegistrationId',
        'registrationDate' => 'getRegistrationDate',
        'releaseType' => 'getReleaseType',
        'vipCustomer' => 'getVipCustomer',
        'sessionId' => 'getSessionId',
        'terminalState' => 'getTerminalState',
        'terminalCity' => 'getTerminalCity',
        'achBillTo' => 'getAchBillTo'
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

    const ACCOUNT_TYPE_C = 'C';
    const ACCOUNT_TYPE_S = 'S';
    const CHECK_TYPE_P = 'P';
    const CHECK_TYPE_C = 'C';
    const RELEASE_TYPE_C = 'C';
    const RELEASE_TYPE_D = 'D';
    const RELEASE_TYPE_P = 'P';
    const RELEASE_TYPE_T = 'T';
    const VIP_CUSTOMER_Y = 'Y';
    const VIP_CUSTOMER_N = 'N';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_C,
            self::ACCOUNT_TYPE_S,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCheckTypeAllowableValues()
    {
        return [
            self::CHECK_TYPE_P,
            self::CHECK_TYPE_C,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReleaseTypeAllowableValues()
    {
        return [
            self::RELEASE_TYPE_C,
            self::RELEASE_TYPE_D,
            self::RELEASE_TYPE_P,
            self::RELEASE_TYPE_T,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVipCustomerAllowableValues()
    {
        return [
            self::VIP_CUSTOMER_Y,
            self::VIP_CUSTOMER_N,
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
        $this->container['achType'] = isset($data['achType']) ? $data['achType'] : null;
        $this->container['routingNumber'] = isset($data['routingNumber']) ? $data['routingNumber'] : null;
        $this->container['accountNumber'] = isset($data['accountNumber']) ? $data['accountNumber'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['checkNumber'] = isset($data['checkNumber']) ? $data['checkNumber'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
        $this->container['manualIdInfo'] = isset($data['manualIdInfo']) ? $data['manualIdInfo'] : null;
        $this->container['supplementIdInfo'] = isset($data['supplementIdInfo']) ? $data['supplementIdInfo'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['registrationId'] = isset($data['registrationId']) ? $data['registrationId'] : null;
        $this->container['registrationDate'] = isset($data['registrationDate']) ? $data['registrationDate'] : null;
        $this->container['releaseType'] = isset($data['releaseType']) ? $data['releaseType'] : null;
        $this->container['vipCustomer'] = isset($data['vipCustomer']) ? $data['vipCustomer'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['terminalState'] = isset($data['terminalState']) ? $data['terminalState'] : null;
        $this->container['terminalCity'] = isset($data['terminalCity']) ? $data['terminalCity'] : null;
        $this->container['achBillTo'] = isset($data['achBillTo']) ? $data['achBillTo'] : null;

        // Initialize discriminator property with the model name.
        $this->container['achType'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['achType'] === null) {
            $invalidProperties[] = "'achType' can't be null";
        }
        if ($this->container['routingNumber'] === null) {
            $invalidProperties[] = "'routingNumber' can't be null";
        }
        if ((mb_strlen($this->container['routingNumber']) > 9)) {
            $invalidProperties[] = "invalid value for 'routingNumber', the character length must be smaller than or equal to 9.";
        }

        if ((mb_strlen($this->container['routingNumber']) < 9)) {
            $invalidProperties[] = "invalid value for 'routingNumber', the character length must be bigger than or equal to 9.";
        }

        if (!preg_match("/^[0-9]+$/", $this->container['routingNumber'])) {
            $invalidProperties[] = "invalid value for 'routingNumber', must be conform to the pattern /^[0-9]+$/.";
        }

        if ($this->container['accountNumber'] === null) {
            $invalidProperties[] = "'accountNumber' can't be null";
        }
        if ((mb_strlen($this->container['accountNumber']) > 56)) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be smaller than or equal to 56.";
        }

        if ((mb_strlen($this->container['accountNumber']) < 1)) {
            $invalidProperties[] = "invalid value for 'accountNumber', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[0-9]+$/", $this->container['accountNumber'])) {
            $invalidProperties[] = "invalid value for 'accountNumber', must be conform to the pattern /^[0-9]+$/.";
        }

        if ($this->container['accountType'] === null) {
            $invalidProperties[] = "'accountType' can't be null";
        }
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['accountType']) && !in_array($this->container['accountType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accountType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['checkNumber']) && (mb_strlen($this->container['checkNumber']) > 10)) {
            $invalidProperties[] = "invalid value for 'checkNumber', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['checkNumber']) && !preg_match("/^[0-9]+$/", $this->container['checkNumber'])) {
            $invalidProperties[] = "invalid value for 'checkNumber', must be conform to the pattern /^[0-9]+$/.";
        }

        if ($this->container['checkType'] === null) {
            $invalidProperties[] = "'checkType' can't be null";
        }
        $allowedValues = $this->getCheckTypeAllowableValues();
        if (!is_null($this->container['checkType']) && !in_array($this->container['checkType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'checkType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['productCode']) && (mb_strlen($this->container['productCode']) > 6)) {
            $invalidProperties[] = "invalid value for 'productCode', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['productCode']) && !preg_match("/^[0-9]+$/", $this->container['productCode'])) {
            $invalidProperties[] = "invalid value for 'productCode', must be conform to the pattern /^[0-9]+$/.";
        }

        if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 6)) {
            $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['agentId']) && !preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['agentId'])) {
            $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if (!is_null($this->container['terminalId']) && (mb_strlen($this->container['terminalId']) > 10)) {
            $invalidProperties[] = "invalid value for 'terminalId', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['terminalId']) && !preg_match("/^[0-9]+$/", $this->container['terminalId'])) {
            $invalidProperties[] = "invalid value for 'terminalId', must be conform to the pattern /^[0-9]+$/.";
        }

        if (!is_null($this->container['registrationId']) && (mb_strlen($this->container['registrationId']) > 50)) {
            $invalidProperties[] = "invalid value for 'registrationId', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['registrationId']) && !preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['registrationId'])) {
            $invalidProperties[] = "invalid value for 'registrationId', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        $allowedValues = $this->getReleaseTypeAllowableValues();
        if (!is_null($this->container['releaseType']) && !in_array($this->container['releaseType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'releaseType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVipCustomerAllowableValues();
        if (!is_null($this->container['vipCustomer']) && !in_array($this->container['vipCustomer'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vipCustomer', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ((mb_strlen($this->container['sessionId']) > 128)) {
            $invalidProperties[] = "invalid value for 'sessionId', the character length must be smaller than or equal to 128.";
        }

        if (!preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['sessionId'])) {
            $invalidProperties[] = "invalid value for 'sessionId', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if (!is_null($this->container['terminalState']) && (mb_strlen($this->container['terminalState']) > 2)) {
            $invalidProperties[] = "invalid value for 'terminalState', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['terminalState']) && !preg_match("/^[A-Z]{2}$/", $this->container['terminalState'])) {
            $invalidProperties[] = "invalid value for 'terminalState', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if (!is_null($this->container['terminalCity']) && (mb_strlen($this->container['terminalCity']) > 16)) {
            $invalidProperties[] = "invalid value for 'terminalCity', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['terminalCity']) && !preg_match("/(?=.*[^\\s])^[^|]+$/", $this->container['terminalCity'])) {
            $invalidProperties[] = "invalid value for 'terminalCity', must be conform to the pattern /(?=.*[^\\s])^[^|]+$/.";
        }

        if ($this->container['achBillTo'] === null) {
            $invalidProperties[] = "'achBillTo' can't be null";
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
     * Gets achType
     *
     * @return string
     */
    public function getAchType()
    {
        return $this->container['achType'];
    }

    /**
     * Sets achType
     *
     * @param string $achType ACH application type values will be one of either TeleCheckICAPaymentMethod or TeleCheckCBPPaymentMethod.
     *
     * @return $this
     */
    public function setAchType($achType)
    {
        $this->container['achType'] = $achType;

        return $this;
    }

    /**
     * Gets routingNumber
     *
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->container['routingNumber'];
    }

    /**
     * Sets routingNumber
     *
     * @param string $routingNumber Bank routing number.
     *
     * @return $this
     */
    public function setRoutingNumber($routingNumber)
    {
        if ((mb_strlen($routingNumber) > 9)) {
            throw new \InvalidArgumentException('invalid length for $routingNumber when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 9.');
        }
        if ((mb_strlen($routingNumber) < 9)) {
            throw new \InvalidArgumentException('invalid length for $routingNumber when calling TeleCheckAchPaymentMethod., must be bigger than or equal to 9.');
        }
        if ((!preg_match("/^[0-9]+$/", $routingNumber))) {
            throw new \InvalidArgumentException("invalid value for $routingNumber when calling TeleCheckAchPaymentMethod., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['routingNumber'] = $routingNumber;

        return $this;
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
     * @param string $accountNumber Bank account number.
     *
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        if ((mb_strlen($accountNumber) > 56)) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 56.');
        }
        if ((mb_strlen($accountNumber) < 1)) {
            throw new \InvalidArgumentException('invalid length for $accountNumber when calling TeleCheckAchPaymentMethod., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9]+$/", $accountNumber))) {
            throw new \InvalidArgumentException("invalid value for $accountNumber when calling TeleCheckAchPaymentMethod., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     *
     * @param string $accountType Identifies if the account type is checking or savings.
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!in_array($accountType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accountType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets checkNumber
     *
     * @return string|null
     */
    public function getCheckNumber()
    {
        return $this->container['checkNumber'];
    }

    /**
     * Sets checkNumber
     *
     * @param string|null $checkNumber Check number.
     *
     * @return $this
     */
    public function setCheckNumber($checkNumber)
    {
        if (!is_null($checkNumber) && (mb_strlen($checkNumber) > 10)) {
            throw new \InvalidArgumentException('invalid length for $checkNumber when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 10.');
        }
        if (!is_null($checkNumber) && (!preg_match("/^[0-9]+$/", $checkNumber))) {
            throw new \InvalidArgumentException("invalid value for $checkNumber when calling TeleCheckAchPaymentMethod., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['checkNumber'] = $checkNumber;

        return $this;
    }

    /**
     * Gets checkType
     *
     * @return string
     */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
     * Sets checkType
     *
     * @param string $checkType Identifies if the check type is personal or company.
     *
     * @return $this
     */
    public function setCheckType($checkType)
    {
        $allowedValues = $this->getCheckTypeAllowableValues();
        if (!in_array($checkType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'checkType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['checkType'] = $checkType;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode Identifies the product code in the transaction.
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        if (!is_null($productCode) && (mb_strlen($productCode) > 6)) {
            throw new \InvalidArgumentException('invalid length for $productCode when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 6.');
        }
        if (!is_null($productCode) && (!preg_match("/^[0-9]+$/", $productCode))) {
            throw new \InvalidArgumentException("invalid value for $productCode when calling TeleCheckAchPaymentMethod., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets manualIdInfo
     *
     * @return \FirstData\FirstApi\Client\Model\IdInfo|null
     */
    public function getManualIdInfo()
    {
        return $this->container['manualIdInfo'];
    }

    /**
     * Sets manualIdInfo
     *
     * @param \FirstData\FirstApi\Client\Model\IdInfo|null $manualIdInfo manualIdInfo
     *
     * @return $this
     */
    public function setManualIdInfo($manualIdInfo)
    {
        $this->container['manualIdInfo'] = $manualIdInfo;

        return $this;
    }

    /**
     * Gets supplementIdInfo
     *
     * @return \FirstData\FirstApi\Client\Model\IdInfo|null
     */
    public function getSupplementIdInfo()
    {
        return $this->container['supplementIdInfo'];
    }

    /**
     * Sets supplementIdInfo
     *
     * @param \FirstData\FirstApi\Client\Model\IdInfo|null $supplementIdInfo supplementIdInfo
     *
     * @return $this
     */
    public function setSupplementIdInfo($supplementIdInfo)
    {
        $this->container['supplementIdInfo'] = $supplementIdInfo;

        return $this;
    }

    /**
     * Gets agentId
     *
     * @return string|null
     */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
     * Sets agentId
     *
     * @param string|null $agentId Used to track the agent transaction activity.
     *
     * @return $this
     */
    public function setAgentId($agentId)
    {
        if (!is_null($agentId) && (mb_strlen($agentId) > 6)) {
            throw new \InvalidArgumentException('invalid length for $agentId when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 6.');
        }
        if (!is_null($agentId) && (!preg_match("/(?=.*[^\\s])^[^|]+$/", $agentId))) {
            throw new \InvalidArgumentException("invalid value for $agentId when calling TeleCheckAchPaymentMethod., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['agentId'] = $agentId;

        return $this;
    }

    /**
     * Gets terminalId
     *
     * @return string|null
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     *
     * @param string|null $terminalId Identifies the register or lane number where the original sale transaction occurred.
     *
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        if (!is_null($terminalId) && (mb_strlen($terminalId) > 10)) {
            throw new \InvalidArgumentException('invalid length for $terminalId when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 10.');
        }
        if (!is_null($terminalId) && (!preg_match("/^[0-9]+$/", $terminalId))) {
            throw new \InvalidArgumentException("invalid value for $terminalId when calling TeleCheckAchPaymentMethod., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets registrationId
     *
     * @return string|null
     */
    public function getRegistrationId()
    {
        return $this->container['registrationId'];
    }

    /**
     * Sets registrationId
     *
     * @param string|null $registrationId Unique ID assigned by the merchant for the consumer (never recycled). It is an additional level of authentication. To use this feature, the merchant must work with TeleCheck Risk to discuss. Registration IDs must not be generated for an existing or returning consumer returns. The single registration ID must be unique per consumer.
     *
     * @return $this
     */
    public function setRegistrationId($registrationId)
    {
        if (!is_null($registrationId) && (mb_strlen($registrationId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $registrationId when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 50.');
        }
        if (!is_null($registrationId) && (!preg_match("/(?=.*[^\\s])^[^|]+$/", $registrationId))) {
            throw new \InvalidArgumentException("invalid value for $registrationId when calling TeleCheckAchPaymentMethod., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['registrationId'] = $registrationId;

        return $this;
    }

    /**
     * Gets registrationDate
     *
     * @return \DateTime|null
     */
    public function getRegistrationDate()
    {
        return $this->container['registrationDate'];
    }

    /**
     * Sets registrationDate
     *
     * @param \DateTime|null $registrationDate Date the consumer originally registered in format MMDDYYYY.
     *
     * @return $this
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->container['registrationDate'] = $registrationDate;

        return $this;
    }

    /**
     * Gets releaseType
     *
     * @return string|null
     */
    public function getReleaseType()
    {
        return $this->container['releaseType'];
    }

    /**
     * Sets releaseType
     *
     * @param string|null $releaseType Release type is used as a risk variable to gauge risk level when the merchant is releasing the purchased merchandise.
     *
     * @return $this
     */
    public function setReleaseType($releaseType)
    {
        $allowedValues = $this->getReleaseTypeAllowableValues();
        if (!is_null($releaseType) && !in_array($releaseType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'releaseType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['releaseType'] = $releaseType;

        return $this;
    }

    /**
     * Gets vipCustomer
     *
     * @return string|null
     */
    public function getVipCustomer()
    {
        return $this->container['vipCustomer'];
    }

    /**
     * Sets vipCustomer
     *
     * @param string|null $vipCustomer Flags a transaction as a VIP order (based on merchant criteria). This field should not be sent for non-VIP orders.
     *
     * @return $this
     */
    public function setVipCustomer($vipCustomer)
    {
        $allowedValues = $this->getVipCustomerAllowableValues();
        if (!is_null($vipCustomer) && !in_array($vipCustomer, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vipCustomer', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vipCustomer'] = $vipCustomer;

        return $this;
    }

    /**
     * Gets sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
     * Sets sessionId
     *
     * @param string $sessionId Session identifier.
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        if ((mb_strlen($sessionId) > 128)) {
            throw new \InvalidArgumentException('invalid length for $sessionId when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 128.');
        }
        if ((!preg_match("/(?=.*[^\\s])^[^|]+$/", $sessionId))) {
            throw new \InvalidArgumentException("invalid value for $sessionId when calling TeleCheckAchPaymentMethod., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['sessionId'] = $sessionId;

        return $this;
    }

    /**
     * Gets terminalState
     *
     * @return string|null
     */
    public function getTerminalState()
    {
        return $this->container['terminalState'];
    }

    /**
     * Sets terminalState
     *
     * @param string|null $terminalState Identifies the US state or territory where the original sale transaction occurred.
     *
     * @return $this
     */
    public function setTerminalState($terminalState)
    {
        if (!is_null($terminalState) && (mb_strlen($terminalState) > 2)) {
            throw new \InvalidArgumentException('invalid length for $terminalState when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 2.');
        }
        if (!is_null($terminalState) && (!preg_match("/^[A-Z]{2}$/", $terminalState))) {
            throw new \InvalidArgumentException("invalid value for $terminalState when calling TeleCheckAchPaymentMethod., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['terminalState'] = $terminalState;

        return $this;
    }

    /**
     * Gets terminalCity
     *
     * @return string|null
     */
    public function getTerminalCity()
    {
        return $this->container['terminalCity'];
    }

    /**
     * Sets terminalCity
     *
     * @param string|null $terminalCity Identifies the city where the original sale transaction occurred.
     *
     * @return $this
     */
    public function setTerminalCity($terminalCity)
    {
        if (!is_null($terminalCity) && (mb_strlen($terminalCity) > 16)) {
            throw new \InvalidArgumentException('invalid length for $terminalCity when calling TeleCheckAchPaymentMethod., must be smaller than or equal to 16.');
        }
        if (!is_null($terminalCity) && (!preg_match("/(?=.*[^\\s])^[^|]+$/", $terminalCity))) {
            throw new \InvalidArgumentException("invalid value for $terminalCity when calling TeleCheckAchPaymentMethod., must conform to the pattern /(?=.*[^\\s])^[^|]+$/.");
        }

        $this->container['terminalCity'] = $terminalCity;

        return $this;
    }

    /**
     * Gets achBillTo
     *
     * @return \FirstData\FirstApi\Client\Model\TeleCheckAchPaymentMethodAchBillTo
     */
    public function getAchBillTo()
    {
        return $this->container['achBillTo'];
    }

    /**
     * Sets achBillTo
     *
     * @param \FirstData\FirstApi\Client\Model\TeleCheckAchPaymentMethodAchBillTo $achBillTo achBillTo
     *
     * @return $this
     */
    public function setAchBillTo($achBillTo)
    {
        $this->container['achBillTo'] = $achBillTo;

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

