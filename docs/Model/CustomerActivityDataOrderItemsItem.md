# # CustomerActivityDataOrderItemsItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku_id** | **string** | A unique SKU ID assigned by Voucherify. | [optional]
**product_id** | **string** | A unique product ID assigned by Voucherify. | [optional]
**related_object** | **string** | Used along with the source_id property, can be set to either sku or product. | [optional]
**source_id** | **string** | The merchant’s product/SKU ID (if it is different from the Voucherify product/SKU ID). It is useful in the integration between multiple systems. It can be an ID from an eCommerce site, a database, or a third-party service. | [optional]
**quantity** | **int** | The quantity of the particular item in the cart. | [optional]
**discount_quantity** | **int** | Number of dicounted items. | [optional]
**initial_quantity** | **int** | A positive integer in the smallest unit quantity representing the total amount of the order; this is the sum of the order items&#39; quantity. | [optional]
**amount** | **int** | The total amount of the order item (price * quantity). | [optional]
**discount_amount** | **int** | Sum of all order-item-level discounts applied to the order. | [optional]
**initial_amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**total_applied_discount_amount** | **int** | Sum of all order-level AND all product-specific discounts applied in a particular request.   &#x60;total_applied_discount_amount&#x60; &#x3D; &#x60;applied_discount_amount&#x60; + &#x60;items_applied_discount_amount&#x60; | [optional]
**price** | **int** | Unit price of an item. Value is multiplied by 100 to precisely represent 2 decimal places. For example &#x60;10000 cents&#x60; for &#x60;$100.00&#x60;. | [optional]
**subtotal_amount** | **int** | Final order item amount after the applied item-level discount.  If there are no item-level discounts applied, this item is equal to the &#x60;amount&#x60;.    &#x60;subtotal_amount&#x60;&#x3D;&#x60;amount&#x60;-&#x60;applied_discount_amount&#x60; | [optional]
**product** | [**\OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemProduct**](CustomerActivityDataOrderItemsItemProduct.md) |  | [optional]
**sku** | [**\OpenAPI\Client\Model\CustomerActivityDataOrderItemsItemSku**](CustomerActivityDataOrderItemsItemSku.md) |  | [optional]
**object** | **string** |  | [optional] [default to 'order_item']
**metadata** | **object** |  | [optional]
**applied_discount_amount** | **int** | This field shows the order-level discount applied. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
