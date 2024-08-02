# # SimpleCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Campaign ID. | [optional]
**name** | **string** | Campaign name. | [optional]
**campaign_type** | **string** | Type of campaign. | [optional]
**type** | **string** | Defines whether the campaign can be updated with new vouchers after campaign creation. - &#x60;AUTO_UPDATE&#x60;: By choosing the auto update option you will create a campaign that can be enhanced by new vouchers after the time of creation (e.g. by publish vouchers method). -  &#x60;STATIC&#x60;: vouchers need to be manually published. | [optional]
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**voucher** | [**\OpenAPI\Client\Model\SimpleCampaignVoucher**](SimpleCampaignVoucher.md) |  | [optional]
**lucky_draw** | [**\OpenAPI\Client\Model\LuckyDraw**](LuckyDraw.md) |  | [optional]
**referral_program** | [**\OpenAPI\Client\Model\ReferralProgram**](ReferralProgram.md) |  | [optional]
**auto_join** | **bool** | Indicates whether customers will be able to auto-join the campaign if any earning rule is fulfilled. | [optional]
**join_once** | **bool** | If this value is set to &#x60;true&#x60;, customers will be able to join the campaign only once. | [optional]
**active** | **bool** | Indicates whether the campaign is active. | [optional]
**category** | **string** | Unique category name. | [optional]
**category_id** | **string** | The unique category ID that this campaign belongs to. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) | Contains details about the category. | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a campaign. The metadata object stores all custom attributes assigned to the campaign. | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the campaign starts to be active in ISO 8601 format. Campaign is inactive *before* this date. | [optional]
**expiration_date** | **\DateTime** | Expiration timestamp defines when the campaign expires in ISO 8601 format.  Campaign is inactive *after* this date. | [optional]
**description** | **string** | An optional field to keep extra textual information about the campaign such as a campaign description and details. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the campaign was created. Timestamp is presented in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the campaign was updated in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the campaign. | [optional] [default to 'campaign']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
