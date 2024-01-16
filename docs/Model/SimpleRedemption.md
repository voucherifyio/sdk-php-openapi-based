# # SimpleRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redemption ID. | [optional]
**customer_id** | **string** | Unique customer ID of the redeeming customer. | [optional]
**tracking_id** | **string** | Hashed customer source ID. | [optional]
**date** | **\DateTime** | Timestamp representing the date and time when the redemption was created in ISO 8601 format. | [optional]
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**order** | [**\OpenAPI\Client\Model\SimpleOrder**](SimpleOrder.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\SimpleRedemptionRewardResult**](SimpleRedemptionRewardResult.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**result** | **string** | Redemption result. | [optional]
**voucher** | [**\OpenAPI\Client\Model\SimpleVoucher**](SimpleVoucher.md) |  | [optional]
**promotion_tier** | [**\OpenAPI\Client\Model\SimplePromotionTier**](SimplePromotionTier.md) |  | [optional]
**redemption** | **string** | Unique redemption ID of the parent redemption. | [optional]
**object** | **string** | The type of object represented by the JSON. This object stores information about the &#x60;redemption&#x60;. | [optional] [default to 'redemption']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
