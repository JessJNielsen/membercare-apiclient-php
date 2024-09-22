# MembershipCategoryGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The Id of the membership category group. | [optional] 
**description** | **string** | The description of the membership category group. | [optional] 
**valid** | **bool** | Indicates wether or not the membership categorygroup is valid to use. | [optional] 
**sequence** | **int** | Sort Memberships / MembershipCategories by this value | [optional] 
**person_document_group** | [**\Membercare\Client\Model\PersonDocumentGroup**](PersonDocumentGroup.md) |  | [optional] 
**tags** | **string[]** | Associated Person document group, if any document is required while purchasing membership. | [optional] 
**minimum_age** | **int** | Minimum age person has to be to be eligible for membership | [optional] 
**maximum_age** | **int** | Maximum age person can be and still be eligible for membership | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

