<?php
/**
 * StackingRules
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
 * StackingRules Class Doc Comment
 *
 * @category Class
 * @description Defines stacking rules for redeemables. Read more in the [Help Center](https://support.voucherify.io/article/604-stacking-rules)
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StackingRules implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StackingRules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redeemables_limit' => 'int',
        'applicable_redeemables_limit' => 'int',
        'applicable_exclusive_redeemables_limit' => 'int',
        'applicable_redeemables_per_category_limit' => 'int',
        'exclusive_categories' => 'string[]',
        'joint_categories' => 'string[]',
        'redeemables_application_mode' => 'string',
        'redeemables_sorting_rule' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'redeemables_limit' => null,
        'applicable_redeemables_limit' => null,
        'applicable_exclusive_redeemables_limit' => null,
        'applicable_redeemables_per_category_limit' => null,
        'exclusive_categories' => null,
        'joint_categories' => null,
        'redeemables_application_mode' => null,
        'redeemables_sorting_rule' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'redeemables_limit' => false,
		'applicable_redeemables_limit' => false,
		'applicable_exclusive_redeemables_limit' => false,
		'applicable_redeemables_per_category_limit' => false,
		'exclusive_categories' => false,
		'joint_categories' => false,
		'redeemables_application_mode' => false,
		'redeemables_sorting_rule' => false
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
        'redeemables_limit' => 'redeemables_limit',
        'applicable_redeemables_limit' => 'applicable_redeemables_limit',
        'applicable_exclusive_redeemables_limit' => 'applicable_exclusive_redeemables_limit',
        'applicable_redeemables_per_category_limit' => 'applicable_redeemables_per_category_limit',
        'exclusive_categories' => 'exclusive_categories',
        'joint_categories' => 'joint_categories',
        'redeemables_application_mode' => 'redeemables_application_mode',
        'redeemables_sorting_rule' => 'redeemables_sorting_rule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redeemables_limit' => 'setRedeemablesLimit',
        'applicable_redeemables_limit' => 'setApplicableRedeemablesLimit',
        'applicable_exclusive_redeemables_limit' => 'setApplicableExclusiveRedeemablesLimit',
        'applicable_redeemables_per_category_limit' => 'setApplicableRedeemablesPerCategoryLimit',
        'exclusive_categories' => 'setExclusiveCategories',
        'joint_categories' => 'setJointCategories',
        'redeemables_application_mode' => 'setRedeemablesApplicationMode',
        'redeemables_sorting_rule' => 'setRedeemablesSortingRule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redeemables_limit' => 'getRedeemablesLimit',
        'applicable_redeemables_limit' => 'getApplicableRedeemablesLimit',
        'applicable_exclusive_redeemables_limit' => 'getApplicableExclusiveRedeemablesLimit',
        'applicable_redeemables_per_category_limit' => 'getApplicableRedeemablesPerCategoryLimit',
        'exclusive_categories' => 'getExclusiveCategories',
        'joint_categories' => 'getJointCategories',
        'redeemables_application_mode' => 'getRedeemablesApplicationMode',
        'redeemables_sorting_rule' => 'getRedeemablesSortingRule'
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

    public const REDEEMABLES_APPLICATION_MODE_ALL = 'ALL';
    public const REDEEMABLES_APPLICATION_MODE_PARTIAL = 'PARTIAL';
    public const REDEEMABLES_SORTING_RULE_CATEGORY_HIERARCHY = 'CATEGORY_HIERARCHY';
    public const REDEEMABLES_SORTING_RULE_REQUESTED_ORDER = 'REQUESTED_ORDER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedeemablesApplicationModeAllowableValues()
    {
        return [
            self::REDEEMABLES_APPLICATION_MODE_ALL,
            self::REDEEMABLES_APPLICATION_MODE_PARTIAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRedeemablesSortingRuleAllowableValues()
    {
        return [
            self::REDEEMABLES_SORTING_RULE_CATEGORY_HIERARCHY,
            self::REDEEMABLES_SORTING_RULE_REQUESTED_ORDER,
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
        $this->setIfExists('redeemables_limit', $data ?? [], 30);
        $this->setIfExists('applicable_redeemables_limit', $data ?? [], 5);
        $this->setIfExists('applicable_exclusive_redeemables_limit', $data ?? [], 1);
        $this->setIfExists('applicable_redeemables_per_category_limit', $data ?? [], 1);
        $this->setIfExists('exclusive_categories', $data ?? [], null);
        $this->setIfExists('joint_categories', $data ?? [], null);
        $this->setIfExists('redeemables_application_mode', $data ?? [], null);
        $this->setIfExists('redeemables_sorting_rule', $data ?? [], 'REQUESTED_ORDER');
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

        if ($this->container['redeemables_limit'] === null) {
            $invalidProperties[] = "'redeemables_limit' can't be null";
        }
        if (($this->container['redeemables_limit'] > 30)) {
            $invalidProperties[] = "invalid value for 'redeemables_limit', must be smaller than or equal to 30.";
        }

        if (($this->container['redeemables_limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'redeemables_limit', must be bigger than or equal to 1.";
        }

        if ($this->container['applicable_redeemables_limit'] === null) {
            $invalidProperties[] = "'applicable_redeemables_limit' can't be null";
        }
        if (($this->container['applicable_redeemables_limit'] > 30)) {
            $invalidProperties[] = "invalid value for 'applicable_redeemables_limit', must be smaller than or equal to 30.";
        }

        if (($this->container['applicable_redeemables_limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'applicable_redeemables_limit', must be bigger than or equal to 1.";
        }

        if ($this->container['applicable_exclusive_redeemables_limit'] === null) {
            $invalidProperties[] = "'applicable_exclusive_redeemables_limit' can't be null";
        }
        if (($this->container['applicable_exclusive_redeemables_limit'] > 30)) {
            $invalidProperties[] = "invalid value for 'applicable_exclusive_redeemables_limit', must be smaller than or equal to 30.";
        }

        if (($this->container['applicable_exclusive_redeemables_limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'applicable_exclusive_redeemables_limit', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['applicable_redeemables_per_category_limit']) && ($this->container['applicable_redeemables_per_category_limit'] > 30)) {
            $invalidProperties[] = "invalid value for 'applicable_redeemables_per_category_limit', must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['applicable_redeemables_per_category_limit']) && ($this->container['applicable_redeemables_per_category_limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'applicable_redeemables_per_category_limit', must be bigger than or equal to 1.";
        }

        if ($this->container['exclusive_categories'] === null) {
            $invalidProperties[] = "'exclusive_categories' can't be null";
        }
        if ($this->container['joint_categories'] === null) {
            $invalidProperties[] = "'joint_categories' can't be null";
        }
        $allowedValues = $this->getRedeemablesApplicationModeAllowableValues();
        if (!is_null($this->container['redeemables_application_mode']) && !in_array($this->container['redeemables_application_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'redeemables_application_mode', must be one of '%s'",
                $this->container['redeemables_application_mode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getRedeemablesSortingRuleAllowableValues();
        if (!is_null($this->container['redeemables_sorting_rule']) && !in_array($this->container['redeemables_sorting_rule'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'redeemables_sorting_rule', must be one of '%s'",
                $this->container['redeemables_sorting_rule'],
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
     * Gets redeemables_limit
     *
     * @return int
     */
    public function getRedeemablesLimit()
    {
        return $this->container['redeemables_limit'];
    }

    /**
     * Sets redeemables_limit
     *
     * @param int $redeemables_limit Defines how many redeemables can be sent in one stacking request (note: more redeemables means more processing time!).
     *
     * @return self
     */
    public function setRedeemablesLimit($redeemables_limit)
    {
        if (is_null($redeemables_limit)) {
            throw new \InvalidArgumentException('non-nullable redeemables_limit cannot be null');
        }

        if (($redeemables_limit > 30)) {
            throw new \InvalidArgumentException('invalid value for $redeemables_limit when calling StackingRules., must be smaller than or equal to 30.');
        }
        if (($redeemables_limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $redeemables_limit when calling StackingRules., must be bigger than or equal to 1.');
        }

        $this->container['redeemables_limit'] = $redeemables_limit;

        return $this;
    }

    /**
     * Gets applicable_redeemables_limit
     *
     * @return int
     */
    public function getApplicableRedeemablesLimit()
    {
        return $this->container['applicable_redeemables_limit'];
    }

    /**
     * Sets applicable_redeemables_limit
     *
     * @param int $applicable_redeemables_limit Defines how many of the sent redeemables will be applied to the order. For example, a user can select 30 discounts but only 5 will be applied to the order and the remaining will be labelled as SKIPPED.
     *
     * @return self
     */
    public function setApplicableRedeemablesLimit($applicable_redeemables_limit)
    {
        if (is_null($applicable_redeemables_limit)) {
            throw new \InvalidArgumentException('non-nullable applicable_redeemables_limit cannot be null');
        }

        if (($applicable_redeemables_limit > 30)) {
            throw new \InvalidArgumentException('invalid value for $applicable_redeemables_limit when calling StackingRules., must be smaller than or equal to 30.');
        }
        if (($applicable_redeemables_limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $applicable_redeemables_limit when calling StackingRules., must be bigger than or equal to 1.');
        }

        $this->container['applicable_redeemables_limit'] = $applicable_redeemables_limit;

        return $this;
    }

    /**
     * Gets applicable_exclusive_redeemables_limit
     *
     * @return int
     */
    public function getApplicableExclusiveRedeemablesLimit()
    {
        return $this->container['applicable_exclusive_redeemables_limit'];
    }

    /**
     * Sets applicable_exclusive_redeemables_limit
     *
     * @param int $applicable_exclusive_redeemables_limit Defines how many redeemables with an exclusive category can be applied in one request.
     *
     * @return self
     */
    public function setApplicableExclusiveRedeemablesLimit($applicable_exclusive_redeemables_limit)
    {
        if (is_null($applicable_exclusive_redeemables_limit)) {
            throw new \InvalidArgumentException('non-nullable applicable_exclusive_redeemables_limit cannot be null');
        }

        if (($applicable_exclusive_redeemables_limit > 30)) {
            throw new \InvalidArgumentException('invalid value for $applicable_exclusive_redeemables_limit when calling StackingRules., must be smaller than or equal to 30.');
        }
        if (($applicable_exclusive_redeemables_limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $applicable_exclusive_redeemables_limit when calling StackingRules., must be bigger than or equal to 1.');
        }

        $this->container['applicable_exclusive_redeemables_limit'] = $applicable_exclusive_redeemables_limit;

        return $this;
    }

    /**
     * Gets applicable_redeemables_per_category_limit
     *
     * @return int|null
     */
    public function getApplicableRedeemablesPerCategoryLimit()
    {
        return $this->container['applicable_redeemables_per_category_limit'];
    }

    /**
     * Sets applicable_redeemables_per_category_limit
     *
     * @param int|null $applicable_redeemables_per_category_limit Defines how many redeemables per category can be applied in one request.
     *
     * @return self
     */
    public function setApplicableRedeemablesPerCategoryLimit($applicable_redeemables_per_category_limit)
    {
        if (is_null($applicable_redeemables_per_category_limit)) {
            throw new \InvalidArgumentException('non-nullable applicable_redeemables_per_category_limit cannot be null');
        }

        if (($applicable_redeemables_per_category_limit > 30)) {
            throw new \InvalidArgumentException('invalid value for $applicable_redeemables_per_category_limit when calling StackingRules., must be smaller than or equal to 30.');
        }
        if (($applicable_redeemables_per_category_limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $applicable_redeemables_per_category_limit when calling StackingRules., must be bigger than or equal to 1.');
        }

        $this->container['applicable_redeemables_per_category_limit'] = $applicable_redeemables_per_category_limit;

        return $this;
    }

    /**
     * Gets exclusive_categories
     *
     * @return string[]
     */
    public function getExclusiveCategories()
    {
        return $this->container['exclusive_categories'];
    }

    /**
     * Sets exclusive_categories
     *
     * @param string[] $exclusive_categories Lists all exclusive categories. A redeemable from a campaign with an exclusive category is the only redeemable to be redeemed when applied with redeemables from other campaigns unless these campaigns are exclusive or joint.
     *
     * @return self
     */
    public function setExclusiveCategories($exclusive_categories)
    {
        if (is_null($exclusive_categories)) {
            throw new \InvalidArgumentException('non-nullable exclusive_categories cannot be null');
        }
        $this->container['exclusive_categories'] = $exclusive_categories;

        return $this;
    }

    /**
     * Gets joint_categories
     *
     * @return string[]
     */
    public function getJointCategories()
    {
        return $this->container['joint_categories'];
    }

    /**
     * Sets joint_categories
     *
     * @param string[] $joint_categories Lists all joint categories. A campaign with a joint category is always applied regardless of the exclusivity of other campaigns.
     *
     * @return self
     */
    public function setJointCategories($joint_categories)
    {
        if (is_null($joint_categories)) {
            throw new \InvalidArgumentException('non-nullable joint_categories cannot be null');
        }
        $this->container['joint_categories'] = $joint_categories;

        return $this;
    }

    /**
     * Gets redeemables_application_mode
     *
     * @return string|null
     */
    public function getRedeemablesApplicationMode()
    {
        return $this->container['redeemables_application_mode'];
    }

    /**
     * Sets redeemables_application_mode
     *
     * @param string|null $redeemables_application_mode Defines redeemables application mode.
     *
     * @return self
     */
    public function setRedeemablesApplicationMode($redeemables_application_mode)
    {
        if (is_null($redeemables_application_mode)) {
            throw new \InvalidArgumentException('non-nullable redeemables_application_mode cannot be null');
        }
        $allowedValues = $this->getRedeemablesApplicationModeAllowableValues();
        if (!in_array($redeemables_application_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'redeemables_application_mode', must be one of '%s'",
                    $redeemables_application_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redeemables_application_mode'] = $redeemables_application_mode;

        return $this;
    }

    /**
     * Gets redeemables_sorting_rule
     *
     * @return string|null
     */
    public function getRedeemablesSortingRule()
    {
        return $this->container['redeemables_sorting_rule'];
    }

    /**
     * Sets redeemables_sorting_rule
     *
     * @param string|null $redeemables_sorting_rule Defines redeemables sorting rule.
     *
     * @return self
     */
    public function setRedeemablesSortingRule($redeemables_sorting_rule)
    {
        if (is_null($redeemables_sorting_rule)) {
            throw new \InvalidArgumentException('non-nullable redeemables_sorting_rule cannot be null');
        }
        $allowedValues = $this->getRedeemablesSortingRuleAllowableValues();
        if (!in_array($redeemables_sorting_rule, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'redeemables_sorting_rule', must be one of '%s'",
                    $redeemables_sorting_rule,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['redeemables_sorting_rule'] = $redeemables_sorting_rule;

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


