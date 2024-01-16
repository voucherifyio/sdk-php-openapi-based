# # ProductsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. This object stores information about products in a dictionary. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of product objects. | [default to 'products']
**products** | [**\OpenAPI\Client\Model\Product[]**](Product.md) | Contains array of product objects. |
**total** | **int** | Total number of product objects. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
