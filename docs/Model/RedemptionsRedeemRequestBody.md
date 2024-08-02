# # RedemptionsRedeemRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redeemables** | [**\OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem[]**](StackableValidateRedeemBaseRedeemablesItem.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) | Order information. | [optional]
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) | Customer&#39;s information. | [optional]
**session** | [**\OpenAPI\Client\Model\Session**](Session.md) | Schema model for session lock object. The session object is required to establish a session between multiple parallel validation and redemption requests. If you only send the type parameter in the request, then by default the session lock will be established for 7 days. Read more on establishing a validation session. | [optional]
**tracking_id** | **string** | Is correspondent to Customer&#39;s source_id | [optional]
**metadata** | **object** | A set of key/value pairs that you can attach to a redemption object. It can be useful for storing additional information about the redemption in a structured format. | [optional]
**options** | [**\OpenAPI\Client\Model\ClientRedemptionsRedeemRequestBodyAllOfOptions**](ClientRedemptionsRedeemRequestBodyAllOfOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
