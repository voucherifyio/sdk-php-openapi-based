# # ListPublicationsItemVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Voucher code. |
**object** | **string** | The type of object represented by JSON. | [default to 'voucher']
**campaign** | **string** | Campaign name |
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**loyalty_card** | **object** | Defines the loyalty card details. | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
