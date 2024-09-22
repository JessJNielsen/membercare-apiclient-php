# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**payment_identification** | **string** | Payment Identification - usually the ID for an online payment provider | [optional] 
**amount** | **double** | Amount | [optional] 
**id** | **int** | Id | [optional] 
**payment_date** | [**\DateTime**](\DateTime.md) | Payment date | [optional] 
**payment_type** | [**\Membercare\Client\Model\PaymentType**](PaymentType.md) |  | [optional] 
**finance_status** | [**\Membercare\Client\Model\FinanceStatus**](FinanceStatus.md) |  | [optional] 
**invoice_id** | **int** | Invoice | [optional] 
**invoice_link** | **string** | Link to the invoice | [optional] 
**finance_dimensions** | [**\Membercare\Client\Model\FinanceDimensions**](FinanceDimensions.md) |  | [optional] 
**shop_order_id** | **string** | The shop order Id from an external shop system | [optional] 
**payment_system_card_type** | **string** | A textual representation of the card type used in the payment | [optional] 
**voucher_no** | **string** | Voucher number of the payment (Transaction id from the payment gateweay) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

