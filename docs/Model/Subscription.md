# Subscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The identification number of the subscription | [optional] 
**subscriber** | [**\Membercare\Client\Model\Member**](Member.md) |  | [optional] 
**recipient** | [**\Membercare\Client\Model\Member**](Member.md) |  | [optional] 
**recipient_address_rule** | [**\Membercare\Client\Model\AddressRule**](AddressRule.md) |  | [optional] 
**payer** | [**\Membercare\Client\Model\Member**](Member.md) |  | [optional] 
**e_invoice_info** | [**\Membercare\Client\Model\EInvoiceInfo**](EInvoiceInfo.md) |  | [optional] 
**subscription_definition** | [**\Membercare\Client\Model\SubscriptionDefinition**](SubscriptionDefinition.md) |  | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the subscription | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the subscription | [optional] 
**quantity** | **int** | Quantity of the subscription | [optional] 
**delivery_wanted** | **bool** | Indicates whether or not the subscription should be delivered to the a recipient | [optional] 
**recurring_payment_identification** | **string** | Used for storing credit card identification for automated recurring payments | [optional] 
**description** | **string** | The description of the subscription | [optional] 
**individual_price** | **double** | A specific price for the given subscriber (overrules normal pricing) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

