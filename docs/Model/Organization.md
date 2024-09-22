# Organization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The id of the Organization | [optional] 
**identification_number** | **string** | The identification number of the Organization | [optional] 
**full_name** | **string** | The full name of the Organization | [optional] 
**name** | **string** | The name of the Organization | [optional] 
**name2** | **string** | The second name of the Organization | [optional] 
**contacts** | [**\Membercare\Client\Model\Contact[]**](Contact.md) | List of contact information of the Organization | [optional] 
**membership_allowed** | **bool** | Indicates wether or not membership is allowed in the organization | [optional] 
**board_member_allowed** | **bool** | Indicates wether or not boardmembership is allowed in the organization | [optional] 
**memberships_link** | **string** | Link to get members of the organization. | [optional] 
**board_members_link** | **string** | Link to get boardmembers of the organization. | [optional] 
**web_enabled** | **bool** | Indicates if this organization should be used on publicly accessible websites | [optional] 
**company_link** | **string** | Link to a connected Company | [optional] 
**organization_category** | [**\Membercare\Client\Model\OrganizationCategory**](OrganizationCategory.md) |  | [optional] 
**nets_pbs_subscription_url** | **string** | This is the link to use for enrollment to NETS PBS Service for this particular organization | [optional] 
**addresses** | [**\Membercare\Client\Model\PostalAddress[]**](PostalAddress.md) | Addresses | [optional] 
**electoral_districts** | [**\Membercare\Client\Model\ElectoralDistrict[]**](ElectoralDistrict.md) | A list of electoral districts mapped to the organization. | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | The start date of the organization | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | The end date of the organization | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

