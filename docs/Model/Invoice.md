# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The Id used to identity the Invoice. | [optional] 
**payer** | [**\Membercare\Client\Model\Debtor**](Debtor.md) |  | [optional] 
**send_invoice_to** | [**\Membercare\Client\Model\Debtor**](Debtor.md) |  | [optional] 
**deliver_products_to** | [**\Membercare\Client\Model\Debtor**](Debtor.md) |  | [optional] 
**finance_status** | [**\Membercare\Client\Model\FinanceStatus**](FinanceStatus.md) |  | [optional] 
**finance_date** | [**\DateTime**](\DateTime.md) | Finance date. | [optional] 
**pay_due_date** | [**\DateTime**](\DateTime.md) | Due date for payment. | [optional] 
**income_date** | [**\DateTime**](\DateTime.md) | Income date. | [optional] 
**credited_invoice_id** | **int** | If invoice is crediting another Invoice, this is set | [optional] 
**credited_invoice_link** | **string** | If invoice is crediting another Invoice, this link points to the Invoice where the credited item resides. | [optional] 
**e_invoice_info** | [**\Membercare\Client\Model\EInvoiceInfo**](EInvoiceInfo.md) |  | [optional] 
**source** | [**\Membercare\Client\Model\ServiceSource**](ServiceSource.md) |  | [optional] 
**payments** | [**\Membercare\Client\Model\Payment[]**](Payment.md) | List of Payments | [optional] 
**invoice_items** | [**\Membercare\Client\Model\InvoiceItem[]**](InvoiceItem.md) | List of InvoiceItems | [optional] 
**invoice_texts** | [**\Membercare\Client\Model\InvoiceText[]**](InvoiceText.md) | List of InvoiceTexts | [optional] 
**recurring_payment_identification** | **string** | Credit card identification for automated recurring payments  Only used for customers using Payer.se for recurring Donations on Membersite | [optional] 
**creation_info** | [**\Membercare\Client\Model\CrudByInfo**](CrudByInfo.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

