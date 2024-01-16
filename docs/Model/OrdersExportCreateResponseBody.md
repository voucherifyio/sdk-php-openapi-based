# # OrdersExportCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique export ID. |
**object** | **string** | The type of object being represented. This object stores information about the export. | [default to 'export']
**created_at** | **\DateTime** | Timestamp representing the date and time when the export was scheduled in ISO 8601 format. |
**status** | **string** | Status of the export. Informs you whether the export has already been completed, i.e. indicates whether the file containing the exported data has been generated. | [default to 'SCHEDULED']
**channel** | **string** | The channel through which the export was triggered. | [optional]
**result** | **object** | Contains the URL of the CSV file. |
**user_id** | **string** | Identifies the specific user who initiated the export through the Voucherify Dashboard; returned when the channel value is WEBSITE. |
**exported_object** | **string** | The type of object to be exported. | [default to 'order']
**parameters** | [**\OpenAPI\Client\Model\OrdersExportCreateRequestBodyParameters**](OrdersExportCreateRequestBodyParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
