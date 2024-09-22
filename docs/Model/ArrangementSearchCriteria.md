# ArrangementSearchCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**starts_after** | [**\DateTime**](\DateTime.md) | The date for which the arrangements must start after | [optional] 
**ends_before** | [**\DateTime**](\DateTime.md) | The date for which the arrangements must end on or before | [optional] 
**name** | **string** | The name of the arrangement(s) the search for. | [optional] 
**categories** | [**\Membercare\Client\Model\ArrangementCategory[]**](ArrangementCategory.md) | A list of arrangement categories that the arrangements must have. | [optional] 
**sub_categories** | [**\Membercare\Client\Model\ArrangementSubCategory[]**](ArrangementSubCategory.md) | A list of arrangement sub categories that the arrangements must have. | [optional] 
**sections** | [**\Membercare\Client\Model\ArrangementGroup[]**](ArrangementGroup.md) | A list of arrangement sections that the arrangements must have. | [optional] 
**areas** | [**\Membercare\Client\Model\ArrangementArea[]**](ArrangementArea.md) | A list of arrangement areas that the arrangements must have. | [optional] 
**include_non_enrollable** | **bool** | Indicates whether or not to search for arrangements that are not enrollable (last enroll date expired). | [optional] 
**include_cancelled** | **bool** | Indicates whether or not to search for arrangements that are cancelled. | [optional] 
**only_web_enabled** | **bool** | Indicates whether or not to only search for arrangements that are web enabled. | [optional] 
**for_invitees_only** | **bool** | Indicates whether or not to only search for arrangements that are for invitees only. null means both | [optional] 
**attendance_registration_enabled** | **bool** | Is attendance registration enabled | [optional] 
**attendance_registration_completed** | **bool** | Does all participants have a mark regarding attendance  (only arrangements with AttendanceRegistration enabled will be returned when this porperty is not null ) | [optional] 
**custom_field_values** | [**\Membercare\Client\Model\CustomFieldValueSearch[]**](CustomFieldValueSearch.md) | A list of customfield values. At least one of them should be present on the arrangement. Please provide Type.Identifier and Value | [optional] 
**custom_field_values_match** | [**\Membercare\Client\Model\SearchBooleanType**](SearchBooleanType.md) |  | [optional] 
**organizations** | [**\Membercare\Client\Model\SimpleOrganization[]**](SimpleOrganization.md) | A list of organizations to search events belong to | [optional] 
**include_recurring_course_recurrences** | **bool** | A boolean indicating whether or not to include recurrences from the search results | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

