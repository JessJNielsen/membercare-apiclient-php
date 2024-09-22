# ArrangementTemplatePost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Timespan from 1900-1-1 indicating starttime for the Arrangement | [optional] 
**total_seats** | **int** | Maximum total seats in the event | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | Timespan from 1900-1-1 indicating endtime for the Arrangement | [optional] 
**earliest_participant_list_view_date_time** | [**\DateTime**](\DateTime.md) | Earliest date of participant list to be shown | [optional] 
**last_participant_list_view_date_time** | [**\DateTime**](\DateTime.md) | Last date of participant list to be shown | [optional] 
**cancel_signup_before_date_time** | [**\DateTime**](\DateTime.md) | Last date of cancelling participation | [optional] 
**description** | **string** |  | [optional] 
**short_description** | **string** |  | [optional] 
**long_description** | **string** |  | [optional] 
**texts** | [**\Membercare\Client\Model\ArrangementText[]**](ArrangementText.md) |  | [optional] 
**enroll_before** | [**\DateTime**](\DateTime.md) |  | [optional] 
**for_invitees_only** | **bool** |  | [optional] 
**web_enabled** | **bool** |  | [optional] 
**recurrence** | [**\Membercare\Client\Model\ArrangementTemplatePostRecurrence**](ArrangementTemplatePostRecurrence.md) |  | [optional] 
**event_crews** | [**\Membercare\Client\Model\EventCrew[]**](EventCrew.md) |  | [optional] 
**allowed_participant_categories** | [**\Membercare\Client\Model\AllowedParticipantCategory[]**](AllowedParticipantCategory.md) |  | [optional] 
**custom_field_values** | [**\Membercare\Client\Model\CustomFieldValue[]**](CustomFieldValue.md) |  | [optional] 
**post_arrangement_regular_service_templates** | [**\Membercare\Client\Model\PostArrangementTemplateRegularService[]**](PostArrangementTemplateRegularService.md) |  | [optional] 
**arrangement_template** | [**\Membercare\Client\Model\ArrangementTemplate**](ArrangementTemplate.md) |  | [optional] 
**organizations** | [**\Membercare\Client\Model\SimpleOrganization[]**](SimpleOrganization.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

