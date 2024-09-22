# InvoiceItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The Id | [optional] 
**buyer** | [**\Membercare\Client\Model\Debtor**](Debtor.md) |  | [optional] 
**description** | **string** | Description of the item | [optional] 
**unit_price** | **double** | Price per unit | [optional] 
**quantity** | **double** | Number of units purchased | [optional] 
**total_price** | **double** | Total Price (UnitPrice * Quantity) | [optional] 
**total_vat** | **double** | Total vat (TotalPrice * VatPercent) | [optional] 
**finance_dimensions** | [**\Membercare\Client\Model\FinanceDimensions**](FinanceDimensions.md) |  | [optional] 
**sequence** | **int** | Order by this property | [optional] 
**credited_invoice_item_id** | **int** | If item is crediting another InvoiceItem, this is set | [optional] 
**credited_invoice_link** | **string** | If item is crediting another InvoiceItem, this link points to the Invoice where the credited item resides. | [optional] 
**invoice_link** | **string** | This link points to the Invoice where the item resides. | [optional] 
**is_credited** | **bool** | If true, this line is credited by another line | [optional] 
**fee_info** | [**\Membercare\Client\Model\InvoiceItemFeeInfo**](InvoiceItemFeeInfo.md) |  | [optional] 
**subscription_info** | [**\Membercare\Client\Model\InvoiceItemSubscriptionInfo**](InvoiceItemSubscriptionInfo.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

