# # VouchersTransactionsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of transaction objects. | [default to 'data']
**data** | [**\OpenAPI\Client\Model\VoucherTransaction[]**](VoucherTransaction.md) | A dictionary that contains an array of transactions. Each entry in the array is a separate transaction object. |
**has_more** | **bool** | As query results are always limited (by the limit parameter), the &#x60;has_more&#x60; flag indicates whether there are more records for given filter parameters. This let&#39;s you know if you are able to run another request (with a different page or a different start date filter) to get more records returned in the results. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
