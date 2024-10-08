<?php
/**
 * MembershipPurchaseParams
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
 * MembershipPurchaseParams Class Doc Comment
 *
 * @category Class
 * @description UNDER DEVELOPMENT - will be subject to change
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembershipPurchaseParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MembershipPurchaseParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'calc_date' => '\DateTime',
        'payer_debtor_account_number' => 'string',
        'shop_order_id' => 'string',
        'payment' => '\Membercare\Client\Model\Payment',
        'membership_purchases' => '\Membercare\Client\Model\MembershipPurchase[]',
        'affiliation_source_id' => 'int',
        'affiliation_reason_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'calc_date' => 'date-time',
        'payer_debtor_account_number' => null,
        'shop_order_id' => null,
        'payment' => null,
        'membership_purchases' => null,
        'affiliation_source_id' => 'int64',
        'affiliation_reason_id' => 'int64'
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
        'calc_date' => 'calcDate',
        'payer_debtor_account_number' => 'payerDebtorAccountNumber',
        'shop_order_id' => 'shopOrderId',
        'payment' => 'payment',
        'membership_purchases' => 'membershipPurchases',
        'affiliation_source_id' => 'affiliationSourceId',
        'affiliation_reason_id' => 'affiliationReasonId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'calc_date' => 'setCalcDate',
        'payer_debtor_account_number' => 'setPayerDebtorAccountNumber',
        'shop_order_id' => 'setShopOrderId',
        'payment' => 'setPayment',
        'membership_purchases' => 'setMembershipPurchases',
        'affiliation_source_id' => 'setAffiliationSourceId',
        'affiliation_reason_id' => 'setAffiliationReasonId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'calc_date' => 'getCalcDate',
        'payer_debtor_account_number' => 'getPayerDebtorAccountNumber',
        'shop_order_id' => 'getShopOrderId',
        'payment' => 'getPayment',
        'membership_purchases' => 'getMembershipPurchases',
        'affiliation_source_id' => 'getAffiliationSourceId',
        'affiliation_reason_id' => 'getAffiliationReasonId'
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
        $this->container['calc_date'] = isset($data['calc_date']) ? $data['calc_date'] : null;
        $this->container['payer_debtor_account_number'] = isset($data['payer_debtor_account_number']) ? $data['payer_debtor_account_number'] : null;
        $this->container['shop_order_id'] = isset($data['shop_order_id']) ? $data['shop_order_id'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['membership_purchases'] = isset($data['membership_purchases']) ? $data['membership_purchases'] : null;
        $this->container['affiliation_source_id'] = isset($data['affiliation_source_id']) ? $data['affiliation_source_id'] : null;
        $this->container['affiliation_reason_id'] = isset($data['affiliation_reason_id']) ? $data['affiliation_reason_id'] : null;
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
     * Gets calc_date
     *
     * @return \DateTime
     */
    public function getCalcDate()
    {
        return $this->container['calc_date'];
    }

    /**
     * Sets calc_date
     *
     * @param \DateTime $calc_date calc_date
     *
     * @return $this
     */
    public function setCalcDate($calc_date)
    {
        $this->container['calc_date'] = $calc_date;

        return $this;
    }

    /**
     * Gets payer_debtor_account_number
     *
     * @return string
     */
    public function getPayerDebtorAccountNumber()
    {
        return $this->container['payer_debtor_account_number'];
    }

    /**
     * Sets payer_debtor_account_number
     *
     * @param string $payer_debtor_account_number payer_debtor_account_number
     *
     * @return $this
     */
    public function setPayerDebtorAccountNumber($payer_debtor_account_number)
    {
        $this->container['payer_debtor_account_number'] = $payer_debtor_account_number;

        return $this;
    }

    /**
     * Gets shop_order_id
     *
     * @return string
     */
    public function getShopOrderId()
    {
        return $this->container['shop_order_id'];
    }

    /**
     * Sets shop_order_id
     *
     * @param string $shop_order_id shop_order_id
     *
     * @return $this
     */
    public function setShopOrderId($shop_order_id)
    {
        $this->container['shop_order_id'] = $shop_order_id;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Membercare\Client\Model\Payment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Membercare\Client\Model\Payment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets membership_purchases
     *
     * @return \Membercare\Client\Model\MembershipPurchase[]
     */
    public function getMembershipPurchases()
    {
        return $this->container['membership_purchases'];
    }

    /**
     * Sets membership_purchases
     *
     * @param \Membercare\Client\Model\MembershipPurchase[] $membership_purchases membership_purchases
     *
     * @return $this
     */
    public function setMembershipPurchases($membership_purchases)
    {
        $this->container['membership_purchases'] = $membership_purchases;

        return $this;
    }

    /**
     * Gets affiliation_source_id
     *
     * @return int
     */
    public function getAffiliationSourceId()
    {
        return $this->container['affiliation_source_id'];
    }

    /**
     * Sets affiliation_source_id
     *
     * @param int $affiliation_source_id Affiliationsourceid from query, if any. Will overwrite default affiliationsource from config
     *
     * @return $this
     */
    public function setAffiliationSourceId($affiliation_source_id)
    {
        $this->container['affiliation_source_id'] = $affiliation_source_id;

        return $this;
    }

    /**
     * Gets affiliation_reason_id
     *
     * @return int
     */
    public function getAffiliationReasonId()
    {
        return $this->container['affiliation_reason_id'];
    }

    /**
     * Sets affiliation_reason_id
     *
     * @param int $affiliation_reason_id Set the id of the AffiliationReason you want attached to the membership
     *
     * @return $this
     */
    public function setAffiliationReasonId($affiliation_reason_id)
    {
        $this->container['affiliation_reason_id'] = $affiliation_reason_id;

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
