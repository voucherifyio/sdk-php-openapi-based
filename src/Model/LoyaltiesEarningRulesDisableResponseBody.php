<?php
/**
 * LoyaltiesEarningRulesDisableResponseBody
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
 * LoyaltiesEarningRulesDisableResponseBody Class Doc Comment
 *
 * @description Response body schema for **POST** &#x60;/loyalties/{campaignId}/earning-rules/{earningRuleId}/disable&#x60;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LoyaltiesEarningRulesDisableResponseBody implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LoyaltiesEarningRulesDisableResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'loyalty' => '\OpenAPI\Client\Model\EarningRuleBaseLoyalty',
        'event' => 'string',
        'custom_event' => '\OpenAPI\Client\Model\EarningRuleBaseCustomEvent',
        'segment' => '\OpenAPI\Client\Model\EarningRuleBaseSegment',
        'source' => '\OpenAPI\Client\Model\EarningRuleBaseSource',
        'object' => 'string',
        'automation_id' => 'string',
        'start_date' => 'string',
        'expiration_date' => 'string',
        'validity_timeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validity_day_of_week' => 'int[]',
        'validity_hours' => '\OpenAPI\Client\Model\ValidityHours',
        'metadata' => 'object',
        'updated_at' => '\DateTime',
        'active' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'created_at' => 'date-time',
        'loyalty' => null,
        'event' => null,
        'custom_event' => null,
        'segment' => null,
        'source' => null,
        'object' => null,
        'automation_id' => null,
        'start_date' => null,
        'expiration_date' => null,
        'validity_timeframe' => null,
        'validity_day_of_week' => null,
        'validity_hours' => null,
        'metadata' => null,
        'updated_at' => 'date-time',
        'active' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => true,
        'created_at' => true,
        'loyalty' => true,
        'event' => true,
        'custom_event' => true,
        'segment' => true,
        'source' => true,
        'object' => true,
        'automation_id' => true,
        'start_date' => true,
        'expiration_date' => true,
        'validity_timeframe' => true,
        'validity_day_of_week' => true,
        'validity_hours' => true,
        'metadata' => true,
        'updated_at' => true,
        'active' => true
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
        'id' => 'id',
        'created_at' => 'created_at',
        'loyalty' => 'loyalty',
        'event' => 'event',
        'custom_event' => 'custom_event',
        'segment' => 'segment',
        'source' => 'source',
        'object' => 'object',
        'automation_id' => 'automation_id',
        'start_date' => 'start_date',
        'expiration_date' => 'expiration_date',
        'validity_timeframe' => 'validity_timeframe',
        'validity_day_of_week' => 'validity_day_of_week',
        'validity_hours' => 'validity_hours',
        'metadata' => 'metadata',
        'updated_at' => 'updated_at',
        'active' => 'active'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'loyalty' => 'setLoyalty',
        'event' => 'setEvent',
        'custom_event' => 'setCustomEvent',
        'segment' => 'setSegment',
        'source' => 'setSource',
        'object' => 'setObject',
        'automation_id' => 'setAutomationId',
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate',
        'validity_timeframe' => 'setValidityTimeframe',
        'validity_day_of_week' => 'setValidityDayOfWeek',
        'validity_hours' => 'setValidityHours',
        'metadata' => 'setMetadata',
        'updated_at' => 'setUpdatedAt',
        'active' => 'setActive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'loyalty' => 'getLoyalty',
        'event' => 'getEvent',
        'custom_event' => 'getCustomEvent',
        'segment' => 'getSegment',
        'source' => 'getSource',
        'object' => 'getObject',
        'automation_id' => 'getAutomationId',
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate',
        'validity_timeframe' => 'getValidityTimeframe',
        'validity_day_of_week' => 'getValidityDayOfWeek',
        'validity_hours' => 'getValidityHours',
        'metadata' => 'getMetadata',
        'updated_at' => 'getUpdatedAt',
        'active' => 'getActive'
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

    public const EVENT_ORDER_PAID = 'order.paid';
    public const EVENT_CUSTOMER_SEGMENT_ENTERED = 'customer.segment.entered';
    public const EVENT_CUSTOM_EVENT = 'custom_event';
    public const EVENT_CUSTOMER_LOYALTY_TIER_UPGRADED = 'customer.loyalty.tier.upgraded';
    public const EVENT_CUSTOMER_LOYALTY_TIER_DOWNGRADED = 'customer.loyalty.tier.downgraded';
    public const EVENT_CUSTOMER_LOYALTY_TIER_PROLONGED = 'customer.loyalty.tier.prolonged';
    public const EVENT_CUSTOMER_LOYALTY_TIER_JOINED = 'customer.loyalty.tier.joined';
    public const EVENT_CUSTOMER_LOYALTY_TIER_LEFT = 'customer.loyalty.tier.left';
    public const OBJECT_EARNING_RULE = 'earning_rule';
    public const VALIDITY_DAY_OF_WEEK_0 = 0;
    public const VALIDITY_DAY_OF_WEEK_1 = 1;
    public const VALIDITY_DAY_OF_WEEK_2 = 2;
    public const VALIDITY_DAY_OF_WEEK_3 = 3;
    public const VALIDITY_DAY_OF_WEEK_4 = 4;
    public const VALIDITY_DAY_OF_WEEK_5 = 5;
    public const VALIDITY_DAY_OF_WEEK_6 = 6;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_ORDER_PAID,
            self::EVENT_CUSTOMER_SEGMENT_ENTERED,
            self::EVENT_CUSTOM_EVENT,
            self::EVENT_CUSTOMER_LOYALTY_TIER_UPGRADED,
            self::EVENT_CUSTOMER_LOYALTY_TIER_DOWNGRADED,
            self::EVENT_CUSTOMER_LOYALTY_TIER_PROLONGED,
            self::EVENT_CUSTOMER_LOYALTY_TIER_JOINED,
            self::EVENT_CUSTOMER_LOYALTY_TIER_LEFT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_EARNING_RULE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValidityDayOfWeekAllowableValues()
    {
        return [
            self::VALIDITY_DAY_OF_WEEK_0,
            self::VALIDITY_DAY_OF_WEEK_1,
            self::VALIDITY_DAY_OF_WEEK_2,
            self::VALIDITY_DAY_OF_WEEK_3,
            self::VALIDITY_DAY_OF_WEEK_4,
            self::VALIDITY_DAY_OF_WEEK_5,
            self::VALIDITY_DAY_OF_WEEK_6,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('loyalty', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('custom_event', $data ?? [], null);
        $this->setIfExists('segment', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'earning_rule');
        $this->setIfExists('automation_id', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('validity_timeframe', $data ?? [], null);
        $this->setIfExists('validity_day_of_week', $data ?? [], null);
        $this->setIfExists('validity_hours', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], false);
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

        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($this->container['event']) && !in_array($this->container['event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event', must be one of '%s'",
                $this->container['event'],
                implode("', '", $allowedValues)
            );
        }

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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Assigned by the Voucherify API, identifies the earning rule object.
     *
     * @return $this
     */
    public function setId(?string $id): static
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp representing the date and time when the earning rule was created. The value is shown in the ISO 8601 format.
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $created_at): static
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
     * Gets loyalty
     *
     * @return \OpenAPI\Client\Model\EarningRuleBaseLoyalty|null
     */
    public function getLoyalty(): ?\OpenAPI\Client\Model\EarningRuleBaseLoyalty
    {
        return $this->container['loyalty'];
    }

    /**
     * Sets loyalty
     *
     * @param \OpenAPI\Client\Model\EarningRuleBaseLoyalty|null $loyalty loyalty
     *
     * @return $this
     */
    public function setLoyalty(?\OpenAPI\Client\Model\EarningRuleBaseLoyalty $loyalty): static
    {
        if (is_null($loyalty)) {
            array_push($this->openAPINullablesSetToNull, 'loyalty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loyalty', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['loyalty'] = $loyalty;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string|null $event event
     *
     * @return $this
     */
    public function setEvent(?string $event): static
    {
        if (is_null($event)) {
            array_push($this->openAPINullablesSetToNull, 'event');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($event) && !in_array($event, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event', must be one of '%s'",
                    $event,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets custom_event
     *
     * @return \OpenAPI\Client\Model\EarningRuleBaseCustomEvent|null
     */
    public function getCustomEvent(): ?\OpenAPI\Client\Model\EarningRuleBaseCustomEvent
    {
        return $this->container['custom_event'];
    }

    /**
     * Sets custom_event
     *
     * @param \OpenAPI\Client\Model\EarningRuleBaseCustomEvent|null $custom_event custom_event
     *
     * @return $this
     */
    public function setCustomEvent(?\OpenAPI\Client\Model\EarningRuleBaseCustomEvent $custom_event): static
    {
        if (is_null($custom_event)) {
            array_push($this->openAPINullablesSetToNull, 'custom_event');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_event', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_event'] = $custom_event;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return \OpenAPI\Client\Model\EarningRuleBaseSegment|null
     */
    public function getSegment(): ?\OpenAPI\Client\Model\EarningRuleBaseSegment
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param \OpenAPI\Client\Model\EarningRuleBaseSegment|null $segment segment
     *
     * @return $this
     */
    public function setSegment(?\OpenAPI\Client\Model\EarningRuleBaseSegment $segment): static
    {
        if (is_null($segment)) {
            array_push($this->openAPINullablesSetToNull, 'segment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('segment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['segment'] = $segment;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\EarningRuleBaseSource|null
     */
    public function getSource(): ?\OpenAPI\Client\Model\EarningRuleBaseSource
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\EarningRuleBaseSource|null $source source
     *
     * @return $this
     */
    public function setSource(?\OpenAPI\Client\Model\EarningRuleBaseSource $source): static
    {
        if (is_null($source)) {
            array_push($this->openAPINullablesSetToNull, 'source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string|null
     */
    public function getObject(): ?string
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string|null $object The type of the object represented by JSON. Default is earning_rule.
     *
     * @return $this
     */
    public function setObject(?string $object): static
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
            throw new InvalidArgumentException(
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
     * Gets automation_id
     *
     * @return string|null
     */
    public function getAutomationId(): ?string
    {
        return $this->container['automation_id'];
    }

    /**
     * Sets automation_id
     *
     * @param string|null $automation_id For internal use by Voucherify.
     *
     * @return $this
     */
    public function setAutomationId(?string $automation_id): static
    {
        if (is_null($automation_id)) {
            array_push($this->openAPINullablesSetToNull, 'automation_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('automation_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['automation_id'] = $automation_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date Start date defines when the earning rule starts to be active. Activation timestamp is presented in the ISO 8601 format. Earning rule is inactive before this date. If you don't define the start date for an earning rule, it'll inherit the campaign start date by default.
     *
     * @return $this
     */
    public function setStartDate(?string $start_date): static
    {
        if (is_null($start_date)) {
            array_push($this->openAPINullablesSetToNull, 'start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date Expiration date defines when the earning rule expires. Expiration timestamp is presented in the ISO 8601 format. Earning rule is inactive after this date.If you don't define the expiration date for an earning rule, it'll inherit the campaign expiration date by default.
     *
     * @return $this
     */
    public function setExpirationDate(?string $expiration_date): static
    {
        if (is_null($expiration_date)) {
            array_push($this->openAPINullablesSetToNull, 'expiration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets validity_timeframe
     *
     * @return \OpenAPI\Client\Model\ValidityTimeframe|null
     */
    public function getValidityTimeframe(): ?\OpenAPI\Client\Model\ValidityTimeframe
    {
        return $this->container['validity_timeframe'];
    }

    /**
     * Sets validity_timeframe
     *
     * @param \OpenAPI\Client\Model\ValidityTimeframe|null $validity_timeframe validity_timeframe
     *
     * @return $this
     */
    public function setValidityTimeframe(?\OpenAPI\Client\Model\ValidityTimeframe $validity_timeframe): static
    {
        if (is_null($validity_timeframe)) {
            array_push($this->openAPINullablesSetToNull, 'validity_timeframe');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validity_timeframe', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validity_timeframe'] = $validity_timeframe;

        return $this;
    }

    /**
     * Gets validity_day_of_week
     *
     * @return int[]|null
     */
    public function getValidityDayOfWeek(): ?array
    {
        return $this->container['validity_day_of_week'];
    }

    /**
     * Sets validity_day_of_week
     *
     * @param int[]|null $validity_day_of_week Integer array corresponding to the particular days of the week in which the voucher is valid.  - `0` Sunday - `1` Monday - `2` Tuesday - `3` Wednesday - `4` Thursday - `5` Friday - `6` Saturday
     *
     * @return $this
     */
    public function setValidityDayOfWeek(?array $validity_day_of_week): static
    {
        if (is_null($validity_day_of_week)) {
            array_push($this->openAPINullablesSetToNull, 'validity_day_of_week');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validity_day_of_week', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getValidityDayOfWeekAllowableValues();
        if (!is_null($validity_day_of_week) && array_diff($validity_day_of_week, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'validity_day_of_week', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['validity_day_of_week'] = $validity_day_of_week;

        return $this;
    }

    /**
     * Gets validity_hours
     *
     * @return \OpenAPI\Client\Model\ValidityHours|null
     */
    public function getValidityHours(): ?\OpenAPI\Client\Model\ValidityHours
    {
        return $this->container['validity_hours'];
    }

    /**
     * Sets validity_hours
     *
     * @param \OpenAPI\Client\Model\ValidityHours|null $validity_hours validity_hours
     *
     * @return $this
     */
    public function setValidityHours(?\OpenAPI\Client\Model\ValidityHours $validity_hours): static
    {
        if (is_null($validity_hours)) {
            array_push($this->openAPINullablesSetToNull, 'validity_hours');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('validity_hours', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['validity_hours'] = $validity_hours;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata(): ?object
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the earning rule. A set of key/value pairs that you can attach to an earning rule object. It can be useful for storing additional information about the earning rule in a structured format.
     *
     * @return $this
     */
    public function setMetadata(?object $metadata): static
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
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp representing the date and time when the earning rule was last updated in ISO 8601 format.
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updated_at): static
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active A flag to toggle the earning rule on or off. You can disable an earning rule even though it's within the active period defined by the start_date and expiration_date of the campaign or the earning rule's own start_date and expiration_date.
     *
     * @return $this
     */
    public function setActive(?bool $active): static
    {
        if (is_null($active)) {
            array_push($this->openAPINullablesSetToNull, 'active');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('active', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['active'] = $active;

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


