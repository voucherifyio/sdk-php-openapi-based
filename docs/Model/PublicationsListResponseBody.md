# # PublicationsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. This object stores information about publications in a dictionary. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of publications. | [default to 'publications']
**publications** | [**\OpenAPI\Client\Model\PublicationsListResponseBodyPublicationsItem[]**](PublicationsListResponseBodyPublicationsItem.md) | Response schema model for publishing vouchers to a specific customer. |
**total** | **int** | Total number of publications. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
