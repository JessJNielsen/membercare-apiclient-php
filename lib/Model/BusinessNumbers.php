<?php
/**
 * BusinessNumbers
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
 * BusinessNumbers Class Doc Comment
 *
 * @category Class
 * @description The active Business Numbers related to the company
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessNumbers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessNumbers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'debtor_link' => 'string',
        'cvr' => 'string',
        'registration_number_cvr' => '\Membercare\Client\Model\RegistrationNumberCVR',
        'registration_number_swedish_company_number' => '\Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber',
        'registration_number_norwegian_company_number' => '\Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber',
        'se' => 'string',
        'registration_numbers_se' => '\Membercare\Client\Model\RegistrationNumberSE[]',
        'registration_number_vat' => '\Membercare\Client\Model\RegistrationNumberVAT',
        'registration_numbers_rut' => '\Membercare\Client\Model\RegistrationNumberRUT[]',
        'p' => 'string',
        'production_number' => '\Membercare\Client\Model\ProductionNumber',
        'vat' => 'string',
        'rut' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'debtor_link' => null,
        'cvr' => null,
        'registration_number_cvr' => null,
        'registration_number_swedish_company_number' => null,
        'registration_number_norwegian_company_number' => null,
        'se' => null,
        'registration_numbers_se' => null,
        'registration_number_vat' => null,
        'registration_numbers_rut' => null,
        'p' => null,
        'production_number' => null,
        'vat' => null,
        'rut' => null
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
        'debtor_link' => 'debtorLink',
        'cvr' => 'cvr',
        'registration_number_cvr' => 'registrationNumberCVR',
        'registration_number_swedish_company_number' => 'registrationNumberSwedishCompanyNumber',
        'registration_number_norwegian_company_number' => 'registrationNumberNorwegianCompanyNumber',
        'se' => 'se',
        'registration_numbers_se' => 'registrationNumbersSE',
        'registration_number_vat' => 'registrationNumberVAT',
        'registration_numbers_rut' => 'registrationNumbersRUT',
        'p' => 'p',
        'production_number' => 'productionNumber',
        'vat' => 'vat',
        'rut' => 'rut'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'debtor_link' => 'setDebtorLink',
        'cvr' => 'setCvr',
        'registration_number_cvr' => 'setRegistrationNumberCvr',
        'registration_number_swedish_company_number' => 'setRegistrationNumberSwedishCompanyNumber',
        'registration_number_norwegian_company_number' => 'setRegistrationNumberNorwegianCompanyNumber',
        'se' => 'setSe',
        'registration_numbers_se' => 'setRegistrationNumbersSe',
        'registration_number_vat' => 'setRegistrationNumberVat',
        'registration_numbers_rut' => 'setRegistrationNumbersRut',
        'p' => 'setP',
        'production_number' => 'setProductionNumber',
        'vat' => 'setVat',
        'rut' => 'setRut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'debtor_link' => 'getDebtorLink',
        'cvr' => 'getCvr',
        'registration_number_cvr' => 'getRegistrationNumberCvr',
        'registration_number_swedish_company_number' => 'getRegistrationNumberSwedishCompanyNumber',
        'registration_number_norwegian_company_number' => 'getRegistrationNumberNorwegianCompanyNumber',
        'se' => 'getSe',
        'registration_numbers_se' => 'getRegistrationNumbersSe',
        'registration_number_vat' => 'getRegistrationNumberVat',
        'registration_numbers_rut' => 'getRegistrationNumbersRut',
        'p' => 'getP',
        'production_number' => 'getProductionNumber',
        'vat' => 'getVat',
        'rut' => 'getRut'
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
        $this->container['debtor_link'] = isset($data['debtor_link']) ? $data['debtor_link'] : null;
        $this->container['cvr'] = isset($data['cvr']) ? $data['cvr'] : null;
        $this->container['registration_number_cvr'] = isset($data['registration_number_cvr']) ? $data['registration_number_cvr'] : null;
        $this->container['registration_number_swedish_company_number'] = isset($data['registration_number_swedish_company_number']) ? $data['registration_number_swedish_company_number'] : null;
        $this->container['registration_number_norwegian_company_number'] = isset($data['registration_number_norwegian_company_number']) ? $data['registration_number_norwegian_company_number'] : null;
        $this->container['se'] = isset($data['se']) ? $data['se'] : null;
        $this->container['registration_numbers_se'] = isset($data['registration_numbers_se']) ? $data['registration_numbers_se'] : null;
        $this->container['registration_number_vat'] = isset($data['registration_number_vat']) ? $data['registration_number_vat'] : null;
        $this->container['registration_numbers_rut'] = isset($data['registration_numbers_rut']) ? $data['registration_numbers_rut'] : null;
        $this->container['p'] = isset($data['p']) ? $data['p'] : null;
        $this->container['production_number'] = isset($data['production_number']) ? $data['production_number'] : null;
        $this->container['vat'] = isset($data['vat']) ? $data['vat'] : null;
        $this->container['rut'] = isset($data['rut']) ? $data['rut'] : null;
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
     * Gets debtor_link
     *
     * @return string
     */
    public function getDebtorLink()
    {
        return $this->container['debtor_link'];
    }

    /**
     * Sets debtor_link
     *
     * @param string $debtor_link A link to the Debtor
     *
     * @return $this
     */
    public function setDebtorLink($debtor_link)
    {
        $this->container['debtor_link'] = $debtor_link;

        return $this;
    }

    /**
     * Gets cvr
     *
     * @return string
     */
    public function getCvr()
    {
        return $this->container['cvr'];
    }

    /**
     * Sets cvr
     *
     * @param string $cvr CVR - Company registration number -   Deprecated. Please refer to the RegistrationNumberCVR
     *
     * @return $this
     */
    public function setCvr($cvr)
    {
        $this->container['cvr'] = $cvr;

        return $this;
    }

    /**
     * Gets registration_number_cvr
     *
     * @return \Membercare\Client\Model\RegistrationNumberCVR
     */
    public function getRegistrationNumberCvr()
    {
        return $this->container['registration_number_cvr'];
    }

    /**
     * Sets registration_number_cvr
     *
     * @param \Membercare\Client\Model\RegistrationNumberCVR $registration_number_cvr registration_number_cvr
     *
     * @return $this
     */
    public function setRegistrationNumberCvr($registration_number_cvr)
    {
        $this->container['registration_number_cvr'] = $registration_number_cvr;

        return $this;
    }

    /**
     * Gets registration_number_swedish_company_number
     *
     * @return \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber
     */
    public function getRegistrationNumberSwedishCompanyNumber()
    {
        return $this->container['registration_number_swedish_company_number'];
    }

    /**
     * Sets registration_number_swedish_company_number
     *
     * @param \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber $registration_number_swedish_company_number registration_number_swedish_company_number
     *
     * @return $this
     */
    public function setRegistrationNumberSwedishCompanyNumber($registration_number_swedish_company_number)
    {
        $this->container['registration_number_swedish_company_number'] = $registration_number_swedish_company_number;

        return $this;
    }

    /**
     * Gets registration_number_norwegian_company_number
     *
     * @return \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber
     */
    public function getRegistrationNumberNorwegianCompanyNumber()
    {
        return $this->container['registration_number_norwegian_company_number'];
    }

    /**
     * Sets registration_number_norwegian_company_number
     *
     * @param \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber $registration_number_norwegian_company_number registration_number_norwegian_company_number
     *
     * @return $this
     */
    public function setRegistrationNumberNorwegianCompanyNumber($registration_number_norwegian_company_number)
    {
        $this->container['registration_number_norwegian_company_number'] = $registration_number_norwegian_company_number;

        return $this;
    }

    /**
     * Gets se
     *
     * @return string
     */
    public function getSe()
    {
        return $this->container['se'];
    }

    /**
     * Sets se
     *
     * @param string $se SE - Danish vat number - only newest valid number is returned!  Deprecated. Please refer to the RegistrationNumbersSE
     *
     * @return $this
     */
    public function setSe($se)
    {
        $this->container['se'] = $se;

        return $this;
    }

    /**
     * Gets registration_numbers_se
     *
     * @return \Membercare\Client\Model\RegistrationNumberSE[]
     */
    public function getRegistrationNumbersSe()
    {
        return $this->container['registration_numbers_se'];
    }

    /**
     * Sets registration_numbers_se
     *
     * @param \Membercare\Client\Model\RegistrationNumberSE[] $registration_numbers_se SE - Danish vat numbers
     *
     * @return $this
     */
    public function setRegistrationNumbersSe($registration_numbers_se)
    {
        $this->container['registration_numbers_se'] = $registration_numbers_se;

        return $this;
    }

    /**
     * Gets registration_number_vat
     *
     * @return \Membercare\Client\Model\RegistrationNumberVAT
     */
    public function getRegistrationNumberVat()
    {
        return $this->container['registration_number_vat'];
    }

    /**
     * Sets registration_number_vat
     *
     * @param \Membercare\Client\Model\RegistrationNumberVAT $registration_number_vat registration_number_vat
     *
     * @return $this
     */
    public function setRegistrationNumberVat($registration_number_vat)
    {
        $this->container['registration_number_vat'] = $registration_number_vat;

        return $this;
    }

    /**
     * Gets registration_numbers_rut
     *
     * @return \Membercare\Client\Model\RegistrationNumberRUT[]
     */
    public function getRegistrationNumbersRut()
    {
        return $this->container['registration_numbers_rut'];
    }

    /**
     * Sets registration_numbers_rut
     *
     * @param \Membercare\Client\Model\RegistrationNumberRUT[] $registration_numbers_rut RUT numbers
     *
     * @return $this
     */
    public function setRegistrationNumbersRut($registration_numbers_rut)
    {
        $this->container['registration_numbers_rut'] = $registration_numbers_rut;

        return $this;
    }

    /**
     * Gets p
     *
     * @return string
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     *
     * @param string $p Production Number -   Deprecated. Please refer to the ProductionNumber
     *
     * @return $this
     */
    public function setP($p)
    {
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets production_number
     *
     * @return \Membercare\Client\Model\ProductionNumber
     */
    public function getProductionNumber()
    {
        return $this->container['production_number'];
    }

    /**
     * Sets production_number
     *
     * @param \Membercare\Client\Model\ProductionNumber $production_number production_number
     *
     * @return $this
     */
    public function setProductionNumber($production_number)
    {
        $this->container['production_number'] = $production_number;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string $vat International VAT Number  Deprecated. Please refer to the RegistrationNumberVAT
     *
     * @return $this
     */
    public function setVat($vat)
    {
        $this->container['vat'] = $vat;

        return $this;
    }

    /**
     * Gets rut
     *
     * @return string
     */
    public function getRut()
    {
        return $this->container['rut'];
    }

    /**
     * Sets rut
     *
     * @param string $rut International RUT Number  Deprecated. Please refer to the RegistrationNumbersRUT
     *
     * @return $this
     */
    public function setRut($rut)
    {
        $this->container['rut'] = $rut;

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
