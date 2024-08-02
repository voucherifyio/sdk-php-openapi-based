# # CampaignsImportVoucherItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique custom voucher code. | [optional]
**type** | **string** | Type of voucher. | [optional]
**redemption** | [**\OpenAPI\Client\Model\CampaignsImportVoucherItemRedemption**](CampaignsImportVoucherItemRedemption.md) |  | [optional]
**active** | **bool** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* voucher - &#x60;false&#x60; indicates an *inactive* voucher | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the voucher. A set of key/value pairs that you can attach to a voucher object. It can be useful for storing additional information about the voucher in a structured format. | [optional]
**category** | **string** | The category assigned to the campaign. Either pass this parameter OR the &#x60;category_id&#x60;. | [optional]
**additional_info** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) | Defines the voucher gift details. | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\CampaignsImportVoucherLoyaltyCard**](CampaignsImportVoucherLoyaltyCard.md) | Defines the voucher loyalty card details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
