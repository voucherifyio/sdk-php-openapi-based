# OpenAPI\Client\StackableDiscountsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**redeemStackedDiscounts()**](StackableDiscountsApi.md#redeemStackedDiscounts) | **POST** /v1/redemptions | Redeem Stackable Discounts |
| [**redeemStackedDiscountsClientSide()**](StackableDiscountsApi.md#redeemStackedDiscountsClientSide) | **POST** /client/v1/redemptions | Redeem Stackable Discounts (client-side) |
| [**rollbackStackedRedemptions()**](StackableDiscountsApi.md#rollbackStackedRedemptions) | **POST** /v1/redemptions/{parentRedemptionId}/rollbacks | Rollback Stackable Redemptions |
| [**validateStackedDiscounts()**](StackableDiscountsApi.md#validateStackedDiscounts) | **POST** /v1/validations | Validate Stackable Discounts |
| [**validateStackedDiscountsClientSide()**](StackableDiscountsApi.md#validateStackedDiscountsClientSide) | **POST** /client/v1/validations | Validate Stackable Discounts (client-side) |


## `redeemStackedDiscounts()`

```php
redeemStackedDiscounts($redemptions_redeem_request_body): \OpenAPI\Client\Model\RedemptionsRedeemResponseBody
```

Redeem Stackable Discounts

## How API returns calculated discounts and order amounts in the response  In the table below, you can see the logic the API follows to calculate discounts and amounts:  | **Field** | **Calculation** | **Description** | |:---|:---|:---| | amount | N/A | This field shows the order amount before applying any discount | | total_amount | `total_amount` = `amount` - `total_discount_amount` | This field shows the order amount after applying all the discounts | | discount_amount | `discount_amount` = `previous_discount_amount` + `applied_discount_amount` | This field sums up all order-level discounts up to and including the specific discount being calculated for the stacked redemption. | | items_discount_amount | sum(items, i => i.discount_amount) | This field sums up all product-specific discounts | | total_discount_amount | `total_discount_amount` = `discount_amount` + `items_discount_amount` | This field sums up all order-level and all product-specific discounts | | applied_discount_amount | N/A | This field shows the order-level discount applied in a particular request | | items_applied_discount_amount | sum(items, i => i.applied_discount_amount) | This field sums up all product-specific discounts applied in a particular request | | total_applied_discount_amount | `total_applied_discount_amount` = `applied_discount_amount` + `items_applied_discount_amount` | This field sums up all order-level and all product-specific discounts applied in a particular request |  <!-- theme: info --> > 📘 Rollbacks > > You can't roll back a child redemption. When you call rollback on a stacked redemption, all child redemptions will be rolled back. You need to refer to a parent redemption ID in your <!-- [rollback request](OpenAPI.json/paths/~1redemptions~1{parentRedemptionId}~1rollbacks/post) -->[rollback request](ref:rollback-stacked-redemptions).      <!-- theme: info --> > 📘 Also available on client-side > > This method is also accessible through public keys which you can use in client-side​ apps: mobile and web browser apps. Go to the dedicated [endpoint](ref:redeem-stacked-discounts-client-side) to learn more. > - Use `X-Client-Application-Id` as the application ID header. > - Use `X-Client-Token` as the appliction secret key header. > - Use client-side base URL. > - Use an `origin` header for your custom domain.

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


$apiInstance = new OpenAPI\Client\Api\StackableDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemptions_redeem_request_body = {"customer":{"source_id":"sample_customer","metadata":{"key":"value"}},"options":{"expand":["order","redeemable","category"]},"redeemables":[{"object":"voucher","id":"voucher-code"}],"session":{"type":"LOCK","key":"session_key"},"order":{"amount":55000,"status":"PAID","items":[{"quantity":2,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}},{"quantity":1,"price":15000,"source_id":"sample product2","related_object":"product","product":{"metadata":{"key":"value"}}}],"metadata":{"key":"value"}}}; // \OpenAPI\Client\Model\RedemptionsRedeemRequestBody

try {
    $result = $apiInstance->redeemStackedDiscounts($redemptions_redeem_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackableDiscountsApi->redeemStackedDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redemptions_redeem_request_body** | [**\OpenAPI\Client\Model\RedemptionsRedeemRequestBody**](../Model/RedemptionsRedeemRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsRedeemResponseBody**](../Model/RedemptionsRedeemResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemStackedDiscountsClientSide()`

```php
redeemStackedDiscountsClientSide($origin, $client_redemptions_redeem_request_body): \OpenAPI\Client\Model\ClientRedemptionsRedeemResponseBody
```

Redeem Stackable Discounts (client-side)

This method is accessible through public keys which you can use in client side requests coming from mobile and web browser applications.  ## How API returns calculated discounts and order amounts in the response  In the table below, you can see the logic the API follows to calculate discounts and amounts:  | **Field** | **Calculation** | **Description** | |:---|:---|:---| | amount | N/A | This field shows the order amount before applying any discount | | total_amount | `total_amount` = `amount` - `total_discount_amount` | This field shows the order amount after applying all the discounts | | discount_amount | `discount_amount` = `previous_discount_amount` + `applied_discount_amount` | This field sums up all order-level discounts up to and including the specific discount being calculated for the stacked redemption. | | items_discount_amount | sum(items, i => i.discount_amount) | This field sums up all product-specific discounts | | total_discount_amount | `total_discount_amount` = `discount_amount` + `items_discount_amount` | This field sums up all order-level and all product-specific discounts | | applied_discount_amount | N/A | This field shows the order-level discount applied in a particular request | | items_applied_discount_amount | sum(items, i => i.applied_discount_amount) | This field sums up all product-specific discounts applied in a particular request | | total_applied_discount_amount | `total_applied_discount_amount` = `applied_discount_amount` + `items_applied_discount_amount` | This field sums up all order-level and all product-specific discounts applied in a particular request |  <!-- theme: info --> > 📘 Rollbacks > > You can't roll back a child redemption. When you call rollback on a stacked redemption, all child redemptions will be rolled back. You need to refer to a parent redemption ID in your <!-- [rollback request](OpenAPI.json/paths/~1redemptions~1{parentRedemptionId}~1rollbacks/post) -->[rollback request](ref:rollback-stacked-redemptions).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Client-Application-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Application-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Application-Id', 'Bearer');

// Configure API key authorization: X-Client-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StackableDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$origin = 'origin_example'; // string | Indicates the origin (scheme, hostname, and port).
$client_redemptions_redeem_request_body = {"customer":{"source_id":"sample_customer","metadata":{"key":"value"}},"options":{"expand":["order","redeemable","category"]},"redeemables":[{"object":"voucher","id":"voucher-code"}],"session":{"type":"LOCK","key":"session_key"},"order":{"amount":55000,"status":"PAID","items":[{"quantity":2,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}},{"quantity":1,"price":15000,"source_id":"sample product2","related_object":"product","product":{"metadata":{"key":"value"}}}],"metadata":{"key":"value"}}}; // \OpenAPI\Client\Model\ClientRedemptionsRedeemRequestBody

try {
    $result = $apiInstance->redeemStackedDiscountsClientSide($origin, $client_redemptions_redeem_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackableDiscountsApi->redeemStackedDiscountsClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **origin** | **string**| Indicates the origin (scheme, hostname, and port). | |
| **client_redemptions_redeem_request_body** | [**\OpenAPI\Client\Model\ClientRedemptionsRedeemRequestBody**](../Model/ClientRedemptionsRedeemRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientRedemptionsRedeemResponseBody**](../Model/ClientRedemptionsRedeemResponseBody.md)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rollbackStackedRedemptions()`

```php
rollbackStackedRedemptions($parent_redemption_id, $reason, $tracking_id, $redemptions_rollbacks_create_request_body): \OpenAPI\Client\Model\RedemptionsRollbacksCreateResponseBody
```

Rollback Stackable Redemptions

Rollback a stackable redemption. When you rollback a stacked redemption, all child redemptions will be rolled back. Provide the parent redemption ID as the path parameter.

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


$apiInstance = new OpenAPI\Client\Api\StackableDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_redemption_id = 'parent_redemption_id_example'; // string | Unique identifier of a parent redemption, e.g. `r_JQfm73zWSJFQxs3bGxweYjgm`.
$reason = 'reason_example'; // string | Reason for the rollback.
$tracking_id = 'tracking_id_example'; // string | Customer's `source_id`.
$redemptions_rollbacks_create_request_body = {"customer":{"id":"cust_SolpIN5N4oZbCnrxZ5NHrbVB","name":"Annie Lemons","email":"annie@lemon.com","phone":"+1 933 222 3334","birthday":"1900-12-02","birthdate":"1900-12-01","address":{"city":"New York","state":"NY","line_1":"123 Main St.","line_2":"APT 3 BLG 5","country":"United States","postal_code":"100012"},"metadata":{"age":23}},"order":{"source_id":"test_rollback_8"},"metadata":{"location_id":["L2"]}}; // \OpenAPI\Client\Model\RedemptionsRollbacksCreateRequestBody | Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body.

try {
    $result = $apiInstance->rollbackStackedRedemptions($parent_redemption_id, $reason, $tracking_id, $redemptions_rollbacks_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackableDiscountsApi->rollbackStackedRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_redemption_id** | **string**| Unique identifier of a parent redemption, e.g. &#x60;r_JQfm73zWSJFQxs3bGxweYjgm&#x60;. | |
| **reason** | **string**| Reason for the rollback. | [optional] |
| **tracking_id** | **string**| Customer&#39;s &#x60;source_id&#x60;. | [optional] |
| **redemptions_rollbacks_create_request_body** | [**\OpenAPI\Client\Model\RedemptionsRollbacksCreateRequestBody**](../Model/RedemptionsRollbacksCreateRequestBody.md)| Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsRollbacksCreateResponseBody**](../Model/RedemptionsRollbacksCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateStackedDiscounts()`

```php
validateStackedDiscounts($validations_validate_request_body): \OpenAPI\Client\Model\ValidationsValidateResponseBody
```

Validate Stackable Discounts

Verify redeemables provided in the request. This method is designed for server side integration which means that it is accessible only through private keys.

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


$apiInstance = new OpenAPI\Client\Api\StackableDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validations_validate_request_body = {"customer":{"source_id":"sample_customer","metadata":{"key":"value"}},"options":{"expand":["order","redeemable","category"]},"redeemables":[{"object":"voucher","id":"voucher-code"}],"session":{"type":"LOCK"},"order":{"amount":55000,"status":"PAID","items":[{"quantity":2,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}},{"quantity":1,"price":15000,"source_id":"sample product2","related_object":"product","product":{"metadata":{"key":"value"}}}],"metadata":{"key":"value"}}}; // \OpenAPI\Client\Model\ValidationsValidateRequestBody

try {
    $result = $apiInstance->validateStackedDiscounts($validations_validate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackableDiscountsApi->validateStackedDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validations_validate_request_body** | [**\OpenAPI\Client\Model\ValidationsValidateRequestBody**](../Model/ValidationsValidateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationsValidateResponseBody**](../Model/ValidationsValidateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateStackedDiscountsClientSide()`

```php
validateStackedDiscountsClientSide($origin, $client_validations_validate_request_body): \OpenAPI\Client\Model\ClientValidationsValidateResponseBody
```

Validate Stackable Discounts (client-side)

Verify redeemables provided in the request. This method is accessible through public keys which you can use in client side requests coming from mobile and web browser applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Client-Application-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Application-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Application-Id', 'Bearer');

// Configure API key authorization: X-Client-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StackableDiscountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$origin = 'origin_example'; // string | Indicates the origin (scheme, hostname, and port).
$client_validations_validate_request_body = {"customer":{"source_id":"sample_customer","metadata":{"key":"value"}},"options":{"expand":["order","redeemable","category"]},"redeemables":[{"object":"voucher","id":"voucher-code"}],"session":{"type":"LOCK"},"order":{"amount":55000,"status":"PAID","items":[{"quantity":2,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}},{"quantity":1,"price":15000,"source_id":"sample product2","related_object":"product","product":{"metadata":{"key":"value"}}}],"metadata":{"key":"value"}}}; // \OpenAPI\Client\Model\ClientValidationsValidateRequestBody

try {
    $result = $apiInstance->validateStackedDiscountsClientSide($origin, $client_validations_validate_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StackableDiscountsApi->validateStackedDiscountsClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **origin** | **string**| Indicates the origin (scheme, hostname, and port). | |
| **client_validations_validate_request_body** | [**\OpenAPI\Client\Model\ClientValidationsValidateRequestBody**](../Model/ClientValidationsValidateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientValidationsValidateResponseBody**](../Model/ClientValidationsValidateResponseBody.md)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
