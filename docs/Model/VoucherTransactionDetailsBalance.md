# # VoucherTransactionDetailsBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of voucher whose balance is being adjusted due to the transaction. | [default to 'loyalty_card']
**total** | **int** | The available points prior to the transaction. |
**object** | **string** | The type of object represented by the JSON. | [default to 'balance']
**points** | **int** | The amount of points being used up in the transaction. |
**balance** | **int** | The points balance on the loyalty card after the points in the transaction are subtracted from the loyalty card. |
**related_object** | [**\OpenAPI\Client\Model\VoucherTransactionDetailsBalanceRelatedObject**](VoucherTransactionDetailsBalanceRelatedObject.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
