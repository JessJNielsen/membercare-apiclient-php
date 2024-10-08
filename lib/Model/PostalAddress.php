<?php
/**
 * PostalAddress
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
 * PostalAddress Class Doc Comment
 *
 * @category Class
 * @description Contains relevant information related to a PostalAddress.
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostalAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'id' => 'int',
        'attention' => 'string',
        'care_of' => 'string',
        'street' => 'string',
        'number' => 'string',
        'letter' => 'string',
        'floor' => 'string',
        'suite' => 'string',
        'location' => 'string',
        'post_office_box' => 'string',
        'postal_code' => '\Membercare\Client\Model\PostalCode',
        'country' => '\Membercare\Client\Model\Country',
        'municipality' => '\Membercare\Client\Model\Municipality',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'address_type' => '\Membercare\Client\Model\AddressRule',
        'address_description' => 'string',
        'formatted_address' => 'string',
        'address_line_one' => 'string',
        'zip_city_country' => 'string',
        'last_change' => '\DateTime',
        'street_and_zip_one_line' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'id' => 'int64',
        'attention' => null,
        'care_of' => null,
        'street' => null,
        'number' => null,
        'letter' => null,
        'floor' => null,
        'suite' => null,
        'location' => null,
        'post_office_box' => null,
        'postal_code' => null,
        'country' => null,
        'municipality' => null,
        'start' => 'date-time',
        'end' => 'date-time',
        'address_type' => null,
        'address_description' => null,
        'formatted_address' => null,
        'address_line_one' => null,
        'zip_city_country' => null,
        'last_change' => 'date-time',
        'street_and_zip_one_line' => null
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
        'id' => 'id',
        'attention' => 'attention',
        'care_of' => 'careOf',
        'street' => 'street',
        'number' => 'number',
        'letter' => 'letter',
        'floor' => 'floor',
        'suite' => 'suite',
        'location' => 'location',
        'post_office_box' => 'postOfficeBox',
        'postal_code' => 'postalCode',
        'country' => 'country',
        'municipality' => 'municipality',
        'start' => 'start',
        'end' => 'end',
        'address_type' => 'addressType',
        'address_description' => 'addressDescription',
        'formatted_address' => 'formattedAddress',
        'address_line_one' => 'addressLineOne',
        'zip_city_country' => 'zipCityCountry',
        'last_change' => 'lastChange',
        'street_and_zip_one_line' => 'streetAndZipOneLine'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'id' => 'setId',
        'attention' => 'setAttention',
        'care_of' => 'setCareOf',
        'street' => 'setStreet',
        'number' => 'setNumber',
        'letter' => 'setLetter',
        'floor' => 'setFloor',
        'suite' => 'setSuite',
        'location' => 'setLocation',
        'post_office_box' => 'setPostOfficeBox',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'municipality' => 'setMunicipality',
        'start' => 'setStart',
        'end' => 'setEnd',
        'address_type' => 'setAddressType',
        'address_description' => 'setAddressDescription',
        'formatted_address' => 'setFormattedAddress',
        'address_line_one' => 'setAddressLineOne',
        'zip_city_country' => 'setZipCityCountry',
        'last_change' => 'setLastChange',
        'street_and_zip_one_line' => 'setStreetAndZipOneLine'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'id' => 'getId',
        'attention' => 'getAttention',
        'care_of' => 'getCareOf',
        'street' => 'getStreet',
        'number' => 'getNumber',
        'letter' => 'getLetter',
        'floor' => 'getFloor',
        'suite' => 'getSuite',
        'location' => 'getLocation',
        'post_office_box' => 'getPostOfficeBox',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'municipality' => 'getMunicipality',
        'start' => 'getStart',
        'end' => 'getEnd',
        'address_type' => 'getAddressType',
        'address_description' => 'getAddressDescription',
        'formatted_address' => 'getFormattedAddress',
        'address_line_one' => 'getAddressLineOne',
        'zip_city_country' => 'getZipCityCountry',
        'last_change' => 'getLastChange',
        'street_and_zip_one_line' => 'getStreetAndZipOneLine'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['attention'] = isset($data['attention']) ? $data['attention'] : null;
        $this->container['care_of'] = isset($data['care_of']) ? $data['care_of'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['letter'] = isset($data['letter']) ? $data['letter'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['suite'] = isset($data['suite']) ? $data['suite'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['post_office_box'] = isset($data['post_office_box']) ? $data['post_office_box'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['address_type'] = isset($data['address_type']) ? $data['address_type'] : null;
        $this->container['address_description'] = isset($data['address_description']) ? $data['address_description'] : null;
        $this->container['formatted_address'] = isset($data['formatted_address']) ? $data['formatted_address'] : null;
        $this->container['address_line_one'] = isset($data['address_line_one']) ? $data['address_line_one'] : null;
        $this->container['zip_city_country'] = isset($data['zip_city_country']) ? $data['zip_city_country'] : null;
        $this->container['last_change'] = isset($data['last_change']) ? $data['last_change'] : null;
        $this->container['street_and_zip_one_line'] = isset($data['street_and_zip_one_line']) ? $data['street_and_zip_one_line'] : null;
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
     * @param int $id The Identification Id of the postal address
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets attention
     *
     * @return string
     */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
     * Sets attention
     *
     * @param string $attention The Attention of the postal address
     *
     * @return $this
     */
    public function setAttention($attention)
    {
        $this->container['attention'] = $attention;

        return $this;
    }

    /**
     * Gets care_of
     *
     * @return string
     */
    public function getCareOf()
    {
        return $this->container['care_of'];
    }

    /**
     * Sets care_of
     *
     * @param string $care_of The CO on the postal address
     *
     * @return $this
     */
    public function setCareOf($care_of)
    {
        $this->container['care_of'] = $care_of;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street The street of residence
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The number on the street.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets letter
     *
     * @return string
     */
    public function getLetter()
    {
        return $this->container['letter'];
    }

    /**
     * Sets letter
     *
     * @param string $letter The letter of the residence, if any
     *
     * @return $this
     */
    public function setLetter($letter)
    {
        $this->container['letter'] = $letter;

        return $this;
    }

    /**
     * Gets floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor
     *
     * @param string $floor the floor of a building
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets suite
     *
     * @return string
     */
    public function getSuite()
    {
        return $this->container['suite'];
    }

    /**
     * Sets suite
     *
     * @param string $suite The suite.
     *
     * @return $this
     */
    public function setSuite($suite)
    {
        $this->container['suite'] = $suite;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location THe location of the postal address
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets post_office_box
     *
     * @return string
     */
    public function getPostOfficeBox()
    {
        return $this->container['post_office_box'];
    }

    /**
     * Sets post_office_box
     *
     * @param string $post_office_box THe number on the post office box
     *
     * @return $this
     */
    public function setPostOfficeBox($post_office_box)
    {
        $this->container['post_office_box'] = $post_office_box;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return \Membercare\Client\Model\PostalCode
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param \Membercare\Client\Model\PostalCode $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Membercare\Client\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Membercare\Client\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return \Membercare\Client\Model\Municipality
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     *
     * @param \Membercare\Client\Model\Municipality $municipality municipality
     *
     * @return $this
     */
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start The start date of the postal address
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end The end date of the postal address
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets address_type
     *
     * @return \Membercare\Client\Model\AddressRule
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param \Membercare\Client\Model\AddressRule $address_type address_type
     *
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets address_description
     *
     * @return string
     */
    public function getAddressDescription()
    {
        return $this->container['address_description'];
    }

    /**
     * Sets address_description
     *
     * @param string $address_description A custom name for the address type
     *
     * @return $this
     */
    public function setAddressDescription($address_description)
    {
        $this->container['address_description'] = $address_description;

        return $this;
    }

    /**
     * Gets formatted_address
     *
     * @return string
     */
    public function getFormattedAddress()
    {
        return $this->container['formatted_address'];
    }

    /**
     * Sets formatted_address
     *
     * @param string $formatted_address A formatted string of the address information
     *
     * @return $this
     */
    public function setFormattedAddress($formatted_address)
    {
        $this->container['formatted_address'] = $formatted_address;

        return $this;
    }

    /**
     * Gets address_line_one
     *
     * @return string
     */
    public function getAddressLineOne()
    {
        return $this->container['address_line_one'];
    }

    /**
     * Sets address_line_one
     *
     * @param string $address_line_one A one line string representation of the address without zip, city or country
     *
     * @return $this
     */
    public function setAddressLineOne($address_line_one)
    {
        $this->container['address_line_one'] = $address_line_one;

        return $this;
    }

    /**
     * Gets zip_city_country
     *
     * @return string
     */
    public function getZipCityCountry()
    {
        return $this->container['zip_city_country'];
    }

    /**
     * Sets zip_city_country
     *
     * @param string $zip_city_country NB! THIS PROPERTY MIGHT BE SUBJECT TO CHANGE OR DELETION - A one line string representation of zip, city and country
     *
     * @return $this
     */
    public function setZipCityCountry($zip_city_country)
    {
        $this->container['zip_city_country'] = $zip_city_country;

        return $this;
    }

    /**
     * Gets last_change
     *
     * @return \DateTime
     */
    public function getLastChange()
    {
        return $this->container['last_change'];
    }

    /**
     * Sets last_change
     *
     * @param \DateTime $last_change When was the address last changed
     *
     * @return $this
     */
    public function setLastChange($last_change)
    {
        $this->container['last_change'] = $last_change;

        return $this;
    }

    /**
     * Gets street_and_zip_one_line
     *
     * @return string
     */
    public function getStreetAndZipOneLine()
    {
        return $this->container['street_and_zip_one_line'];
    }

    /**
     * Sets street_and_zip_one_line
     *
     * @param string $street_and_zip_one_line A one line string representation of the address without country
     *
     * @return $this
     */
    public function setStreetAndZipOneLine($street_and_zip_one_line)
    {
        $this->container['street_and_zip_one_line'] = $street_and_zip_one_line;

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
