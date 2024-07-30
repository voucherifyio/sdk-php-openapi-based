<?php
/**
 * HolderRoleConditions
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
 * HolderRoleConditions Class Doc Comment
 *
 * @category Class
 * @description Data filters used to narrow the data records to be returned in the result.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HolderRoleConditions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Holder_Role_conditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is' => 'string[]',
        'is_not' => 'string[]',
        'in' => 'string[]',
        'not_in' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is' => null,
        'is_not' => null,
        'in' => null,
        'not_in' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is' => true,
		'is_not' => true,
		'in' => true,
		'not_in' => true
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
        'is' => '$is',
        'is_not' => '$is_not',
        'in' => '$in',
        'not_in' => '$not_in'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is' => 'setIs',
        'is_not' => 'setIsNot',
        'in' => 'setIn',
        'not_in' => 'setNotIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is' => 'getIs',
        'is_not' => 'getIsNot',
        'in' => 'getIn',
        'not_in' => 'getNotIn'
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

    public const IS_OWNER = 'OWNER';
    public const IS_REFERRER = 'REFERRER';
    public const IS_REFEREE = 'REFEREE';
    public const IS_NOT_OWNER = 'OWNER';
    public const IS_NOT_REFERRER = 'REFERRER';
    public const IS_NOT_REFEREE = 'REFEREE';
    public const IN_OWNER = 'OWNER';
    public const IN_REFERRER = 'REFERRER';
    public const IN_REFEREE = 'REFEREE';
    public const NOT_IN_OWNER = 'OWNER';
    public const NOT_IN_REFERRER = 'REFERRER';
    public const NOT_IN_REFEREE = 'REFEREE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsAllowableValues()
    {
        return [
            self::IS_OWNER,
            self::IS_REFERRER,
            self::IS_REFEREE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsNotAllowableValues()
    {
        return [
            self::IS_NOT_OWNER,
            self::IS_NOT_REFERRER,
            self::IS_NOT_REFEREE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInAllowableValues()
    {
        return [
            self::IN_OWNER,
            self::IN_REFERRER,
            self::IN_REFEREE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNotInAllowableValues()
    {
        return [
            self::NOT_IN_OWNER,
            self::NOT_IN_REFERRER,
            self::NOT_IN_REFEREE,
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
        $this->setIfExists('is', $data ?? [], null);
        $this->setIfExists('is_not', $data ?? [], null);
        $this->setIfExists('in', $data ?? [], null);
        $this->setIfExists('not_in', $data ?? [], null);
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
     * Gets is
     *
     * @return string[]|null
     */
    public function getIs()
    {
        return $this->container['is'];
    }

    /**
     * Sets is
     *
     * @param string[]|null $is Will return records only for the first value in the array.
     *
     * @return self
     */
    public function setIs($is)
    {
        if (is_null($is)) {
            array_push($this->openAPINullablesSetToNull, 'is');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getIsAllowableValues();
        if (!is_null($is) && array_diff($is, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'is', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['is'] = $is;

        return $this;
    }

    /**
     * Gets is_not
     *
     * @return string[]|null
     */
    public function getIsNot()
    {
        return $this->container['is_not'];
    }

    /**
     * Sets is_not
     *
     * @param string[]|null $is_not Will return records only for the first value in the array.
     *
     * @return self
     */
    public function setIsNot($is_not)
    {
        if (is_null($is_not)) {
            array_push($this->openAPINullablesSetToNull, 'is_not');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_not', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getIsNotAllowableValues();
        if (!is_null($is_not) && array_diff($is_not, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'is_not', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['is_not'] = $is_not;

        return $this;
    }

    /**
     * Gets in
     *
     * @return string[]|null
     */
    public function getIn()
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     *
     * @param string[]|null $in Will return records for the values in the array.
     *
     * @return self
     */
    public function setIn($in)
    {
        if (is_null($in)) {
            array_push($this->openAPINullablesSetToNull, 'in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('in', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getInAllowableValues();
        if (!is_null($in) && array_diff($in, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'in', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['in'] = $in;

        return $this;
    }

    /**
     * Gets not_in
     *
     * @return string[]|null
     */
    public function getNotIn()
    {
        return $this->container['not_in'];
    }

    /**
     * Sets not_in
     *
     * @param string[]|null $not_in Will return records for the values in the array.
     *
     * @return self
     */
    public function setNotIn($not_in)
    {
        if (is_null($not_in)) {
            array_push($this->openAPINullablesSetToNull, 'not_in');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('not_in', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getNotInAllowableValues();
        if (!is_null($not_in) && array_diff($not_in, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'not_in', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['not_in'] = $not_in;

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


