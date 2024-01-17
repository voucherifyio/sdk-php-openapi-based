# # CustomerActivityData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\OpenAPI\Client\Model\CustomerActivityDataCustomer**](CustomerActivityDataCustomer.md) |  | [optional]
**unconfirmed_customer** | [**\OpenAPI\Client\Model\CustomerActivityDataUnconfirmedCustomer**](CustomerActivityDataUnconfirmedCustomer.md) |  | [optional]
**referrer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**campaign** | [**\OpenAPI\Client\Model\SimpleCampaign**](SimpleCampaign.md) |  | [optional]
**voucher** | [**\OpenAPI\Client\Model\SimpleVoucher**](SimpleVoucher.md) |  | [optional]
**custom_event** | [**\OpenAPI\Client\Model\CustomEvent**](CustomEvent.md) |  | [optional]
**redemption** | [**\OpenAPI\Client\Model\CustomerActivityDataRedemption**](CustomerActivityDataRedemption.md) |  | [optional]
**segment** | [**\OpenAPI\Client\Model\SimpleSegment**](SimpleSegment.md) |  | [optional]
**distribution** | **object** |  | [optional]
**sent_at** | **\DateTime** | Timestamp representing the date and time when the distribution was sent in ISO 8601 format. | [optional]
**recovered_at** | **\DateTime** | Timestamp representing the date and time when the distribution was recovered in ISO 8601 format. | [optional]
**failed_at** | **\DateTime** | Timestamp representing the date and time when the distribution failed in ISO 8601 format. | [optional]
**holder** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\SimpleRedemptionRewardResult**](SimpleRedemptionRewardResult.md) |  | [optional]
**referral_tier** | [**\OpenAPI\Client\Model\SimpleReferralTier**](SimpleReferralTier.md) |  | [optional]
**balance** | **int** |  | [optional]
**customer_event** | **object** |  | [optional]
**loyalty_tier** | [**\OpenAPI\Client\Model\LoyaltyTier**](LoyaltyTier.md) |  | [optional]
**earning_rule** | [**\OpenAPI\Client\Model\EarningRule**](EarningRule.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\CustomerActivityDataOrder**](CustomerActivityDataOrder.md) |  | [optional]
**event** | **object** |  | [optional]
**transaction** | [**\OpenAPI\Client\Model\VoucherTransaction**](VoucherTransaction.md) |  | [optional]
**source_voucher** | [**\OpenAPI\Client\Model\SimpleVoucher**](SimpleVoucher.md) |  | [optional]
**destination_voucher** | [**\OpenAPI\Client\Model\SimpleVoucher**](SimpleVoucher.md) |  | [optional]
**points** | **int** |  | [optional]
**buckets** | [**\OpenAPI\Client\Model\VoucherTransaction[]**](VoucherTransaction.md) |  | [optional]
**publication** | **object** |  | [optional]
**validation** | [**\OpenAPI\Client\Model\ValidationEntity**](ValidationEntity.md) |  | [optional]
**promotion_tier** | [**\OpenAPI\Client\Model\SimplePromotionTier**](SimplePromotionTier.md) |  | [optional]
**redemption_rollback** | [**\OpenAPI\Client\Model\SimpleRedemption**](SimpleRedemption.md) |  | [optional]
**consents** | [**\OpenAPI\Client\Model\SimpleConsent[]**](SimpleConsent.md) |  | [optional]
**reward_redemption** | **object** |  | [optional]
**reward_assignment** | [**\OpenAPI\Client\Model\RewardAssignment**](RewardAssignment.md) |  | [optional]
**source** | **string** |  | [optional]
**loyalty** | **object** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**loyalty_tier_from** | [**\OpenAPI\Client\Model\LoyaltyTier**](LoyaltyTier.md) |  | [optional]
**loyalty_tier_to** | [**\OpenAPI\Client\Model\LoyaltyTier**](LoyaltyTier.md) |  | [optional]
**expiration_date** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)