<?php
/**
 * MemberInfo
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
 * MemberInfo Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemberInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'member_type' => '\Membercare\Client\Model\MemberTypes',
        'name' => 'string',
        'declaring_type' => '\Membercare\Client\Model\Type',
        'reflected_type' => '\Membercare\Client\Model\Type',
        'module' => '\Membercare\Client\Model\Module',
        'custom_attributes' => '\Membercare\Client\Model\CustomAttributeData[]',
        'is_collectible' => 'bool',
        'metadata_token' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'member_type' => null,
        'name' => null,
        'declaring_type' => null,
        'reflected_type' => null,
        'module' => null,
        'custom_attributes' => null,
        'is_collectible' => null,
        'metadata_token' => 'int32'
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
        'member_type' => 'memberType',
        'name' => 'name',
        'declaring_type' => 'declaringType',
        'reflected_type' => 'reflectedType',
        'module' => 'module',
        'custom_attributes' => 'customAttributes',
        'is_collectible' => 'isCollectible',
        'metadata_token' => 'metadataToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_type' => 'setMemberType',
        'name' => 'setName',
        'declaring_type' => 'setDeclaringType',
        'reflected_type' => 'setReflectedType',
        'module' => 'setModule',
        'custom_attributes' => 'setCustomAttributes',
        'is_collectible' => 'setIsCollectible',
        'metadata_token' => 'setMetadataToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_type' => 'getMemberType',
        'name' => 'getName',
        'declaring_type' => 'getDeclaringType',
        'reflected_type' => 'getReflectedType',
        'module' => 'getModule',
        'custom_attributes' => 'getCustomAttributes',
        'is_collectible' => 'getIsCollectible',
        'metadata_token' => 'getMetadataToken'
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
        $this->container['member_type'] = isset($data['member_type']) ? $data['member_type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['declaring_type'] = isset($data['declaring_type']) ? $data['declaring_type'] : null;
        $this->container['reflected_type'] = isset($data['reflected_type']) ? $data['reflected_type'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['custom_attributes'] = isset($data['custom_attributes']) ? $data['custom_attributes'] : null;
        $this->container['is_collectible'] = isset($data['is_collectible']) ? $data['is_collectible'] : null;
        $this->container['metadata_token'] = isset($data['metadata_token']) ? $data['metadata_token'] : null;
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
     * Gets member_type
     *
     * @return \Membercare\Client\Model\MemberTypes
     */
    public function getMemberType()
    {
        return $this->container['member_type'];
    }

    /**
     * Sets member_type
     *
     * @param \Membercare\Client\Model\MemberTypes $member_type member_type
     *
     * @return $this
     */
    public function setMemberType($member_type)
    {
        $this->container['member_type'] = $member_type;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets declaring_type
     *
     * @return \Membercare\Client\Model\Type
     */
    public function getDeclaringType()
    {
        return $this->container['declaring_type'];
    }

    /**
     * Sets declaring_type
     *
     * @param \Membercare\Client\Model\Type $declaring_type declaring_type
     *
     * @return $this
     */
    public function setDeclaringType($declaring_type)
    {
        $this->container['declaring_type'] = $declaring_type;

        return $this;
    }

    /**
     * Gets reflected_type
     *
     * @return \Membercare\Client\Model\Type
     */
    public function getReflectedType()
    {
        return $this->container['reflected_type'];
    }

    /**
     * Sets reflected_type
     *
     * @param \Membercare\Client\Model\Type $reflected_type reflected_type
     *
     * @return $this
     */
    public function setReflectedType($reflected_type)
    {
        $this->container['reflected_type'] = $reflected_type;

        return $this;
    }

    /**
     * Gets module
     *
     * @return \Membercare\Client\Model\Module
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \Membercare\Client\Model\Module $module module
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \Membercare\Client\Model\CustomAttributeData[]
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \Membercare\Client\Model\CustomAttributeData[] $custom_attributes custom_attributes
     *
     * @return $this
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets is_collectible
     *
     * @return bool
     */
    public function getIsCollectible()
    {
        return $this->container['is_collectible'];
    }

    /**
     * Sets is_collectible
     *
     * @param bool $is_collectible is_collectible
     *
     * @return $this
     */
    public function setIsCollectible($is_collectible)
    {
        $this->container['is_collectible'] = $is_collectible;

        return $this;
    }

    /**
     * Gets metadata_token
     *
     * @return int
     */
    public function getMetadataToken()
    {
        return $this->container['metadata_token'];
    }

    /**
     * Sets metadata_token
     *
     * @param int $metadata_token metadata_token
     *
     * @return $this
     */
    public function setMetadataToken($metadata_token)
    {
        $this->container['metadata_token'] = $metadata_token;

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
