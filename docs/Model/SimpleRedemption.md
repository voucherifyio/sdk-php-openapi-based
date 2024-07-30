# # SimpleRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redemption ID. | [optional]
**customer_id** | **string** | Unique customer ID of the redeeming customer. | [optional]
**tracking_id** | **string** | Hashed customer source ID. | [optional]
**date** | **\DateTime** | Timestamp representing the date and time when the redemption was created. The value is shown in the ISO 8601 format. | [optional]
**amount** | **int** | For gift cards, this is a positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the number of redeemed credits. For loyalty cards, this is the number of loyalty points used in the transaction. In the case of redemption rollback, the numbers are expressed as negative integers. | [optional]
**order** | [**\OpenAPI\Client\Model\SimpleOrder**](SimpleOrder.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\SimpleRedemptionRewardResult**](SimpleRedemptionRewardResult.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**result** | **string** | Redemption result. | [optional]
**status** | **string** |  | [optional]
**voucher** | [**\OpenAPI\Client\Model\SimpleVoucher**](SimpleVoucher.md) |  | [optional]
**promotion_tier** | [**\OpenAPI\Client\Model\SimplePromotionTier**](SimplePromotionTier.md) |  | [optional]
**redemption** | **string** | Unique redemption ID of the parent redemption. | [optional]
**object** | **string** | The type of the object represented by the JSON. This object stores information about the &#x60;redemption&#x60;. | [optional] [default to 'redemption']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
