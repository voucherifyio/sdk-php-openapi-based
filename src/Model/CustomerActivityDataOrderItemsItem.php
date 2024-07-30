<?php
/**
 * CustomerActivityDataOrderItemsItem
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
 * CustomerActivityDataOrderItemsItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerActivityDataOrderItemsItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerActivityDataOrderItemsItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku_id' => 'string',
        'product_id' => 'string',
        'related_object' => 'string',
        'source_id' => 'string',
        'quantity' => 'int',
        'discount_quantity' => 'int',
        'initial_quantity' => 'int',
        'amount' => 'int',
        'discount_amount' => 'int',
        'applied_discount_amount' => 'int',
        'applied_discount_quantity' => 'int',
        'applied_quantity' => 'int',
        'applied_quantity_amount' => 'int',
        'initial_amount' => 'int',
        'price' => 'int',
        'subtotal_amount' => 'int',
        'product' => '\OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemProduct',
        'sku' => '\OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemSku',
        'object' => 'string',
        'metadata' => 'object',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku_id' => null,
        'product_id' => null,
        'related_object' => null,
        'source_id' => null,
        'quantity' => null,
        'discount_quantity' => null,
        'initial_quantity' => null,
        'amount' => null,
        'discount_amount' => null,
        'applied_discount_amount' => null,
        'applied_discount_quantity' => null,
        'applied_quantity' => null,
        'applied_quantity_amount' => null,
        'initial_amount' => null,
        'price' => null,
        'subtotal_amount' => null,
        'product' => null,
        'sku' => null,
        'object' => null,
        'metadata' => null,
        'id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku_id' => true,
		'product_id' => true,
		'related_object' => false,
		'source_id' => true,
		'quantity' => false,
		'discount_quantity' => false,
		'initial_quantity' => true,
		'amount' => false,
		'discount_amount' => true,
		'applied_discount_amount' => false,
		'applied_discount_quantity' => true,
		'applied_quantity' => true,
		'applied_quantity_amount' => true,
		'initial_amount' => true,
		'price' => true,
		'subtotal_amount' => false,
		'product' => false,
		'sku' => false,
		'object' => false,
		'metadata' => false,
		'id' => true
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
        'sku_id' => 'sku_id',
        'product_id' => 'product_id',
        'related_object' => 'related_object',
        'source_id' => 'source_id',
        'quantity' => 'quantity',
        'discount_quantity' => 'discount_quantity',
        'initial_quantity' => 'initial_quantity',
        'amount' => 'amount',
        'discount_amount' => 'discount_amount',
        'applied_discount_amount' => 'applied_discount_amount',
        'applied_discount_quantity' => 'applied_discount_quantity',
        'applied_quantity' => 'applied_quantity',
        'applied_quantity_amount' => 'applied_quantity_amount',
        'initial_amount' => 'initial_amount',
        'price' => 'price',
        'subtotal_amount' => 'subtotal_amount',
        'product' => 'product',
        'sku' => 'sku',
        'object' => 'object',
        'metadata' => 'metadata',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku_id' => 'setSkuId',
        'product_id' => 'setProductId',
        'related_object' => 'setRelatedObject',
        'source_id' => 'setSourceId',
        'quantity' => 'setQuantity',
        'discount_quantity' => 'setDiscountQuantity',
        'initial_quantity' => 'setInitialQuantity',
        'amount' => 'setAmount',
        'discount_amount' => 'setDiscountAmount',
        'applied_discount_amount' => 'setAppliedDiscountAmount',
        'applied_discount_quantity' => 'setAppliedDiscountQuantity',
        'applied_quantity' => 'setAppliedQuantity',
        'applied_quantity_amount' => 'setAppliedQuantityAmount',
        'initial_amount' => 'setInitialAmount',
        'price' => 'setPrice',
        'subtotal_amount' => 'setSubtotalAmount',
        'product' => 'setProduct',
        'sku' => 'setSku',
        'object' => 'setObject',
        'metadata' => 'setMetadata',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku_id' => 'getSkuId',
        'product_id' => 'getProductId',
        'related_object' => 'getRelatedObject',
        'source_id' => 'getSourceId',
        'quantity' => 'getQuantity',
        'discount_quantity' => 'getDiscountQuantity',
        'initial_quantity' => 'getInitialQuantity',
        'amount' => 'getAmount',
        'discount_amount' => 'getDiscountAmount',
        'applied_discount_amount' => 'getAppliedDiscountAmount',
        'applied_discount_quantity' => 'getAppliedDiscountQuantity',
        'applied_quantity' => 'getAppliedQuantity',
        'applied_quantity_amount' => 'getAppliedQuantityAmount',
        'initial_amount' => 'getInitialAmount',
        'price' => 'getPrice',
        'subtotal_amount' => 'getSubtotalAmount',
        'product' => 'getProduct',
        'sku' => 'getSku',
        'object' => 'getObject',
        'metadata' => 'getMetadata',
        'id' => 'getId'
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

    public const RELATED_OBJECT_PRODUCT = 'product';
    public const RELATED_OBJECT_SKU = 'sku';
    public const OBJECT_ORDER_ITEM = 'order_item';

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
        $this->setIfExists('sku_id', $data ?? [], null);
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('related_object', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('discount_quantity', $data ?? [], null);
        $this->setIfExists('initial_quantity', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('discount_amount', $data ?? [], null);
        $this->setIfExists('applied_discount_amount', $data ?? [], null);
        $this->setIfExists('applied_discount_quantity', $data ?? [], null);
        $this->setIfExists('applied_quantity', $data ?? [], null);
        $this->setIfExists('applied_quantity_amount', $data ?? [], null);
        $this->setIfExists('initial_amount', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('subtotal_amount', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'order_item');
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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

        $allowedValues = $this->getRelatedObjectAllowableValues();
        if (!is_null($this->container['related_object']) && !in_array($this->container['related_object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'related_object', must be one of '%s'",
                $this->container['related_object'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
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
     * @param string|null $sku_id Unique identifier of the SKU. It is assigned by Voucherify.
     *
     * @return self
     */
    public function setSkuId($sku_id)
    {
        if (is_null($sku_id)) {
            array_push($this->openAPINullablesSetToNull, 'sku_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku_id'] = $sku_id;

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
     * @param string|null $product_id Unique identifier of the product. It is assigned by Voucherify.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            array_push($this->openAPINullablesSetToNull, 'product_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product_id'] = $product_id;

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
     * @param string|null $related_object related_object
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
     * @param string|null $source_id The merchant's product/SKU ID (if it is different from the Voucherify product/SKU ID). It is useful in the integration between multiple systems. It can be an ID from an eCommerce site, a database, or a third-party service.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            array_push($this->openAPINullablesSetToNull, 'source_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_id'] = $source_id;

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
     * @param int|null $quantity The quantity of the particular item in the cart. and Quantity of the particular item in the cart.
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
     * @param int|null $discount_quantity Number of dicounted items. and Number of discounted items.
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
     * Gets initial_quantity
     *
     * @return int|null
     */
    public function getInitialQuantity()
    {
        return $this->container['initial_quantity'];
    }

    /**
     * Sets initial_quantity
     *
     * @param int|null $initial_quantity A positive integer in the smallest unit quantity representing the total amount of the order; this is the sum of the order items' quantity.
     *
     * @return self
     */
    public function setInitialQuantity($initial_quantity)
    {
        if (is_null($initial_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'initial_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initial_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initial_quantity'] = $initial_quantity;

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
     * @param int|null $amount The total amount of the order item (price * quantity). and Total amount of the order item (price * quantity).
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
            array_push($this->openAPINullablesSetToNull, 'discount_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param int|null $applied_discount_amount This field shows the order-level discount applied. and Order-level discount amount applied in the transaction.
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
     * Gets applied_discount_quantity
     *
     * @return int|null
     */
    public function getAppliedDiscountQuantity()
    {
        return $this->container['applied_discount_quantity'];
    }

    /**
     * Sets applied_discount_quantity
     *
     * @param int|null $applied_discount_quantity Number of the discounted items applied in the transaction.
     *
     * @return self
     */
    public function setAppliedDiscountQuantity($applied_discount_quantity)
    {
        if (is_null($applied_discount_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'applied_discount_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applied_discount_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applied_discount_quantity'] = $applied_discount_quantity;

        return $this;
    }

    /**
     * Gets applied_quantity
     *
     * @return int|null
     */
    public function getAppliedQuantity()
    {
        return $this->container['applied_quantity'];
    }

    /**
     * Sets applied_quantity
     *
     * @param int|null $applied_quantity Quantity of items changed by the application of a new quantity items. It can be positive when an item is added or negative if an item is replaced.
     *
     * @return self
     */
    public function setAppliedQuantity($applied_quantity)
    {
        if (is_null($applied_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'applied_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applied_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applied_quantity'] = $applied_quantity;

        return $this;
    }

    /**
     * Gets applied_quantity_amount
     *
     * @return int|null
     */
    public function getAppliedQuantityAmount()
    {
        return $this->container['applied_quantity_amount'];
    }

    /**
     * Sets applied_quantity_amount
     *
     * @param int|null $applied_quantity_amount Amount for the items changed by the application of a new quantity items. It can be positive when an item is added or negative if an item is replaced.
     *
     * @return self
     */
    public function setAppliedQuantityAmount($applied_quantity_amount)
    {
        if (is_null($applied_quantity_amount)) {
            array_push($this->openAPINullablesSetToNull, 'applied_quantity_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applied_quantity_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applied_quantity_amount'] = $applied_quantity_amount;

        return $this;
    }

    /**
     * Gets initial_amount
     *
     * @return int|null
     */
    public function getInitialAmount()
    {
        return $this->container['initial_amount'];
    }

    /**
     * Sets initial_amount
     *
     * @param int|null $initial_amount A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items' amounts.
     *
     * @return self
     */
    public function setInitialAmount($initial_amount)
    {
        if (is_null($initial_amount)) {
            array_push($this->openAPINullablesSetToNull, 'initial_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initial_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initial_amount'] = $initial_amount;

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
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets subtotal_amount
     *
     * @return int|null
     */
    public function getSubtotalAmount()
    {
        return $this->container['subtotal_amount'];
    }

    /**
     * Sets subtotal_amount
     *
     * @param int|null $subtotal_amount Final order item amount after the applied item-level discount.  If there are no item-level discounts applied, this item is equal to the `amount`.    `subtotal_amount`=`amount`-`applied_discount_amount` and Final order item amount after the applied item-level discount.  If there are no item-level discounts applied, this item is equal to the `amount`.    `subtotal_amount`=`amount`-`discount_amount`
     *
     * @return self
     */
    public function setSubtotalAmount($subtotal_amount)
    {
        if (is_null($subtotal_amount)) {
            throw new \InvalidArgumentException('non-nullable subtotal_amount cannot be null');
        }
        $this->container['subtotal_amount'] = $subtotal_amount;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemProduct|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemProduct|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemSku|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemSku|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

        return $this;
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
     * @param string|null $object object
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
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier of the order line item.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

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


