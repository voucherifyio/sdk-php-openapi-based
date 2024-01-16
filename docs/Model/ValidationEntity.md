# # ValidationEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique validation id. | [optional]
**session_id** | **string** | Unique session id. | [optional]
**status** | **string** | The validation status | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the validation was created in ISO 8601 format. | [optional]
**customer_id** | **string** | Unique customer ID of the customer making the purchase. | [optional]
**redeemables** | [**\OpenAPI\Client\Model\ValidationsRedeemableApplicable[]**](ValidationsRedeemableApplicable.md) | Lists validation results of each redeemable. | [optional]
**skipped_redeemables** | [**\OpenAPI\Client\Model\ValidationsRedeemableInapplicable[]**](ValidationsRedeemableInapplicable.md) | Lists validation results of each redeemable. | [optional]
**inapplicable_redeemables** | [**\OpenAPI\Client\Model\ValidationsRedeemableSkipped[]**](ValidationsRedeemableSkipped.md) | Lists validation results of each redeemable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
