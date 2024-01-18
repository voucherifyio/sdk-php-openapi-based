<?php
/**
 * ValidationsValidateResponseBody
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
 * ValidationsValidateResponseBody Class Doc Comment
 *
 * @category Class
 * @description Response body schema for POST &#x60;/validations&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ValidationsValidateResponseBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ValidationsValidateResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'valid' => 'bool',
        'redeemables' => '\OpenAPI\Client\Model\ValidationsValidateResponseBodyRedeemablesItem[]',
        'skipped_redeemables' => 'ValidationsRedeemableInapplicable[]',
        'inapplicable_redeemables' => 'ValidationsRedeemableInapplicable[]',
        'order' => '\OpenAPI\Client\Model\OrderCalculated',
        'tracking_id' => 'string',
        'session' => '\OpenAPI\Client\Model\Session',
        'stacking_rules' => '\OpenAPI\Client\Model\StackingRules'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'valid' => null,
        'redeemables' => null,
        'skipped_redeemables' => null,
        'inapplicable_redeemables' => null,
        'order' => null,
        'tracking_id' => null,
        'session' => null,
        'stacking_rules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'valid' => false,
		'redeemables' => false,
		'skipped_redeemables' => false,
		'inapplicable_redeemables' => false,
		'order' => false,
		'tracking_id' => false,
		'session' => false,
		'stacking_rules' => false
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
        'valid' => 'valid',
        'redeemables' => 'redeemables',
        'skipped_redeemables' => 'skipped_redeemables',
        'inapplicable_redeemables' => 'inapplicable_redeemables',
        'order' => 'order',
        'tracking_id' => 'tracking_id',
        'session' => 'session',
        'stacking_rules' => 'stacking_rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valid' => 'setValid',
        'redeemables' => 'setRedeemables',
        'skipped_redeemables' => 'setSkippedRedeemables',
        'inapplicable_redeemables' => 'setInapplicableRedeemables',
        'order' => 'setOrder',
        'tracking_id' => 'setTrackingId',
        'session' => 'setSession',
        'stacking_rules' => 'setStackingRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valid' => 'getValid',
        'redeemables' => 'getRedeemables',
        'skipped_redeemables' => 'getSkippedRedeemables',
        'inapplicable_redeemables' => 'getInapplicableRedeemables',
        'order' => 'getOrder',
        'tracking_id' => 'getTrackingId',
        'session' => 'getSession',
        'stacking_rules' => 'getStackingRules'
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
        $this->setIfExists('valid', $data ?? [], null);
        $this->setIfExists('redeemables', $data ?? [], null);
        $this->setIfExists('skipped_redeemables', $data ?? [], null);
        $this->setIfExists('inapplicable_redeemables', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('tracking_id', $data ?? [], null);
        $this->setIfExists('session', $data ?? [], null);
        $this->setIfExists('stacking_rules', $data ?? [], null);
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

        if ($this->container['valid'] === null) {
            $invalidProperties[] = "'valid' can't be null";
        }
        if ($this->container['redeemables'] === null) {
            $invalidProperties[] = "'redeemables' can't be null";
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
     * Gets valid
     *
     * @return bool
     */
    public function getValid()
    {
        return $this->container['valid'];
    }

    /**
     * Sets valid
     *
     * @param bool $valid The result of the validation. It takes all of the redeemables into account and returns a `false` if at least one redeemable is inapplicable. Returns `true` if all redeemables are applicable.
     *
     * @return self
     */
    public function setValid($valid)
    {
        if (is_null($valid)) {
            throw new \InvalidArgumentException('non-nullable valid cannot be null');
        }
        $this->container['valid'] = $valid;

        return $this;
    }

    /**
     * Gets redeemables
     *
     * @return \OpenAPI\Client\Model\ValidationsValidateResponseBodyRedeemablesItem[]
     */
    public function getRedeemables()
    {
        return $this->container['redeemables'];
    }

    /**
     * Sets redeemables
     *
     * @param \OpenAPI\Client\Model\ValidationsValidateResponseBodyRedeemablesItem[] $redeemables redeemables
     *
     * @return self
     */
    public function setRedeemables($redeemables)
    {
        if (is_null($redeemables)) {
            throw new \InvalidArgumentException('non-nullable redeemables cannot be null');
        }
        $this->container['redeemables'] = $redeemables;

        return $this;
    }

    /**
     * Gets skipped_redeemables
     *
     * @return ValidationsRedeemableInapplicable[]|null
     */
    public function getSkippedRedeemables()
    {
        return $this->container['skipped_redeemables'];
    }

    /**
     * Sets skipped_redeemables
     *
     * @param ValidationsRedeemableInapplicable[]|null $skipped_redeemables Lists validation results of each skipped redeemable.
     *
     * @return self
     */
    public function setSkippedRedeemables($skipped_redeemables)
    {
        if (is_null($skipped_redeemables)) {
            throw new \InvalidArgumentException('non-nullable skipped_redeemables cannot be null');
        }
        $this->container['skipped_redeemables'] = $skipped_redeemables;

        return $this;
    }

    /**
     * Gets inapplicable_redeemables
     *
     * @return ValidationsRedeemableInapplicable[]|null
     */
    public function getInapplicableRedeemables()
    {
        return $this->container['inapplicable_redeemables'];
    }

    /**
     * Sets inapplicable_redeemables
     *
     * @param ValidationsRedeemableInapplicable[]|null $inapplicable_redeemables Lists validation results of each inapplicable redeemable.
     *
     * @return self
     */
    public function setInapplicableRedeemables($inapplicable_redeemables)
    {
        if (is_null($inapplicable_redeemables)) {
            throw new \InvalidArgumentException('non-nullable inapplicable_redeemables cannot be null');
        }
        $this->container['inapplicable_redeemables'] = $inapplicable_redeemables;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\OrderCalculated|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\OrderCalculated|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string|null
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string|null $tracking_id Hashed customer source ID.
     *
     * @return self
     */
    public function setTrackingId($tracking_id)
    {
        if (is_null($tracking_id)) {
            throw new \InvalidArgumentException('non-nullable tracking_id cannot be null');
        }
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets session
     *
     * @return \OpenAPI\Client\Model\Session|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param \OpenAPI\Client\Model\Session|null $session session
     *
     * @return self
     */
    public function setSession($session)
    {
        if (is_null($session)) {
            throw new \InvalidArgumentException('non-nullable session cannot be null');
        }
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets stacking_rules
     *
     * @return \OpenAPI\Client\Model\StackingRules|null
     */
    public function getStackingRules()
    {
        return $this->container['stacking_rules'];
    }

    /**
     * Sets stacking_rules
     *
     * @param \OpenAPI\Client\Model\StackingRules|null $stacking_rules stacking_rules
     *
     * @return self
     */
    public function setStackingRules($stacking_rules)
    {
        if (is_null($stacking_rules)) {
            throw new \InvalidArgumentException('non-nullable stacking_rules cannot be null');
        }
        $this->container['stacking_rules'] = $stacking_rules;

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


