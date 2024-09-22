# Session

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The identifying number of the session | [optional] 
**name** | **string** | The name of the session | [optional] 
**texts** | [**\Membercare\Client\Model\ArrangementText[]**](ArrangementText.md) | Short description of the session as html. | [optional] 
**short_description** | **string** |  | [optional] 
**long_description** | **string** | Long description of the session as html. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The start datetime of the session. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The end datetime of the session. | [optional] 
**empty_seats** | **int** | The number of empty seats available on the session. | [optional] 
**total_seats** | **int** | Total nomber of seats | [optional] 
**mandatory** | **bool** | Indicates whether or not the Session is mandatory. | [optional] 
**web_enabled** | **bool** | Indicates wheter or not this session should be shown on web | [optional] 
**class_room** | [**\Membercare\Client\Model\ClassRoom**](ClassRoom.md) |  | [optional] 
**service_set** | [**\Membercare\Client\Model\ServiceSet**](ServiceSet.md) |  | [optional] 
**allowed_participant_categories** | [**\Membercare\Client\Model\AllowedParticipantCategory[]**](AllowedParticipantCategory.md) |  | [optional] 
**participation** | [**\Membercare\Client\Model\Participation**](Participation.md) |  | [optional] 
**cancellation_reason** | [**\Membercare\Client\Model\CancellationReason**](CancellationReason.md) |  | [optional] 
**cancellation_date** | [**\DateTime**](\DateTime.md) | When was it cancelled | [optional] 
**crew** | [**\Membercare\Client\Model\EventCrew[]**](EventCrew.md) | The persons running the event | [optional] 
**track** | [**\Membercare\Client\Model\SessionTrack**](SessionTrack.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

