# # VouchersRedemptionGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quantity** | **int** | The maximum number of times a voucher can be redeemed. |
**redeemed_quantity** | **int** | The number of times the voucher was redeemed successfully. |
**object** | **string** | The type of object represented by JSON. This object stores information about redemptions in a dictionary. | [default to 'list']
**url** | **string** | URL |
**data_ref** | **string** | Identifies the name of the attribute that contains the array of &#x60;redemption_entries&#x60;. | [default to 'redemption_entries']
**total** | **int** | Total number of redemption objects. |
**redemption_entries** | [**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBodyRedemptionEntriesItem[]**](VouchersRedemptionGetResponseBodyRedemptionEntriesItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
