<?php
/**
 * PersonSearchInterestCriteria
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
 * PersonSearchInterestCriteria Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonSearchInterestCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonSearchInterestCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'match' => '\Membercare\Client\Model\SearchBooleanType',
        'query_items' => '\Membercare\Client\Model\PersonSearchInterestQueryItem[]',
        'valid_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'match' => null,
        'query_items' => null,
        'valid_on' => 'date-time'
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
        'match' => 'match',
        'query_items' => 'queryItems',
        'valid_on' => 'validOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'match' => 'setMatch',
        'query_items' => 'setQueryItems',
        'valid_on' => 'setValidOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'match' => 'getMatch',
        'query_items' => 'getQueryItems',
        'valid_on' => 'getValidOn'
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
        $this->container['match'] = isset($data['match']) ? $data['match'] : null;
        $this->container['query_items'] = isset($data['query_items']) ? $data['query_items'] : null;
        $this->container['valid_on'] = isset($data['valid_on']) ? $data['valid_on'] : null;
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
     * Gets match
     *
     * @return \Membercare\Client\Model\SearchBooleanType
     */
    public function getMatch()
    {
        return $this->container['match'];
    }

    /**
     * Sets match
     *
     * @param \Membercare\Client\Model\SearchBooleanType $match match
     *
     * @return $this
     */
    public function setMatch($match)
    {
        $this->container['match'] = $match;

        return $this;
    }

    /**
     * Gets query_items
     *
     * @return \Membercare\Client\Model\PersonSearchInterestQueryItem[]
     */
    public function getQueryItems()
    {
        return $this->container['query_items'];
    }

    /**
     * Sets query_items
     *
     * @param \Membercare\Client\Model\PersonSearchInterestQueryItem[] $query_items Person should have these interests (taking the chosen Match into account)
     *
     * @return $this
     */
    public function setQueryItems($query_items)
    {
        $this->container['query_items'] = $query_items;

        return $this;
    }

    /**
     * Gets valid_on
     *
     * @return \DateTime
     */
    public function getValidOn()
    {
        return $this->container['valid_on'];
    }

    /**
     * Sets valid_on
     *
     * @param \DateTime $valid_on When should the interest be valid - if not provided we use \"Now\"
     *
     * @return $this
     */
    public function setValidOn($valid_on)
    {
        $this->container['valid_on'] = $valid_on;

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
