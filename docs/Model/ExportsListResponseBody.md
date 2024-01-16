# # ExportsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. This object stores information about exports. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of exports. | [default to 'exports']
**exports** | [**\OpenAPI\Client\Model\Export[]**](Export.md) | An array of export objects. |
**total** | **int** | Total number of exports. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
