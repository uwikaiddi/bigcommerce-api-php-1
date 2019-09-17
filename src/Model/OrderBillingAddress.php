<?php
/**
 * OrderBillingAddress
 *
 * @package  BigCommerce\Api
 */

/**
 * Orders APIs
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

class OrderBillingAddress implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderBillingAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'street_1' => 'string',
        'street_2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'country_iso2' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'form_fields' => '\BigCommerce\Api\Model\OrderFormField[]'
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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'company' => 'company',
        'street_1' => 'street_1',
        'street_2' => 'street_2',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'country_iso2' => 'country_iso2',
        'phone' => 'phone',
        'email' => 'email',
        'form_fields' => 'form_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'street_1' => 'setStreet1',
        'street_2' => 'setStreet2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'country_iso2' => 'setCountryIso2',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'form_fields' => 'setFormFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'street_1' => 'getStreet1',
        'street_2' => 'getStreet2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'country_iso2' => 'getCountryIso2',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'form_fields' => 'getFormFields'
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
        $this->container['first_name'] = array_key_exists('first_name', $data) ? $data['first_name'] : null;
        $this->container['last_name'] = array_key_exists('last_name', $data) ? $data['last_name'] : null;
        $this->container['company'] = array_key_exists('company', $data) ? $data['company'] : null;
        $this->container['street_1'] = array_key_exists('street_1', $data) ? $data['street_1'] : null;
        $this->container['street_2'] = array_key_exists('street_2', $data) ? $data['street_2'] : null;
        $this->container['city'] = array_key_exists('city', $data) ? $data['city'] : null;
        $this->container['state'] = array_key_exists('state', $data) ? $data['state'] : null;
        $this->container['zip'] = array_key_exists('zip', $data) ? $data['zip'] : null;
        $this->container['country'] = array_key_exists('country', $data) ? $data['country'] : null;
        $this->container['country_iso2'] = array_key_exists('country_iso2', $data) ? $data['country_iso2'] : null;
        $this->container['phone'] = array_key_exists('phone', $data) ? $data['phone'] : null;
        $this->container['email'] = array_key_exists('email', $data) ? $data['email'] : null;
        $this->container['form_fields'] = array_key_exists('form_fields', $data) ? $data['form_fields'] : null;
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
        return true;
    }


    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name 
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name 
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company 
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets street_1
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street_1'];
    }

    /**
     * Sets street_1
     * @param string $street_1 
     * @return $this
     */
    public function setStreet1($street_1)
    {
        $this->container['street_1'] = $street_1;

        return $this;
    }

    /**
     * Gets street_2
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street_2'];
    }

    /**
     * Sets street_2
     * @param string $street_2 
     * @return $this
     */
    public function setStreet2($street_2)
    {
        $this->container['street_2'] = $street_2;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city 
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state 
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     * @param string $zip 
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country 
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_iso2
     * @return string
     */
    public function getCountryIso2()
    {
        return $this->container['country_iso2'];
    }

    /**
     * Sets country_iso2
     * @param string $country_iso2 
     * @return $this
     */
    public function setCountryIso2($country_iso2)
    {
        $this->container['country_iso2'] = $country_iso2;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone 
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email 
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets form_fields
     * @return \BigCommerce\Api\Model\OrderFormField[]
     */
    public function getFormFields()
    {
        return $this->container['form_fields'];
    }

    /**
     * Sets form_fields
     * @param \BigCommerce\Api\Model\OrderFormField[] $form_fields
     * @return $this
     */
    public function setFormFields($form_fields)
    {
        $this->container['form_fields'] = $form_fields;

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

