# # RewardsAssignmentsCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique reward assignment ID, assigned by Voucherify. |
**reward_id** | **string** | Associated reward ID. |
**created_at** | **\DateTime** | Timestamp representing the date and time when the reward assignment was created in ISO 8601 format. |
**updated_at** | **\DateTime** | Timestamp representing the date and time when the reward assignment was updated in ISO 8601 format. |
**object** | **string** | The type of object represented by the JSON. This object stores information about the reward assignment. | [default to 'reward_assignment']
**related_object_id** | **string** | Related object ID to which the reward was assigned. |
**related_object_type** | **string** | Related object type to which the reward was assigned. | [default to 'campaign']
**parameters** | [**\OpenAPI\Client\Model\RewardAssignmentParametersParameters**](RewardAssignmentParametersParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
