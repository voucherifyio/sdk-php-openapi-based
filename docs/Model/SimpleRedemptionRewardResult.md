# # SimpleRedemptionRewardResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**assignment_id** | **string** | Unique reward assignment ID assigned by Voucherify. | [optional]
**voucher** | [**\OpenAPI\Client\Model\SimpleVoucher**](SimpleVoucher.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\SimpleProduct**](SimpleProduct.md) |  | [optional]
**sku** | [**\OpenAPI\Client\Model\SimpleSku**](SimpleSku.md) |  | [optional]
**loyalty_tier_id** | **string** | Unique loyalty tier ID assigned by Voucherify. | [optional]
**id** | **string** | Unique reward ID, assigned by Voucherify. | [optional]
**object** | **string** | The type of object represented by the JSON. This object stores information about the reward. | [optional] [default to 'reward']
**name** | **string** | Reward name. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the reward was created in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the reward was updated in ISO 8601 format. | [optional]
**parameters** | **object** | Defines how the reward is generated. | [optional]
**type** | **string** | Reward type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
