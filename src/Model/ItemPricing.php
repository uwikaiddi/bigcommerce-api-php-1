<?php
/**
 * ItemPricing
 *
 * @package  BigCommerce\Api
 */

/**
 * Product Pricing API
 *
 * OpenAPI spec version: master
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

class ItemPricing implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemPricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'variant_id' => 'int',
        'options' => '\BigCommerce\Api\Model\PricingRequestItemOption[]',
        'retail_price' => '\BigCommerce\Api\Model\TaxPrice',
        'sale_price' => '\BigCommerce\Api\Model\TaxPrice',
        'minimum_advertised_price' => '\BigCommerce\Api\Model\TaxPrice',
        'price' => '\BigCommerce\Api\Model\TaxPrice',
        'calculated_price' => '\BigCommerce\Api\Model\TaxPrice',
        'price_range' => '\BigCommerce\Api\Model\PriceRange',
        'retail_price_range' => '\BigCommerce\Api\Model\PriceRange',
        'bulk_pricing' => '\BigCommerce\Api\Model\BulkPricingTier[]'
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
        'product_id' => 'product_id',
        'variant_id' => 'variant_id',
        'options' => 'options',
        'retail_price' => 'retail_price',
        'sale_price' => 'sale_price',
        'minimum_advertised_price' => 'minimum_advertised_price',
        'price' => 'price',
        'calculated_price' => 'calculated_price',
        'price_range' => 'price_range',
        'retail_price_range' => 'retail_price_range',
        'bulk_pricing' => 'bulk_pricing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'variant_id' => 'setVariantId',
        'options' => 'setOptions',
        'retail_price' => 'setRetailPrice',
        'sale_price' => 'setSalePrice',
        'minimum_advertised_price' => 'setMinimumAdvertisedPrice',
        'price' => 'setPrice',
        'calculated_price' => 'setCalculatedPrice',
        'price_range' => 'setPriceRange',
        'retail_price_range' => 'setRetailPriceRange',
        'bulk_pricing' => 'setBulkPricing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'variant_id' => 'getVariantId',
        'options' => 'getOptions',
        'retail_price' => 'getRetailPrice',
        'sale_price' => 'getSalePrice',
        'minimum_advertised_price' => 'getMinimumAdvertisedPrice',
        'price' => 'getPrice',
        'calculated_price' => 'getCalculatedPrice',
        'price_range' => 'getPriceRange',
        'retail_price_range' => 'getRetailPriceRange',
        'bulk_pricing' => 'getBulkPricing'
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
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
        $this->container['variant_id'] = array_key_exists('variant_id', $data) ? $data['variant_id'] : null;
        $this->container['options'] = array_key_exists('options', $data) ? $data['options'] : null;
        $this->container['retail_price'] = array_key_exists('retail_price', $data) ? $data['retail_price'] : null;
        $this->container['sale_price'] = array_key_exists('sale_price', $data) ? $data['sale_price'] : null;
        $this->container['minimum_advertised_price'] = array_key_exists('minimum_advertised_price', $data) ? $data['minimum_advertised_price'] : null;
        $this->container['price'] = array_key_exists('price', $data) ? $data['price'] : null;
        $this->container['calculated_price'] = array_key_exists('calculated_price', $data) ? $data['calculated_price'] : null;
        $this->container['price_range'] = array_key_exists('price_range', $data) ? $data['price_range'] : null;
        $this->container['retail_price_range'] = array_key_exists('retail_price_range', $data) ? $data['retail_price_range'] : null;
        $this->container['bulk_pricing'] = array_key_exists('bulk_pricing', $data) ? $data['bulk_pricing'] : null;
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
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id The product ID this price was generated for
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets variant_id
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     * @param int $variant_id The (optional) variant ID this price was generated for
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets options
     * @return \BigCommerce\Api\Model\PricingRequestItemOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \BigCommerce\Api\Model\PricingRequestItemOption[] $options The optional product option configuration this price was generated for
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets retail_price
     * @return \BigCommerce\Api\Model\TaxPrice
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     * @param \BigCommerce\Api\Model\TaxPrice $retail_price The (optional) RRP/retail price configured for this product
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets sale_price
     * @return \BigCommerce\Api\Model\TaxPrice
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     * @param \BigCommerce\Api\Model\TaxPrice $sale_price
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets minimum_advertised_price
     * @return \BigCommerce\Api\Model\TaxPrice
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->container['minimum_advertised_price'];
    }

    /**
     * Sets minimum_advertised_price
     * @param \BigCommerce\Api\Model\TaxPrice $minimum_advertised_price
     * @return $this
     */
    public function setMinimumAdvertisedPrice($minimum_advertised_price)
    {
        $this->container['minimum_advertised_price'] = $minimum_advertised_price;

        return $this;
    }

    /**
     * Gets price
     * @return \BigCommerce\Api\Model\TaxPrice
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param \BigCommerce\Api\Model\TaxPrice $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets calculated_price
     * @return \BigCommerce\Api\Model\TaxPrice
     */
    public function getCalculatedPrice()
    {
        return $this->container['calculated_price'];
    }

    /**
     * Sets calculated_price
     * @param \BigCommerce\Api\Model\TaxPrice $calculated_price
     * @return $this
     */
    public function setCalculatedPrice($calculated_price)
    {
        $this->container['calculated_price'] = $calculated_price;

        return $this;
    }

    /**
     * Gets price_range
     * @return \BigCommerce\Api\Model\PriceRange
     */
    public function getPriceRange()
    {
        return $this->container['price_range'];
    }

    /**
     * Sets price_range
     * @param \BigCommerce\Api\Model\PriceRange $price_range
     * @return $this
     */
    public function setPriceRange($price_range)
    {
        $this->container['price_range'] = $price_range;

        return $this;
    }

    /**
     * Gets retail_price_range
     * @return \BigCommerce\Api\Model\PriceRange
     */
    public function getRetailPriceRange()
    {
        return $this->container['retail_price_range'];
    }

    /**
     * Sets retail_price_range
     * @param \BigCommerce\Api\Model\PriceRange $retail_price_range
     * @return $this
     */
    public function setRetailPriceRange($retail_price_range)
    {
        $this->container['retail_price_range'] = $retail_price_range;

        return $this;
    }

    /**
     * Gets bulk_pricing
     * @return \BigCommerce\Api\Model\BulkPricingTier[]
     */
    public function getBulkPricing()
    {
        return $this->container['bulk_pricing'];
    }

    /**
     * Sets bulk_pricing
     * @param \BigCommerce\Api\Model\BulkPricingTier[] $bulk_pricing
     * @return $this
     */
    public function setBulkPricing($bulk_pricing)
    {
        $this->container['bulk_pricing'] = $bulk_pricing;

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


