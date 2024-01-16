# # ValidationRulesListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. This object stores information about validation rules. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of validation rules. | [default to 'data']
**data** | [**\OpenAPI\Client\Model\ValidationRule[]**](ValidationRule.md) | An array of validation rules. |
**total** | **int** | Total number of validation rules in the project. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
