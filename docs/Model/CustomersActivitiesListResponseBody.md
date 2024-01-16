# # CustomersActivitiesListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. This object stores information about customer activities in a dictionary. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of customer activity objects. | [default to 'data']
**data** | [**\OpenAPI\Client\Model\CustomerActivity[]**](CustomerActivity.md) | Array of customer activity objects. |
**total** | **int** | Total number of customer activities. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
