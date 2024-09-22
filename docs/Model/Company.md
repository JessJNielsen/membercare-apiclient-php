# Company

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**debtor_account_number** | **string** | The identifying number | [optional] 
**name** | **string** | The full name of the member | [optional] 
**contacts** | [**\Membercare\Client\Model\Contact[]**](Contact.md) | List of contact informations of the member | [optional] 
**addresses** | [**\Membercare\Client\Model\PostalAddress[]**](PostalAddress.md) | List of address information of the member (primary and secundary addresses only) | [optional] 
**custom_field_values** | [**\Membercare\Client\Model\CustomFieldValue[]**](CustomFieldValue.md) | The members CustomFieldValues | [optional] 
**invoices_link** | **string** | Url to the collection of the member Invoices | [optional] 
**member_type** | [**\Membercare\Client\Model\UnitType**](UnitType.md) |  | [optional] 
**default_payer_link** | **string** | Link to the default payer for the member. | [optional] 
**dafualt_payer_rule** | [**\Membercare\Client\Model\PayerRule**](PayerRule.md) |  | [optional] 
**close_date** | [**\DateTime**](\DateTime.md) | The day the unit was closed.  Value is ignored when creating or updating! | [optional] 
**einvoice_ean** | **string** | Ean for electronic invoicing | [optional] 
**einvoice_email** | **string** | Email for electronic invoicing | [optional] 
**close_reason** | [**\Membercare\Client\Model\CloseReason**](CloseReason.md) |  | [optional] 
**default_address_type** | [**\Membercare\Client\Model\AddressRule**](AddressRule.md) |  | [optional] 
**external_id** | **string** | Id that comes from an external source to identify a member that exists both in Membercare and in another system | [optional] 
**last_change** | [**\DateTime**](\DateTime.md) | When was the base entity last changed | [optional] 
**finance_type** | [**\Membercare\Client\Model\FinanceType**](FinanceType.md) |  | [optional] 
**id** | **int** | Id | [optional] 
**category** | [**\Membercare\Client\Model\CompanyCategory**](CompanyCategory.md) |  | [optional] 
**company_name** | **string** | The name of the company | [optional] 
**company_name2** | **string** | The name2 of the company | [optional] 
**name_history** | [**\Membercare\Client\Model\CompanyNameHistory[]**](CompanyNameHistory.md) | If loaded this will show name changes | [optional] 
**business_numbers** | [**\Membercare\Client\Model\BusinessNumbers**](BusinessNumbers.md) |  | [optional] 
**custom_field_values_link** | **string** | Url to the collection of the companys CustomFieldValues | [optional] 
**invoice_addresses** | [**\Membercare\Client\Model\InvoiceAddressLinkToCompany[]**](InvoiceAddressLinkToCompany.md) | List of invoice address information of the member | [optional] 
**readdressings** | [**\Membercare\Client\Model\CompanyReAddressing[]**](CompanyReAddressing.md) | List of readdressing information of the member | [optional] 
**default_agreement** | [**\Membercare\Client\Model\Agreement**](Agreement.md) |  | [optional] 
**public_establishment** | **bool** | Public Establishment | [optional] 
**parent_company** | [**\Membercare\Client\Model\CompanyHierarchy**](CompanyHierarchy.md) |  | [optional] 
**foreign_system_mappings** | [**\Membercare\Client\Model\ForeignSystemMapping[]**](ForeignSystemMapping.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

