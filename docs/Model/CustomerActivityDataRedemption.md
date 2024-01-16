# # CustomerActivityDataRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redemption ID. | [optional]
**object** | **string** | The type of object represented by the JSON. This object stores information about the &#x60;redemption&#x60;. | [optional] [default to 'redemption']
**created_at** | **\DateTime** | Timestamp representing the date and time when the redemption was created in ISO 8601 format. | [optional]
**tracking_id** | **string** | Hashed customer source ID. | [optional]
**metadata** | **object** |  | [optional]
**channel_type** | **string** | The source of the channel for the redemption rollback. A &#x60;USER&#x60; corresponds to the Voucherify Dashboard and an &#x60;API&#x60; corresponds to the API. | [optional]
**channel_id** | **string** | Unique channel ID of the user performing the redemption. This is either a user ID from a user using the Voucherify Dashboard or an X-APP-Id of a user using the API. | [optional]
**failure_code** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a generic reason as to why the redemption failed. | [optional]
**failure_message** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a more expanded reason as to why the redemption failed. | [optional]
**order** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionOrder**](CustomerActivityDataRedemptionOrder.md) |  | [optional]
**previous_order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionReward**](CustomerActivityDataRedemptionReward.md) |  | [optional]
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**reason** | **string** | System generated cause for the redemption being invalid in the context of the provided parameters. | [optional]
**result** | **string** | Redemption result. | [optional]
**status** | **string** | Redemption status. | [optional]
**related_redemptions** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionRelatedRedemptions**](CustomerActivityDataRedemptionRelatedRedemptions.md) |  | [optional]
**parent_redemption_id** | **string** | Unique redemption ID of the parent redemption. | [optional]
**redemption** | **string** | Unique redemption ID of the parent redemption. | [optional]
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**customer_id** | **string** | Unique customer ID of the redeeming customer. | [optional]
**related_object_type** | **string** | Defines the related object. | [optional]
**related_object_id** | **string** | Unique related object ID assigned by Voucherify, i.e. v_lfZi4rcEGe0sN9gmnj40bzwK2FH6QUno for a voucher. | [optional]
**related_object_parent_id** | **string** | Unique related parent object ID assigned by Voucherify, i.e. v_lfZi4rcEGe0sN9gmnj40bzwK2FH6QUno for a voucher. | [optional]
**campaign_name** | **string** | Campaign name | [optional]
**voucher** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionVoucher**](CustomerActivityDataRedemptionVoucher.md) |  | [optional]
**promotion_tier** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionPromotionTier**](CustomerActivityDataRedemptionPromotionTier.md) |  | [optional]
**date** | **\DateTime** | Timestamp representing the date and time when the redemption was created in ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
