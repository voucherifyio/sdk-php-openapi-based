# OpenAPI\Client\PromotionsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCampaign()**](PromotionsApi.md#createCampaign) | **POST** /v1/campaigns | Create Campaign |
| [**createPromotionStack()**](PromotionsApi.md#createPromotionStack) | **POST** /v1/promotions/{campaignId}/stacks | Create Promotion Stack |
| [**deletePromotionStack()**](PromotionsApi.md#deletePromotionStack) | **DELETE** /v1/promotions/{campaignId}/stacks/{stackId} | Delete Promotion Stack |
| [**deletePromotionTier()**](PromotionsApi.md#deletePromotionTier) | **DELETE** /v1/promotions/tiers/{promotionTierId} | Delete Promotion Tier |
| [**disablePromotionTier()**](PromotionsApi.md#disablePromotionTier) | **POST** /v1/promotions/tiers/{promotionTierId}/disable | Disable Promotion Tier |
| [**enablePromotionTier()**](PromotionsApi.md#enablePromotionTier) | **POST** /v1/promotions/tiers/{promotionTierId}/enable | Enable Promotion Tier |
| [**getPromotionStack()**](PromotionsApi.md#getPromotionStack) | **GET** /v1/promotions/{campaignId}/stacks/{stackId} | Get Promotion Stack |
| [**getPromotionTier()**](PromotionsApi.md#getPromotionTier) | **GET** /v1/promotions/tiers/{promotionTierId} | Get Promotion Tier |
| [**listAllPromotionStacks()**](PromotionsApi.md#listAllPromotionStacks) | **GET** /v1/promotions/stacks | List Promotion Stacks |
| [**listPromotionStacksInCampaign()**](PromotionsApi.md#listPromotionStacksInCampaign) | **GET** /v1/promotions/{campaignId}/stacks | List Promotion Stacks in Campaign |
| [**listPromotionTiersFromCampaign()**](PromotionsApi.md#listPromotionTiersFromCampaign) | **GET** /v1/promotions/{campaignId}/tiers | List Promotion Tiers from Campaign |
| [**updatePromotionStack()**](PromotionsApi.md#updatePromotionStack) | **PUT** /v1/promotions/{campaignId}/stacks/{stackId} | Update Promotion Stack |


## `createCampaign()`

```php
createCampaign($campaigns_create_request_body): \OpenAPI\Client\Model\CampaignsCreateResponseBody
```

Create Campaign

Method to create a batch of vouchers aggregated in one campaign. You can choose a variety of voucher types and define a unique pattern for generating codes.   <!-- theme: info -->  > 📘 Global uniqueness > > All campaign codes are unique across the whole project. Voucherify will not allow you to generate 2 campaigns with the same coupon code.   <!-- theme: warning --> > 🚧 Code generation status > > This is an asynchronous action; you can't read or modify a newly created campaign until the code generation is completed. See the `creation_status` field in the <!-- [campaign object](OpenAPI.json/components/schemas/Campaign) -->[campaign object](ref:get-campaign) description.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaigns_create_request_body = {"name":"Discount Campaign 4","campaign_type":"DISCOUNT_COUPONS","join_once":true,"type":"AUTO_UPDATE","category_id":"cat_0bb343dee3cdb5ec0c","start_date":"2020-08-16T00:00:00Z","expiration_date":"2023-12-26T00:00:00Z","vouchers_count":3,"voucher":{"type":"DISCOUNT_VOUCHER","discount":{"percent_off":10,"type":"PERCENT"},"redemption":{"quantity":10},"code_config":{"pattern":"10OFF-#######"}},"validity_timeframe":{"interval":"P2D","duration":"P1D"},"validity_day_of_week":[0,1,2],"activity_duration_after_publishing":"P24D","use_voucher_metadata_schema":false,"metadata":{"region":"AMER"}}; // \OpenAPI\Client\Model\CampaignsCreateRequestBody | Specify the details of the campaign that you would like to create.

try {
    $result = $apiInstance->createCampaign($campaigns_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaigns_create_request_body** | [**\OpenAPI\Client\Model\CampaignsCreateRequestBody**](../Model/CampaignsCreateRequestBody.md)| Specify the details of the campaign that you would like to create. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsCreateResponseBody**](../Model/CampaignsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPromotionStack()`

```php
createPromotionStack($campaign_id, $promotions_stacks_create_request_body): \OpenAPI\Client\Model\PromotionsStacksCreateResponseBody
```

Create Promotion Stack

This method creates one promotion stack. The sequence of promotion tier IDs will determine the promotion stacking order.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID.
$promotions_stacks_create_request_body = {"name":"Fifth Stack","tiers":{"ids":["promo_aaAF8mVAzA0PF1igia2OC63d","promo_t9zdL6XMFk7B8fQ23zxELtdE","promo_dJNhAEeV5sR5oPQq1UrUdnMC"],"hierarchy_mode":"MANUAL"}}; // \OpenAPI\Client\Model\PromotionsStacksCreateRequestBody | Specify the order of promotion tiers for the promotion stack.

try {
    $result = $apiInstance->createPromotionStack($campaign_id, $promotions_stacks_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->createPromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID. | |
| **promotions_stacks_create_request_body** | [**\OpenAPI\Client\Model\PromotionsStacksCreateRequestBody**](../Model/PromotionsStacksCreateRequestBody.md)| Specify the order of promotion tiers for the promotion stack. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksCreateResponseBody**](../Model/PromotionsStacksCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePromotionStack()`

```php
deletePromotionStack($campaign_id, $stack_id)
```

Delete Promotion Stack

This method deletes a promotion stack.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the `name` of the campaign as the path parameter value, e.g., `Loyalty Campaign`.
$stack_id = 'stack_id_example'; // string | Promotion stack ID.

try {
    $apiInstance->deletePromotionStack($campaign_id, $stack_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->deletePromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the &#x60;name&#x60; of the campaign as the path parameter value, e.g., &#x60;Loyalty Campaign&#x60;. | |
| **stack_id** | **string**| Promotion stack ID. | |

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

## `deletePromotionTier()`

```php
deletePromotionTier($promotion_tier_id)
```

Delete Promotion Tier

This method deletes a promotion tier.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_tier_id = 'promotion_tier_id_example'; // string | Unique promotion tier ID.

try {
    $apiInstance->deletePromotionTier($promotion_tier_id);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->deletePromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_tier_id** | **string**| Unique promotion tier ID. | |

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

## `disablePromotionTier()`

```php
disablePromotionTier($promotion_tier_id): \OpenAPI\Client\Model\PromotionsTiersDisableResponseBody
```

Disable Promotion Tier

This method disables a promotion tier, i.e. makes the `active` parameter = `false`.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_tier_id = 'promotion_tier_id_example'; // string | Unique promotion tier ID.

try {
    $result = $apiInstance->disablePromotionTier($promotion_tier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->disablePromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_tier_id** | **string**| Unique promotion tier ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersDisableResponseBody**](../Model/PromotionsTiersDisableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enablePromotionTier()`

```php
enablePromotionTier($promotion_tier_id): \OpenAPI\Client\Model\PromotionsTiersEnableResponseBody
```

Enable Promotion Tier

This method enables a promotion tier, i.e. makes the `active` parameter = `true`.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_tier_id = 'promotion_tier_id_example'; // string | Unique promotion tier ID.

try {
    $result = $apiInstance->enablePromotionTier($promotion_tier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->enablePromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_tier_id** | **string**| Unique promotion tier ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersEnableResponseBody**](../Model/PromotionsTiersEnableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionStack()`

```php
getPromotionStack($campaign_id, $stack_id): \OpenAPI\Client\Model\PromotionsStacksGetResponseBody
```

Get Promotion Stack

This method returns the details of a promotion stack, including the promotion tiers grouped within the stack.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the `name` of the campaign as the path parameter value, e.g., `Loyalty Campaign`.
$stack_id = 'stack_id_example'; // string | Promotion stack ID.

try {
    $result = $apiInstance->getPromotionStack($campaign_id, $stack_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the &#x60;name&#x60; of the campaign as the path parameter value, e.g., &#x60;Loyalty Campaign&#x60;. | |
| **stack_id** | **string**| Promotion stack ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksGetResponseBody**](../Model/PromotionsStacksGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionTier()`

```php
getPromotionTier($promotion_tier_id): \OpenAPI\Client\Model\PromotionsTiersGetResponseBody
```

Get Promotion Tier

This method enables you to retrieve a specific promotion tier.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotion_tier_id = 'promotion_tier_id_example'; // string | Unique promotion tier ID.

try {
    $result = $apiInstance->getPromotionTier($promotion_tier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotion_tier_id** | **string**| Unique promotion tier ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersGetResponseBody**](../Model/PromotionsTiersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllPromotionStacks()`

```php
listAllPromotionStacks($limit, $page, $order, $created_at, $updated_at): \OpenAPI\Client\Model\PromotionsStacksListResponseBody
```

List Promotion Stacks

This method enables you to list promotion stacks irrespective of the campaign they are associated with.   You can use filters in the query parameters to specify the stacks to be returned in the response.  ## Advanced filters for fetching promotion stacks  | **Filters** | **Examples** | | :--- | :--- | | Created Before | - `[created_at][before]=2021-12-30T13:52:18.227Z`<br>- `[filters][created_at][conditions][$before][0]=2021-12-30T13:52:18.227Z` | | Created After | - `[created_at][after]=2021-12-30T13:52:18.227Z`<br>- `[filters][created_at][conditions][$after][0]=2021-12-30T13:52:18.227Z` | | Updated Before | - `[updated_at][before]=2021-12-30T13:52:18.227Z`<br>- `[filters][updated_at][conditions][$before][0]=2021-12-30T13:52:18.227Z` | | Updated After | - `[updated_at][after]=2021-12-30T13:52:18.227Z`<br>- `[filters][updated_at][conditions][$after][0]=2021-12-30T13:52:18.227Z` |

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return.
$order = new \OpenAPI\Client\Model\ParameterOrderListAllPromotionStacks(); // ParameterOrderListAllPromotionStacks | Sorts the results using one of the filtering options, where the dash `-` preceding a sorting option means sorting in a descending order.
$created_at = new \OpenAPI\Client\Model\ParameterCreatedBeforeAfter(); // ParameterCreatedBeforeAfter | A filter on the list based on the object `created_at` field. The value is a dictionary with the following options: `before`, `after`. A date value must be presented in ISO 8601 format (`2016-11-16T14:14:31Z` or `2016-11-16`). An example: `[created_at][before]=2017-09-08T13:52:18.227Z`
$updated_at = new \OpenAPI\Client\Model\ParameterUpdatedBeforeAfter(); // ParameterUpdatedBeforeAfter | A filter on the list based on the object `updated_at` field. The value is a dictionary with the following options: `before`, `after`. A date value must be presented in ISO 8601 format (`2016-11-16T14:14:31Z` or `2016-11-16`). An example: `[updated_at][before]=2017-09-08T13:52:18.227Z`

try {
    $result = $apiInstance->listAllPromotionStacks($limit, $page, $order, $created_at, $updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listAllPromotionStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| A limit on the number of objects to be returned. Limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. | [optional] |
| **order** | [**ParameterOrderListAllPromotionStacks**](../Model/.md)| Sorts the results using one of the filtering options, where the dash &#x60;-&#x60; preceding a sorting option means sorting in a descending order. | [optional] |
| **created_at** | [**ParameterCreatedBeforeAfter**](../Model/.md)| A filter on the list based on the object &#x60;created_at&#x60; field. The value is a dictionary with the following options: &#x60;before&#x60;, &#x60;after&#x60;. A date value must be presented in ISO 8601 format (&#x60;2016-11-16T14:14:31Z&#x60; or &#x60;2016-11-16&#x60;). An example: &#x60;[created_at][before]&#x3D;2017-09-08T13:52:18.227Z&#x60; | [optional] |
| **updated_at** | [**ParameterUpdatedBeforeAfter**](../Model/.md)| A filter on the list based on the object &#x60;updated_at&#x60; field. The value is a dictionary with the following options: &#x60;before&#x60;, &#x60;after&#x60;. A date value must be presented in ISO 8601 format (&#x60;2016-11-16T14:14:31Z&#x60; or &#x60;2016-11-16&#x60;). An example: &#x60;[updated_at][before]&#x3D;2017-09-08T13:52:18.227Z&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksListResponseBody**](../Model/PromotionsStacksListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPromotionStacksInCampaign()`

```php
listPromotionStacksInCampaign($campaign_id): \OpenAPI\Client\Model\PromotionsStacksListResponseBody
```

List Promotion Stacks in Campaign

This method enables you to list promotion stacks from a specified campaign.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID.

try {
    $result = $apiInstance->listPromotionStacksInCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listPromotionStacksInCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksListResponseBody**](../Model/PromotionsStacksListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPromotionTiersFromCampaign()`

```php
listPromotionTiersFromCampaign($campaign_id): \OpenAPI\Client\Model\PromotionsTiersListResponseBody
```

List Promotion Tiers from Campaign

This method enables you to list promotion tiers from a specified campaign.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID assigned by Voucherify.

try {
    $result = $apiInstance->listPromotionTiersFromCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listPromotionTiersFromCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID assigned by Voucherify. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersListResponseBody**](../Model/PromotionsTiersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromotionStack()`

```php
updatePromotionStack($campaign_id, $stack_id, $promotions_stacks_update_request_body): \OpenAPI\Client\Model\PromotionsStacksUpdateResponseBody
```

Update Promotion Stack

This methods allows for editing an existing stack.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the `name` of the campaign as the path parameter value, e.g., `Loyalty Campaign`.
$stack_id = 'stack_id_example'; // string | Promotion stack ID.
$promotions_stacks_update_request_body = {"name":"Fifth Stack Modified","tiers":{"ids":["promo_aaAF8mVAzA0PF1igia2OC63d","promo_t9zdL6XMFk7B8fQ23zxELtdE"],"hierarchy_mode":"MANUAL"}}; // \OpenAPI\Client\Model\PromotionsStacksUpdateRequestBody | Specify the promotion stack parameters that you would like to update.

try {
    $result = $apiInstance->updatePromotionStack($campaign_id, $stack_id, $promotions_stacks_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->updatePromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the &#x60;name&#x60; of the campaign as the path parameter value, e.g., &#x60;Loyalty Campaign&#x60;. | |
| **stack_id** | **string**| Promotion stack ID. | |
| **promotions_stacks_update_request_body** | [**\OpenAPI\Client\Model\PromotionsStacksUpdateRequestBody**](../Model/PromotionsStacksUpdateRequestBody.md)| Specify the promotion stack parameters that you would like to update. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksUpdateResponseBody**](../Model/PromotionsStacksUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
