# # EarningRuleBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Assigned by the Voucherify API, identifies the earning rule object. |
**created_at** | **\DateTime** | Timestamp representing the date and time when the earning rule was created in ISO 8601 format. |
**loyalty** | [**\OpenAPI\Client\Model\EarningRuleBaseLoyalty**](EarningRuleBaseLoyalty.md) |  |
**event** | **string** |  | [optional]
**custom_event** | [**\OpenAPI\Client\Model\EarningRuleBaseCustomEvent**](EarningRuleBaseCustomEvent.md) |  | [optional]
**segment** | [**\OpenAPI\Client\Model\EarningRuleBaseSegment**](EarningRuleBaseSegment.md) |  | [optional]
**source** | [**\OpenAPI\Client\Model\EarningRuleBaseSource**](EarningRuleBaseSource.md) |  |
**object** | **string** | The type of object represented by JSON. Default is earning_rule. | [default to 'earning_rule']
**automation_id** | **string** | For internal use by Voucherify. |
**start_date** | **string** | Start date defines when the earning rule starts to be active. Activation timestamp in ISO 8601 format. Earning rule is inactive before this date. If you don&#39;t define the start date for an earning rule, it&#39;ll inherit the campaign start date by default. | [optional]
**expiration_date** | **string** | Expiration date defines when the earning rule expires. Expiration timestamp in ISO 8601 format. Earning rule is inactive after this date.If you don&#39;t define the expiration date for an earning rule, it&#39;ll inherit the campaign expiration date by default. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\EarningRuleBaseValidityTimeframe**](EarningRuleBaseValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the earning rule is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the earning rule. A set of key/value pairs that you can attach to an earning rule object. It can be useful for storing additional information about the earning rule in a structured format. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
