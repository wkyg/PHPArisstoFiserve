<?php
/**
 * Airline
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
 * Airline Class Doc Comment
 *
 * @category Class
 * @description Additional data specific to the airline industry.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Airline implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Airline';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'passengerName' => 'string',
        'ticketNumber' => 'string',
        'issuingCarrier' => 'string',
        'carrierName' => 'string',
        'travelAgencyIataCode' => 'string',
        'travelAgencyName' => 'string',
        'airlinePlanNumber' => 'string',
        'airlineInvoiceNumber' => 'string',
        'reservationSystem' => 'string',
        'restricted' => 'bool',
        'travelRoute' => '\FirstData\FirstApi\Client\Model\AirlineTravelRoute[]',
        'relatedTicketNumber' => 'string',
        'ancillaryServiceCategory' => '\FirstData\FirstApi\Client\Model\AirlineAncillaryServiceCategory[]',
        'ticketPurchase' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'passengerName' => null,
        'ticketNumber' => null,
        'issuingCarrier' => null,
        'carrierName' => null,
        'travelAgencyIataCode' => null,
        'travelAgencyName' => null,
        'airlinePlanNumber' => null,
        'airlineInvoiceNumber' => null,
        'reservationSystem' => null,
        'restricted' => null,
        'travelRoute' => null,
        'relatedTicketNumber' => null,
        'ancillaryServiceCategory' => null,
        'ticketPurchase' => null
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
        'passengerName' => 'passengerName',
        'ticketNumber' => 'ticketNumber',
        'issuingCarrier' => 'issuingCarrier',
        'carrierName' => 'carrierName',
        'travelAgencyIataCode' => 'travelAgencyIataCode',
        'travelAgencyName' => 'travelAgencyName',
        'airlinePlanNumber' => 'airlinePlanNumber',
        'airlineInvoiceNumber' => 'airlineInvoiceNumber',
        'reservationSystem' => 'reservationSystem',
        'restricted' => 'restricted',
        'travelRoute' => 'travelRoute',
        'relatedTicketNumber' => 'relatedTicketNumber',
        'ancillaryServiceCategory' => 'ancillaryServiceCategory',
        'ticketPurchase' => 'ticketPurchase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'passengerName' => 'setPassengerName',
        'ticketNumber' => 'setTicketNumber',
        'issuingCarrier' => 'setIssuingCarrier',
        'carrierName' => 'setCarrierName',
        'travelAgencyIataCode' => 'setTravelAgencyIataCode',
        'travelAgencyName' => 'setTravelAgencyName',
        'airlinePlanNumber' => 'setAirlinePlanNumber',
        'airlineInvoiceNumber' => 'setAirlineInvoiceNumber',
        'reservationSystem' => 'setReservationSystem',
        'restricted' => 'setRestricted',
        'travelRoute' => 'setTravelRoute',
        'relatedTicketNumber' => 'setRelatedTicketNumber',
        'ancillaryServiceCategory' => 'setAncillaryServiceCategory',
        'ticketPurchase' => 'setTicketPurchase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'passengerName' => 'getPassengerName',
        'ticketNumber' => 'getTicketNumber',
        'issuingCarrier' => 'getIssuingCarrier',
        'carrierName' => 'getCarrierName',
        'travelAgencyIataCode' => 'getTravelAgencyIataCode',
        'travelAgencyName' => 'getTravelAgencyName',
        'airlinePlanNumber' => 'getAirlinePlanNumber',
        'airlineInvoiceNumber' => 'getAirlineInvoiceNumber',
        'reservationSystem' => 'getReservationSystem',
        'restricted' => 'getRestricted',
        'travelRoute' => 'getTravelRoute',
        'relatedTicketNumber' => 'getRelatedTicketNumber',
        'ancillaryServiceCategory' => 'getAncillaryServiceCategory',
        'ticketPurchase' => 'getTicketPurchase'
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

    const RESERVATION_SYSTEM_START = 'START';
    const RESERVATION_SYSTEM_TWA = 'TWA';
    const RESERVATION_SYSTEM_DELTA = 'DELTA';
    const RESERVATION_SYSTEM_SABRE = 'SABRE';
    const RESERVATION_SYSTEM_COVIA_APOLLO = 'COVIA_APOLLO';
    const RESERVATION_SYSTEM_DR_BLANK = 'DR_BLANK';
    const RESERVATION_SYSTEM_DER = 'DER';
    const RESERVATION_SYSTEM_TUI = 'TUI';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReservationSystemAllowableValues()
    {
        return [
            self::RESERVATION_SYSTEM_START,
            self::RESERVATION_SYSTEM_TWA,
            self::RESERVATION_SYSTEM_DELTA,
            self::RESERVATION_SYSTEM_SABRE,
            self::RESERVATION_SYSTEM_COVIA_APOLLO,
            self::RESERVATION_SYSTEM_DR_BLANK,
            self::RESERVATION_SYSTEM_DER,
            self::RESERVATION_SYSTEM_TUI,
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
        $this->container['passengerName'] = isset($data['passengerName']) ? $data['passengerName'] : null;
        $this->container['ticketNumber'] = isset($data['ticketNumber']) ? $data['ticketNumber'] : null;
        $this->container['issuingCarrier'] = isset($data['issuingCarrier']) ? $data['issuingCarrier'] : null;
        $this->container['carrierName'] = isset($data['carrierName']) ? $data['carrierName'] : null;
        $this->container['travelAgencyIataCode'] = isset($data['travelAgencyIataCode']) ? $data['travelAgencyIataCode'] : null;
        $this->container['travelAgencyName'] = isset($data['travelAgencyName']) ? $data['travelAgencyName'] : null;
        $this->container['airlinePlanNumber'] = isset($data['airlinePlanNumber']) ? $data['airlinePlanNumber'] : null;
        $this->container['airlineInvoiceNumber'] = isset($data['airlineInvoiceNumber']) ? $data['airlineInvoiceNumber'] : null;
        $this->container['reservationSystem'] = isset($data['reservationSystem']) ? $data['reservationSystem'] : null;
        $this->container['restricted'] = isset($data['restricted']) ? $data['restricted'] : null;
        $this->container['travelRoute'] = isset($data['travelRoute']) ? $data['travelRoute'] : null;
        $this->container['relatedTicketNumber'] = isset($data['relatedTicketNumber']) ? $data['relatedTicketNumber'] : null;
        $this->container['ancillaryServiceCategory'] = isset($data['ancillaryServiceCategory']) ? $data['ancillaryServiceCategory'] : null;
        $this->container['ticketPurchase'] = isset($data['ticketPurchase']) ? $data['ticketPurchase'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['passengerName']) && (mb_strlen($this->container['passengerName']) > 30)) {
            $invalidProperties[] = "invalid value for 'passengerName', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['ticketNumber']) && (mb_strlen($this->container['ticketNumber']) > 20)) {
            $invalidProperties[] = "invalid value for 'ticketNumber', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['issuingCarrier']) && (mb_strlen($this->container['issuingCarrier']) > 20)) {
            $invalidProperties[] = "invalid value for 'issuingCarrier', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['carrierName']) && (mb_strlen($this->container['carrierName']) > 20)) {
            $invalidProperties[] = "invalid value for 'carrierName', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['travelAgencyIataCode']) && (mb_strlen($this->container['travelAgencyIataCode']) > 20)) {
            $invalidProperties[] = "invalid value for 'travelAgencyIataCode', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['travelAgencyName']) && (mb_strlen($this->container['travelAgencyName']) > 30)) {
            $invalidProperties[] = "invalid value for 'travelAgencyName', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['airlinePlanNumber']) && (mb_strlen($this->container['airlinePlanNumber']) > 2)) {
            $invalidProperties[] = "invalid value for 'airlinePlanNumber', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['airlineInvoiceNumber']) && (mb_strlen($this->container['airlineInvoiceNumber']) > 6)) {
            $invalidProperties[] = "invalid value for 'airlineInvoiceNumber', the character length must be smaller than or equal to 6.";
        }

        $allowedValues = $this->getReservationSystemAllowableValues();
        if (!is_null($this->container['reservationSystem']) && !in_array($this->container['reservationSystem'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reservationSystem', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['relatedTicketNumber']) && (mb_strlen($this->container['relatedTicketNumber']) > 20)) {
            $invalidProperties[] = "invalid value for 'relatedTicketNumber', the character length must be smaller than or equal to 20.";
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
     * Gets passengerName
     *
     * @return string|null
     */
    public function getPassengerName()
    {
        return $this->container['passengerName'];
    }

    /**
     * Sets passengerName
     *
     * @param string|null $passengerName The passenger name associated with the transaction.
     *
     * @return $this
     */
    public function setPassengerName($passengerName)
    {
        if (!is_null($passengerName) && (mb_strlen($passengerName) > 30)) {
            throw new \InvalidArgumentException('invalid length for $passengerName when calling Airline., must be smaller than or equal to 30.');
        }

        $this->container['passengerName'] = $passengerName;

        return $this;
    }

    /**
     * Gets ticketNumber
     *
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->container['ticketNumber'];
    }

    /**
     * Sets ticketNumber
     *
     * @param string|null $ticketNumber The airline ticket number associated with the transaction.
     *
     * @return $this
     */
    public function setTicketNumber($ticketNumber)
    {
        if (!is_null($ticketNumber) && (mb_strlen($ticketNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $ticketNumber when calling Airline., must be smaller than or equal to 20.');
        }

        $this->container['ticketNumber'] = $ticketNumber;

        return $this;
    }

    /**
     * Gets issuingCarrier
     *
     * @return string|null
     */
    public function getIssuingCarrier()
    {
        return $this->container['issuingCarrier'];
    }

    /**
     * Sets issuingCarrier
     *
     * @param string|null $issuingCarrier The carrier that issued the ticket.
     *
     * @return $this
     */
    public function setIssuingCarrier($issuingCarrier)
    {
        if (!is_null($issuingCarrier) && (mb_strlen($issuingCarrier) > 20)) {
            throw new \InvalidArgumentException('invalid length for $issuingCarrier when calling Airline., must be smaller than or equal to 20.');
        }

        $this->container['issuingCarrier'] = $issuingCarrier;

        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string|null $carrierName The carrier associated with the transaction.
     *
     * @return $this
     */
    public function setCarrierName($carrierName)
    {
        if (!is_null($carrierName) && (mb_strlen($carrierName) > 20)) {
            throw new \InvalidArgumentException('invalid length for $carrierName when calling Airline., must be smaller than or equal to 20.');
        }

        $this->container['carrierName'] = $carrierName;

        return $this;
    }

    /**
     * Gets travelAgencyIataCode
     *
     * @return string|null
     */
    public function getTravelAgencyIataCode()
    {
        return $this->container['travelAgencyIataCode'];
    }

    /**
     * Sets travelAgencyIataCode
     *
     * @param string|null $travelAgencyIataCode The IATA code associated with the travel agency.
     *
     * @return $this
     */
    public function setTravelAgencyIataCode($travelAgencyIataCode)
    {
        if (!is_null($travelAgencyIataCode) && (mb_strlen($travelAgencyIataCode) > 20)) {
            throw new \InvalidArgumentException('invalid length for $travelAgencyIataCode when calling Airline., must be smaller than or equal to 20.');
        }

        $this->container['travelAgencyIataCode'] = $travelAgencyIataCode;

        return $this;
    }

    /**
     * Gets travelAgencyName
     *
     * @return string|null
     */
    public function getTravelAgencyName()
    {
        return $this->container['travelAgencyName'];
    }

    /**
     * Sets travelAgencyName
     *
     * @param string|null $travelAgencyName The business name of the travel agency.
     *
     * @return $this
     */
    public function setTravelAgencyName($travelAgencyName)
    {
        if (!is_null($travelAgencyName) && (mb_strlen($travelAgencyName) > 30)) {
            throw new \InvalidArgumentException('invalid length for $travelAgencyName when calling Airline., must be smaller than or equal to 30.');
        }

        $this->container['travelAgencyName'] = $travelAgencyName;

        return $this;
    }

    /**
     * Gets airlinePlanNumber
     *
     * @return string|null
     */
    public function getAirlinePlanNumber()
    {
        return $this->container['airlinePlanNumber'];
    }

    /**
     * Sets airlinePlanNumber
     *
     * @param string|null $airlinePlanNumber The airline plan number associated with the transaction.
     *
     * @return $this
     */
    public function setAirlinePlanNumber($airlinePlanNumber)
    {
        if (!is_null($airlinePlanNumber) && (mb_strlen($airlinePlanNumber) > 2)) {
            throw new \InvalidArgumentException('invalid length for $airlinePlanNumber when calling Airline., must be smaller than or equal to 2.');
        }

        $this->container['airlinePlanNumber'] = $airlinePlanNumber;

        return $this;
    }

    /**
     * Gets airlineInvoiceNumber
     *
     * @return string|null
     */
    public function getAirlineInvoiceNumber()
    {
        return $this->container['airlineInvoiceNumber'];
    }

    /**
     * Sets airlineInvoiceNumber
     *
     * @param string|null $airlineInvoiceNumber The invoice number used by the airline.
     *
     * @return $this
     */
    public function setAirlineInvoiceNumber($airlineInvoiceNumber)
    {
        if (!is_null($airlineInvoiceNumber) && (mb_strlen($airlineInvoiceNumber) > 6)) {
            throw new \InvalidArgumentException('invalid length for $airlineInvoiceNumber when calling Airline., must be smaller than or equal to 6.');
        }

        $this->container['airlineInvoiceNumber'] = $airlineInvoiceNumber;

        return $this;
    }

    /**
     * Gets reservationSystem
     *
     * @return string|null
     */
    public function getReservationSystem()
    {
        return $this->container['reservationSystem'];
    }

    /**
     * Sets reservationSystem
     *
     * @param string|null $reservationSystem The reservation system used to create the ticket.
     *
     * @return $this
     */
    public function setReservationSystem($reservationSystem)
    {
        $allowedValues = $this->getReservationSystemAllowableValues();
        if (!is_null($reservationSystem) && !in_array($reservationSystem, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reservationSystem', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reservationSystem'] = $reservationSystem;

        return $this;
    }

    /**
     * Gets restricted
     *
     * @return bool|null
     */
    public function getRestricted()
    {
        return $this->container['restricted'];
    }

    /**
     * Sets restricted
     *
     * @param bool|null $restricted If the transaction is associated with a restricted class fare.
     *
     * @return $this
     */
    public function setRestricted($restricted)
    {
        $this->container['restricted'] = $restricted;

        return $this;
    }

    /**
     * Gets travelRoute
     *
     * @return \FirstData\FirstApi\Client\Model\AirlineTravelRoute[]|null
     */
    public function getTravelRoute()
    {
        return $this->container['travelRoute'];
    }

    /**
     * Sets travelRoute
     *
     * @param \FirstData\FirstApi\Client\Model\AirlineTravelRoute[]|null $travelRoute Array containing up to 4 items that describe the route associated with the transaction.
     *
     * @return $this
     */
    public function setTravelRoute($travelRoute)
    {
        $this->container['travelRoute'] = $travelRoute;

        return $this;
    }

    /**
     * Gets relatedTicketNumber
     *
     * @return string|null
     */
    public function getRelatedTicketNumber()
    {
        return $this->container['relatedTicketNumber'];
    }

    /**
     * Sets relatedTicketNumber
     *
     * @param string|null $relatedTicketNumber The number of any other tickets associated with the transaction ticket.
     *
     * @return $this
     */
    public function setRelatedTicketNumber($relatedTicketNumber)
    {
        if (!is_null($relatedTicketNumber) && (mb_strlen($relatedTicketNumber) > 20)) {
            throw new \InvalidArgumentException('invalid length for $relatedTicketNumber when calling Airline., must be smaller than or equal to 20.');
        }

        $this->container['relatedTicketNumber'] = $relatedTicketNumber;

        return $this;
    }

    /**
     * Gets ancillaryServiceCategory
     *
     * @return \FirstData\FirstApi\Client\Model\AirlineAncillaryServiceCategory[]|null
     */
    public function getAncillaryServiceCategory()
    {
        return $this->container['ancillaryServiceCategory'];
    }

    /**
     * Sets ancillaryServiceCategory
     *
     * @param \FirstData\FirstApi\Client\Model\AirlineAncillaryServiceCategory[]|null $ancillaryServiceCategory Identify the purchase of ancillary goods or services with a false value. If this element is not provided, the transaction is assumed to be a purchase of an airline ticket.
     *
     * @return $this
     */
    public function setAncillaryServiceCategory($ancillaryServiceCategory)
    {
        $this->container['ancillaryServiceCategory'] = $ancillaryServiceCategory;

        return $this;
    }

    /**
     * Gets ticketPurchase
     *
     * @return bool|null
     */
    public function getTicketPurchase()
    {
        return $this->container['ticketPurchase'];
    }

    /**
     * Sets ticketPurchase
     *
     * @param bool|null $ticketPurchase Identifies if the transaction is a ticket purchase.
     *
     * @return $this
     */
    public function setTicketPurchase($ticketPurchase)
    {
        $this->container['ticketPurchase'] = $ticketPurchase;

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

