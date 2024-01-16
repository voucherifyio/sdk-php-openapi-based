# # LoyaltiesRewardAssignmentsRewardGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique reward ID, assigned by Voucherify. |
**name** | **string** | Reward name. |
**stock** | **int** | Configurable for **material rewards**. The number of units of the product that you want to share as reward. |
**redeemed** | **int** | Defines the number of already invoked (successful) reward redemptions. |
**attributes** | [**\OpenAPI\Client\Model\RewardAttributes**](RewardAttributes.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the reward. A set of key/value pairs that you can attach to a reward object. It can be useful for storing additional information about the reward in a structured format. |
**type** | **string** | Reward type. |
**parameters** | [**\OpenAPI\Client\Model\RewardType**](RewardType.md) |  | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the reward was created in ISO 8601 format. |
**updated_at** | **\DateTime** | Timestamp representing the date and time when the reward was updated in ISO 8601 format. |
**object** | **string** | The type of object represented by the JSON. This object stores information about the reward. | [default to 'reward']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
