<?php
/**
 * VoucherTransactionsFilters
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
 * VoucherTransactionsFilters Class Doc Comment
 *
 * @category Class
 * @description List of available fields and filters that can be exported with gift card or loyalty card transactions along with the sorting order of the returned data.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VoucherTransactionsFilters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherTransactionsFilters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order' => 'string',
        'fields' => 'string[]',
        'filters' => '\OpenAPI\Client\Model\VoucherTransactionsExportFilterConditions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'order' => null,
        'fields' => null,
        'filters' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'order' => false,
		'fields' => false,
		'filters' => false
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
        'order' => 'order',
        'fields' => 'fields',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order' => 'setOrder',
        'fields' => 'setFields',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order' => 'getOrder',
        'fields' => 'getFields',
        'filters' => 'getFilters'
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

    public const ORDER_CREATED_AT = '-created_at';
    public const ORDER_CREATED_AT2 = 'created_at';
    public const FIELDS_ID = 'id';
    public const FIELDS_TYPE = 'type';
    public const FIELDS_SOURCE_ID = 'source_id';
    public const FIELDS_REASON = 'reason';
    public const FIELDS_BALANCE = 'balance';
    public const FIELDS_AMOUNT = 'amount';
    public const FIELDS_CREATED_AT = 'created_at';
    public const FIELDS_VOUCHER_ID = 'voucher_id';
    public const FIELDS_CAMPAIGN_ID = 'campaign_id';
    public const FIELDS_SOURCE = 'source';
    public const FIELDS_DETAILS = 'details';
    public const FIELDS_RELATED_TRANSACTION_ID = 'related_transaction_id';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_CREATED_AT,
            self::ORDER_CREATED_AT2,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_ID,
            self::FIELDS_TYPE,
            self::FIELDS_SOURCE_ID,
            self::FIELDS_REASON,
            self::FIELDS_BALANCE,
            self::FIELDS_AMOUNT,
            self::FIELDS_CREATED_AT,
            self::FIELDS_VOUCHER_ID,
            self::FIELDS_CAMPAIGN_ID,
            self::FIELDS_SOURCE,
            self::FIELDS_DETAILS,
            self::FIELDS_RELATED_TRANSACTION_ID,
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
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
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

        $allowedValues = $this->getOrderAllowableValues();
        if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order', must be one of '%s'",
                $this->container['order'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
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
     * Gets order
     *
     * @return string|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string|null $order How the export is filtered, where the dash `-` preceding a sorting option means sorting in a descending order.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $allowedValues = $this->getOrderAllowableValues();
        if (!in_array($order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order', must be one of '%s'",
                    $order,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[]|null $fields Array of strings containing the data in the export. These fields define the headers in the CSV file. The array can be a combination of any of the following available fields:  | **Field** | **Definition** | **Example Export** | |:---|:---|:---| | id | Unique transaction ID. | vtx_0cb7811f1c07765800 | | type | Transaction type. | - `CREDITS_REMOVAL` <br> - `CREDITS_ADDITION` <br> - `CREDITS_REFUND` <br> - `CREDITS_REDEMPTION` <br> - `POINTS_ACCRUAL`<br> - `POINTS_REDEMPTION`<br> - `POINTS_REFUND`<br> - `POINTS_ADDITION`<br> - `POINTS_REMOVAL`<br> - `POINTS_EXPIRATION`<br> - `POINTS_TRANSFER_IN`<br> - `POINTS_TRANSFER_OUT` | | source_id | Unique transaction source ID. | 8638 | | reason | Contains the reason for the transaction if one was included originally. |  | | balance | The gift card or loyalty card balance after the transaction. |  | | amount | The amount of gift card or loyalty card credits being allocated during the transaction. This value can either be negative or positive depending on the nature of the transaction. |  | | created_at | Timestamp in ISO 8601 format representing the date and time when the transaction was created. | 2022-03-09T09:16:32.521Z  | | voucher_id | Unique Voucher ID. | v_dky7ksKfPX50Wb2Bxvcoeb1xT20b6tcp | | campaign_id | Parent campaign ID. | camp_FNYR4jhqZBM9xTptxDGgeNBV | | source|  Channel through which the transaction was initiated. | API | | details | More detailed information stored in the form of a JSON. | Provides more details related to the transaction in the form of an object. | | related_transaction_id | Unique transaction ID related to a receiver/donor card in the case of a points transfer from/to another card. | vtx_0c9afe802593b34b80 |
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $allowedValues = $this->getFieldsAllowableValues();
        if (array_diff($fields, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fields', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionsExportFilterConditions
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionsExportFilterConditions $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

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


