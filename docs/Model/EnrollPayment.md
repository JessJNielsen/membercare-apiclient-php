# EnrollPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment** | [**\Membercare\Client\Model\Payment**](Payment.md) |  | [optional] 
**payer_debtor_account_number** | **string** | The DebtorAccount Number of the Person or Company who has paid, or is going to be invoiced (if no payment set). | [optional] 
**payer_info** | [**\Membercare\Client\Model\EInvoiceInfo**](EInvoiceInfo.md) |  | [optional] 
**participants** | [**\Membercare\Client\Model\ParticipantToPay[]**](ParticipantToPay.md) | List of participants to enroll | [optional] 
**invoice_id** | **int** | The id of the invoice to insert payment. If null, participant has yet to be invoiced. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

