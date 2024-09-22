<?php
/**
 * PersonSearchAddressCriteria
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
 * PersonSearchAddressCriteria Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonSearchAddressCriteria implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonSearchAddressCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'municipality_codes' => 'string[]',
        'county_codes' => 'string[]',
        'zip_codes' => 'string[]',
        'country_code_iso2_letter' => 'string',
        'valid_on' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'municipality_codes' => null,
        'county_codes' => null,
        'zip_codes' => null,
        'country_code_iso2_letter' => null,
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
        'municipality_codes' => 'municipalityCodes',
        'county_codes' => 'countyCodes',
        'zip_codes' => 'zipCodes',
        'country_code_iso2_letter' => 'countryCodeIso2Letter',
        'valid_on' => 'validOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'municipality_codes' => 'setMunicipalityCodes',
        'county_codes' => 'setCountyCodes',
        'zip_codes' => 'setZipCodes',
        'country_code_iso2_letter' => 'setCountryCodeIso2Letter',
        'valid_on' => 'setValidOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'municipality_codes' => 'getMunicipalityCodes',
        'county_codes' => 'getCountyCodes',
        'zip_codes' => 'getZipCodes',
        'country_code_iso2_letter' => 'getCountryCodeIso2Letter',
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
        $this->container['municipality_codes'] = isset($data['municipality_codes']) ? $data['municipality_codes'] : null;
        $this->container['county_codes'] = isset($data['county_codes']) ? $data['county_codes'] : null;
        $this->container['zip_codes'] = isset($data['zip_codes']) ? $data['zip_codes'] : null;
        $this->container['country_code_iso2_letter'] = isset($data['country_code_iso2_letter']) ? $data['country_code_iso2_letter'] : null;
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
     * Gets municipality_codes
     *
     * @return string[]
     */
    public function getMunicipalityCodes()
    {
        return $this->container['municipality_codes'];
    }

    /**
     * Sets municipality_codes
     *
     * @param string[] $municipality_codes If MunicipalityCode is provided, CountryCode is required
     *
     * @return $this
     */
    public function setMunicipalityCodes($municipality_codes)
    {
        $this->container['municipality_codes'] = $municipality_codes;

        return $this;
    }

    /**
     * Gets county_codes
     *
     * @return string[]
     */
    public function getCountyCodes()
    {
        return $this->container['county_codes'];
    }

    /**
     * Sets county_codes
     *
     * @param string[] $county_codes If CountyCode is provided, CountryCode is required
     *
     * @return $this
     */
    public function setCountyCodes($county_codes)
    {
        $this->container['county_codes'] = $county_codes;

        return $this;
    }

    /**
     * Gets zip_codes
     *
     * @return string[]
     */
    public function getZipCodes()
    {
        return $this->container['zip_codes'];
    }

    /**
     * Sets zip_codes
     *
     * @param string[] $zip_codes If ZipCode is provided, CountryCode is required
     *
     * @return $this
     */
    public function setZipCodes($zip_codes)
    {
        $this->container['zip_codes'] = $zip_codes;

        return $this;
    }

    /**
     * Gets country_code_iso2_letter
     *
     * @return string
     */
    public function getCountryCodeIso2Letter()
    {
        return $this->container['country_code_iso2_letter'];
    }

    /**
     * Sets country_code_iso2_letter
     *
     * @param string $country_code_iso2_letter eg. DK, SE, NO
     *
     * @return $this
     */
    public function setCountryCodeIso2Letter($country_code_iso2_letter)
    {
        $this->container['country_code_iso2_letter'] = $country_code_iso2_letter;

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
     * @param \DateTime $valid_on When should the primary address be valid - if not provided we use \"Today\"
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
