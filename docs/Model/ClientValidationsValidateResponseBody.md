# # ClientValidationsValidateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
<<<<<<< Updated upstream
**valid** | **bool** | The result of the validation. It takes all of the redeemables into account and returns a &#x60;false&#x60; if at least one redeemable is inapplicable. Returns &#x60;true&#x60; if all redeemables are applicable. |
**redeemables** | [**\OpenAPI\Client\Model\ValidationsValidateResponseBodyRedeemablesItem[]**](ValidationsValidateResponseBodyRedeemablesItem.md) |  |
**skipped_redeemables** | [**ValidationsRedeemableInapplicable[]**](ValidationsRedeemableInapplicable.md) | Lists validation results of each skipped redeemable. | [optional]
=======
**valid** | **bool** | The result of the validation. It takes all of the redeemables into account and returns a &#x60;false&#x60; if at least one redeemable is inapplicable. Returns &#x60;true&#x60; if all redeemables are applicable. | [optional]
**redeemables** | [**\OpenAPI\Client\Model\ClientValidationsValidateResponseBodyRedeemablesItem[]**](ClientValidationsValidateResponseBodyRedeemablesItem.md) |  | [optional]
**skipped_redeemables** | [**ValidationsRedeemableSkipped[]**](ValidationsRedeemableSkipped.md) | Lists validation results of each skipped redeemable. | [optional]
>>>>>>> Stashed changes
**inapplicable_redeemables** | [**ValidationsRedeemableInapplicable[]**](ValidationsRedeemableInapplicable.md) | Lists validation results of each inapplicable redeemable. | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**tracking_id** | **string** | Hashed customer source ID. | [optional]
**session** | [**\OpenAPI\Client\Model\Session**](Session.md) |  | [optional]
**stacking_rules** | [**\OpenAPI\Client\Model\StackingRules**](StackingRules.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
