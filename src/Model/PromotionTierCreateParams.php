<?php
/**
 * PromotionTierCreateParams
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
 * PromotionTierCreateParams Class Doc Comment
 *
 * @category Class
 * @description This is an object representing a promotion tier create params. Promotion tiers are always assigned to a campaign and cannot be used standalone.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PromotionTierCreateParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionTierCreateParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'banner' => 'string',
        'action' => '\OpenAPI\Client\Model\PromotionTierAction',
        'metadata' => 'object',
        'validation_rules' => 'string[]',
        'active' => 'bool',
        'hierarchy' => 'int',
        'start_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'validity_timeframe' => '\OpenAPI\Client\Model\PromotionTierValidityTimeframe',
        'validity_day_of_week' => 'int[]',
        'category' => 'string',
        'category_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'banner' => null,
        'action' => null,
        'metadata' => null,
        'validation_rules' => null,
        'active' => null,
        'hierarchy' => null,
        'start_date' => 'date-time',
        'expiration_date' => 'date-time',
        'validity_timeframe' => null,
        'validity_day_of_week' => null,
        'category' => null,
        'category_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'banner' => false,
		'action' => false,
		'metadata' => false,
		'validation_rules' => false,
		'active' => false,
		'hierarchy' => false,
		'start_date' => false,
		'expiration_date' => false,
		'validity_timeframe' => false,
		'validity_day_of_week' => false,
		'category' => false,
		'category_id' => false
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
        'name' => 'name',
        'banner' => 'banner',
        'action' => 'action',
        'metadata' => 'metadata',
        'validation_rules' => 'validation_rules',
        'active' => 'active',
        'hierarchy' => 'hierarchy',
        'start_date' => 'start_date',
        'expiration_date' => 'expiration_date',
        'validity_timeframe' => 'validity_timeframe',
        'validity_day_of_week' => 'validity_day_of_week',
        'category' => 'category',
        'category_id' => 'category_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'banner' => 'setBanner',
        'action' => 'setAction',
        'metadata' => 'setMetadata',
        'validation_rules' => 'setValidationRules',
        'active' => 'setActive',
        'hierarchy' => 'setHierarchy',
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate',
        'validity_timeframe' => 'setValidityTimeframe',
        'validity_day_of_week' => 'setValidityDayOfWeek',
        'category' => 'setCategory',
        'category_id' => 'setCategoryId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'banner' => 'getBanner',
        'action' => 'getAction',
        'metadata' => 'getMetadata',
        'validation_rules' => 'getValidationRules',
        'active' => 'getActive',
        'hierarchy' => 'getHierarchy',
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate',
        'validity_timeframe' => 'getValidityTimeframe',
        'validity_day_of_week' => 'getValidityDayOfWeek',
        'category' => 'getCategory',
        'category_id' => 'getCategoryId'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('validation_rules', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('hierarchy', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('validity_timeframe', $data ?? [], null);
        $this->setIfExists('validity_day_of_week', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the promotion tier.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets banner
     *
     * @return string|null
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param string|null $banner Text to be displayed to your customers on your website.
     *
     * @return self
     */
    public function setBanner($banner)
    {
        if (is_null($banner)) {
            throw new \InvalidArgumentException('non-nullable banner cannot be null');
        }
        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \OpenAPI\Client\Model\PromotionTierAction|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \OpenAPI\Client\Model\PromotionTierAction|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

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
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the promotion tier. A set of key/value pairs that you can attach to a promotion tier object. It can be useful for storing additional information about the promotion tier in a structured format.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets validation_rules
     *
     * @return string[]|null
     */
    public function getValidationRules()
    {
        return $this->container['validation_rules'];
    }

    /**
     * Sets validation_rules
     *
     * @param string[]|null $validation_rules Array containing the ID of the validation rule associated with the promotion tier.
     *
     * @return self
     */
    public function setValidationRules($validation_rules)
    {
        if (is_null($validation_rules)) {
            throw new \InvalidArgumentException('non-nullable validation_rules cannot be null');
        }
        $this->container['validation_rules'] = $validation_rules;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active A flag to toggle the promotion tier on or off. You can disable a promotion tier even though it's within the active period defined by the `start_date` and `expiration_date`.    - `true` indicates an *active* promotion tier - `false` indicates an *inactive* promotion tier
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets hierarchy
     *
     * @return int|null
     */
    public function getHierarchy()
    {
        return $this->container['hierarchy'];
    }

    /**
     * Sets hierarchy
     *
     * @param int|null $hierarchy The promotions hierarchy defines the order in which the discounts from different tiers will be applied to a customer's order. If a customer qualifies for discounts from more than one tier, discounts will be applied in the order defined in the hierarchy.
     *
     * @return self
     */
    public function setHierarchy($hierarchy)
    {
        if (is_null($hierarchy)) {
            throw new \InvalidArgumentException('non-nullable hierarchy cannot be null');
        }
        $this->container['hierarchy'] = $hierarchy;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Activation timestamp defines when the promotion tier starts to be active in ISO 8601 format. Promotion tier is *inactive before* this date.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date Activation timestamp defines when the promotion tier expires in ISO 8601 format. Promotion tier is *inactive after* this date.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets validity_timeframe
     *
     * @return \OpenAPI\Client\Model\PromotionTierValidityTimeframe|null
     */
    public function getValidityTimeframe()
    {
        return $this->container['validity_timeframe'];
    }

    /**
     * Sets validity_timeframe
     *
     * @param \OpenAPI\Client\Model\PromotionTierValidityTimeframe|null $validity_timeframe validity_timeframe
     *
     * @return self
     */
    public function setValidityTimeframe($validity_timeframe)
    {
        if (is_null($validity_timeframe)) {
            throw new \InvalidArgumentException('non-nullable validity_timeframe cannot be null');
        }
        $this->container['validity_timeframe'] = $validity_timeframe;

        return $this;
    }

    /**
     * Gets validity_day_of_week
     *
     * @return int[]|null
     */
    public function getValidityDayOfWeek()
    {
        return $this->container['validity_day_of_week'];
    }

    /**
     * Sets validity_day_of_week
     *
     * @param int[]|null $validity_day_of_week Integer array corresponding to the particular days of the week in which the promotion tier is valid.  - `0`  Sunday   - `1`  Monday   - `2`  Tuesday   - `3`  Wednesday   - `4`  Thursday   - `5`  Friday   - `6`  Saturday
     *
     * @return self
     */
    public function setValidityDayOfWeek($validity_day_of_week)
    {
        if (is_null($validity_day_of_week)) {
            throw new \InvalidArgumentException('non-nullable validity_day_of_week cannot be null');
        }
        $this->container['validity_day_of_week'] = $validity_day_of_week;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Assign category to the promotion tier.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id Instead of using the category name, you can alternatively assign a new category to a promotion tier using a unique category ID, i.e. `cat_0c9da30e7116ba6bba`.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            throw new \InvalidArgumentException('non-nullable category_id cannot be null');
        }
        $this->container['category_id'] = $category_id;

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

