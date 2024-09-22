# SubscriptionDefinitionPurchase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**subscription_definitions** | [**\Membercare\Client\Model\SubscriptionDefinition[]**](SubscriptionDefinition.md) | A list of subscription definition to purchase | [optional] 
**payment** | [**\Membercare\Client\Model\Payment**](Payment.md) |  | [optional] 
**recurring_payment_identification** | **string** | Used for storing credit card identification for automated recurring payments | [optional] 
**address_rule** | [**\Membercare\Client\Model\AddressRule**](AddressRule.md) |  | [optional] 
**make_recurring_payment** | **bool** | Set this if a recurring payment should be made in Quickpay | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

