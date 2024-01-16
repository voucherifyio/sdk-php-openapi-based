# # CustomerActivityDataRedemptionRewardSku

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**source_id** | **string** |  | [optional]
**product_id** | **string** | The parent product&#39;s unique ID. | [optional]
**sku** | **string** |  | [optional]
**price** | **int** | Unit price. It is represented by a value multiplied by 100 to accurately reflect 2 decimal places, such as &#x60;$100.00&#x60; being expressed as &#x60;10000&#x60;. | [optional]
**currency** | **string** | SKU price currency. | [optional]
**attributes** | **object** |  | [optional]
**image_url** | **string** | The HTTPS URL pointing to the .png or .jpg file that will be used to render the SKU image. | [optional]
**metadata** | **object** |  | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the SKU was created in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the SKU was updated in ISO 8601 format. | [optional]
**object** | **string** | The type of object represented by JSON. This object stores information about the &#x60;SKU&#x60;. | [optional] [default to 'sku']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
