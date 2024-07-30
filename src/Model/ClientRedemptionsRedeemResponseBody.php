<?php
/**
 * ClientRedemptionsRedeemResponseBody
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
 * ClientRedemptionsRedeemResponseBody Class Doc Comment
 *
 * @category Class
 * @description Response body schema for **POST** &#x60;/redemptions&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientRedemptionsRedeemResponseBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientRedemptionsRedeemResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'redemptions' => '\OpenAPI\Client\Model\Redemption[]',
        'parent_redemption' => '\OpenAPI\Client\Model\Redemption',
        'order' => '\OpenAPI\Client\Model\OrderCalculated',
        'inapplicable_redeemables' => '\OpenAPI\Client\Model\ValidationsRedeemableInapplicable[]',
        'skipped_redeemables' => '\OpenAPI\Client\Model\ValidationsRedeemableSkipped[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'redemptions' => null,
        'parent_redemption' => null,
        'order' => null,
        'inapplicable_redeemables' => null,
        'skipped_redeemables' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'redemptions' => true,
		'parent_redemption' => false,
		'order' => false,
		'inapplicable_redeemables' => true,
		'skipped_redeemables' => true
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
        'redemptions' => 'redemptions',
        'parent_redemption' => 'parent_redemption',
        'order' => 'order',
        'inapplicable_redeemables' => 'inapplicable_redeemables',
        'skipped_redeemables' => 'skipped_redeemables'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'redemptions' => 'setRedemptions',
        'parent_redemption' => 'setParentRedemption',
        'order' => 'setOrder',
        'inapplicable_redeemables' => 'setInapplicableRedeemables',
        'skipped_redeemables' => 'setSkippedRedeemables'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'redemptions' => 'getRedemptions',
        'parent_redemption' => 'getParentRedemption',
        'order' => 'getOrder',
        'inapplicable_redeemables' => 'getInapplicableRedeemables',
        'skipped_redeemables' => 'getSkippedRedeemables'
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
        $this->setIfExists('redemptions', $data ?? [], null);
        $this->setIfExists('parent_redemption', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('inapplicable_redeemables', $data ?? [], null);
        $this->setIfExists('skipped_redeemables', $data ?? [], null);
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
     * Gets redemptions
     *
     * @return \OpenAPI\Client\Model\Redemption[]|null
     */
    public function getRedemptions()
    {
        return $this->container['redemptions'];
    }

    /**
     * Sets redemptions
     *
     * @param \OpenAPI\Client\Model\Redemption[]|null $redemptions redemptions
     *
     * @return self
     */
    public function setRedemptions($redemptions)
    {
        if (is_null($redemptions)) {
            array_push($this->openAPINullablesSetToNull, 'redemptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redemptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redemptions'] = $redemptions;

        return $this;
    }

    /**
     * Gets parent_redemption
     *
     * @return \OpenAPI\Client\Model\Redemption|null
     */
    public function getParentRedemption()
    {
        return $this->container['parent_redemption'];
    }

    /**
     * Sets parent_redemption
     *
     * @param \OpenAPI\Client\Model\Redemption|null $parent_redemption parent_redemption
     *
     * @return self
     */
    public function setParentRedemption($parent_redemption)
    {
        if (is_null($parent_redemption)) {
            throw new \InvalidArgumentException('non-nullable parent_redemption cannot be null');
        }
        $this->container['parent_redemption'] = $parent_redemption;

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
     * Gets inapplicable_redeemables
     *
     * @return \OpenAPI\Client\Model\ValidationsRedeemableInapplicable[]|null
     */
    public function getInapplicableRedeemables()
    {
        return $this->container['inapplicable_redeemables'];
    }

    /**
     * Sets inapplicable_redeemables
     *
     * @param \OpenAPI\Client\Model\ValidationsRedeemableInapplicable[]|null $inapplicable_redeemables Lists validation results of each inapplicable redeemable.
     *
     * @return self
     */
    public function setInapplicableRedeemables($inapplicable_redeemables)
    {
        if (is_null($inapplicable_redeemables)) {
            array_push($this->openAPINullablesSetToNull, 'inapplicable_redeemables');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inapplicable_redeemables', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['inapplicable_redeemables'] = $inapplicable_redeemables;

        return $this;
    }

    /**
     * Gets skipped_redeemables
     *
     * @return \OpenAPI\Client\Model\ValidationsRedeemableSkipped[]|null
     */
    public function getSkippedRedeemables()
    {
        return $this->container['skipped_redeemables'];
    }

    /**
     * Sets skipped_redeemables
     *
     * @param \OpenAPI\Client\Model\ValidationsRedeemableSkipped[]|null $skipped_redeemables Lists validation results of each redeemable. If a redeemable can be applied, the API returns `\"status\": \"APPLICABLE\"`.
     *
     * @return self
     */
    public function setSkippedRedeemables($skipped_redeemables)
    {
        if (is_null($skipped_redeemables)) {
            array_push($this->openAPINullablesSetToNull, 'skipped_redeemables');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('skipped_redeemables', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['skipped_redeemables'] = $skipped_redeemables;

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


