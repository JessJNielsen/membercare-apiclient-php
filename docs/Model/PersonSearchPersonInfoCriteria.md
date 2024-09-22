# PersonSearchPersonInfoCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Del af personens navn | [optional] 
**phone_number** | **string** | Use this to search for any phone number attached to a person (spaces and + will be ignored) | [optional] 
**minimum_age** | **int** | The lowest age - persons without birthdate are excluded when this value is set | [optional] 
**maximum_age** | **int** | The highest age - persons without birthdate are excluded when this value is set | [optional] 
**valid_on** | [**\DateTime**](\DateTime.md) | Used for calculating age and when phone number should be valid - if not provided we use \&quot;Today\&quot; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

