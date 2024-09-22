# MembershipPurchaseParams

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**calc_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**payer_debtor_account_number** | **string** |  | [optional] 
**shop_order_id** | **string** |  | [optional] 
**payment** | [**\Membercare\Client\Model\Payment**](Payment.md) |  | [optional] 
**membership_purchases** | [**\Membercare\Client\Model\MembershipPurchase[]**](MembershipPurchase.md) |  | [optional] 
**affiliation_source_id** | **int** | Affiliationsourceid from query, if any. Will overwrite default affiliationsource from config | [optional] 
**affiliation_reason_id** | **int** | Set the id of the AffiliationReason you want attached to the membership | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

