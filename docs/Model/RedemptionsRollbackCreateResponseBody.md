# # RedemptionsRollbackCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redemption ID. |
**object** | **string** | The type of object represented by the JSON | [default to 'redemption_rollback']
**date** | **\DateTime** | Timestamp representing the date and time when the object was created in ISO 8601 format. |
**customer_id** | **string** | Unique customer ID of the redeeming customer. |
**tracking_id** | **string** | Hashed customer source ID. |
**metadata** | **object** | The metadata object stores all custom attributes assigned to the redemption. |
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**redemption** | **string** | Unique redemption ID of the parent redemption. |
**reason** | **string** | System generated cause for the redemption being invalid in the context of the provided parameters. | [optional]
<<<<<<< Updated upstream
**result** | **string** | Redemption result. |
**status** | **string** | Redemption status. |
**related_redemptions** | [**\OpenAPI\Client\Model\RedemptionRollbackRelatedRedemptions**](RedemptionRollbackRelatedRedemptions.md) |  | [optional]
**failure_code** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a generic reason as to why the redemption failed. | [optional]
**failure_message** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a more expanded reason as to why the redemption failed. | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculatedNoCustomerData**](OrderCalculatedNoCustomerData.md) |  |
**channel** | [**\OpenAPI\Client\Model\RedemptionChannel**](RedemptionChannel.md) |  |
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  |
**related_object_type** | **string** | Defines the related object. |
**related_object_id** | **string** | Unique related object ID assigned by Voucherify, i.e. v_lfZi4rcEGe0sN9gmnj40bzwK2FH6QUno for a voucher. |
**voucher** | [**\OpenAPI\Client\Model\Voucher**](Voucher.md) |  | [optional]
**promotion_tier** | [**\OpenAPI\Client\Model\PromotionTier**](PromotionTier.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\RedemptionRewardResult**](RedemptionRewardResult.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\RedemptionGift**](RedemptionGift.md) |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\RedemptionLoyaltyCard**](RedemptionLoyaltyCard.md) |  | [optional]
=======
**result** | **string** | Redemption result. | [optional]
**status** | **string** | Redemption status. | [optional]
**related_redemptions** | [**\OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBodyRelatedRedemptions**](RedemptionsRollbackCreateResponseBodyRelatedRedemptions.md) |  | [optional]
**failure_code** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a generic reason as to why the redemption failed. | [optional]
**failure_message** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a more expanded reason as to why the redemption failed. | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**channel** | [**\OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBodyChannel**](RedemptionsRollbackCreateResponseBodyChannel.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**related_object_type** | **string** | Defines the related object. | [optional]
**related_object_id** | **string** | Unique identifier of the related object. It is assigned by Voucherify, i.e. &#x60;v_lfZi4rcEGe0sN9gmnj40bzwK2FH6QUno&#x60; for a voucher. | [optional]
**voucher** | [**\OpenAPI\Client\Model\Voucher**](Voucher.md) |  | [optional]
**promotion_tier** | [**\OpenAPI\Client\Model\PromotionTier**](PromotionTier.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\RedemptionRewardResult**](RedemptionRewardResult.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBodyGift**](RedemptionsRollbackCreateResponseBodyGift.md) |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBodyLoyaltyCard**](RedemptionsRollbackCreateResponseBodyLoyaltyCard.md) |  | [optional]
>>>>>>> Stashed changes

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
