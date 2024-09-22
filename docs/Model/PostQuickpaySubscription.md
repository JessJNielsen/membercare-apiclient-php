# PostQuickpaySubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**identification** | **string** | The external Quickpay subscription identifier | [optional] 
**name** | **string** | The internal name of the Quickpay subscription | [optional] 
**type** | [**\Membercare\Client\Model\QuickpaySubscriptionType**](QuickpaySubscriptionType.md) |  | [optional] 
**phone_number** | **int** | The phonenumber of the potential Mobilepay subscription this Quickpay subscription refers to | [optional] 
**last_four_digits** | **string** | The last four digits in the potential credit card this Quickpay subscription refers to | [optional] 
**expiration_month** | **int** | Expiration month of the potential credit card this Quickpay subscription refers to | [optional] 
**expiration_year** | **int** | Expiration year of the potential credit card this Quickpay subscription refers to | [optional] 
**allowed_context** | [**\Membercare\Client\Model\ServiceSourceFlag**](ServiceSourceFlag.md) |  | [optional] 
**valid** | **bool** | Is this Quickpay subscription valid? | [optional] 
**is_credit_card** | **bool** |  | [optional] 
**is_mobile_pay_subscription** | **bool** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

