# DiscountService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The identification number of the service. | [optional] 
**name** | **string** | The name of the service | [optional] 
**amount** | **int** | The default amount for the service. | [optional] 
**price** | **double** | The price of the service | [optional] 
**finance_dimensions** | [**\Membercare\Client\Model\FinanceDimensions**](FinanceDimensions.md) |  | [optional] 
**participant_category** | [**\Membercare\Client\Model\ParticipantCategory**](ParticipantCategory.md) |  | [optional] 
**sequence** | **int** | The ordering sequence of the service | [optional] 
**web_enabled** | **bool** | Indicates whether or not to display the service on web. | [optional] 
**available_amount** | **int** | The avaliable amount for the service. | [optional] 
**service_type** | [**\Membercare\Client\Model\CourseServiceType**](CourseServiceType.md) |  | [optional] 
**percent** | **double** | Percent | [optional] 
**include_vat** | **bool** | IncludeVat | [optional] 
**organization** | [**\Membercare\Client\Model\SimpleOrganization**](SimpleOrganization.md) |  | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) | ValidUntil | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) | ValidFrom | [optional] 
**code** | **string** | The code to be used to get the discount | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

