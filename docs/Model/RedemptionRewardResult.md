# # RedemptionRewardResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  |
**assignment_id** | **string** | Unique reward assignment ID assigned by Voucherify. |
**voucher** | [**\OpenAPI\Client\Model\RedemptionRewardResultVoucher**](RedemptionRewardResultVoucher.md) |  |
**product** | [**\OpenAPI\Client\Model\RedemptionRewardResultProduct**](RedemptionRewardResultProduct.md) |  |
**sku** | [**\OpenAPI\Client\Model\RedemptionRewardResultSku**](RedemptionRewardResultSku.md) |  |
**loyalty_tier_id** | **string** | Unique loyalty tier ID assigned by Voucherify. |
**id** | **string** | Unique reward ID. | [optional]
**name** | **string** | Name of the reward. | [optional]
**object** | **string** | The type of object represented by the JSON | [optional] [default to 'reward']
**created_at** | **\DateTime** | Timestamp representing the date and time when the redemption was created in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp in ISO 8601 format indicating when the reward was updated. | [optional]
**parameters** | [**\OpenAPI\Client\Model\RedemptionRewardResultParameters**](RedemptionRewardResultParameters.md) |  | [optional]
**type** | **string** | Reward type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
