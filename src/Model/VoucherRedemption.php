<?php
/**
 * VoucherRedemption
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
 * VoucherRedemption Class Doc Comment
 *
 * @category Class
 * @description Stores a summary of redemptions that have been applied to the voucher.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VoucherRedemption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
<<<<<<< Updated upstream
<<<<<<<< Updated upstream:src/Model/VoucherRedemption.php
    protected static $openAPIModelName = 'Voucher_redemption';
========
    protected static $openAPIModelName = 'CampaignsVouchersCreateCombinedResponseBodyRedemption';
>>>>>>>> Stashed changes:src/Model/CampaignsVouchersCreateCombinedResponseBodyRedemption.php
=======
    protected static $openAPIModelName = 'VoucherRedemption';
>>>>>>> Stashed changes

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quantity' => 'int',
        'redeemed_quantity' => 'int',
<<<<<<< Updated upstream
        'redeemed_amount' => 'int',
=======
>>>>>>> Stashed changes
        'redeemed_points' => 'int',
        'object' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quantity' => null,
        'redeemed_quantity' => null,
<<<<<<< Updated upstream
        'redeemed_amount' => null,
=======
>>>>>>> Stashed changes
        'redeemed_points' => null,
        'object' => null,
        'url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
<<<<<<< Updated upstream
        'quantity' => false,
		'redeemed_quantity' => false,
		'redeemed_amount' => false,
		'redeemed_points' => false,
		'object' => false,
		'url' => false
=======
        'quantity' => true,
		'redeemed_quantity' => true,
		'redeemed_points' => true,
		'object' => true,
		'url' => true
>>>>>>> Stashed changes
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
        'quantity' => 'quantity',
        'redeemed_quantity' => 'redeemed_quantity',
<<<<<<< Updated upstream
        'redeemed_amount' => 'redeemed_amount',
=======
>>>>>>> Stashed changes
        'redeemed_points' => 'redeemed_points',
        'object' => 'object',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'redeemed_quantity' => 'setRedeemedQuantity',
<<<<<<< Updated upstream
        'redeemed_amount' => 'setRedeemedAmount',
=======
>>>>>>> Stashed changes
        'redeemed_points' => 'setRedeemedPoints',
        'object' => 'setObject',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'redeemed_quantity' => 'getRedeemedQuantity',
<<<<<<< Updated upstream
        'redeemed_amount' => 'getRedeemedAmount',
=======
>>>>>>> Stashed changes
        'redeemed_points' => 'getRedeemedPoints',
        'object' => 'getObject',
        'url' => 'getUrl'
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
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('redeemed_quantity', $data ?? [], null);
<<<<<<< Updated upstream
        $this->setIfExists('redeemed_amount', $data ?? [], null);
=======
>>>>>>> Stashed changes
        $this->setIfExists('redeemed_points', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'list');
        $this->setIfExists('url', $data ?? [], null);
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
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity How many times a voucher can be redeemed. A `null` value means unlimited.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
<<<<<<< Updated upstream
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
=======
            array_push($this->openAPINullablesSetToNull, 'quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
>>>>>>> Stashed changes
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets redeemed_quantity
     *
     * @return int|null
     */
    public function getRedeemedQuantity()
    {
        return $this->container['redeemed_quantity'];
    }

    /**
     * Sets redeemed_quantity
     *
     * @param int|null $redeemed_quantity How many times a voucher has already been redeemed.
     *
     * @return self
     */
    public function setRedeemedQuantity($redeemed_quantity)
    {
        if (is_null($redeemed_quantity)) {
<<<<<<< Updated upstream
            throw new \InvalidArgumentException('non-nullable redeemed_quantity cannot be null');
=======
            array_push($this->openAPINullablesSetToNull, 'redeemed_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemed_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
>>>>>>> Stashed changes
        }
        $this->container['redeemed_quantity'] = $redeemed_quantity;

        return $this;
    }

    /**
<<<<<<< Updated upstream
     * Gets redeemed_amount
     *
     * @return int|null
     */
    public function getRedeemedAmount()
    {
        return $this->container['redeemed_amount'];
    }

    /**
     * Sets redeemed_amount
     *
     * @param int|null $redeemed_amount Total amount redeemed. Value is multiplied by 100 to precisely represent 2 decimal places. For example, $100 balance is written as 10000.
     *
     * @return self
     */
    public function setRedeemedAmount($redeemed_amount)
    {
        if (is_null($redeemed_amount)) {
            throw new \InvalidArgumentException('non-nullable redeemed_amount cannot be null');
        }
        $this->container['redeemed_amount'] = $redeemed_amount;

        return $this;
    }

    /**
=======
>>>>>>> Stashed changes
     * Gets redeemed_points
     *
     * @return int|null
     */
    public function getRedeemedPoints()
    {
        return $this->container['redeemed_points'];
    }

    /**
     * Sets redeemed_points
     *
     * @param int|null $redeemed_points Total loyalty points redeemed.
     *
     * @return self
     */
    public function setRedeemedPoints($redeemed_points)
    {
        if (is_null($redeemed_points)) {
<<<<<<< Updated upstream
            throw new \InvalidArgumentException('non-nullable redeemed_points cannot be null');
=======
            array_push($this->openAPINullablesSetToNull, 'redeemed_points');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redeemed_points', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
>>>>>>> Stashed changes
        }
        $this->container['redeemed_points'] = $redeemed_points;

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
<<<<<<< Updated upstream
     * @param string|null $object The type of object represented is by default `list`. To get this list, you need to make a call to the endpoint returned in the url attribute.
=======
     * @param string|null $object The type of the object represented is by default `list`. To get this list, you need to make a call to the endpoint returned in the url attribute.
>>>>>>> Stashed changes
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
<<<<<<< Updated upstream
            throw new \InvalidArgumentException('non-nullable object cannot be null');
=======
            array_push($this->openAPINullablesSetToNull, 'object');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('object', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
>>>>>>> Stashed changes
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The endpoint where this list of redemptions can be accessed using a GET method. `/v1/vouchers/{voucher_code}/redemptions`
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
<<<<<<< Updated upstream
            throw new \InvalidArgumentException('non-nullable url cannot be null');
=======
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
>>>>>>> Stashed changes
        }
        $this->container['url'] = $url;

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


