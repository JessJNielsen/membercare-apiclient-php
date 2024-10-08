<?php
/**
 * Reporter
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
 * Reporter Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reporter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Reporter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'reporter_person' => '\Membercare\Client\Model\Person',
        'reporter_company' => '\Membercare\Client\Model\Company',
        'remark' => 'string',
        'specific_email' => 'string',
        'communication_preference' => '\Membercare\Client\Model\FeeMemberCommunicationPreference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'reporter_person' => null,
        'reporter_company' => null,
        'remark' => null,
        'specific_email' => null,
        'communication_preference' => null
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
        'reporter_person' => 'reporterPerson',
        'reporter_company' => 'reporterCompany',
        'remark' => 'remark',
        'specific_email' => 'specificEmail',
        'communication_preference' => 'communicationPreference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'reporter_person' => 'setReporterPerson',
        'reporter_company' => 'setReporterCompany',
        'remark' => 'setRemark',
        'specific_email' => 'setSpecificEmail',
        'communication_preference' => 'setCommunicationPreference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'reporter_person' => 'getReporterPerson',
        'reporter_company' => 'getReporterCompany',
        'remark' => 'getRemark',
        'specific_email' => 'getSpecificEmail',
        'communication_preference' => 'getCommunicationPreference'
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
        $this->container['reporter_person'] = isset($data['reporter_person']) ? $data['reporter_person'] : null;
        $this->container['reporter_company'] = isset($data['reporter_company']) ? $data['reporter_company'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['specific_email'] = isset($data['specific_email']) ? $data['specific_email'] : null;
        $this->container['communication_preference'] = isset($data['communication_preference']) ? $data['communication_preference'] : null;
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
     * Gets reporter_person
     *
     * @return \Membercare\Client\Model\Person
     */
    public function getReporterPerson()
    {
        return $this->container['reporter_person'];
    }

    /**
     * Sets reporter_person
     *
     * @param \Membercare\Client\Model\Person $reporter_person reporter_person
     *
     * @return $this
     */
    public function setReporterPerson($reporter_person)
    {
        $this->container['reporter_person'] = $reporter_person;

        return $this;
    }

    /**
     * Gets reporter_company
     *
     * @return \Membercare\Client\Model\Company
     */
    public function getReporterCompany()
    {
        return $this->container['reporter_company'];
    }

    /**
     * Sets reporter_company
     *
     * @param \Membercare\Client\Model\Company $reporter_company reporter_company
     *
     * @return $this
     */
    public function setReporterCompany($reporter_company)
    {
        $this->container['reporter_company'] = $reporter_company;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark A custom comment. Will only overwrite current value if a value is set.
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets specific_email
     *
     * @return string
     */
    public function getSpecificEmail()
    {
        return $this->container['specific_email'];
    }

    /**
     * Sets specific_email
     *
     * @param string $specific_email Use this e-mail when sending to the reporter
     *
     * @return $this
     */
    public function setSpecificEmail($specific_email)
    {
        $this->container['specific_email'] = $specific_email;

        return $this;
    }

    /**
     * Gets communication_preference
     *
     * @return \Membercare\Client\Model\FeeMemberCommunicationPreference
     */
    public function getCommunicationPreference()
    {
        return $this->container['communication_preference'];
    }

    /**
     * Sets communication_preference
     *
     * @param \Membercare\Client\Model\FeeMemberCommunicationPreference $communication_preference communication_preference
     *
     * @return $this
     */
    public function setCommunicationPreference($communication_preference)
    {
        $this->container['communication_preference'] = $communication_preference;

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
