<?php
/**
 * ParticipantToEnroll
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
 * ParticipantToEnroll Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParticipantToEnroll implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParticipantToEnroll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arrangement_internal_id' => 'string',
        'description' => 'string',
        'permit_email' => 'bool',
        'permit_sms' => 'bool',
        'participant_category' => '\Membercare\Client\Model\ParticipantCategory',
        'participating_person' => '\Membercare\Client\Model\Person',
        'contact_person' => '\Membercare\Client\Model\Person',
        'represents' => '\Membercare\Client\Model\Company',
        'services' => '\Membercare\Client\Model\ServiceToEnroll[]',
        'sessions' => '\Membercare\Client\Model\SessionToEnroll[]',
        'show_on_external_participant_list' => 'bool',
        'invitation_identification' => 'string',
        'answers' => '\Membercare\Client\Model\AnswerPost[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arrangement_internal_id' => null,
        'description' => null,
        'permit_email' => null,
        'permit_sms' => null,
        'participant_category' => null,
        'participating_person' => null,
        'contact_person' => null,
        'represents' => null,
        'services' => null,
        'sessions' => null,
        'show_on_external_participant_list' => null,
        'invitation_identification' => 'uuid',
        'answers' => null
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
        'arrangement_internal_id' => 'arrangementInternalId',
        'description' => 'description',
        'permit_email' => 'permitEmail',
        'permit_sms' => 'permitSms',
        'participant_category' => 'participantCategory',
        'participating_person' => 'participatingPerson',
        'contact_person' => 'contactPerson',
        'represents' => 'represents',
        'services' => 'services',
        'sessions' => 'sessions',
        'show_on_external_participant_list' => 'showOnExternalParticipantList',
        'invitation_identification' => 'invitationIdentification',
        'answers' => 'answers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrangement_internal_id' => 'setArrangementInternalId',
        'description' => 'setDescription',
        'permit_email' => 'setPermitEmail',
        'permit_sms' => 'setPermitSms',
        'participant_category' => 'setParticipantCategory',
        'participating_person' => 'setParticipatingPerson',
        'contact_person' => 'setContactPerson',
        'represents' => 'setRepresents',
        'services' => 'setServices',
        'sessions' => 'setSessions',
        'show_on_external_participant_list' => 'setShowOnExternalParticipantList',
        'invitation_identification' => 'setInvitationIdentification',
        'answers' => 'setAnswers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrangement_internal_id' => 'getArrangementInternalId',
        'description' => 'getDescription',
        'permit_email' => 'getPermitEmail',
        'permit_sms' => 'getPermitSms',
        'participant_category' => 'getParticipantCategory',
        'participating_person' => 'getParticipatingPerson',
        'contact_person' => 'getContactPerson',
        'represents' => 'getRepresents',
        'services' => 'getServices',
        'sessions' => 'getSessions',
        'show_on_external_participant_list' => 'getShowOnExternalParticipantList',
        'invitation_identification' => 'getInvitationIdentification',
        'answers' => 'getAnswers'
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
        $this->container['arrangement_internal_id'] = isset($data['arrangement_internal_id']) ? $data['arrangement_internal_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['permit_email'] = isset($data['permit_email']) ? $data['permit_email'] : null;
        $this->container['permit_sms'] = isset($data['permit_sms']) ? $data['permit_sms'] : null;
        $this->container['participant_category'] = isset($data['participant_category']) ? $data['participant_category'] : null;
        $this->container['participating_person'] = isset($data['participating_person']) ? $data['participating_person'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['represents'] = isset($data['represents']) ? $data['represents'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
        $this->container['show_on_external_participant_list'] = isset($data['show_on_external_participant_list']) ? $data['show_on_external_participant_list'] : null;
        $this->container['invitation_identification'] = isset($data['invitation_identification']) ? $data['invitation_identification'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
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
     * Gets arrangement_internal_id
     *
     * @return string
     */
    public function getArrangementInternalId()
    {
        return $this->container['arrangement_internal_id'];
    }

    /**
     * Sets arrangement_internal_id
     *
     * @param string $arrangement_internal_id arrangement_internal_id
     *
     * @return $this
     */
    public function setArrangementInternalId($arrangement_internal_id)
    {
        $this->container['arrangement_internal_id'] = $arrangement_internal_id;

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
     * Gets participating_person
     *
     * @return \Membercare\Client\Model\Person
     */
    public function getParticipatingPerson()
    {
        return $this->container['participating_person'];
    }

    /**
     * Sets participating_person
     *
     * @param \Membercare\Client\Model\Person $participating_person participating_person
     *
     * @return $this
     */
    public function setParticipatingPerson($participating_person)
    {
        $this->container['participating_person'] = $participating_person;

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
     * Gets represents
     *
     * @return \Membercare\Client\Model\Company
     */
    public function getRepresents()
    {
        return $this->container['represents'];
    }

    /**
     * Sets represents
     *
     * @param \Membercare\Client\Model\Company $represents represents
     *
     * @return $this
     */
    public function setRepresents($represents)
    {
        $this->container['represents'] = $represents;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Membercare\Client\Model\ServiceToEnroll[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Membercare\Client\Model\ServiceToEnroll[] $services services
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets sessions
     *
     * @return \Membercare\Client\Model\SessionToEnroll[]
     */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
     * Sets sessions
     *
     * @param \Membercare\Client\Model\SessionToEnroll[] $sessions sessions
     *
     * @return $this
     */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;

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
     * Gets invitation_identification
     *
     * @return string
     */
    public function getInvitationIdentification()
    {
        return $this->container['invitation_identification'];
    }

    /**
     * Sets invitation_identification
     *
     * @param string $invitation_identification invitation_identification
     *
     * @return $this
     */
    public function setInvitationIdentification($invitation_identification)
    {
        $this->container['invitation_identification'] = $invitation_identification;

        return $this;
    }

    /**
     * Gets answers
     *
     * @return \Membercare\Client\Model\AnswerPost[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     *
     * @param \Membercare\Client\Model\AnswerPost[] $answers Answers given when signing up for event
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

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
