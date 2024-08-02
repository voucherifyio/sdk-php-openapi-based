<?php
/**
 * QualificationsCampaignTypeConditionsConditions
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
 * QualificationsCampaignTypeConditionsConditions Class Doc Comment
 *
 * @description Data filters used to narrow the data records to be returned in the result.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class QualificationsCampaignTypeConditionsConditions implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Qualifications_Campaign_Type_Conditions_conditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'is' => 'string[]',
        'is_not' => 'string[]',
        'in' => 'string[]',
        'not_in' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'is' => null,
        'is_not' => null,
        'in' => null,
        'not_in' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
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
        'is' => '$is',
        'is_not' => '$is_not',
        'in' => '$in',
        'not_in' => '$not_in'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'is' => 'setIs',
        'is_not' => 'setIsNot',
        'in' => 'setIn',
        'not_in' => 'setNotIn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'is' => 'getIs',
        'is_not' => 'getIsNot',
        'in' => 'getIn',
        'not_in' => 'getNotIn'
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

    public const IS_PROMOTION = 'PROMOTION';
    public const IS_GIFT_VOUCHERS = 'GIFT_VOUCHERS';
    public const IS_REFERRAL_PROGRAM = 'REFERRAL_PROGRAM';
    public const IS_DISCOUNT_COUPONS = 'DISCOUNT_COUPONS';
    public const IS_LOYALTY_PROGRAM = 'LOYALTY_PROGRAM';
    public const IS_LUCKY_DRAW = 'LUCKY_DRAW';
    public const IS_NOT_PROMOTION = 'PROMOTION';
    public const IS_NOT_GIFT_VOUCHERS = 'GIFT_VOUCHERS';
    public const IS_NOT_REFERRAL_PROGRAM = 'REFERRAL_PROGRAM';
    public const IS_NOT_DISCOUNT_COUPONS = 'DISCOUNT_COUPONS';
    public const IS_NOT_LOYALTY_PROGRAM = 'LOYALTY_PROGRAM';
    public const IS_NOT_LUCKY_DRAW = 'LUCKY_DRAW';
    public const IN_PROMOTION = 'PROMOTION';
    public const IN_GIFT_VOUCHERS = 'GIFT_VOUCHERS';
    public const IN_REFERRAL_PROGRAM = 'REFERRAL_PROGRAM';
    public const IN_DISCOUNT_COUPONS = 'DISCOUNT_COUPONS';
    public const IN_LOYALTY_PROGRAM = 'LOYALTY_PROGRAM';
    public const IN_LUCKY_DRAW = 'LUCKY_DRAW';
    public const NOT_IN_PROMOTION = 'PROMOTION';
    public const NOT_IN_GIFT_VOUCHERS = 'GIFT_VOUCHERS';
    public const NOT_IN_REFERRAL_PROGRAM = 'REFERRAL_PROGRAM';
    public const NOT_IN_DISCOUNT_COUPONS = 'DISCOUNT_COUPONS';
    public const NOT_IN_LOYALTY_PROGRAM = 'LOYALTY_PROGRAM';
    public const NOT_IN_LUCKY_DRAW = 'LUCKY_DRAW';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIsAllowableValues()
    {
        return [
            self::IS_PROMOTION,
            self::IS_GIFT_VOUCHERS,
            self::IS_REFERRAL_PROGRAM,
            self::IS_DISCOUNT_COUPONS,
            self::IS_LOYALTY_PROGRAM,
            self::IS_LUCKY_DRAW,
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
            self::IS_NOT_PROMOTION,
            self::IS_NOT_GIFT_VOUCHERS,
            self::IS_NOT_REFERRAL_PROGRAM,
            self::IS_NOT_DISCOUNT_COUPONS,
            self::IS_NOT_LOYALTY_PROGRAM,
            self::IS_NOT_LUCKY_DRAW,
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
            self::IN_PROMOTION,
            self::IN_GIFT_VOUCHERS,
            self::IN_REFERRAL_PROGRAM,
            self::IN_DISCOUNT_COUPONS,
            self::IN_LOYALTY_PROGRAM,
            self::IN_LUCKY_DRAW,
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
            self::NOT_IN_PROMOTION,
            self::NOT_IN_GIFT_VOUCHERS,
            self::NOT_IN_REFERRAL_PROGRAM,
            self::NOT_IN_DISCOUNT_COUPONS,
            self::NOT_IN_LOYALTY_PROGRAM,
            self::NOT_IN_LUCKY_DRAW,
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
     * Gets is
     *
     * @return string[]|null
     */
    public function getIs(): ?array
    {
        return $this->container['is'];
    }

    /**
     * Sets is
     *
     * @param string[]|null $is is
     *
     * @return $this
     */
    public function setIs(?array $is): static
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
            throw new InvalidArgumentException(
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
    public function getIsNot(): ?array
    {
        return $this->container['is_not'];
    }

    /**
     * Sets is_not
     *
     * @param string[]|null $is_not is_not
     *
     * @return $this
     */
    public function setIsNot(?array $is_not): static
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
            throw new InvalidArgumentException(
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
    public function getIn(): ?array
    {
        return $this->container['in'];
    }

    /**
     * Sets in
     *
     * @param string[]|null $in in
     *
     * @return $this
     */
    public function setIn(?array $in): static
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
            throw new InvalidArgumentException(
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
    public function getNotIn(): ?array
    {
        return $this->container['not_in'];
    }

    /**
     * Sets not_in
     *
     * @param string[]|null $not_in not_in
     *
     * @return $this
     */
    public function setNotIn(?array $not_in): static
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
            throw new InvalidArgumentException(
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


