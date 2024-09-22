<?php
/**
 * ParticipantPatch
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
 * ParticipantPatch Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParticipantPatch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParticipantPatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'id' => 'int',
        'member' => '\Membercare\Client\Model\Member',
        'contact_person' => '\Membercare\Client\Model\Person',
        'payer' => '\Membercare\Client\Model\Debtor',
        'participant_category' => '\Membercare\Client\Model\ParticipantCategory',
        'permit_email' => 'bool',
        'permit_sms' => 'bool',
        'description' => 'string',
        'e_invocie_info' => '\Membercare\Client\Model\EInvoiceInfo',
        'enrolled_from' => '\Membercare\Client\Model\EnrolledFrom',
        'represent' => '\Membercare\Client\Model\Company',
        'show_on_external_participant_list' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'id' => 'int64',
        'member' => null,
        'contact_person' => null,
        'payer' => null,
        'participant_category' => null,
        'permit_email' => null,
        'permit_sms' => null,
        'description' => null,
        'e_invocie_info' => null,
        'enrolled_from' => null,
        'represent' => null,
        'show_on_external_participant_list' => null
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
        'member' => 'member',
        'contact_person' => 'contactPerson',
        'payer' => 'payer',
        'participant_category' => 'participantCategory',
        'permit_email' => 'permitEmail',
        'permit_sms' => 'permitSms',
        'description' => 'description',
        'e_invocie_info' => 'eInvocieInfo',
        'enrolled_from' => 'enrolledFrom',
        'represent' => 'represent',
        'show_on_external_participant_list' => 'showOnExternalParticipantList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'id' => 'setId',
        'member' => 'setMember',
        'contact_person' => 'setContactPerson',
        'payer' => 'setPayer',
        'participant_category' => 'setParticipantCategory',
        'permit_email' => 'setPermitEmail',
        'permit_sms' => 'setPermitSms',
        'description' => 'setDescription',
        'e_invocie_info' => 'setEInvocieInfo',
        'enrolled_from' => 'setEnrolledFrom',
        'represent' => 'setRepresent',
        'show_on_external_participant_list' => 'setShowOnExternalParticipantList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'id' => 'getId',
        'member' => 'getMember',
        'contact_person' => 'getContactPerson',
        'payer' => 'getPayer',
        'participant_category' => 'getParticipantCategory',
        'permit_email' => 'getPermitEmail',
        'permit_sms' => 'getPermitSms',
        'description' => 'getDescription',
        'e_invocie_info' => 'getEInvocieInfo',
        'enrolled_from' => 'getEnrolledFrom',
        'represent' => 'getRepresent',
        'show_on_external_participant_list' => 'getShowOnExternalParticipantList'
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
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['payer'] = isset($data['payer']) ? $data['payer'] : null;
        $this->container['participant_category'] = isset($data['participant_category']) ? $data['participant_category'] : null;
        $this->container['permit_email'] = isset($data['permit_email']) ? $data['permit_email'] : null;
        $this->container['permit_sms'] = isset($data['permit_sms']) ? $data['permit_sms'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['e_invocie_info'] = isset($data['e_invocie_info']) ? $data['e_invocie_info'] : null;
        $this->container['enrolled_from'] = isset($data['enrolled_from']) ? $data['enrolled_from'] : null;
        $this->container['represent'] = isset($data['represent']) ? $data['represent'] : null;
        $this->container['show_on_external_participant_list'] = isset($data['show_on_external_participant_list']) ? $data['show_on_external_participant_list'] : null;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets member
     *
     * @return \Membercare\Client\Model\Member
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param \Membercare\Client\Model\Member $member member
     *
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return \Membercare\Client\Model\Person
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param \Membercare\Client\Model\Person $contact_person contact_person
     *
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return \Membercare\Client\Model\Debtor
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \Membercare\Client\Model\Debtor $payer payer
     *
     * @return $this
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

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
     * Gets permit_email
     *
     * @return bool
     */
    public function getPermitEmail()
    {
        return $this->container['permit_email'];
    }

    /**
     * Sets permit_email
     *
     * @param bool $permit_email permit_email
     *
     * @return $this
     */
    public function setPermitEmail($permit_email)
    {
        $this->container['permit_email'] = $permit_email;

        return $this;
    }

    /**
     * Gets permit_sms
     *
     * @return bool
     */
    public function getPermitSms()
    {
        return $this->container['permit_sms'];
    }

    /**
     * Sets permit_sms
     *
     * @param bool $permit_sms permit_sms
     *
     * @return $this
     */
    public function setPermitSms($permit_sms)
    {
        $this->container['permit_sms'] = $permit_sms;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets e_invocie_info
     *
     * @return \Membercare\Client\Model\EInvoiceInfo
     */
    public function getEInvocieInfo()
    {
        return $this->container['e_invocie_info'];
    }

    /**
     * Sets e_invocie_info
     *
     * @param \Membercare\Client\Model\EInvoiceInfo $e_invocie_info e_invocie_info
     *
     * @return $this
     */
    public function setEInvocieInfo($e_invocie_info)
    {
        $this->container['e_invocie_info'] = $e_invocie_info;

        return $this;
    }

    /**
     * Gets enrolled_from
     *
     * @return \Membercare\Client\Model\EnrolledFrom
     */
    public function getEnrolledFrom()
    {
        return $this->container['enrolled_from'];
    }

    /**
     * Sets enrolled_from
     *
     * @param \Membercare\Client\Model\EnrolledFrom $enrolled_from enrolled_from
     *
     * @return $this
     */
    public function setEnrolledFrom($enrolled_from)
    {
        $this->container['enrolled_from'] = $enrolled_from;

        return $this;
    }

    /**
     * Gets represent
     *
     * @return \Membercare\Client\Model\Company
     */
    public function getRepresent()
    {
        return $this->container['represent'];
    }

    /**
     * Sets represent
     *
     * @param \Membercare\Client\Model\Company $represent represent
     *
     * @return $this
     */
    public function setRepresent($represent)
    {
        $this->container['represent'] = $represent;

        return $this;
    }

    /**
     * Gets show_on_external_participant_list
     *
     * @return bool
     */
    public function getShowOnExternalParticipantList()
    {
        return $this->container['show_on_external_participant_list'];
    }

    /**
     * Sets show_on_external_participant_list
     *
     * @param bool $show_on_external_participant_list show_on_external_participant_list
     *
     * @return $this
     */
    public function setShowOnExternalParticipantList($show_on_external_participant_list)
    {
        $this->container['show_on_external_participant_list'] = $show_on_external_participant_list;

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
