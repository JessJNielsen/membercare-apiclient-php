# PersonSearchAddressCriteria

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**municipality_codes** | **string[]** | If MunicipalityCode is provided, CountryCode is required | [optional] 
**county_codes** | **string[]** | If CountyCode is provided, CountryCode is required | [optional] 
**zip_codes** | **string[]** | If ZipCode is provided, CountryCode is required | [optional] 
**country_code_iso2_letter** | **string** | eg. DK, SE, NO | [optional] 
**valid_on** | [**\DateTime**](\DateTime.md) | When should the primary address be valid - if not provided we use \&quot;Today\&quot; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

