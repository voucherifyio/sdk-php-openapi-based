<?php
/**
 * VoucherTransactionDetails
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
 * VoucherTransactionDetails Class Doc Comment
 *
 * @category Class
 * @description Contains the detailed information about the transaction.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VoucherTransactionDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherTransactionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance' => '\OpenAPI\Client\Model\VoucherTransactionDetailsBalance',
        'order' => '\OpenAPI\Client\Model\VoucherTransactionDetailsOrder',
        'event' => '\OpenAPI\Client\Model\VoucherTransactionDetailsEvent',
        'earning_rule' => '\OpenAPI\Client\Model\VoucherTransactionDetailsEarningRule',
        'segment' => '\OpenAPI\Client\Model\VoucherTransactionDetailsSegment',
        'loyalty_tier' => '\OpenAPI\Client\Model\VoucherTransactionDetailsLoyaltyTier',
        'redemption' => '\OpenAPI\Client\Model\VoucherTransactionDetailsRedemption',
        'rollback' => '\OpenAPI\Client\Model\VoucherTransactionDetailsRollback',
        'custom_event' => '\OpenAPI\Client\Model\VoucherTransactionDetailsCustomEvent',
        'event_schema' => '\OpenAPI\Client\Model\VoucherTransactionDetailsEventSchema',
        'reward' => '\OpenAPI\Client\Model\VoucherTransactionDetailsReward',
        'source_voucher' => '\OpenAPI\Client\Model\SimpleVoucher',
        'destination_voucher' => '\OpenAPI\Client\Model\SimpleVoucher'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance' => null,
        'order' => null,
        'event' => null,
        'earning_rule' => null,
        'segment' => null,
        'loyalty_tier' => null,
        'redemption' => null,
        'rollback' => null,
        'custom_event' => null,
        'event_schema' => null,
        'reward' => null,
        'source_voucher' => null,
        'destination_voucher' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'balance' => false,
		'order' => false,
		'event' => false,
		'earning_rule' => false,
		'segment' => false,
		'loyalty_tier' => false,
		'redemption' => false,
		'rollback' => false,
		'custom_event' => false,
		'event_schema' => false,
		'reward' => false,
		'source_voucher' => false,
		'destination_voucher' => false
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
        'balance' => 'balance',
        'order' => 'order',
        'event' => 'event',
        'earning_rule' => 'earning_rule',
        'segment' => 'segment',
        'loyalty_tier' => 'loyalty_tier',
        'redemption' => 'redemption',
        'rollback' => 'rollback',
        'custom_event' => 'custom_event',
        'event_schema' => 'event_schema',
        'reward' => 'reward',
        'source_voucher' => 'source_voucher',
        'destination_voucher' => 'destination_voucher'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'order' => 'setOrder',
        'event' => 'setEvent',
        'earning_rule' => 'setEarningRule',
        'segment' => 'setSegment',
        'loyalty_tier' => 'setLoyaltyTier',
        'redemption' => 'setRedemption',
        'rollback' => 'setRollback',
        'custom_event' => 'setCustomEvent',
        'event_schema' => 'setEventSchema',
        'reward' => 'setReward',
        'source_voucher' => 'setSourceVoucher',
        'destination_voucher' => 'setDestinationVoucher'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'order' => 'getOrder',
        'event' => 'getEvent',
        'earning_rule' => 'getEarningRule',
        'segment' => 'getSegment',
        'loyalty_tier' => 'getLoyaltyTier',
        'redemption' => 'getRedemption',
        'rollback' => 'getRollback',
        'custom_event' => 'getCustomEvent',
        'event_schema' => 'getEventSchema',
        'reward' => 'getReward',
        'source_voucher' => 'getSourceVoucher',
        'destination_voucher' => 'getDestinationVoucher'
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
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('earning_rule', $data ?? [], null);
        $this->setIfExists('segment', $data ?? [], null);
        $this->setIfExists('loyalty_tier', $data ?? [], null);
        $this->setIfExists('redemption', $data ?? [], null);
        $this->setIfExists('rollback', $data ?? [], null);
        $this->setIfExists('custom_event', $data ?? [], null);
        $this->setIfExists('event_schema', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('source_voucher', $data ?? [], null);
        $this->setIfExists('destination_voucher', $data ?? [], null);
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
     * Gets balance
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsBalance|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsBalance|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsOrder|null $order order
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
     * Gets event
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsEvent|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsEvent|null $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets earning_rule
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsEarningRule|null
     */
    public function getEarningRule()
    {
        return $this->container['earning_rule'];
    }

    /**
     * Sets earning_rule
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsEarningRule|null $earning_rule earning_rule
     *
     * @return self
     */
    public function setEarningRule($earning_rule)
    {
        if (is_null($earning_rule)) {
            throw new \InvalidArgumentException('non-nullable earning_rule cannot be null');
        }
        $this->container['earning_rule'] = $earning_rule;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsSegment|null
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsSegment|null $segment segment
     *
     * @return self
     */
    public function setSegment($segment)
    {
        if (is_null($segment)) {
            throw new \InvalidArgumentException('non-nullable segment cannot be null');
        }
        $this->container['segment'] = $segment;

        return $this;
    }

    /**
     * Gets loyalty_tier
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsLoyaltyTier|null
     */
    public function getLoyaltyTier()
    {
        return $this->container['loyalty_tier'];
    }

    /**
     * Sets loyalty_tier
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsLoyaltyTier|null $loyalty_tier loyalty_tier
     *
     * @return self
     */
    public function setLoyaltyTier($loyalty_tier)
    {
        if (is_null($loyalty_tier)) {
            throw new \InvalidArgumentException('non-nullable loyalty_tier cannot be null');
        }
        $this->container['loyalty_tier'] = $loyalty_tier;

        return $this;
    }

    /**
     * Gets redemption
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsRedemption|null
     */
    public function getRedemption()
    {
        return $this->container['redemption'];
    }

    /**
     * Sets redemption
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsRedemption|null $redemption redemption
     *
     * @return self
     */
    public function setRedemption($redemption)
    {
        if (is_null($redemption)) {
            throw new \InvalidArgumentException('non-nullable redemption cannot be null');
        }
        $this->container['redemption'] = $redemption;

        return $this;
    }

    /**
     * Gets rollback
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsRollback|null
     */
    public function getRollback()
    {
        return $this->container['rollback'];
    }

    /**
     * Sets rollback
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsRollback|null $rollback rollback
     *
     * @return self
     */
    public function setRollback($rollback)
    {
        if (is_null($rollback)) {
            throw new \InvalidArgumentException('non-nullable rollback cannot be null');
        }
        $this->container['rollback'] = $rollback;

        return $this;
    }

    /**
     * Gets custom_event
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsCustomEvent|null
     */
    public function getCustomEvent()
    {
        return $this->container['custom_event'];
    }

    /**
     * Sets custom_event
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsCustomEvent|null $custom_event custom_event
     *
     * @return self
     */
    public function setCustomEvent($custom_event)
    {
        if (is_null($custom_event)) {
            throw new \InvalidArgumentException('non-nullable custom_event cannot be null');
        }
        $this->container['custom_event'] = $custom_event;

        return $this;
    }

    /**
     * Gets event_schema
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsEventSchema|null
     */
    public function getEventSchema()
    {
        return $this->container['event_schema'];
    }

    /**
     * Sets event_schema
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsEventSchema|null $event_schema event_schema
     *
     * @return self
     */
    public function setEventSchema($event_schema)
    {
        if (is_null($event_schema)) {
            throw new \InvalidArgumentException('non-nullable event_schema cannot be null');
        }
        $this->container['event_schema'] = $event_schema;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return \OpenAPI\Client\Model\VoucherTransactionDetailsReward|null
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param \OpenAPI\Client\Model\VoucherTransactionDetailsReward|null $reward reward
     *
     * @return self
     */
    public function setReward($reward)
    {
        if (is_null($reward)) {
            throw new \InvalidArgumentException('non-nullable reward cannot be null');
        }
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets source_voucher
     *
     * @return \OpenAPI\Client\Model\SimpleVoucher|null
     */
    public function getSourceVoucher()
    {
        return $this->container['source_voucher'];
    }

    /**
     * Sets source_voucher
     *
     * @param \OpenAPI\Client\Model\SimpleVoucher|null $source_voucher source_voucher
     *
     * @return self
     */
    public function setSourceVoucher($source_voucher)
    {
        if (is_null($source_voucher)) {
            throw new \InvalidArgumentException('non-nullable source_voucher cannot be null');
        }
        $this->container['source_voucher'] = $source_voucher;

        return $this;
    }

    /**
     * Gets destination_voucher
     *
     * @return \OpenAPI\Client\Model\SimpleVoucher|null
     */
    public function getDestinationVoucher()
    {
        return $this->container['destination_voucher'];
    }

    /**
     * Sets destination_voucher
     *
     * @param \OpenAPI\Client\Model\SimpleVoucher|null $destination_voucher destination_voucher
     *
     * @return self
     */
    public function setDestinationVoucher($destination_voucher)
    {
        if (is_null($destination_voucher)) {
            throw new \InvalidArgumentException('non-nullable destination_voucher cannot be null');
        }
        $this->container['destination_voucher'] = $destination_voucher;

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


