# # LoyaltiesMembersBalanceUpdateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points** | **int** | The incremental points removed or added to the current balance on the loyalty card. |
**total** | **int** | The total of points accrued over the lifetime of the loyalty card. |
**balance** | **int** | The balance after adding/removing points. |
**type** | **string** | The type of voucher being modified. |
**object** | **string** | The type of object represented by JSON. Default is balance. | [default to 'balance']
**related_object** | [**\OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateResponseBodyRelatedObject**](LoyaltiesMembersBalanceUpdateResponseBodyRelatedObject.md) |  |
**operation_type** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
