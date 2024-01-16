# # ClientValidationsValidateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**valid** | **bool** | The result of the validation. It takes all of the redeemables into account and returns a &#x60;false&#x60; if at least one redeemable is inapplicable. Returns &#x60;true&#x60; if all redeemables are applicable. |
**redeemables** | [**\OpenAPI\Client\Model\ClientValidationsValidateResponseBodyRedeemablesItem[]**](ClientValidationsValidateResponseBodyRedeemablesItem.md) | Lists validation results of each redeemable. If a redeemable can be applied, the API returns &#x60;\&quot;status\&quot;: \&quot;APPLICABLE\&quot;&#x60;. |
**order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**tracking_id** | **string** | Hashed customer source ID. | [optional]
**session** | [**\OpenAPI\Client\Model\Session**](Session.md) |  | [optional]
**application_mode** | **string** |  |
**inapplicable_redeemables** | [**ValidationsRedeemableInapplicable[]**](ValidationsRedeemableInapplicable.md) | Lists validation results of each inapplicable redeemable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
