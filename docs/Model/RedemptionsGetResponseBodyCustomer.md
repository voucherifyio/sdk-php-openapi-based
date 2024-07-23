# # RedemptionsGetResponseBodyCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of an existing customer that will be linked to redemption in this request. | [optional]
**source_id** | **string** | A unique identifier of the customer who validates a voucher. It can be a customer ID or email from a CRM system, database, or a third-party service. If you also pass a customer ID (unique ID assigned by Voucherify), the source ID will be ignored. | [optional]
**name** | **string** | Customer&#39;s first and last name. | [optional]
**email** | **string** | Customer&#39;s email address. | [optional]
**metadata** | **object** |  | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'customer']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
