<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @description Representation of a subscription for exposure in the WebApi
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'id' => 'int',
        'subscriber' => '\Membercare\Client\Model\Member',
        'recipient' => '\Membercare\Client\Model\Member',
        'recipient_address_rule' => '\Membercare\Client\Model\AddressRule',
        'payer' => '\Membercare\Client\Model\Member',
        'e_invoice_info' => '\Membercare\Client\Model\EInvoiceInfo',
        'subscription_definition' => '\Membercare\Client\Model\SubscriptionDefinition',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'quantity' => 'int',
        'delivery_wanted' => 'bool',
        'recurring_payment_identification' => 'string',
        'description' => 'string',
        'individual_price' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'id' => 'int64',
        'subscriber' => null,
        'recipient' => null,
        'recipient_address_rule' => null,
        'payer' => null,
        'e_invoice_info' => null,
        'subscription_definition' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'quantity' => 'int64',
        'delivery_wanted' => null,
        'recurring_payment_identification' => null,
        'description' => null,
        'individual_price' => 'double'
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
        'subscriber' => 'subscriber',
        'recipient' => 'recipient',
        'recipient_address_rule' => 'recipientAddressRule',
        'payer' => 'payer',
        'e_invoice_info' => 'eInvoiceInfo',
        'subscription_definition' => 'subscriptionDefinition',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'quantity' => 'quantity',
        'delivery_wanted' => 'deliveryWanted',
        'recurring_payment_identification' => 'recurringPaymentIdentification',
        'description' => 'description',
        'individual_price' => 'individualPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'id' => 'setId',
        'subscriber' => 'setSubscriber',
        'recipient' => 'setRecipient',
        'recipient_address_rule' => 'setRecipientAddressRule',
        'payer' => 'setPayer',
        'e_invoice_info' => 'setEInvoiceInfo',
        'subscription_definition' => 'setSubscriptionDefinition',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'quantity' => 'setQuantity',
        'delivery_wanted' => 'setDeliveryWanted',
        'recurring_payment_identification' => 'setRecurringPaymentIdentification',
        'description' => 'setDescription',
        'individual_price' => 'setIndividualPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'id' => 'getId',
        'subscriber' => 'getSubscriber',
        'recipient' => 'getRecipient',
        'recipient_address_rule' => 'getRecipientAddressRule',
        'payer' => 'getPayer',
        'e_invoice_info' => 'getEInvoiceInfo',
        'subscription_definition' => 'getSubscriptionDefinition',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'quantity' => 'getQuantity',
        'delivery_wanted' => 'getDeliveryWanted',
        'recurring_payment_identification' => 'getRecurringPaymentIdentification',
        'description' => 'getDescription',
        'individual_price' => 'getIndividualPrice'
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
        $this->container['subscriber'] = isset($data['subscriber']) ? $data['subscriber'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['recipient_address_rule'] = isset($data['recipient_address_rule']) ? $data['recipient_address_rule'] : null;
        $this->container['payer'] = isset($data['payer']) ? $data['payer'] : null;
        $this->container['e_invoice_info'] = isset($data['e_invoice_info']) ? $data['e_invoice_info'] : null;
        $this->container['subscription_definition'] = isset($data['subscription_definition']) ? $data['subscription_definition'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['delivery_wanted'] = isset($data['delivery_wanted']) ? $data['delivery_wanted'] : null;
        $this->container['recurring_payment_identification'] = isset($data['recurring_payment_identification']) ? $data['recurring_payment_identification'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['individual_price'] = isset($data['individual_price']) ? $data['individual_price'] : null;
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
     * @param int $id The identification number of the subscription
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets subscriber
     *
     * @return \Membercare\Client\Model\Member
     */
    public function getSubscriber()
    {
        return $this->container['subscriber'];
    }

    /**
     * Sets subscriber
     *
     * @param \Membercare\Client\Model\Member $subscriber subscriber
     *
     * @return $this
     */
    public function setSubscriber($subscriber)
    {
        $this->container['subscriber'] = $subscriber;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \Membercare\Client\Model\Member
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \Membercare\Client\Model\Member $recipient recipient
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets recipient_address_rule
     *
     * @return \Membercare\Client\Model\AddressRule
     */
    public function getRecipientAddressRule()
    {
        return $this->container['recipient_address_rule'];
    }

    /**
     * Sets recipient_address_rule
     *
     * @param \Membercare\Client\Model\AddressRule $recipient_address_rule recipient_address_rule
     *
     * @return $this
     */
    public function setRecipientAddressRule($recipient_address_rule)
    {
        $this->container['recipient_address_rule'] = $recipient_address_rule;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return \Membercare\Client\Model\Member
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \Membercare\Client\Model\Member $payer payer
     *
     * @return $this
     */
    public function setPayer($payer)
    {
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets e_invoice_info
     *
     * @return \Membercare\Client\Model\EInvoiceInfo
     */
    public function getEInvoiceInfo()
    {
        return $this->container['e_invoice_info'];
    }

    /**
     * Sets e_invoice_info
     *
     * @param \Membercare\Client\Model\EInvoiceInfo $e_invoice_info e_invoice_info
     *
     * @return $this
     */
    public function setEInvoiceInfo($e_invoice_info)
    {
        $this->container['e_invoice_info'] = $e_invoice_info;

        return $this;
    }

    /**
     * Gets subscription_definition
     *
     * @return \Membercare\Client\Model\SubscriptionDefinition
     */
    public function getSubscriptionDefinition()
    {
        return $this->container['subscription_definition'];
    }

    /**
     * Sets subscription_definition
     *
     * @param \Membercare\Client\Model\SubscriptionDefinition $subscription_definition subscription_definition
     *
     * @return $this
     */
    public function setSubscriptionDefinition($subscription_definition)
    {
        $this->container['subscription_definition'] = $subscription_definition;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date The start date of the subscription
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date The end date of the subscription
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity of the subscription
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets delivery_wanted
     *
     * @return bool
     */
    public function getDeliveryWanted()
    {
        return $this->container['delivery_wanted'];
    }

    /**
     * Sets delivery_wanted
     *
     * @param bool $delivery_wanted Indicates whether or not the subscription should be delivered to the a recipient
     *
     * @return $this
     */
    public function setDeliveryWanted($delivery_wanted)
    {
        $this->container['delivery_wanted'] = $delivery_wanted;

        return $this;
    }

    /**
     * Gets recurring_payment_identification
     *
     * @return string
     */
    public function getRecurringPaymentIdentification()
    {
        return $this->container['recurring_payment_identification'];
    }

    /**
     * Sets recurring_payment_identification
     *
     * @param string $recurring_payment_identification Used for storing credit card identification for automated recurring payments
     *
     * @return $this
     */
    public function setRecurringPaymentIdentification($recurring_payment_identification)
    {
        $this->container['recurring_payment_identification'] = $recurring_payment_identification;

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
     * @param string $description The description of the subscription
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets individual_price
     *
     * @return double
     */
    public function getIndividualPrice()
    {
        return $this->container['individual_price'];
    }

    /**
     * Sets individual_price
     *
     * @param double $individual_price A specific price for the given subscriber (overrules normal pricing)
     *
     * @return $this
     */
    public function setIndividualPrice($individual_price)
    {
        $this->container['individual_price'] = $individual_price;

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
