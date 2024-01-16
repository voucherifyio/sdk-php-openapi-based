# # OrdersListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. This object stores information about orders in a dictionary. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of order objects. | [default to 'orders']
**orders** | [**\OpenAPI\Client\Model\OrderCalculatedNoCustomerData[]**](OrderCalculatedNoCustomerData.md) | Contains array of order objects. |
**total** | **int** | Total number of orders. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
