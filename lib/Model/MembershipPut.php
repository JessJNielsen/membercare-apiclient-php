<?php
/**
 * MembershipPut
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
 * MembershipPut Class Doc Comment
 *
 * @category Class
 * @description Representation af a Membership
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembershipPut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MembershipPut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'id' => 'int',
        'application_date' => '\DateTime',
        'affiliate_date' => '\DateTime',
        'affiliation_source' => '\Membercare\Client\Model\AffiliationSource',
        'affiliation_reason' => '\Membercare\Client\Model\AffiliationReason',
        'disaffiliate_date' => '\DateTime',
        'disaffiliate_reason' => '\Membercare\Client\Model\DisaffiliateReason',
        'application_status' => '\Membercare\Client\Model\ApplicationStatus',
        'application_status_comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'id' => 'int64',
        'application_date' => 'date-time',
        'affiliate_date' => 'date-time',
        'affiliation_source' => null,
        'affiliation_reason' => null,
        'disaffiliate_date' => 'date-time',
        'disaffiliate_reason' => null,
        'application_status' => null,
        'application_status_comment' => null
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
        'application_date' => 'applicationDate',
        'affiliate_date' => 'affiliateDate',
        'affiliation_source' => 'affiliationSource',
        'affiliation_reason' => 'affiliationReason',
        'disaffiliate_date' => 'disaffiliateDate',
        'disaffiliate_reason' => 'disaffiliateReason',
        'application_status' => 'applicationStatus',
        'application_status_comment' => 'applicationStatusComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'id' => 'setId',
        'application_date' => 'setApplicationDate',
        'affiliate_date' => 'setAffiliateDate',
        'affiliation_source' => 'setAffiliationSource',
        'affiliation_reason' => 'setAffiliationReason',
        'disaffiliate_date' => 'setDisaffiliateDate',
        'disaffiliate_reason' => 'setDisaffiliateReason',
        'application_status' => 'setApplicationStatus',
        'application_status_comment' => 'setApplicationStatusComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'id' => 'getId',
        'application_date' => 'getApplicationDate',
        'affiliate_date' => 'getAffiliateDate',
        'affiliation_source' => 'getAffiliationSource',
        'affiliation_reason' => 'getAffiliationReason',
        'disaffiliate_date' => 'getDisaffiliateDate',
        'disaffiliate_reason' => 'getDisaffiliateReason',
        'application_status' => 'getApplicationStatus',
        'application_status_comment' => 'getApplicationStatusComment'
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
        $this->container['application_date'] = isset($data['application_date']) ? $data['application_date'] : null;
        $this->container['affiliate_date'] = isset($data['affiliate_date']) ? $data['affiliate_date'] : null;
        $this->container['affiliation_source'] = isset($data['affiliation_source']) ? $data['affiliation_source'] : null;
        $this->container['affiliation_reason'] = isset($data['affiliation_reason']) ? $data['affiliation_reason'] : null;
        $this->container['disaffiliate_date'] = isset($data['disaffiliate_date']) ? $data['disaffiliate_date'] : null;
        $this->container['disaffiliate_reason'] = isset($data['disaffiliate_reason']) ? $data['disaffiliate_reason'] : null;
        $this->container['application_status'] = isset($data['application_status']) ? $data['application_status'] : null;
        $this->container['application_status_comment'] = isset($data['application_status_comment']) ? $data['application_status_comment'] : null;
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
     * @param int $id The Id of the membership
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets application_date
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->container['application_date'];
    }

    /**
     * Sets application_date
     *
     * @param \DateTime $application_date The application date of the membership
     *
     * @return $this
     */
    public function setApplicationDate($application_date)
    {
        $this->container['application_date'] = $application_date;

        return $this;
    }

    /**
     * Gets affiliate_date
     *
     * @return \DateTime
     */
    public function getAffiliateDate()
    {
        return $this->container['affiliate_date'];
    }

    /**
     * Sets affiliate_date
     *
     * @param \DateTime $affiliate_date The affiliate date of the membership
     *
     * @return $this
     */
    public function setAffiliateDate($affiliate_date)
    {
        $this->container['affiliate_date'] = $affiliate_date;

        return $this;
    }

    /**
     * Gets affiliation_source
     *
     * @return \Membercare\Client\Model\AffiliationSource
     */
    public function getAffiliationSource()
    {
        return $this->container['affiliation_source'];
    }

    /**
     * Sets affiliation_source
     *
     * @param \Membercare\Client\Model\AffiliationSource $affiliation_source affiliation_source
     *
     * @return $this
     */
    public function setAffiliationSource($affiliation_source)
    {
        $this->container['affiliation_source'] = $affiliation_source;

        return $this;
    }

    /**
     * Gets affiliation_reason
     *
     * @return \Membercare\Client\Model\AffiliationReason
     */
    public function getAffiliationReason()
    {
        return $this->container['affiliation_reason'];
    }

    /**
     * Sets affiliation_reason
     *
     * @param \Membercare\Client\Model\AffiliationReason $affiliation_reason affiliation_reason
     *
     * @return $this
     */
    public function setAffiliationReason($affiliation_reason)
    {
        $this->container['affiliation_reason'] = $affiliation_reason;

        return $this;
    }

    /**
     * Gets disaffiliate_date
     *
     * @return \DateTime
     */
    public function getDisaffiliateDate()
    {
        return $this->container['disaffiliate_date'];
    }

    /**
     * Sets disaffiliate_date
     *
     * @param \DateTime $disaffiliate_date The disaffiliate date of the membership.
     *
     * @return $this
     */
    public function setDisaffiliateDate($disaffiliate_date)
    {
        $this->container['disaffiliate_date'] = $disaffiliate_date;

        return $this;
    }

    /**
     * Gets disaffiliate_reason
     *
     * @return \Membercare\Client\Model\DisaffiliateReason
     */
    public function getDisaffiliateReason()
    {
        return $this->container['disaffiliate_reason'];
    }

    /**
     * Sets disaffiliate_reason
     *
     * @param \Membercare\Client\Model\DisaffiliateReason $disaffiliate_reason disaffiliate_reason
     *
     * @return $this
     */
    public function setDisaffiliateReason($disaffiliate_reason)
    {
        $this->container['disaffiliate_reason'] = $disaffiliate_reason;

        return $this;
    }

    /**
     * Gets application_status
     *
     * @return \Membercare\Client\Model\ApplicationStatus
     */
    public function getApplicationStatus()
    {
        return $this->container['application_status'];
    }

    /**
     * Sets application_status
     *
     * @param \Membercare\Client\Model\ApplicationStatus $application_status application_status
     *
     * @return $this
     */
    public function setApplicationStatus($application_status)
    {
        $this->container['application_status'] = $application_status;

        return $this;
    }

    /**
     * Gets application_status_comment
     *
     * @return string
     */
    public function getApplicationStatusComment()
    {
        return $this->container['application_status_comment'];
    }

    /**
     * Sets application_status_comment
     *
     * @param string $application_status_comment Additional comment in regards to the application status
     *
     * @return $this
     */
    public function setApplicationStatusComment($application_status_comment)
    {
        $this->container['application_status_comment'] = $application_status_comment;

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
