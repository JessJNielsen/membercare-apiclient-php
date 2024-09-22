# RecurringArrangement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**based_on_internal_id** | **string** |  | [optional] 
**recurrences** | [**\Membercare\Client\Model\RecurringArrangementRecurrence[]**](RecurringArrangementRecurrence.md) | These are the actual occurrences of the arrangement | [optional] 
**recurring_frequency** | [**\Membercare\Client\Model\RecurringArrangementFrequency**](RecurringArrangementFrequency.md) |  | [optional] 
**number_of_reccurrences** | **int** | The value the user entered when creating the arrangement.  May not reflect the current state  Either this or RecurrenceEndDateTime should have a value. | [optional] 
**week_days** | [**\Membercare\Client\Model\DayOfWeek[]**](DayOfWeek.md) | The value the user entered when creating the arrangement.  May not reflect the current state | [optional] 
**recurrence_end_date_time** | [**\DateTime**](\DateTime.md) | The date the user entered when creating the arrangement.  May not reflect the current state  Either this or NumberOfReccurrences should have a value. | [optional] 
**first_occurrence_start_date_time** | [**\DateTime**](\DateTime.md) | Calculated value based on the actual occurrences | [optional] 
**last_occurrence_end_date_time** | [**\DateTime**](\DateTime.md) | Calculated value based on the actual occurrences | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

