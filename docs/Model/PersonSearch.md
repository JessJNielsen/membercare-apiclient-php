# PersonSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] 
**phone_number** | **string** | Use this to search for any phone number attached to a person (spaces and + will be ignored) | [optional] 
**custom_field_values_match** | [**\Membercare\Client\Model\SearchBooleanType**](SearchBooleanType.md) |  | [optional] 
**custom_field_values** | [**\Membercare\Client\Model\CustomFieldValueSearch[]**](CustomFieldValueSearch.md) | A list of customfield values to match the persons custom fields. Please provide Type.Identifier and Value | [optional] 
**custom_field_value_criteria** | [**\Membercare\Client\Model\PersonSearchCustomFieldValueCriteria**](PersonSearchCustomFieldValueCriteria.md) |  | [optional] 
**person_info_criteria** | [**\Membercare\Client\Model\PersonSearchPersonInfoCriteria**](PersonSearchPersonInfoCriteria.md) |  | [optional] 
**board_member_criteria** | [**\Membercare\Client\Model\PersonSearchBoardMemberCriteria**](PersonSearchBoardMemberCriteria.md) |  | [optional] 
**membership_criteria** | [**\Membercare\Client\Model\PersonSearchMembershipCriteria**](PersonSearchMembershipCriteria.md) |  | [optional] 
**address_criteria** | [**\Membercare\Client\Model\PersonSearchAddressCriteria**](PersonSearchAddressCriteria.md) |  | [optional] 
**interest_criteria** | [**\Membercare\Client\Model\PersonSearchInterestCriteria**](PersonSearchInterestCriteria.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

