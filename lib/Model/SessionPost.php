<?php
/**
 * SessionPost
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
 * SessionPost Class Doc Comment
 *
 * @category Class
 * @description A Session that is referenced by a conference.
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SessionPost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SessionPost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'name' => 'string',
        'texts' => '\Membercare\Client\Model\ArrangementText[]',
        'short_description' => 'string',
        'long_description' => 'string',
        'start_date_time' => '\DateTime',
        'end_date_time' => '\DateTime',
        'cancellation_date' => '\DateTime',
        'minimum_seats' => 'int',
        'budget_seats' => 'int',
        'show_in_calendar' => 'bool',
        'total_seats' => 'int',
        'mandatory' => 'bool',
        'web_enabled' => 'bool',
        'responsible' => '\Membercare\Client\Model\Person',
        'class_room' => '\Membercare\Client\Model\ClassRoom',
        'cancellation_reason' => '\Membercare\Client\Model\CancellationReason',
        'track' => '\Membercare\Client\Model\SessionTrack'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'name' => null,
        'texts' => null,
        'short_description' => null,
        'long_description' => null,
        'start_date_time' => 'date-time',
        'end_date_time' => 'date-time',
        'cancellation_date' => 'date-time',
        'minimum_seats' => 'int64',
        'budget_seats' => 'int64',
        'show_in_calendar' => null,
        'total_seats' => 'int64',
        'mandatory' => null,
        'web_enabled' => null,
        'responsible' => null,
        'class_room' => null,
        'cancellation_reason' => null,
        'track' => null
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
        'name' => 'name',
        'texts' => 'texts',
        'short_description' => 'shortDescription',
        'long_description' => 'longDescription',
        'start_date_time' => 'startDateTime',
        'end_date_time' => 'endDateTime',
        'cancellation_date' => 'cancellationDate',
        'minimum_seats' => 'minimumSeats',
        'budget_seats' => 'budgetSeats',
        'show_in_calendar' => 'showInCalendar',
        'total_seats' => 'totalSeats',
        'mandatory' => 'mandatory',
        'web_enabled' => 'webEnabled',
        'responsible' => 'responsible',
        'class_room' => 'classRoom',
        'cancellation_reason' => 'cancellationReason',
        'track' => 'track'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'name' => 'setName',
        'texts' => 'setTexts',
        'short_description' => 'setShortDescription',
        'long_description' => 'setLongDescription',
        'start_date_time' => 'setStartDateTime',
        'end_date_time' => 'setEndDateTime',
        'cancellation_date' => 'setCancellationDate',
        'minimum_seats' => 'setMinimumSeats',
        'budget_seats' => 'setBudgetSeats',
        'show_in_calendar' => 'setShowInCalendar',
        'total_seats' => 'setTotalSeats',
        'mandatory' => 'setMandatory',
        'web_enabled' => 'setWebEnabled',
        'responsible' => 'setResponsible',
        'class_room' => 'setClassRoom',
        'cancellation_reason' => 'setCancellationReason',
        'track' => 'setTrack'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'name' => 'getName',
        'texts' => 'getTexts',
        'short_description' => 'getShortDescription',
        'long_description' => 'getLongDescription',
        'start_date_time' => 'getStartDateTime',
        'end_date_time' => 'getEndDateTime',
        'cancellation_date' => 'getCancellationDate',
        'minimum_seats' => 'getMinimumSeats',
        'budget_seats' => 'getBudgetSeats',
        'show_in_calendar' => 'getShowInCalendar',
        'total_seats' => 'getTotalSeats',
        'mandatory' => 'getMandatory',
        'web_enabled' => 'getWebEnabled',
        'responsible' => 'getResponsible',
        'class_room' => 'getClassRoom',
        'cancellation_reason' => 'getCancellationReason',
        'track' => 'getTrack'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['texts'] = isset($data['texts']) ? $data['texts'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['long_description'] = isset($data['long_description']) ? $data['long_description'] : null;
        $this->container['start_date_time'] = isset($data['start_date_time']) ? $data['start_date_time'] : null;
        $this->container['end_date_time'] = isset($data['end_date_time']) ? $data['end_date_time'] : null;
        $this->container['cancellation_date'] = isset($data['cancellation_date']) ? $data['cancellation_date'] : null;
        $this->container['minimum_seats'] = isset($data['minimum_seats']) ? $data['minimum_seats'] : null;
        $this->container['budget_seats'] = isset($data['budget_seats']) ? $data['budget_seats'] : null;
        $this->container['show_in_calendar'] = isset($data['show_in_calendar']) ? $data['show_in_calendar'] : null;
        $this->container['total_seats'] = isset($data['total_seats']) ? $data['total_seats'] : null;
        $this->container['mandatory'] = isset($data['mandatory']) ? $data['mandatory'] : null;
        $this->container['web_enabled'] = isset($data['web_enabled']) ? $data['web_enabled'] : null;
        $this->container['responsible'] = isset($data['responsible']) ? $data['responsible'] : null;
        $this->container['class_room'] = isset($data['class_room']) ? $data['class_room'] : null;
        $this->container['cancellation_reason'] = isset($data['cancellation_reason']) ? $data['cancellation_reason'] : null;
        $this->container['track'] = isset($data['track']) ? $data['track'] : null;
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
     * @param string $name The name of the session
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets texts
     *
     * @return \Membercare\Client\Model\ArrangementText[]
     */
    public function getTexts()
    {
        return $this->container['texts'];
    }

    /**
     * Sets texts
     *
     * @param \Membercare\Client\Model\ArrangementText[] $texts Determines which type of arrangement text it is.  1 = ShortDescription, 2 = LongDescription, 3 = Syllabus, 4 = Program.
     *
     * @return $this
     */
    public function setTexts($texts)
    {
        $this->container['texts'] = $texts;

        return $this;
    }

    /**
     * Gets short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     *
     * @param string $short_description Short description of the session as html.
     *
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets long_description
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->container['long_description'];
    }

    /**
     * Sets long_description
     *
     * @param string $long_description Long description of the session as html.
     *
     * @return $this
     */
    public function setLongDescription($long_description)
    {
        $this->container['long_description'] = $long_description;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time The start datetime of the session.
     *
     * @return $this
     */
    public function setStartDateTime($start_date_time)
    {
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time The end datetime of the session.
     *
     * @return $this
     */
    public function setEndDateTime($end_date_time)
    {
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets cancellation_date
     *
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        return $this->container['cancellation_date'];
    }

    /**
     * Sets cancellation_date
     *
     * @param \DateTime $cancellation_date When was it cancelled
     *
     * @return $this
     */
    public function setCancellationDate($cancellation_date)
    {
        $this->container['cancellation_date'] = $cancellation_date;

        return $this;
    }

    /**
     * Gets minimum_seats
     *
     * @return int
     */
    public function getMinimumSeats()
    {
        return $this->container['minimum_seats'];
    }

    /**
     * Sets minimum_seats
     *
     * @param int $minimum_seats MinParticipants
     *
     * @return $this
     */
    public function setMinimumSeats($minimum_seats)
    {
        $this->container['minimum_seats'] = $minimum_seats;

        return $this;
    }

    /**
     * Gets budget_seats
     *
     * @return int
     */
    public function getBudgetSeats()
    {
        return $this->container['budget_seats'];
    }

    /**
     * Sets budget_seats
     *
     * @param int $budget_seats BudgetParticipants
     *
     * @return $this
     */
    public function setBudgetSeats($budget_seats)
    {
        $this->container['budget_seats'] = $budget_seats;

        return $this;
    }

    /**
     * Gets show_in_calendar
     *
     * @return bool
     */
    public function getShowInCalendar()
    {
        return $this->container['show_in_calendar'];
    }

    /**
     * Sets show_in_calendar
     *
     * @param bool $show_in_calendar ShowInCalendar
     *
     * @return $this
     */
    public function setShowInCalendar($show_in_calendar)
    {
        $this->container['show_in_calendar'] = $show_in_calendar;

        return $this;
    }

    /**
     * Gets total_seats
     *
     * @return int
     */
    public function getTotalSeats()
    {
        return $this->container['total_seats'];
    }

    /**
     * Sets total_seats
     *
     * @param int $total_seats Total number of seats
     *
     * @return $this
     */
    public function setTotalSeats($total_seats)
    {
        $this->container['total_seats'] = $total_seats;

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
     * @param bool $mandatory Indicates whether or not the Session is mandatory.
     *
     * @return $this
     */
    public function setMandatory($mandatory)
    {
        $this->container['mandatory'] = $mandatory;

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
     * @param bool $web_enabled Indicates whether or not this session should be shown on web
     *
     * @return $this
     */
    public function setWebEnabled($web_enabled)
    {
        $this->container['web_enabled'] = $web_enabled;

        return $this;
    }

    /**
     * Gets responsible
     *
     * @return \Membercare\Client\Model\Person
     */
    public function getResponsible()
    {
        return $this->container['responsible'];
    }

    /**
     * Sets responsible
     *
     * @param \Membercare\Client\Model\Person $responsible responsible
     *
     * @return $this
     */
    public function setResponsible($responsible)
    {
        $this->container['responsible'] = $responsible;

        return $this;
    }

    /**
     * Gets class_room
     *
     * @return \Membercare\Client\Model\ClassRoom
     */
    public function getClassRoom()
    {
        return $this->container['class_room'];
    }

    /**
     * Sets class_room
     *
     * @param \Membercare\Client\Model\ClassRoom $class_room class_room
     *
     * @return $this
     */
    public function setClassRoom($class_room)
    {
        $this->container['class_room'] = $class_room;

        return $this;
    }

    /**
     * Gets cancellation_reason
     *
     * @return \Membercare\Client\Model\CancellationReason
     */
    public function getCancellationReason()
    {
        return $this->container['cancellation_reason'];
    }

    /**
     * Sets cancellation_reason
     *
     * @param \Membercare\Client\Model\CancellationReason $cancellation_reason cancellation_reason
     *
     * @return $this
     */
    public function setCancellationReason($cancellation_reason)
    {
        $this->container['cancellation_reason'] = $cancellation_reason;

        return $this;
    }

    /**
     * Gets track
     *
     * @return \Membercare\Client\Model\SessionTrack
     */
    public function getTrack()
    {
        return $this->container['track'];
    }

    /**
     * Sets track
     *
     * @param \Membercare\Client\Model\SessionTrack $track track
     *
     * @return $this
     */
    public function setTrack($track)
    {
        $this->container['track'] = $track;

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
