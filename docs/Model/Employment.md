# Employment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The identification id of the employment. | [optional] 
**company** | [**\Membercare\Client\Model\Company**](Company.md) |  | [optional] 
**person** | [**\Membercare\Client\Model\Person**](Person.md) |  | [optional] 
**employ_date** | [**\DateTime**](\DateTime.md) | The start date of the employment. | [optional] 
**unemploy_date** | [**\DateTime**](\DateTime.md) | The end of the employment. | [optional] 
**employment_category** | [**\Membercare\Client\Model\EmploymentCategory**](EmploymentCategory.md) |  | [optional] 
**occupation_title** | [**\Membercare\Client\Model\OccupationTitle**](OccupationTitle.md) |  | [optional] 
**official_title** | **string** | OfficielTitle og the employment. | [optional] 
**contacts** | [**\Membercare\Client\Model\Contact[]**](Contact.md) | Employment Contact information of the employee | [optional] 
**is_primary** | **bool** | Indicates if this employment is primary | [optional] 
**added_by_web** | **bool** | Indicates if this employment was added from web.   Will probably phased out within a short period of time | [optional] 
**agreement** | [**\Membercare\Client\Model\Agreement**](Agreement.md) |  | [optional] 
**hours** | **double** | Hours accoring to agreement | [optional] 
**weeks** | **int** | Weeks accoring to agreement | [optional] 
**salary_addition** | **string** | SalaryAddition accoring to agreement | [optional] 
**salary_step** | **string** | SalaryStep accoring to agreement | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

