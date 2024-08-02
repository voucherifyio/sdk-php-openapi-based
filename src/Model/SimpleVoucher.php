<?php
/**
 * SimpleVoucher
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
 * SimpleVoucher Class Doc Comment
 *
 * @description Simplified voucher data.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SimpleVoucher implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SimpleVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'code' => 'string',
        'gift' => '\OpenAPI\Client\Model\Gift',
        'discount' => '\OpenAPI\Client\Model\Discount',
        'loyalty_card' => '\OpenAPI\Client\Model\SimpleLoyaltyCard',
        'type' => 'string',
        'campaign' => 'string',
        'campaign_id' => 'string',
        'is_referral_code' => 'bool',
        'holder_id' => 'string',
        'referrer_id' => 'string',
        'category_id' => 'string',
        'categories' => '\OpenAPI\Client\Model\Category[]',
        'active' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'redemption' => '\OpenAPI\Client\Model\SimpleVoucherRedemption',
        'start_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'metadata' => 'object',
        'object' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'code' => null,
        'gift' => null,
        'discount' => null,
        'loyalty_card' => null,
        'type' => null,
        'campaign' => null,
        'campaign_id' => null,
        'is_referral_code' => null,
        'holder_id' => null,
        'referrer_id' => null,
        'category_id' => null,
        'categories' => null,
        'active' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'redemption' => null,
        'start_date' => 'date-time',
        'expiration_date' => 'date-time',
        'metadata' => null,
        'object' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => true,
        'code' => true,
        'gift' => true,
        'discount' => true,
        'loyalty_card' => true,
        'type' => true,
        'campaign' => true,
        'campaign_id' => true,
        'is_referral_code' => true,
        'holder_id' => true,
        'referrer_id' => true,
        'category_id' => true,
        'categories' => true,
        'active' => true,
        'created_at' => true,
        'updated_at' => true,
        'redemption' => true,
        'start_date' => true,
        'expiration_date' => true,
        'metadata' => true,
        'object' => true
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
        'code' => 'code',
        'gift' => 'gift',
        'discount' => 'discount',
        'loyalty_card' => 'loyalty_card',
        'type' => 'type',
        'campaign' => 'campaign',
        'campaign_id' => 'campaign_id',
        'is_referral_code' => 'is_referral_code',
        'holder_id' => 'holder_id',
        'referrer_id' => 'referrer_id',
        'category_id' => 'category_id',
        'categories' => 'categories',
        'active' => 'active',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'redemption' => 'redemption',
        'start_date' => 'start_date',
        'expiration_date' => 'expiration_date',
        'metadata' => 'metadata',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'gift' => 'setGift',
        'discount' => 'setDiscount',
        'loyalty_card' => 'setLoyaltyCard',
        'type' => 'setType',
        'campaign' => 'setCampaign',
        'campaign_id' => 'setCampaignId',
        'is_referral_code' => 'setIsReferralCode',
        'holder_id' => 'setHolderId',
        'referrer_id' => 'setReferrerId',
        'category_id' => 'setCategoryId',
        'categories' => 'setCategories',
        'active' => 'setActive',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'redemption' => 'setRedemption',
        'start_date' => 'setStartDate',
        'expiration_date' => 'setExpirationDate',
        'metadata' => 'setMetadata',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'gift' => 'getGift',
        'discount' => 'getDiscount',
        'loyalty_card' => 'getLoyaltyCard',
        'type' => 'getType',
        'campaign' => 'getCampaign',
        'campaign_id' => 'getCampaignId',
        'is_referral_code' => 'getIsReferralCode',
        'holder_id' => 'getHolderId',
        'referrer_id' => 'getReferrerId',
        'category_id' => 'getCategoryId',
        'categories' => 'getCategories',
        'active' => 'getActive',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'redemption' => 'getRedemption',
        'start_date' => 'getStartDate',
        'expiration_date' => 'getExpirationDate',
        'metadata' => 'getMetadata',
        'object' => 'getObject'
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

    public const TYPE_DISCOUNT_VOUCHER = 'DISCOUNT_VOUCHER';
    public const TYPE_LOYALTY_CARD = 'LOYALTY_CARD';
    public const TYPE_GIFT_VOUCHER = 'GIFT_VOUCHER';
    public const OBJECT_VOUCHER = 'voucher';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DISCOUNT_VOUCHER,
            self::TYPE_LOYALTY_CARD,
            self::TYPE_GIFT_VOUCHER,
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
            self::OBJECT_VOUCHER,
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('gift', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('loyalty_card', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('campaign', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('is_referral_code', $data ?? [], null);
        $this->setIfExists('holder_id', $data ?? [], null);
        $this->setIfExists('referrer_id', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('redemption', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'voucher');
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param string|null $id A unique identifier that represents the voucher assigned by Voucherify.
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Voucher code.
     *
     * @return $this
     */
    public function setCode(?string $code): static
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets gift
     *
     * @return \OpenAPI\Client\Model\Gift|null
     */
    public function getGift(): ?\OpenAPI\Client\Model\Gift
    {
        return $this->container['gift'];
    }

    /**
     * Sets gift
     *
     * @param \OpenAPI\Client\Model\Gift|null $gift Gift object response.
     *
     * @return $this
     */
    public function setGift(?\OpenAPI\Client\Model\Gift $gift): static
    {
        if (is_null($gift)) {
            array_push($this->openAPINullablesSetToNull, 'gift');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gift', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gift'] = $gift;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \OpenAPI\Client\Model\Discount|null
     */
    public function getDiscount(): ?\OpenAPI\Client\Model\Discount
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \OpenAPI\Client\Model\Discount|null $discount discount
     *
     * @return $this
     */
    public function setDiscount(?\OpenAPI\Client\Model\Discount $discount): static
    {
        if (is_null($discount)) {
            array_push($this->openAPINullablesSetToNull, 'discount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('discount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets loyalty_card
     *
     * @return \OpenAPI\Client\Model\SimpleLoyaltyCard|null
     */
    public function getLoyaltyCard(): ?\OpenAPI\Client\Model\SimpleLoyaltyCard
    {
        return $this->container['loyalty_card'];
    }

    /**
     * Sets loyalty_card
     *
     * @param \OpenAPI\Client\Model\SimpleLoyaltyCard|null $loyalty_card Defines the loyalty card details.
     *
     * @return $this
     */
    public function setLoyaltyCard(?\OpenAPI\Client\Model\SimpleLoyaltyCard $loyalty_card): static
    {
        if (is_null($loyalty_card)) {
            array_push($this->openAPINullablesSetToNull, 'loyalty_card');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loyalty_card', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['loyalty_card'] = $loyalty_card;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the voucher.
     *
     * @return $this
     */
    public function setType(?string $type): static
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
            throw new InvalidArgumentException(
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
     * Gets campaign
     *
     * @return string|null
     */
    public function getCampaign(): ?string
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string|null $campaign Campaign name.
     *
     * @return $this
     */
    public function setCampaign(?string $campaign): static
    {
        if (is_null($campaign)) {
            array_push($this->openAPINullablesSetToNull, 'campaign');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string|null
     */
    public function getCampaignId(): ?string
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string|null $campaign_id Campaign unique ID.
     *
     * @return $this
     */
    public function setCampaignId(?string $campaign_id): static
    {
        if (is_null($campaign_id)) {
            array_push($this->openAPINullablesSetToNull, 'campaign_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campaign_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets is_referral_code
     *
     * @return bool|null
     */
    public function getIsReferralCode(): ?bool
    {
        return $this->container['is_referral_code'];
    }

    /**
     * Sets is_referral_code
     *
     * @param bool|null $is_referral_code Flag indicating whether this voucher is a referral code; `true` for campaign type `REFERRAL_PROGRAM`.
     *
     * @return $this
     */
    public function setIsReferralCode(?bool $is_referral_code): static
    {
        if (is_null($is_referral_code)) {
            array_push($this->openAPINullablesSetToNull, 'is_referral_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_referral_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_referral_code'] = $is_referral_code;

        return $this;
    }

    /**
     * Gets holder_id
     *
     * @return string|null
     */
    public function getHolderId(): ?string
    {
        return $this->container['holder_id'];
    }

    /**
     * Sets holder_id
     *
     * @param string|null $holder_id Unique customer ID of the campaign owner.
     *
     * @return $this
     */
    public function setHolderId(?string $holder_id): static
    {
        if (is_null($holder_id)) {
            array_push($this->openAPINullablesSetToNull, 'holder_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('holder_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['holder_id'] = $holder_id;

        return $this;
    }

    /**
     * Gets referrer_id
     *
     * @return string|null
     */
    public function getReferrerId(): ?string
    {
        return $this->container['referrer_id'];
    }

    /**
     * Sets referrer_id
     *
     * @param string|null $referrer_id Unique identifier of the referrer assigned by Voucherify.
     *
     * @return $this
     */
    public function setReferrerId(?string $referrer_id): static
    {
        if (is_null($referrer_id)) {
            array_push($this->openAPINullablesSetToNull, 'referrer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referrer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id Unique identifier of the category that this voucher belongs to.
     *
     * @return $this
     */
    public function setCategoryId(?string $category_id): static
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
     * Gets categories
     *
     * @return \OpenAPI\Client\Model\Category[]|null
     */
    public function getCategories(): ?array
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \OpenAPI\Client\Model\Category[]|null $categories Contains details about the category.
     *
     * @return $this
     */
    public function setCategories(?array $categories): static
    {
        if (is_null($categories)) {
            array_push($this->openAPINullablesSetToNull, 'categories');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('categories', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['categories'] = $categories;

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
     * @param bool|null $active Shows whether the voucher is on or off. `true` indicates an *active* voucher and `false` indicates an *inactive* voucher.
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
     * @param \DateTime|null $created_at Timestamp representing the date and time when the order was created. Timestamp is presented in the ISO 8601 format.
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
     * @param \DateTime|null $updated_at Timestamp representing the date and time when the voucher was updated in the ISO 8601 format.
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
     * Gets redemption
     *
     * @return \OpenAPI\Client\Model\SimpleVoucherRedemption|null
     */
    public function getRedemption(): ?\OpenAPI\Client\Model\SimpleVoucherRedemption
    {
        return $this->container['redemption'];
    }

    /**
     * Sets redemption
     *
     * @param \OpenAPI\Client\Model\SimpleVoucherRedemption|null $redemption redemption
     *
     * @return $this
     */
    public function setRedemption(?\OpenAPI\Client\Model\SimpleVoucherRedemption $redemption): static
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
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Activation timestamp defines when the code starts to be active in ISO 8601 format. Voucher is *inactive before* this date.
     *
     * @return $this
     */
    public function setStartDate(?\DateTime $start_date): static
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
    public function getExpirationDate(): ?\DateTime
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date Expiration timestamp defines when the code expires in ISO 8601 format.  Voucher is *inactive after* this date.
     *
     * @return $this
     */
    public function setExpirationDate(?\DateTime $expiration_date): static
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
     * @param object|null $metadata A set of custom key/value pairs that you can attach to a voucher. The metadata object stores all custom attributes assigned to the voucher.
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
     * @param string|null $object The type of the object represented by JSON.
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


