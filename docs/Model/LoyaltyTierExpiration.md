# # LoyaltyTierExpiration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_id** | **string** | Unique customer ID of the customer making the purchase. |
**campaign_id** | **string** | Unique campaign ID, assigned by Voucherify. |
**tier_id** | **string** | Unique tier ID, assigned by Voucherify. |
**start_date** | **string** | Activation timestamp defines when the loyalty tier starts to be active in ISO 8601 format. Loyalty tier is inactive before this date. | [optional]
**expiration_date** | **string** | Expiration timestamp defines when the loyalty tier expires in ISO 8601 format. Loyalty tier is inactive after this date. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the loyalty tier was created in ISO 8601 format. |
**updated_at** | **\DateTime** | Timestamp representing the date and time when the loyalty tier was updated in ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
