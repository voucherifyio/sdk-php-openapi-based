# # ProductCollectionsItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
<<<<<<< Updated upstream
**id** | **string** | Product collection ID. |
**name** | **string** | Unique user-defined product collection name. |
**type** | **string** | Describes whether the product collection is dynamic (products come in and leave based on set criteria) or static (manually selected products). |
**filter** | [**\OpenAPI\Client\Model\ProductCollectionsCreateRequestBodyFilter**](ProductCollectionsCreateRequestBodyFilter.md) |  | [optional]
=======
**id** | **string** | Product collection ID. | [optional]
**name** | **string** | Unique user-defined product collection name. | [optional]
**type** | **string** | Describes whether the product collection is dynamic (products come in and leave based on set criteria) or static (manually selected products). | [optional]
**filter** | [**\OpenAPI\Client\Model\ProductCollectionsItemFilter**](ProductCollectionsItemFilter.md) |  | [optional]
>>>>>>> Stashed changes
**products** | [**\OpenAPI\Client\Model\ProductCollectionsItemProductsItem[]**](ProductCollectionsItemProductsItem.md) | Defines a set of products for a &#x60;STATIC&#x60; product collection type. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the product collection was created in ISO 8601 format. |
**object** | **string** | The type of object represented by JSON. This object stores information about the static product collection. | [default to 'products_collection']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
