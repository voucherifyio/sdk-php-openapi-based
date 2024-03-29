<?php
/**
 * LoyaltiesMembersRedemptionRedeemResponseBody
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
 * LoyaltiesMembersRedemptionRedeemResponseBody Class Doc Comment
 *
 * @category Class
 * @description Response body schema for **POST** &#x60;/loyalties/{campaignId}/members/{memberId}/redemption&#x60; and for **POST** &#x60;/loyalties/members/{memberId}/redemption&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltiesMembersRedemptionRedeemResponseBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltiesMembersRedemptionRedeemResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'object' => 'string',
        'date' => '\DateTime',
        'customer_id' => 'string',
        'tracking_id' => 'string',
        'metadata' => 'object',
        'amount' => 'int',
        'redemption' => 'string',
        'result' => 'string',
        'status' => 'string',
        'related_redemptions' => '\OpenAPI\Client\Model\RedemptionRelatedRedemptions',
        'failure_code' => 'string',
        'failure_message' => 'string',
        'order' => '\OpenAPI\Client\Model\OrderCalculatedNoCustomerData',
        'channel' => '\OpenAPI\Client\Model\RedemptionChannel',
        'customer' => '\OpenAPI\Client\Model\SimpleCustomer',
        'related_object_type' => 'string',
        'related_object_id' => 'string',
        'voucher' => '\OpenAPI\Client\Model\Voucher',
        'promotion_tier' => '\OpenAPI\Client\Model\PromotionTier',
        'reward' => '\OpenAPI\Client\Model\RedemptionRewardResult',
        'gift' => '\OpenAPI\Client\Model\RedemptionGift',
        'loyalty_card' => '\OpenAPI\Client\Model\RedemptionLoyaltyCard'
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
        'object' => null,
        'date' => 'date-time',
        'customer_id' => null,
        'tracking_id' => null,
        'metadata' => null,
        'amount' => null,
        'redemption' => null,
        'result' => null,
        'status' => null,
        'related_redemptions' => null,
        'failure_code' => null,
        'failure_message' => null,
        'order' => null,
        'channel' => null,
        'customer' => null,
        'related_object_type' => null,
        'related_object_id' => null,
        'voucher' => null,
        'promotion_tier' => null,
        'reward' => null,
        'gift' => null,
        'loyalty_card' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'object' => false,
		'date' => false,
		'customer_id' => true,
		'tracking_id' => true,
		'metadata' => true,
		'amount' => false,
		'redemption' => true,
		'result' => false,
		'status' => false,
		'related_redemptions' => false,
		'failure_code' => false,
		'failure_message' => false,
		'order' => true,
		'channel' => false,
		'customer' => true,
		'related_object_type' => false,
		'related_object_id' => false,
		'voucher' => false,
		'promotion_tier' => false,
		'reward' => false,
		'gift' => false,
		'loyalty_card' => false
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
        'object' => 'object',
        'date' => 'date',
        'customer_id' => 'customer_id',
        'tracking_id' => 'tracking_id',
        'metadata' => 'metadata',
        'amount' => 'amount',
        'redemption' => 'redemption',
        'result' => 'result',
        'status' => 'status',
        'related_redemptions' => 'related_redemptions',
        'failure_code' => 'failure_code',
        'failure_message' => 'failure_message',
        'order' => 'order',
        'channel' => 'channel',
        'customer' => 'customer',
        'related_object_type' => 'related_object_type',
        'related_object_id' => 'related_object_id',
        'voucher' => 'voucher',
        'promotion_tier' => 'promotion_tier',
        'reward' => 'reward',
        'gift' => 'gift',
        'loyalty_card' => 'loyalty_card'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'object' => 'setObject',
        'date' => 'setDate',
        'customer_id' => 'setCustomerId',
        'tracking_id' => 'setTrackingId',
        'metadata' => 'setMetadata',
        'amount' => 'setAmount',
        'redemption' => 'setRedemption',
        'result' => 'setResult',
        'status' => 'setStatus',
        'related_redemptions' => 'setRelatedRedemptions',
        'failure_code' => 'setFailureCode',
        'failure_message' => 'setFailureMessage',
        'order' => 'setOrder',
        'channel' => 'setChannel',
        'customer' => 'setCustomer',
        'related_object_type' => 'setRelatedObjectType',
        'related_object_id' => 'setRelatedObjectId',
        'voucher' => 'setVoucher',
        'promotion_tier' => 'setPromotionTier',
        'reward' => 'setReward',
        'gift' => 'setGift',
        'loyalty_card' => 'setLoyaltyCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'object' => 'getObject',
        'date' => 'getDate',
        'customer_id' => 'getCustomerId',
        'tracking_id' => 'getTrackingId',
        'metadata' => 'getMetadata',
        'amount' => 'getAmount',
        'redemption' => 'getRedemption',
        'result' => 'getResult',
        'status' => 'getStatus',
        'related_redemptions' => 'getRelatedRedemptions',
        'failure_code' => 'getFailureCode',
        'failure_message' => 'getFailureMessage',
        'order' => 'getOrder',
        'channel' => 'getChannel',
        'customer' => 'getCustomer',
        'related_object_type' => 'getRelatedObjectType',
        'related_object_id' => 'getRelatedObjectId',
        'voucher' => 'getVoucher',
        'promotion_tier' => 'getPromotionTier',
        'reward' => 'getReward',
        'gift' => 'getGift',
        'loyalty_card' => 'getLoyaltyCard'
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

    public const OBJECT_REDEMPTION = 'redemption';
    public const RESULT_SUCCESS = 'SUCCESS';
    public const RESULT_FAILURE = 'FAILURE';
    public const STATUS_SUCCEEDED = 'SUCCEEDED';
    public const STATUS_FAILED = 'FAILED';
    public const STATUS_ROLLED_BACK = 'ROLLED_BACK';
    public const RELATED_OBJECT_TYPE_VOUCHER = 'voucher';
    public const RELATED_OBJECT_TYPE_PROMOTION_TIER = 'promotion_tier';
    public const RELATED_OBJECT_TYPE_REDEMPTION = 'redemption';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_REDEMPTION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCESS,
            self::RESULT_FAILURE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCEEDED,
            self::STATUS_FAILED,
            self::STATUS_ROLLED_BACK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRelatedObjectTypeAllowableValues()
    {
        return [
            self::RELATED_OBJECT_TYPE_VOUCHER,
            self::RELATED_OBJECT_TYPE_PROMOTION_TIER,
            self::RELATED_OBJECT_TYPE_REDEMPTION,
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
        $this->setIfExists('object', $data ?? [], 'redemption');
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('tracking_id', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('redemption', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('related_redemptions', $data ?? [], null);
        $this->setIfExists('failure_code', $data ?? [], null);
        $this->setIfExists('failure_message', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('related_object_type', $data ?? [], null);
        $this->setIfExists('related_object_id', $data ?? [], null);
        $this->setIfExists('voucher', $data ?? [], null);
        $this->setIfExists('promotion_tier', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('gift', $data ?? [], null);
        $this->setIfExists('loyalty_card', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!is_null($this->container['object']) && !in_array($this->container['object'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'object', must be one of '%s'",
                $this->container['object'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['tracking_id'] === null) {
            $invalidProperties[] = "'tracking_id' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['redemption'] === null) {
            $invalidProperties[] = "'redemption' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'result', must be one of '%s'",
                $this->container['result'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['related_object_type'] === null) {
            $invalidProperties[] = "'related_object_type' can't be null";
        }
        $allowedValues = $this->getRelatedObjectTypeAllowableValues();
        if (!is_null($this->container['related_object_type']) && !in_array($this->container['related_object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'related_object_type', must be one of '%s'",
                $this->container['related_object_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['related_object_id'] === null) {
            $invalidProperties[] = "'related_object_id' can't be null";
        }
        if ($this->container['reward'] === null) {
            $invalidProperties[] = "'reward' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique redemption ID.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object The type of object represented by the JSON
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $allowedValues = $this->getObjectAllowableValues();
        if (!in_array($object, $allowedValues, true)) {
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Timestamp representing the date and time when the object was created in ISO 8601 format.
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id Unique customer ID of the redeeming customer.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets tracking_id
     *
     * @return string
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id
     *
     * @param string $tracking_id Hashed customer source ID.
     *
     * @return self
     */
    public function setTrackingId($tracking_id)
    {
        if (is_null($tracking_id)) {
            array_push($this->openAPINullablesSetToNull, 'tracking_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tracking_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object $metadata The metadata object stores all custom attributes assigned to the redemption.
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
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items' amounts.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets redemption
     *
     * @return string
     */
    public function getRedemption()
    {
        return $this->container['redemption'];
    }

    /**
     * Sets redemption
     *
     * @param string $redemption Unique redemption ID of the parent redemption.
     *
     * @return self
     */
    public function setRedemption($redemption)
    {
        if (is_null($redemption)) {
            array_push($this->openAPINullablesSetToNull, 'redemption');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redemption', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redemption'] = $redemption;

        return $this;
    }

    /**
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result Redemption result.
     *
     * @return self
     */
    public function setResult($result)
    {
        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!in_array($result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'result', must be one of '%s'",
                    $result,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Redemption status.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets related_redemptions
     *
     * @return \OpenAPI\Client\Model\RedemptionRelatedRedemptions|null
     */
    public function getRelatedRedemptions()
    {
        return $this->container['related_redemptions'];
    }

    /**
     * Sets related_redemptions
     *
     * @param \OpenAPI\Client\Model\RedemptionRelatedRedemptions|null $related_redemptions related_redemptions
     *
     * @return self
     */
    public function setRelatedRedemptions($related_redemptions)
    {
        if (is_null($related_redemptions)) {
            throw new \InvalidArgumentException('non-nullable related_redemptions cannot be null');
        }
        $this->container['related_redemptions'] = $related_redemptions;

        return $this;
    }

    /**
     * Gets failure_code
     *
     * @return string|null
     */
    public function getFailureCode()
    {
        return $this->container['failure_code'];
    }

    /**
     * Sets failure_code
     *
     * @param string|null $failure_code If the result is `FAILURE`, this parameter will provide a generic reason as to why the redemption failed.
     *
     * @return self
     */
    public function setFailureCode($failure_code)
    {
        if (is_null($failure_code)) {
            throw new \InvalidArgumentException('non-nullable failure_code cannot be null');
        }
        $this->container['failure_code'] = $failure_code;

        return $this;
    }

    /**
     * Gets failure_message
     *
     * @return string|null
     */
    public function getFailureMessage()
    {
        return $this->container['failure_message'];
    }

    /**
     * Sets failure_message
     *
     * @param string|null $failure_message If the result is `FAILURE`, this parameter will provide a more expanded reason as to why the redemption failed.
     *
     * @return self
     */
    public function setFailureMessage($failure_message)
    {
        if (is_null($failure_message)) {
            throw new \InvalidArgumentException('non-nullable failure_message cannot be null');
        }
        $this->container['failure_message'] = $failure_message;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\OrderCalculatedNoCustomerData
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\OrderCalculatedNoCustomerData $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            array_push($this->openAPINullablesSetToNull, 'order');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('order', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \OpenAPI\Client\Model\RedemptionChannel
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \OpenAPI\Client\Model\RedemptionChannel $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\SimpleCustomer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\SimpleCustomer $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            array_push($this->openAPINullablesSetToNull, 'customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets related_object_type
     *
     * @return string
     */
    public function getRelatedObjectType()
    {
        return $this->container['related_object_type'];
    }

    /**
     * Sets related_object_type
     *
     * @param string $related_object_type Defines the related object.
     *
     * @return self
     */
    public function setRelatedObjectType($related_object_type)
    {
        if (is_null($related_object_type)) {
            throw new \InvalidArgumentException('non-nullable related_object_type cannot be null');
        }
        $allowedValues = $this->getRelatedObjectTypeAllowableValues();
        if (!in_array($related_object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'related_object_type', must be one of '%s'",
                    $related_object_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['related_object_type'] = $related_object_type;

        return $this;
    }

    /**
     * Gets related_object_id
     *
     * @return string
     */
    public function getRelatedObjectId()
    {
        return $this->container['related_object_id'];
    }

    /**
     * Sets related_object_id
     *
     * @param string $related_object_id Unique related object ID assigned by Voucherify, i.e. v_lfZi4rcEGe0sN9gmnj40bzwK2FH6QUno for a voucher.
     *
     * @return self
     */
    public function setRelatedObjectId($related_object_id)
    {
        if (is_null($related_object_id)) {
            throw new \InvalidArgumentException('non-nullable related_object_id cannot be null');
        }
        $this->container['related_object_id'] = $related_object_id;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return \OpenAPI\Client\Model\Voucher|null
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param \OpenAPI\Client\Model\Voucher|null $voucher voucher
     *
     * @return self
     */
    public function setVoucher($voucher)
    {
        if (is_null($voucher)) {
            throw new \InvalidArgumentException('non-nullable voucher cannot be null');
        }
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets promotion_tier
     *
     * @return \OpenAPI\Client\Model\PromotionTier|null
     */
    public function getPromotionTier()
    {
        return $this->container['promotion_tier'];
    }

    /**
     * Sets promotion_tier
     *
     * @param \OpenAPI\Client\Model\PromotionTier|null $promotion_tier promotion_tier
     *
     * @return self
     */
    public function setPromotionTier($promotion_tier)
    {
        if (is_null($promotion_tier)) {
            throw new \InvalidArgumentException('non-nullable promotion_tier cannot be null');
        }
        $this->container['promotion_tier'] = $promotion_tier;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return \OpenAPI\Client\Model\RedemptionRewardResult
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param \OpenAPI\Client\Model\RedemptionRewardResult $reward reward
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
     * Gets gift
     *
     * @return \OpenAPI\Client\Model\RedemptionGift|null
     */
    public function getGift()
    {
        return $this->container['gift'];
    }

    /**
     * Sets gift
     *
     * @param \OpenAPI\Client\Model\RedemptionGift|null $gift gift
     *
     * @return self
     */
    public function setGift($gift)
    {
        if (is_null($gift)) {
            throw new \InvalidArgumentException('non-nullable gift cannot be null');
        }
        $this->container['gift'] = $gift;

        return $this;
    }

    /**
     * Gets loyalty_card
     *
     * @return \OpenAPI\Client\Model\RedemptionLoyaltyCard|null
     */
    public function getLoyaltyCard()
    {
        return $this->container['loyalty_card'];
    }

    /**
     * Sets loyalty_card
     *
     * @param \OpenAPI\Client\Model\RedemptionLoyaltyCard|null $loyalty_card loyalty_card
     *
     * @return self
     */
    public function setLoyaltyCard($loyalty_card)
    {
        if (is_null($loyalty_card)) {
            throw new \InvalidArgumentException('non-nullable loyalty_card cannot be null');
        }
        $this->container['loyalty_card'] = $loyalty_card;

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


