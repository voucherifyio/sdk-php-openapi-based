<?php
/**
 * LoyaltiesUpdateCampaignRequestBody
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
 * LoyaltiesUpdateCampaignRequestBody Class Doc Comment
 *
 * @category Class
 * @description Request body schema for **PUT** &#x60;/loyalties/{campaignId}&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LoyaltiesUpdateCampaignRequestBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltiesUpdateCampaignRequestBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'validity_timeframe' => '\OpenAPI\Client\Model\ValidityTimeframe',
        'validity_day_of_week' => 'int[]',
        'validity_hours' => '\OpenAPI\Client\Model\ValidityHours',
        'description' => 'string',
        'category' => 'string',
        'metadata' => 'object',
        'unset_metadata_fields' => 'string[]',
        'category_id' => 'string',
        'activity_duration_after_publishing' => 'string',
        'join_once' => 'bool',
        'auto_join' => 'bool',
        'type' => 'string',
        'loyalty_tiers_expiration' => '\OpenAPI\Client\Model\LoyaltyTiersExpirationAll',
        'options' => '\OpenAPI\Client\Model\LoyaltiesUpdateCampaignRequestBodyOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_date' => 'date-time',
        'expiration_date' => 'date-time',
        'validity_timeframe' => null,
        'validity_day_of_week' => null,
        'validity_hours' => null,
        'description' => null,
        'category' => null,
        'metadata' => null,
        'unset_metadata_fields' => null,
        'category_id' => null,
        'activity_duration_after_publishing' => null,
        'join_once' => null,
        'auto_join' => null,
        'type' => null,
        'loyalty_tiers_expiration' => null,
        'options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'start_date' => true,
		'expiration_date' => true,
		'validity_timeframe' => false,
		'validity_day_of_week' => true,
		'validity_hours' => false,
		'description' => true,
		'category' => true,
		'metadata' => true,
		'unset_metadata_fields' => true,
		'category_id' => true,
		'activity_duration_after_publishing' => true,
		'join_once' => true,
		'auto_join' => true,
		'type' => true,
		'loyalty_tiers_expiration' => false,
		'options' => true
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
        'start_date' => 'start_date',
        'expiration_date' => 'expiration_date',
        'validity_timeframe' => 'validity_timeframe',
        'validity_day_of_week' => 'validity_day_of_week',
        'validity_hours' => 'validity_hours',
        'description' => 'description',
        'category' => 'category',
        'metadata' => 'metadata',
        'unset_metadata_fields' => 'unset_metadata_fields',
        'category_id' => 'category_id',
        'activity_duration_after_publishing' => 'activity_duration_after_publishing',
        'join_once' => 'join_once',
        'auto_join' => 'auto_join',
        'type' => 'type',
        'loyalty_tiers_expiration' => 'loyalty_tiers_expiration',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate',
        'validity_timeframe' => 'setValidityTimeframe',
        'validity_day_of_week' => 'setValidityDayOfWeek',
        'validity_hours' => 'setValidityHours',
        'description' => 'setDescription',
        'category' => 'setCategory',
        'metadata' => 'setMetadata',
        'unset_metadata_fields' => 'setUnsetMetadataFields',
        'category_id' => 'setCategoryId',
        'activity_duration_after_publishing' => 'setActivityDurationAfterPublishing',
        'join_once' => 'setJoinOnce',
        'auto_join' => 'setAutoJoin',
        'type' => 'setType',
        'loyalty_tiers_expiration' => 'setLoyaltyTiersExpiration',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate',
        'validity_timeframe' => 'getValidityTimeframe',
        'validity_day_of_week' => 'getValidityDayOfWeek',
        'validity_hours' => 'getValidityHours',
        'description' => 'getDescription',
        'category' => 'getCategory',
        'metadata' => 'getMetadata',
        'unset_metadata_fields' => 'getUnsetMetadataFields',
        'category_id' => 'getCategoryId',
        'activity_duration_after_publishing' => 'getActivityDurationAfterPublishing',
        'join_once' => 'getJoinOnce',
        'auto_join' => 'getAutoJoin',
        'type' => 'getType',
        'loyalty_tiers_expiration' => 'getLoyaltyTiersExpiration',
        'options' => 'getOptions'
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

    public const VALIDITY_DAY_OF_WEEK_0 = 0;
    public const VALIDITY_DAY_OF_WEEK_1 = 1;
    public const VALIDITY_DAY_OF_WEEK_2 = 2;
    public const VALIDITY_DAY_OF_WEEK_3 = 3;
    public const VALIDITY_DAY_OF_WEEK_4 = 4;
    public const VALIDITY_DAY_OF_WEEK_5 = 5;
    public const VALIDITY_DAY_OF_WEEK_6 = 6;
    public const TYPE_AUTO_UPDATE = 'AUTO_UPDATE';
    public const TYPE__STATIC = 'STATIC';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AUTO_UPDATE,
            self::TYPE__STATIC,
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
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('validity_timeframe', $data ?? [], null);
        $this->setIfExists('validity_day_of_week', $data ?? [], null);
        $this->setIfExists('validity_hours', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('unset_metadata_fields', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('activity_duration_after_publishing', $data ?? [], null);
        $this->setIfExists('join_once', $data ?? [], null);
        $this->setIfExists('auto_join', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('loyalty_tiers_expiration', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param \DateTime|null $start_date Activation timestamp defines when the campaign starts to be active in ISO 8601 format. Campaign is *inactive before* this date.
     *
     * @return self
     */
    public function setStartDate($start_date)
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
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date Expiration timestamp defines when the campaign expires in ISO 8601 format.  Campaign is *inactive after* this date.
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
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
    public function getValidityTimeframe()
    {
        return $this->container['validity_timeframe'];
    }

    /**
     * Sets validity_timeframe
     *
     * @param \OpenAPI\Client\Model\ValidityTimeframe|null $validity_timeframe validity_timeframe
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
     * @param int[]|null $validity_day_of_week Integer array corresponding to the particular days of the week in which the voucher is valid.  - `0` Sunday - `1` Monday - `2` Tuesday - `3` Wednesday - `4` Thursday - `5` Friday - `6` Saturday
     *
     * @return self
     */
    public function setValidityDayOfWeek($validity_day_of_week)
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
            throw new \InvalidArgumentException(
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
    public function getValidityHours()
    {
        return $this->container['validity_hours'];
    }

    /**
     * Sets validity_hours
     *
     * @param \OpenAPI\Client\Model\ValidityHours|null $validity_hours validity_hours
     *
     * @return self
     */
    public function setValidityHours($validity_hours)
    {
        if (is_null($validity_hours)) {
            throw new \InvalidArgumentException('non-nullable validity_hours cannot be null');
        }
        $this->container['validity_hours'] = $validity_hours;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description An optional field to keep any extra textual information about the campaign such as a campaign description and details.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

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
     * @param string|null $category The category assigned to the campaign. Either pass this parameter OR the `category_id`.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            array_push($this->openAPINullablesSetToNull, 'category');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category'] = $category;

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
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the campaign. A set of key/value pairs that you can attach to a campaign object. It can be useful for storing additional information about the campaign in a structured format.
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
     * Gets unset_metadata_fields
     *
     * @return string[]|null
     */
    public function getUnsetMetadataFields()
    {
        return $this->container['unset_metadata_fields'];
    }

    /**
     * Sets unset_metadata_fields
     *
     * @param string[]|null $unset_metadata_fields Determine which metadata should be removed from campaign.
     *
     * @return self
     */
    public function setUnsetMetadataFields($unset_metadata_fields)
    {
        if (is_null($unset_metadata_fields)) {
            array_push($this->openAPINullablesSetToNull, 'unset_metadata_fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unset_metadata_fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unset_metadata_fields'] = $unset_metadata_fields;

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
     * @param string|null $category_id Unique category ID that this campaign belongs to. Either pass this parameter OR the `category`.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            array_push($this->openAPINullablesSetToNull, 'category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets activity_duration_after_publishing
     *
     * @return string|null
     */
    public function getActivityDurationAfterPublishing()
    {
        return $this->container['activity_duration_after_publishing'];
    }

    /**
     * Sets activity_duration_after_publishing
     *
     * @param string|null $activity_duration_after_publishing Defines the amount of time the vouchers will be active after publishing. The value is shown in the ISO 8601 format. For example, a voucher with the value of P24D will be valid for a duration of 24 days.
     *
     * @return self
     */
    public function setActivityDurationAfterPublishing($activity_duration_after_publishing)
    {
        if (is_null($activity_duration_after_publishing)) {
            array_push($this->openAPINullablesSetToNull, 'activity_duration_after_publishing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('activity_duration_after_publishing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['activity_duration_after_publishing'] = $activity_duration_after_publishing;

        return $this;
    }

    /**
     * Gets join_once
     *
     * @return bool|null
     */
    public function getJoinOnce()
    {
        return $this->container['join_once'];
    }

    /**
     * Sets join_once
     *
     * @param bool|null $join_once If this value is set to `true`, customers will be able to join the campaign only once.
     *
     * @return self
     */
    public function setJoinOnce($join_once)
    {
        if (is_null($join_once)) {
            array_push($this->openAPINullablesSetToNull, 'join_once');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('join_once', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['join_once'] = $join_once;

        return $this;
    }

    /**
     * Gets auto_join
     *
     * @return bool|null
     */
    public function getAutoJoin()
    {
        return $this->container['auto_join'];
    }

    /**
     * Sets auto_join
     *
     * @param bool|null $auto_join Indicates whether customers will be able to auto-join a loyalty campaign if any earning rule is fulfilled.
     *
     * @return self
     */
    public function setAutoJoin($auto_join)
    {
        if (is_null($auto_join)) {
            array_push($this->openAPINullablesSetToNull, 'auto_join');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auto_join', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auto_join'] = $auto_join;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Defines whether the campaign can be updated with new vouchers after campaign creation.      - `AUTO_UPDATE`: By choosing the auto update option you will create a campaign that can be enhanced by new vouchers after the time of creation (e.g. by publish vouchers method).     -  `STATIC`: vouchers need to be manually published.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets loyalty_tiers_expiration
     *
     * @return \OpenAPI\Client\Model\LoyaltyTiersExpirationAll|null
     */
    public function getLoyaltyTiersExpiration()
    {
        return $this->container['loyalty_tiers_expiration'];
    }

    /**
     * Sets loyalty_tiers_expiration
     *
     * @param \OpenAPI\Client\Model\LoyaltyTiersExpirationAll|null $loyalty_tiers_expiration loyalty_tiers_expiration
     *
     * @return self
     */
    public function setLoyaltyTiersExpiration($loyalty_tiers_expiration)
    {
        if (is_null($loyalty_tiers_expiration)) {
            throw new \InvalidArgumentException('non-nullable loyalty_tiers_expiration cannot be null');
        }
        $this->container['loyalty_tiers_expiration'] = $loyalty_tiers_expiration;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \OpenAPI\Client\Model\LoyaltiesUpdateCampaignRequestBodyOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\Client\Model\LoyaltiesUpdateCampaignRequestBodyOptions|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            array_push($this->openAPINullablesSetToNull, 'options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('options', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['options'] = $options;

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


