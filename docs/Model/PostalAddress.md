# PostalAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The Identification Id of the postal address | [optional] 
**attention** | **string** | The Attention of the postal address | [optional] 
**care_of** | **string** | The CO on the postal address | [optional] 
**street** | **string** | The street of residence | [optional] 
**number** | **string** | The number on the street. | [optional] 
**letter** | **string** | The letter of the residence, if any | [optional] 
**floor** | **string** | the floor of a building | [optional] 
**suite** | **string** | The suite. | [optional] 
**location** | **string** | THe location of the postal address | [optional] 
**post_office_box** | **string** | THe number on the post office box | [optional] 
**postal_code** | [**\Membercare\Client\Model\PostalCode**](PostalCode.md) |  | [optional] 
**country** | [**\Membercare\Client\Model\Country**](Country.md) |  | [optional] 
**municipality** | [**\Membercare\Client\Model\Municipality**](Municipality.md) |  | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The start date of the postal address | [optional] 
**end** | [**\DateTime**](\DateTime.md) | The end date of the postal address | [optional] 
**address_type** | [**\Membercare\Client\Model\AddressRule**](AddressRule.md) |  | [optional] 
**address_description** | **string** | A custom name for the address type | [optional] 
**formatted_address** | **string** | A formatted string of the address information | [optional] 
**address_line_one** | **string** | A one line string representation of the address without zip, city or country | [optional] 
**zip_city_country** | **string** | NB! THIS PROPERTY MIGHT BE SUBJECT TO CHANGE OR DELETION - A one line string representation of zip, city and country | [optional] 
**last_change** | [**\DateTime**](\DateTime.md) | When was the address last changed | [optional] 
**street_and_zip_one_line** | **string** | A one line string representation of the address without country | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

