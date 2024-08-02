<?php
/**
 * CodeConfig
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
 * CodeConfig Class Doc Comment
 *
 * @description Schema containing information about config used for voucher. Defines code&#39;s pattern (prefix, suffix, length, charset, etc).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CodeConfig implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CodeConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'length' => 'float',
        'charset' => 'string',
        'prefix' => 'string',
        'postfix' => 'string',
        'pattern' => 'string',
        'initial_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'length' => null,
        'charset' => null,
        'prefix' => null,
        'postfix' => null,
        'pattern' => null,
        'initial_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'length' => true,
        'charset' => true,
        'prefix' => true,
        'postfix' => true,
        'pattern' => true,
        'initial_count' => true
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
        'length' => 'length',
        'charset' => 'charset',
        'prefix' => 'prefix',
        'postfix' => 'postfix',
        'pattern' => 'pattern',
        'initial_count' => 'initial_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'length' => 'setLength',
        'charset' => 'setCharset',
        'prefix' => 'setPrefix',
        'postfix' => 'setPostfix',
        'pattern' => 'setPattern',
        'initial_count' => 'setInitialCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'length' => 'getLength',
        'charset' => 'getCharset',
        'prefix' => 'getPrefix',
        'postfix' => 'getPostfix',
        'pattern' => 'getPattern',
        'initial_count' => 'getInitialCount'
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
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('charset', $data ?? [], null);
        $this->setIfExists('prefix', $data ?? [], null);
        $this->setIfExists('postfix', $data ?? [], null);
        $this->setIfExists('pattern', $data ?? [], null);
        $this->setIfExists('initial_count', $data ?? [], null);
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
     * Gets length
     *
     * @return float|null
     */
    public function getLength(): ?float
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float|null $length Number of characters in a generated code (excluding prefix and postfix).
     *
     * @return $this
     */
    public function setLength(?float $length): static
    {
        if (is_null($length)) {
            array_push($this->openAPINullablesSetToNull, 'length');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('length', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets charset
     *
     * @return string|null
     */
    public function getCharset(): ?string
    {
        return $this->container['charset'];
    }

    /**
     * Sets charset
     *
     * @param string|null $charset Characters that can appear in the code.    Examples:  - Alphanumeric: `0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`  - Alphabetic: `abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`  - Alphabetic Lowercase: `abcdefghijklmnopqrstuvwxyz`  - Alphabetic Uppercase: `ABCDEFGHIJKLMNOPQRSTUVWXYZ`  - Numbers: `0123456789`   - Custom: a custom character set
     *
     * @return $this
     */
    public function setCharset(?string $charset): static
    {
        if (is_null($charset)) {
            array_push($this->openAPINullablesSetToNull, 'charset');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('charset', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['charset'] = $charset;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string|null $prefix A text appended before the code.
     *
     * @return $this
     */
    public function setPrefix(?string $prefix): static
    {
        if (is_null($prefix)) {
            array_push($this->openAPINullablesSetToNull, 'prefix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('prefix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets postfix
     *
     * @return string|null
     */
    public function getPostfix(): ?string
    {
        return $this->container['postfix'];
    }

    /**
     * Sets postfix
     *
     * @param string|null $postfix A text appended after the code.
     *
     * @return $this
     */
    public function setPostfix(?string $postfix): static
    {
        if (is_null($postfix)) {
            array_push($this->openAPINullablesSetToNull, 'postfix');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postfix', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['postfix'] = $postfix;

        return $this;
    }

    /**
     * Gets pattern
     *
     * @return string|null
     */
    public function getPattern(): ?string
    {
        return $this->container['pattern'];
    }

    /**
     * Sets pattern
     *
     * @param string|null $pattern A pattern for codes where hashes (#) will be replaced with random characters. Overrides `length`.
     *
     * @return $this
     */
    public function setPattern(?string $pattern): static
    {
        if (is_null($pattern)) {
            array_push($this->openAPINullablesSetToNull, 'pattern');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pattern', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pattern'] = $pattern;

        return $this;
    }

    /**
     * Gets initial_count
     *
     * @return int|null
     */
    public function getInitialCount(): ?int
    {
        return $this->container['initial_count'];
    }

    /**
     * Sets initial_count
     *
     * @param int|null $initial_count The initial count
     *
     * @return $this
     */
    public function setInitialCount(?int $initial_count): static
    {
        if (is_null($initial_count)) {
            array_push($this->openAPINullablesSetToNull, 'initial_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('initial_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['initial_count'] = $initial_count;

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


