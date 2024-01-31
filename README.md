# OpenAPIClient-php

Voucherify promotion engine REST API. Please see https://docs.voucherify.io/docs for more details.

For more information, please visit [https://www.voucherify.io/contact-support](https://www.voucherify.io/contact-support).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the campaign to which voucher will be added. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.
$code = 'code_example'; // string | A custom **code** that identifies the voucher.
$campaigns_vouchers_create_request_body = {"category_id":"cat_0bb81a481615a37b5e","start_date":"2022-09-24T00:00:00Z","expiration_date":"2022-09-25T23:59:59Z","active":false,"redemption":{"quantity":null},"additional_info":"Voucher added using API","metadata":{"Season":"Fall"}}; // \OpenAPI\Client\Model\CampaignsVouchersCreateRequestBody | Specify the voucher parameters that you would like to overwrite.

try {
    $result = $apiInstance->addVoucherWithSpecificCodeToCampaign($campaign_id, $code, $campaigns_vouchers_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->addVoucherWithSpecificCodeToCampaign: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.voucherify.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampaignsApi* | [**addVoucherWithSpecificCodeToCampaign**](docs/Api/CampaignsApi.md#addvoucherwithspecificcodetocampaign) | **POST** /v1/campaigns/{campaignId}/vouchers/{code} | Add Voucher with Specific Code to Campaign
*CampaignsApi* | [**addVouchersToCampaign**](docs/Api/CampaignsApi.md#addvoucherstocampaign) | **POST** /v1/campaigns/{campaignId}/vouchers | Add Vouchers to Campaign
*CampaignsApi* | [**createCampaign**](docs/Api/CampaignsApi.md#createcampaign) | **POST** /v1/campaigns | Create Campaign
*CampaignsApi* | [**deleteCampaign**](docs/Api/CampaignsApi.md#deletecampaign) | **DELETE** /v1/campaigns/{campaignId} | Delete Campaign
*CampaignsApi* | [**disableCampaign**](docs/Api/CampaignsApi.md#disablecampaign) | **POST** /v1/campaigns/{campaignId}/disable | Disable Campaign
*CampaignsApi* | [**enableCampaign**](docs/Api/CampaignsApi.md#enablecampaign) | **POST** /v1/campaigns/{campaignId}/enable | Enable Campaign
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /v1/campaigns/{campaignId} | Get Campaign
*CampaignsApi* | [**importVouchersToCampaign**](docs/Api/CampaignsApi.md#importvoucherstocampaign) | **POST** /v1/campaigns/{campaignId}/import | Import Vouchers to Campaign
*CampaignsApi* | [**importVouchersToCampaignUsingCsv**](docs/Api/CampaignsApi.md#importvoucherstocampaignusingcsv) | **POST** /v1/campaigns/{campaignId}/importCSV | Import Vouchers to Campaign by CSV
*CampaignsApi* | [**listCampaigns**](docs/Api/CampaignsApi.md#listcampaigns) | **GET** /v1/campaigns | List Campaigns
*CampaignsApi* | [**updateCampaign**](docs/Api/CampaignsApi.md#updatecampaign) | **PUT** /v1/campaigns/{campaignId} | Update Campaign
*CategoriesApi* | [**createCategory**](docs/Api/CategoriesApi.md#createcategory) | **POST** /v1/categories | Create Category
*CategoriesApi* | [**deleteCategory**](docs/Api/CategoriesApi.md#deletecategory) | **DELETE** /v1/categories/{categoryId} | Delete Category
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /v1/categories/{categoryId} | Get Category
*CategoriesApi* | [**listCategories**](docs/Api/CategoriesApi.md#listcategories) | **GET** /v1/categories | List Categories
*CategoriesApi* | [**updateCategory**](docs/Api/CategoriesApi.md#updatecategory) | **PUT** /v1/categories/{categoryId} | Update Category
*ClientSideApi* | [**checkEligibilityClientSide**](docs/Api/ClientSideApi.md#checkeligibilityclientside) | **POST** /client/v1/qualifications | Check Eligibility (client-side)
*ClientSideApi* | [**redeemStackedDiscountsClientSide**](docs/Api/ClientSideApi.md#redeemstackeddiscountsclientside) | **POST** /client/v1/redemptions | Redeem Stackable Discounts (client-side)
*ClientSideApi* | [**trackCustomEventClientSide**](docs/Api/ClientSideApi.md#trackcustomeventclientside) | **POST** /client/v1/events | Track Custom Event (client-side)
*ClientSideApi* | [**updateCustomersConsentsClientSide**](docs/Api/ClientSideApi.md#updatecustomersconsentsclientside) | **PUT** /client/v1/customers/{customerId}/consents | Update Customer&#39;s consents (client-side)
*ClientSideApi* | [**validateStackedDiscountsClientSide**](docs/Api/ClientSideApi.md#validatestackeddiscountsclientside) | **POST** /client/v1/validations | Validate Stackable Discounts (client-side)
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /v1/customers | Create Customer
*CustomersApi* | [**customerPermanentlyDeletion**](docs/Api/CustomersApi.md#customerpermanentlydeletion) | **POST** /v1/customers/{customerId}/permanent-deletion | Delete Customer Permanently
*CustomersApi* | [**deleteCustomer**](docs/Api/CustomersApi.md#deletecustomer) | **DELETE** /v1/customers/{customerId} | Delete Customer
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /v1/customers/{customerId} | Get Customer
*CustomersApi* | [**importCustomersUsingCsv**](docs/Api/CustomersApi.md#importcustomersusingcsv) | **POST** /v1/customers/importCSV | Import and Update Customers using CSV
*CustomersApi* | [**listCustomerActivities**](docs/Api/CustomersApi.md#listcustomeractivities) | **GET** /v1/customers/{customerId}/activities | List Customer Activities
*CustomersApi* | [**listCustomerSegments**](docs/Api/CustomersApi.md#listcustomersegments) | **GET** /v1/customers/{customerId}/segments | List Customer&#39;s Segments
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /v1/customers | List Customers
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /v1/customers/{customerId} | Update Customer
*CustomersApi* | [**updateCustomersConsents**](docs/Api/CustomersApi.md#updatecustomersconsents) | **PUT** /v1/customers/{customerId}/consents | Update Customer&#39;s consents
*CustomersApi* | [**updateCustomersInBulk**](docs/Api/CustomersApi.md#updatecustomersinbulk) | **POST** /v1/customers/bulk/async | Update Customers in bulk
*CustomersApi* | [**updateCustomersMetadataInBulk**](docs/Api/CustomersApi.md#updatecustomersmetadatainbulk) | **POST** /v1/customers/metadata/async | Update Customers&#39; Metadata in bulk
*EventsApi* | [**trackCustomEvent**](docs/Api/EventsApi.md#trackcustomevent) | **POST** /v1/events | Track Custom Event
*ExportsApi* | [**createExport**](docs/Api/ExportsApi.md#createexport) | **POST** /v1/exports | Create Export
*ExportsApi* | [**deleteExport**](docs/Api/ExportsApi.md#deleteexport) | **DELETE** /v1/exports/{exportId} | Delete Export
*ExportsApi* | [**downloadExport**](docs/Api/ExportsApi.md#downloadexport) | **GET** /v1/exports/{export_Id} | Download Export
*ExportsApi* | [**getExport**](docs/Api/ExportsApi.md#getexport) | **GET** /v1/exports/{exportId} | Get Export
*ExportsApi* | [**listExports**](docs/Api/ExportsApi.md#listexports) | **GET** /v1/exports | List Exports
*LoyaltiesApi* | [**createInBulkLoyaltyTiers**](docs/Api/LoyaltiesApi.md#createinbulkloyaltytiers) | **POST** /v1/loyalties/{campaignId}/tiers | Create loyalty tiers
*LoyaltiesApi* | [**deleteEarningRule**](docs/Api/LoyaltiesApi.md#deleteearningrule) | **DELETE** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Delete Earning Rule
*LoyaltiesApi* | [**deleteLoyaltyProgram**](docs/Api/LoyaltiesApi.md#deleteloyaltyprogram) | **DELETE** /v1/loyalties/{campaignId} | Delete Loyalty Campaign
*LoyaltiesApi* | [**deleteRewardAssignment1**](docs/Api/LoyaltiesApi.md#deleterewardassignment1) | **DELETE** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Delete Reward Assignment
*LoyaltiesApi* | [**disableEarningRule**](docs/Api/LoyaltiesApi.md#disableearningrule) | **POST** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/disable | Disable Earning Rule
*LoyaltiesApi* | [**enableEarningRule**](docs/Api/LoyaltiesApi.md#enableearningrule) | **POST** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/enable | Enable Earning Rule
*LoyaltiesApi* | [**exportLoyaltyCardTransactions**](docs/Api/LoyaltiesApi.md#exportloyaltycardtransactions) | **POST** /v1/loyalties/members/{memberId}/transactions/export | Export Loyalty Card Transactions
*LoyaltiesApi* | [**exportLoyaltyCardTransactions1**](docs/Api/LoyaltiesApi.md#exportloyaltycardtransactions1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/transactions/export | Export Loyalty Card Transactions
*LoyaltiesApi* | [**getEarningRule**](docs/Api/LoyaltiesApi.md#getearningrule) | **GET** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Get Earning Rule
*LoyaltiesApi* | [**getLoyaltyTier**](docs/Api/LoyaltiesApi.md#getloyaltytier) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId} | Get Loyalty Tier
*LoyaltiesApi* | [**getRewardAssignment1**](docs/Api/LoyaltiesApi.md#getrewardassignment1) | **GET** /v1/loyalties/{campaignId}/reward-assignments/{assignmentId} | Get Reward Assignment
*LoyaltiesApi* | [**getRewardAssignment2**](docs/Api/LoyaltiesApi.md#getrewardassignment2) | **GET** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Get Reward Assignment
*LoyaltiesApi* | [**getRewardDetails**](docs/Api/LoyaltiesApi.md#getrewarddetails) | **GET** /v1/loyalties/{campaignId}/reward-assignments/{assignmentId}/reward | Get Reward Details
*LoyaltiesApi* | [**listLoyaltyCardTransactions**](docs/Api/LoyaltiesApi.md#listloyaltycardtransactions) | **GET** /v1/loyalties/members/{memberId}/transactions | List Loyalty Card Transactions
*LoyaltiesApi* | [**listLoyaltyCardTransactions1**](docs/Api/LoyaltiesApi.md#listloyaltycardtransactions1) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/transactions | List Loyalty Card Transactions
*LoyaltiesApi* | [**listLoyaltyTierEarningRules**](docs/Api/LoyaltiesApi.md#listloyaltytierearningrules) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/earning-rules | List Loyalty Tier Earning Rules
*LoyaltiesApi* | [**listLoyaltyTierRewards**](docs/Api/LoyaltiesApi.md#listloyaltytierrewards) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/rewards | List Loyalty Tier Rewards
*LoyaltiesApi* | [**listLoyaltyTiers**](docs/Api/LoyaltiesApi.md#listloyaltytiers) | **GET** /v1/loyalties/{campaignId}/tiers | List Loyalty Tiers
*LoyaltiesApi* | [**listMemberLoyaltyTier**](docs/Api/LoyaltiesApi.md#listmemberloyaltytier) | **GET** /v1/loyalties/members/{memberId}/tiers | List Member&#39;s Loyalty Tiers
*LoyaltiesApi* | [**listMemberRewards**](docs/Api/LoyaltiesApi.md#listmemberrewards) | **GET** /v1/loyalties/members/{memberId}/rewards | List Member Rewards
*LoyaltiesApi* | [**listPointsExpiration**](docs/Api/LoyaltiesApi.md#listpointsexpiration) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/points-expiration | Get Points Expiration
*LoyaltiesApi* | [**redeemReward**](docs/Api/LoyaltiesApi.md#redeemreward) | **POST** /v1/loyalties/members/{memberId}/redemption | Redeem Reward
*LoyaltiesApi* | [**redeemReward1**](docs/Api/LoyaltiesApi.md#redeemreward1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/redemption | Redeem Reward
*LoyaltiesApi* | [**transferPoints**](docs/Api/LoyaltiesApi.md#transferpoints) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/transfers | Transfer Loyalty Points
*LoyaltiesApi* | [**updateLoyaltyCardBalance**](docs/Api/LoyaltiesApi.md#updateloyaltycardbalance) | **POST** /v1/loyalties/members/{memberId}/balance | Add or Remove Loyalty Card Balance
*LoyaltiesApi* | [**updateLoyaltyCardBalance1**](docs/Api/LoyaltiesApi.md#updateloyaltycardbalance1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/balance | Add or Remove Loyalty Card Balance
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /v1/orders | Create Order
*OrdersApi* | [**createOrderExport**](docs/Api/OrdersApi.md#createorderexport) | **POST** /v1/orders/export | Create Orders Export
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /v1/orders/{orderId} | Get Order
*OrdersApi* | [**importOrders**](docs/Api/OrdersApi.md#importorders) | **POST** /v1/orders/import | Import Orders
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /v1/orders | List Orders
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PUT** /v1/orders/{orderId} | Update Order
*ProductCollectionsApi* | [**createProductCollection**](docs/Api/ProductCollectionsApi.md#createproductcollection) | **POST** /v1/product-collections | Create Product Collection
*ProductCollectionsApi* | [**deleteProductCollection**](docs/Api/ProductCollectionsApi.md#deleteproductcollection) | **DELETE** /v1/product-collections/{productCollectionId} | Delete Product Collection
*ProductCollectionsApi* | [**getProductCollection**](docs/Api/ProductCollectionsApi.md#getproductcollection) | **GET** /v1/product-collections/{productCollectionId} | Get Product Collection
*ProductCollectionsApi* | [**listProductCollections**](docs/Api/ProductCollectionsApi.md#listproductcollections) | **GET** /v1/product-collections | List Product Collections
*ProductCollectionsApi* | [**listProductsInCollection**](docs/Api/ProductCollectionsApi.md#listproductsincollection) | **GET** /v1/product-collections/{productCollectionId}/products | List Products in Collection
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /v1/products | Create Product
*ProductsApi* | [**createSku**](docs/Api/ProductsApi.md#createsku) | **POST** /v1/products/{productId}/skus | Create SKU
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /v1/products/{productId} | Delete Product
*ProductsApi* | [**deleteSku**](docs/Api/ProductsApi.md#deletesku) | **DELETE** /v1/products/{productId}/skus/{skuId} | Delete SKU
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /v1/products/{productId} | Get Product
*ProductsApi* | [**getSku**](docs/Api/ProductsApi.md#getsku) | **GET** /v1/skus/{skuId} | Get SKU
*ProductsApi* | [**importProductsUsingCsv**](docs/Api/ProductsApi.md#importproductsusingcsv) | **POST** /v1/products/importCSV | Import Products using CSV
*ProductsApi* | [**importSkusUsingCsv**](docs/Api/ProductsApi.md#importskususingcsv) | **POST** /v1/skus/importCSV | Import SKUs using CSV
*ProductsApi* | [**listProducts**](docs/Api/ProductsApi.md#listproducts) | **GET** /v1/products | List Products
*ProductsApi* | [**listSkusInProduct**](docs/Api/ProductsApi.md#listskusinproduct) | **GET** /v1/products/{productId}/skus | List SKUs in Product
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /v1/products/{productId} | Update Product
*ProductsApi* | [**updateProductsInBulk**](docs/Api/ProductsApi.md#updateproductsinbulk) | **POST** /v1/products/bulk/async | Update Products in bulk
*ProductsApi* | [**updateProductsMetadataInBulk**](docs/Api/ProductsApi.md#updateproductsmetadatainbulk) | **POST** /v1/products/metadata/async | Update Products&#39; Metadata in bulk
*ProductsApi* | [**updateSku**](docs/Api/ProductsApi.md#updatesku) | **PUT** /v1/products/{productId}/skus/{skuId} | Update SKU
*PromotionsApi* | [**createPromotionStack**](docs/Api/PromotionsApi.md#createpromotionstack) | **POST** /v1/promotions/{campaignId}/stacks | Create Promotion Stack
*PromotionsApi* | [**deletePromotionStack**](docs/Api/PromotionsApi.md#deletepromotionstack) | **DELETE** /v1/promotions/{campaignId}/stacks/{stackId} | Delete Promotion Stack
*PromotionsApi* | [**deletePromotionTier**](docs/Api/PromotionsApi.md#deletepromotiontier) | **DELETE** /v1/promotions/tiers/{promotionTierId} | Delete Promotion Tier
*PromotionsApi* | [**disablePromotionTier**](docs/Api/PromotionsApi.md#disablepromotiontier) | **POST** /v1/promotions/tiers/{promotionTierId}/disable | Disable Promotion Tier
*PromotionsApi* | [**enablePromotionTier**](docs/Api/PromotionsApi.md#enablepromotiontier) | **POST** /v1/promotions/tiers/{promotionTierId}/enable | Enable Promotion Tier
*PromotionsApi* | [**getPromotionStack**](docs/Api/PromotionsApi.md#getpromotionstack) | **GET** /v1/promotions/{campaignId}/stacks/{stackId} | Get Promotion Stack
*PromotionsApi* | [**getPromotionTier**](docs/Api/PromotionsApi.md#getpromotiontier) | **GET** /v1/promotions/tiers/{promotionTierId} | Get Promotion Tier
*PromotionsApi* | [**listAllPromotionStacks**](docs/Api/PromotionsApi.md#listallpromotionstacks) | **GET** /v1/promotions/stacks | List Promotion Stacks
*PromotionsApi* | [**listPromotionStacksInCampaign**](docs/Api/PromotionsApi.md#listpromotionstacksincampaign) | **GET** /v1/promotions/{campaignId}/stacks | List Promotion Stacks in Campaign
*PromotionsApi* | [**listPromotionTiersFromCampaign**](docs/Api/PromotionsApi.md#listpromotiontiersfromcampaign) | **GET** /v1/promotions/{campaignId}/tiers | List Promotion Tiers from Campaign
*PromotionsApi* | [**updatePromotionStack**](docs/Api/PromotionsApi.md#updatepromotionstack) | **PUT** /v1/promotions/{campaignId}/stacks/{stackId} | Update Promotion Stack
*PublicationsApi* | [**createPublication**](docs/Api/PublicationsApi.md#createpublication) | **POST** /v1/publications | Create Publication
*PublicationsApi* | [**createPublication1**](docs/Api/PublicationsApi.md#createpublication1) | **GET** /v1/publications/create | Create Publication
*PublicationsApi* | [**listPublications**](docs/Api/PublicationsApi.md#listpublications) | **GET** /v1/publications | List Publications
*QualificationsApi* | [**checkEligibility**](docs/Api/QualificationsApi.md#checkeligibility) | **POST** /v1/qualifications | Check Eligibility
*RedemptionsApi* | [**getRedemption**](docs/Api/RedemptionsApi.md#getredemption) | **GET** /v1/redemptions/{redemptionId} | Get Redemption
*RedemptionsApi* | [**getVoucherRedemptions**](docs/Api/RedemptionsApi.md#getvoucherredemptions) | **GET** /v1/vouchers/{code}/redemption | Get Voucher&#39;s Redemptions
*RedemptionsApi* | [**listRedemptions**](docs/Api/RedemptionsApi.md#listredemptions) | **GET** /v1/redemptions | List Redemptions
*RedemptionsApi* | [**redeemStackedDiscounts**](docs/Api/RedemptionsApi.md#redeemstackeddiscounts) | **POST** /v1/redemptions | Redeem Stackable Discounts
*RedemptionsApi* | [**rollbackRedemption**](docs/Api/RedemptionsApi.md#rollbackredemption) | **POST** /v1/redemptions/{redemptionId}/rollback | Rollback Redemption
*RedemptionsApi* | [**rollbackStackedRedemptions**](docs/Api/RedemptionsApi.md#rollbackstackedredemptions) | **POST** /v1/redemptions/{parentRedemptionId}/rollbacks | Rollback Stackable Redemptions
*RewardsApi* | [**createRewardAssignment**](docs/Api/RewardsApi.md#createrewardassignment) | **POST** /v1/rewards/{rewardId}/assignments | Create Reward Assignment
*RewardsApi* | [**deleteReward**](docs/Api/RewardsApi.md#deletereward) | **DELETE** /v1/rewards/{rewardId} | Delete Reward
*RewardsApi* | [**deleteRewardAssignment**](docs/Api/RewardsApi.md#deleterewardassignment) | **DELETE** /v1/rewards/{rewardId}/assignments/{assignmentId} | Delete Reward Assignment
*RewardsApi* | [**getRewardAssignment**](docs/Api/RewardsApi.md#getrewardassignment) | **GET** /v1/rewards/{rewardId}/assignments/{assignmentId} | Get Reward Assignment
*RewardsApi* | [**listRewardAssignments**](docs/Api/RewardsApi.md#listrewardassignments) | **GET** /v1/rewards/{rewardId}/assignments | List Reward Assignments
*RewardsApi* | [**updateRewardAssignment**](docs/Api/RewardsApi.md#updaterewardassignment) | **PUT** /v1/rewards/{rewardId}/assignments/{assignmentId} | Update Reward Assignment
*SegmentsApi* | [**deleteSegment**](docs/Api/SegmentsApi.md#deletesegment) | **DELETE** /v1/segments/{segmentId} | Delete Segment
*ValidationRulesApi* | [**createValidationRules**](docs/Api/ValidationRulesApi.md#createvalidationrules) | **POST** /v1/validation-rules | Create Validation Rules
*ValidationRulesApi* | [**deleteValidationRuleAssignment**](docs/Api/ValidationRulesApi.md#deletevalidationruleassignment) | **DELETE** /v1/validation-rules/{validationRuleId}/assignments/{assignmentId} | Delete Validation Rule Assignment
*ValidationRulesApi* | [**deleteValidationRules**](docs/Api/ValidationRulesApi.md#deletevalidationrules) | **DELETE** /v1/validation-rules/{validationRuleId} | Delete Validation Rule
*ValidationRulesApi* | [**getValidationRule**](docs/Api/ValidationRulesApi.md#getvalidationrule) | **GET** /v1/validation-rules/{validationRuleId} | Get Validation Rule
*ValidationRulesApi* | [**listValidationRuleAssignments**](docs/Api/ValidationRulesApi.md#listvalidationruleassignments) | **GET** /v1/validation-rules/{validationRuleId}/assignments | List Validation Rule Assignments
*ValidationRulesApi* | [**listValidationRules**](docs/Api/ValidationRulesApi.md#listvalidationrules) | **GET** /v1/validation-rules | List Validation Rules
*ValidationRulesApi* | [**listValidationRulesAssignments**](docs/Api/ValidationRulesApi.md#listvalidationrulesassignments) | **GET** /v1/validation-rules-assignments | List Validation Rules&#39; Assignment(s)
*ValidationRulesApi* | [**updateValidationRule**](docs/Api/ValidationRulesApi.md#updatevalidationrule) | **PUT** /v1/validation-rules/{validationRuleId} | Update Validation Rule
*ValidationsApi* | [**validateStackedDiscounts**](docs/Api/ValidationsApi.md#validatestackeddiscounts) | **POST** /v1/validations | Validate Stackable Discounts
*VouchersApi* | [**deleteVoucher**](docs/Api/VouchersApi.md#deletevoucher) | **DELETE** /v1/vouchers/{code} | Delete Voucher
*VouchersApi* | [**disableVoucher**](docs/Api/VouchersApi.md#disablevoucher) | **POST** /v1/vouchers/{code}/disable | Disable Voucher
*VouchersApi* | [**enableVoucher**](docs/Api/VouchersApi.md#enablevoucher) | **POST** /v1/vouchers/{code}/enable | Enable Voucher
*VouchersApi* | [**exportVoucherTransactions**](docs/Api/VouchersApi.md#exportvouchertransactions) | **POST** /v1/vouchers/{code}/transactions/export | Export Voucher Transactions
*VouchersApi* | [**getVoucher**](docs/Api/VouchersApi.md#getvoucher) | **GET** /v1/vouchers/{code} | Get Voucher
*VouchersApi* | [**importVouchersUsingCsv**](docs/Api/VouchersApi.md#importvouchersusingcsv) | **POST** /v1/vouchers/importCSV | Import Vouchers using CSV
*VouchersApi* | [**listVoucherTransactions**](docs/Api/VouchersApi.md#listvouchertransactions) | **GET** /v1/vouchers/{code}/transactions | List Voucher Transactions
*VouchersApi* | [**releaseValidationSession**](docs/Api/VouchersApi.md#releasevalidationsession) | **DELETE** /v1/vouchers/{code}/sessions/{sessionKey} | Release Validation Session
*VouchersApi* | [**updateVoucherBalance**](docs/Api/VouchersApi.md#updatevoucherbalance) | **POST** /v1/vouchers/{code}/balance | Add or Remove Voucher Balance

## Models

- [ApplicableTo](docs/Model/ApplicableTo.md)
- [ApplicableToResultList](docs/Model/ApplicableToResultList.md)
- [AsyncActions](docs/Model/AsyncActions.md)
- [BusValRuleAssignment](docs/Model/BusValRuleAssignment.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignBase](docs/Model/CampaignBase.md)
- [CampaignBaseValidityTimeframe](docs/Model/CampaignBaseValidityTimeframe.md)
- [CampaignLoyaltyCard](docs/Model/CampaignLoyaltyCard.md)
- [CampaignLoyaltyCardExpirationRules](docs/Model/CampaignLoyaltyCardExpirationRules.md)
- [CampaignVoucher](docs/Model/CampaignVoucher.md)
- [CampaignVoucherRedemption](docs/Model/CampaignVoucherRedemption.md)
- [CampaignsCreateRequestBody](docs/Model/CampaignsCreateRequestBody.md)
- [CampaignsCreateRequestBodyPromotion](docs/Model/CampaignsCreateRequestBodyPromotion.md)
- [CampaignsCreateRequestBodyValidityTimeframe](docs/Model/CampaignsCreateRequestBodyValidityTimeframe.md)
- [CampaignsCreateRequestBodyVoucher](docs/Model/CampaignsCreateRequestBodyVoucher.md)
- [CampaignsCreateRequestBodyVoucherRedemption](docs/Model/CampaignsCreateRequestBodyVoucherRedemption.md)
- [CampaignsCreateResponseBody](docs/Model/CampaignsCreateResponseBody.md)
- [CampaignsDeleteResponseBody](docs/Model/CampaignsDeleteResponseBody.md)
- [CampaignsDisableResponseBody](docs/Model/CampaignsDisableResponseBody.md)
- [CampaignsEnableResponseBody](docs/Model/CampaignsEnableResponseBody.md)
- [CampaignsGetResponseBody](docs/Model/CampaignsGetResponseBody.md)
- [CampaignsImportCreateResponseBody](docs/Model/CampaignsImportCreateResponseBody.md)
- [CampaignsImportCsvCreateResponseBody](docs/Model/CampaignsImportCsvCreateResponseBody.md)
- [CampaignsImportVoucherItem](docs/Model/CampaignsImportVoucherItem.md)
- [CampaignsImportVoucherItemRedemption](docs/Model/CampaignsImportVoucherItemRedemption.md)
- [CampaignsImportVoucherLoyaltyCard](docs/Model/CampaignsImportVoucherLoyaltyCard.md)
- [CampaignsListResponseBody](docs/Model/CampaignsListResponseBody.md)
- [CampaignsUpdateRequestBody](docs/Model/CampaignsUpdateRequestBody.md)
- [CampaignsUpdateRequestBodyOptions](docs/Model/CampaignsUpdateRequestBodyOptions.md)
- [CampaignsUpdateRequestBodyValidityTimeframe](docs/Model/CampaignsUpdateRequestBodyValidityTimeframe.md)
- [CampaignsUpdateResponseBody](docs/Model/CampaignsUpdateResponseBody.md)
- [CampaignsVouchersCreateBaseRequestBody](docs/Model/CampaignsVouchersCreateBaseRequestBody.md)
- [CampaignsVouchersCreateInBulkRequestBody](docs/Model/CampaignsVouchersCreateInBulkRequestBody.md)
- [CampaignsVouchersCreateInBulkResponseBody](docs/Model/CampaignsVouchersCreateInBulkResponseBody.md)
- [CampaignsVouchersCreateRequestBody](docs/Model/CampaignsVouchersCreateRequestBody.md)
- [CampaignsVouchersCreateResponseBody](docs/Model/CampaignsVouchersCreateResponseBody.md)
- [CategoriesCreateRequestBody](docs/Model/CategoriesCreateRequestBody.md)
- [CategoriesCreateResponseBody](docs/Model/CategoriesCreateResponseBody.md)
- [CategoriesGetResponseBody](docs/Model/CategoriesGetResponseBody.md)
- [CategoriesListResponseBody](docs/Model/CategoriesListResponseBody.md)
- [CategoriesUpdateRequestBody](docs/Model/CategoriesUpdateRequestBody.md)
- [CategoriesUpdateResponseBody](docs/Model/CategoriesUpdateResponseBody.md)
- [Category](docs/Model/Category.md)
- [ClientEventsCreateRequestBody](docs/Model/ClientEventsCreateRequestBody.md)
- [ClientEventsCreateRequestBodyLoyalty](docs/Model/ClientEventsCreateRequestBodyLoyalty.md)
- [ClientEventsCreateRequestBodyReferral](docs/Model/ClientEventsCreateRequestBodyReferral.md)
- [ClientEventsCreateResponseBody](docs/Model/ClientEventsCreateResponseBody.md)
- [ClientQualificationsCheckEligibilityRequestBody](docs/Model/ClientQualificationsCheckEligibilityRequestBody.md)
- [ClientQualificationsCheckEligibilityResponseBody](docs/Model/ClientQualificationsCheckEligibilityResponseBody.md)
- [ClientRedemptionsRedeemRequestBody](docs/Model/ClientRedemptionsRedeemRequestBody.md)
- [ClientRedemptionsRedeemRequestBodyAllOfOptions](docs/Model/ClientRedemptionsRedeemRequestBodyAllOfOptions.md)
- [ClientRedemptionsRedeemResponseBody](docs/Model/ClientRedemptionsRedeemResponseBody.md)
- [ClientValidationsValidateRequestBody](docs/Model/ClientValidationsValidateRequestBody.md)
- [ClientValidationsValidateRequestBodyAllOfOptions](docs/Model/ClientValidationsValidateRequestBodyAllOfOptions.md)
- [ClientValidationsValidateResponseBody](docs/Model/ClientValidationsValidateResponseBody.md)
- [CodeConfig](docs/Model/CodeConfig.md)
- [CodeConfigRequiredLengthCharsetPattern](docs/Model/CodeConfigRequiredLengthCharsetPattern.md)
- [CreatePublicationCampaign](docs/Model/CreatePublicationCampaign.md)
- [CustomEvent](docs/Model/CustomEvent.md)
- [CustomEventReferral](docs/Model/CustomEventReferral.md)
- [Customer](docs/Model/Customer.md)
- [CustomerActivity](docs/Model/CustomerActivity.md)
- [CustomerActivityData](docs/Model/CustomerActivityData.md)
- [CustomerActivityDataCustomer](docs/Model/CustomerActivityDataCustomer.md)
- [CustomerActivityDataCustomerAddress](docs/Model/CustomerActivityDataCustomerAddress.md)
- [CustomerActivityDataCustomerAssets](docs/Model/CustomerActivityDataCustomerAssets.md)
- [CustomerActivityDataCustomerLoyalty](docs/Model/CustomerActivityDataCustomerLoyalty.md)
- [CustomerActivityDataCustomerReferrals](docs/Model/CustomerActivityDataCustomerReferrals.md)
- [CustomerActivityDataCustomerSummary](docs/Model/CustomerActivityDataCustomerSummary.md)
- [CustomerActivityDataOrder](docs/Model/CustomerActivityDataOrder.md)
- [CustomerActivityDataOrderCustomer](docs/Model/CustomerActivityDataOrderCustomer.md)
- [CustomerActivityDataOrderCustomerAddress](docs/Model/CustomerActivityDataOrderCustomerAddress.md)
- [CustomerActivityDataOrderCustomerAssets](docs/Model/CustomerActivityDataOrderCustomerAssets.md)
- [CustomerActivityDataOrderCustomerLoyalty](docs/Model/CustomerActivityDataOrderCustomerLoyalty.md)
- [CustomerActivityDataOrderCustomerReferrals](docs/Model/CustomerActivityDataOrderCustomerReferrals.md)
- [CustomerActivityDataOrderCustomerSummary](docs/Model/CustomerActivityDataOrderCustomerSummary.md)
- [CustomerActivityDataOrderItemsItem](docs/Model/CustomerActivityDataOrderItemsItem.md)
- [CustomerActivityDataOrderItemsItemProduct](docs/Model/CustomerActivityDataOrderItemsItemProduct.md)
- [CustomerActivityDataOrderItemsItemSku](docs/Model/CustomerActivityDataOrderItemsItemSku.md)
- [CustomerActivityDataOrderReferrer](docs/Model/CustomerActivityDataOrderReferrer.md)
- [CustomerActivityDataOrderReferrerAddress](docs/Model/CustomerActivityDataOrderReferrerAddress.md)
- [CustomerActivityDataOrderReferrerAssets](docs/Model/CustomerActivityDataOrderReferrerAssets.md)
- [CustomerActivityDataOrderReferrerLoyalty](docs/Model/CustomerActivityDataOrderReferrerLoyalty.md)
- [CustomerActivityDataOrderReferrerReferrals](docs/Model/CustomerActivityDataOrderReferrerReferrals.md)
- [CustomerActivityDataOrderReferrerSummary](docs/Model/CustomerActivityDataOrderReferrerSummary.md)
- [CustomerActivityDataRedemption](docs/Model/CustomerActivityDataRedemption.md)
- [CustomerActivityDataRedemptionOrder](docs/Model/CustomerActivityDataRedemptionOrder.md)
- [CustomerActivityDataRedemptionOrderCustomer](docs/Model/CustomerActivityDataRedemptionOrderCustomer.md)
- [CustomerActivityDataRedemptionOrderCustomerAddress](docs/Model/CustomerActivityDataRedemptionOrderCustomerAddress.md)
- [CustomerActivityDataRedemptionOrderCustomerAssets](docs/Model/CustomerActivityDataRedemptionOrderCustomerAssets.md)
- [CustomerActivityDataRedemptionOrderCustomerLoyalty](docs/Model/CustomerActivityDataRedemptionOrderCustomerLoyalty.md)
- [CustomerActivityDataRedemptionOrderCustomerReferrals](docs/Model/CustomerActivityDataRedemptionOrderCustomerReferrals.md)
- [CustomerActivityDataRedemptionOrderCustomerSummary](docs/Model/CustomerActivityDataRedemptionOrderCustomerSummary.md)
- [CustomerActivityDataRedemptionOrderItemsItem](docs/Model/CustomerActivityDataRedemptionOrderItemsItem.md)
- [CustomerActivityDataRedemptionOrderItemsItemProduct](docs/Model/CustomerActivityDataRedemptionOrderItemsItemProduct.md)
- [CustomerActivityDataRedemptionOrderItemsItemSku](docs/Model/CustomerActivityDataRedemptionOrderItemsItemSku.md)
- [CustomerActivityDataRedemptionOrderReferrer](docs/Model/CustomerActivityDataRedemptionOrderReferrer.md)
- [CustomerActivityDataRedemptionOrderReferrerAddress](docs/Model/CustomerActivityDataRedemptionOrderReferrerAddress.md)
- [CustomerActivityDataRedemptionOrderReferrerAssets](docs/Model/CustomerActivityDataRedemptionOrderReferrerAssets.md)
- [CustomerActivityDataRedemptionOrderReferrerLoyalty](docs/Model/CustomerActivityDataRedemptionOrderReferrerLoyalty.md)
- [CustomerActivityDataRedemptionOrderReferrerReferrals](docs/Model/CustomerActivityDataRedemptionOrderReferrerReferrals.md)
- [CustomerActivityDataRedemptionOrderReferrerSummary](docs/Model/CustomerActivityDataRedemptionOrderReferrerSummary.md)
- [CustomerActivityDataRedemptionPromotionTier](docs/Model/CustomerActivityDataRedemptionPromotionTier.md)
- [CustomerActivityDataRedemptionPromotionTierAction](docs/Model/CustomerActivityDataRedemptionPromotionTierAction.md)
- [CustomerActivityDataRedemptionPromotionTierCampaign](docs/Model/CustomerActivityDataRedemptionPromotionTierCampaign.md)
- [CustomerActivityDataRedemptionPromotionTierCampaignValidityTimeframe](docs/Model/CustomerActivityDataRedemptionPromotionTierCampaignValidityTimeframe.md)
- [CustomerActivityDataRedemptionPromotionTierSummary](docs/Model/CustomerActivityDataRedemptionPromotionTierSummary.md)
- [CustomerActivityDataRedemptionPromotionTierSummaryOrders](docs/Model/CustomerActivityDataRedemptionPromotionTierSummaryOrders.md)
- [CustomerActivityDataRedemptionPromotionTierSummaryRedemptions](docs/Model/CustomerActivityDataRedemptionPromotionTierSummaryRedemptions.md)
- [CustomerActivityDataRedemptionPromotionTierValidityTimeframe](docs/Model/CustomerActivityDataRedemptionPromotionTierValidityTimeframe.md)
- [CustomerActivityDataRedemptionRelatedRedemptions](docs/Model/CustomerActivityDataRedemptionRelatedRedemptions.md)
- [CustomerActivityDataRedemptionReward](docs/Model/CustomerActivityDataRedemptionReward.md)
- [CustomerActivityDataRedemptionRewardCustomer](docs/Model/CustomerActivityDataRedemptionRewardCustomer.md)
- [CustomerActivityDataRedemptionRewardParameters](docs/Model/CustomerActivityDataRedemptionRewardParameters.md)
- [CustomerActivityDataRedemptionRewardParametersCampaign](docs/Model/CustomerActivityDataRedemptionRewardParametersCampaign.md)
- [CustomerActivityDataRedemptionRewardParametersCoin](docs/Model/CustomerActivityDataRedemptionRewardParametersCoin.md)
- [CustomerActivityDataRedemptionRewardParametersProduct](docs/Model/CustomerActivityDataRedemptionRewardParametersProduct.md)
- [CustomerActivityDataRedemptionRewardProduct](docs/Model/CustomerActivityDataRedemptionRewardProduct.md)
- [CustomerActivityDataRedemptionRewardSku](docs/Model/CustomerActivityDataRedemptionRewardSku.md)
- [CustomerActivityDataRedemptionRewardVoucher](docs/Model/CustomerActivityDataRedemptionRewardVoucher.md)
- [CustomerActivityDataRedemptionRewardVoucherGift](docs/Model/CustomerActivityDataRedemptionRewardVoucherGift.md)
- [CustomerActivityDataRedemptionRewardVoucherLoyaltyCard](docs/Model/CustomerActivityDataRedemptionRewardVoucherLoyaltyCard.md)
- [CustomerActivityDataRedemptionRewardVoucherPublish](docs/Model/CustomerActivityDataRedemptionRewardVoucherPublish.md)
- [CustomerActivityDataRedemptionRewardVoucherRedemption](docs/Model/CustomerActivityDataRedemptionRewardVoucherRedemption.md)
- [CustomerActivityDataRedemptionRewardVoucherValidityTimeframe](docs/Model/CustomerActivityDataRedemptionRewardVoucherValidityTimeframe.md)
- [CustomerActivityDataRedemptionVoucher](docs/Model/CustomerActivityDataRedemptionVoucher.md)
- [CustomerActivityDataRedemptionVoucherGift](docs/Model/CustomerActivityDataRedemptionVoucherGift.md)
- [CustomerActivityDataRedemptionVoucherLoyaltyCard](docs/Model/CustomerActivityDataRedemptionVoucherLoyaltyCard.md)
- [CustomerActivityDataRedemptionVoucherPublish](docs/Model/CustomerActivityDataRedemptionVoucherPublish.md)
- [CustomerActivityDataRedemptionVoucherRedemption](docs/Model/CustomerActivityDataRedemptionVoucherRedemption.md)
- [CustomerActivityDataRedemptionVoucherValidityTimeframe](docs/Model/CustomerActivityDataRedemptionVoucherValidityTimeframe.md)
- [CustomerActivityDataUnconfirmedCustomer](docs/Model/CustomerActivityDataUnconfirmedCustomer.md)
- [CustomerBase](docs/Model/CustomerBase.md)
- [CustomerBaseAddress](docs/Model/CustomerBaseAddress.md)
- [CustomerId](docs/Model/CustomerId.md)
- [CustomerLoyalty](docs/Model/CustomerLoyalty.md)
- [CustomerLoyaltyCampaignsValue](docs/Model/CustomerLoyaltyCampaignsValue.md)
- [CustomerReferrals](docs/Model/CustomerReferrals.md)
- [CustomerReferralsCampaignsItem](docs/Model/CustomerReferralsCampaignsItem.md)
- [CustomerResponseDataAssets](docs/Model/CustomerResponseDataAssets.md)
- [CustomerSegmentsList](docs/Model/CustomerSegmentsList.md)
- [CustomerSummary](docs/Model/CustomerSummary.md)
- [CustomerSummaryOrders](docs/Model/CustomerSummaryOrders.md)
- [CustomerSummaryRedemptions](docs/Model/CustomerSummaryRedemptions.md)
- [CustomerSummaryRedemptionsGift](docs/Model/CustomerSummaryRedemptionsGift.md)
- [CustomerSummaryRedemptionsLoyaltyCard](docs/Model/CustomerSummaryRedemptionsLoyaltyCard.md)
- [CustomerWithSummaryLoyaltyReferrals](docs/Model/CustomerWithSummaryLoyaltyReferrals.md)
- [CustomersActivitiesListResponseBody](docs/Model/CustomersActivitiesListResponseBody.md)
- [CustomersCreateRequestBody](docs/Model/CustomersCreateRequestBody.md)
- [CustomersCreateResponseBody](docs/Model/CustomersCreateResponseBody.md)
- [CustomersGetResponseBody](docs/Model/CustomersGetResponseBody.md)
- [CustomersImportCsvCreateResponseBody](docs/Model/CustomersImportCsvCreateResponseBody.md)
- [CustomersListResponseBody](docs/Model/CustomersListResponseBody.md)
- [CustomersMetadataUpdateInBulkRequestBody](docs/Model/CustomersMetadataUpdateInBulkRequestBody.md)
- [CustomersMetadataUpdateInBulkResponseBody](docs/Model/CustomersMetadataUpdateInBulkResponseBody.md)
- [CustomersPermanentDeletionCreateResponseBody](docs/Model/CustomersPermanentDeletionCreateResponseBody.md)
- [CustomersPermanentDeletionCreateResponseBodyDataJson](docs/Model/CustomersPermanentDeletionCreateResponseBodyDataJson.md)
- [CustomersSegmentsListResponseBody](docs/Model/CustomersSegmentsListResponseBody.md)
- [CustomersUpdateInBulkRequestBody](docs/Model/CustomersUpdateInBulkRequestBody.md)
- [CustomersUpdateInBulkResponseBody](docs/Model/CustomersUpdateInBulkResponseBody.md)
- [CustomersUpdateRequestBody](docs/Model/CustomersUpdateRequestBody.md)
- [CustomersUpdateResponseBody](docs/Model/CustomersUpdateResponseBody.md)
- [Discount](docs/Model/Discount.md)
- [DiscountUnitMultipleOneUnit](docs/Model/DiscountUnitMultipleOneUnit.md)
- [EarningRule](docs/Model/EarningRule.md)
- [EarningRuleBase](docs/Model/EarningRuleBase.md)
- [EarningRuleBaseCustomEvent](docs/Model/EarningRuleBaseCustomEvent.md)
- [EarningRuleBaseLoyalty](docs/Model/EarningRuleBaseLoyalty.md)
- [EarningRuleBaseLoyaltyCustomEvent](docs/Model/EarningRuleBaseLoyaltyCustomEvent.md)
- [EarningRuleBaseLoyaltyCustomEventMetadata](docs/Model/EarningRuleBaseLoyaltyCustomEventMetadata.md)
- [EarningRuleBaseLoyaltyCustomer](docs/Model/EarningRuleBaseLoyaltyCustomer.md)
- [EarningRuleBaseLoyaltyCustomerMetadata](docs/Model/EarningRuleBaseLoyaltyCustomerMetadata.md)
- [EarningRuleBaseLoyaltyOrder](docs/Model/EarningRuleBaseLoyaltyOrder.md)
- [EarningRuleBaseLoyaltyOrderAmount](docs/Model/EarningRuleBaseLoyaltyOrderAmount.md)
- [EarningRuleBaseLoyaltyOrderItems](docs/Model/EarningRuleBaseLoyaltyOrderItems.md)
- [EarningRuleBaseLoyaltyOrderItemsQuantity](docs/Model/EarningRuleBaseLoyaltyOrderItemsQuantity.md)
- [EarningRuleBaseLoyaltyOrderMetadata](docs/Model/EarningRuleBaseLoyaltyOrderMetadata.md)
- [EarningRuleBaseSegment](docs/Model/EarningRuleBaseSegment.md)
- [EarningRuleBaseSource](docs/Model/EarningRuleBaseSource.md)
- [EarningRuleBaseValidityTimeframe](docs/Model/EarningRuleBaseValidityTimeframe.md)
- [Error](docs/Model/Error.md)
- [EventsCreateRequestBody](docs/Model/EventsCreateRequestBody.md)
- [EventsCreateResponseBody](docs/Model/EventsCreateResponseBody.md)
- [Export](docs/Model/Export.md)
- [ExportOrderBase](docs/Model/ExportOrderBase.md)
- [ExportParameters](docs/Model/ExportParameters.md)
- [ExportParametersFilters](docs/Model/ExportParametersFilters.md)
- [ExportResult](docs/Model/ExportResult.md)
- [ExportScheduledBase](docs/Model/ExportScheduledBase.md)
- [ExportVoucherTransactionsBase](docs/Model/ExportVoucherTransactionsBase.md)
- [ExportVoucherTransactionsFilters](docs/Model/ExportVoucherTransactionsFilters.md)
- [ExportVoucherTransactionsScheduled](docs/Model/ExportVoucherTransactionsScheduled.md)
- [ExportsCreateRequestBody](docs/Model/ExportsCreateRequestBody.md)
- [ExportsCreateRequestBodyParameters](docs/Model/ExportsCreateRequestBodyParameters.md)
- [ExportsCreateRequestBodyParametersFilters](docs/Model/ExportsCreateRequestBodyParametersFilters.md)
- [ExportsCreateResponseBody](docs/Model/ExportsCreateResponseBody.md)
- [ExportsCreateResponseBodyParameters](docs/Model/ExportsCreateResponseBodyParameters.md)
- [ExportsCreateResponseBodyParametersFilters](docs/Model/ExportsCreateResponseBodyParametersFilters.md)
- [ExportsGetResponseBody](docs/Model/ExportsGetResponseBody.md)
- [ExportsListResponseBody](docs/Model/ExportsListResponseBody.md)
- [FieldConditions](docs/Model/FieldConditions.md)
- [FilterConditionsString](docs/Model/FilterConditionsString.md)
- [FiltersCondition](docs/Model/FiltersCondition.md)
- [Gift](docs/Model/Gift.md)
- [InapplicableTo](docs/Model/InapplicableTo.md)
- [InapplicableToResultList](docs/Model/InapplicableToResultList.md)
- [ListPublicationsItemVoucher](docs/Model/ListPublicationsItemVoucher.md)
- [LoyaltiesDeleteResponseBody](docs/Model/LoyaltiesDeleteResponseBody.md)
- [LoyaltiesEarningRulesDisableResponseBody](docs/Model/LoyaltiesEarningRulesDisableResponseBody.md)
- [LoyaltiesEarningRulesEnableResponseBody](docs/Model/LoyaltiesEarningRulesEnableResponseBody.md)
- [LoyaltiesEarningRulesGetResponseBody](docs/Model/LoyaltiesEarningRulesGetResponseBody.md)
- [LoyaltiesLoyaltyTierReward](docs/Model/LoyaltiesLoyaltyTierReward.md)
- [LoyaltiesMembersBalanceUpdateRequestBody](docs/Model/LoyaltiesMembersBalanceUpdateRequestBody.md)
- [LoyaltiesMembersBalanceUpdateResponseBody](docs/Model/LoyaltiesMembersBalanceUpdateResponseBody.md)
- [LoyaltiesMembersBalanceUpdateResponseBodyRelatedObject](docs/Model/LoyaltiesMembersBalanceUpdateResponseBodyRelatedObject.md)
- [LoyaltiesMembersPointsExpirationListResponseBody](docs/Model/LoyaltiesMembersPointsExpirationListResponseBody.md)
- [LoyaltiesMembersPointsExpirationListResponseBodyDataItem](docs/Model/LoyaltiesMembersPointsExpirationListResponseBodyDataItem.md)
- [LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket](docs/Model/LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket.md)
- [LoyaltiesMembersRedemptionRedeemRequestBody](docs/Model/LoyaltiesMembersRedemptionRedeemRequestBody.md)
- [LoyaltiesMembersRedemptionRedeemRequestBodyReward](docs/Model/LoyaltiesMembersRedemptionRedeemRequestBodyReward.md)
- [LoyaltiesMembersRedemptionRedeemResponseBody](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBody.md)
- [LoyaltiesMembersRewardsListResponseBody](docs/Model/LoyaltiesMembersRewardsListResponseBody.md)
- [LoyaltiesMembersRewardsListResponseBodyDataItem](docs/Model/LoyaltiesMembersRewardsListResponseBodyDataItem.md)
- [LoyaltiesMembersTiersListResponseBody](docs/Model/LoyaltiesMembersTiersListResponseBody.md)
- [LoyaltiesMembersTransactionsExportCreateRequestBody](docs/Model/LoyaltiesMembersTransactionsExportCreateRequestBody.md)
- [LoyaltiesMembersTransactionsExportCreateRequestBodyParameters](docs/Model/LoyaltiesMembersTransactionsExportCreateRequestBodyParameters.md)
- [LoyaltiesMembersTransactionsExportCreateResponseBody](docs/Model/LoyaltiesMembersTransactionsExportCreateResponseBody.md)
- [LoyaltiesMembersTransactionsListResponseBody](docs/Model/LoyaltiesMembersTransactionsListResponseBody.md)
- [LoyaltiesMembersTransfersCreateResponseBody](docs/Model/LoyaltiesMembersTransfersCreateResponseBody.md)
- [LoyaltiesMembersTransfersCreateResponseBodyAssets](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyAssets.md)
- [LoyaltiesMembersTransfersCreateResponseBodyAssetsBarcode](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyAssetsBarcode.md)
- [LoyaltiesMembersTransfersCreateResponseBodyAssetsQr](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyAssetsQr.md)
- [LoyaltiesMembersTransfersCreateResponseBodyLoyaltyCard](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyLoyaltyCard.md)
- [LoyaltiesMembersTransfersCreateResponseBodyPublish](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyPublish.md)
- [LoyaltiesMembersTransfersCreateResponseBodyRedemption](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyRedemption.md)
- [LoyaltiesMembersTransfersCreateResponseBodyValidityTimeframe](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyValidityTimeframe.md)
- [LoyaltiesRewardAssignmentsGetResponseBody](docs/Model/LoyaltiesRewardAssignmentsGetResponseBody.md)
- [LoyaltiesRewardAssignmentsRewardGetResponseBody](docs/Model/LoyaltiesRewardAssignmentsRewardGetResponseBody.md)
- [LoyaltiesRewardsGetResponseBody](docs/Model/LoyaltiesRewardsGetResponseBody.md)
- [LoyaltiesTiersCreateInBulkRequestBodyItem](docs/Model/LoyaltiesTiersCreateInBulkRequestBodyItem.md)
- [LoyaltiesTiersEarningRulesListResponseBody](docs/Model/LoyaltiesTiersEarningRulesListResponseBody.md)
- [LoyaltiesTiersGetResponseBody](docs/Model/LoyaltiesTiersGetResponseBody.md)
- [LoyaltiesTiersListResponseBody](docs/Model/LoyaltiesTiersListResponseBody.md)
- [LoyaltiesTiersRewardsListResponseBody](docs/Model/LoyaltiesTiersRewardsListResponseBody.md)
- [LoyaltiesTransferPoints](docs/Model/LoyaltiesTransferPoints.md)
- [LoyaltyCardTransaction](docs/Model/LoyaltyCardTransaction.md)
- [LoyaltyTier](docs/Model/LoyaltyTier.md)
- [LoyaltyTierAllOfConfig](docs/Model/LoyaltyTierAllOfConfig.md)
- [LoyaltyTierAllOfConfigPoints](docs/Model/LoyaltyTierAllOfConfigPoints.md)
- [LoyaltyTierBase](docs/Model/LoyaltyTierBase.md)
- [LoyaltyTierBasePoints](docs/Model/LoyaltyTierBasePoints.md)
- [LoyaltyTierExpiration](docs/Model/LoyaltyTierExpiration.md)
- [LoyaltyTiersExpirationAll](docs/Model/LoyaltyTiersExpirationAll.md)
- [LoyaltyTiersExpirationAllExpirationDate](docs/Model/LoyaltyTiersExpirationAllExpirationDate.md)
- [LoyaltyTiersExpirationAllExpirationDateRounding](docs/Model/LoyaltyTiersExpirationAllExpirationDateRounding.md)
- [LoyaltyTiersExpirationAllStartDate](docs/Model/LoyaltyTiersExpirationAllStartDate.md)
- [LuckyDraw](docs/Model/LuckyDraw.md)
- [MappingPoints](docs/Model/MappingPoints.md)
- [Order](docs/Model/Order.md)
- [OrderBase](docs/Model/OrderBase.md)
- [OrderCalculated](docs/Model/OrderCalculated.md)
- [OrderCalculatedBase](docs/Model/OrderCalculatedBase.md)
- [OrderCalculatedCustomer](docs/Model/OrderCalculatedCustomer.md)
- [OrderCalculatedCustomerAddress](docs/Model/OrderCalculatedCustomerAddress.md)
- [OrderCalculatedNoCustomerData](docs/Model/OrderCalculatedNoCustomerData.md)
- [OrderCalculatedReferrer](docs/Model/OrderCalculatedReferrer.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemCalculated](docs/Model/OrderItemCalculated.md)
- [OrderItemCalculatedProduct](docs/Model/OrderItemCalculatedProduct.md)
- [OrderItemCalculatedSku](docs/Model/OrderItemCalculatedSku.md)
- [OrderRedemptions](docs/Model/OrderRedemptions.md)
- [OrdersCreateRequestBody](docs/Model/OrdersCreateRequestBody.md)
- [OrdersCreateResponseBody](docs/Model/OrdersCreateResponseBody.md)
- [OrdersExportCreateRequestBody](docs/Model/OrdersExportCreateRequestBody.md)
- [OrdersExportCreateRequestBodyParameters](docs/Model/OrdersExportCreateRequestBodyParameters.md)
- [OrdersExportCreateResponseBody](docs/Model/OrdersExportCreateResponseBody.md)
- [OrdersGetResponseBody](docs/Model/OrdersGetResponseBody.md)
- [OrdersImportCreateRequestBodyItem](docs/Model/OrdersImportCreateRequestBodyItem.md)
- [OrdersImportCreateResponseBody](docs/Model/OrdersImportCreateResponseBody.md)
- [OrdersListResponseBody](docs/Model/OrdersListResponseBody.md)
- [OrdersUpdateRequestBody](docs/Model/OrdersUpdateRequestBody.md)
- [OrdersUpdateResponseBody](docs/Model/OrdersUpdateResponseBody.md)
- [ParameterCampaignType](docs/Model/ParameterCampaignType.md)
- [ParameterCreatedBeforeAfter](docs/Model/ParameterCreatedBeforeAfter.md)
- [ParameterExpandListCampaigns](docs/Model/ParameterExpandListCampaigns.md)
- [ParameterFiltersListRedemptions](docs/Model/ParameterFiltersListRedemptions.md)
- [ParameterFiltersListRedemptionsCampaignName](docs/Model/ParameterFiltersListRedemptionsCampaignName.md)
- [ParameterFiltersListRedemptionsCustomerId](docs/Model/ParameterFiltersListRedemptionsCustomerId.md)
- [ParameterFiltersListRedemptionsFailureCode](docs/Model/ParameterFiltersListRedemptionsFailureCode.md)
- [ParameterFiltersListRedemptionsObject](docs/Model/ParameterFiltersListRedemptionsObject.md)
- [ParameterFiltersListRedemptionsParentRedemptionId](docs/Model/ParameterFiltersListRedemptionsParentRedemptionId.md)
- [ParameterFiltersListRedemptionsRelatedObjectId](docs/Model/ParameterFiltersListRedemptionsRelatedObjectId.md)
- [ParameterFiltersListRedemptionsRelatedObjectParentId](docs/Model/ParameterFiltersListRedemptionsRelatedObjectParentId.md)
- [ParameterFiltersListRedemptionsResult](docs/Model/ParameterFiltersListRedemptionsResult.md)
- [ParameterFiltersListRedemptionsUserLogin](docs/Model/ParameterFiltersListRedemptionsUserLogin.md)
- [ParameterFiltersListRedemptionsVoucherCode](docs/Model/ParameterFiltersListRedemptionsVoucherCode.md)
- [ParameterOrder](docs/Model/ParameterOrder.md)
- [ParameterOrderListAllPromotionStacks](docs/Model/ParameterOrderListAllPromotionStacks.md)
- [ParameterOrderListCampaigns](docs/Model/ParameterOrderListCampaigns.md)
- [ParameterOrderListCustomers](docs/Model/ParameterOrderListCustomers.md)
- [ParameterOrderListExports](docs/Model/ParameterOrderListExports.md)
- [ParameterOrderListLoyaltyTiers](docs/Model/ParameterOrderListLoyaltyTiers.md)
- [ParameterOrderListOrders](docs/Model/ParameterOrderListOrders.md)
- [ParameterOrderListPublications](docs/Model/ParameterOrderListPublications.md)
- [ParameterOrderListRedemptions](docs/Model/ParameterOrderListRedemptions.md)
- [ParameterOrderListValidationRuleAssignments](docs/Model/ParameterOrderListValidationRuleAssignments.md)
- [ParameterOrderListValidationRules](docs/Model/ParameterOrderListValidationRules.md)
- [ParameterResultListPublications](docs/Model/ParameterResultListPublications.md)
- [ParameterUpdatedBeforeAfter](docs/Model/ParameterUpdatedBeforeAfter.md)
- [ParameterVoucherTypeListPublications](docs/Model/ParameterVoucherTypeListPublications.md)
- [Product](docs/Model/Product.md)
- [ProductCollectionsCreateDynamicRequestBodyProductsItem](docs/Model/ProductCollectionsCreateDynamicRequestBodyProductsItem.md)
- [ProductCollectionsCreateRequestBody](docs/Model/ProductCollectionsCreateRequestBody.md)
- [ProductCollectionsCreateRequestBodyFilter](docs/Model/ProductCollectionsCreateRequestBodyFilter.md)
- [ProductCollectionsCreateResponseBody](docs/Model/ProductCollectionsCreateResponseBody.md)
- [ProductCollectionsGetResponseBody](docs/Model/ProductCollectionsGetResponseBody.md)
- [ProductCollectionsItem](docs/Model/ProductCollectionsItem.md)
- [ProductCollectionsItemProductsItem](docs/Model/ProductCollectionsItemProductsItem.md)
- [ProductCollectionsList](docs/Model/ProductCollectionsList.md)
- [ProductCollectionsListResponseBody](docs/Model/ProductCollectionsListResponseBody.md)
- [ProductCollectionsProductsList](docs/Model/ProductCollectionsProductsList.md)
- [ProductCollectionsProductsListDataItem](docs/Model/ProductCollectionsProductsListDataItem.md)
- [ProductCollectionsProductsListResponseBody](docs/Model/ProductCollectionsProductsListResponseBody.md)
- [ProductWithoutSkus](docs/Model/ProductWithoutSkus.md)
- [ProductsCreateRequestBody](docs/Model/ProductsCreateRequestBody.md)
- [ProductsCreateResponseBody](docs/Model/ProductsCreateResponseBody.md)
- [ProductsGetResponseBody](docs/Model/ProductsGetResponseBody.md)
- [ProductsImportCsvCreateResponseBody](docs/Model/ProductsImportCsvCreateResponseBody.md)
- [ProductsListResponseBody](docs/Model/ProductsListResponseBody.md)
- [ProductsMetadataUpdateInBulkRequestBody](docs/Model/ProductsMetadataUpdateInBulkRequestBody.md)
- [ProductsMetadataUpdateInBulkResponseBody](docs/Model/ProductsMetadataUpdateInBulkResponseBody.md)
- [ProductsSkusCreateRequestBody](docs/Model/ProductsSkusCreateRequestBody.md)
- [ProductsSkusCreateResponseBody](docs/Model/ProductsSkusCreateResponseBody.md)
- [ProductsSkusListResponseBody](docs/Model/ProductsSkusListResponseBody.md)
- [ProductsSkusUpdateRequestBody](docs/Model/ProductsSkusUpdateRequestBody.md)
- [ProductsSkusUpdateResponseBody](docs/Model/ProductsSkusUpdateResponseBody.md)
- [ProductsUpdateInBulkRequestBody](docs/Model/ProductsUpdateInBulkRequestBody.md)
- [ProductsUpdateInBulkResponseBody](docs/Model/ProductsUpdateInBulkResponseBody.md)
- [ProductsUpdateRequestBody](docs/Model/ProductsUpdateRequestBody.md)
- [ProductsUpdateResponseBody](docs/Model/ProductsUpdateResponseBody.md)
- [PromotionStack](docs/Model/PromotionStack.md)
- [PromotionStackBase](docs/Model/PromotionStackBase.md)
- [PromotionStackBaseTiers](docs/Model/PromotionStackBaseTiers.md)
- [PromotionTier](docs/Model/PromotionTier.md)
- [PromotionTierAction](docs/Model/PromotionTierAction.md)
- [PromotionTierCampaign](docs/Model/PromotionTierCampaign.md)
- [PromotionTierCampaignValidityTimeframe](docs/Model/PromotionTierCampaignValidityTimeframe.md)
- [PromotionTierCreateParams](docs/Model/PromotionTierCreateParams.md)
- [PromotionTierSummary](docs/Model/PromotionTierSummary.md)
- [PromotionTierSummaryOrders](docs/Model/PromotionTierSummaryOrders.md)
- [PromotionTierSummaryRedemptions](docs/Model/PromotionTierSummaryRedemptions.md)
- [PromotionTierValidityTimeframe](docs/Model/PromotionTierValidityTimeframe.md)
- [PromotionTiersList](docs/Model/PromotionTiersList.md)
- [PromotionsStacksCreateRequestBody](docs/Model/PromotionsStacksCreateRequestBody.md)
- [PromotionsStacksCreateResponseBody](docs/Model/PromotionsStacksCreateResponseBody.md)
- [PromotionsStacksGetResponseBody](docs/Model/PromotionsStacksGetResponseBody.md)
- [PromotionsStacksListResponseBody](docs/Model/PromotionsStacksListResponseBody.md)
- [PromotionsStacksUpdateRequestBody](docs/Model/PromotionsStacksUpdateRequestBody.md)
- [PromotionsStacksUpdateRequestBodyTiers](docs/Model/PromotionsStacksUpdateRequestBodyTiers.md)
- [PromotionsStacksUpdateResponseBody](docs/Model/PromotionsStacksUpdateResponseBody.md)
- [PromotionsTiersDisableResponseBody](docs/Model/PromotionsTiersDisableResponseBody.md)
- [PromotionsTiersEnableResponseBody](docs/Model/PromotionsTiersEnableResponseBody.md)
- [PromotionsTiersGetResponseBody](docs/Model/PromotionsTiersGetResponseBody.md)
- [PromotionsTiersListResponseBody](docs/Model/PromotionsTiersListResponseBody.md)
- [PublicationsCreateRequestBody](docs/Model/PublicationsCreateRequestBody.md)
- [PublicationsCreateRequestBodyCustomer](docs/Model/PublicationsCreateRequestBodyCustomer.md)
- [PublicationsCreateRequestBodyCustomerAddress](docs/Model/PublicationsCreateRequestBodyCustomerAddress.md)
- [PublicationsCreateResponseBody](docs/Model/PublicationsCreateResponseBody.md)
- [PublicationsListResponseBody](docs/Model/PublicationsListResponseBody.md)
- [PublicationsListResponseBodyPublicationsItem](docs/Model/PublicationsListResponseBodyPublicationsItem.md)
- [QualificationsCheckEligibilityRequestBody](docs/Model/QualificationsCheckEligibilityRequestBody.md)
- [QualificationsCheckEligibilityResponseBody](docs/Model/QualificationsCheckEligibilityResponseBody.md)
- [QualificationsFieldConditions](docs/Model/QualificationsFieldConditions.md)
- [QualificationsFiltersCondition](docs/Model/QualificationsFiltersCondition.md)
- [QualificationsOption](docs/Model/QualificationsOption.md)
- [QualificationsOptionFilters](docs/Model/QualificationsOptionFilters.md)
- [QualificationsRedeemable](docs/Model/QualificationsRedeemable.md)
- [QualificationsRedeemableBase](docs/Model/QualificationsRedeemableBase.md)
- [QualificationsRedeemables](docs/Model/QualificationsRedeemables.md)
- [RedeemableGift](docs/Model/RedeemableGift.md)
- [RedeemableLoyaltyCard](docs/Model/RedeemableLoyaltyCard.md)
- [RedeemableResult](docs/Model/RedeemableResult.md)
- [Redemption](docs/Model/Redemption.md)
- [RedemptionChannel](docs/Model/RedemptionChannel.md)
- [RedemptionGift](docs/Model/RedemptionGift.md)
- [RedemptionInternalRelatedRedemptionsItem](docs/Model/RedemptionInternalRelatedRedemptionsItem.md)
- [RedemptionInternalRelatedRedemptionsRollbacksItem](docs/Model/RedemptionInternalRelatedRedemptionsRollbacksItem.md)
- [RedemptionLoyaltyCard](docs/Model/RedemptionLoyaltyCard.md)
- [RedemptionRelatedRedemptions](docs/Model/RedemptionRelatedRedemptions.md)
- [RedemptionRelatedRedemptionsItem](docs/Model/RedemptionRelatedRedemptionsItem.md)
- [RedemptionRelatedRedemptionsRollbacksItem](docs/Model/RedemptionRelatedRedemptionsRollbacksItem.md)
- [RedemptionRewardResult](docs/Model/RedemptionRewardResult.md)
- [RedemptionRewardResultParameters](docs/Model/RedemptionRewardResultParameters.md)
- [RedemptionRewardResultParametersCampaign](docs/Model/RedemptionRewardResultParametersCampaign.md)
- [RedemptionRewardResultParametersCoin](docs/Model/RedemptionRewardResultParametersCoin.md)
- [RedemptionRewardResultParametersProduct](docs/Model/RedemptionRewardResultParametersProduct.md)
- [RedemptionRewardResultProduct](docs/Model/RedemptionRewardResultProduct.md)
- [RedemptionRewardResultSku](docs/Model/RedemptionRewardResultSku.md)
- [RedemptionRewardResultVoucher](docs/Model/RedemptionRewardResultVoucher.md)
- [RedemptionRollback](docs/Model/RedemptionRollback.md)
- [RedemptionRollbackRelatedRedemptions](docs/Model/RedemptionRollbackRelatedRedemptions.md)
- [RedemptionRollbackRelatedRedemptionsItem](docs/Model/RedemptionRollbackRelatedRedemptionsItem.md)
- [RedemptionRollbackRelatedRedemptionsRollbacksItem](docs/Model/RedemptionRollbackRelatedRedemptionsRollbacksItem.md)
- [RedemptionsGetResponseBody](docs/Model/RedemptionsGetResponseBody.md)
- [RedemptionsGetResponseBodyChannel](docs/Model/RedemptionsGetResponseBodyChannel.md)
- [RedemptionsGetResponseBodyCustomer](docs/Model/RedemptionsGetResponseBodyCustomer.md)
- [RedemptionsGetResponseBodyGift](docs/Model/RedemptionsGetResponseBodyGift.md)
- [RedemptionsGetResponseBodyLoyaltyCard](docs/Model/RedemptionsGetResponseBodyLoyaltyCard.md)
- [RedemptionsGetResponseBodyOrder](docs/Model/RedemptionsGetResponseBodyOrder.md)
- [RedemptionsGetResponseBodyOrderCustomer](docs/Model/RedemptionsGetResponseBodyOrderCustomer.md)
- [RedemptionsGetResponseBodyOrderReferrer](docs/Model/RedemptionsGetResponseBodyOrderReferrer.md)
- [RedemptionsGetResponseBodyPromotionTier](docs/Model/RedemptionsGetResponseBodyPromotionTier.md)
- [RedemptionsGetResponseBodyPromotionTierAction](docs/Model/RedemptionsGetResponseBodyPromotionTierAction.md)
- [RedemptionsGetResponseBodyPromotionTierCampaign](docs/Model/RedemptionsGetResponseBodyPromotionTierCampaign.md)
- [RedemptionsGetResponseBodyPromotionTierCampaignValidityTimeframe](docs/Model/RedemptionsGetResponseBodyPromotionTierCampaignValidityTimeframe.md)
- [RedemptionsGetResponseBodyPromotionTierSummary](docs/Model/RedemptionsGetResponseBodyPromotionTierSummary.md)
- [RedemptionsGetResponseBodyPromotionTierSummaryOrders](docs/Model/RedemptionsGetResponseBodyPromotionTierSummaryOrders.md)
- [RedemptionsGetResponseBodyPromotionTierSummaryRedemptions](docs/Model/RedemptionsGetResponseBodyPromotionTierSummaryRedemptions.md)
- [RedemptionsGetResponseBodyPromotionTierValidityTimeframe](docs/Model/RedemptionsGetResponseBodyPromotionTierValidityTimeframe.md)
- [RedemptionsGetResponseBodyRelatedRedemptions](docs/Model/RedemptionsGetResponseBodyRelatedRedemptions.md)
- [RedemptionsGetResponseBodyRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionsGetResponseBodyRelatedRedemptionsRedemptionsItem.md)
- [RedemptionsGetResponseBodyRelatedRedemptionsRollbacksItem](docs/Model/RedemptionsGetResponseBodyRelatedRedemptionsRollbacksItem.md)
- [RedemptionsGetResponseBodyVoucher](docs/Model/RedemptionsGetResponseBodyVoucher.md)
- [RedemptionsGetResponseBodyVoucherGift](docs/Model/RedemptionsGetResponseBodyVoucherGift.md)
- [RedemptionsGetResponseBodyVoucherLoyaltyCard](docs/Model/RedemptionsGetResponseBodyVoucherLoyaltyCard.md)
- [RedemptionsGetResponseBodyVoucherPublish](docs/Model/RedemptionsGetResponseBodyVoucherPublish.md)
- [RedemptionsGetResponseBodyVoucherRedemption](docs/Model/RedemptionsGetResponseBodyVoucherRedemption.md)
- [RedemptionsGetResponseBodyVoucherValidityTimeframe](docs/Model/RedemptionsGetResponseBodyVoucherValidityTimeframe.md)
- [RedemptionsListResponseBody](docs/Model/RedemptionsListResponseBody.md)
- [RedemptionsListResponseBodyRedemptionsItem](docs/Model/RedemptionsListResponseBodyRedemptionsItem.md)
- [RedemptionsListResponseBodyRedemptionsItemChannel](docs/Model/RedemptionsListResponseBodyRedemptionsItemChannel.md)
- [RedemptionsListResponseBodyRedemptionsItemCustomer](docs/Model/RedemptionsListResponseBodyRedemptionsItemCustomer.md)
- [RedemptionsListResponseBodyRedemptionsItemGift](docs/Model/RedemptionsListResponseBodyRedemptionsItemGift.md)
- [RedemptionsListResponseBodyRedemptionsItemLoyaltyCard](docs/Model/RedemptionsListResponseBodyRedemptionsItemLoyaltyCard.md)
- [RedemptionsListResponseBodyRedemptionsItemOrder](docs/Model/RedemptionsListResponseBodyRedemptionsItemOrder.md)
- [RedemptionsListResponseBodyRedemptionsItemOrderCustomer](docs/Model/RedemptionsListResponseBodyRedemptionsItemOrderCustomer.md)
- [RedemptionsListResponseBodyRedemptionsItemOrderReferrer](docs/Model/RedemptionsListResponseBodyRedemptionsItemOrderReferrer.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTier](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTier.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierAction](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierAction.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierCampaign](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierCampaign.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierCampaignValidityTimeframe](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierCampaignValidityTimeframe.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierSummary](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierSummary.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryOrders](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryOrders.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryRedemptions](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryRedemptions.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierValidityTimeframe](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierValidityTimeframe.md)
- [RedemptionsListResponseBodyRedemptionsItemRelatedRedemptions](docs/Model/RedemptionsListResponseBodyRedemptionsItemRelatedRedemptions.md)
- [RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRedemptionsItem.md)
- [RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRollbacksItem](docs/Model/RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRollbacksItem.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucher](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucher.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherGift](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherGift.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherLoyaltyCard](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherLoyaltyCard.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherPublish](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherPublish.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherRedemption](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherRedemption.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherValidityTimeframe](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherValidityTimeframe.md)
- [RedemptionsRedeemRequestBody](docs/Model/RedemptionsRedeemRequestBody.md)
- [RedemptionsRedeemResponseBody](docs/Model/RedemptionsRedeemResponseBody.md)
- [RedemptionsRollbackCreateRequestBody](docs/Model/RedemptionsRollbackCreateRequestBody.md)
- [RedemptionsRollbackCreateResponseBody](docs/Model/RedemptionsRollbackCreateResponseBody.md)
- [RedemptionsRollbacksCreateRequestBody](docs/Model/RedemptionsRollbacksCreateRequestBody.md)
- [RedemptionsRollbacksCreateResponseBody](docs/Model/RedemptionsRollbacksCreateResponseBody.md)
- [ReferralProgram](docs/Model/ReferralProgram.md)
- [ReferralProgramCustomEvent](docs/Model/ReferralProgramCustomEvent.md)
- [ReferralProgramRefereeReward](docs/Model/ReferralProgramRefereeReward.md)
- [ReferralProgramRefereeRewardRelatedObjectParent](docs/Model/ReferralProgramRefereeRewardRelatedObjectParent.md)
- [Referrer](docs/Model/Referrer.md)
- [ReferrerId](docs/Model/ReferrerId.md)
- [Reward](docs/Model/Reward.md)
- [RewardAssignment](docs/Model/RewardAssignment.md)
- [RewardAssignmentBase](docs/Model/RewardAssignmentBase.md)
- [RewardAssignmentParameters](docs/Model/RewardAssignmentParameters.md)
- [RewardAssignmentParametersParameters](docs/Model/RewardAssignmentParametersParameters.md)
- [RewardAssignmentParametersParametersLoyalty](docs/Model/RewardAssignmentParametersParametersLoyalty.md)
- [RewardAttributes](docs/Model/RewardAttributes.md)
- [RewardType](docs/Model/RewardType.md)
- [RewardTypeCampaign](docs/Model/RewardTypeCampaign.md)
- [RewardTypeCoin](docs/Model/RewardTypeCoin.md)
- [RewardTypeProduct](docs/Model/RewardTypeProduct.md)
- [RewardsAssignmentsCreateRequestBody](docs/Model/RewardsAssignmentsCreateRequestBody.md)
- [RewardsAssignmentsCreateRequestBodyParameters](docs/Model/RewardsAssignmentsCreateRequestBodyParameters.md)
- [RewardsAssignmentsCreateRequestBodyParametersLoyalty](docs/Model/RewardsAssignmentsCreateRequestBodyParametersLoyalty.md)
- [RewardsAssignmentsCreateResponseBody](docs/Model/RewardsAssignmentsCreateResponseBody.md)
- [RewardsAssignmentsGetResponseBody](docs/Model/RewardsAssignmentsGetResponseBody.md)
- [RewardsAssignmentsListResponseBody](docs/Model/RewardsAssignmentsListResponseBody.md)
- [RewardsAssignmentsUpdateRequestBody](docs/Model/RewardsAssignmentsUpdateRequestBody.md)
- [RewardsAssignmentsUpdateRequestBodyParameters](docs/Model/RewardsAssignmentsUpdateRequestBodyParameters.md)
- [RewardsAssignmentsUpdateRequestBodyParametersLoyalty](docs/Model/RewardsAssignmentsUpdateRequestBodyParametersLoyalty.md)
- [RewardsAssignmentsUpdateResponseBody](docs/Model/RewardsAssignmentsUpdateResponseBody.md)
- [Session](docs/Model/Session.md)
- [SimpleCampaign](docs/Model/SimpleCampaign.md)
- [SimpleConsent](docs/Model/SimpleConsent.md)
- [SimpleCustomer](docs/Model/SimpleCustomer.md)
- [SimpleCustomerRequiredObjectType](docs/Model/SimpleCustomerRequiredObjectType.md)
- [SimpleOrder](docs/Model/SimpleOrder.md)
- [SimpleOrderItem](docs/Model/SimpleOrderItem.md)
- [SimpleProduct](docs/Model/SimpleProduct.md)
- [SimpleProductDiscountUnit](docs/Model/SimpleProductDiscountUnit.md)
- [SimplePromotionTier](docs/Model/SimplePromotionTier.md)
- [SimplePromotionTierCampaign](docs/Model/SimplePromotionTierCampaign.md)
- [SimpleRedemption](docs/Model/SimpleRedemption.md)
- [SimpleRedemptionRewardResult](docs/Model/SimpleRedemptionRewardResult.md)
- [SimpleReferralTier](docs/Model/SimpleReferralTier.md)
- [SimpleSegment](docs/Model/SimpleSegment.md)
- [SimpleSku](docs/Model/SimpleSku.md)
- [SimpleSkuDiscountUnit](docs/Model/SimpleSkuDiscountUnit.md)
- [SimpleVoucher](docs/Model/SimpleVoucher.md)
- [Sku](docs/Model/Sku.md)
- [SkusGetResponseBody](docs/Model/SkusGetResponseBody.md)
- [SkusImportCsvCreateResponseBody](docs/Model/SkusImportCsvCreateResponseBody.md)
- [SkusList](docs/Model/SkusList.md)
- [SkusListForProduct](docs/Model/SkusListForProduct.md)
- [StackableValidateRedeemBase](docs/Model/StackableValidateRedeemBase.md)
- [StackableValidateRedeemBaseRedeemablesItem](docs/Model/StackableValidateRedeemBaseRedeemablesItem.md)
- [StackableValidateRedeemBaseRedeemablesItemGift](docs/Model/StackableValidateRedeemBaseRedeemablesItemGift.md)
- [StackableValidateRedeemBaseRedeemablesItemReward](docs/Model/StackableValidateRedeemBaseRedeemablesItemReward.md)
- [StackingRules](docs/Model/StackingRules.md)
- [ValidationEntity](docs/Model/ValidationEntity.md)
- [ValidationRule](docs/Model/ValidationRule.md)
- [ValidationRuleAssignment](docs/Model/ValidationRuleAssignment.md)
- [ValidationRuleAssignmentsList](docs/Model/ValidationRuleAssignmentsList.md)
- [ValidationRuleBase](docs/Model/ValidationRuleBase.md)
- [ValidationRuleBaseApplicableTo](docs/Model/ValidationRuleBaseApplicableTo.md)
- [ValidationRuleBaseError](docs/Model/ValidationRuleBaseError.md)
- [ValidationRulesAssignmentsList](docs/Model/ValidationRulesAssignmentsList.md)
- [ValidationRulesAssignmentsListResponseBody](docs/Model/ValidationRulesAssignmentsListResponseBody.md)
- [ValidationRulesCreateRequestBody](docs/Model/ValidationRulesCreateRequestBody.md)
- [ValidationRulesCreateResponseBody](docs/Model/ValidationRulesCreateResponseBody.md)
- [ValidationRulesGetResponseBody](docs/Model/ValidationRulesGetResponseBody.md)
- [ValidationRulesListResponseBody](docs/Model/ValidationRulesListResponseBody.md)
- [ValidationRulesUpdateRequestBody](docs/Model/ValidationRulesUpdateRequestBody.md)
- [ValidationRulesUpdateResponseBody](docs/Model/ValidationRulesUpdateResponseBody.md)
- [ValidationsRedeemableApplicable](docs/Model/ValidationsRedeemableApplicable.md)
- [ValidationsRedeemableApplicableResult](docs/Model/ValidationsRedeemableApplicableResult.md)
- [ValidationsRedeemableApplicableResultDiscount](docs/Model/ValidationsRedeemableApplicableResultDiscount.md)
- [ValidationsRedeemableApplicableResultDiscountProduct](docs/Model/ValidationsRedeemableApplicableResultDiscountProduct.md)
- [ValidationsRedeemableApplicableResultLoyaltyCard](docs/Model/ValidationsRedeemableApplicableResultLoyaltyCard.md)
- [ValidationsRedeemableInapplicable](docs/Model/ValidationsRedeemableInapplicable.md)
- [ValidationsRedeemableInapplicableResult](docs/Model/ValidationsRedeemableInapplicableResult.md)
- [ValidationsRedeemableSkipped](docs/Model/ValidationsRedeemableSkipped.md)
- [ValidationsValidateRequestBody](docs/Model/ValidationsValidateRequestBody.md)
- [ValidationsValidateResponseBody](docs/Model/ValidationsValidateResponseBody.md)
- [ValidationsValidateResponseBodyRedeemablesItem](docs/Model/ValidationsValidateResponseBodyRedeemablesItem.md)
- [ValidationsValidateResponseBodyRedeemablesItemResult](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResult.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultDiscount](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultDiscount.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultGift](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultGift.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultLoyaltyCard](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultLoyaltyCard.md)
- [Voucher](docs/Model/Voucher.md)
- [VoucherAssets](docs/Model/VoucherAssets.md)
- [VoucherGift](docs/Model/VoucherGift.md)
- [VoucherLoyaltyCard](docs/Model/VoucherLoyaltyCard.md)
- [VoucherPublish](docs/Model/VoucherPublish.md)
- [VoucherRedemption](docs/Model/VoucherRedemption.md)
- [VoucherTransaction](docs/Model/VoucherTransaction.md)
- [VoucherTransactionDetails](docs/Model/VoucherTransactionDetails.md)
- [VoucherTransactionDetailsBalance](docs/Model/VoucherTransactionDetailsBalance.md)
- [VoucherTransactionDetailsBalanceRelatedObject](docs/Model/VoucherTransactionDetailsBalanceRelatedObject.md)
- [VoucherTransactionDetailsCustomEvent](docs/Model/VoucherTransactionDetailsCustomEvent.md)
- [VoucherTransactionDetailsEarningRule](docs/Model/VoucherTransactionDetailsEarningRule.md)
- [VoucherTransactionDetailsEarningRuleSource](docs/Model/VoucherTransactionDetailsEarningRuleSource.md)
- [VoucherTransactionDetailsEvent](docs/Model/VoucherTransactionDetailsEvent.md)
- [VoucherTransactionDetailsEventSchema](docs/Model/VoucherTransactionDetailsEventSchema.md)
- [VoucherTransactionDetailsLoyaltyTier](docs/Model/VoucherTransactionDetailsLoyaltyTier.md)
- [VoucherTransactionDetailsOrder](docs/Model/VoucherTransactionDetailsOrder.md)
- [VoucherTransactionDetailsRedemption](docs/Model/VoucherTransactionDetailsRedemption.md)
- [VoucherTransactionDetailsReward](docs/Model/VoucherTransactionDetailsReward.md)
- [VoucherTransactionDetailsRollback](docs/Model/VoucherTransactionDetailsRollback.md)
- [VoucherTransactionDetailsSegment](docs/Model/VoucherTransactionDetailsSegment.md)
- [VoucherTransactionsExport](docs/Model/VoucherTransactionsExport.md)
- [VoucherTransactionsExportFilterConditions](docs/Model/VoucherTransactionsExportFilterConditions.md)
- [VoucherTransactionsExportFilterConditionsVoucherId](docs/Model/VoucherTransactionsExportFilterConditionsVoucherId.md)
- [VoucherTransactionsExportFilterConditionsVoucherIdConditions](docs/Model/VoucherTransactionsExportFilterConditionsVoucherIdConditions.md)
- [VoucherTransactionsExportParameters](docs/Model/VoucherTransactionsExportParameters.md)
- [VoucherTransactionsExportResult](docs/Model/VoucherTransactionsExportResult.md)
- [VoucherTransactionsFilters](docs/Model/VoucherTransactionsFilters.md)
- [VoucherValidityTimeframe](docs/Model/VoucherValidityTimeframe.md)
- [VouchersBalanceUpdateRequestBody](docs/Model/VouchersBalanceUpdateRequestBody.md)
- [VouchersBalanceUpdateResponseBody](docs/Model/VouchersBalanceUpdateResponseBody.md)
- [VouchersBalanceUpdateResponseBodyRelatedObject](docs/Model/VouchersBalanceUpdateResponseBodyRelatedObject.md)
- [VouchersDisableResponseBody](docs/Model/VouchersDisableResponseBody.md)
- [VouchersEnableResponseBody](docs/Model/VouchersEnableResponseBody.md)
- [VouchersGetResponseBody](docs/Model/VouchersGetResponseBody.md)
- [VouchersImportCsvCreateResponseBody](docs/Model/VouchersImportCsvCreateResponseBody.md)
- [VouchersRedemptionGetResponseBody](docs/Model/VouchersRedemptionGetResponseBody.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItem](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItem.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemChannel](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemChannel.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemCustomer](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemCustomer.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemGift](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemGift.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemLoyaltyCard](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemLoyaltyCard.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrder](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrder.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrderCustomer](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrderCustomer.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrderReferrer](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemOrderReferrer.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTier](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTier.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierAction](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierAction.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierCampaign](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierCampaign.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierCampaignValidityTimeframe](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierCampaignValidityTimeframe.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierSummary](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierSummary.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierSummaryOrders](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierSummaryOrders.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierSummaryRedemptions](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierSummaryRedemptions.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierValidityTimeframe](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemPromotionTierValidityTimeframe.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptions](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptions.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptionsRedemptionsItem](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptionsRedemptionsItem.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptionsRollbacksItem](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemRelatedRedemptionsRollbacksItem.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucher](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucher.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherGift](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherGift.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherLoyaltyCard](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherLoyaltyCard.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherPublish](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherPublish.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherRedemption](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherRedemption.md)
- [VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherValidityTimeframe](docs/Model/VouchersRedemptionGetResponseBodyRedemptionEntriesItemVoucherValidityTimeframe.md)
- [VouchersTransactionsExportCreateRequestBody](docs/Model/VouchersTransactionsExportCreateRequestBody.md)
- [VouchersTransactionsExportCreateResponseBody](docs/Model/VouchersTransactionsExportCreateResponseBody.md)
- [VouchersTransactionsListResponseBody](docs/Model/VouchersTransactionsListResponseBody.md)

## Authorization

### X-App-Id

- **Type**: API key
- **API key parameter name**: X-App-Id
- **Location**: HTTP header



### X-App-Token

- **Type**: API key
- **API key parameter name**: X-App-Token
- **Location**: HTTP header



### X-Client-Token

- **Type**: API key
- **API key parameter name**: X-Client-Token
- **Location**: HTTP header



### X-Client-Application-Id

- **Type**: API key
- **API key parameter name**: X-Client-Application-Id
- **Location**: HTTP header


## Run local tests with docker

1. Copy `.env.example` to `.env` and fill in the values.
2. Run `docker build -t php .` to build the image.
3. Run `docker run --rm php` to run the tests and delete container immediately after.

## Author

support@voucherify.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v2018-08-01`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
