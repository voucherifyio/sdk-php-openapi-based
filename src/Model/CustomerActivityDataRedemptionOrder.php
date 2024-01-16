<?php
/**
 * CustomerActivityDataRedemptionOrder
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
 * CustomerActivityDataRedemptionOrder Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerActivityDataRedemptionOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerActivityDataRedemptionOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'source_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'status' => 'string',
        'amount' => 'int',
        'initial_amount' => 'int',
        'discount_amount' => 'int',
        'items_discount_amount' => 'int',
        'total_discount_amount' => 'int',
        'total_amount' => 'int',
        'applied_discount_amount' => 'int',
        'items_applied_discount_amount' => 'int',
        'total_applied_discount_amount' => 'int',
        'items' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderItemsItem[]',
        'metadata' => 'object',
        'customer_id' => 'string',
        'referrer_id' => 'string',
        'object' => 'string',
        'redemptions' => 'object',
        'customer' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderCustomer',
        'referrer' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderReferrer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'source_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'status' => null,
        'amount' => null,
        'initial_amount' => null,
        'discount_amount' => null,
        'items_discount_amount' => null,
        'total_discount_amount' => null,
        'total_amount' => null,
        'applied_discount_amount' => null,
        'items_applied_discount_amount' => null,
        'total_applied_discount_amount' => null,
        'items' => null,
        'metadata' => null,
        'customer_id' => null,
        'referrer_id' => null,
        'object' => null,
        'redemptions' => null,
        'customer' => null,
        'referrer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'source_id' => false,
		'created_at' => false,
		'updated_at' => true,
		'status' => false,
		'amount' => false,
		'initial_amount' => false,
		'discount_amount' => false,
		'items_discount_amount' => false,
		'total_discount_amount' => false,
		'total_amount' => false,
		'applied_discount_amount' => false,
		'items_applied_discount_amount' => false,
		'total_applied_discount_amount' => false,
		'items' => false,
		'metadata' => false,
		'customer_id' => true,
		'referrer_id' => true,
		'object' => false,
		'redemptions' => false,
		'customer' => false,
		'referrer' => false
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
        'id' => 'id',
        'source_id' => 'source_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'status' => 'status',
        'amount' => 'amount',
        'initial_amount' => 'initial_amount',
        'discount_amount' => 'discount_amount',
        'items_discount_amount' => 'items_discount_amount',
        'total_discount_amount' => 'total_discount_amount',
        'total_amount' => 'total_amount',
        'applied_discount_amount' => 'applied_discount_amount',
        'items_applied_discount_amount' => 'items_applied_discount_amount',
        'total_applied_discount_amount' => 'total_applied_discount_amount',
        'items' => 'items',
        'metadata' => 'metadata',
        'customer_id' => 'customer_id',
        'referrer_id' => 'referrer_id',
        'object' => 'object',
        'redemptions' => 'redemptions',
        'customer' => 'customer',
        'referrer' => 'referrer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source_id' => 'setSourceId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'initial_amount' => 'setInitialAmount',
        'discount_amount' => 'setDiscountAmount',
        'items_discount_amount' => 'setItemsDiscountAmount',
        'total_discount_amount' => 'setTotalDiscountAmount',
        'total_amount' => 'setTotalAmount',
        'applied_discount_amount' => 'setAppliedDiscountAmount',
        'items_applied_discount_amount' => 'setItemsAppliedDiscountAmount',
        'total_applied_discount_amount' => 'setTotalAppliedDiscountAmount',
        'items' => 'setItems',
        'metadata' => 'setMetadata',
        'customer_id' => 'setCustomerId',
        'referrer_id' => 'setReferrerId',
        'object' => 'setObject',
        'redemptions' => 'setRedemptions',
        'customer' => 'setCustomer',
        'referrer' => 'setReferrer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source_id' => 'getSourceId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'initial_amount' => 'getInitialAmount',
        'discount_amount' => 'getDiscountAmount',
        'items_discount_amount' => 'getItemsDiscountAmount',
        'total_discount_amount' => 'getTotalDiscountAmount',
        'total_amount' => 'getTotalAmount',
        'applied_discount_amount' => 'getAppliedDiscountAmount',
        'items_applied_discount_amount' => 'getItemsAppliedDiscountAmount',
        'total_applied_discount_amount' => 'getTotalAppliedDiscountAmount',
        'items' => 'getItems',
        'metadata' => 'getMetadata',
        'customer_id' => 'getCustomerId',
        'referrer_id' => 'getReferrerId',
        'object' => 'getObject',
        'redemptions' => 'getRedemptions',
        'customer' => 'getCustomer',
        'referrer' => 'getReferrer'
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

    public const STATUS_CREATED = 'CREATED';
    public const STATUS_PAID = 'PAID';
    public const STATUS_CANCELED = 'CANCELED';
    public const STATUS_FULFILLED = 'FULFILLED';
    public const OBJECT_ORDER = 'order';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_PAID,
            self::STATUS_CANCELED,
            self::STATUS_FULFILLED,
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
            self::OBJECT_ORDER,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('source_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('initial_amount', $data ?? [], null);
        $this->setIfExists('discount_amount', $data ?? [], null);
        $this->setIfExists('items_discount_amount', $data ?? [], null);
        $this->setIfExists('total_discount_amount', $data ?? [], null);
        $this->setIfExists('total_amount', $data ?? [], null);
        $this->setIfExists('applied_discount_amount', $data ?? [], null);
        $this->setIfExists('items_applied_discount_amount', $data ?? [], null);
        $this->setIfExists('total_applied_discount_amount', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('referrer_id', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'order');
        $this->setIfExists('redemptions', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('referrer', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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
     * @param string|null $source_id source_id
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp representing the date and time when the order was created in ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp representing the date and time when the order was last updated in ISO 8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            array_push($this->openAPINullablesSetToNull, 'updated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updated_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The order status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param int|null $amount A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items' amounts.
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
            throw new \InvalidArgumentException('non-nullable initial_amount cannot be null');
        }
        $this->container['initial_amount'] = $initial_amount;

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
     * @param int|null $discount_amount Sum of all order-level discounts applied to the order.
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
     * Gets items_discount_amount
     *
     * @return int|null
     */
    public function getItemsDiscountAmount()
    {
        return $this->container['items_discount_amount'];
    }

    /**
     * Sets items_discount_amount
     *
     * @param int|null $items_discount_amount Sum of all product-specific discounts applied to the order.
     *
     * @return self
     */
    public function setItemsDiscountAmount($items_discount_amount)
    {
        if (is_null($items_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable items_discount_amount cannot be null');
        }
        $this->container['items_discount_amount'] = $items_discount_amount;

        return $this;
    }

    /**
     * Gets total_discount_amount
     *
     * @return int|null
     */
    public function getTotalDiscountAmount()
    {
        return $this->container['total_discount_amount'];
    }

    /**
     * Sets total_discount_amount
     *
     * @param int|null $total_discount_amount Sum of all order-level AND all product-specific discounts applied to the order.
     *
     * @return self
     */
    public function setTotalDiscountAmount($total_discount_amount)
    {
        if (is_null($total_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable total_discount_amount cannot be null');
        }
        $this->container['total_discount_amount'] = $total_discount_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int|null $total_amount Order amount after undoing all the discounts through the rollback redemption.
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        if (is_null($total_amount)) {
            throw new \InvalidArgumentException('non-nullable total_amount cannot be null');
        }
        $this->container['total_amount'] = $total_amount;

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
     * Gets items_applied_discount_amount
     *
     * @return int|null
     */
    public function getItemsAppliedDiscountAmount()
    {
        return $this->container['items_applied_discount_amount'];
    }

    /**
     * Sets items_applied_discount_amount
     *
     * @param int|null $items_applied_discount_amount Sum of all product-specific discounts applied in a particular request.   `sum(items, i => i.applied_discount_amount)`
     *
     * @return self
     */
    public function setItemsAppliedDiscountAmount($items_applied_discount_amount)
    {
        if (is_null($items_applied_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable items_applied_discount_amount cannot be null');
        }
        $this->container['items_applied_discount_amount'] = $items_applied_discount_amount;

        return $this;
    }

    /**
     * Gets total_applied_discount_amount
     *
     * @return int|null
     */
    public function getTotalAppliedDiscountAmount()
    {
        return $this->container['total_applied_discount_amount'];
    }

    /**
     * Sets total_applied_discount_amount
     *
     * @param int|null $total_applied_discount_amount Sum of all order-level AND all product-specific discounts applied in a particular request.   `total_applied_discount_amount` = `applied_discount_amount` + `items_applied_discount_amount`
     *
     * @return self
     */
    public function setTotalAppliedDiscountAmount($total_applied_discount_amount)
    {
        if (is_null($total_applied_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable total_applied_discount_amount cannot be null');
        }
        $this->container['total_applied_discount_amount'] = $total_applied_discount_amount;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderItemsItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderItemsItem[]|null $items Array of items applied to the order.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

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
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id Unique customer ID of the customer making the purchase.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets referrer_id
     *
     * @return string|null
     */
    public function getReferrerId()
    {
        return $this->container['referrer_id'];
    }

    /**
     * Sets referrer_id
     *
     * @param string|null $referrer_id Unique referrer ID.
     *
     * @return self
     */
    public function setReferrerId($referrer_id)
    {
        if (is_null($referrer_id)) {
            array_push($this->openAPINullablesSetToNull, 'referrer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referrer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['referrer_id'] = $referrer_id;

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
     * @param string|null $object The type of object represented by JSON.
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
     * Gets redemptions
     *
     * @return object|null
     */
    public function getRedemptions()
    {
        return $this->container['redemptions'];
    }

    /**
     * Sets redemptions
     *
     * @param object|null $redemptions redemptions
     *
     * @return self
     */
    public function setRedemptions($redemptions)
    {
        if (is_null($redemptions)) {
            throw new \InvalidArgumentException('non-nullable redemptions cannot be null');
        }
        $this->container['redemptions'] = $redemptions;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderReferrer|null
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionOrderReferrer|null $referrer referrer
     *
     * @return self
     */
    public function setReferrer($referrer)
    {
        if (is_null($referrer)) {
            throw new \InvalidArgumentException('non-nullable referrer cannot be null');
        }
        $this->container['referrer'] = $referrer;

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


