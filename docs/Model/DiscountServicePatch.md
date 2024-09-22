# DiscountServicePatch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The identification number of the service. | [optional] 
**name** | **string** | The name of the service | [optional] 
**internal_remark** | **string** |  | [optional] 
**amount** | **int** | The default amount for the service. | [optional] 
**price** | **double** | The price of the service | [optional] 
**finance_dimensions** | [**\Membercare\Client\Model\FinanceDimensions**](FinanceDimensions.md) |  | [optional] 
**participant_category** | [**\Membercare\Client\Model\ParticipantCategory**](ParticipantCategory.md) |  | [optional] 
**service_template** | [**\Membercare\Client\Model\ServiceTemplate**](ServiceTemplate.md) |  | [optional] 
**sequence** | **int** | The ordering sequence of the service | [optional] 
**web_enabled** | **bool** | Indicates whether or not to display the service on web. | [optional] 
**available_amount** | **int** | The avaliable amount for the service. | [optional] 
**mandatory** | **bool** | Indicates whether or not the service is mandatory, | [optional] 
**discount_allowed** | **bool** | Indicates whether or not discount is allowed on the service. | [optional] 
**maximum_amount** | **int** | The maximum amount that is available for the service. | [optional] 
**maximum_amount_participant** | **int** | The maximum amount that is available for each participant. | [optional] 
**change_description_allowed** | **bool** | Indicates whether or not the description of the service is editable. | [optional] 
**change_amount_allowed** | **bool** | Indicates whether or not the amount is editable. | [optional] 
**change_price_allowed** | **bool** | Indicates whether or not the price is editable. | [optional] 
**percent** | **double** | Percent | [optional] 
**include_vat** | **bool** | IncludeVat | [optional] 
**organization** | [**\Membercare\Client\Model\SimpleOrganization**](SimpleOrganization.md) |  | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) | ValidUntil | [optional] 
**code_valid_from** | [**\DateTime**](\DateTime.md) | Dato rabatkoden er gyldig fra | [optional] 
**code_valid_to** | [**\DateTime**](\DateTime.md) | Dato rabatkoden er gyldig til | [optional] 
**code** | **string** | Rabatkode | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

