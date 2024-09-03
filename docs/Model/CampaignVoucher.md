# # CampaignVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
<<<<<<< Updated upstream
**type** | **string** | Type of voucher. | [default to 'DISCOUNT_VOUCHER']
=======
**type** | **string** | Type of voucher. | [optional]
>>>>>>> Stashed changes
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\CampaignLoyaltyCard**](CampaignLoyaltyCard.md) |  | [optional]
**redemption** | [**\OpenAPI\Client\Model\CampaignVoucherRedemption**](CampaignVoucherRedemption.md) |  |
**code_config** | [**\OpenAPI\Client\Model\CodeConfigRequiredLengthCharsetPattern**](CodeConfigRequiredLengthCharsetPattern.md) |  |
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. |
**start_date** | **\DateTime** | Activation timestamp defines when the campaign starts to be active in ISO 8601 format. Campaign is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Expiration timestamp defines when the campaign expires in ISO 8601 format.  Campaign is *inactive after* this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\CampaignBaseValidityTimeframe**](CampaignBaseValidityTimeframe.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
