# Membership

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The Id of the membership | [optional] 
**description** | **string** | The description of the membership.  This is usually a comment to the membership. | [optional] 
**member** | [**\Membercare\Client\Model\Member**](Member.md) |  | [optional] 
**application_date** | [**\DateTime**](\DateTime.md) | The application date of the membership | [optional] 
**affiliate_date** | [**\DateTime**](\DateTime.md) | The affiliate date of the membership | [optional] 
**affiliation_source** | [**\Membercare\Client\Model\AffiliationSource**](AffiliationSource.md) |  | [optional] 
**affiliation_reason** | [**\Membercare\Client\Model\AffiliationReason**](AffiliationReason.md) |  | [optional] 
**disaffiliate_date** | [**\DateTime**](\DateTime.md) | The disaffiliate date of the membership. | [optional] 
**application_status** | [**\Membercare\Client\Model\ApplicationStatus**](ApplicationStatus.md) |  | [optional] 
**enable_geographic** | **bool** | Indicates wether or not geographic is enable for the membership.  If true, then the membership will be updated when the members address change to another geographic enabled organization. | [optional] 
**membership_category** | [**\Membercare\Client\Model\MembershipCategory**](MembershipCategory.md) |  | [optional] 
**close_date** | [**\DateTime**](\DateTime.md) | Date when Membership got its end date | [optional] 
**fee_exempt** | **bool** | Indicates if this membership should not be invoiced (by Fee module) | [optional] 
**application_process_date** | [**\DateTime**](\DateTime.md) | Date when the application was processed | [optional] 
**application_status_comment** | **string** | Additional comment in regards to the application status | [optional] 
**membership_weights** | [**\Membercare\Client\Model\MembershipWeight[]**](MembershipWeight.md) | How many percent Member | [optional] 
**disaffiliate_reason** | [**\Membercare\Client\Model\DisaffiliateReason**](DisaffiliateReason.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

