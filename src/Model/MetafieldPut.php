<?php
/**
 * MetafieldPut
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce API
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\Model;

use \ArrayAccess;

class MetafieldPut extends MetafieldBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MetafieldPut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'permission_set' => 'string',
        'namespace' => 'string',
        'key' => 'string',
        'value' => 'string',
        'description' => 'string',
        'resource_type' => 'string',
        'resource_id' => 'int',
        'id' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'permission_set' => 'permission_set',
        'namespace' => 'namespace',
        'key' => 'key',
        'value' => 'value',
        'description' => 'description',
        'resource_type' => 'resource_type',
        'resource_id' => 'resource_id',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'permission_set' => 'setPermissionSet',
        'namespace' => 'setNamespace',
        'key' => 'setKey',
        'value' => 'setValue',
        'description' => 'setDescription',
        'resource_type' => 'setResourceType',
        'resource_id' => 'setResourceId',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'permission_set' => 'getPermissionSet',
        'namespace' => 'getNamespace',
        'key' => 'getKey',
        'value' => 'getValue',
        'description' => 'getDescription',
        'resource_type' => 'getResourceType',
        'resource_id' => 'getResourceId',
        'id' => 'getId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['permission_set'] = array_key_exists('permission_set', $data) ? $data['permission_set'] : null;
        $this->container['namespace'] = array_key_exists('namespace', $data) ? $data['namespace'] : null;
        $this->container['key'] = array_key_exists('key', $data) ? $data['key'] : null;
        $this->container['value'] = array_key_exists('value', $data) ? $data['value'] : null;
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : null;
        $this->container['resource_type'] = array_key_exists('resource_type', $data) ? $data['resource_type'] : null;
        $this->container['resource_id'] = array_key_exists('resource_id', $data) ? $data['resource_id'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (strlen($this->container['namespace']) > 64) {
            $invalid_properties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
        }
        if (strlen($this->container['namespace']) < 1) {
            $invalid_properties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['key']) > 64) {
            $invalid_properties[] = "invalid value for 'key', the character length must be smaller than or equal to 64.";
        }
        if (strlen($this->container['key']) < 1) {
            $invalid_properties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['value']) > 65535) {
            $invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 65535.";
        }
        if (strlen($this->container['value']) < 1) {
            $invalid_properties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
        }
        if (strlen($this->container['description']) > 255) {
            $invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['description']) < 0) {
            $invalid_properties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['resource_id'] > 10000000000) {
            $invalid_properties[] = "invalid value for 'resource_id', must be smaller than or equal to 10000000000.";
        }
        if ($this->container['resource_id'] < 0) {
            $invalid_properties[] = "invalid value for 'resource_id', must be bigger than or equal to 0.";
        }
        if ($this->container['id'] > 10000000000) {
            $invalid_properties[] = "invalid value for 'id', must be smaller than or equal to 10000000000.";
        }
        if ($this->container['id'] < 0) {
            $invalid_properties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['namespace']) > 64) {
            return false;
        }
        if (strlen($this->container['namespace']) < 1) {
            return false;
        }
        if (strlen($this->container['key']) > 64) {
            return false;
        }
        if (strlen($this->container['key']) < 1) {
            return false;
        }
        if (strlen($this->container['value']) > 65535) {
            return false;
        }
        if (strlen($this->container['value']) < 1) {
            return false;
        }
        if (strlen($this->container['description']) > 255) {
            return false;
        }
        if (strlen($this->container['description']) < 0) {
            return false;
        }
        if ($this->container['resource_id'] > 10000000000) {
            return false;
        }
        if ($this->container['resource_id'] < 0) {
            return false;
        }
        if ($this->container['id'] > 10000000000) {
            return false;
        }
        if ($this->container['id'] < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets permission_set
     * @return string
     */
    public function getPermissionSet()
    {
        return $this->container['permission_set'];
    }

    /**
     * Sets permission_set
     * @param string $permission_set Determines whether the field is completely private to the app that owns the field (`app_only`), or visible to other API consumers (`read`), or completely open for reading and writing to other apps (`write`).
     * @return $this
     */
    public function setPermissionSet($permission_set)
    {
        $this->container['permission_set'] = $permission_set;

        return $this;
    }

    /**
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     * @param string $namespace Namespace for the metafield, for organizational purposes.
     * @return $this
     */
    public function setNamespace($namespace)
    {
        if (strlen($namespace) > 64) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling MetafieldPut., must be smaller than or equal to 64.');
        }
        if (strlen($namespace) < 1) {
            throw new \InvalidArgumentException('invalid length for $namespace when calling MetafieldPut., must be bigger than or equal to 1.');
        }
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key The name of the field, for example: `location_id`, `color`.
     * @return $this
     */
    public function setKey($key)
    {
        if (strlen($key) > 64) {
            throw new \InvalidArgumentException('invalid length for $key when calling MetafieldPut., must be smaller than or equal to 64.');
        }
        if (strlen($key) < 1) {
            throw new \InvalidArgumentException('invalid length for $key when calling MetafieldPut., must be bigger than or equal to 1.');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value The value of the field, for example: `1`, `blue`.
     * @return $this
     */
    public function setValue($value)
    {
        if (strlen($value) > 65535) {
            throw new \InvalidArgumentException('invalid length for $value when calling MetafieldPut., must be smaller than or equal to 65535.');
        }
        if (strlen($value) < 1) {
            throw new \InvalidArgumentException('invalid length for $value when calling MetafieldPut., must be bigger than or equal to 1.');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description for the metafields.
     * @return $this
     */
    public function setDescription($description)
    {
        if (strlen($description) > 255) {
            throw new \InvalidArgumentException('invalid length for $description when calling MetafieldPut., must be smaller than or equal to 255.');
        }
        if (strlen($description) < 0) {
            throw new \InvalidArgumentException('invalid length for $description when calling MetafieldPut., must be bigger than or equal to 0.');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets resource_type
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     * @param string $resource_type The type of resource with which the metafield is associated.
     * @return $this
     */
    public function setResourceType($resource_type)
    {
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets resource_id
     * @return int
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     * @param int $resource_id The unique identifier for the resource with which the metafield is associated.
     * @return $this
     */
    public function setResourceId($resource_id)
    {

        if ($resource_id > 10000000000) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling MetafieldPut., must be smaller than or equal to 10000000000.');
        }
        if ($resource_id < 0) {
            throw new \InvalidArgumentException('invalid value for $resource_id when calling MetafieldPut., must be bigger than or equal to 0.');
        }
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique identifier for the metafields.
     * @return $this
     */
    public function setId($id)
    {

        if ($id > 10000000000) {
            throw new \InvalidArgumentException('invalid value for $id when calling MetafieldPut., must be smaller than or equal to 10000000000.');
        }
        if ($id < 0) {
            throw new \InvalidArgumentException('invalid value for $id when calling MetafieldPut., must be bigger than or equal to 0.');
        }
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


