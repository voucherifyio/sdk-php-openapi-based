# # VouchersRedemptionGetResponseBodyRedemptionEntriesItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redemption ID. |
**object** | **string** |  |
**date** | **\DateTime** | Timestamp representing the date and time when the object was created in ISO 8601 format. |
**customer_id** | **string** | Unique customer ID of the redeeming customer. |
**tracking_id** | **string** | Hashed customer source ID. |
**metadata** | **object** |  |
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**redemption** | **string** | Unique redemption ID of the parent redemption. |
**result** | **string** | Redemption result. |
**status** | **string** |  |
**related_redemptions** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptions**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptions.md) |  | [optional]
**failure_code** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a generic reason as to why the redemption failed. | [optional]
**failure_message** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a more expanded reason as to why the redemption failed. | [optional]
**order** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrder**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrder.md) |  |
**channel** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemChannel**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemChannel.md) |  |
**customer** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemCustomer**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemCustomer.md) |  |
**related_object_type** | **string** | Defines the related object. |
**related_object_id** | **string** | Unique related object ID assigned by Voucherify, i.e. v_lfZi4rcEGe0sN9gmnj40bzwK2FH6QUno for a voucher. |
**voucher** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucher**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucher.md) |  | [optional]
**promotion_tier** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTier**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTier.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\RedemptionRewardResult**](RedemptionRewardResult.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemGift**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemGift.md) |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItemLoyaltyCard**](VouchersRedemptionGetResponseBodyRedemptionEntriesItemLoyaltyCard.md) |  | [optional]
**reason** | **string** | System generated cause for the redemption being invalid in the context of the provided parameters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
