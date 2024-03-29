# OpenAPI\Client\RedemptionsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRedemption()**](RedemptionsApi.md#getRedemption) | **GET** /v1/redemptions/{redemptionId} | Get Redemption |
| [**getVoucherRedemptions()**](RedemptionsApi.md#getVoucherRedemptions) | **GET** /v1/vouchers/{code}/redemption | Get Voucher&#39;s Redemptions |
| [**listRedemptions()**](RedemptionsApi.md#listRedemptions) | **GET** /v1/redemptions | List Redemptions |
| [**rollbackRedemption()**](RedemptionsApi.md#rollbackRedemption) | **POST** /v1/redemptions/{redemptionId}/rollback | Rollback Redemption |


## `getRedemption()`

```php
getRedemption($redemption_id): \OpenAPI\Client\Model\RedemptionsGetResponseBody
```

Get Redemption

Return a redemption or redemption rollback object. This object can either be a successfull or failed redemption or redemption rollback.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemption_id = 'redemption_id_example'; // string | ID of previously created redemption.

try {
    $result = $apiInstance->getRedemption($redemption_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->getRedemption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redemption_id** | **string**| ID of previously created redemption. | |

### Return type

[**\OpenAPI\Client\Model\RedemptionsGetResponseBody**](../Model/RedemptionsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucherRedemptions()`

```php
getVoucherRedemptions($code): \OpenAPI\Client\Model\VouchersRedemptionGetResponseBody
```

Get Voucher's Redemptions

Retrieve the number of times a voucher was redeemed and each of the redemption details.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher.

try {
    $result = $apiInstance->getVoucherRedemptions($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->getVoucherRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher. | |

### Return type

[**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBody**](../Model/VouchersRedemptionGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRedemptions()`

```php
listRedemptions($limit, $page, $result, $campaign, $customer, $order, $created_at, $filters): \OpenAPI\Client\Model\RedemptionsListResponseBody
```

List Redemptions

Returns a list of redemptions previously created. The redemptions are returned in a sorted order, with the most recent redemptions appearing first. The response returns a list of redemptions of all vouchers.   ## Filtering results The result can be narrowed according to specified (or default) filters, for example, you can sort redemptions by date: `https://api.voucherify.io/v1/redemptions?limit=3&[created_at][before]=2017-09-08T13:52:18.227Z`. A filter based on the object `created_at` field narrows down the results and lists redemptions done before or after a particular date time. You can use the following options: `[created_at][after]`, `[created_at][before]`. A date value must be presented in ISO 8601 format (`2016-11-16T14:14:31Z` or `2016-11-16`). An example: `[created_at][before]=2017-09-08T13:52:18.227Z`.  ## Failed Redemptions  A redemption may fail for various reasons. You can figure out an exact reason from the `failure_code`: - `resource_not_found` - voucher with given code does not exist - `voucher_not_active` - voucher is not active yet (before start date) - `voucher_expired` - voucher has already expired (after expiration date) - `voucher_disabled` -  voucher has been disabled (`active: false`) - `quantity_exceeded` - voucher's redemptions limit has been exceeded - `gift_amount_exceeded` - gift amount has been exceeded - `customer_rules_violated` - customer did not match the segment - `order_rules_violated` - order did not match validation rules - `invalid_order` - order was specified incorrectly - `invalid_amount` - order amount was specified incorrectly - `missing_amount` - order amount was not specified - `missing_order_items` - order items were not specified - `missing_customer` - customer was not specified

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return.
$result = 'result_example'; // string | A filter on the list based on the redemption result. Available options are: `SUCCESS`, `FAILURE`. You can provide multiple values by repeating the param.
$campaign = 'campaign_example'; // string | A filter by the campaign **name** that the redemption resources originate from.
$customer = 'customer_example'; // string | Return redemptions performed by the customer with given `id` or `source_id`.
$order = new \OpenAPI\Client\Model\ParameterOrderListRedemptions(); // ParameterOrderListRedemptions | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$created_at = new \OpenAPI\Client\Model\ParameterCreatedBeforeAfter(); // ParameterCreatedBeforeAfter | A filter on the list based on the object `created_at` field. The value is a dictionary with the following options: `before`, `after`. A date value must be presented in ISO 8601 format (`2016-11-16T14:14:31Z` or `2016-11-16`). An example: `[created_at][before]=2017-09-08T13:52:18.227Z`
$filters = new \OpenAPI\Client\Model\ParameterFiltersListRedemptions(); // ParameterFiltersListRedemptions | Filters for listing responses.

try {
    $result = $apiInstance->listRedemptions($limit, $page, $result, $campaign, $customer, $order, $created_at, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->listRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. | [optional] |
| **result** | **string**| A filter on the list based on the redemption result. Available options are: &#x60;SUCCESS&#x60;, &#x60;FAILURE&#x60;. You can provide multiple values by repeating the param. | [optional] |
| **campaign** | **string**| A filter by the campaign **name** that the redemption resources originate from. | [optional] |
| **customer** | **string**| Return redemptions performed by the customer with given &#x60;id&#x60; or &#x60;source_id&#x60;. | [optional] |
| **order** | [**ParameterOrderListRedemptions**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **created_at** | [**ParameterCreatedBeforeAfter**](../Model/.md)| A filter on the list based on the object &#x60;created_at&#x60; field. The value is a dictionary with the following options: &#x60;before&#x60;, &#x60;after&#x60;. A date value must be presented in ISO 8601 format (&#x60;2016-11-16T14:14:31Z&#x60; or &#x60;2016-11-16&#x60;). An example: &#x60;[created_at][before]&#x3D;2017-09-08T13:52:18.227Z&#x60; | [optional] |
| **filters** | [**ParameterFiltersListRedemptions**](../Model/.md)| Filters for listing responses. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsListResponseBody**](../Model/RedemptionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rollbackRedemption()`

```php
rollbackRedemption($redemption_id, $reason, $tracking_id, $redemptions_rollback_create_request_body): \OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBody
```

Rollback Redemption

Your business logic may include a case when you need to undo a redemption. You can revert a redemption by calling this API endpoint.    ## Effect  The operation  - creates a rollback entry in voucher's redemption history (`redemption.redemption_entries`) and  - gives 1 redemption back to the pool (decreases `redeemed_quantity` by 1).  ## Returned funds  In case of *gift card vouchers*, this method returns funds back according to the source redemption. In case of *loyalty card vouchers*, this method returns points back according to the source redemption.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemption_id = 'redemption_id_example'; // string | The original redemption ID to be rolled back (undone).
$reason = 'reason_example'; // string | Reason for the rollback.
$tracking_id = 'tracking_id_example'; // string | Customer's `source_id`.
$redemptions_rollback_create_request_body = {"customer":{"id":"cust_SolpIN5N4oZbCnrxZ5NHrbVB","name":"Annie Lemons","email":"annie@lemon.com","phone":"+1 933 222 3334","birthday":"1900-12-02","birthdate":"1900-12-01","address":{"city":"New York","state":"NY","line_1":"123 Main St.","line_2":"APT 3 BLG 5","country":"United States","postal_code":"100012"},"metadata":{"age":23}},"order":{"source_id":"test_rollback_8"},"metadata":{"location_id":["L2"]}}; // \OpenAPI\Client\Model\RedemptionsRollbackCreateRequestBody | Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body.

try {
    $result = $apiInstance->rollbackRedemption($redemption_id, $reason, $tracking_id, $redemptions_rollback_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->rollbackRedemption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redemption_id** | **string**| The original redemption ID to be rolled back (undone). | |
| **reason** | **string**| Reason for the rollback. | [optional] |
| **tracking_id** | **string**| Customer&#39;s &#x60;source_id&#x60;. | [optional] |
| **redemptions_rollback_create_request_body** | [**\OpenAPI\Client\Model\RedemptionsRollbackCreateRequestBody**](../Model/RedemptionsRollbackCreateRequestBody.md)| Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBody**](../Model/RedemptionsRollbackCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
