<?php
/**
 * Exception
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
 * Exception Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Exception implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Exception';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'target_site' => '\Membercare\Client\Model\MethodBase',
        'message' => 'string',
        'data' => 'map[string,null]',
        'inner_exception' => '\Membercare\Client\Model\Exception',
        'help_link' => 'string',
        'source' => 'string',
        'h_result' => 'int',
        'stack_trace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'target_site' => null,
        'message' => null,
        'data' => null,
        'inner_exception' => null,
        'help_link' => null,
        'source' => null,
        'h_result' => 'int32',
        'stack_trace' => null
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
        'target_site' => 'targetSite',
        'message' => 'message',
        'data' => 'data',
        'inner_exception' => 'innerException',
        'help_link' => 'helpLink',
        'source' => 'source',
        'h_result' => 'hResult',
        'stack_trace' => 'stackTrace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'target_site' => 'setTargetSite',
        'message' => 'setMessage',
        'data' => 'setData',
        'inner_exception' => 'setInnerException',
        'help_link' => 'setHelpLink',
        'source' => 'setSource',
        'h_result' => 'setHResult',
        'stack_trace' => 'setStackTrace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'target_site' => 'getTargetSite',
        'message' => 'getMessage',
        'data' => 'getData',
        'inner_exception' => 'getInnerException',
        'help_link' => 'getHelpLink',
        'source' => 'getSource',
        'h_result' => 'getHResult',
        'stack_trace' => 'getStackTrace'
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
        $this->container['target_site'] = isset($data['target_site']) ? $data['target_site'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['inner_exception'] = isset($data['inner_exception']) ? $data['inner_exception'] : null;
        $this->container['help_link'] = isset($data['help_link']) ? $data['help_link'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['h_result'] = isset($data['h_result']) ? $data['h_result'] : null;
        $this->container['stack_trace'] = isset($data['stack_trace']) ? $data['stack_trace'] : null;
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
     * Gets target_site
     *
     * @return \Membercare\Client\Model\MethodBase
     */
    public function getTargetSite()
    {
        return $this->container['target_site'];
    }

    /**
     * Sets target_site
     *
     * @param \Membercare\Client\Model\MethodBase $target_site target_site
     *
     * @return $this
     */
    public function setTargetSite($target_site)
    {
        $this->container['target_site'] = $target_site;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets data
     *
     * @return map[string,null]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param map[string,null] $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets inner_exception
     *
     * @return \Membercare\Client\Model\Exception
     */
    public function getInnerException()
    {
        return $this->container['inner_exception'];
    }

    /**
     * Sets inner_exception
     *
     * @param \Membercare\Client\Model\Exception $inner_exception inner_exception
     *
     * @return $this
     */
    public function setInnerException($inner_exception)
    {
        $this->container['inner_exception'] = $inner_exception;

        return $this;
    }

    /**
     * Gets help_link
     *
     * @return string
     */
    public function getHelpLink()
    {
        return $this->container['help_link'];
    }

    /**
     * Sets help_link
     *
     * @param string $help_link help_link
     *
     * @return $this
     */
    public function setHelpLink($help_link)
    {
        $this->container['help_link'] = $help_link;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets h_result
     *
     * @return int
     */
    public function getHResult()
    {
        return $this->container['h_result'];
    }

    /**
     * Sets h_result
     *
     * @param int $h_result h_result
     *
     * @return $this
     */
    public function setHResult($h_result)
    {
        $this->container['h_result'] = $h_result;

        return $this;
    }

    /**
     * Gets stack_trace
     *
     * @return string
     */
    public function getStackTrace()
    {
        return $this->container['stack_trace'];
    }

    /**
     * Sets stack_trace
     *
     * @param string $stack_trace stack_trace
     *
     * @return $this
     */
    public function setStackTrace($stack_trace)
    {
        $this->container['stack_trace'] = $stack_trace;

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
