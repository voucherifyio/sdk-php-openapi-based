<?php
/**
 * LoyaltiesTiersGetResponseBody
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
 * LoyaltiesTiersGetResponseBody Class Doc Comment
 *
 * @description Response body schema for **GET** &#x60;/loyalties/{campaignId}/tiers/{loyaltyTierId}&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LoyaltiesTiersGetResponseBody implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LoyaltiesTiersGetResponseBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'earning_rules' => 'array<string,\OpenAPI\Client\Model\MappingPoints>',
        'rewards' => 'array<string,\OpenAPI\Client\Model\MappingPoints>',
        'points' => '\OpenAPI\Client\Model\LoyaltyTierAllOfConfigPoints',
        'id' => 'string',
        'campaign_id' => 'string',
        'metadata' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'config' => '\OpenAPI\Client\Model\LoyaltyTierAllOfConfig',
        'expiration' => '\OpenAPI\Client\Model\LoyaltyTierExpiration',
        'object' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'earning_rules' => null,
        'rewards' => null,
        'points' => null,
        'id' => null,
        'campaign_id' => null,
        'metadata' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'config' => null,
        'expiration' => null,
        'object' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => true,
        'earning_rules' => true,
        'rewards' => true,
        'points' => true,
        'id' => true,
        'campaign_id' => true,
        'metadata' => true,
        'created_at' => true,
        'updated_at' => true,
        'config' => true,
        'expiration' => true,
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
        'name' => 'name',
        'earning_rules' => 'earning_rules',
        'rewards' => 'rewards',
        'points' => 'points',
        'id' => 'id',
        'campaign_id' => 'campaign_id',
        'metadata' => 'metadata',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'config' => 'config',
        'expiration' => 'expiration',
        'object' => 'object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'earning_rules' => 'setEarningRules',
        'rewards' => 'setRewards',
        'points' => 'setPoints',
        'id' => 'setId',
        'campaign_id' => 'setCampaignId',
        'metadata' => 'setMetadata',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'config' => 'setConfig',
        'expiration' => 'setExpiration',
        'object' => 'setObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'earning_rules' => 'getEarningRules',
        'rewards' => 'getRewards',
        'points' => 'getPoints',
        'id' => 'getId',
        'campaign_id' => 'getCampaignId',
        'metadata' => 'getMetadata',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'config' => 'getConfig',
        'expiration' => 'getExpiration',
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

    public const OBJECT_LOYALTY_TIER = 'loyalty_tier';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_LOYALTY_TIER,
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('earning_rules', $data ?? [], null);
        $this->setIfExists('rewards', $data ?? [], null);
        $this->setIfExists('points', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('campaign_id', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('config', $data ?? [], null);
        $this->setIfExists('expiration', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'loyalty_tier');
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
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Loyalty Tier name.
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets earning_rules
     *
     * @return array<string,\OpenAPI\Client\Model\MappingPoints>|null
     */
    public function getEarningRules(): ?array
    {
        return $this->container['earning_rules'];
    }

    /**
     * Sets earning_rules
     *
     * @param array<string,\OpenAPI\Client\Model\MappingPoints>|null $earning_rules Contains a list of earning rule IDs and their points mapping for the given earning rule.
     *
     * @return $this
     */
    public function setEarningRules(?array $earning_rules): static
    {
        if (is_null($earning_rules)) {
            array_push($this->openAPINullablesSetToNull, 'earning_rules');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('earning_rules', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['earning_rules'] = $earning_rules;

        return $this;
    }

    /**
     * Gets rewards
     *
     * @return array<string,\OpenAPI\Client\Model\MappingPoints>|null
     */
    public function getRewards(): ?array
    {
        return $this->container['rewards'];
    }

    /**
     * Sets rewards
     *
     * @param array<string,\OpenAPI\Client\Model\MappingPoints>|null $rewards Contains a list of reward IDs and their points mapping for the given reward.
     *
     * @return $this
     */
    public function setRewards(?array $rewards): static
    {
        if (is_null($rewards)) {
            array_push($this->openAPINullablesSetToNull, 'rewards');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rewards', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rewards'] = $rewards;

        return $this;
    }

    /**
     * Gets points
     *
     * @return \OpenAPI\Client\Model\LoyaltyTierAllOfConfigPoints|null
     */
    public function getPoints(): ?\OpenAPI\Client\Model\LoyaltyTierAllOfConfigPoints
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param \OpenAPI\Client\Model\LoyaltyTierAllOfConfigPoints|null $points points
     *
     * @return $this
     */
    public function setPoints(?\OpenAPI\Client\Model\LoyaltyTierAllOfConfigPoints $points): static
    {
        if (is_null($points)) {
            array_push($this->openAPINullablesSetToNull, 'points');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('points', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['points'] = $points;

        return $this;
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
     * @param string|null $id Unique loyalty tier ID.
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
     * @param string|null $campaign_id Unique parent campaign ID.
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
     * @param object|null $metadata The metadata object stores all custom attributes assigned to the loyalty tier. A set of key/value pairs that you can attach to a loyalty tier object. It can be useful for storing additional information about the loyalty tier in a structured format.
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
     * @param \DateTime|null $created_at Timestamp representing the date and time when the loyalty tier was created. The value is shown in the ISO 8601 format.
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
     * @param \DateTime|null $updated_at Timestamp representing the date and time when the loyalty tier was updated. The value is shown in the ISO 8601 format.
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
     * Gets config
     *
     * @return \OpenAPI\Client\Model\LoyaltyTierAllOfConfig|null
     */
    public function getConfig(): ?\OpenAPI\Client\Model\LoyaltyTierAllOfConfig
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \OpenAPI\Client\Model\LoyaltyTierAllOfConfig|null $config config
     *
     * @return $this
     */
    public function setConfig(?\OpenAPI\Client\Model\LoyaltyTierAllOfConfig $config): static
    {
        if (is_null($config)) {
            array_push($this->openAPINullablesSetToNull, 'config');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('config', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \OpenAPI\Client\Model\LoyaltyTierExpiration|null
     */
    public function getExpiration(): ?\OpenAPI\Client\Model\LoyaltyTierExpiration
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \OpenAPI\Client\Model\LoyaltyTierExpiration|null $expiration expiration
     *
     * @return $this
     */
    public function setExpiration(?\OpenAPI\Client\Model\LoyaltyTierExpiration $expiration): static
    {
        if (is_null($expiration)) {
            array_push($this->openAPINullablesSetToNull, 'expiration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiration'] = $expiration;

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
     * @param string|null $object The type of the object represented by JSON. This object stores information about the loyalty.
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


