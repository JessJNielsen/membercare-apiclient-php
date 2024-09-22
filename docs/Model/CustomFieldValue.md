# CustomFieldValue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**identifier** | **int** | The unique identifier for this CustomFieldValue | [optional] 
**description** | **string** | Description to go along with the value | [optional] 
**type** | [**\Membercare\Client\Model\CustomFieldDefinition**](CustomFieldDefinition.md) |  | [optional] 
**parent_link** | **string** | Link to the entity which \&quot;owns\&quot; the CustomFieldValue | [optional] 
**value** | [****](.md) | The actual Value of the CustomField. The datatype of this value can be found through the Type | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Defines a point in time when this CustomFieldValue is in effect. | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | Defines when the CustomFieldValue is supposed to end. Null means no EndDate is defined yet. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

