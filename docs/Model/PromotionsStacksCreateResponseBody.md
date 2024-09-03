# # PromotionsStacksCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
<<<<<<< Updated upstream
**name** | **string** | Promotion stack name. |
**tiers** | [**\OpenAPI\Client\Model\PromotionStackBaseTiers**](PromotionStackBaseTiers.md) |  |
**id** | **string** | Unique promotion stack ID. |
**created_at** | **\DateTime** | Timestamp representing the date and time when the promotion stack was created in ISO 8601 format. |
**campaign_id** | **string** | Promotion stack&#39;s parent campaign&#39;s unique ID. |
**object** | **string** | The type of object represented by JSON. | [default to 'promotion_stack']
**category_id** | **string** | Promotion stack category ID. |
**categories** | [**\OpenAPI\Client\Model\PromotionStackBase[]**](PromotionStackBase.md) | Details about the category assigned to the promotion stack. |
=======
**name** | **string** | Promotion stack name. | [optional]
**tiers** | [**\OpenAPI\Client\Model\PromotionsStacksCreateResponseBodyTiers**](PromotionsStacksCreateResponseBodyTiers.md) |  | [optional]
**id** | **string** | Unique promotion stack ID. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the promotion stack was created. The value is shown in the ISO 8601 format. | [optional]
**campaign_id** | **string** | Promotion stack&#39;s parent campaign&#39;s unique ID. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'promotion_stack']
**category_id** | **string** | Promotion stack category ID. | [optional]
**categories** | [**\OpenAPI\Client\Model\PromotionStackBase[]**](PromotionStackBase.md) | Details about the category assigned to the promotion stack. | [optional]
>>>>>>> Stashed changes

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
