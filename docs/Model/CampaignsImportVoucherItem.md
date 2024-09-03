# # CampaignsImportVoucherItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
<<<<<<< Updated upstream
**code** | **string** | Unique custom voucher code. |
**type** | **string** | Type of voucher. | [optional]
**redemption** | [**\OpenAPI\Client\Model\CampaignsImportVoucherItemRedemption**](CampaignsImportVoucherItemRedemption.md) |  | [optional]
**active** | **bool** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* voucher - &#x60;false&#x60; indicates an *inactive* voucher | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the voucher. A set of key/value pairs that you can attach to a voucher object. It can be useful for storing additional information about the voucher in a structured format. | [optional]
**category** | **string** | The category assigned to the campaign. Either pass this parameter OR the &#x60;category_id&#x60;. | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the campaign starts to be active in ISO 8601 format. Campaign is *inactive before* this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\CampaignBaseValidityTimeframe**](CampaignBaseValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the campaign is valid.  - &#x60;0&#x60;  Sunday   - &#x60;1&#x60;  Monday   - &#x60;2&#x60;  Tuesday   - &#x60;3&#x60;  Wednesday   - &#x60;4&#x60;  Thursday   - &#x60;5&#x60;  Friday   - &#x60;6&#x60;  Saturday | [optional]
**additional_info** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
=======
**code** | **string** | Value representing the imported code. | [optional]
**redemption** | [**\OpenAPI\Client\Model\CampaignsImportVoucherItemRedemption**](CampaignsImportVoucherItemRedemption.md) |  | [optional]
**active** | **bool** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* voucher - &#x60;false&#x60; indicates an *inactive* voucher | [optional]
**metadata** | **object** |  | [optional]
**category** | **string** | Tag defining the category that this voucher belongs to. Useful when listing vouchers using the [List Vouchers](ref:list-vouchers) endpoint. | [optional]
**start_date** | **\DateTime** | Activation timestamp presented in the ISO 8601 format. Voucher is *inactive before* this date. Start date defines when the code starts to be active. Allowed date formats are: - YYYY-MM-DD - YYYY-MM-DDTHH - YYYY-MM-DDTHH:mm - YYYY-MM-DDTHH:mm:ss - YYYY-MM-DDTHH:mm:ssZ - YYYY-MM-DDTHH:mm:ss.SSSZ | [optional]
**expiration_date** | **\DateTime** | Expiration date defines when the code expires. Expiration timestamp is presented in the ISO 8601 format.  Voucher is *inactive after* this date. Allowed date formats are: - YYYY-MM-DD - YYYY-MM-DDTHH - YYYY-MM-DDTHH:mm - YYYY-MM-DDTHH:mm:ss - YYYY-MM-DDTHH:mm:ssZ - YYYY-MM-DDTHH:mm:ss.SSSZ | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**additional_info** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**type** | **string** |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\SimpleLoyaltyCard**](SimpleLoyaltyCard.md) |  | [optional]
>>>>>>> Stashed changes
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
