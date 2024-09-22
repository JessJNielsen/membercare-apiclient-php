<?php
/**
 * CompanionServicePost
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
 * CompanionServicePost Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CompanionServicePost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CompanionServicePost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'internal_remark' => 'string',
        'discount_allowed' => 'bool',
        'mandatory' => 'bool',
        'change_price_allowed' => 'bool',
        'change_amount_allowed' => 'bool',
        'maximum_amount' => 'int',
        'change_description_allowed' => 'bool',
        'maximum_amount_participant' => 'int',
        'id' => 'int',
        'name' => 'string',
        'amount' => 'int',
        'price' => 'double',
        'finance_dimensions' => '\Membercare\Client\Model\FinanceDimensions',
        'participant_category' => '\Membercare\Client\Model\ParticipantCategory',
        'sequence' => 'int',
        'web_enabled' => 'bool',
        'include_in_participant_count' => 'bool',
        'ask_for_name' => 'bool',
        'ask_for_title' => 'bool',
        'ask_for_age' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'internal_remark' => null,
        'discount_allowed' => null,
        'mandatory' => null,
        'change_price_allowed' => null,
        'change_amount_allowed' => null,
        'maximum_amount' => 'int64',
        'change_description_allowed' => null,
        'maximum_amount_participant' => 'int64',
        'id' => 'int64',
        'name' => null,
        'amount' => 'int64',
        'price' => 'double',
        'finance_dimensions' => null,
        'participant_category' => null,
        'sequence' => 'int64',
        'web_enabled' => null,
        'include_in_participant_count' => null,
        'ask_for_name' => null,
        'ask_for_title' => null,
        'ask_for_age' => null
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
        'internal_remark' => 'internalRemark',
        'discount_allowed' => 'discountAllowed',
        'mandatory' => 'mandatory',
        'change_price_allowed' => 'changePriceAllowed',
        'change_amount_allowed' => 'changeAmountAllowed',
        'maximum_amount' => 'maximumAmount',
        'change_description_allowed' => 'changeDescriptionAllowed',
        'maximum_amount_participant' => 'maximumAmountParticipant',
        'id' => 'id',
        'name' => 'name',
        'amount' => 'amount',
        'price' => 'price',
        'finance_dimensions' => 'financeDimensions',
        'participant_category' => 'participantCategory',
        'sequence' => 'sequence',
        'web_enabled' => 'webEnabled',
        'include_in_participant_count' => 'includeInParticipantCount',
        'ask_for_name' => 'askForName',
        'ask_for_title' => 'askForTitle',
        'ask_for_age' => 'askForAge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'internal_remark' => 'setInternalRemark',
        'discount_allowed' => 'setDiscountAllowed',
        'mandatory' => 'setMandatory',
        'change_price_allowed' => 'setChangePriceAllowed',
        'change_amount_allowed' => 'setChangeAmountAllowed',
        'maximum_amount' => 'setMaximumAmount',
        'change_description_allowed' => 'setChangeDescriptionAllowed',
        'maximum_amount_participant' => 'setMaximumAmountParticipant',
        'id' => 'setId',
        'name' => 'setName',
        'amount' => 'setAmount',
        'price' => 'setPrice',
        'finance_dimensions' => 'setFinanceDimensions',
        'participant_category' => 'setParticipantCategory',
        'sequence' => 'setSequence',
        'web_enabled' => 'setWebEnabled',
        'include_in_participant_count' => 'setIncludeInParticipantCount',
        'ask_for_name' => 'setAskForName',
        'ask_for_title' => 'setAskForTitle',
        'ask_for_age' => 'setAskForAge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'internal_remark' => 'getInternalRemark',
        'discount_allowed' => 'getDiscountAllowed',
        'mandatory' => 'getMandatory',
        'change_price_allowed' => 'getChangePriceAllowed',
        'change_amount_allowed' => 'getChangeAmountAllowed',
        'maximum_amount' => 'getMaximumAmount',
        'change_description_allowed' => 'getChangeDescriptionAllowed',
        'maximum_amount_participant' => 'getMaximumAmountParticipant',
        'id' => 'getId',
        'name' => 'getName',
        'amount' => 'getAmount',
        'price' => 'getPrice',
        'finance_dimensions' => 'getFinanceDimensions',
        'participant_category' => 'getParticipantCategory',
        'sequence' => 'getSequence',
        'web_enabled' => 'getWebEnabled',
        'include_in_participant_count' => 'getIncludeInParticipantCount',
        'ask_for_name' => 'getAskForName',
        'ask_for_title' => 'getAskForTitle',
        'ask_for_age' => 'getAskForAge'
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
        $this->container['internal_remark'] = isset($data['internal_remark']) ? $data['internal_remark'] : null;
        $this->container['discount_allowed'] = isset($data['discount_allowed']) ? $data['discount_allowed'] : null;
        $this->container['mandatory'] = isset($data['mandatory']) ? $data['mandatory'] : null;
        $this->container['change_price_allowed'] = isset($data['change_price_allowed']) ? $data['change_price_allowed'] : null;
        $this->container['change_amount_allowed'] = isset($data['change_amount_allowed']) ? $data['change_amount_allowed'] : null;
        $this->container['maximum_amount'] = isset($data['maximum_amount']) ? $data['maximum_amount'] : null;
        $this->container['change_description_allowed'] = isset($data['change_description_allowed']) ? $data['change_description_allowed'] : null;
        $this->container['maximum_amount_participant'] = isset($data['maximum_amount_participant']) ? $data['maximum_amount_participant'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['finance_dimensions'] = isset($data['finance_dimensions']) ? $data['finance_dimensions'] : null;
        $this->container['participant_category'] = isset($data['participant_category']) ? $data['participant_category'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['web_enabled'] = isset($data['web_enabled']) ? $data['web_enabled'] : null;
        $this->container['include_in_participant_count'] = isset($data['include_in_participant_count']) ? $data['include_in_participant_count'] : null;
        $this->container['ask_for_name'] = isset($data['ask_for_name']) ? $data['ask_for_name'] : null;
        $this->container['ask_for_title'] = isset($data['ask_for_title']) ? $data['ask_for_title'] : null;
        $this->container['ask_for_age'] = isset($data['ask_for_age']) ? $data['ask_for_age'] : null;
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
     * Gets internal_remark
     *
     * @return string
     */
    public function getInternalRemark()
    {
        return $this->container['internal_remark'];
    }

    /**
     * Sets internal_remark
     *
     * @param string $internal_remark Indicates whether or not the description of the service is editable.
     *
     * @return $this
     */
    public function setInternalRemark($internal_remark)
    {
        $this->container['internal_remark'] = $internal_remark;

        return $this;
    }

    /**
     * Gets discount_allowed
     *
     * @return bool
     */
    public function getDiscountAllowed()
    {
        return $this->container['discount_allowed'];
    }

    /**
     * Sets discount_allowed
     *
     * @param bool $discount_allowed Indicates whether or not discount is allowed on the service.
     *
     * @return $this
     */
    public function setDiscountAllowed($discount_allowed)
    {
        $this->container['discount_allowed'] = $discount_allowed;

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
     * @param bool $mandatory Indicates whether or not the service is mandatory.
     *
     * @return $this
     */
    public function setMandatory($mandatory)
    {
        $this->container['mandatory'] = $mandatory;

        return $this;
    }

    /**
     * Gets change_price_allowed
     *
     * @return bool
     */
    public function getChangePriceAllowed()
    {
        return $this->container['change_price_allowed'];
    }

    /**
     * Sets change_price_allowed
     *
     * @param bool $change_price_allowed Indicates whether or not the price is editable.
     *
     * @return $this
     */
    public function setChangePriceAllowed($change_price_allowed)
    {
        $this->container['change_price_allowed'] = $change_price_allowed;

        return $this;
    }

    /**
     * Gets change_amount_allowed
     *
     * @return bool
     */
    public function getChangeAmountAllowed()
    {
        return $this->container['change_amount_allowed'];
    }

    /**
     * Sets change_amount_allowed
     *
     * @param bool $change_amount_allowed Indicates whether or not the amount is editable.
     *
     * @return $this
     */
    public function setChangeAmountAllowed($change_amount_allowed)
    {
        $this->container['change_amount_allowed'] = $change_amount_allowed;

        return $this;
    }

    /**
     * Gets maximum_amount
     *
     * @return int
     */
    public function getMaximumAmount()
    {
        return $this->container['maximum_amount'];
    }

    /**
     * Sets maximum_amount
     *
     * @param int $maximum_amount The maximum amount that is available for the service.
     *
     * @return $this
     */
    public function setMaximumAmount($maximum_amount)
    {
        $this->container['maximum_amount'] = $maximum_amount;

        return $this;
    }

    /**
     * Gets change_description_allowed
     *
     * @return bool
     */
    public function getChangeDescriptionAllowed()
    {
        return $this->container['change_description_allowed'];
    }

    /**
     * Sets change_description_allowed
     *
     * @param bool $change_description_allowed Indicates whether or not the description of the service is editable.
     *
     * @return $this
     */
    public function setChangeDescriptionAllowed($change_description_allowed)
    {
        $this->container['change_description_allowed'] = $change_description_allowed;

        return $this;
    }

    /**
     * Gets maximum_amount_participant
     *
     * @return int
     */
    public function getMaximumAmountParticipant()
    {
        return $this->container['maximum_amount_participant'];
    }

    /**
     * Sets maximum_amount_participant
     *
     * @param int $maximum_amount_participant The maximum amount that is available for each participant.
     *
     * @return $this
     */
    public function setMaximumAmountParticipant($maximum_amount_participant)
    {
        $this->container['maximum_amount_participant'] = $maximum_amount_participant;

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
     * @param int $id The identification number of the service.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name The name of the service
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The default amount for the service.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price The price of the service
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets finance_dimensions
     *
     * @return \Membercare\Client\Model\FinanceDimensions
     */
    public function getFinanceDimensions()
    {
        return $this->container['finance_dimensions'];
    }

    /**
     * Sets finance_dimensions
     *
     * @param \Membercare\Client\Model\FinanceDimensions $finance_dimensions finance_dimensions
     *
     * @return $this
     */
    public function setFinanceDimensions($finance_dimensions)
    {
        $this->container['finance_dimensions'] = $finance_dimensions;

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
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence The ordering sequence of the service
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

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
     * @param bool $web_enabled Indicates whether or not to display the service on web.
     *
     * @return $this
     */
    public function setWebEnabled($web_enabled)
    {
        $this->container['web_enabled'] = $web_enabled;

        return $this;
    }

    /**
     * Gets include_in_participant_count
     *
     * @return bool
     */
    public function getIncludeInParticipantCount()
    {
        return $this->container['include_in_participant_count'];
    }

    /**
     * Sets include_in_participant_count
     *
     * @param bool $include_in_participant_count include_in_participant_count
     *
     * @return $this
     */
    public function setIncludeInParticipantCount($include_in_participant_count)
    {
        $this->container['include_in_participant_count'] = $include_in_participant_count;

        return $this;
    }

    /**
     * Gets ask_for_name
     *
     * @return bool
     */
    public function getAskForName()
    {
        return $this->container['ask_for_name'];
    }

    /**
     * Sets ask_for_name
     *
     * @param bool $ask_for_name ask_for_name
     *
     * @return $this
     */
    public function setAskForName($ask_for_name)
    {
        $this->container['ask_for_name'] = $ask_for_name;

        return $this;
    }

    /**
     * Gets ask_for_title
     *
     * @return bool
     */
    public function getAskForTitle()
    {
        return $this->container['ask_for_title'];
    }

    /**
     * Sets ask_for_title
     *
     * @param bool $ask_for_title ask_for_title
     *
     * @return $this
     */
    public function setAskForTitle($ask_for_title)
    {
        $this->container['ask_for_title'] = $ask_for_title;

        return $this;
    }

    /**
     * Gets ask_for_age
     *
     * @return bool
     */
    public function getAskForAge()
    {
        return $this->container['ask_for_age'];
    }

    /**
     * Sets ask_for_age
     *
     * @param bool $ask_for_age ask_for_age
     *
     * @return $this
     */
    public function setAskForAge($ask_for_age)
    {
        $this->container['ask_for_age'] = $ask_for_age;

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
