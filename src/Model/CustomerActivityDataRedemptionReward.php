<?php
/**
 * CustomerActivityDataRedemptionReward
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
 * CustomerActivityDataRedemptionReward Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CustomerActivityDataRedemptionReward implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CustomerActivityDataRedemptionReward';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'customer' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardCustomer',
        'assignment_id' => 'string',
        'voucher' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucher',
        'product' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardProduct',
        'sku' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardSku',
        'loyalty_tier_id' => 'string',
        'id' => 'string',
        'name' => 'string',
        'object' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'parameters' => '\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardParameters',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'customer' => null,
        'assignment_id' => null,
        'voucher' => null,
        'product' => null,
        'sku' => null,
        'loyalty_tier_id' => null,
        'id' => null,
        'name' => null,
        'object' => null,
        'created_at' => null,
        'updated_at' => null,
        'parameters' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'customer' => true,
        'assignment_id' => true,
        'voucher' => true,
        'product' => true,
        'sku' => true,
        'loyalty_tier_id' => true,
        'id' => true,
        'name' => true,
        'object' => true,
        'created_at' => true,
        'updated_at' => true,
        'parameters' => true,
        'type' => true
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
        'customer' => 'customer',
        'assignment_id' => 'assignment_id',
        'voucher' => 'voucher',
        'product' => 'product',
        'sku' => 'sku',
        'loyalty_tier_id' => 'loyalty_tier_id',
        'id' => 'id',
        'name' => 'name',
        'object' => 'object',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'parameters' => 'parameters',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'customer' => 'setCustomer',
        'assignment_id' => 'setAssignmentId',
        'voucher' => 'setVoucher',
        'product' => 'setProduct',
        'sku' => 'setSku',
        'loyalty_tier_id' => 'setLoyaltyTierId',
        'id' => 'setId',
        'name' => 'setName',
        'object' => 'setObject',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'parameters' => 'setParameters',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'customer' => 'getCustomer',
        'assignment_id' => 'getAssignmentId',
        'voucher' => 'getVoucher',
        'product' => 'getProduct',
        'sku' => 'getSku',
        'loyalty_tier_id' => 'getLoyaltyTierId',
        'id' => 'getId',
        'name' => 'getName',
        'object' => 'getObject',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'parameters' => 'getParameters',
        'type' => 'getType'
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

    public const OBJECT_REWARD = 'reward';
    public const TYPE_CAMPAIGN = 'CAMPAIGN';
    public const TYPE_COIN = 'COIN';
    public const TYPE_MATERIAL = 'MATERIAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectAllowableValues()
    {
        return [
            self::OBJECT_REWARD,
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
            self::TYPE_CAMPAIGN,
            self::TYPE_COIN,
            self::TYPE_MATERIAL,
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
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('assignment_id', $data ?? [], null);
        $this->setIfExists('voucher', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('loyalty_tier_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], 'reward');
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('parameters', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets customer
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardCustomer|null
     */
    public function getCustomer(): ?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardCustomer
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardCustomer|null $customer customer
     *
     * @return $this
     */
    public function setCustomer(?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardCustomer $customer): static
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
     * Gets assignment_id
     *
     * @return string|null
     */
    public function getAssignmentId(): ?string
    {
        return $this->container['assignment_id'];
    }

    /**
     * Sets assignment_id
     *
     * @param string|null $assignment_id Unique reward assignment ID assigned by Voucherify.
     *
     * @return $this
     */
    public function setAssignmentId(?string $assignment_id): static
    {
        if (is_null($assignment_id)) {
            array_push($this->openAPINullablesSetToNull, 'assignment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assignment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['assignment_id'] = $assignment_id;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucher|null
     */
    public function getVoucher(): ?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucher
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucher|null $voucher voucher
     *
     * @return $this
     */
    public function setVoucher(?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucher $voucher): static
    {
        if (is_null($voucher)) {
            array_push($this->openAPINullablesSetToNull, 'voucher');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voucher', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardProduct|null
     */
    public function getProduct(): ?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardProduct
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardProduct|null $product product
     *
     * @return $this
     */
    public function setProduct(?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardProduct $product): static
    {
        if (is_null($product)) {
            array_push($this->openAPINullablesSetToNull, 'product');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('product', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardSku|null
     */
    public function getSku(): ?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardSku
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardSku|null $sku sku
     *
     * @return $this
     */
    public function setSku(?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardSku $sku): static
    {
        if (is_null($sku)) {
            array_push($this->openAPINullablesSetToNull, 'sku');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sku', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets loyalty_tier_id
     *
     * @return string|null
     */
    public function getLoyaltyTierId(): ?string
    {
        return $this->container['loyalty_tier_id'];
    }

    /**
     * Sets loyalty_tier_id
     *
     * @param string|null $loyalty_tier_id Unique loyalty tier ID assigned by Voucherify.
     *
     * @return $this
     */
    public function setLoyaltyTierId(?string $loyalty_tier_id): static
    {
        if (is_null($loyalty_tier_id)) {
            array_push($this->openAPINullablesSetToNull, 'loyalty_tier_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('loyalty_tier_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['loyalty_tier_id'] = $loyalty_tier_id;

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
     * @param string|null $id id
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
     * @param string|null $name name
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
     * @param string|null $object object
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
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt(?string $created_at): static
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
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt(?string $updated_at): static
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
     * Gets parameters
     *
     * @return \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardParameters|null
     */
    public function getParameters(): ?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardParameters
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param \OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardParameters|null $parameters parameters
     *
     * @return $this
     */
    public function setParameters(?\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardParameters $parameters): static
    {
        if (is_null($parameters)) {
            array_push($this->openAPINullablesSetToNull, 'parameters');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parameters', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parameters'] = $parameters;

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
     * @param string|null $type Reward type.
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


