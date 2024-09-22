# ArrangementPut

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**name** | **string** | The Name of the arrangement | [optional] 
**texts** | [**\Membercare\Client\Model\ArrangementText[]**](ArrangementText.md) | Determines which type of arrangement text it is.  1 &#x3D; ShortDescription, 2 &#x3D; LongDescription, 3 &#x3D; Syllabus, 4 &#x3D; Program. | [optional] 
**short_description** | **string** | Short description of the arrangement as html. | [optional] 
**long_description** | **string** | Long description of the arrangement as html. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The start datetime of the arrangement. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The end datetime of the arrangment. | [optional] 
**enroll_before** | [**\DateTime**](\DateTime.md) | The latest date where it is possible to enroll the arrangement | [optional] 
**earliest_participant_list_view_date_time** | [**\DateTime**](\DateTime.md) | Earliest date of participant list to be shown | [optional] 
**last_participant_list_view_date_time** | [**\DateTime**](\DateTime.md) | Last date of participant list to be shown | [optional] 
**cancel_signup_before_date_time** | [**\DateTime**](\DateTime.md) | Last date of cancelling participation | [optional] 
**show_on_web** | **bool** | Show on web | [optional] 
**max_participants** | **int** | Maximum participants in the event | [optional] 
**for_invitees_only** | **bool** | Is the arrangement only for invited members | [optional] 
**category** | [**\Membercare\Client\Model\ArrangementCategory**](ArrangementCategory.md) |  | [optional] 
**sub_category** | [**\Membercare\Client\Model\ArrangementSubCategory**](ArrangementSubCategory.md) |  | [optional] 
**area** | [**\Membercare\Client\Model\ArrangementArea**](ArrangementArea.md) |  | [optional] 
**section** | [**\Membercare\Client\Model\ArrangementGroup**](ArrangementGroup.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

