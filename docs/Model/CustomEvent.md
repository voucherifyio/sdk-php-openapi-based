# # CustomEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique custom event ID. | [optional]
**object** | **string** | The object represented is an &#x60;event&#x60;. | [optional] [default to 'event']
**type** | **string** | The event name. | [optional]
**customer** | [**\OpenAPI\Client\Model\SimpleCustomerRequiredObjectType**](SimpleCustomerRequiredObjectType.md) | A simple customer object |
**referral** | [**\OpenAPI\Client\Model\CustomerActivityDataEventReferral**](CustomerActivityDataEventReferral.md) |  | [optional]
**loyalty** | [**\OpenAPI\Client\Model\CustomerActivityDataEventLoyalty**](CustomerActivityDataEventLoyalty.md) |  | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a customer. The metadata object stores all custom attributes assigned to the customer object. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the custom event was created. Timestamp is presented in the ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
