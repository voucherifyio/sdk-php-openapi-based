# # VouchersBalanceUpdateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The incremental amount to be added to or removed from the current balance on the gift card or loyalty card. Value is multiplied by 100 to precisely represent 2 decimal places. For example, $100 amount is written as 10000. To remove balance, simply add a minus sign before the value, i.e. to remove $20, use -2000. |
**source_id** | **string** | The merchant’s transaction ID if it is different from the Voucherify transaction ID. It is really useful in case of an integration between multiple systems. It can be a transaction ID from a CRM system, database or 3rd-party service. | [optional]
**reason** | **string** | Reason why the transaction occurred. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)