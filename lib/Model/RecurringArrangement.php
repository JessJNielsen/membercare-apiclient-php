<?php
/**
 * RecurringArrangement
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
 * RecurringArrangement Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecurringArrangement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RecurringArrangement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'based_on_internal_id' => 'string',
        'recurrences' => '\Membercare\Client\Model\RecurringArrangementRecurrence[]',
        'recurring_frequency' => '\Membercare\Client\Model\RecurringArrangementFrequency',
        'number_of_reccurrences' => 'int',
        'week_days' => '\Membercare\Client\Model\DayOfWeek[]',
        'recurrence_end_date_time' => '\DateTime',
        'first_occurrence_start_date_time' => '\DateTime',
        'last_occurrence_end_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'based_on_internal_id' => null,
        'recurrences' => null,
        'recurring_frequency' => null,
        'number_of_reccurrences' => 'int32',
        'week_days' => null,
        'recurrence_end_date_time' => 'date-time',
        'first_occurrence_start_date_time' => 'date-time',
        'last_occurrence_end_date_time' => 'date-time'
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
        'url' => 'url',
        'based_on_internal_id' => 'basedOnInternalId',
        'recurrences' => 'recurrences',
        'recurring_frequency' => 'recurringFrequency',
        'number_of_reccurrences' => 'numberOfReccurrences',
        'week_days' => 'weekDays',
        'recurrence_end_date_time' => 'recurrenceEndDateTime',
        'first_occurrence_start_date_time' => 'firstOccurrenceStartDateTime',
        'last_occurrence_end_date_time' => 'lastOccurrenceEndDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'based_on_internal_id' => 'setBasedOnInternalId',
        'recurrences' => 'setRecurrences',
        'recurring_frequency' => 'setRecurringFrequency',
        'number_of_reccurrences' => 'setNumberOfReccurrences',
        'week_days' => 'setWeekDays',
        'recurrence_end_date_time' => 'setRecurrenceEndDateTime',
        'first_occurrence_start_date_time' => 'setFirstOccurrenceStartDateTime',
        'last_occurrence_end_date_time' => 'setLastOccurrenceEndDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'based_on_internal_id' => 'getBasedOnInternalId',
        'recurrences' => 'getRecurrences',
        'recurring_frequency' => 'getRecurringFrequency',
        'number_of_reccurrences' => 'getNumberOfReccurrences',
        'week_days' => 'getWeekDays',
        'recurrence_end_date_time' => 'getRecurrenceEndDateTime',
        'first_occurrence_start_date_time' => 'getFirstOccurrenceStartDateTime',
        'last_occurrence_end_date_time' => 'getLastOccurrenceEndDateTime'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['based_on_internal_id'] = isset($data['based_on_internal_id']) ? $data['based_on_internal_id'] : null;
        $this->container['recurrences'] = isset($data['recurrences']) ? $data['recurrences'] : null;
        $this->container['recurring_frequency'] = isset($data['recurring_frequency']) ? $data['recurring_frequency'] : null;
        $this->container['number_of_reccurrences'] = isset($data['number_of_reccurrences']) ? $data['number_of_reccurrences'] : null;
        $this->container['week_days'] = isset($data['week_days']) ? $data['week_days'] : null;
        $this->container['recurrence_end_date_time'] = isset($data['recurrence_end_date_time']) ? $data['recurrence_end_date_time'] : null;
        $this->container['first_occurrence_start_date_time'] = isset($data['first_occurrence_start_date_time']) ? $data['first_occurrence_start_date_time'] : null;
        $this->container['last_occurrence_end_date_time'] = isset($data['last_occurrence_end_date_time']) ? $data['last_occurrence_end_date_time'] : null;
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The link to the current resource
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets based_on_internal_id
     *
     * @return string
     */
    public function getBasedOnInternalId()
    {
        return $this->container['based_on_internal_id'];
    }

    /**
     * Sets based_on_internal_id
     *
     * @param string $based_on_internal_id based_on_internal_id
     *
     * @return $this
     */
    public function setBasedOnInternalId($based_on_internal_id)
    {
        $this->container['based_on_internal_id'] = $based_on_internal_id;

        return $this;
    }

    /**
     * Gets recurrences
     *
     * @return \Membercare\Client\Model\RecurringArrangementRecurrence[]
     */
    public function getRecurrences()
    {
        return $this->container['recurrences'];
    }

    /**
     * Sets recurrences
     *
     * @param \Membercare\Client\Model\RecurringArrangementRecurrence[] $recurrences These are the actual occurrences of the arrangement
     *
     * @return $this
     */
    public function setRecurrences($recurrences)
    {
        $this->container['recurrences'] = $recurrences;

        return $this;
    }

    /**
     * Gets recurring_frequency
     *
     * @return \Membercare\Client\Model\RecurringArrangementFrequency
     */
    public function getRecurringFrequency()
    {
        return $this->container['recurring_frequency'];
    }

    /**
     * Sets recurring_frequency
     *
     * @param \Membercare\Client\Model\RecurringArrangementFrequency $recurring_frequency recurring_frequency
     *
     * @return $this
     */
    public function setRecurringFrequency($recurring_frequency)
    {
        $this->container['recurring_frequency'] = $recurring_frequency;

        return $this;
    }

    /**
     * Gets number_of_reccurrences
     *
     * @return int
     */
    public function getNumberOfReccurrences()
    {
        return $this->container['number_of_reccurrences'];
    }

    /**
     * Sets number_of_reccurrences
     *
     * @param int $number_of_reccurrences The value the user entered when creating the arrangement.  May not reflect the current state  Either this or RecurrenceEndDateTime should have a value.
     *
     * @return $this
     */
    public function setNumberOfReccurrences($number_of_reccurrences)
    {
        $this->container['number_of_reccurrences'] = $number_of_reccurrences;

        return $this;
    }

    /**
     * Gets week_days
     *
     * @return \Membercare\Client\Model\DayOfWeek[]
     */
    public function getWeekDays()
    {
        return $this->container['week_days'];
    }

    /**
     * Sets week_days
     *
     * @param \Membercare\Client\Model\DayOfWeek[] $week_days The value the user entered when creating the arrangement.  May not reflect the current state
     *
     * @return $this
     */
    public function setWeekDays($week_days)
    {
        $this->container['week_days'] = $week_days;

        return $this;
    }

    /**
     * Gets recurrence_end_date_time
     *
     * @return \DateTime
     */
    public function getRecurrenceEndDateTime()
    {
        return $this->container['recurrence_end_date_time'];
    }

    /**
     * Sets recurrence_end_date_time
     *
     * @param \DateTime $recurrence_end_date_time The date the user entered when creating the arrangement.  May not reflect the current state  Either this or NumberOfReccurrences should have a value.
     *
     * @return $this
     */
    public function setRecurrenceEndDateTime($recurrence_end_date_time)
    {
        $this->container['recurrence_end_date_time'] = $recurrence_end_date_time;

        return $this;
    }

    /**
     * Gets first_occurrence_start_date_time
     *
     * @return \DateTime
     */
    public function getFirstOccurrenceStartDateTime()
    {
        return $this->container['first_occurrence_start_date_time'];
    }

    /**
     * Sets first_occurrence_start_date_time
     *
     * @param \DateTime $first_occurrence_start_date_time Calculated value based on the actual occurrences
     *
     * @return $this
     */
    public function setFirstOccurrenceStartDateTime($first_occurrence_start_date_time)
    {
        $this->container['first_occurrence_start_date_time'] = $first_occurrence_start_date_time;

        return $this;
    }

    /**
     * Gets last_occurrence_end_date_time
     *
     * @return \DateTime
     */
    public function getLastOccurrenceEndDateTime()
    {
        return $this->container['last_occurrence_end_date_time'];
    }

    /**
     * Sets last_occurrence_end_date_time
     *
     * @param \DateTime $last_occurrence_end_date_time Calculated value based on the actual occurrences
     *
     * @return $this
     */
    public function setLastOccurrenceEndDateTime($last_occurrence_end_date_time)
    {
        $this->container['last_occurrence_end_date_time'] = $last_occurrence_end_date_time;

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
