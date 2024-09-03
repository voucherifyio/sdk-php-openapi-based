# # ProductCollectionsCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
<<<<<<< Updated upstream
**type** | **string** | Show that the product collection is static (manually selected products). | [default to 'STATIC']
**name** | **string** | Unique user-defined product collection name. |
**products** | [**\OpenAPI\Client\Model\ProductCollectionsCreateDynamicRequestBodyProductsItem[]**](ProductCollectionsCreateDynamicRequestBodyProductsItem.md) | Defines a set of products for a &#x60;STATIC&#x60; product collection type. | [optional]
=======
**type** | **string** | Show that the product collection is static (manually selected products). | [optional] [default to 'STATIC']
**name** | **string** | Unique user-defined product collection name. | [optional]
**products** | [**\OpenAPI\Client\Model\ProductCollectionsCreateRequestBodyProductsItem[]**](ProductCollectionsCreateRequestBodyProductsItem.md) | Defines a set of products for a &#x60;STATIC&#x60; product collection type. | [optional]
>>>>>>> Stashed changes
**filter** | [**\OpenAPI\Client\Model\ProductCollectionsCreateRequestBodyFilter**](ProductCollectionsCreateRequestBodyFilter.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
