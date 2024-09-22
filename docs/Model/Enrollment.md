# Enrollment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment** | [**\Membercare\Client\Model\Payment**](Payment.md) |  | [optional] 
**payer_debtor_account_number** | **string** | The DebtorAccount Number of the Person or Company who has paid, or is going to be invoiced (if no payment set). | [optional] 
**payer_info** | [**\Membercare\Client\Model\EInvoiceInfo**](EInvoiceInfo.md) |  | [optional] 
**participants** | [**\Membercare\Client\Model\ParticipantToEnroll[]**](ParticipantToEnroll.md) | List of participants to enroll | [optional] 
**ignore_earliest_invoice_date** | **bool** | If true, the invoice will be created, regardless of the earliestInvoiceDate. This is the default behavior for online payments.  If false, the invoice will only be created if earliestInvoiceDate has been passed | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

