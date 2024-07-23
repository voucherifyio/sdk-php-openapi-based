<?php
/**
 * RedemptionRewardResultProduct
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
 * RedemptionRewardResultProduct Class Doc Comment
 *
 * @category Class
 * @description Defines of the product.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RedemptionRewardResultProduct implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RedemptionRewardResult_product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'source_id' => 'string',
        'name' => 'string',
        'price' => 'int',
        'attributes' => 'string[]',
        'metadata' => 'object',
        'image_url' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'object' => 'string',
        'skus' => '\OpenAPI\Client\Model\SkusListForProduct'
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
        'name' => null,
        'price' => null,
        'attributes' => null,
        'metadata' => null,
        'image_url' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'object' => null,
        'skus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'source_id' => true,
		'name' => true,
		'price' => true,
		'attributes' => true,
		'metadata' => true,
		'image_url' => true,
		'created_at' => true,
		'updated_at' => true,
		'object' => true,
		'skus' => false
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
        'name' => 'name',
        'price' => 'price',
        'attributes' => 'attributes',
        'metadata' => 'metadata',
        'image_url' => 'image_url',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'object' => 'object',
        'skus' => 'skus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source_id' => 'setSourceId',
        'name' => 'setName',
        'price' => 'setPrice',
        'attributes' => 'setAttributes',
        'metadata' => 'setMetadata',
        'image_url' => 'setImageUrl',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'object' => 'setObject',
        'skus' => 'setSkus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source_id' => 'getSourceId',
        'name' => 'getName',
        'price' => 'getPrice',
        'attributes' => 'getAttributes',
        'metadata' => 'getMetadata',
        'image_url' => 'getImageUrl',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'object' => 'getObject',
        'skus' => 'getSkus'
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

    public const OBJECT_PRODUCT = 'product';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_PRODUCT,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'product');
        $this->setIfExists('skus', $data ?? [], null);
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
     * @param string|null $id Unique product ID assigned by Voucherify.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param string|null $source_id Unique product source ID.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        if (is_null($source_id)) {
            array_push($this->openAPINullablesSetToNull, 'source_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Unique user-defined product name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int|null $price Unit price. It is represented by a value multiplied by 100 to accurately reflect 2 decimal places, such as `$100.00` being expressed as `10000`.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param string[]|null $attributes A list of product attributes whose values you can customize for given SKUs: `[\"color\",\"size\",\"ranking\"]`. Each child SKU can have a unique value for a given attribute.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            array_push($this->openAPINullablesSetToNull, 'attributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attributes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['attributes'] = $attributes;

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
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the product. A set of key/value pairs that you can attach to a product object. It can be useful for storing additional information about the product in a structured format.
     *
     * @return self
     */
    public function setMetadata($metadata)
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
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url The HTTPS URL pointing to the .png or .jpg file that will be used to render the product image.
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        if (is_null($image_url)) {
            array_push($this->openAPINullablesSetToNull, 'image_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image_url'] = $image_url;

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
     * @param \DateTime|null $created_at Timestamp representing the date and time when the product was created. The value is shown in the ISO 8601 format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
     * @param \DateTime|null $updated_at Timestamp representing the date and time when the product was updated. The value is shown in the ISO 8601 format.
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
     * @param string|null $object The type of the object represented by JSON. This object stores information about the product.
     *
     * @return self
     */
    public function setObject($object)
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
     * Gets skus
     *
     * @return \OpenAPI\Client\Model\SkusListForProduct|null
     */
    public function getSkus()
    {
        return $this->container['skus'];
    }

    /**
     * Sets skus
     *
     * @param \OpenAPI\Client\Model\SkusListForProduct|null $skus skus
     *
     * @return self
     */
    public function setSkus($skus)
    {
        if (is_null($skus)) {
            throw new \InvalidArgumentException('non-nullable skus cannot be null');
        }
        $this->container['skus'] = $skus;

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


