<?php
/**
 * HotelRoom
 *
 * PHP version 5
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Membercare API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * Contact: support@membercare.dk
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Membercare\Client\Model;

use \ArrayAccess;
use \Membercare\Client\ObjectSerializer;

/**
 * HotelRoom Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HotelRoom implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HotelRoom';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'amount' => 'int',
        'price' => 'double',
        'finance_dimensions' => '\Membercare\Client\Model\FinanceDimensions',
        'participant_category' => '\Membercare\Client\Model\ParticipantCategory',
        'sequence' => 'int',
        'web_enabled' => 'bool',
        'available_amount' => 'int',
        'service_type' => '\Membercare\Client\Model\CourseServiceType',
        'mandatory' => 'bool',
        'discount_allowed' => 'bool',
        'maximum_amount' => 'int',
        'maximum_amount_participant' => 'int',
        'change_amount_allowed' => 'bool',
        'allow_partial_booking' => 'bool',
        'reserved_from_date' => '\DateTime',
        'reserved_to_date' => '\DateTime',
        'hotel' => '\Membercare\Client\Model\Hotel',
        'number_of_beds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'amount' => 'int64',
        'price' => 'double',
        'finance_dimensions' => null,
        'participant_category' => null,
        'sequence' => 'int64',
        'web_enabled' => null,
        'available_amount' => 'int64',
        'service_type' => null,
        'mandatory' => null,
        'discount_allowed' => null,
        'maximum_amount' => 'int64',
        'maximum_amount_participant' => 'int64',
        'change_amount_allowed' => null,
        'allow_partial_booking' => null,
        'reserved_from_date' => 'date-time',
        'reserved_to_date' => 'date-time',
        'hotel' => null,
        'number_of_beds' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'amount' => 'amount',
        'price' => 'price',
        'finance_dimensions' => 'financeDimensions',
        'participant_category' => 'participantCategory',
        'sequence' => 'sequence',
        'web_enabled' => 'webEnabled',
        'available_amount' => 'availableAmount',
        'service_type' => 'serviceType',
        'mandatory' => 'mandatory',
        'discount_allowed' => 'discountAllowed',
        'maximum_amount' => 'maximumAmount',
        'maximum_amount_participant' => 'maximumAmountParticipant',
        'change_amount_allowed' => 'changeAmountAllowed',
        'allow_partial_booking' => 'allowPartialBooking',
        'reserved_from_date' => 'reservedFromDate',
        'reserved_to_date' => 'reservedToDate',
        'hotel' => 'hotel',
        'number_of_beds' => 'numberOfBeds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'finance_dimensions' => 'setFinanceDimensions',
        'participant_category' => 'setParticipantCategory',
        'sequence' => 'setSequence',
        'web_enabled' => 'setWebEnabled',
        'available_amount' => 'setAvailableAmount',
        'service_type' => 'setServiceType',
        'mandatory' => 'setMandatory',
        'discount_allowed' => 'setDiscountAllowed',
        'maximum_amount' => 'setMaximumAmount',
        'maximum_amount_participant' => 'setMaximumAmountParticipant',
        'change_amount_allowed' => 'setChangeAmountAllowed',
        'allow_partial_booking' => 'setAllowPartialBooking',
        'reserved_from_date' => 'setReservedFromDate',
        'reserved_to_date' => 'setReservedToDate',
        'hotel' => 'setHotel',
        'number_of_beds' => 'setNumberOfBeds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'finance_dimensions' => 'getFinanceDimensions',
        'participant_category' => 'getParticipantCategory',
        'sequence' => 'getSequence',
        'web_enabled' => 'getWebEnabled',
        'available_amount' => 'getAvailableAmount',
        'service_type' => 'getServiceType',
        'mandatory' => 'getMandatory',
        'discount_allowed' => 'getDiscountAllowed',
        'maximum_amount' => 'getMaximumAmount',
        'maximum_amount_participant' => 'getMaximumAmountParticipant',
        'change_amount_allowed' => 'getChangeAmountAllowed',
        'allow_partial_booking' => 'getAllowPartialBooking',
        'reserved_from_date' => 'getReservedFromDate',
        'reserved_to_date' => 'getReservedToDate',
        'hotel' => 'getHotel',
        'number_of_beds' => 'getNumberOfBeds'
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['finance_dimensions'] = isset($data['finance_dimensions']) ? $data['finance_dimensions'] : null;
        $this->container['participant_category'] = isset($data['participant_category']) ? $data['participant_category'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['web_enabled'] = isset($data['web_enabled']) ? $data['web_enabled'] : null;
        $this->container['available_amount'] = isset($data['available_amount']) ? $data['available_amount'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['mandatory'] = isset($data['mandatory']) ? $data['mandatory'] : null;
        $this->container['discount_allowed'] = isset($data['discount_allowed']) ? $data['discount_allowed'] : null;
        $this->container['maximum_amount'] = isset($data['maximum_amount']) ? $data['maximum_amount'] : null;
        $this->container['maximum_amount_participant'] = isset($data['maximum_amount_participant']) ? $data['maximum_amount_participant'] : null;
        $this->container['change_amount_allowed'] = isset($data['change_amount_allowed']) ? $data['change_amount_allowed'] : null;
        $this->container['allow_partial_booking'] = isset($data['allow_partial_booking']) ? $data['allow_partial_booking'] : null;
        $this->container['reserved_from_date'] = isset($data['reserved_from_date']) ? $data['reserved_from_date'] : null;
        $this->container['reserved_to_date'] = isset($data['reserved_to_date']) ? $data['reserved_to_date'] : null;
        $this->container['hotel'] = isset($data['hotel']) ? $data['hotel'] : null;
        $this->container['number_of_beds'] = isset($data['number_of_beds']) ? $data['number_of_beds'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The identification number of the service.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the service
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The default amount for the service.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price The price of the service
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets finance_dimensions
     *
     * @return \Membercare\Client\Model\FinanceDimensions
     */
    public function getFinanceDimensions()
    {
        return $this->container['finance_dimensions'];
    }

    /**
     * Sets finance_dimensions
     *
     * @param \Membercare\Client\Model\FinanceDimensions $finance_dimensions finance_dimensions
     *
     * @return $this
     */
    public function setFinanceDimensions($finance_dimensions)
    {
        $this->container['finance_dimensions'] = $finance_dimensions;

        return $this;
    }

    /**
     * Gets participant_category
     *
     * @return \Membercare\Client\Model\ParticipantCategory
     */
    public function getParticipantCategory()
    {
        return $this->container['participant_category'];
    }

    /**
     * Sets participant_category
     *
     * @param \Membercare\Client\Model\ParticipantCategory $participant_category participant_category
     *
     * @return $this
     */
    public function setParticipantCategory($participant_category)
    {
        $this->container['participant_category'] = $participant_category;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence The ordering sequence of the service
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets web_enabled
     *
     * @return bool
     */
    public function getWebEnabled()
    {
        return $this->container['web_enabled'];
    }

    /**
     * Sets web_enabled
     *
     * @param bool $web_enabled Indicates whether or not to display the service on web.
     *
     * @return $this
     */
    public function setWebEnabled($web_enabled)
    {
        $this->container['web_enabled'] = $web_enabled;

        return $this;
    }

    /**
     * Gets available_amount
     *
     * @return int
     */
    public function getAvailableAmount()
    {
        return $this->container['available_amount'];
    }

    /**
     * Sets available_amount
     *
     * @param int $available_amount The avaliable amount for the service.
     *
     * @return $this
     */
    public function setAvailableAmount($available_amount)
    {
        $this->container['available_amount'] = $available_amount;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return \Membercare\Client\Model\CourseServiceType
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param \Membercare\Client\Model\CourseServiceType $service_type service_type
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets mandatory
     *
     * @return bool
     */
    public function getMandatory()
    {
        return $this->container['mandatory'];
    }

    /**
     * Sets mandatory
     *
     * @param bool $mandatory mandatory
     *
     * @return $this
     */
    public function setMandatory($mandatory)
    {
        $this->container['mandatory'] = $mandatory;

        return $this;
    }

    /**
     * Gets discount_allowed
     *
     * @return bool
     */
    public function getDiscountAllowed()
    {
        return $this->container['discount_allowed'];
    }

    /**
     * Sets discount_allowed
     *
     * @param bool $discount_allowed discount_allowed
     *
     * @return $this
     */
    public function setDiscountAllowed($discount_allowed)
    {
        $this->container['discount_allowed'] = $discount_allowed;

        return $this;
    }

    /**
     * Gets maximum_amount
     *
     * @return int
     */
    public function getMaximumAmount()
    {
        return $this->container['maximum_amount'];
    }

    /**
     * Sets maximum_amount
     *
     * @param int $maximum_amount maximum_amount
     *
     * @return $this
     */
    public function setMaximumAmount($maximum_amount)
    {
        $this->container['maximum_amount'] = $maximum_amount;

        return $this;
    }

    /**
     * Gets maximum_amount_participant
     *
     * @return int
     */
    public function getMaximumAmountParticipant()
    {
        return $this->container['maximum_amount_participant'];
    }

    /**
     * Sets maximum_amount_participant
     *
     * @param int $maximum_amount_participant maximum_amount_participant
     *
     * @return $this
     */
    public function setMaximumAmountParticipant($maximum_amount_participant)
    {
        $this->container['maximum_amount_participant'] = $maximum_amount_participant;

        return $this;
    }

    /**
     * Gets change_amount_allowed
     *
     * @return bool
     */
    public function getChangeAmountAllowed()
    {
        return $this->container['change_amount_allowed'];
    }

    /**
     * Sets change_amount_allowed
     *
     * @param bool $change_amount_allowed change_amount_allowed
     *
     * @return $this
     */
    public function setChangeAmountAllowed($change_amount_allowed)
    {
        $this->container['change_amount_allowed'] = $change_amount_allowed;

        return $this;
    }

    /**
     * Gets allow_partial_booking
     *
     * @return bool
     */
    public function getAllowPartialBooking()
    {
        return $this->container['allow_partial_booking'];
    }

    /**
     * Sets allow_partial_booking
     *
     * @param bool $allow_partial_booking allow_partial_booking
     *
     * @return $this
     */
    public function setAllowPartialBooking($allow_partial_booking)
    {
        $this->container['allow_partial_booking'] = $allow_partial_booking;

        return $this;
    }

    /**
     * Gets reserved_from_date
     *
     * @return \DateTime
     */
    public function getReservedFromDate()
    {
        return $this->container['reserved_from_date'];
    }

    /**
     * Sets reserved_from_date
     *
     * @param \DateTime $reserved_from_date reserved_from_date
     *
     * @return $this
     */
    public function setReservedFromDate($reserved_from_date)
    {
        $this->container['reserved_from_date'] = $reserved_from_date;

        return $this;
    }

    /**
     * Gets reserved_to_date
     *
     * @return \DateTime
     */
    public function getReservedToDate()
    {
        return $this->container['reserved_to_date'];
    }

    /**
     * Sets reserved_to_date
     *
     * @param \DateTime $reserved_to_date reserved_to_date
     *
     * @return $this
     */
    public function setReservedToDate($reserved_to_date)
    {
        $this->container['reserved_to_date'] = $reserved_to_date;

        return $this;
    }

    /**
     * Gets hotel
     *
     * @return \Membercare\Client\Model\Hotel
     */
    public function getHotel()
    {
        return $this->container['hotel'];
    }

    /**
     * Sets hotel
     *
     * @param \Membercare\Client\Model\Hotel $hotel hotel
     *
     * @return $this
     */
    public function setHotel($hotel)
    {
        $this->container['hotel'] = $hotel;

        return $this;
    }

    /**
     * Gets number_of_beds
     *
     * @return int
     */
    public function getNumberOfBeds()
    {
        return $this->container['number_of_beds'];
    }

    /**
     * Sets number_of_beds
     *
     * @param int $number_of_beds number_of_beds
     *
     * @return $this
     */
    public function setNumberOfBeds($number_of_beds)
    {
        $this->container['number_of_beds'] = $number_of_beds;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
