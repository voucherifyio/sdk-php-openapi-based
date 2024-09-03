# # RedemptionRewardResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
<<<<<<< Updated upstream
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  |
**assignment_id** | **string** | Unique reward assignment ID assigned by Voucherify. |
**voucher** | [**\OpenAPI\Client\Model\RedemptionRewardResultVoucher**](RedemptionRewardResultVoucher.md) |  |
**product** | [**\OpenAPI\Client\Model\RedemptionRewardResultProduct**](RedemptionRewardResultProduct.md) |  |
**sku** | [**\OpenAPI\Client\Model\RedemptionRewardResultSku**](RedemptionRewardResultSku.md) |  |
**loyalty_tier_id** | **string** | Unique loyalty tier ID assigned by Voucherify. |
=======
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**assignment_id** | **string** | Unique reward assignment ID assigned by Voucherify. | [optional]
**voucher** | [**\OpenAPI\Client\Model\Voucher**](Voucher.md) |  | [optional]
**product** | [**\OpenAPI\Client\Model\Product**](Product.md) |  | [optional]
**sku** | [**\OpenAPI\Client\Model\Sku**](Sku.md) |  | [optional]
**loyalty_tier_id** | **string** | Unique loyalty tier ID assigned by Voucherify. | [optional]
>>>>>>> Stashed changes
**id** | **string** | Unique reward ID. | [optional]
**name** | **string** | Name of the reward. | [optional]
**object** | **string** | The type of object represented by the JSON | [optional] [default to 'reward']
**created_at** | **\DateTime** | Timestamp representing the date and time when the redemption was created in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp in ISO 8601 format indicating when the reward was updated. | [optional]
**parameters** | [**\OpenAPI\Client\Model\RedemptionRewardResultParameters**](RedemptionRewardResultParameters.md) |  | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a reward. The metadata object stores all custom attributes assigned to the reward. | [optional]
**type** | **string** | Reward type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
