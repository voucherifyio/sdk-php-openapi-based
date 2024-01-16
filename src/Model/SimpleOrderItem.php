<?php
/**
 * SimpleOrderItem
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Voucherify API
 *
 * Voucherify promotion engine REST API. Please see https://docs.voucherify.io/docs for more details.
 *
 * The version of the OpenAPI document: v2018-08-01
 * Contact: support@voucherify.io
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SimpleOrderItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SimpleOrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SimpleOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object' => 'string',
        'source_id' => 'string',
        'related_object' => 'string',
        'product_id' => 'string',
        'sku_id' => 'string',
        'quantity' => 'int',
        'discount_quantity' => 'int',
        'amount' => 'int',
        'discount_amount' => 'int',
        'applied_discount_amount' => 'int',
        'price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'object' => null,
        'source_id' => null,
        'related_object' => null,
        'product_id' => null,
        'sku_id' => null,
        'quantity' => null,
        'discount_quantity' => null,
        'amount' => null,
        'discount_amount' => null,
        'applied_discount_amount' => null,
        'price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'object' => false,
		'source_id' => false,
		'related_object' => false,
		'product_id' => false,
		'sku_id' => false,
		'quantity' => false,
		'discount_quantity' => false,
		'amount' => false,
		'discount_amount' => false,
		'applied_discount_amount' => false,
		'price' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'object' => 'object',
        'source_id' => 'source_id',
        'related_object' => 'related_object',
        'product_id' => 'product_id',
        'sku_id' => 'sku_id',
        'quantity' => 'quantity',
        'discount_quantity' => 'discount_quantity',
        'amount' => 'amount',
        'discount_amount' => 'discount_amount',
        'applied_discount_amount' => 'applied_discount_amount',
        'price' => 'price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object' => 'setObject',
        'source_id' => 'setSourceId',
        'related_object' => 'setRelatedObject',
        'product_id' => 'setProductId',
        'sku_id' => 'setSkuId',
        'quantity' => 'setQuantity',
        'discount_quantity' => 'setDiscountQuantity',
        'amount' => 'setAmount',
        'discount_amount' => 'setDiscountAmount',
        'applied_discount_amount' => 'setAppliedDiscountAmount',
        'price' => 'setPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object' => 'getObject',
        'source_id' => 'getSourceId',
        'related_object' => 'getRelatedObject',
        'product_id' => 'getProductId',
        'sku_id' => 'getSkuId',
        'quantity' => 'getQuantity',
        'discount_quantity' => 'getDiscountQuantity',
        'amount' => 'getAmount',
        'discount_amount' => 'getDiscountAmount',
        'applied_discount_amount' => 'getAppliedDiscountAmount',
        'price' => 'getPrice'
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
        return self::$openAPIModelName;
    }

    public const OBJECT_ORDER_ITEM = 'order_item';
    public const RELATED_OBJECT_PRODUCT = 'product';
    public const RELATED_OBJECT_SKU = 'sku';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_ORDER_ITEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRelatedObjectAllowableValues()
    {
        return [
            self::RELATED_OBJECT_PRODUCT,
            self::RELATED_OBJECT_SKU,
        ];
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
        $this->setIfExists('object', $data ?? [], 'order_item');
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('related_object', $data ?? [], null);
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('discount_quantity', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('discount_amount', $data ?? [], null);
        $this->setIfExists('applied_discount_amount', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRelatedObjectAllowableValues();
        if (!is_null($this->container['related_object']) && !in_array($this->container['related_object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'related_object', must be one of '%s'",
                $this->container['related_object'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets object
     *
     * @return string|null
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object The type of object represented by JSON. This object stores information about the `order_item`.
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!in_array($object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object', must be one of '%s'",
                    $object,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id The merchant’s product/SKU ID (if it is different from the Voucherify product/SKU ID). It is useful in the integration between multiple systems. It can be an ID from an eCommerce site, a database, or a third-party service.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            throw new \InvalidArgumentException('non-nullable source_id cannot be null');
        }
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets related_object
     *
     * @return string|null
     */
    public function getRelatedObject()
    {
        return $this->container['related_object'];
    }

    /**
     * Sets related_object
     *
     * @param string|null $related_object Used along with the source_id property, can be set to either sku or product.
     *
     * @return self
     */
    public function setRelatedObject($related_object)
    {
        if (is_null($related_object)) {
            throw new \InvalidArgumentException('non-nullable related_object cannot be null');
        }
        $allowedValues = $this->getRelatedObjectAllowableValues();
        if (!in_array($related_object, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'related_object', must be one of '%s'",
                    $related_object,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['related_object'] = $related_object;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id A unique product ID assigned by Voucherify.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            throw new \InvalidArgumentException('non-nullable product_id cannot be null');
        }
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sku_id
     *
     * @return string|null
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param string|null $sku_id A unique SKU ID assigned by Voucherify.
     *
     * @return self
     */
    public function setSkuId($sku_id)
    {
        if (is_null($sku_id)) {
            throw new \InvalidArgumentException('non-nullable sku_id cannot be null');
        }
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of the particular item in the cart.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets discount_quantity
     *
     * @return int|null
     */
    public function getDiscountQuantity()
    {
        return $this->container['discount_quantity'];
    }

    /**
     * Sets discount_quantity
     *
     * @param int|null $discount_quantity Number of dicounted items.
     *
     * @return self
     */
    public function setDiscountQuantity($discount_quantity)
    {
        if (is_null($discount_quantity)) {
            throw new \InvalidArgumentException('non-nullable discount_quantity cannot be null');
        }
        $this->container['discount_quantity'] = $discount_quantity;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount The total amount of the order item (price * quantity).
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return int|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param int|null $discount_amount Sum of all order-item-level discounts applied to the order.
     *
     * @return self
     */
    public function setDiscountAmount($discount_amount)
    {
        if (is_null($discount_amount)) {
            throw new \InvalidArgumentException('non-nullable discount_amount cannot be null');
        }
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets applied_discount_amount
     *
     * @return int|null
     */
    public function getAppliedDiscountAmount()
    {
        return $this->container['applied_discount_amount'];
    }

    /**
     * Sets applied_discount_amount
     *
     * @param int|null $applied_discount_amount This field shows the order-level discount applied.
     *
     * @return self
     */
    public function setAppliedDiscountAmount($applied_discount_amount)
    {
        if (is_null($applied_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable applied_discount_amount cannot be null');
        }
        $this->container['applied_discount_amount'] = $applied_discount_amount;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price Unit price of an item. Value is multiplied by 100 to precisely represent 2 decimal places. For example `10000 cents` for `$100.00`.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


