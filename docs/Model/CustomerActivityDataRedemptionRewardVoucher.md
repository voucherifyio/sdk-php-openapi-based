# # CustomerActivityDataRedemptionRewardVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**code** | **string** |  | [optional]
**campaign** | **string** | A unique campaign name, identifies the voucher&#39;s parent campaign. | [optional]
**campaign_id** | **string** |  | [optional]
**category** | **string** | Tag defining the category that this voucher belongs to. Useful when listing vouchers using the List Vouchers endpoint. | [optional]
**category_id** | **string** | Unique category ID assigned by Voucherify. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) | Contains details about the category. | [optional]
**type** | **string** |  | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucherGift**](CustomerActivityDataRedemptionRewardVoucherGift.md) |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucherLoyaltyCard**](CustomerActivityDataRedemptionRewardVoucherLoyaltyCard.md) |  | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the code starts to be active in ISO 8601 format. Voucher is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Expiration timestamp defines when the code expires in ISO 8601 format.  Voucher is *inactive after* this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucherValidityTimeframe**](CustomerActivityDataRedemptionRewardVoucherValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60;  Sunday   - &#x60;1&#x60;  Monday   - &#x60;2&#x60;  Tuesday   - &#x60;3&#x60;  Wednesday   - &#x60;4&#x60;  Thursday   - &#x60;5&#x60;  Friday   - &#x60;6&#x60;  Saturday | [optional]
**active** | **bool** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* voucher - &#x60;false&#x60; indicates an *inactive* voucher | [optional]
**additional_info** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**metadata** | **object** |  | [optional]
**assets** | [**\OpenAPI\Client\Model\VoucherAssets**](VoucherAssets.md) |  | [optional]
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the voucher was last updated in ISO 8601 format. | [optional]
**holder_id** | **string** |  | [optional]
**holder** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**object** | **string** |  | [optional] [default to 'voucher']
**distributions** | **object[]** |  | [optional]
**deleted** | **bool** | Flag indicating whether this voucher is deleted. | [optional]
**validation_rules_assignments** | [**\OpenAPI\Client\Model\ValidationRulesAssignmentsList**](ValidationRulesAssignmentsList.md) |  | [optional]
**publish** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucherPublish**](CustomerActivityDataRedemptionRewardVoucherPublish.md) |  | [optional]
**redemption** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemptionRewardVoucherRedemption**](CustomerActivityDataRedemptionRewardVoucherRedemption.md) |  | [optional]
**referrer_id** | **string** | Unique referrer ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
