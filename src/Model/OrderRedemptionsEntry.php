<?php
/**
 * OrderRedemptionsEntry
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
 * OrderRedemptionsEntry Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderRedemptionsEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderRedemptionsEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => '\DateTime',
        'rollback_id' => 'string',
        'rollback_date' => '\DateTime',
        'related_object_type' => 'string',
        'related_object_id' => 'string',
        'related_object_parent_id' => 'string',
        'stacked' => 'string[]',
        'rollback_stacked' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date' => 'date-time',
        'rollback_id' => null,
        'rollback_date' => 'date-time',
        'related_object_type' => null,
        'related_object_id' => null,
        'related_object_parent_id' => null,
        'stacked' => null,
        'rollback_stacked' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => true,
		'rollback_id' => true,
		'rollback_date' => true,
		'related_object_type' => true,
		'related_object_id' => true,
		'related_object_parent_id' => true,
		'stacked' => true,
		'rollback_stacked' => true
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
        'date' => 'date',
        'rollback_id' => 'rollback_id',
        'rollback_date' => 'rollback_date',
        'related_object_type' => 'related_object_type',
        'related_object_id' => 'related_object_id',
        'related_object_parent_id' => 'related_object_parent_id',
        'stacked' => 'stacked',
        'rollback_stacked' => 'rollback_stacked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'rollback_id' => 'setRollbackId',
        'rollback_date' => 'setRollbackDate',
        'related_object_type' => 'setRelatedObjectType',
        'related_object_id' => 'setRelatedObjectId',
        'related_object_parent_id' => 'setRelatedObjectParentId',
        'stacked' => 'setStacked',
        'rollback_stacked' => 'setRollbackStacked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'rollback_id' => 'getRollbackId',
        'rollback_date' => 'getRollbackDate',
        'related_object_type' => 'getRelatedObjectType',
        'related_object_id' => 'getRelatedObjectId',
        'related_object_parent_id' => 'getRelatedObjectParentId',
        'stacked' => 'getStacked',
        'rollback_stacked' => 'getRollbackStacked'
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
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('rollback_id', $data ?? [], null);
        $this->setIfExists('rollback_date', $data ?? [], null);
        $this->setIfExists('related_object_type', $data ?? [], 'redemption');
        $this->setIfExists('related_object_id', $data ?? [], null);
        $this->setIfExists('related_object_parent_id', $data ?? [], null);
        $this->setIfExists('stacked', $data ?? [], null);
        $this->setIfExists('rollback_stacked', $data ?? [], null);
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
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Timestamp representing the date and time when the redemption was created. The value is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            array_push($this->openAPINullablesSetToNull, 'date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets rollback_id
     *
     * @return string|null
     */
    public function getRollbackId()
    {
        return $this->container['rollback_id'];
    }

    /**
     * Sets rollback_id
     *
     * @param string|null $rollback_id Unique ID of the redemption rollback.
     *
     * @return self
     */
    public function setRollbackId($rollback_id)
    {
        if (is_null($rollback_id)) {
            array_push($this->openAPINullablesSetToNull, 'rollback_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rollback_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rollback_id'] = $rollback_id;

        return $this;
    }

    /**
     * Gets rollback_date
     *
     * @return \DateTime|null
     */
    public function getRollbackDate()
    {
        return $this->container['rollback_date'];
    }

    /**
     * Sets rollback_date
     *
     * @param \DateTime|null $rollback_date Timestamp representing the date and tiem when the redemption rollback was created. The value is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setRollbackDate($rollback_date)
    {
        if (is_null($rollback_date)) {
            array_push($this->openAPINullablesSetToNull, 'rollback_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rollback_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rollback_date'] = $rollback_date;

        return $this;
    }

    /**
     * Gets related_object_type
     *
     * @return string|null
     */
    public function getRelatedObjectType()
    {
        return $this->container['related_object_type'];
    }

    /**
     * Sets related_object_type
     *
     * @param string|null $related_object_type The source of the incentive.
     *
     * @return self
     */
    public function setRelatedObjectType($related_object_type)
    {
        if (is_null($related_object_type)) {
            array_push($this->openAPINullablesSetToNull, 'related_object_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('related_object_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['related_object_type'] = $related_object_type;

        return $this;
    }

    /**
     * Gets related_object_id
     *
     * @return string|null
     */
    public function getRelatedObjectId()
    {
        return $this->container['related_object_id'];
    }

    /**
     * Sets related_object_id
     *
     * @param string|null $related_object_id Unique ID of the parent redemption.
     *
     * @return self
     */
    public function setRelatedObjectId($related_object_id)
    {
        if (is_null($related_object_id)) {
            array_push($this->openAPINullablesSetToNull, 'related_object_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('related_object_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['related_object_id'] = $related_object_id;

        return $this;
    }

    /**
     * Gets related_object_parent_id
     *
     * @return string|null
     */
    public function getRelatedObjectParentId()
    {
        return $this->container['related_object_parent_id'];
    }

    /**
     * Sets related_object_parent_id
     *
     * @param string|null $related_object_parent_id Represent's the campaign ID of the voucher if the redemption was based on a voucher that was part of bulk codes generated within a campaign. In case of a promotion tier, this represents the campaign ID of the promotion tier's parent campaign.
     *
     * @return self
     */
    public function setRelatedObjectParentId($related_object_parent_id)
    {
        if (is_null($related_object_parent_id)) {
            array_push($this->openAPINullablesSetToNull, 'related_object_parent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('related_object_parent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['related_object_parent_id'] = $related_object_parent_id;

        return $this;
    }

    /**
     * Gets stacked
     *
     * @return string[]|null
     */
    public function getStacked()
    {
        return $this->container['stacked'];
    }

    /**
     * Sets stacked
     *
     * @param string[]|null $stacked Contains a list of unique IDs of child redemptions, which belong to the stacked incentives.
     *
     * @return self
     */
    public function setStacked($stacked)
    {
        if (is_null($stacked)) {
            array_push($this->openAPINullablesSetToNull, 'stacked');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stacked', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stacked'] = $stacked;

        return $this;
    }

    /**
     * Gets rollback_stacked
     *
     * @return string[]|null
     */
    public function getRollbackStacked()
    {
        return $this->container['rollback_stacked'];
    }

    /**
     * Sets rollback_stacked
     *
     * @param string[]|null $rollback_stacked Lists the rollback redemption IDs of the particular child redemptions.
     *
     * @return self
     */
    public function setRollbackStacked($rollback_stacked)
    {
        if (is_null($rollback_stacked)) {
            array_push($this->openAPINullablesSetToNull, 'rollback_stacked');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rollback_stacked', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rollback_stacked'] = $rollback_stacked;

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


