<?php
/**
 * LoyaltiesMembersTransactionsListResponseBody
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
 * LoyaltiesMembersTransactionsListResponseBody Class Doc Comment
 *
 * @description Response body schema for **GET** &#x60;/loyalties/{campaignId}/members/{memberId}/transactions&#x60; and &#x60;/loyalties/members/{memberId}/transactions&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LoyaltiesMembersTransactionsListResponseBody implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LoyaltiesMembersTransactionsListResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'object' => 'string',
        'data_ref' => 'string',
        'data' => '\OpenAPI\Client\Model\LoyaltyCardTransaction[]',
        'has_more' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'object' => null,
        'data_ref' => null,
        'data' => null,
        'has_more' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'object' => true,
        'data_ref' => true,
        'data' => true,
        'has_more' => true
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
        'object' => 'object',
        'data_ref' => 'data_ref',
        'data' => 'data',
        'has_more' => 'has_more'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'object' => 'setObject',
        'data_ref' => 'setDataRef',
        'data' => 'setData',
        'has_more' => 'setHasMore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'object' => 'getObject',
        'data_ref' => 'getDataRef',
        'data' => 'getData',
        'has_more' => 'getHasMore'
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

    public const OBJECT__LIST = 'list';
    public const DATA_REF_DATA = 'data';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT__LIST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataRefAllowableValues()
    {
        return [
            self::DATA_REF_DATA,
        ];
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
        $this->setIfExists('object', $data ?? [], 'list');
        $this->setIfExists('data_ref', $data ?? [], 'data');
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('has_more', $data ?? [], null);
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

        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['object']) && !preg_match("/list/", $this->container['object'])) {
            $invalidProperties[] = "invalid value for 'object', must be conform to the pattern /list/.";
        }

        $allowedValues = $this->getDataRefAllowableValues();
        if (!is_null($this->container['data_ref']) && !in_array($this->container['data_ref'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'data_ref', must be one of '%s'",
                $this->container['data_ref'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['data_ref']) && !preg_match("/data/", $this->container['data_ref'])) {
            $invalidProperties[] = "invalid value for 'data_ref', must be conform to the pattern /data/.";
        }

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
     * Gets object
     *
     * @return string|null
     */
    public function getObject(): ?string
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object The type of the object represented by JSON.
     *
     * @return $this
     */
    public function setObject(?string $object): static
    {
        if (is_null($object)) {
            array_push($this->openAPINullablesSetToNull, 'object');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('object', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($object) && !in_array($object, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object', must be one of '%s'",
                    $object,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($object) && (!preg_match("/list/", ObjectSerializer::toString($object)))) {
            throw new InvalidArgumentException("invalid value for \$object when calling LoyaltiesMembersTransactionsListResponseBody., must conform to the pattern /list/.");
        }

        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets data_ref
     *
     * @return string|null
     */
    public function getDataRef(): ?string
    {
        return $this->container['data_ref'];
    }

    /**
     * Sets data_ref
     *
     * @param string|null $data_ref Identifies the name of the attribute that contains the array of transaction objects.
     *
     * @return $this
     */
    public function setDataRef(?string $data_ref): static
    {
        if (is_null($data_ref)) {
            array_push($this->openAPINullablesSetToNull, 'data_ref');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data_ref', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDataRefAllowableValues();
        if (!is_null($data_ref) && !in_array($data_ref, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_ref', must be one of '%s'",
                    $data_ref,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (!is_null($data_ref) && (!preg_match("/data/", ObjectSerializer::toString($data_ref)))) {
            throw new InvalidArgumentException("invalid value for \$data_ref when calling LoyaltiesMembersTransactionsListResponseBody., must conform to the pattern /data/.");
        }

        $this->container['data_ref'] = $data_ref;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \OpenAPI\Client\Model\LoyaltyCardTransaction[]|null
     */
    public function getData(): ?array
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \OpenAPI\Client\Model\LoyaltyCardTransaction[]|null $data A dictionary that contains an array of transactions. Each entry in the array is a separate transaction object.
     *
     * @return $this
     */
    public function setData(?array $data): static
    {
        if (is_null($data)) {
            array_push($this->openAPINullablesSetToNull, 'data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets has_more
     *
     * @return bool|null
     */
    public function getHasMore(): ?bool
    {
        return $this->container['has_more'];
    }

    /**
     * Sets has_more
     *
     * @param bool|null $has_more As query results are always limited (by the limit parameter), the has_more flag indicates if there are more records for given filter parameters. This lets you know if you can run another request (with a different page or a different start date filter) to get more records returned in the results.
     *
     * @return $this
     */
    public function setHasMore(?bool $has_more): static
    {
        if (is_null($has_more)) {
            array_push($this->openAPINullablesSetToNull, 'has_more');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('has_more', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['has_more'] = $has_more;

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


