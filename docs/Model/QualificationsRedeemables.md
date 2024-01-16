# # QualificationsRedeemables

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of object represented by JSON. Default is &#x60;list&#x60;. | [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of qualified redeemables. | [default to 'data']
**data** | [**\OpenAPI\Client\Model\QualificationsRedeemable[]**](QualificationsRedeemable.md) | Array of qualified redeemables. |
**total** | **int** | The number of redeemables returned in the API request. |
**has_more** | **bool** | As results are always limited, the &#x60;has_more&#x60; flag indicates whether there are more records for given parameters. This let&#39;s you know if you are able to run another request (with different options) to get more records returned in the results. |
**more_starting_after** | **\DateTime** | Timestamp representing the date and time to use in starting_after cursor to get more redeemables. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
