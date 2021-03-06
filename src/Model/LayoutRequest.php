<?php
/**
 * LayoutRequest
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce Widgets API
 *
 * OpenAPI spec version: 
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

class LayoutRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LayoutRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entity_id' => 'string',
        'region' => 'string',
        'template_file' => 'string',
        'markup' => 'string'
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
        'entity_id' => 'entity_id',
        'region' => 'region',
        'template_file' => 'template_file',
        'markup' => 'markup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'entity_id' => 'setEntityId',
        'region' => 'setRegion',
        'template_file' => 'setTemplateFile',
        'markup' => 'setMarkup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'entity_id' => 'getEntityId',
        'region' => 'getRegion',
        'template_file' => 'getTemplateFile',
        'markup' => 'getMarkup'
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
        $this->container['entity_id'] = array_key_exists('entity_id', $data) ? $data['entity_id'] : null;
        $this->container['region'] = array_key_exists('region', $data) ? $data['region'] : null;
        $this->container['template_file'] = array_key_exists('template_file', $data) ? $data['template_file'] : null;
        $this->container['markup'] = array_key_exists('markup', $data) ? $data['markup'] : null;
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
        if ($this->container['region'] === null) {
            $invalid_properties[] = "'region' can't be null";
        }
        if ($this->container['template_file'] === null) {
            $invalid_properties[] = "'template_file' can't be null";
        }
        if ($this->container['markup'] === null) {
            $invalid_properties[] = "'markup' can't be null";
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
        if ($this->container['region'] === null) {
            return false;
        }
        if ($this->container['template_file'] === null) {
            return false;
        }
        if ($this->container['markup'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets entity_id
     * @return string
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     * @param string $entity_id The specific instance of a page that you would like to target.
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region The name of the region in which to insert content widgets.
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets template_file
     * @return string
     */
    public function getTemplateFile()
    {
        return $this->container['template_file'];
    }

    /**
     * Sets template_file
     * @param string $template_file The template file that you would like to target.
     * @return $this
     */
    public function setTemplateFile($template_file)
    {
        $this->container['template_file'] = $template_file;

        return $this;
    }

    /**
     * Gets markup
     * @return string
     */
    public function getMarkup()
    {
        return $this->container['markup'];
    }

    /**
     * Sets markup
     * @param string $markup The HTML layout which defines complex poisitoning for placements.
     * @return $this
     */
    public function setMarkup($markup)
    {
        $this->container['markup'] = $markup;

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


