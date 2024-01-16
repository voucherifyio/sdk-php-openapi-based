# OpenAPI\Client\VouchersApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteVoucher()**](VouchersApi.md#deleteVoucher) | **DELETE** /v1/vouchers/{code} | Delete Voucher |
| [**disableVoucher()**](VouchersApi.md#disableVoucher) | **POST** /v1/vouchers/{code}/disable | Disable Voucher |
| [**enableVoucher()**](VouchersApi.md#enableVoucher) | **POST** /v1/vouchers/{code}/enable | Enable Voucher |
| [**exportVoucherTransactions()**](VouchersApi.md#exportVoucherTransactions) | **POST** /v1/vouchers/{code}/transactions/export | Export Voucher Transactions |
| [**getVoucher()**](VouchersApi.md#getVoucher) | **GET** /v1/vouchers/{code} | Get Voucher |
| [**importVouchersUsingCsv()**](VouchersApi.md#importVouchersUsingCsv) | **POST** /v1/vouchers/importCSV | Import Vouchers using CSV |
| [**listVoucherTransactions()**](VouchersApi.md#listVoucherTransactions) | **GET** /v1/vouchers/{code}/transactions | List Voucher Transactions |
| [**releaseValidationSession()**](VouchersApi.md#releaseValidationSession) | **DELETE** /v1/vouchers/{code}/sessions/{sessionKey} | Release Validation Session |
| [**updateVoucherBalance()**](VouchersApi.md#updateVoucherBalance) | **POST** /v1/vouchers/{code}/balance | Add or Remove Voucher Balance |


## `deleteVoucher()`

```php
deleteVoucher($code, $force)
```

Delete Voucher

Deletes a voucher. This operation cannot be undone. Additionally, this operation removes any redemptions on the voucher.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A unique **code** that identifies the voucher.
$force = True; // bool | If this flag is set to `true`, the voucher will be removed permanently. Going forward, the user will be able to create another voucher with exactly the same code.

try {
    $apiInstance->deleteVoucher($code, $force);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->deleteVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A unique **code** that identifies the voucher. | |
| **force** | **bool**| If this flag is set to &#x60;true&#x60;, the voucher will be removed permanently. Going forward, the user will be able to create another voucher with exactly the same code. | [optional] |

### Return type

void (empty response body)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableVoucher()`

```php
disableVoucher($code): \OpenAPI\Client\Model\VouchersDisableResponseBody
```

Disable Voucher

There are various times when you'll want to manage a voucher's accessibility. This can be done by two API methods for managing the voucher state - *enable* and *disable*.   ___ This method sets the voucher state to **inactive**. The voucher cannot be redeemed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. `v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u`.

try {
    $result = $apiInstance->disableVoucher($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->disableVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. &#x60;v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\VouchersDisableResponseBody**](../Model/VouchersDisableResponseBody.md)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableVoucher()`

```php
enableVoucher($code): \OpenAPI\Client\Model\VouchersEnableResponseBody
```

Enable Voucher

There are various times when you'll want to manage a voucher's accessibility. This can be done by two API methods for managing the voucher state - *enable* and *disable*.   ___ The method sets the voucher state to **active**. The voucher can be redeemed - only if the redemption occurs after the start date and the voucher is not expired.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. `v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u`.

try {
    $result = $apiInstance->enableVoucher($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->enableVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. &#x60;v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\VouchersEnableResponseBody**](../Model/VouchersEnableResponseBody.md)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportVoucherTransactions()`

```php
exportVoucherTransactions($code, $vouchers_transactions_export_create_request_body): \OpenAPI\Client\Model\VouchersTransactionsExportCreateResponseBody
```

Export Voucher Transactions

Export transactions that are associated with credit movements on a gift card or loyalty card.  | **Field** | **Definition** | **Example Export** | |:---|:---|:---| | id | Unique transaction ID. | vtx_0cb7811f1c07765800 | | type | Transaction type. | - `CREDITS_REMOVAL` <br> - `CREDITS_ADDITION` <br> - `CREDITS_REFUND` <br> - `CREDITS_REDEMPTION` <br> - `POINTS_ACCRUAL` <br> - `POINTS_CANCELLATION` <br> - `POINTS_REDEMPTION`<br> - `POINTS_REFUND`<br> - `POINTS_ADDITION`<br> - `POINTS_REMOVAL`<br> - `POINTS_EXPIRATION`<br> - `POINTS_TRANSFER_IN`<br> - `POINTS_TRANSFER_OUT` | | source_id | Unique transaction source ID. | 8638 | | reason | Contains the reason for the transaction if one was included originally. |  | | balance | The gift card or loyalty card balance after the transaction. |  | | amount | The amount of gift card or loyalty card credits being allocated during the transaction. This value can either be negative or positive depending on the nature of the transaction. |  | | created_at | Timestamp in ISO 8601 format representing the date and time when the transaction was created. | 2022-03-09T09:16:32.521Z  | | voucher_id | Unique Voucher ID. | v_dky7ksKfPX50Wb2Bxvcoeb1xT20b6tcp | | campaign_id | Parent campaign ID. | camp_FNYR4jhqZBM9xTptxDGgeNBV | | source|  Channel through which the transaction was initiated. | API | | details | More detailed information stored in the form of a JSON. | Provides more details related to the transaction in the form of an object. | | related_transaction_id | Unique transaction ID related to a receiver/donor card in the case of a points transfer from/to another card. | vtx_0c9afe802593b34b80 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = GIFT-CARD-1; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. `v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u`.
$vouchers_transactions_export_create_request_body = {"parameters":{"order":"-created_at","fields":["id","type","source_id","reason","balance","amount","created_at","voucher_id","campaign_id","details","source"]}}; // \OpenAPI\Client\Model\VouchersTransactionsExportCreateRequestBody | Specify the parameters for the transaction export.

try {
    $result = $apiInstance->exportVoucherTransactions($code, $vouchers_transactions_export_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->exportVoucherTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. &#x60;v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u&#x60;. | |
| **vouchers_transactions_export_create_request_body** | [**\OpenAPI\Client\Model\VouchersTransactionsExportCreateRequestBody**](../Model/VouchersTransactionsExportCreateRequestBody.md)| Specify the parameters for the transaction export. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersTransactionsExportCreateResponseBody**](../Model/VouchersTransactionsExportCreateResponseBody.md)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucher()`

```php
getVoucher($code): \OpenAPI\Client\Model\VouchersGetResponseBody
```

Get Voucher

Retrieves the voucher with the given `code` or unique Voucherify ID. You can either pass the voucher ID which was assigned by Voucherify, e.g., `v_7HxHkf4VAkMuc8u4lZs78lyRwhRze5UE`, or the `code` of the voucher as the path parameter value, e.g., `7fjWdr`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A unique **code** that identifies the voucher.

try {
    $result = $apiInstance->getVoucher($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A unique **code** that identifies the voucher. | |

### Return type

[**\OpenAPI\Client\Model\VouchersGetResponseBody**](../Model/VouchersGetResponseBody.md)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importVouchersUsingCsv()`

```php
importVouchersUsingCsv($file): \OpenAPI\Client\Model\VouchersImportCsvCreateResponseBody
```

Import Vouchers using CSV

Import standalone vouchers into the repository using a CSV file.  The CSV file has to include headers in the first line. All properties listed in the file headers that cannot be mapped to standard voucher fields will be added to the metadata object.    You can find an example CSV file [here](https://support.voucherify.io/article/45-import-codes-and-share-them-digitally#coupons). ___ <!-- title: \"cURL Example Request\" lineNumbers: true --> ```cURL cURL example curl -X POST \\   https://api.voucherify.io/v1/vouchers/importCSV \\   -F file=@/path/to/vouchers.csv \\   -H \"X-App-Id: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx\" \\   -H \"X-App-Token: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx\" ```  <!-- theme: info -->  > 📘 Standard voucher fields mapping > > - Go to the <!-- [import vouchers](OpenAPI.json/paths/~1vouchers~1import) -->[import vouchers](ref:import-vouchers) endpoint to see all standard CSV fields description (body params section). > - Supported CSV file headers: Code,Voucher Type,Value,Discount Type,Category,Start Date,Expiration Date,Redemption Limit,Redeemed Quantity, Redeemed Amount,Active,Additional Info,Custom Metadata Property Name >- **Start and expiration dates** need to be provided in compliance with the ISO 8601 norms. For example, 2020-03-11T09:00:00.000Z.   >    - `YYYY-MM-DD` >    - `YYYY-MM-DDTHH` >    - `YYYY-MM-DDTHH:mm` >    - `YYYY-MM-DDTHH:mm:ss` >    - `YYYY-MM-DDTHH:mm:ssZ` >    - `YYYY-MM-DDTHH:mm:ssZ` >    - `YYYY-MM-DDTHH:mm:ss.SSSZ` > - Custom code attributes (not supported by-default) need to be added as code **metadata**. > - You **cannot import the same codes** to a single Voucherify Project.  <!-- theme: info -->  > 📘 Categories > > In the structure representing your data, you can define a category that the voucher belongs to. You can later use the category of a voucher to group and search by specific criteria in the Dashboard and using the [List Vouchers](ref:list-vouchers) endpoint.  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File path.

try {
    $result = $apiInstance->importVouchersUsingCsv($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->importVouchersUsingCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File path. | |

### Return type

[**\OpenAPI\Client\Model\VouchersImportCsvCreateResponseBody**](../Model/VouchersImportCsvCreateResponseBody.md)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoucherTransactions()`

```php
listVoucherTransactions($code, $limit, $page): \OpenAPI\Client\Model\VouchersTransactionsListResponseBody
```

List Voucher Transactions

List transactions that are associated with credit movements on a gift card or loyalty card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. `v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u`.
$limit = 56; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return.

try {
    $result = $apiInstance->listVoucherTransactions($code, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->listVoucherTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. &#x60;v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u&#x60;. | |
| **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersTransactionsListResponseBody**](../Model/VouchersTransactionsListResponseBody.md)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseValidationSession()`

```php
releaseValidationSession($code, $session_key)
```

Release Validation Session

Manually release a validation session that has been set up for the voucher. This method undos the actions that are explained in our guide on how a validation session was established, you can read more [here](doc:locking-validation-session).   > 📘 Release Session using Dashboard > > You can also use the Validations Manager in the Dashboard to unlock sessions. [Read more](https://support.voucherify.io/article/16-dashboard-sections#validations).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify.
$session_key = ssn_yQGMTeKBSw8OOuFPwlBEjzGy8d8VA9Ts; // string | A unique session identifier.

try {
    $apiInstance->releaseValidationSession($code, $session_key);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->releaseValidationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify. | |
| **session_key** | **string**| A unique session identifier. | |

### Return type

void (empty response body)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoucherBalance()`

```php
updateVoucherBalance($code, $vouchers_balance_update_request_body): \OpenAPI\Client\Model\VouchersBalanceUpdateResponseBody
```

Add or Remove Voucher Balance

Add balance to an existing gift card or loyalty card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token-1
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. `v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u`.
$vouchers_balance_update_request_body = {"amount":10000}; // \OpenAPI\Client\Model\VouchersBalanceUpdateRequestBody | Provide the amount to be added to/subtracted from the voucher.

try {
    $result = $apiInstance->updateVoucherBalance($code, $vouchers_balance_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVoucherBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. &#x60;v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u&#x60;. | |
| **vouchers_balance_update_request_body** | [**\OpenAPI\Client\Model\VouchersBalanceUpdateRequestBody**](../Model/VouchersBalanceUpdateRequestBody.md)| Provide the amount to be added to/subtracted from the voucher. | |

### Return type

[**\OpenAPI\Client\Model\VouchersBalanceUpdateResponseBody**](../Model/VouchersBalanceUpdateResponseBody.md)

### Authorization

[X-App-Id-1](../../README.md#X-App-Id-1), [X-App-Token-1](../../README.md#X-App-Token-1)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
