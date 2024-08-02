<?php
/**
 * StackableValidateRedeemBase
 *
 * PHP version 8.1
 *
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
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * StackableValidateRedeemBase Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class StackableValidateRedeemBase implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StackableValidateRedeemBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'redeemables' => '\OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem[]',
        'order' => '\OpenAPI\Client\Model\Order',
        'customer' => '\OpenAPI\Client\Model\Customer',
        'session' => '\OpenAPI\Client\Model\Session',
        'tracking_id' => 'string',
        'metadata' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'redeemables' => null,
        'order' => null,
        'customer' => null,
        'session' => null,
        'tracking_id' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'redeemables' => true,
        'order' => true,
        'customer' => true,
        'session' => true,
        'tracking_id' => true,
        'metadata' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'redeemables' => 'redeemables',
        'order' => 'order',
        'customer' => 'customer',
        'session' => 'session',
        'tracking_id' => 'tracking_id',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'redeemables' => 'setRedeemables',
        'order' => 'setOrder',
        'customer' => 'setCustomer',
        'session' => 'setSession',
        'tracking_id' => 'setTrackingId',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'redeemables' => 'getRedeemables',
        'order' => 'getOrder',
        'customer' => 'getCustomer',
        'session' => 'getSession',
        'tracking_id' => 'getTrackingId',
        'metadata' => 'getMetadata'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('redeemables', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('session', $data ?? [], null);
        $this->setIfExists('tracking_id', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets redeemables
     *
     * @return \OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem[]|null
     */
    public function getRedeemables(): ?array
    {
        return $this->container['redeemables'];
    }

    /**
     * Sets redeemables
     *
     * @param \OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem[]|null $redeemables redeemables
     *
     * @return $this
     */
    public function setRedeemables(?array $redeemables): static
    {
        if (is_null($redeemables)) {
            array_push($this->openAPINullablesSetToNull, 'redeemables');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemables', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redeemables'] = $redeemables;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\Order|null
     */
    public function getOrder(): ?\OpenAPI\Client\Model\Order
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\Order|null $order Order information.
     *
     * @return $this
     */
    public function setOrder(?\OpenAPI\Client\Model\Order $order): static
    {
        if (is_null($order)) {
            array_push($this->openAPINullablesSetToNull, 'order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\Customer|null
     */
    public function getCustomer(): ?\OpenAPI\Client\Model\Customer
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\Customer|null $customer Customer's information.
     *
     * @return $this
     */
    public function setCustomer(?\OpenAPI\Client\Model\Customer $customer): static
    {
        if (is_null($customer)) {
            array_push($this->openAPINullablesSetToNull, 'customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets session
     *
     * @return \OpenAPI\Client\Model\Session|null
     */
    public function getSession(): ?\OpenAPI\Client\Model\Session
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param \OpenAPI\Client\Model\Session|null $session Schema model for session lock object. The session object is required to establish a session between multiple parallel validation and redemption requests. If you only send the type parameter in the request, then by default the session lock will be established for 7 days. Read more on establishing a validation session.
     *
     * @return $this
     */
    public function setSession(?\OpenAPI\Client\Model\Session $session): static
    {
        if (is_null($session)) {
            array_push($this->openAPINullablesSetToNull, 'session');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('session', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string|null
     */
    public function getTrackingId(): ?string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string|null $tracking_id Is correspondent to Customer's source_id
     *
     * @return $this
     */
    public function setTrackingId(?string $tracking_id): static
    {
        if (is_null($tracking_id)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata(): ?object
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata A set of key/value pairs that you can attach to a redemption object. It can be useful for storing additional information about the redemption in a structured format.
     *
     * @return $this
     */
    public function setMetadata(?object $metadata): static
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


