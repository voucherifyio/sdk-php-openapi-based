# # CustomersSegmentsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. This object stores information about customer segments. | [default to 'list']
**data_ref** | **string** | Identifies the name of the JSON property that contains the array of segment IDs. | [default to 'data']
**data** | [**\OpenAPI\Client\Model\SimpleSegment[]**](SimpleSegment.md) | A dictionary that contains an array of segment IDs and names. |
**total** | **int** | Total number of segments the customer belongs to. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
