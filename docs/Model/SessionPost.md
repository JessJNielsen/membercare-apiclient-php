# SessionPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**name** | **string** | The name of the session | [optional] 
**texts** | [**\Membercare\Client\Model\ArrangementText[]**](ArrangementText.md) | Determines which type of arrangement text it is.  1 &#x3D; ShortDescription, 2 &#x3D; LongDescription, 3 &#x3D; Syllabus, 4 &#x3D; Program. | [optional] 
**short_description** | **string** | Short description of the session as html. | [optional] 
**long_description** | **string** | Long description of the session as html. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The start datetime of the session. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The end datetime of the session. | [optional] 
**cancellation_date** | [**\DateTime**](\DateTime.md) | When was it cancelled | [optional] 
**minimum_seats** | **int** | MinParticipants | [optional] 
**budget_seats** | **int** | BudgetParticipants | [optional] 
**show_in_calendar** | **bool** | ShowInCalendar | [optional] 
**total_seats** | **int** | Total number of seats | [optional] 
**mandatory** | **bool** | Indicates whether or not the Session is mandatory. | [optional] 
**web_enabled** | **bool** | Indicates whether or not this session should be shown on web | [optional] 
**responsible** | [**\Membercare\Client\Model\Person**](Person.md) |  | [optional] 
**class_room** | [**\Membercare\Client\Model\ClassRoom**](ClassRoom.md) |  | [optional] 
**cancellation_reason** | [**\Membercare\Client\Model\CancellationReason**](CancellationReason.md) |  | [optional] 
**track** | [**\Membercare\Client\Model\SessionTrack**](SessionTrack.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

