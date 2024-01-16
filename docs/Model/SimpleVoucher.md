# # SimpleVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier that represents the voucher assigned by Voucherify. | [optional]
**code** | **string** | Voucher code. |
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**loyalty_card** | **object** | Defines the loyalty card details. | [optional]
**type** | **string** | Type of the object. | [optional] [default to 'voucher']
**campaign** | **object** | Campaign object | [optional]
**campaign_id** | **string** | Campaign unique ID. | [optional]
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**holder_id** | **string** | Unique customer ID of campaign owner. | [optional]
**referrer_id** | **string** | Unique referrer ID. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the order was created in ISO 8601 format. | [optional]
**object** | **string** | The type of object represented by JSON. | [optional] [default to 'voucher']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
