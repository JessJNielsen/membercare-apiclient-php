# BalanceCalculationCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**max_outstanding_balance** | **double** | The max outstanding balance allowed in the given contexts | [optional] 
**contexts** | [**\Membercare\Client\Model\ServiceSourceFlag**](ServiceSourceFlag.md) |  | [optional] 
**only_invoices_created_after** | [**\DateTime**](\DateTime.md) | Calculate only for invoices created after | [optional] 
**discard_payments_made_after** | [**\DateTime**](\DateTime.md) | If a payment has been made after this date it will not be taken into account | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

