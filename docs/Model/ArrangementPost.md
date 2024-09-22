# ArrangementPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**internal_id** | **string** | The arrangement identification.  The same value is available in Membercare&#x27;s user interface. | [optional] 
**name** | **string** | The Name of the arrangement | [optional] 
**internal_description** | **string** |  | [optional] 
**texts** | [**\Membercare\Client\Model\ArrangementText[]**](ArrangementText.md) | Determines which type of arrangement text it is.  1 &#x3D; ShortDescription, 2 &#x3D; LongDescription, 3 &#x3D; Syllabus, 4 &#x3D; Program. | [optional] 
**short_description** | **string** | Short description of the arrangement as html. | [optional] 
**long_description** | **string** | Long description of the arrangement as html. | [optional] 
**start_date_time** | [**\DateTime**](\DateTime.md) | The start datetime of the arrangement. | [optional] 
**end_date_time** | [**\DateTime**](\DateTime.md) | The end datetime of the arrangment. | [optional] 
**total_seats** | **int** | Total nomber of seats | [optional] 
**minimum_seats** | **int** | MinParticipants | [optional] 
**budget_seats** | **int** | BudgetParticipants | [optional] 
**arrangement_type** | [**\Membercare\Client\Model\ArrangementType**](ArrangementType.md) |  | [optional] 
**payment_option** | [**\Membercare\Client\Model\PaymentOption**](PaymentOption.md) |  | [optional] 
**earliest_enroll_time** | [**\DateTime**](\DateTime.md) | The earliest time where it is possible to enroll the arrangement | [optional] 
**enroll_before** | [**\DateTime**](\DateTime.md) | The latest date where it is possible to enroll the arrangement | [optional] 
**web_enabled** | **bool** | Indicates wheter or not this arrangement should be shown on web | [optional] 
**allow_enrollment_to_simultaneous_sessions** | **bool** | Indicates whether or not a participant is allowed to participate in sessions that overlap on time  Only relevant for Conference. | [optional] 
**based_on_template_id** | **int** | The template the course was based on when created | [optional] 
**integrate_to_community** | **bool** | IntegrateToCommunity | [optional] 
**income_date** | [**\DateTime**](\DateTime.md) | IncomeDate | [optional] 
**allow_invoice_after** | [**\DateTime**](\DateTime.md) | AllowInvoiceAfter | [optional] 
**show_in_calendar** | **bool** | ShowInCalendar | [optional] 
**notification_settings** | [**\Membercare\Client\Model\NotificationSettings**](NotificationSettings.md) |  | [optional] 
**work_group** | [**\Membercare\Client\Model\WorkGroup**](WorkGroup.md) |  | [optional] 
**finance_dimensions** | [**\Membercare\Client\Model\FinanceDimensions**](FinanceDimensions.md) |  | [optional] 
**responsible** | [**\Membercare\Client\Model\Person**](Person.md) |  | [optional] 
**arrangement_area** | [**\Membercare\Client\Model\ArrangementArea**](ArrangementArea.md) |  | [optional] 
**arrangement_section** | [**\Membercare\Client\Model\ArrangementGroup**](ArrangementGroup.md) |  | [optional] 
**arrangement_category** | [**\Membercare\Client\Model\ArrangementCategory**](ArrangementCategory.md) |  | [optional] 
**arrangement_sub_category** | [**\Membercare\Client\Model\ArrangementSubCategory**](ArrangementSubCategory.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

