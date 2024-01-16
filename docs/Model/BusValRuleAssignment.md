# # BusValRuleAssignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier for a assignment |
**rule_id** | **string** | The unique identifier for a rule |
**related_object_id** | **string** | The unique identifier for a related object |
**related_object_type** | **string** | The type of related object |
**created_at** | **\DateTime** | Timestamp representing the date and time when the object was created in ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the object was last updated in ISO 8601 format. | [optional]
**object** | **string** | The type of object represented by JSON. | [default to 'validation_rules_assignment']
**validation_status** | **string** | The validation status of the assignment |
**validation_omitted_rules** | **string[]** | The list of omitted rules |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
