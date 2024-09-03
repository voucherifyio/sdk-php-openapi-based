# # VouchersTransactionsExportCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique export ID. |
**object** | **string** | The type of object being represented. This object stores information about the &#x60;export&#x60;. | [default to 'export']
**created_at** | **\DateTime** | Timestamp representing the date and time when the export was scheduled in ISO 8601 format. |
**status** | **string** | Status of the export. Informs you whether the export has already been completed, i.e. indicates whether the file containing the exported data has been generated. | [default to 'SCHEDULED']
**channel** | **string** | The channel through which the export was triggered. | [default to 'API']
**exported_object** | **string** | The type of exported object. | [default to 'voucher_transactions']
**parameters** | [**\OpenAPI\Client\Model\VoucherTransactionsFilters**](VoucherTransactionsFilters.md) |  |
<<<<<<< Updated upstream
**result** | [**\OpenAPI\Client\Model\VoucherTransactionsExportResult**](VoucherTransactionsExportResult.md) |  |
**user_id** | **string** | Identifies the specific user who initiated the export through the Voucherify Dashboard; returned when the &#x60;channel&#x60; value is &#x60;WEBSITE&#x60;. |
=======
**result** | [**\OpenAPI\Client\Model\VouchersTransactionsExportCreateResponseBodyResult**](VouchersTransactionsExportCreateResponseBodyResult.md) |  | [optional]
**user_id** | **string** | Identifies the specific user who initiated the export through the Voucherify Dashboard; returned when the &#x60;channel&#x60; value is &#x60;WEBSITE&#x60;. | [optional]
>>>>>>> Stashed changes

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
