# Endpoints Coverage
# Table of Contents

- [Publications](#publications)
  - [/v1/publications/create](#v1publicationscreate)
  - [/v1/publications](#v1publications)
- [Qualifications](#qualifications)
  - [/v1/qualifications](#v1qualifications)
- [Validations](#validations)
  - [/v1/validations](#v1validations)
  - [/v1/vouchers/{code}/validate](#v1voucherscodevalidate-deprecated)
  - [/v1/promotions/validation](#v1promotionsvalidation-deprecated)
  - [/v1/promotions/tiers/{tierId}/validation](#v1promotionstierstieridvalidation-deprecated)
- [Redemptions](#redemptions)
  - [/v1/redemptions](#v1redemptions)
  - [/v1/redemptions/{redemptionId}](#v1redemptionsredemptionid)
  - [/v1/vouchers/{code}/redemption](#v1voucherscoderedemption)
  - [/v1/redemptions/{redemptionId}/rollback](#v1redemptionsredemptionidrollback)
  - [/v1/promotions/tiers/{promotionTierId}/redemption](#v1promotionstierspromotiontieridredemption-deprecated)
  - [/v1/redemptions/{parentRedemptionId}/rollbacks](#v1redemptionsparentredemptionidrollbacks)
- [Vouchers](#vouchers)
  - [/v1/vouchers](#v1vouchers)
  - [/v1/vouchers/{code}](#v1voucherscode)
  - [/v1/vouchers/{code}/enable](#v1voucherscodeenable)
  - [/v1/vouchers/{code}/disable](#v1voucherscodedisable)
  - [/v1/vouchers/{code}/balance](#v1voucherscodebalance)
  - [/v1/vouchers/{code}/transactions](#v1voucherscodetransactions)
  - [/v1/vouchers/{code}/transactions/export](#v1voucherscodetransactionsexport)
  - [/v1/vouchers/import](#v1vouchersimport)
  - [/v1/vouchers/importCSV](#v1vouchersimportcsv)
  - [/v1/vouchers/bulk/async](#v1vouchersbulkasync)
  - [/v1/vouchers/metadata/async](#v1vouchersmetadataasync)
  - [/v1/vouchers/{code}/sessions/{sessionKey}](#v1voucherscodesessionssessionkey)
  - [/v1/vouchers/qualification](#v1vouchersqualification-deprecated)
- [Campaigns](#campaigns)
  - [/v1/campaigns](#v1campaigns)
  - [/v1/campaigns/{campaignId}](#v1campaignscampaignid)
  - [/v1/campaigns/{campaignId}/vouchers](#v1campaignscampaignidvouchers)
  - [/v1/campaigns/{campaignId}/vouchers/{code}](#v1campaignscampaignidvoucherscode)
  - [/v1/campaigns/{campaignId}/import](#v1campaignscampaignidimport)
  - [/v1/campaigns/{campaignId}/importCSV](#v1campaignscampaignidimportcsv)
  - [/v1/campaigns/qualification](#v1campaignsqualification-deprecated)
  - [/v1/campaigns/{campaignId}/enable](#v1campaignscampaignidenable)
  - [/v1/campaigns/{campaignId}/disable](#v1campaignscampaigniddisable)
- [Promotions](#promotions)
  - [/v1/promotions/tiers](#v1promotionstiers)
  - [/v1/promotions/{campaignId}/tiers](#v1promotionscampaignidtiers)
  - [/v1/promotions/tiers/{promotionTierId}](#v1promotionstierspromotiontierid)
  - [/v1/promotions/tiers/{promotionTierId}/enable](#v1promotionstierspromotiontieridenable)
  - [/v1/promotions/tiers/{promotionTierId}/disable](#v1promotionstierspromotiontieriddisable)
  - [/v1/promotions/stacks](#v1promotionsstacks)
  - [/v1/promotions/{campaignId}/stacks](#v1promotionscampaignidstacks)
  - [/v1/promotions/{campaignId}/stacks/{stackId}](#v1promotionscampaignidstacksstackid)
- [Rewards](#rewards)
  - [/v1/rewards](#v1rewards)
  - [/v1/rewards/{rewardId}](#v1rewardsrewardid)
  - [/v1/rewards/{rewardId}/assignments](#v1rewardsrewardidassignments)
  - [/v1/rewards/{rewardId}/assignments/{assignmentId}](#v1rewardsrewardidassignmentsassignmentid)
- [Loyalties](#loyalties)
  - [/v1/loyalties](#v1loyalties)
  - [/v1/loyalties/{campaignId}](#v1loyaltiescampaignid)
  - [/v1/loyalties/{campaignId}/members](#v1loyaltiescampaignidmembers)
  - [/v1/loyalties/{campaignId}/members/{memberId}](#v1loyaltiescampaignidmembersmemberid)
  - [/v1/loyalties/members/{memberId}](#v1loyaltiesmembersmemberid)
  - [/v1/loyalties/{campaignId}/members/{memberId}/activities](#v1loyaltiescampaignidmembersmemberidactivities)
  - [/v1/loyalties/members/{memberId}/activities](#v1loyaltiesmembersmemberidactivities)
  - [/v1/loyalties/{campaignId}/members/{memberId}/balance](#v1loyaltiescampaignidmembersmemberidbalance)
  - [/v1/loyalties/members/{memberId}/balance](#v1loyaltiesmembersmemberidbalance)
  - [/v1/loyalties/{campaignId}/members/{memberId}/transfers](#v1loyaltiescampaignidmembersmemberidtransfers)
  - [/v1/loyalties/{campaignId}/members/{memberId}/transactions](#v1loyaltiescampaignidmembersmemberidtransactions)
  - [/v1/loyalties/members/{memberId}/transactions](#v1loyaltiesmembersmemberidtransactions)
  - [/v1/loyalties/members/{memberId}/transactions/export](#v1loyaltiesmembersmemberidtransactionsexport)
  - [/v1/loyalties/{campaignId}/members/{memberId}/transactions/export](#v1loyaltiescampaignidmembersmemberidtransactionsexport)
  - [/v1/loyalties/{campaignId}/members/{memberId}/points-expiration](#v1loyaltiescampaignidmembersmemberidpoints-expiration)
  - [/v1/loyalties/{campaignId}/points-expiration/export](#v1loyaltiescampaignidpoints-expirationexport)
  - [/v1/loyalties/{campaignId}/earning-rules](#v1loyaltiescampaignidearning-rules)
  - [/v1/loyalties/{campaignId}/earning-rules/{earningRuleId}](#v1loyaltiescampaignidearning-rulesearningruleid)
  - [/v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/enable](#v1loyaltiescampaignidearning-rulesearningruleidenable)
  - [/v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/disable](#v1loyaltiescampaignidearning-rulesearningruleiddisable)
  - [/v1/loyalties/members/{memberId}/rewards](#v1loyaltiesmembersmemberidrewards)
  - [/v1/loyalties/{campaignId}/reward-assignments/{assignmentId}/reward](#v1loyaltiescampaignidreward-assignmentsassignmentidreward)
  - [/v1/loyalties/{campaignId}/reward-assignments](#v1loyaltiescampaignidreward-assignments)
  - [/v1/loyalties/{campaignId}/rewards](#v1loyaltiescampaignidrewards)
  - [/v1/loyalties/{campaignId}/reward-assignments/{assignmentId}](#v1loyaltiescampaignidreward-assignmentsassignmentid)
  - [/v1/loyalties/{campaignId}/rewards/{assignmentId}](#v1loyaltiescampaignidrewardsassignmentid)
  - [/v1/loyalties/{campaignId}/members/{memberId}/redemption](#v1loyaltiescampaignidmembersmemberidredemption)
  - [/v1/loyalties/members/{memberId}/redemption](#v1loyaltiesmembersmemberidredemption)
  - [/v1/loyalties/{campaignId}/tiers](#v1loyaltiescampaignidtiers)
  - [/v1/loyalties/{campaignId}/tiers/{loyaltyTierId}](#v1loyaltiescampaignidtiersloyaltytierid)
  - [/v1/loyalties/members/{memberId}/tiers](#v1loyaltiesmembersmemberidtiers)
  - [/v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/earning-rules](#v1loyaltiescampaignidtiersloyaltytieridearning-rules)
  - [/v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/rewards](#v1loyaltiescampaignidtiersloyaltytieridrewards)
- [Customers](#customers)
  - [/v1/customers](#v1customers)
  - [/v1/customers/{customerId}](#v1customerscustomerid)
  - [/v1/customers/{customerId}/permanent-deletion](#v1customerscustomeridpermanent-deletion)
  - [/v1/customers/importCSV](#v1customersimportcsv)
  - [/v1/customers/bulk/async](#v1customersbulkasync)
  - [/v1/customers/metadata/async](#v1customersmetadataasync)
  - [/v1/customers/{customerId}/consents](#v1customerscustomeridconsents)
  - [/v1/customers/{customerId}/activities](#v1customerscustomeridactivities)
  - [/v1/customers/{customerId}/segments](#v1customerscustomeridsegments)
- [Orders](#orders)
  - [/v1/orders](#v1orders)
  - [/v1/orders/{orderId}](#v1ordersorderid)
  - [/v1/orders/import](#v1ordersimport)
  - [/v1/orders/export](#v1ordersexport)
- [Products](#products)
  - [/v1/products](#v1products)
  - [/v1/products/{productId}](#v1productsproductid)
  - [/v1/products/bulk/async](#v1productsbulkasync)
  - [/v1/products/metadata/async](#v1productsmetadataasync)
  - [/v1/skus/{skuId}](#v1skusskuid)
  - [/v1/products/{productId}/skus](#v1productsproductidskus)
  - [/v1/products/{productId}/skus/{skuId}](#v1productsproductidskusskuid)
  - [/v1/products/importCSV](#v1productsimportcsv)
  - [/v1/skus/importCSV](#v1skusimportcsv)
- [Product Collections](#product collections)
  - [/v1/product-collections](#v1product-collections)
  - [/v1/product-collections/{productCollectionId}](#v1product-collectionsproductcollectionid)
  - [/v1/product-collections/{productCollectionId}/products](#v1product-collectionsproductcollectionidproducts)
- [Validation Rules](#validation rules)
  - [/v1/validation-rules](#v1validation-rules)
  - [/v1/validation-rules/{validationRuleId}](#v1validation-rulesvalidationruleid)
  - [/v1/validation-rules-assignments](#v1validation-rules-assignments)
  - [/v1/validation-rules/{validationRuleId}/assignments](#v1validation-rulesvalidationruleidassignments)
  - [/v1/validation-rules/{validationRuleId}/assignments/{assignmentId}](#v1validation-rulesvalidationruleidassignmentsassignmentid)
- [Segments](#segments)
  - [/v1/segments/{segmentId}](#v1segmentssegmentid)
  - [/v1/segments](#v1segments)
- [Events](#events)
  - [/v1/events](#v1events)
- [Consents](#consents)
  - [/v1/consents](#v1consents)
- [Async Actions](#async actions)
  - [/v1/async-actions](#v1async-actions)
  - [/v1/async-actions/{asyncActionId}](#v1async-actionsasyncactionid)
- [Exports](#exports)
  - [/v1/exports](#v1exports)
  - [/v1/exports/{exportId}](#v1exportsexportid)
  - [/v1/exports/{export_Id}](#v1exportsexport_id)
- [Categories](#categories)
  - [/v1/categories](#v1categories)
  - [/v1/categories/{categoryId}](#v1categoriescategoryid)
- [Metadata Schemas](#metadata schemas)
  - [/v1/metadata-schemas](#v1metadata-schemas)
  - [/v1/metadata-schemas/{resource}](#v1metadata-schemasresource)
- [Locations](#locations)
  - [/v1/locations](#v1locations)
  - [/v1/locations/{locationId}](#v1locationslocationid)
- [Client-side](#client-side)
  - [/client/v1/qualifications](#clientv1qualifications)
  - [/client/v1/promotions/tiers](#clientv1promotionstiers)
  - [/client/v1/redemptions](#clientv1redemptions)
  - [/client/v1/validations](#clientv1validations)
  - [/client/v1/customers/{customerId}/consents](#clientv1customerscustomeridconsents)
  - [/client/v1/events](#clientv1events)
  - [/client/v1/consents](#clientv1consents)
  - [/client/v1/validate](#clientv1validate-deprecated)
  - [/client/v1/redeem](#clientv1redeem-deprecated)
# Endpoints

## Publications
### /v1/publications/create
#### Create Publication (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/publications
#### List Publications (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PublicationsListResponseBody.php) ✅
#### Create Publication (post)
- **RequestSupported:** [link](./src/Model/PublicationsCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/PublicationsCreateResponseBody.php) ✅
## Qualifications
### /v1/qualifications
#### Check Eligibility (post)
- **RequestSupported:** [link](./src/Model/QualificationsCheckEligibilityResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/QualificationsCheckEligibilityResponseBody.php) ✅
## Validations
### /v1/validations
#### Validate Stackable Discounts (post)
- **RequestSupported:** [link](./src/Model/ValidationsValidateResponseBody.php) ✅
- **ResponseSupported:** ❌
### ~~❗/v1/vouchers/{code}/validate [Deprecated]❗~~
#### ~~❗Validate Voucher [Deprecated] (post)❗~~
### ~~❗/v1/promotions/validation [Deprecated]❗~~
#### ~~❗Validate Promotions [Deprecated] (post)❗~~
### ~~❗/v1/promotions/tiers/{tierId}/validation [Deprecated]❗~~
#### ~~❗Validate Promotion Tier [Deprecated] (post)❗~~
## Redemptions
### /v1/redemptions
#### List Redemptions (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/RedemptionsListResponseBody.php) ✅
#### Redeem Stackable Discounts (post)
- **RequestSupported:** [link](./src/Model/RedemptionsRedeemResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/RedemptionsRedeemResponseBody.php) ✅
### /v1/redemptions/{redemptionId}
#### Get Redemption (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/RedemptionsGetResponseBody.php) ✅
### /v1/vouchers/{code}/redemption
#### Get Voucher's Redemptions (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/VouchersRedemptionGetResponseBody.php) ✅
#### ~~❗Redeem Voucher [Deprecated] (post)❗~~
### /v1/redemptions/{redemptionId}/rollback
#### Rollback Redemption (post)
- **RequestSupported:** [link](./src/Model/RedemptionsRollbackCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/RedemptionsRollbackCreateResponseBody.php) ✅
### ~~❗/v1/promotions/tiers/{promotionTierId}/redemption [Deprecated]❗~~
#### ~~❗Redeem Promotion [Deprecated] (post)❗~~
### /v1/redemptions/{parentRedemptionId}/rollbacks
#### Rollback Stackable Redemptions (post)
- **RequestSupported:** [link](./src/Model/RedemptionsRollbacksCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/RedemptionsRollbacksCreateResponseBody.php) ✅
## Vouchers
### /v1/vouchers
#### List Vouchers (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Generate Random Code (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/vouchers/{code}
#### Get Voucher (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/VouchersGetResponseBody.php) ✅
#### Update Voucher (put)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
#### Delete Voucher (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
#### Create Voucher (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/vouchers/{code}/enable
#### Enable Voucher (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/VouchersEnableResponseBody.php) ✅
### /v1/vouchers/{code}/disable
#### Disable Voucher (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/VouchersDisableResponseBody.php) ✅
### /v1/vouchers/{code}/balance
#### Add or Remove Voucher Balance (post)
- **RequestSupported:** [link](./src/Model/VouchersBalanceUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/VouchersBalanceUpdateResponseBody.php) ✅
### /v1/vouchers/{code}/transactions
#### List Voucher Transactions (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/VouchersTransactionsListResponseBody.php) ✅
### /v1/vouchers/{code}/transactions/export
#### Export Voucher Transactions (post)
- **RequestSupported:** [link](./src/Model/VouchersTransactionsExportCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/VouchersTransactionsExportCreateResponseBody.php) ✅
### /v1/vouchers/import
#### Import Vouchers (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/vouchers/importCSV
#### Import Vouchers using CSV (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/VouchersImportCsvCreateResponseBody.php) ✅
### /v1/vouchers/bulk/async
#### Update Vouchers in bulk (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/vouchers/metadata/async
#### Update Vouchers' metadata in bulk (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/vouchers/{code}/sessions/{sessionKey}
#### Release Validation Session (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### ~~❗/v1/vouchers/qualification [Deprecated]❗~~
#### ~~❗Examine Qualification [Deprecated] (post)❗~~
## Campaigns
### /v1/campaigns
#### Create Campaign (post)
- **RequestSupported:** [link](./src/Model/CampaignsCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CampaignsCreateResponseBody.php) ✅
#### List Campaigns (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CampaignsListResponseBody.php) ✅
### /v1/campaigns/{campaignId}
#### Get Campaign (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CampaignsGetResponseBody.php) ✅
#### Update Campaign (put)
- **RequestSupported:** [link](./src/Model/CampaignsUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CampaignsUpdateResponseBody.php) ✅
#### Delete Campaign (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CampaignsDeleteResponseBody.php) ✅
### /v1/campaigns/{campaignId}/vouchers
#### Add Vouchers to Campaign (post)
- **RequestSupported:** [link](./src/Model/CampaignsVouchersCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CampaignsVouchersCreateResponseBody.php) ✅
### /v1/campaigns/{campaignId}/vouchers/{code}
#### Add Voucher with Specific Code to Campaign (post)
- **RequestSupported:** [link](./src/Model/CampaignsVouchersCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CampaignsVouchersCreateResponseBody.php) ✅
### /v1/campaigns/{campaignId}/import
#### Import Vouchers to Campaign (post)
- **RequestSupported:** [link](./src/Model/CampaignsImportCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CampaignsImportCreateResponseBody.php) ✅
### /v1/campaigns/{campaignId}/importCSV
#### Import Vouchers to Campaign by CSV (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CampaignsImportCsvCreateResponseBody.php) ✅
### ~~❗/v1/campaigns/qualification [Deprecated]❗~~
#### ~~❗Examine Qualification [Deprecated] (post)❗~~
### /v1/campaigns/{campaignId}/enable
#### Enable Campaign (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CampaignsEnableResponseBody.php) ✅
### /v1/campaigns/{campaignId}/disable
#### Disable Campaign (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CampaignsDisableResponseBody.php) ✅
## Promotions
### /v1/promotions/tiers
#### List Promotion Tiers (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/promotions/{campaignId}/tiers
#### List Promotion Tiers from Campaign (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PromotionsTiersListResponseBody.php) ✅
#### Add Promotion Tier to Campaign (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/promotions/tiers/{promotionTierId}
#### Get Promotion Tier (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PromotionsTiersGetResponseBody.php) ✅
#### Update Promotion Tier (put)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
#### Delete Promotion Tier (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/promotions/tiers/{promotionTierId}/enable
#### Enable Promotion Tier (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PromotionsTiersEnableResponseBody.php) ✅
### /v1/promotions/tiers/{promotionTierId}/disable
#### Disable Promotion Tier (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PromotionsTiersDisableResponseBody.php) ✅
### /v1/promotions/stacks
#### List Promotion Stacks (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PromotionsStacksListResponseBody.php) ✅
### /v1/promotions/{campaignId}/stacks
#### List Promotion Stacks in Campaign (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PromotionsStacksListResponseBody.php) ✅
#### Create Promotion Stack (post)
- **RequestSupported:** [link](./src/Model/PromotionsStacksCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/PromotionsStacksCreateResponseBody.php) ✅
### /v1/promotions/{campaignId}/stacks/{stackId}
#### Get Promotion Stack (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/PromotionsStacksGetResponseBody.php) ✅
#### Update Promotion Stack (put)
- **RequestSupported:** [link](./src/Model/PromotionsStacksUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/PromotionsStacksUpdateResponseBody.php) ✅
#### Delete Promotion Stack (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
## Rewards
### /v1/rewards
#### List Rewards (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Create Reward (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/rewards/{rewardId}
#### Get Reward (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Update Reward (put)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
#### Delete Reward (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/rewards/{rewardId}/assignments
#### List Reward Assignments (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/RewardsAssignmentsListResponseBody.php) ✅
#### Create Reward Assignment (post)
- **RequestSupported:** [link](./src/Model/RewardsAssignmentsCreateResponseBody.php) ✅
- **ResponseSupported:** ❌
### /v1/rewards/{rewardId}/assignments/{assignmentId}
#### Update Reward Assignment (put)
- **RequestSupported:** [link](./src/Model/RewardsAssignmentsUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/RewardsAssignmentsUpdateResponseBody.php) ✅
#### Delete Reward Assignment (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
#### Get Reward Assignment (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/RewardsAssignmentsGetResponseBody.php) ✅
## Loyalties
### /v1/loyalties
#### List Loyalty Campaigns (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Create Loyalty Campaign (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/loyalties/{campaignId}
#### Get Loyalty Campaign (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Update Loyalty Campaign (put)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
#### Delete Loyalty Campaign (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesDeleteResponseBody.php) ✅
### /v1/loyalties/{campaignId}/members
#### List Members (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Add Member (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/loyalties/{campaignId}/members/{memberId}
#### Get Member (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/loyalties/members/{memberId}
#### Get Member (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/loyalties/{campaignId}/members/{memberId}/activities
#### Get Member Activities (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/loyalties/members/{memberId}/activities
#### Get Member Activities (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/loyalties/{campaignId}/members/{memberId}/balance
#### Add or Remove Loyalty Card Balance (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesMembersBalanceUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersBalanceUpdateResponseBody.php) ✅
### /v1/loyalties/members/{memberId}/balance
#### Add or Remove Loyalty Card Balance (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesMembersBalanceUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersBalanceUpdateResponseBody.php) ✅
### /v1/loyalties/{campaignId}/members/{memberId}/transfers
#### Transfer Loyalty Points (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesMembersTransfersCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersTransfersCreateResponseBody.php) ✅
### /v1/loyalties/{campaignId}/members/{memberId}/transactions
#### List Loyalty Card Transactions (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersTransactionsListResponseBody.php) ✅
### /v1/loyalties/members/{memberId}/transactions
#### List Loyalty Card Transactions (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersTransactionsListResponseBody.php) ✅
### /v1/loyalties/members/{memberId}/transactions/export
#### Export Loyalty Card Transactions (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesMembersTransactionsExportCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersTransactionsExportCreateResponseBody.php) ✅
### /v1/loyalties/{campaignId}/members/{memberId}/transactions/export
#### Export Loyalty Card Transactions (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesMembersTransactionsExportCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersTransactionsExportCreateResponseBody.php) ✅
### /v1/loyalties/{campaignId}/members/{memberId}/points-expiration
#### Get Points Expiration (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersPointsExpirationListResponseBody.php) ✅
### /v1/loyalties/{campaignId}/points-expiration/export
#### Create Points Expiration Export (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/loyalties/{campaignId}/earning-rules
#### List Earning Rules (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Create Earning Rule (post)
- **RequestSupported:** ❌
- **ResponseSupported:** *Not applicable*
### /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}
#### Get Earning Rule (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesEarningRulesGetResponseBody.php) ✅
#### Update Earning Rule (put)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
#### Delete Earning Rule (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/enable
#### Enable Earning Rule (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesEarningRulesEnableResponseBody.php) ✅
### /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/disable
#### Disable Earning Rule (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesEarningRulesDisableResponseBody.php) ✅
### /v1/loyalties/members/{memberId}/rewards
#### List Member Rewards (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersRewardsListResponseBody.php) ✅
### /v1/loyalties/{campaignId}/reward-assignments/{assignmentId}/reward
#### Get Reward Details (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesRewardAssignmentsRewardGetResponseBody.php) ✅
### /v1/loyalties/{campaignId}/reward-assignments
#### List Reward Assignments (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/loyalties/{campaignId}/rewards
#### List Reward Assignments (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Create Reward Assignment (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/loyalties/{campaignId}/reward-assignments/{assignmentId}
#### Get Reward Assignment (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesRewardAssignmentsGetResponseBody.php) ✅
### /v1/loyalties/{campaignId}/rewards/{assignmentId}
#### Get Reward Assignment (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesRewardsGetResponseBody.php) ✅
#### Update Reward Assignment (put)
- **RequestSupported:** [link](./src/Model/4_obj_reward_assignment_object.php) ✅
- **ResponseSupported:** ❌
#### Delete Reward Assignment (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/loyalties/{campaignId}/members/{memberId}/redemption
#### Redeem Reward (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesMembersRedemptionRedeemResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersRedemptionRedeemResponseBody.php) ✅
### /v1/loyalties/members/{memberId}/redemption
#### Redeem Reward (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesMembersRedemptionRedeemResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersRedemptionRedeemResponseBody.php) ✅
### /v1/loyalties/{campaignId}/tiers
#### List Loyalty Tiers (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesTiersListResponseBody.php) ✅
#### Create loyalty tiers (post)
- **RequestSupported:** [link](./src/Model/LoyaltiesTiersCreateInBulkResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/LoyaltiesTiersCreateInBulkResponseBody.php) ✅
### /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}
#### Get Loyalty Tier (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesTiersGetResponseBody.php) ✅
### /v1/loyalties/members/{memberId}/tiers
#### List Member's Loyalty Tiers (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesMembersTiersListResponseBody.php) ✅
### /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/earning-rules
#### List Loyalty Tier Earning Rules (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesTiersEarningRulesListResponseBody.php) ✅
### /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/rewards
#### List Loyalty Tier Rewards (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/LoyaltiesTiersRewardsListResponseBody.php) ✅
## Customers
### /v1/customers
#### List Customers (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CustomersListResponseBody.php) ✅
#### Create Customer (post)
- **RequestSupported:** [link](./src/Model/CustomersCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CustomersCreateResponseBody.php) ✅
### /v1/customers/{customerId}
#### Get Customer (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CustomersGetResponseBody.php) ✅
#### Delete Customer (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
#### Update Customer (put)
- **RequestSupported:** [link](./src/Model/CustomersUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CustomersUpdateResponseBody.php) ✅
### /v1/customers/{customerId}/permanent-deletion
#### Delete Customer Permanently (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CustomersPermanentDeletionCreateResponseBody.php) ✅
### /v1/customers/importCSV
#### Import and Update Customers using CSV (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CustomersImportCsvCreateResponseBody.php) ✅
### /v1/customers/bulk/async
#### Update Customers in bulk (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CustomersUpdateInBulkResponseBody.php) ✅
### /v1/customers/metadata/async
#### Update Customers' Metadata in bulk (post)
- **RequestSupported:** [link](./src/Model/CustomersMetadataUpdateInBulkResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/CustomersMetadataUpdateInBulkResponseBody.php) ✅
### /v1/customers/{customerId}/consents
#### Update Customer's consents (put)
- **RequestSupported:** [link](./src/Model/null.php) ✅
- **ResponseSupported:** *Not applicable*
### /v1/customers/{customerId}/activities
#### List Customer Activities (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CustomersActivitiesListResponseBody.php) ✅
### /v1/customers/{customerId}/segments
#### List Customer's Segments (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CustomersSegmentsListResponseBody.php) ✅
## Orders
### /v1/orders
#### List Orders (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/OrdersListResponseBody.php) ✅
#### Create Order (post)
- **RequestSupported:** [link](./src/Model/OrdersCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/OrdersCreateResponseBody.php) ✅
### /v1/orders/{orderId}
#### Get Order (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/OrdersGetResponseBody.php) ✅
#### Update Order (put)
- **RequestSupported:** [link](./src/Model/OrdersUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/OrdersUpdateResponseBody.php) ✅
### /v1/orders/import
#### Import Orders (post)
- **RequestSupported:** [link](./src/Model/OrdersImportCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/OrdersImportCreateResponseBody.php) ✅
### /v1/orders/export
#### Create Orders Export (post)
- **RequestSupported:** [link](./src/Model/OrdersExportCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/OrdersExportCreateResponseBody.php) ✅
## Products
### /v1/products
#### List Products (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductsListResponseBody.php) ✅
#### Create Product (post)
- **RequestSupported:** [link](./src/Model/ProductsCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ProductsCreateResponseBody.php) ✅
### /v1/products/{productId}
#### Get Product (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductsGetResponseBody.php) ✅
#### Update Product (put)
- **RequestSupported:** [link](./src/Model/ProductsUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ProductsUpdateResponseBody.php) ✅
#### Delete Product (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/products/bulk/async
#### Update Products in bulk (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductsUpdateInBulkResponseBody.php) ✅
### /v1/products/metadata/async
#### Update Products' Metadata in bulk (post)
- **RequestSupported:** [link](./src/Model/ProductsMetadataUpdateInBulkResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ProductsMetadataUpdateInBulkResponseBody.php) ✅
### /v1/skus/{skuId}
#### Get SKU (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/SkusGetResponseBody.php) ✅
### /v1/products/{productId}/skus
#### List SKUs in Product (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductsSkusListResponseBody.php) ✅
#### Create SKU (post)
- **RequestSupported:** [link](./src/Model/ProductsSkusCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ProductsSkusCreateResponseBody.php) ✅
### /v1/products/{productId}/skus/{skuId}
#### Update SKU (put)
- **RequestSupported:** [link](./src/Model/ProductsSkusUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ProductsSkusUpdateResponseBody.php) ✅
#### Delete SKU (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/products/importCSV
#### Import Products using CSV (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductsImportCsvCreateResponseBody.php) ✅
### /v1/skus/importCSV
#### Import SKUs using CSV (post)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/SkusImportCsvCreateResponseBody.php) ✅
## Product Collections
### /v1/product-collections
#### List Product Collections (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductCollectionsListResponseBody.php) ✅
#### Create Product Collection (post)
- **RequestSupported:** [link](./src/Model/ProductCollectionsCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ProductCollectionsCreateResponseBody.php) ✅
### /v1/product-collections/{productCollectionId}
#### Get Product Collection (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductCollectionsGetResponseBody.php) ✅
#### Delete Product Collection (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/product-collections/{productCollectionId}/products
#### List Products in Collection (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ProductCollectionsProductsListResponseBody.php) ✅
## Validation Rules
### /v1/validation-rules
#### List Validation Rules (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ValidationRulesListResponseBody.php) ✅
#### Create Validation Rules (post)
- **RequestSupported:** [link](./src/Model/ValidationRulesCreateResponseBody.php) ✅
- **ResponseSupported:** ❌
### /v1/validation-rules/{validationRuleId}
#### Get Validation Rule (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ValidationRulesGetResponseBody.php) ✅
#### Update Validation Rule (put)
- **RequestSupported:** [link](./src/Model/ValidationRulesUpdateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ValidationRulesUpdateResponseBody.php) ✅
#### Delete Validation Rule (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/validation-rules-assignments
#### List Validation Rules' Assignment(s) (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ValidationRulesAssignmentsListResponseBody.php) ✅
### /v1/validation-rules/{validationRuleId}/assignments
#### List Validation Rule Assignments (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ValidationRulesAssignmentsListResponseBody.php) ✅
#### Create Validation Rules Assignments (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
### /v1/validation-rules/{validationRuleId}/assignments/{assignmentId}
#### Delete Validation Rule Assignment (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
## Segments
### /v1/segments/{segmentId}
#### Get Segment (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
#### Delete Segment (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/segments
#### Create Segment (post)
- **RequestSupported:** ❌
- **ResponseSupported:** ❌
## Events
### /v1/events
#### Track Custom Event (post)
- **RequestSupported:** [link](./src/Model/EventsCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/EventsCreateResponseBody.php) ✅
## Consents
### /v1/consents
#### List Consents (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
## Async Actions
### /v1/async-actions
#### List Async Actions (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/async-actions/{asyncActionId}
#### Get Async Action (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
## Exports
### /v1/exports
#### Create Export (post)
- **RequestSupported:** [link](./src/Model/ExportsCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ExportsCreateResponseBody.php) ✅
#### List Exports (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ExportsListResponseBody.php) ✅
### /v1/exports/{exportId}
#### Get Export (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/ExportsGetResponseBody.php) ✅
#### Delete Export (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
### /v1/exports/{export_Id}
#### Download Export (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
## Categories
### /v1/categories
#### List Categories (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CategoriesListResponseBody.php) ✅
#### Create Category (post)
- **RequestSupported:** [link](./src/Model/CategoriesCreateResponseBody.php) ✅
- **ResponseSupported:** ❌
### /v1/categories/{categoryId}
#### Get Category (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** [link](./src/Model/CategoriesGetResponseBody.php) ✅
#### Delete Category (delete)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** *Not applicable*
#### Update Category (put)
- **RequestSupported:** [link](./src/Model/CategoriesUpdateResponseBody.php) ✅
- **ResponseSupported:** ❌
## Metadata Schemas
### /v1/metadata-schemas
#### List Metadata Schemas (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/metadata-schemas/{resource}
#### Get Metadata Schema (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
## Locations
### /v1/locations
#### List Locations (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /v1/locations/{locationId}
#### Get Location (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
## Client-side
### /client/v1/qualifications
#### Check Eligibility (client-side) (post)
- **RequestSupported:** [link](./src/Model/ClientQualificationsCheckEligibilityResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ClientQualificationsCheckEligibilityResponseBody.php) ✅
### /client/v1/promotions/tiers
#### List Promotion Tiers (client-side) (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### /client/v1/redemptions
#### Redeem Stackable Discounts (client-side) (post)
- **RequestSupported:** [link](./src/Model/ClientRedemptionsRedeemResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ClientRedemptionsRedeemResponseBody.php) ✅
### /client/v1/validations
#### Validate Stackable Discounts (client-side) (post)
- **RequestSupported:** [link](./src/Model/ClientValidationsValidateResponseBody.php) ✅
- **ResponseSupported:** ❌
### /client/v1/customers/{customerId}/consents
#### Update Customer's consents (client-side) (put)
- **RequestSupported:** [link](./src/Model/null.php) ✅
- **ResponseSupported:** *Not applicable*
### /client/v1/events
#### Track Custom Event (client-side) (post)
- **RequestSupported:** [link](./src/Model/ClientEventsCreateResponseBody.php) ✅
- **ResponseSupported:** [link](./src/Model/ClientEventsCreateResponseBody.php) ✅
### /client/v1/consents
#### List Consents (client-side) (get)
- **RequestSupported:** *Not applicable*
- **ResponseSupported:** ❌
### ~~❗/client/v1/validate [Deprecated]❗~~
#### ~~❗Validate Voucher (client-side) [Deprecated] (get)❗~~
### ~~❗/client/v1/redeem [Deprecated]❗~~
#### ~~❗Redeem Voucher (client-side) [Deprecated] (post)❗~~