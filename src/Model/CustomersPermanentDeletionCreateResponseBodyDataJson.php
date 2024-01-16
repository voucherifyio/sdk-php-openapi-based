<?php
/**
 * CustomersPermanentDeletionCreateResponseBodyDataJson
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
 * CustomersPermanentDeletionCreateResponseBodyDataJson Class Doc Comment
 *
 * @category Class
 * @description Statistics summarizing the number of related information that was deleted.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomersPermanentDeletionCreateResponseBodyDataJson implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomersPermanentDeletionCreateResponseBody_data_json';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'events' => 'int',
        'customer_events' => 'int',
        'daily_events' => 'int',
        'segments' => 'int',
        'orders' => 'int',
        'order_events' => 'int',
        'customer' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'events' => null,
        'customer_events' => null,
        'daily_events' => null,
        'segments' => null,
        'orders' => null,
        'order_events' => null,
        'customer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'events' => false,
		'customer_events' => false,
		'daily_events' => false,
		'segments' => false,
		'orders' => false,
		'order_events' => false,
		'customer' => false
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
        'events' => 'events',
        'customer_events' => 'customer_events',
        'daily_events' => 'daily_events',
        'segments' => 'segments',
        'orders' => 'orders',
        'order_events' => 'order_events',
        'customer' => 'customer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'events' => 'setEvents',
        'customer_events' => 'setCustomerEvents',
        'daily_events' => 'setDailyEvents',
        'segments' => 'setSegments',
        'orders' => 'setOrders',
        'order_events' => 'setOrderEvents',
        'customer' => 'setCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'events' => 'getEvents',
        'customer_events' => 'getCustomerEvents',
        'daily_events' => 'getDailyEvents',
        'segments' => 'getSegments',
        'orders' => 'getOrders',
        'order_events' => 'getOrderEvents',
        'customer' => 'getCustomer'
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
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('customer_events', $data ?? [], null);
        $this->setIfExists('daily_events', $data ?? [], null);
        $this->setIfExists('segments', $data ?? [], null);
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('order_events', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], 1);
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

        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
        }
        if ($this->container['customer_events'] === null) {
            $invalidProperties[] = "'customer_events' can't be null";
        }
        if ($this->container['daily_events'] === null) {
            $invalidProperties[] = "'daily_events' can't be null";
        }
        if ($this->container['segments'] === null) {
            $invalidProperties[] = "'segments' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        if ($this->container['order_events'] === null) {
            $invalidProperties[] = "'order_events' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
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
     * Gets events
     *
     * @return int
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param int $events Number of events deleted.
     *
     * @return self
     */
    public function setEvents($events)
    {
        if (is_null($events)) {
            throw new \InvalidArgumentException('non-nullable events cannot be null');
        }
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets customer_events
     *
     * @return int
     */
    public function getCustomerEvents()
    {
        return $this->container['customer_events'];
    }

    /**
     * Sets customer_events
     *
     * @param int $customer_events Number of customer events deleted.
     *
     * @return self
     */
    public function setCustomerEvents($customer_events)
    {
        if (is_null($customer_events)) {
            throw new \InvalidArgumentException('non-nullable customer_events cannot be null');
        }
        $this->container['customer_events'] = $customer_events;

        return $this;
    }

    /**
     * Gets daily_events
     *
     * @return int
     */
    public function getDailyEvents()
    {
        return $this->container['daily_events'];
    }

    /**
     * Sets daily_events
     *
     * @param int $daily_events Number of daily events deleted.
     *
     * @return self
     */
    public function setDailyEvents($daily_events)
    {
        if (is_null($daily_events)) {
            throw new \InvalidArgumentException('non-nullable daily_events cannot be null');
        }
        $this->container['daily_events'] = $daily_events;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return int
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param int $segments Number of segments deleted.
     *
     * @return self
     */
    public function setSegments($segments)
    {
        if (is_null($segments)) {
            throw new \InvalidArgumentException('non-nullable segments cannot be null');
        }
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return int
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param int $orders Number of orders deleted.
     *
     * @return self
     */
    public function setOrders($orders)
    {
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets order_events
     *
     * @return int
     */
    public function getOrderEvents()
    {
        return $this->container['order_events'];
    }

    /**
     * Sets order_events
     *
     * @param int $order_events Number of order events deleted.
     *
     * @return self
     */
    public function setOrderEvents($order_events)
    {
        if (is_null($order_events)) {
            throw new \InvalidArgumentException('non-nullable order_events cannot be null');
        }
        $this->container['order_events'] = $order_events;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return int
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param int $customer Number of customers deleted.
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


