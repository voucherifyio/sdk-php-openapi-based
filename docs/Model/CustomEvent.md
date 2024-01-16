# # CustomEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique custom event ID. | [optional]
**object** | **string** | The object represented is an &#x60;event&#x60;. | [default to 'event']
**type** | **string** | The event name. |
**customer** | [**\OpenAPI\Client\Model\SimpleCustomerRequiredObjectType**](SimpleCustomerRequiredObjectType.md) |  |
**referral** | [**\OpenAPI\Client\Model\CustomEventReferral**](CustomEventReferral.md) |  |
**loyalty** | **object** |  |
**metadata** | **object** | A set of custom key/value pairs that you can attach to a customer. The metadata object stores all custom attributes assigned to the custom event. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the custom event was created in ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
