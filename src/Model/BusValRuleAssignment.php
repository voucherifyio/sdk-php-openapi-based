<?php
/**
 * BusValRuleAssignment
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
 * BusValRuleAssignment Class Doc Comment
 *
 * @category Class
 * @description Assignments of business validation rule
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BusValRuleAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BusValRuleAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'rule_id' => 'string',
        'related_object_id' => 'string',
        'related_object_type' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'object' => 'string',
        'validation_status' => 'string',
        'validation_omitted_rules' => 'string[]'
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
        'rule_id' => null,
        'related_object_id' => null,
        'related_object_type' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'object' => null,
        'validation_status' => null,
        'validation_omitted_rules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'rule_id' => false,
		'related_object_id' => false,
		'related_object_type' => false,
		'created_at' => false,
		'updated_at' => false,
		'object' => false,
		'validation_status' => false,
		'validation_omitted_rules' => false
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
        'rule_id' => 'rule_id',
        'related_object_id' => 'related_object_id',
        'related_object_type' => 'related_object_type',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'object' => 'object',
        'validation_status' => 'validation_status',
        'validation_omitted_rules' => 'validation_omitted_rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rule_id' => 'setRuleId',
        'related_object_id' => 'setRelatedObjectId',
        'related_object_type' => 'setRelatedObjectType',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'object' => 'setObject',
        'validation_status' => 'setValidationStatus',
        'validation_omitted_rules' => 'setValidationOmittedRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rule_id' => 'getRuleId',
        'related_object_id' => 'getRelatedObjectId',
        'related_object_type' => 'getRelatedObjectType',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'object' => 'getObject',
        'validation_status' => 'getValidationStatus',
        'validation_omitted_rules' => 'getValidationOmittedRules'
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

    public const OBJECT_VALIDATION_RULES_ASSIGNMENT = 'validation_rules_assignment';
    public const VALIDATION_STATUS_VALID = 'VALID';
    public const VALIDATION_STATUS_PARTIALLY_VALID = 'PARTIALLY_VALID';
    public const VALIDATION_STATUS_INVALID = 'INVALID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_VALIDATION_RULES_ASSIGNMENT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValidationStatusAllowableValues()
    {
        return [
            self::VALIDATION_STATUS_VALID,
            self::VALIDATION_STATUS_PARTIALLY_VALID,
            self::VALIDATION_STATUS_INVALID,
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
        $this->setIfExists('rule_id', $data ?? [], null);
        $this->setIfExists('related_object_id', $data ?? [], null);
        $this->setIfExists('related_object_type', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'validation_rules_assignment');
        $this->setIfExists('validation_status', $data ?? [], null);
        $this->setIfExists('validation_omitted_rules', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['rule_id'] === null) {
            $invalidProperties[] = "'rule_id' can't be null";
        }
        if ($this->container['related_object_id'] === null) {
            $invalidProperties[] = "'related_object_id' can't be null";
        }
        if ($this->container['related_object_type'] === null) {
            $invalidProperties[] = "'related_object_type' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['validation_status'] === null) {
            $invalidProperties[] = "'validation_status' can't be null";
        }
        $allowedValues = $this->getValidationStatusAllowableValues();
        if (!is_null($this->container['validation_status']) && !in_array($this->container['validation_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'validation_status', must be one of '%s'",
                $this->container['validation_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['validation_omitted_rules'] === null) {
            $invalidProperties[] = "'validation_omitted_rules' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier for a assignment
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
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id The unique identifier for a rule
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        if (is_null($rule_id)) {
            throw new \InvalidArgumentException('non-nullable rule_id cannot be null');
        }
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets related_object_id
     *
     * @return string
     */
    public function getRelatedObjectId()
    {
        return $this->container['related_object_id'];
    }

    /**
     * Sets related_object_id
     *
     * @param string $related_object_id The unique identifier for a related object
     *
     * @return self
     */
    public function setRelatedObjectId($related_object_id)
    {
        if (is_null($related_object_id)) {
            throw new \InvalidArgumentException('non-nullable related_object_id cannot be null');
        }
        $this->container['related_object_id'] = $related_object_id;

        return $this;
    }

    /**
     * Gets related_object_type
     *
     * @return string
     */
    public function getRelatedObjectType()
    {
        return $this->container['related_object_type'];
    }

    /**
     * Sets related_object_type
     *
     * @param string $related_object_type The type of related object
     *
     * @return self
     */
    public function setRelatedObjectType($related_object_type)
    {
        if (is_null($related_object_type)) {
            throw new \InvalidArgumentException('non-nullable related_object_type cannot be null');
        }
        $this->container['related_object_type'] = $related_object_type;

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
     * @param \DateTime|null $created_at Timestamp representing the date and time when the object was created in ISO 8601 format.
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
     * @param \DateTime|null $updated_at Timestamp representing the date and time when the object was last updated in ISO 8601 format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object The type of object represented by JSON.
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
     * Gets validation_status
     *
     * @return string
     */
    public function getValidationStatus()
    {
        return $this->container['validation_status'];
    }

    /**
     * Sets validation_status
     *
     * @param string $validation_status The validation status of the assignment
     *
     * @return self
     */
    public function setValidationStatus($validation_status)
    {
        if (is_null($validation_status)) {
            throw new \InvalidArgumentException('non-nullable validation_status cannot be null');
        }
        $allowedValues = $this->getValidationStatusAllowableValues();
        if (!in_array($validation_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'validation_status', must be one of '%s'",
                    $validation_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['validation_status'] = $validation_status;

        return $this;
    }

    /**
     * Gets validation_omitted_rules
     *
     * @return string[]
     */
    public function getValidationOmittedRules()
    {
        return $this->container['validation_omitted_rules'];
    }

    /**
     * Sets validation_omitted_rules
     *
     * @param string[] $validation_omitted_rules The list of omitted rules
     *
     * @return self
     */
    public function setValidationOmittedRules($validation_omitted_rules)
    {
        if (is_null($validation_omitted_rules)) {
            throw new \InvalidArgumentException('non-nullable validation_omitted_rules cannot be null');
        }
        $this->container['validation_omitted_rules'] = $validation_omitted_rules;

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


