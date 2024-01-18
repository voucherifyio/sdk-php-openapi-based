# OpenAPI\Client\CustomersApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomersApi.md#createCustomer) | **POST** /v1/customers | Create Customer |
| [**customerPermanentlyDeletion()**](CustomersApi.md#customerPermanentlyDeletion) | **POST** /v1/customers/{customerId}/permanent-deletion | Delete Customer Permanently |
| [**deleteCustomer()**](CustomersApi.md#deleteCustomer) | **DELETE** /v1/customers/{customerId} | Delete Customer |
| [**getCustomer()**](CustomersApi.md#getCustomer) | **GET** /v1/customers/{customerId} | Get Customer |
| [**importCustomersUsingCsv()**](CustomersApi.md#importCustomersUsingCsv) | **POST** /v1/customers/importCSV | Import and Update Customers using CSV |
| [**listCustomerActivities()**](CustomersApi.md#listCustomerActivities) | **GET** /v1/customers/{customerId}/activities | List Customer Activities |
| [**listCustomerSegments()**](CustomersApi.md#listCustomerSegments) | **GET** /v1/customers/{customerId}/segments | List Customer&#39;s Segments |
| [**listCustomers()**](CustomersApi.md#listCustomers) | **GET** /v1/customers | List Customers |
| [**updateCustomer()**](CustomersApi.md#updateCustomer) | **PUT** /v1/customers/{customerId} | Update Customer |
| [**updateCustomersConsents()**](CustomersApi.md#updateCustomersConsents) | **PUT** /v1/customers/{customerId}/consents | Update Customer&#39;s consents |
| [**updateCustomersConsentsClientSide()**](CustomersApi.md#updateCustomersConsentsClientSide) | **PUT** /client/v1/customers/{customerId}/consents | Update Customer&#39;s consents (client-side) |
| [**updateCustomersInBulk()**](CustomersApi.md#updateCustomersInBulk) | **POST** /v1/customers/bulk/async | Update Customers in bulk |
| [**updateCustomersMetadataInBulk()**](CustomersApi.md#updateCustomersMetadataInBulk) | **POST** /v1/customers/metadata/async | Update Customers&#39; Metadata in bulk |


## `createCustomer()`

```php
createCustomer($customers_create_request_body): \OpenAPI\Client\Model\CustomersCreateResponseBody
```

Create Customer

Creates a customer object.  <!-- theme: info -->  > 📘 Upsert Mode > > If you pass an `id` or a `source_id` that already exists in the customer database, Voucherify will return a related customer object with updated fields.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customers_create_request_body = {"source_id":"source_123","name":"Bob Smith","description":"A frequent customer","email":"bob.smith@email.com","phone":"+1 933 222 3333","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthdate":"2022-01-01"}; // \OpenAPI\Client\Model\CustomersCreateRequestBody | Create a customer with specified parameters.

try {
    $result = $apiInstance->createCustomer($customers_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customers_create_request_body** | [**\OpenAPI\Client\Model\CustomersCreateRequestBody**](../Model/CustomersCreateRequestBody.md)| Create a customer with specified parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersCreateResponseBody**](../Model/CustomersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerPermanentlyDeletion()`

```php
customerPermanentlyDeletion($customer_id): \OpenAPI\Client\Model\CustomersPermanentDeletionCreateResponseBody
```

Delete Customer Permanently

The organization user can remove consumer data permanently from the Voucherify system by using this API method. It d​eletes all customer data and connected resources. It makes the customer profile forgotten by Voucherify.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | A Voucherify customer's `id` or `source_id`.

try {
    $result = $apiInstance->customerPermanentlyDeletion($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerPermanentlyDeletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A Voucherify customer&#39;s &#x60;id&#x60; or &#x60;source_id&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\CustomersPermanentDeletionCreateResponseBody**](../Model/CustomersPermanentDeletionCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomer()`

```php
deleteCustomer($customer_id)
```

Delete Customer

This method deletes a customer.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | A Voucherify customer's `id` or `source_id`.

try {
    $apiInstance->deleteCustomer($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A Voucherify customer&#39;s &#x60;id&#x60; or &#x60;source_id&#x60;. | |

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

## `getCustomer()`

```php
getCustomer($customer_id): \OpenAPI\Client\Model\CustomersGetResponseBody
```

Get Customer

Retrieve customer details.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | A Voucherify customer's `id` or `source_id`.

try {
    $result = $apiInstance->getCustomer($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A Voucherify customer&#39;s &#x60;id&#x60; or &#x60;source_id&#x60;. | |

### Return type

[**\OpenAPI\Client\Model\CustomersGetResponseBody**](../Model/CustomersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCustomersUsingCsv()`

```php
importCustomersUsingCsv($file): \OpenAPI\Client\Model\CustomersImportCsvCreateResponseBody
```

Import and Update Customers using CSV

This API method lets you import or update customer data. To get a proper and valid response, please send a CSV file with data separated by commas.    ## Request Example <!-- title: \"Example Request\" lineNumbers: true --> ```cURL curl -X POST \\   https://api.voucherify.io/v1/customers/importCSV \\   -F file=@/path/to/customers.csv \\   -H \"X-App-Id: c70a6f00-cf91-4756-9df5-47628850002b\" \\   -H \"X-App-Token: 3266b9f8-e246-4f79-bdf0-833929b1380c\" ``` ## CSV File Format  The CSV file has to include headers in the first line. All properties which cannot be mapped to standard customer fields will be added to the metadata object.  <!-- theme: info --> > 📘 Standard customer fields mapping > > **No spaces allowed in field names**   > Id, Name, Email, Phone, Birthdate, Source_id, Address_line_1, Address_line_2, Address_Postal_Code, Address_City, Address_State, Address_Country, Description, Metadata_name_1, Metadata_name_2  ## Update Customers using CSV  If you would like to update customer's data, you can do it using the CSV file with new data. However, remember to include a `source_id` in your CSV file to manage the update successfully.  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File path.

try {
    $result = $apiInstance->importCustomersUsingCsv($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->importCustomersUsingCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File path. | |

### Return type

[**\OpenAPI\Client\Model\CustomersImportCsvCreateResponseBody**](../Model/CustomersImportCsvCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerActivities()`

```php
listCustomerActivities($customer_id, $limit, $order, $starting_after, $starting_after_id, $campaign_type, $campaign_id, $product_id, $start_date, $end_date): \OpenAPI\Client\Model\CustomersActivitiesListResponseBody
```

List Customer Activities

Retrieve customer activities.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | A Voucherify customer's `id` or source ID of the customer who performed the activities.
$limit = 56; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
$order = new \OpenAPI\Client\Model\ParameterOrder(); // ParameterOrder | Sorts the results using one of the filtering options, where the dash `-` preceding a sorting option means sorting in a descending order.
$starting_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A cursor for use in pagination. `starting_after` is a date-time value that defines your place in the list based on `created_at` property from the activity object. For instance, if you make a list request and receive 100 objects, ending with an object created at `2020-05-24T13:43:09.024Z`, your subsequent call can include `starting_after=2020-05-24T13:43:09.024Z` in order to fetch the next page of the list.
$starting_after_id = 'starting_after_id_example'; // string | By applying this filter value, you will get events starting after an event with the given ID.
$campaign_type = new \OpenAPI\Client\Model\ParameterCampaignType(); // ParameterCampaignType | Through this parameter you can control a type of campaign by which Voucherify will filter related customer's activity. API will return only records related to that given type. Allowed values: DISCOUNT_COUPONS, REFERRAL_PROGRAM, GIFT_VOUCHERS, PROMOTION, LOYALTY_PROGRAM
$campaign_id = 'campaign_id_example'; // string | By applying this parameter you request only events related to specific campaign identified by its ID.
$product_id = 'product_id_example'; // string | By applying this parameter you request only events related to specific product identified by its ID.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.

try {
    $result = $apiInstance->listCustomerActivities($customer_id, $limit, $order, $starting_after, $starting_after_id, $campaign_type, $campaign_id, $product_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomerActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A Voucherify customer&#39;s &#x60;id&#x60; or source ID of the customer who performed the activities. | |
| **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100 items. | [optional] |
| **order** | [**ParameterOrder**](../Model/.md)| Sorts the results using one of the filtering options, where the dash &#x60;-&#x60; preceding a sorting option means sorting in a descending order. | [optional] |
| **starting_after** | **\DateTime**| A cursor for use in pagination. &#x60;starting_after&#x60; is a date-time value that defines your place in the list based on &#x60;created_at&#x60; property from the activity object. For instance, if you make a list request and receive 100 objects, ending with an object created at &#x60;2020-05-24T13:43:09.024Z&#x60;, your subsequent call can include &#x60;starting_after&#x3D;2020-05-24T13:43:09.024Z&#x60; in order to fetch the next page of the list. | [optional] |
| **starting_after_id** | **string**| By applying this filter value, you will get events starting after an event with the given ID. | [optional] |
| **campaign_type** | [**ParameterCampaignType**](../Model/.md)| Through this parameter you can control a type of campaign by which Voucherify will filter related customer&#39;s activity. API will return only records related to that given type. Allowed values: DISCOUNT_COUPONS, REFERRAL_PROGRAM, GIFT_VOUCHERS, PROMOTION, LOYALTY_PROGRAM | [optional] |
| **campaign_id** | **string**| By applying this parameter you request only events related to specific campaign identified by its ID. | [optional] |
| **product_id** | **string**| By applying this parameter you request only events related to specific product identified by its ID. | [optional] |
| **start_date** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |
| **end_date** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersActivitiesListResponseBody**](../Model/CustomersActivitiesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerSegments()`

```php
listCustomerSegments($customer_id): \OpenAPI\Client\Model\CustomersSegmentsListResponseBody
```

List Customer's Segments

Returns the list of segments IDs to which the customer belongs to.    If you pass a `customerId` which is not stored and recognized by Voucherify as an existing customer in the system, the response will generate a list of segments that the customer would potentialy qualify for if they were to become a customer tracked in the system.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | Unique identifier of a customer represented by an internal customer ID or customer source ID.

try {
    $result = $apiInstance->listCustomerSegments($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomerSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| Unique identifier of a customer represented by an internal customer ID or customer source ID. | |

### Return type

[**\OpenAPI\Client\Model\CustomersSegmentsListResponseBody**](../Model/CustomersSegmentsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomers()`

```php
listCustomers($limit, $page, $email, $city, $name, $segment_id, $created_at_before, $created_at_after, $updated_at_before, $updated_at_after, $order, $starting_after): \OpenAPI\Client\Model\CustomersListResponseBody
```

List Customers

Returns a list of customers.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return.
$email = 'email_example'; // string | Limit the customers to the ones that have this specific email address.
$city = 'city_example'; // string | Limit the customers to the ones that are located in the specified city.
$name = 'name_example'; // string | Filter customers by the name property.
$segment_id = 'segment_id_example'; // string | Filter customers by the segment id.
$created_at_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was created.
$created_at_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was created.
$updated_at_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was updated last time.
$updated_at_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was updated last time.
$order = new \OpenAPI\Client\Model\ParameterOrderListCustomers(); // ParameterOrderListCustomers | This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash `-` preceding a sorting option means sorting in a descending order.
$starting_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A cursor for use in pagination. This is a date-time value that defines your place in the list based on `created_at` property from the customer object. For instance, if you make a list request and receive 100 objects, ending with an object created at `2020-05-24T13:43:09.024Z`, your subsequent call can include `starting_after=2020-05-24T13:43:09.024Z` in order to fetch the next page of the list.  <!-- title: Options --> | **Option** | **Format** | **Sorting** | |:---|:---|:---| | Return customers **before** a specific creation date  | - set `starting_after` parameter to the breakpoint date | Sorting order is **descending**; the most recent dates first and least recent dates last. | | Return customers **after** a specific create or update date | - include the `order` parameter set to `created_at` or `updated_at`<br>- set `starting_after` to the breakpoint date | Sorting order is **ascending**; the least recent dates first and the most recent dates last. |

try {
    $result = $apiInstance->listCustomers($limit, $page, $email, $city, $name, $segment_id, $created_at_before, $created_at_after, $updated_at_before, $updated_at_after, $order, $starting_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. | [optional] |
| **email** | **string**| Limit the customers to the ones that have this specific email address. | [optional] |
| **city** | **string**| Limit the customers to the ones that are located in the specified city. | [optional] |
| **name** | **string**| Filter customers by the name property. | [optional] |
| **segment_id** | **string**| Filter customers by the segment id. | [optional] |
| **created_at_before** | **\DateTime**| Filter customers by date customer was created. | [optional] |
| **created_at_after** | **\DateTime**| Filter customers by date customer was created. | [optional] |
| **updated_at_before** | **\DateTime**| Filter customers by date customer was updated last time. | [optional] |
| **updated_at_after** | **\DateTime**| Filter customers by date customer was updated last time. | [optional] |
| **order** | [**ParameterOrderListCustomers**](../Model/.md)| This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash &#x60;-&#x60; preceding a sorting option means sorting in a descending order. | [optional] |
| **starting_after** | **\DateTime**| A cursor for use in pagination. This is a date-time value that defines your place in the list based on &#x60;created_at&#x60; property from the customer object. For instance, if you make a list request and receive 100 objects, ending with an object created at &#x60;2020-05-24T13:43:09.024Z&#x60;, your subsequent call can include &#x60;starting_after&#x3D;2020-05-24T13:43:09.024Z&#x60; in order to fetch the next page of the list.  &lt;!-- title: Options --&gt; | **Option** | **Format** | **Sorting** | |:---|:---|:---| | Return customers **before** a specific creation date  | - set &#x60;starting_after&#x60; parameter to the breakpoint date | Sorting order is **descending**; the most recent dates first and least recent dates last. | | Return customers **after** a specific create or update date | - include the &#x60;order&#x60; parameter set to &#x60;created_at&#x60; or &#x60;updated_at&#x60;&lt;br&gt;- set &#x60;starting_after&#x60; to the breakpoint date | Sorting order is **ascending**; the least recent dates first and the most recent dates last. | | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersListResponseBody**](../Model/CustomersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($customer_id, $customers_update_request_body): \OpenAPI\Client\Model\CustomersUpdateResponseBody
```

Update Customer

Updates the specified customer by setting the values of the parameters passed in the request body. Any parameters not provided in the payload will be left unchanged.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | A Voucherify customer's `id` or `source_id`.
$customers_update_request_body = {"name":"Alice McDonald","email":"alice.mdconald@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthdate":"2022-01-01","birthday":"2022-01-02"}; // \OpenAPI\Client\Model\CustomersUpdateRequestBody | Specify the parameters to be updated.

try {
    $result = $apiInstance->updateCustomer($customer_id, $customers_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A Voucherify customer&#39;s &#x60;id&#x60; or &#x60;source_id&#x60;. | |
| **customers_update_request_body** | [**\OpenAPI\Client\Model\CustomersUpdateRequestBody**](../Model/CustomersUpdateRequestBody.md)| Specify the parameters to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersUpdateResponseBody**](../Model/CustomersUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomersConsents()`

```php
updateCustomersConsents($customer_id, $body)
```

Update Customer's consents

Update marketing permissions for the specified customer.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | A Voucherify unique customer identifier or source ID.
$body = {"cnst_6jQ5XcUOLnj5L7ImQAdBsJ1I":true,"cnst_VCmucIvAsmDYw2PPAok6bcYy":false}; // object | Key-value pairs where the key is the consent identifier and value is a boolean that identifies if a customer has given the consent or not. To deny all consents use \"unsubscribed\" as a consent identifier and \"true\" as its value.    #### Examples  <!-- title: \"Request Body\" lineNumbers: true --> ```json {     \"cnst_aIdUulAh0SCsOCaS3005y7yS\": true,     \"cnst_aIdUulAhwewqaS31213fdsfds\": false } ```  Opt-out from all communication:  <!-- title: \"Request Body\" lineNumbers: true --> ```json {     \"unsubscribed\": true } ```

try {
    $apiInstance->updateCustomersConsents($customer_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomersConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A Voucherify unique customer identifier or source ID. | |
| **body** | **object**| Key-value pairs where the key is the consent identifier and value is a boolean that identifies if a customer has given the consent or not. To deny all consents use \&quot;unsubscribed\&quot; as a consent identifier and \&quot;true\&quot; as its value.    #### Examples  &lt;!-- title: \&quot;Request Body\&quot; lineNumbers: true --&gt; &#x60;&#x60;&#x60;json {     \&quot;cnst_aIdUulAh0SCsOCaS3005y7yS\&quot;: true,     \&quot;cnst_aIdUulAhwewqaS31213fdsfds\&quot;: false } &#x60;&#x60;&#x60;  Opt-out from all communication:  &lt;!-- title: \&quot;Request Body\&quot; lineNumbers: true --&gt; &#x60;&#x60;&#x60;json {     \&quot;unsubscribed\&quot;: true } &#x60;&#x60;&#x60; | [optional] |

### Return type

void (empty response body)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomersConsentsClientSide()`

```php
updateCustomersConsentsClientSide($customer_id, $body)
```

Update Customer's consents (client-side)

Update marketing permissions for the specified customer.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 'customer_id_example'; // string | A Voucherify customer identifier or `source_id`
$body = {"cnst_6jQ5XcUOLnj5L7ImQAdBsJ1I":true,"cnst_VCmucIvAsmDYw2PPAok6bcYy":false}; // object | Key-value pairs where the key is the consent identifier and value is a boolean that identifies if a customer has given the consent or not. To deny all consents use \"unsubscribed\" as a consent identifier and \"true\" as its value.    #### Examples  <!-- title: \"Request Body\" lineNumbers: true --> ```json {     \"cnst_aIdUulAh0SCsOCaS3005y7yS\": true,     \"cnst_aIdUulAhwewqaS31213fdsfds\": false } ```  Opt-out from all communication:  <!-- title: \"Request Body\" lineNumbers: true --> ```json {     \"unsubscribed\": true } ```

try {
    $apiInstance->updateCustomersConsentsClientSide($customer_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomersConsentsClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| A Voucherify customer identifier or &#x60;source_id&#x60; | |
| **body** | **object**| Key-value pairs where the key is the consent identifier and value is a boolean that identifies if a customer has given the consent or not. To deny all consents use \&quot;unsubscribed\&quot; as a consent identifier and \&quot;true\&quot; as its value.    #### Examples  &lt;!-- title: \&quot;Request Body\&quot; lineNumbers: true --&gt; &#x60;&#x60;&#x60;json {     \&quot;cnst_aIdUulAh0SCsOCaS3005y7yS\&quot;: true,     \&quot;cnst_aIdUulAhwewqaS31213fdsfds\&quot;: false } &#x60;&#x60;&#x60;  Opt-out from all communication:  &lt;!-- title: \&quot;Request Body\&quot; lineNumbers: true --&gt; &#x60;&#x60;&#x60;json {     \&quot;unsubscribed\&quot;: true } &#x60;&#x60;&#x60; | [optional] |

### Return type

void (empty response body)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomersInBulk()`

```php
updateCustomersInBulk($customers_update_in_bulk_request_body): \OpenAPI\Client\Model\CustomersUpdateInBulkResponseBody
```

Update Customers in bulk

Update several customers in one asynchronous operation.   In one request, it is possible to update a maximum of **100** records. In the response body, you get a unique async action identifier.    If a requested customer object is not found, then an **upsert** occurs. This is reflected in the <!-- [Get Async Action](OpenAPI.json/paths/~1async-actions~1{asyncActionId}/get) -->[Get Async Action](ref:get-async-action) endpoint as follows:    <!-- title: \"Response\" lineNumbers: true --> ```json {     \"found\": false,     \"updated\": true } ```  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customers_update_in_bulk_request_body = [{"source_id":"John.Smith@email.com","name":"John Smith","email":"john.smith@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthday":"2022-04-04"},{"source_id":"Jane.Smith@email.com","name":"Jane Smith","email":"Jane.Smith@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthday":"2022-03-03"},{"source_id":"Sally.Smith@email.com","name":"Sally Smith","email":"Sally.Smith@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthdate":"2022-02-02"}]; // \OpenAPI\Client\Model\CustomersUpdateInBulkRequestBody[] | Specify the customer fields that you would like to update in each customer object.

try {
    $result = $apiInstance->updateCustomersInBulk($customers_update_in_bulk_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomersInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customers_update_in_bulk_request_body** | [**\OpenAPI\Client\Model\CustomersUpdateInBulkRequestBody[]**](../Model/CustomersUpdateInBulkRequestBody.md)| Specify the customer fields that you would like to update in each customer object. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersUpdateInBulkResponseBody**](../Model/CustomersUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomersMetadataInBulk()`

```php
updateCustomersMetadataInBulk($customers_metadata_update_in_bulk_request_body): \OpenAPI\Client\Model\CustomersMetadataUpdateInBulkResponseBody
```

Update Customers' Metadata in bulk

Update several customers metadata properties in one asynchronous operation.   In one request, it is possible to update a maximum of **100** records. In the response body, you get a unique async action identifier.    If a requested customer object is not found, then an **upsert** occurs. This is reflected in the <!-- [Get Async Action](OpenAPI.json/paths/~1async-actions~1{asyncActionId}/get) -->[Get Async Action](ref:get-async-action) endpoint as follows:    <!-- title: \"Response\" lineNumbers: true --> ```json {     \"found\": false,     \"updated\": true } ```  This API request starts a process that affects Voucherify data in bulk.   In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the `IN_PROGRESS` status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.   The result will return the async ID. You can verify the status of your request via this [API request](ref:get-async-action).

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customers_metadata_update_in_bulk_request_body = {"source_ids":["source_123","source_456"],"metadata":{"lang":"en","test":false}}; // \OpenAPI\Client\Model\CustomersMetadataUpdateInBulkRequestBody | List the `source_ids` of the customer's you would like to update along with the metadata key value pairs.

try {
    $result = $apiInstance->updateCustomersMetadataInBulk($customers_metadata_update_in_bulk_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomersMetadataInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customers_metadata_update_in_bulk_request_body** | [**\OpenAPI\Client\Model\CustomersMetadataUpdateInBulkRequestBody**](../Model/CustomersMetadataUpdateInBulkRequestBody.md)| List the &#x60;source_ids&#x60; of the customer&#39;s you would like to update along with the metadata key value pairs. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersMetadataUpdateInBulkResponseBody**](../Model/CustomersMetadataUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
