# MembersiteOrderStagingData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Primary key, should only be null object used as POST model | [optional] 
**shop_order_id** | **int** |  | [optional] 
**status** | [**\Membercare\Client\Model\MembersiteOrderStagingDataStatus**](MembersiteOrderStagingDataStatus.md) |  | [optional] 
**payload_model** | [**\Membercare\Client\Model\MembersiteOrderStagingDataPayloadModel**](MembersiteOrderStagingDataPayloadModel.md) |  | [optional] 
**payload_format** | [**\Membercare\Client\Model\MembersiteOrderStagingDataPayloadFormat**](MembersiteOrderStagingDataPayloadFormat.md) |  | [optional] 
**payload** | **string** |  | [optional] 
**payer_datacard_id** | **int** |  | [optional] 
**payer_debtor_account_number** | **string** | Only exists as temporary storage in order to set this object&#x27;s PayerDatacardId if needed somewhere | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

