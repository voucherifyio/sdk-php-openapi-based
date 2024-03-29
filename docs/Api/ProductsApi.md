# OpenAPI\Client\ProductsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProduct()**](ProductsApi.md#createProduct) | **POST** /v1/products | Create Product |
| [**createSku()**](ProductsApi.md#createSku) | **POST** /v1/products/{productId}/skus | Create SKU |
| [**deleteProduct()**](ProductsApi.md#deleteProduct) | **DELETE** /v1/products/{productId} | Delete Product |
| [**deleteSku()**](ProductsApi.md#deleteSku) | **DELETE** /v1/products/{productId}/skus/{skuId} | Delete SKU |
| [**getProduct()**](ProductsApi.md#getProduct) | **GET** /v1/products/{productId} | Get Product |
| [**getSku()**](ProductsApi.md#getSku) | **GET** /v1/skus/{skuId} | Get SKU |
| [**importProductsUsingCsv()**](ProductsApi.md#importProductsUsingCsv) | **POST** /v1/products/importCSV | Import Products using CSV |
| [**importSkusUsingCsv()**](ProductsApi.md#importSkusUsingCsv) | **POST** /v1/skus/importCSV | Import SKUs using CSV |
| [**listProducts()**](ProductsApi.md#listProducts) | **GET** /v1/products | List Products |
| [**listSkusInProduct()**](ProductsApi.md#listSkusInProduct) | **GET** /v1/products/{productId}/skus | List SKUs in Product |
| [**updateProduct()**](ProductsApi.md#updateProduct) | **PUT** /v1/products/{productId} | Update Product |
| [**updateProductsInBulk()**](ProductsApi.md#updateProductsInBulk) | **POST** /v1/products/bulk/async | Update Products in bulk |
| [**updateProductsMetadataInBulk()**](ProductsApi.md#updateProductsMetadataInBulk) | **POST** /v1/products/metadata/async | Update Products&#39; Metadata in bulk |
| [**updateSku()**](ProductsApi.md#updateSku) | **PUT** /v1/products/{productId}/skus/{skuId} | Update SKU |


## `createProduct()`

```php
createProduct($products_create_request_body): \OpenAPI\Client\Model\ProductsCreateResponseBody
```

Create Product

Creates a product object.  <!-- theme: info -->  > 📘 Upsert Mode > > If you pass an `id` or a `source_id` that already exists in the product database, Voucherify will return a related product object with updated fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_create_request_body = {"source_id":"first_product","name":"Samsung Phone","price":200000,"attributes":["color","memory","processor"],"metadata":{"test":true,"vendor":"Online Store"},"image_url":"https://www.website.com/image.png"}; // \OpenAPI\Client\Model\ProductsCreateRequestBody | Specify the product parameters.

try {
    $result = $apiInstance->createProduct($products_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products_create_request_body** | [**\OpenAPI\Client\Model\ProductsCreateRequestBody**](../Model/ProductsCreateRequestBody.md)| Specify the product parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsCreateResponseBody**](../Model/ProductsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSku()`

```php
createSku($product_id, $products_skus_create_request_body): \OpenAPI\Client\Model\ProductsSkusCreateResponseBody
```

Create SKU

This method adds product variants to a <!-- [created product](OpenAPI.json/paths/~1products/post) -->[created product](ref:create-product).   <!-- theme: info -->  > 📘 Upsert Mode > > If you pass an `id` or a `source_id` that already exists in the sku database, Voucherify will return a related sku object with updated fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | A Voucherify <!-- [product](OpenAPI.json/components/schemas/Product) -->[product](ref:get-product) ID or product source ID.
$products_skus_create_request_body = {"source_id":"first_product_sku_1","sku":"Samsung phone 256GB","price":1300,"currency":"USD","attributes":{"color":"vintage-black","memory":"256","processor":"Intel"},"image_url":"https://www.website.com/image.png","metadata":{"imported":true}}; // \OpenAPI\Client\Model\ProductsSkusCreateRequestBody | Specify the SKU parameters to be created.

try {
    $result = $apiInstance->createSku($product_id, $products_skus_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| A Voucherify &lt;!-- [product](OpenAPI.json/components/schemas/Product) --&gt;[product](ref:get-product) ID or product source ID. | |
| **products_skus_create_request_body** | [**\OpenAPI\Client\Model\ProductsSkusCreateRequestBody**](../Model/ProductsSkusCreateRequestBody.md)| Specify the SKU parameters to be created. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsSkusCreateResponseBody**](../Model/ProductsSkusCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProduct()`

```php
deleteProduct($product_id, $force)
```

Delete Product

This method deletes a product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | A Voucherify product ID or source ID.
$force = True; // bool | If this flag is set to `true`, the product will be removed permanently. Going forward, the user will be able to create another product with exactly the same `source_id`.

try {
    $apiInstance->deleteProduct($product_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| A Voucherify product ID or source ID. | |
| **force** | **bool**| If this flag is set to &#x60;true&#x60;, the product will be removed permanently. Going forward, the user will be able to create another product with exactly the same &#x60;source_id&#x60;. | [optional] |

### Return type

void (empty response body)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSku()`

```php
deleteSku($product_id, $sku_id, $force)
```

Delete SKU

This method deletes a product SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | A unique Voucherify <!-- [product](OpenAPI.json/components/schemas/Product) -->[product](ref:get-product) ID or product source ID.
$sku_id = 'sku_id_example'; // string | A Voucherify <!-- [SKU](OpenAPI.json/components/schemas/Sku) -->[SKU ID](ref:get-sku) or SKU source ID.
$force = True; // bool | If this flag is set to `true`, the SKU will be removed permanently. Going forward, the user will be able to create another SKU with exactly the same `source_id`.

try {
    $apiInstance->deleteSku($product_id, $sku_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| A unique Voucherify &lt;!-- [product](OpenAPI.json/components/schemas/Product) --&gt;[product](ref:get-product) ID or product source ID. | |
| **sku_id** | **string**| A Voucherify &lt;!-- [SKU](OpenAPI.json/components/schemas/Sku) --&gt;[SKU ID](ref:get-sku) or SKU source ID. | |
| **force** | **bool**| If this flag is set to &#x60;true&#x60;, the SKU will be removed permanently. Going forward, the user will be able to create another SKU with exactly the same &#x60;source_id&#x60;. | [optional] |

### Return type

void (empty response body)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProduct()`

```php
getProduct($product_id): \OpenAPI\Client\Model\ProductsGetResponseBody
```

Get Product

Retrieve product details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | A Voucherify product ID or source ID.

try {
    $result = $apiInstance->getProduct($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| A Voucherify product ID or source ID. | |

### Return type

[**\OpenAPI\Client\Model\ProductsGetResponseBody**](../Model/ProductsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSku()`

```php
getSku($sku_id): \OpenAPI\Client\Model\SkusGetResponseBody
```

Get SKU

Retrieve details of a SKU.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku_id = 'sku_id_example'; // string | A Voucherify SKU identifier or SKU source ID.

try {
    $result = $apiInstance->getSku($sku_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sku_id** | **string**| A Voucherify SKU identifier or SKU source ID. | |

### Return type

[**\OpenAPI\Client\Model\SkusGetResponseBody**](../Model/SkusGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importProductsUsingCsv()`

```php
importProductsUsingCsv($file): \OpenAPI\Client\Model\ProductsImportCsvCreateResponseBody
```

Import Products using CSV

Import products into the repository using a CSV file.    Curl Example <!-- title: \"Example Request\" lineNumbers: true --> ```cURL curl -X POST \\   https://api.voucherify.io/v1/products/importCSV \\   -F file=@/path/to/products.csv \\   -H \"X-App-Id: c70a6f00-cf91-4756-9df5-47628850002b\" \\   -H \"X-App-Token: 3266b9f8-e246-4f79-bdf0-833929b1380c\" ```  The CSV file has to include headers in the first line.  <!-- theme: info -->  > 📘 Standard product fields mapping > > - Create a **comma separated value (CSV) file** or download our CSV import template. You can find an example template [here](https://s3.amazonaws.com/helpscout.net/docs/assets/5902f1c12c7d3a057f88a36d/attachments/627b82ed68d51e779443f550/Import_products_template.csv). > - Supported CSV file headers: `name,source_id,price,attributes,image_url,Metadata_property_name` > - **Name** is a **required** field. The remaining fields in the CSV template are optional. > - Override/Update products' **names** in Voucherify using this method. Data will be updated for each product included in the CSV file whose **source_id** matches a source ID in Voucherify. No other data can be updated other than the product name. > - Note that dates and date-time attributes need to be provided in compliance with the **ISO 8601 norms**. For example, 2022-03-11T09:00:00.000Z or 2022-03-11 >    - `YYYY-MM-DD` >    - `YYYY-MM-DDTHH` >    - `YYYY-MM-DDTHH:mm` >    - `YYYY-MM-DDTHH:mm:ss` >    - `YYYY-MM-DDTHH:mm:ssZ` >    - `YYYY-MM-DDTHH:mm:ssZ` >    - `YYYY-MM-DDTHH:mm:ss.SSSZ` > - Columns that can't be mapped to standard fields, will be mapped to **Custom attributes** and added as **products' metadata**. There is no limit on the number of custom attributes that you can import as metadata.  > - To provide the proper data type, you need to add all custom attributes to the metadata schema **before importing the file**. Read more [here](https://support.voucherify.io/article/99-schema-validation-metadata#add-metadata). > - **Product attributes** (not custom attributes) need to be separated by a comma and enclosed in double quotes, i.e \"attribute1,attribute2\". > - Headers with metadata names **can't contain white-space characters**. > - If you import metadata defined in the schema as **arrays (multiple)**, you need to separate each value using a comma, for example:   >    - array of strings: \"subscribed,premium\"   >    - array of numbers: \"123,234\".  >    - array of dates: \"2000-01-01,2000-01-02\"  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File path.

try {
    $result = $apiInstance->importProductsUsingCsv($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->importProductsUsingCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File path. | |

### Return type

[**\OpenAPI\Client\Model\ProductsImportCsvCreateResponseBody**](../Model/ProductsImportCsvCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importSkusUsingCsv()`

```php
importSkusUsingCsv($file): \OpenAPI\Client\Model\SkusImportCsvCreateResponseBody
```

Import SKUs using CSV

Import SKUs into the repository using a CSV file.  The CSV file has to include headers in the first line. All properties which cannot be mapped to standard SKU fields will be added to the metadata object. You can find an example template [here](https://s3.amazonaws.com/helpscout.net/docs/assets/5902f1c12c7d3a057f88a36d/attachments/627b98d08c9b585083488a4c/Import_SKUS_template.csv).   Curl Example <!-- title: \"Example Request\" lineNumbers: true --> ```cURL curl -X POST \\   https://api.voucherify.io/v1/skus/importCSV \\   -F file=@/path/to/skus.csv \\   -H \"X-App-Id: c70a6f00-cf91-4756-9df5-47628850002b\" \\   -H \"X-App-Token: 3266b9f8-e246-4f79-bdf0-833929b1380c\" ``` > 🚧 Import sequence > > First import products using the [dedicated endpoint](ref:import-products-using-csv), then import SKUs using this endpoint to properly match SKUs to products.  <!-- theme: info -->  > 📘 Standard SKU fields mapping > > - **Required** fields are source_id and product_id. > - Supported CSV file headers: `product_id,sku,source_id,price,image_url,attributes` > - SKU **source_id**'s must be unique in the entire product catalog, no duplicates allowed. > - SKU attributes need to be in the form of a stringy-fied json, i.e.`\"{'color':'blue'}\"`. These attributes must be defined in the **product** beforehand in order for you to be able to import them to the SKU. > - You can use this method to update the following parameters in bulk: **sku** and the sku **price**.  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File path.

try {
    $result = $apiInstance->importSkusUsingCsv($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->importSkusUsingCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File path. | |

### Return type

[**\OpenAPI\Client\Model\SkusImportCsvCreateResponseBody**](../Model/SkusImportCsvCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProducts()`

```php
listProducts($limit, $page, $order, $start_date, $end_date): \OpenAPI\Client\Model\ProductsListResponseBody
```

List Products

Retrieve a list of products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return.
$order = new \OpenAPI\Client\Model\ParameterOrder(); // ParameterOrder | Sorts the results using one of the filtering options, where the dash `-` preceding a sorting option means sorting in a descending order.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.

try {
    $result = $apiInstance->listProducts($limit, $page, $order, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. | [optional] |
| **order** | [**ParameterOrder**](../Model/.md)| Sorts the results using one of the filtering options, where the dash &#x60;-&#x60; preceding a sorting option means sorting in a descending order. | [optional] |
| **start_date** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |
| **end_date** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsListResponseBody**](../Model/ProductsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSkusInProduct()`

```php
listSkusInProduct($product_id, $limit, $page, $order, $start_date, $end_date): \OpenAPI\Client\Model\ProductsSkusListResponseBody
```

List SKUs in Product

Retrieve all SKUs for a given product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | A Voucherify <!-- [product](OpenAPI.json/components/schemas/Product) -->[product](ref:get-product) ID or product source ID.
$limit = 56; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return.
$order = new \OpenAPI\Client\Model\ParameterOrder(); // ParameterOrder | Sorts the results using one of the filtering options, where the dash `-` preceding a sorting option means sorting in a descending order.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.

try {
    $result = $apiInstance->listSkusInProduct($product_id, $limit, $page, $order, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->listSkusInProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| A Voucherify &lt;!-- [product](OpenAPI.json/components/schemas/Product) --&gt;[product](ref:get-product) ID or product source ID. | |
| **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. | [optional] |
| **order** | [**ParameterOrder**](../Model/.md)| Sorts the results using one of the filtering options, where the dash &#x60;-&#x60; preceding a sorting option means sorting in a descending order. | [optional] |
| **start_date** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |
| **end_date** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsSkusListResponseBody**](../Model/ProductsSkusListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProduct()`

```php
updateProduct($product_id, $products_update_request_body): \OpenAPI\Client\Model\ProductsUpdateResponseBody
```

Update Product

Updates the specified product by setting the values of the parameters passed in the request body. Any parameters not provided in the payload will be left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | A Voucherify product ID or source ID.
$products_update_request_body = {"price":210000}; // \OpenAPI\Client\Model\ProductsUpdateRequestBody | Specify the parameters of the product that are to be updated.

try {
    $result = $apiInstance->updateProduct($product_id, $products_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| A Voucherify product ID or source ID. | |
| **products_update_request_body** | [**\OpenAPI\Client\Model\ProductsUpdateRequestBody**](../Model/ProductsUpdateRequestBody.md)| Specify the parameters of the product that are to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsUpdateResponseBody**](../Model/ProductsUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductsInBulk()`

```php
updateProductsInBulk($products_update_in_bulk_request_body): \OpenAPI\Client\Model\ProductsUpdateInBulkResponseBody
```

Update Products in bulk

Update several products in one asynchronous operation.   In one request, it is possible to update a maximum of **100** records. In the response body, you get a unique async action identifier. If a requested product object is not found, then an **upsert** occurs. This is reflected in the <!-- [Get Async Action](OpenAPI.json/paths/~1async-actions~1{asyncActionId}/get) -->[Get Async Action](ref:get-async-action) endpoint as follows:    <!-- title: \"Response\" lineNumbers: true --> ```json {     \"found\": false,     \"updated\": true } ```  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_update_in_bulk_request_body = [{"source_id":"first_product","name":"Samsung Phone 1","price":220000,"attributes":["color","memory","processor"],"metadata":{"test":true,"vendor":"Online Store - 3"},"image_url":"https://voucherify-uploads.s3.amazonaws.com/org_2qt8DYlM/img_Z2qvs2KFnQyo2Ohz4uhsjGtf.png"},{"source_id":"second_product","name":"Samsung Phone 2","price":230000,"attributes":["color","memory","processor"],"metadata":{"test":true,"vendor":"Online Store - 4"},"image_url":"https://voucherify-uploads.s3.amazonaws.com/org_2qt8DYlM/img_Z2qvs2KFnQyo2Ohz4uhsjGtf.png"}]; // \OpenAPI\Client\Model\ProductsUpdateInBulkRequestBody[] | Create an array of product objects, each with the parameters which you want to update.

try {
    $result = $apiInstance->updateProductsInBulk($products_update_in_bulk_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductsInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products_update_in_bulk_request_body** | [**\OpenAPI\Client\Model\ProductsUpdateInBulkRequestBody[]**](../Model/ProductsUpdateInBulkRequestBody.md)| Create an array of product objects, each with the parameters which you want to update. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsUpdateInBulkResponseBody**](../Model/ProductsUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProductsMetadataInBulk()`

```php
updateProductsMetadataInBulk($products_metadata_update_in_bulk_request_body): \OpenAPI\Client\Model\ProductsMetadataUpdateInBulkResponseBody
```

Update Products' Metadata in bulk

Update several product metadata properties in one asynchronous operation.   In one request, it is possible to update a maximum of **100** records. In the response body, you get a unique async action identifier. If a requested product object is not found, then an **upsert** occurs. This is reflected in the <!-- [Get Async Action](OpenAPI.json/paths/~1async-actions~1{asyncActionId}/get) -->[Get Async Action](ref:get-async-action) endpoint as follows:    <!-- title: \"Response\" lineNumbers: true --> ```json {     \"found\": false,     \"updated\": true } ```  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$products_metadata_update_in_bulk_request_body = {"source_ids":["123-567-3433","test_volleyball"],"metadata":{"label":true,"origin":"PL"}}; // \OpenAPI\Client\Model\ProductsMetadataUpdateInBulkRequestBody | Specify the list of product source IDs and the metadata key value pairs to be udpated for these products.

try {
    $result = $apiInstance->updateProductsMetadataInBulk($products_metadata_update_in_bulk_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductsMetadataInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **products_metadata_update_in_bulk_request_body** | [**\OpenAPI\Client\Model\ProductsMetadataUpdateInBulkRequestBody**](../Model/ProductsMetadataUpdateInBulkRequestBody.md)| Specify the list of product source IDs and the metadata key value pairs to be udpated for these products. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsMetadataUpdateInBulkResponseBody**](../Model/ProductsMetadataUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSku()`

```php
updateSku($product_id, $sku_id, $products_skus_update_request_body): \OpenAPI\Client\Model\ProductsSkusUpdateResponseBody
```

Update SKU

Updates the specified SKU by setting the values of the parameters passed in the request body. Any parameters not provided in the payload will be left unchanged.  Fields other than the ones listed in the request body schema won't be modified. Even if provided, they will be silently skipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 'product_id_example'; // string | A unique Voucherify <!-- [product](OpenAPI.json/components/schemas/Product) -->[product](ref:get-product) ID or product source ID.
$sku_id = 'sku_id_example'; // string | A Voucherify <!-- [SKU](OpenAPI.json/components/schemas/Sku) -->[SKU ID](ref:get-sku) or SKU source ID.
$products_skus_update_request_body = {"price":210000,"currency":"PLN"}; // \OpenAPI\Client\Model\ProductsSkusUpdateRequestBody | Specify the parameters to be updated.

try {
    $result = $apiInstance->updateSku($product_id, $sku_id, $products_skus_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateSku: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **product_id** | **string**| A unique Voucherify &lt;!-- [product](OpenAPI.json/components/schemas/Product) --&gt;[product](ref:get-product) ID or product source ID. | |
| **sku_id** | **string**| A Voucherify &lt;!-- [SKU](OpenAPI.json/components/schemas/Sku) --&gt;[SKU ID](ref:get-sku) or SKU source ID. | |
| **products_skus_update_request_body** | [**\OpenAPI\Client\Model\ProductsSkusUpdateRequestBody**](../Model/ProductsSkusUpdateRequestBody.md)| Specify the parameters to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductsSkusUpdateResponseBody**](../Model/ProductsSkusUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
