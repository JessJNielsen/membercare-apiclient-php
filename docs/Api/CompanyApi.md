# Membercare\Client\CompanyApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyApi**](CompanyApi.md#companyapi) | **GET** /api/v1/companies/{debtorAccountNumber} | Retrieves a Company with the given DebtorAccountNumber
[**companyEmploymentsApi**](CompanyApi.md#companyemploymentsapi) | **GET** /api/v1/companies/{debtorAccountNumber}/employments | Retrieves a paged result of employments that the company have.
[**companySearchApi**](CompanyApi.md#companysearchapi) | **GET** /api/v1/companies/search | Get a paged result of companies that match the search string in either debtorAccountNumber or name or CVR or SE.
[**deleteCompanyForeignSystem**](CompanyApi.md#deletecompanyforeignsystem) | **DELETE** /api/v1/companies/{debtorAccountNumber}/foreignSystem/{id} | Disassociate ForeignSystem with a Company
[**deleteInterestForCompany**](CompanyApi.md#deleteinterestforcompany) | **DELETE** /api/v1/companies/{debtorAccountNumber}/interests | Ends the interest
[**deleteProductionNumber**](CompanyApi.md#deleteproductionnumber) | **DELETE** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{registrationNumberCvr}/productionNumbers/{id} | Deletes a production number
[**deleteRegistrationNumberCVR**](CompanyApi.md#deleteregistrationnumbercvr) | **DELETE** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{id} | Deletes a RegistrationNumber (CVR)
[**deleteRegistrationNumberNorwegianCompanyNumber**](CompanyApi.md#deleteregistrationnumbernorwegiancompanynumber) | **DELETE** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/norwegianCompanyNumber/{id} | Deletes a RegistrationNumber (Norwegian Company Number)
[**deleteRegistrationNumberRut**](CompanyApi.md#deleteregistrationnumberrut) | **DELETE** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/rut/{id} | Deletes a RegistrationNumber (RUT)
[**deleteRegistrationNumberSe**](CompanyApi.md#deleteregistrationnumberse) | **DELETE** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/se/{id} | Deletes a RegistrationNumber (SE)
[**deleteRegistrationNumberSwedishCompanyNumber**](CompanyApi.md#deleteregistrationnumberswedishcompanynumber) | **DELETE** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/swedishCompanyNumber/{id} | Deletes a RegistrationNumber (Swedish Company Number)
[**deleteRegistrationNumberVat**](CompanyApi.md#deleteregistrationnumbervat) | **DELETE** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/vat/{id} | Deletes a RegistrationNumber (VAT)
[**getBoardMembershipsForCompany**](CompanyApi.md#getboardmembershipsforcompany) | **GET** /api/v1/companies/{debtorAccountNumber}/boardMemberships | Get a paged result of boardmemberships.
[**getBusinessActivityCodes**](CompanyApi.md#getbusinessactivitycodes) | **GET** /api/v1/companies/businessActivityCodes | Get all Business Activity Codes
[**getCompaniesByCompanyCategory**](CompanyApi.md#getcompaniesbycompanycategory) | **GET** /api/v1/companies/companyCategories/{companyCategoryId}/companies | Get all Companies with a specific category
[**getCompanyCategories**](CompanyApi.md#getcompanycategories) | **GET** /api/v1/companies/companyCategories | Get all Company Categories
[**getCompanyCloseReasons**](CompanyApi.md#getcompanyclosereasons) | **GET** /api/v1/companies/closeReasons | Returns a list of CloseReasons
[**getCompanyForeignSystem**](CompanyApi.md#getcompanyforeignsystem) | **GET** /api/v1/companies/{debtorAccountNumber}/foreignSystem/{id} | Get Companies via ForeignSystem
[**getCompanyHierarchyCategories**](CompanyApi.md#getcompanyhierarchycategories) | **GET** /api/v1/companies/hierarchyCategories | Gets a list of the companys hierarchy categories
[**getCompanyHierarchyDown**](CompanyApi.md#getcompanyhierarchydown) | **GET** /api/v1/companies/{debtorAccountNumber}/hierarchy/down | Gets a list of the companys hierarchy down related companies.
[**getCompanyHierarchyUp**](CompanyApi.md#getcompanyhierarchyup) | **GET** /api/v1/companies/{debtorAccountNumber}/hierarchy/up | Gets a list of the companys hierarchy up related companies.
[**getCompanySubscriptions**](CompanyApi.md#getcompanysubscriptions) | **GET** /api/v1/companies/{debtorAccountNumber}/subscriptions | Get a companys subscriptions
[**getCustomFieldValuesForCompany**](CompanyApi.md#getcustomfieldvaluesforcompany) | **GET** /api/v1/companies/{debtorAccountNumber}/customFields/values | Retrieves a paged result of all CustomFieldValues for the company with the given DebtorAccountNumber
[**getInterestsForCompany**](CompanyApi.md#getinterestsforcompany) | **GET** /api/v1/companies/{debtorAccountNumber}/interests | Get the company&#x27;s interests
[**getMembershipsForCompany**](CompanyApi.md#getmembershipsforcompany) | **GET** /api/v1/companies/{debtorAccountNumber}/memberships | Get a paged result of memberships.
[**getProductionNumbers**](CompanyApi.md#getproductionnumbers) | **GET** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{registrationNumberCvr}/productionNumbers | Gets production number by company debtor account number and a registration number cvr Id
[**getRegistrationNumberCvr**](CompanyApi.md#getregistrationnumbercvr) | **GET** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr | Get current active CVR registration number
[**getRegistrationNumberNorwegianCompanyNumber**](CompanyApi.md#getregistrationnumbernorwegiancompanynumber) | **GET** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/norwegianCompanyNumber | Get current active Norwegian Company Number registration number
[**getRegistrationNumberRut**](CompanyApi.md#getregistrationnumberrut) | **GET** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/rut | Get current active RUT registration numbers
[**getRegistrationNumberSe**](CompanyApi.md#getregistrationnumberse) | **GET** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/se | Get current active SE registration numbers
[**getRegistrationNumberSwedishCompanyNumber**](CompanyApi.md#getregistrationnumberswedishcompanynumber) | **GET** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/swedishCompanyNumber | Get current active Swedish Company registration number
[**getRegistrationNumberVat**](CompanyApi.md#getregistrationnumbervat) | **GET** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/vat | Gets current active VAT registration number
[**getValidCompanies**](CompanyApi.md#getvalidcompanies) | **GET** /api/v1/companies | Get a paged result of companies.
[**patchCompany**](CompanyApi.md#patchcompany) | **PATCH** /api/v1/companies/{debtorAccountNumber} | Patches a Company
[**patchCompanyPostalAddress**](CompanyApi.md#patchcompanypostaladdress) | **PATCH** /api/v1/companies/{debtorAccountNumber}/postalAddress/{id} | Patch the postalAddress
[**patchProductionNumber**](CompanyApi.md#patchproductionnumber) | **PATCH** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{registrationNumberCvr}/productionNumbers/{id} | Patches a ProductionNumber
[**patchRegistrationNumberCVR**](CompanyApi.md#patchregistrationnumbercvr) | **PATCH** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{id} | Patch a RegistrationNumber (CVR)
[**patchRegistrationNumberNorwegianCompanyNumber**](CompanyApi.md#patchregistrationnumbernorwegiancompanynumber) | **PATCH** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/norwegianCompanyNumber/{id} | Patches a Norwegian Company Number registration number for a Company
[**patchRegistrationNumberRUT**](CompanyApi.md#patchregistrationnumberrut) | **PATCH** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/rut/{id} | Patches a RUT Registration number for a Company
[**patchRegistrationNumberSE**](CompanyApi.md#patchregistrationnumberse) | **PATCH** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/se/{Id} | Patches a registration number (SE)
[**patchRegistrationNumberSwedishCompanyNumber**](CompanyApi.md#patchregistrationnumberswedishcompanynumber) | **PATCH** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/swedishCompanyNumber/{id} | Patches a Swedish Company Number registration number for a Company
[**patchRegistrationNumberVAT**](CompanyApi.md#patchregistrationnumbervat) | **PATCH** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/vat/{id} | Patches a VAT registration number for a Company
[**postAddressesForCompany**](CompanyApi.md#postaddressesforcompany) | **POST** /api/v1/companies/{debtoraccountnumber}/addresses | Takes a list of postaladdress, and inserts it for the given DebtorAccountNumber.  Note that the following values Must be assigned:      - debtorAccountNumber      - list of postaladdress (body object)
[**postBusinessActivityToProductionNumber**](CompanyApi.md#postbusinessactivitytoproductionnumber) | **POST** /api/v1/companies/{debtorAccountNumber}/productionNumbers/{productionNumber}/businessActivities | Inserts a businessActivity on the Production Number
[**postBusinessActivityToRegistrationNumber**](CompanyApi.md#postbusinessactivitytoregistrationnumber) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/{registrationNumber}/businessActivities | Inserts a businessActivity on the RegistrationNumber Number
[**postCompany**](CompanyApi.md#postcompany) | **POST** /api/v1/companies | Creates a new Company. The properties debtorAccountNumber, name, nameHistory, businessNumbers, addresses, invoiceAddresses, readdressings and contacts must not be provided and will result in a BadRequest.  closeDate and closeReason are ignored.
[**postCompanyForeignSystem**](CompanyApi.md#postcompanyforeignsystem) | **POST** /api/v1/companies/{debtorAccountNumber}/foreignSystem/{id} | Associate ForeignSystem with a Company
[**postCompanyHierarchyDown**](CompanyApi.md#postcompanyhierarchydown) | **POST** /api/v1/companies/{debtorAccountNumber}/hierarchy/down | Creates a CompanyHierarchy where the Company in the provided CompanyHierarchy will be child.   In the provided CompanyHierarchy object it is enough to provide the &#x27;debtorAccountNumber&#x27; property on the Company object.   In the provided CompanyHierarchy object it is enough to provide the &#x27;id&#x27; property on the CompanyHierarchyCategory object.
[**postCompanyHierarchyUp**](CompanyApi.md#postcompanyhierarchyup) | **POST** /api/v1/companies/{debtorAccountNumber}/hierarchy/up | Creates a CompanyHierarchy where the Company in the provided CompanyHierarchy will be parent.  In the provided CompanyHierarchy object it is enough to provide the &#x27;debtorAccountNumber&#x27; property on the Company object.   In the provided CompanyHierarchy object it is enough to provide the &#x27;id&#x27; property on the CompanyHierarchyCategory object.
[**postCompanyInvoiceAddress**](CompanyApi.md#postcompanyinvoiceaddress) | **POST** /api/v1/companies/{debtoraccountnumber}/invoiceAddresses | Create an invoice address
[**postCompanyReaddressing**](CompanyApi.md#postcompanyreaddressing) | **POST** /api/v1/companies/{debtoraccountnumber}/readdressing | Create a readdressing
[**postCompanySearchCriteria**](CompanyApi.md#postcompanysearchcriteria) | **POST** /api/v1/companies/search | Retrieves a list of companies that match criteria in request body, e.g. email domain name, website
[**postCompanyWorkListItem**](CompanyApi.md#postcompanyworklistitem) | **POST** /api/v1/companies/{debtorAccountNumber}/worklistItem | Will insert a worklist item with regards to the company
[**postContactsForCompany**](CompanyApi.md#postcontactsforcompany) | **POST** /api/v1/companies/{debtoraccountnumber}/contacts | Takes a list of contacts, and inserts it for the given DebtorAccountNumber.  Note that the following values Must be assigned:      - debtorAccountNumber      - list of contacts (body object)
[**postCustomFieldValueForCompany**](CompanyApi.md#postcustomfieldvalueforcompany) | **POST** /api/v1/companies/{debtorAccountNumber}/customFields/values | Takes a CustomFieldValue, and inserts it for the given Debtor.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned
[**postInterestForCompany**](CompanyApi.md#postinterestforcompany) | **POST** /api/v1/companies/{debtorAccountNumber}/interests | Saves the interest
[**postMembershipCompany**](CompanyApi.md#postmembershipcompany) | **POST** /api/v1/companies/{debtorAccountNumber}/memberships | Creates a membership for a company    MembershipCategory, ApplicationDate, AffiliateDate, ApplicationStatus are mandatory.
[**postProductionNumber**](CompanyApi.md#postproductionnumber) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{registrationNumberCvr}/productionNumbers | Creates a ProductionNumber
[**postRegistrationNumberCvr**](CompanyApi.md#postregistrationnumbercvr) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr | Post a RegistrationNumber (CVR)
[**postRegistrationNumberNorwegianCompanyNumber**](CompanyApi.md#postregistrationnumbernorwegiancompanynumber) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/norwegianCompanyNumber | Posts a RegistrationNumber Norwegian Company Number
[**postRegistrationNumberRut**](CompanyApi.md#postregistrationnumberrut) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/rut | Post a RegistrationNumber (RUT)
[**postRegistrationNumberSe**](CompanyApi.md#postregistrationnumberse) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/se | Post a RegistrationNumber (SE)
[**postRegistrationNumberSwedishCompanyNumber**](CompanyApi.md#postregistrationnumberswedishcompanynumber) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/swedishCompanyNumber | Posts a RegistrationNumber Swedish Company Number
[**postRegistrationNumberVat**](CompanyApi.md#postregistrationnumbervat) | **POST** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/vat | Creates a RegistrationNumber (VAT)
[**postSubscriptionCompany**](CompanyApi.md#postsubscriptioncompany) | **POST** /api/v1/companies/{debtoraccountnumber}/subscriptions | The Subscriber property on Subscription will need to have a property telling which type the member is eg. \&quot;$type\&quot;: \&quot;Membercare.REST.Models.v1.Company.Company, Membercare.REST.Models\&quot; for companies  The Recipient property on Subscription will need to have a property telling which type the member is eg. \&quot;$type\&quot;: \&quot;Membercare.REST.Models.v1.Company.Company, Membercare.REST.Models\&quot; for companies  The Payer property on Subscription will need to have a property telling which type the member is eg. \&quot;$type\&quot;: \&quot;Membercare.REST.Models.v1.Company.Company, Membercare.REST.Models\&quot; for companies
[**putBusinessActivity**](CompanyApi.md#putbusinessactivity) | **PUT** /api/v1/companies/businessActivities/{id} | Updates a Business Activity&#x27;s activityType, start and end
[**putCompany**](CompanyApi.md#putcompany) | **PUT** /api/v1/companies/{debtorAccountNumber} | Updates a Company
[**putCompanyHierarchy**](CompanyApi.md#putcompanyhierarchy) | **PUT** /api/v1/companies/hierarchy | Updates StartDate, EndDate and Description. Other properties are ignored.
[**putProductionNumber**](CompanyApi.md#putproductionnumber) | **PUT** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{registrationNumberCvr}/productionNumbers/{id} | Puts a ProductionNumber
[**putRegistrationNumberCvr**](CompanyApi.md#putregistrationnumbercvr) | **PUT** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/cvr/{id} | Puts a RegistrationNumber (CVR)
[**putRegistrationNumberNorwegianCompanyNumber**](CompanyApi.md#putregistrationnumbernorwegiancompanynumber) | **PUT** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/norwegianCompanyNumber | Puts a RegistrationNumber Norwegian Company Number
[**putRegistrationNumberRut**](CompanyApi.md#putregistrationnumberrut) | **PUT** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/rut/{id} | Put a RegistrationNumber (RUT)
[**putRegistrationNumberSe**](CompanyApi.md#putregistrationnumberse) | **PUT** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/se/{Id} | Put a RegistrationNumber (SE)
[**putRegistrationNumberSwedishCompanyNumber**](CompanyApi.md#putregistrationnumberswedishcompanynumber) | **PUT** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/swedishCompanyNumber | Puts a RegistrationNumber (Swedish Company Number)
[**putRegistrationNumberVat**](CompanyApi.md#putregistrationnumbervat) | **PUT** /api/v1/companies/{debtorAccountNumber}/registrationNumbers/vat/{id} | Puts a VAT registration number for a Company

# **companyApi**
> \Membercare\Client\Model\Company companyApi($debtor_account_number, $token, $include_name_history)

Retrieves a Company with the given DebtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The company DebtorAccountNumber
$token = "token_example"; // string | access token
$include_name_history = false; // bool | 

try {
    $result = $apiInstance->companyApi($debtor_account_number, $token, $include_name_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The company DebtorAccountNumber |
 **token** | **string**| access token |
 **include_name_history** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyEmploymentsApi**
> \Membercare\Client\Model\EmploymentPagedResult companyEmploymentsApi($debtor_account_number, $token, $only_valid, $page, $page_size)

Retrieves a paged result of employments that the company have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The company's DebtorAccountNumber
$token = "token_example"; // string | access token
$only_valid = true; // bool | Include historical and future employments?
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of employments to display per paged result.

try {
    $result = $apiInstance->companyEmploymentsApi($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companyEmploymentsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The company&#x27;s DebtorAccountNumber |
 **token** | **string**| access token |
 **only_valid** | **bool**| Include historical and future employments? | [optional] [default to true]
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of employments to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\EmploymentPagedResult**](../Model/EmploymentPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySearchApi**
> \Membercare\Client\Model\CompanyPagedResult companySearchApi($token, $search_string, $include_address_and_contact_info, $include_name_history, $include_custom_fields, $page, $page_size)

Get a paged result of companies that match the search string in either debtorAccountNumber or name or CVR or SE.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$search_string = ""; // string | The string to search for in debtorAccountNumber or name or CVR or SE.
$include_address_and_contact_info = false; // bool | Indicates whether or not to include address and contact informations. This applies to all referenced Persons, Companies and Organizations.
$include_name_history = false; // bool | 
$include_custom_fields = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->companySearchApi($token, $search_string, $include_address_and_contact_info, $include_name_history, $include_custom_fields, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->companySearchApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **search_string** | **string**| The string to search for in debtorAccountNumber or name or CVR or SE. | [optional]
 **include_address_and_contact_info** | **bool**| Indicates whether or not to include address and contact informations. This applies to all referenced Persons, Companies and Organizations. | [optional] [default to false]
 **include_name_history** | **bool**|  | [optional] [default to false]
 **include_custom_fields** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyPagedResult**](../Model/CompanyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCompanyForeignSystem**
> deleteCompanyForeignSystem($debtor_account_number, $id, $token)

Disassociate ForeignSystem with a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteCompanyForeignSystem($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteCompanyForeignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInterestForCompany**
> deleteInterestForCompany($token, $debtor_account_number, $body)

Ends the interest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The company's DebtorAccountNumber
$body = new \Membercare\Client\Model\InterestCategory(); // \Membercare\Client\Model\InterestCategory | 

try {
    $apiInstance->deleteInterestForCompany($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteInterestForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The company&#x27;s DebtorAccountNumber |
 **body** | [**\Membercare\Client\Model\InterestCategory**](../Model/InterestCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductionNumber**
> deleteProductionNumber($debtor_account_number, $registration_number_cvr, $id, $token)

Deletes a production number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$registration_number_cvr = "registration_number_cvr_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteProductionNumber($debtor_account_number, $registration_number_cvr, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteProductionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **registration_number_cvr** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationNumberCVR**
> deleteRegistrationNumberCVR($debtor_account_number, $id, $token)

Deletes a RegistrationNumber (CVR)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteRegistrationNumberCVR($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteRegistrationNumberCVR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationNumberNorwegianCompanyNumber**
> deleteRegistrationNumberNorwegianCompanyNumber($debtor_account_number, $id, $token)

Deletes a RegistrationNumber (Norwegian Company Number)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteRegistrationNumberNorwegianCompanyNumber($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteRegistrationNumberNorwegianCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationNumberRut**
> deleteRegistrationNumberRut($debtor_account_number, $id, $token)

Deletes a RegistrationNumber (RUT)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteRegistrationNumberRut($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteRegistrationNumberRut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationNumberSe**
> deleteRegistrationNumberSe($debtor_account_number, $id, $token)

Deletes a RegistrationNumber (SE)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteRegistrationNumberSe($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteRegistrationNumberSe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationNumberSwedishCompanyNumber**
> deleteRegistrationNumberSwedishCompanyNumber($debtor_account_number, $id, $token)

Deletes a RegistrationNumber (Swedish Company Number)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteRegistrationNumberSwedishCompanyNumber($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteRegistrationNumberSwedishCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationNumberVat**
> deleteRegistrationNumberVat($debtor_account_number, $id, $token)

Deletes a RegistrationNumber (VAT)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteRegistrationNumberVat($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteRegistrationNumberVat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoardMembershipsForCompany**
> \Membercare\Client\Model\BoardMembershipPagedResult getBoardMembershipsForCompany($debtor_account_number, $token, $only_valid, $include_addresses, $page, $page_size)

Get a paged result of boardmemberships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the company to get boardmemberships for.
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates whether or not to include historical boardmemberships.
$include_addresses = false; // bool | Indicates wheter or not to include addresses
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getBoardMembershipsForCompany($debtor_account_number, $token, $only_valid, $include_addresses, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getBoardMembershipsForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtorAccountNumber of the company to get boardmemberships for. |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to include historical boardmemberships. | [optional] [default to true]
 **include_addresses** | **bool**| Indicates wheter or not to include addresses | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BoardMembershipPagedResult**](../Model/BoardMembershipPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBusinessActivityCodes**
> \Membercare\Client\Model\BusinessActivityCodePagedResult getBusinessActivityCodes($token, $page, $page_size)

Get all Business Activity Codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getBusinessActivityCodes($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getBusinessActivityCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BusinessActivityCodePagedResult**](../Model/BusinessActivityCodePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompaniesByCompanyCategory**
> \Membercare\Client\Model\CompanyPagedResult getCompaniesByCompanyCategory($company_category_id, $token, $include_address_and_contact_info, $include_name_history, $page, $page_size)

Get all Companies with a specific category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_category_id = 789; // int | 
$token = "token_example"; // string | access token
$include_address_and_contact_info = true; // bool | 
$include_name_history = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCompaniesByCompanyCategory($company_category_id, $token, $include_address_and_contact_info, $include_name_history, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompaniesByCompanyCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_category_id** | **int**|  |
 **token** | **string**| access token |
 **include_address_and_contact_info** | **bool**|  | [optional]
 **include_name_history** | **bool**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyPagedResult**](../Model/CompanyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyCategories**
> \Membercare\Client\Model\CompanyCategoryPagedResult getCompanyCategories($token, $page, $page_size)

Get all Company Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCompanyCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyCategoryPagedResult**](../Model/CompanyCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyCloseReasons**
> \Membercare\Client\Model\CloseReason[] getCompanyCloseReasons($token)

Returns a list of CloseReasons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCompanyCloseReasons($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyCloseReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\CloseReason[]**](../Model/CloseReason.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyForeignSystem**
> \Membercare\Client\Model\Company getCompanyForeignSystem($debtor_account_number, $id, $token)

Get Companies via ForeignSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCompanyForeignSystem($debtor_account_number, $id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyForeignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyHierarchyCategories**
> \Membercare\Client\Model\CompanyHierarchyCategoryPagedResult getCompanyHierarchyCategories($token, $page, $page_size)

Gets a list of the companys hierarchy categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of elements to display per paged result.

try {
    $result = $apiInstance->getCompanyHierarchyCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyHierarchyCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of elements to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyHierarchyCategoryPagedResult**](../Model/CompanyHierarchyCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyHierarchyDown**
> \Membercare\Client\Model\CompanyHierarchyPagedResult getCompanyHierarchyDown($debtor_account_number, $token, $only_valid, $page, $page_size)

Gets a list of the companys hierarchy down related companies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The  debtor account number of the company
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates whether or not to only include valid hierarchy relations. Default is true
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of elements to display per paged result.

try {
    $result = $apiInstance->getCompanyHierarchyDown($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyHierarchyDown: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The  debtor account number of the company |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to only include valid hierarchy relations. Default is true | [optional] [default to true]
 **page** | **int**| Optional, represents the page you wish to see. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of elements to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyHierarchyPagedResult**](../Model/CompanyHierarchyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyHierarchyUp**
> \Membercare\Client\Model\CompanyHierarchyPagedResult getCompanyHierarchyUp($debtor_account_number, $token, $only_valid, $page, $page_size)

Gets a list of the companys hierarchy up related companies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The  debtor account number of the company
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates whether or not to only include valid hierarchy relations. Default is true
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of elements to display per paged result.

try {
    $result = $apiInstance->getCompanyHierarchyUp($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyHierarchyUp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The  debtor account number of the company |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to only include valid hierarchy relations. Default is true | [optional] [default to true]
 **page** | **int**| Optional, represents the page you wish to see. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of elements to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyHierarchyPagedResult**](../Model/CompanyHierarchyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanySubscriptions**
> \Membercare\Client\Model\Subscription[] getCompanySubscriptions($debtor_account_number, $token, $only_valid)

Get a companys subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtor account number of the person to get subscriptions for
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates whether or not to only include valid subscriptions.

try {
    $result = $apiInstance->getCompanySubscriptions($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanySubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtor account number of the person to get subscriptions for |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to only include valid subscriptions. | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldValuesForCompany**
> \Membercare\Client\Model\CustomFieldValuePagedResult getCustomFieldValuesForCompany($debtor_account_number, $token, $page, $page_size)

Retrieves a paged result of all CustomFieldValues for the company with the given DebtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | DebtorAccountNumber
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->getCustomFieldValuesForCompany($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCustomFieldValuesForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| DebtorAccountNumber |
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of invoices to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CustomFieldValuePagedResult**](../Model/CustomFieldValuePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterestsForCompany**
> \Membercare\Client\Model\InterestPagedResult getInterestsForCompany($debtor_account_number, $token, $only_valid, $page, $page_size)

Get the company's interests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The company's DebtorAccountNumber
$token = "token_example"; // string | access token
$only_valid = true; // bool | 
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of interests to display per paged result.

try {
    $result = $apiInstance->getInterestsForCompany($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getInterestsForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The company&#x27;s DebtorAccountNumber |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of interests to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\InterestPagedResult**](../Model/InterestPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipsForCompany**
> \Membercare\Client\Model\MembershipPagedResult getMembershipsForCompany($debtor_account_number, $token, $only_valid, $page, $page_size)

Get a paged result of memberships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the Company.
$token = "token_example"; // string | access token
$only_valid = true; // bool | Should previous and future memberships be included (default: NO)
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getMembershipsForCompany($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getMembershipsForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtorAccountNumber of the Company. |
 **token** | **string**| access token |
 **only_valid** | **bool**| Should previous and future memberships be included (default: NO) | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MembershipPagedResult**](../Model/MembershipPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductionNumbers**
> \Membercare\Client\Model\ProductionNumber[] getProductionNumbers($debtor_account_number, $registration_number_cvr, $token, $only_valid)

Gets production number by company debtor account number and a registration number cvr Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$registration_number_cvr = "registration_number_cvr_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getProductionNumbers($debtor_account_number, $registration_number_cvr, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getProductionNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **registration_number_cvr** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\ProductionNumber[]**](../Model/ProductionNumber.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationNumberCvr**
> \Membercare\Client\Model\RegistrationNumberCVR getRegistrationNumberCvr($debtor_account_number, $token, $only_valid)

Get current active CVR registration number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getRegistrationNumberCvr($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getRegistrationNumberCvr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\RegistrationNumberCVR**](../Model/RegistrationNumberCVR.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationNumberNorwegianCompanyNumber**
> \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber getRegistrationNumberNorwegianCompanyNumber($debtor_account_number, $token, $only_valid)

Get current active Norwegian Company Number registration number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getRegistrationNumberNorwegianCompanyNumber($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getRegistrationNumberNorwegianCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber**](../Model/RegistrationNumberNorwegianCompanyNumber.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationNumberRut**
> \Membercare\Client\Model\RegistrationNumberRUT[] getRegistrationNumberRut($debtor_account_number, $token, $only_valid)

Get current active RUT registration numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getRegistrationNumberRut($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getRegistrationNumberRut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\RegistrationNumberRUT[]**](../Model/RegistrationNumberRUT.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationNumberSe**
> \Membercare\Client\Model\RegistrationNumberSE[] getRegistrationNumberSe($debtor_account_number, $token, $only_valid)

Get current active SE registration numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getRegistrationNumberSe($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getRegistrationNumberSe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\RegistrationNumberSE[]**](../Model/RegistrationNumberSE.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationNumberSwedishCompanyNumber**
> \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber getRegistrationNumberSwedishCompanyNumber($debtor_account_number, $token, $only_valid)

Get current active Swedish Company registration number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getRegistrationNumberSwedishCompanyNumber($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getRegistrationNumberSwedishCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber**](../Model/RegistrationNumberSwedishCompanyNumber.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationNumberVat**
> \Membercare\Client\Model\RegistrationNumberVAT getRegistrationNumberVat($debtor_account_number, $token, $only_valid)

Gets current active VAT registration number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getRegistrationNumberVat($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getRegistrationNumberVat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\RegistrationNumberVAT**](../Model/RegistrationNumberVAT.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getValidCompanies**
> \Membercare\Client\Model\CompanyPagedResult getValidCompanies($token, $include_address_and_contact_info, $include_name_history, $include_custom_fields, $page, $page_size)

Get a paged result of companies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$include_address_and_contact_info = false; // bool | Indicates wheter or not to include address and contact informations. This applies to all referenced Persons, Companies and Organizations.
$include_name_history = false; // bool | 
$include_custom_fields = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getValidCompanies($token, $include_address_and_contact_info, $include_name_history, $include_custom_fields, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getValidCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **include_address_and_contact_info** | **bool**| Indicates wheter or not to include address and contact informations. This applies to all referenced Persons, Companies and Organizations. | [optional] [default to false]
 **include_name_history** | **bool**|  | [optional] [default to false]
 **include_custom_fields** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyPagedResult**](../Model/CompanyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCompany**
> patchCompany($token, $debtor_account_number, $body)

Patches a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\CompanyPatch(); // \Membercare\Client\Model\CompanyPatch | 

try {
    $apiInstance->patchCompany($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\CompanyPatch**](../Model/CompanyPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchCompanyPostalAddress**
> patchCompanyPostalAddress($token, $id, $debtor_account_number, $body)

Patch the postalAddress

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\PostalAddressPatch(); // \Membercare\Client\Model\PostalAddressPatch | 

try {
    $apiInstance->patchCompanyPostalAddress($token, $id, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchCompanyPostalAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\PostalAddressPatch**](../Model/PostalAddressPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchProductionNumber**
> patchProductionNumber($token, $debtor_account_number, $registration_number_cvr, $id, $body)

Patches a ProductionNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$registration_number_cvr = "registration_number_cvr_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\ProductionNumberPatch(); // \Membercare\Client\Model\ProductionNumberPatch | 

try {
    $apiInstance->patchProductionNumber($token, $debtor_account_number, $registration_number_cvr, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchProductionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **registration_number_cvr** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ProductionNumberPatch**](../Model/ProductionNumberPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRegistrationNumberCVR**
> patchRegistrationNumberCVR($token, $debtor_account_number, $id, $body)

Patch a RegistrationNumber (CVR)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberCVRPatch(); // \Membercare\Client\Model\RegistrationNumberCVRPatch | 

try {
    $apiInstance->patchRegistrationNumberCVR($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchRegistrationNumberCVR: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberCVRPatch**](../Model/RegistrationNumberCVRPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRegistrationNumberNorwegianCompanyNumber**
> patchRegistrationNumberNorwegianCompanyNumber($token, $debtor_account_number, $id, $body)

Patches a Norwegian Company Number registration number for a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumberPatch(); // \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumberPatch | 

try {
    $apiInstance->patchRegistrationNumberNorwegianCompanyNumber($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchRegistrationNumberNorwegianCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumberPatch**](../Model/RegistrationNumberNorwegianCompanyNumberPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRegistrationNumberRUT**
> patchRegistrationNumberRUT($token, $debtor_account_number, $id, $body)

Patches a RUT Registration number for a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberRUTPatch(); // \Membercare\Client\Model\RegistrationNumberRUTPatch | 

try {
    $apiInstance->patchRegistrationNumberRUT($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchRegistrationNumberRUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberRUTPatch**](../Model/RegistrationNumberRUTPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRegistrationNumberSE**
> patchRegistrationNumberSE($token, $debtor_account_number, $id, $body)

Patches a registration number (SE)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberSEPatch(); // \Membercare\Client\Model\RegistrationNumberSEPatch | 

try {
    $apiInstance->patchRegistrationNumberSE($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchRegistrationNumberSE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberSEPatch**](../Model/RegistrationNumberSEPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRegistrationNumberSwedishCompanyNumber**
> patchRegistrationNumberSwedishCompanyNumber($token, $debtor_account_number, $id, $body)

Patches a Swedish Company Number registration number for a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumberPatch(); // \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumberPatch | 

try {
    $apiInstance->patchRegistrationNumberSwedishCompanyNumber($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchRegistrationNumberSwedishCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberSwedishCompanyNumberPatch**](../Model/RegistrationNumberSwedishCompanyNumberPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRegistrationNumberVAT**
> patchRegistrationNumberVAT($token, $debtor_account_number, $id, $body)

Patches a VAT registration number for a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberVATPatch(); // \Membercare\Client\Model\RegistrationNumberVATPatch | 

try {
    $apiInstance->patchRegistrationNumberVAT($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->patchRegistrationNumberVAT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberVATPatch**](../Model/RegistrationNumberVATPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAddressesForCompany**
> \Membercare\Client\Model\PostalAddress[] postAddressesForCompany($token, $debtor_account_number, $body)

Takes a list of postaladdress, and inserts it for the given DebtorAccountNumber.  Note that the following values Must be assigned:      - debtorAccountNumber      - list of postaladdress (body object)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The Member this value should be present on
$body = array(new \Membercare\Client\Model\PostalAddress()); // \Membercare\Client\Model\PostalAddress[] | The list of postal address to be created

try {
    $result = $apiInstance->postAddressesForCompany($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postAddressesForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The Member this value should be present on |
 **body** | [**\Membercare\Client\Model\PostalAddress[]**](../Model/PostalAddress.md)| The list of postal address to be created | [optional]

### Return type

[**\Membercare\Client\Model\PostalAddress[]**](../Model/PostalAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBusinessActivityToProductionNumber**
> postBusinessActivityToProductionNumber($token, $debtor_account_number, $production_number, $body)

Inserts a businessActivity on the Production Number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$production_number = "production_number_example"; // string | 
$body = new \Membercare\Client\Model\BusinessActivity(); // \Membercare\Client\Model\BusinessActivity | 

try {
    $apiInstance->postBusinessActivityToProductionNumber($token, $debtor_account_number, $production_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postBusinessActivityToProductionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **production_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\BusinessActivity**](../Model/BusinessActivity.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBusinessActivityToRegistrationNumber**
> postBusinessActivityToRegistrationNumber($token, $debtor_account_number, $registration_number, $body)

Inserts a businessActivity on the RegistrationNumber Number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$registration_number = "registration_number_example"; // string | 
$body = new \Membercare\Client\Model\BusinessActivity(); // \Membercare\Client\Model\BusinessActivity | 

try {
    $apiInstance->postBusinessActivityToRegistrationNumber($token, $debtor_account_number, $registration_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postBusinessActivityToRegistrationNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **registration_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\BusinessActivity**](../Model/BusinessActivity.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompany**
> \Membercare\Client\Model\Company postCompany($token, $body, $use_automatic_debtor_account_number)

Creates a new Company. The properties debtorAccountNumber, name, nameHistory, businessNumbers, addresses, invoiceAddresses, readdressings and contacts must not be provided and will result in a BadRequest.  closeDate and closeReason are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\Company(); // \Membercare\Client\Model\Company | 
$use_automatic_debtor_account_number = true; // bool | 

try {
    $result = $apiInstance->postCompany($token, $body, $use_automatic_debtor_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\Company**](../Model/Company.md)|  | [optional]
 **use_automatic_debtor_account_number** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyForeignSystem**
> postCompanyForeignSystem($debtor_account_number, $id, $token, $external_id)

Associate ForeignSystem with a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token
$external_id = "external_id_example"; // string | 

try {
    $apiInstance->postCompanyForeignSystem($debtor_account_number, $id, $token, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompanyForeignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |
 **external_id** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyHierarchyDown**
> postCompanyHierarchyDown($token, $debtor_account_number, $body)

Creates a CompanyHierarchy where the Company in the provided CompanyHierarchy will be child.   In the provided CompanyHierarchy object it is enough to provide the 'debtorAccountNumber' property on the Company object.   In the provided CompanyHierarchy object it is enough to provide the 'id' property on the CompanyHierarchyCategory object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The  debtor account number of the company
$body = new \Membercare\Client\Model\CompanyHierarchy(); // \Membercare\Client\Model\CompanyHierarchy | The CompanyHierarchy to insert

try {
    $apiInstance->postCompanyHierarchyDown($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompanyHierarchyDown: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The  debtor account number of the company |
 **body** | [**\Membercare\Client\Model\CompanyHierarchy**](../Model/CompanyHierarchy.md)| The CompanyHierarchy to insert | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyHierarchyUp**
> postCompanyHierarchyUp($token, $debtor_account_number, $body)

Creates a CompanyHierarchy where the Company in the provided CompanyHierarchy will be parent.  In the provided CompanyHierarchy object it is enough to provide the 'debtorAccountNumber' property on the Company object.   In the provided CompanyHierarchy object it is enough to provide the 'id' property on the CompanyHierarchyCategory object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The  debtor account number of the company
$body = new \Membercare\Client\Model\CompanyHierarchy(); // \Membercare\Client\Model\CompanyHierarchy | The CompanyHierarchy to insert

try {
    $apiInstance->postCompanyHierarchyUp($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompanyHierarchyUp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The  debtor account number of the company |
 **body** | [**\Membercare\Client\Model\CompanyHierarchy**](../Model/CompanyHierarchy.md)| The CompanyHierarchy to insert | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyInvoiceAddress**
> postCompanyInvoiceAddress($token, $debtor_account_number, $body)

Create an invoice address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\InvoiceAddressLinkToCompany(); // \Membercare\Client\Model\InvoiceAddressLinkToCompany | 

try {
    $apiInstance->postCompanyInvoiceAddress($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompanyInvoiceAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\InvoiceAddressLinkToCompany**](../Model/InvoiceAddressLinkToCompany.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyReaddressing**
> postCompanyReaddressing($token, $debtor_account_number, $body)

Create a readdressing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\CompanyReAddressing(); // \Membercare\Client\Model\CompanyReAddressing | 

try {
    $apiInstance->postCompanyReaddressing($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompanyReaddressing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\CompanyReAddressing**](../Model/CompanyReAddressing.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanySearchCriteria**
> \Membercare\Client\Model\CompanyPagedResult postCompanySearchCriteria($token, $body, $page, $page_size)

Retrieves a list of companies that match criteria in request body, e.g. email domain name, website

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\SearchCompanyCriteriaPost(); // \Membercare\Client\Model\SearchCompanyCriteriaPost | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->postCompanySearchCriteria($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompanySearchCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\SearchCompanyCriteriaPost**](../Model/SearchCompanyCriteriaPost.md)|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CompanyPagedResult**](../Model/CompanyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyWorkListItem**
> \Membercare\Client\Model\CompanyWorkListItem postCompanyWorkListItem($token, $debtor_account_number, $body)

Will insert a worklist item with regards to the company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\CompanyWorkListItem(); // \Membercare\Client\Model\CompanyWorkListItem | 

try {
    $result = $apiInstance->postCompanyWorkListItem($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCompanyWorkListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\CompanyWorkListItem**](../Model/CompanyWorkListItem.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CompanyWorkListItem**](../Model/CompanyWorkListItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactsForCompany**
> \Membercare\Client\Model\Contact[] postContactsForCompany($token, $debtor_account_number, $body)

Takes a list of contacts, and inserts it for the given DebtorAccountNumber.  Note that the following values Must be assigned:      - debtorAccountNumber      - list of contacts (body object)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The Member this value should be present on
$body = array(new \Membercare\Client\Model\Contact()); // \Membercare\Client\Model\Contact[] | The list of contacts to be created

try {
    $result = $apiInstance->postContactsForCompany($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postContactsForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The Member this value should be present on |
 **body** | [**\Membercare\Client\Model\Contact[]**](../Model/Contact.md)| The list of contacts to be created | [optional]

### Return type

[**\Membercare\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomFieldValueForCompany**
> \Membercare\Client\Model\CustomFieldValue postCustomFieldValueForCompany($token, $debtor_account_number, $body)

Takes a CustomFieldValue, and inserts it for the given Debtor.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The Member this value should be present on
$body = new \Membercare\Client\Model\CustomFieldValue(); // \Membercare\Client\Model\CustomFieldValue | The actual Value to be inserted

try {
    $result = $apiInstance->postCustomFieldValueForCompany($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postCustomFieldValueForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The Member this value should be present on |
 **body** | [**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)| The actual Value to be inserted | [optional]

### Return type

[**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInterestForCompany**
> postInterestForCompany($token, $debtor_account_number, $body)

Saves the interest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The company's DebtorAccountNumber
$body = new \Membercare\Client\Model\InterestCategory(); // \Membercare\Client\Model\InterestCategory | 

try {
    $apiInstance->postInterestForCompany($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postInterestForCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The company&#x27;s DebtorAccountNumber |
 **body** | [**\Membercare\Client\Model\InterestCategory**](../Model/InterestCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipCompany**
> postMembershipCompany($token, $debtor_account_number, $body)

Creates a membership for a company    MembershipCategory, ApplicationDate, AffiliateDate, ApplicationStatus are mandatory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the company to add the provided Membership to
$body = new \Membercare\Client\Model\MembershipPost(); // \Membercare\Client\Model\MembershipPost | The Membership to insert

try {
    $apiInstance->postMembershipCompany($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postMembershipCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtorAccountNumber of the company to add the provided Membership to |
 **body** | [**\Membercare\Client\Model\MembershipPost**](../Model/MembershipPost.md)| The Membership to insert | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductionNumber**
> postProductionNumber($token, $debtor_account_number, $registration_number_cvr, $body)

Creates a ProductionNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$registration_number_cvr = "registration_number_cvr_example"; // string | 
$body = new \Membercare\Client\Model\ProductionNumberPost(); // \Membercare\Client\Model\ProductionNumberPost | 

try {
    $apiInstance->postProductionNumber($token, $debtor_account_number, $registration_number_cvr, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postProductionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **registration_number_cvr** | **string**|  |
 **body** | [**\Membercare\Client\Model\ProductionNumberPost**](../Model/ProductionNumberPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistrationNumberCvr**
> postRegistrationNumberCvr($token, $debtor_account_number, $body)

Post a RegistrationNumber (CVR)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberCVRPost(); // \Membercare\Client\Model\RegistrationNumberCVRPost | 

try {
    $apiInstance->postRegistrationNumberCvr($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postRegistrationNumberCvr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberCVRPost**](../Model/RegistrationNumberCVRPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistrationNumberNorwegianCompanyNumber**
> postRegistrationNumberNorwegianCompanyNumber($token, $debtor_account_number, $body)

Posts a RegistrationNumber Norwegian Company Number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber(); // \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber | 

try {
    $apiInstance->postRegistrationNumberNorwegianCompanyNumber($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postRegistrationNumberNorwegianCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber**](../Model/RegistrationNumberNorwegianCompanyNumber.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistrationNumberRut**
> postRegistrationNumberRut($token, $debtor_account_number, $body)

Post a RegistrationNumber (RUT)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberRUTPost(); // \Membercare\Client\Model\RegistrationNumberRUTPost | 

try {
    $apiInstance->postRegistrationNumberRut($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postRegistrationNumberRut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberRUTPost**](../Model/RegistrationNumberRUTPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistrationNumberSe**
> postRegistrationNumberSe($token, $debtor_account_number, $body)

Post a RegistrationNumber (SE)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberSEPost(); // \Membercare\Client\Model\RegistrationNumberSEPost | 

try {
    $apiInstance->postRegistrationNumberSe($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postRegistrationNumberSe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberSEPost**](../Model/RegistrationNumberSEPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistrationNumberSwedishCompanyNumber**
> postRegistrationNumberSwedishCompanyNumber($token, $debtor_account_number, $body)

Posts a RegistrationNumber Swedish Company Number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber(); // \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber | 

try {
    $apiInstance->postRegistrationNumberSwedishCompanyNumber($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postRegistrationNumberSwedishCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber**](../Model/RegistrationNumberSwedishCompanyNumber.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegistrationNumberVat**
> postRegistrationNumberVat($token, $debtor_account_number, $body)

Creates a RegistrationNumber (VAT)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberVATPost(); // \Membercare\Client\Model\RegistrationNumberVATPost | 

try {
    $apiInstance->postRegistrationNumberVat($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postRegistrationNumberVat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberVATPost**](../Model/RegistrationNumberVATPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubscriptionCompany**
> postSubscriptionCompany($token, $debtor_account_number, $body)

The Subscriber property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Company.Company, Membercare.REST.Models\" for companies  The Recipient property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Company.Company, Membercare.REST.Models\" for companies  The Payer property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Company.Company, Membercare.REST.Models\" for companies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\Subscription(); // \Membercare\Client\Model\Subscription | 

try {
    $apiInstance->postSubscriptionCompany($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->postSubscriptionCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\Subscription**](../Model/Subscription.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putBusinessActivity**
> \Membercare\Client\Model\BusinessActivity putBusinessActivity($token, $id, $body)

Updates a Business Activity's activityType, start and end

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\BusinessActivity(); // \Membercare\Client\Model\BusinessActivity | 

try {
    $result = $apiInstance->putBusinessActivity($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putBusinessActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\BusinessActivity**](../Model/BusinessActivity.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\BusinessActivity**](../Model/BusinessActivity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCompany**
> \Membercare\Client\Model\Company putCompany($token, $debtor_account_number, $body)

Updates a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\CompanyPut(); // \Membercare\Client\Model\CompanyPut | 

try {
    $result = $apiInstance->putCompany($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putCompany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\CompanyPut**](../Model/CompanyPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCompanyHierarchy**
> putCompanyHierarchy($token, $body)

Updates StartDate, EndDate and Description. Other properties are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\CompanyHierarchy(); // \Membercare\Client\Model\CompanyHierarchy | 

try {
    $apiInstance->putCompanyHierarchy($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putCompanyHierarchy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\CompanyHierarchy**](../Model/CompanyHierarchy.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductionNumber**
> putProductionNumber($token, $debtor_account_number, $registration_number_cvr, $id, $body)

Puts a ProductionNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$registration_number_cvr = "registration_number_cvr_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\ProductionNumberPut(); // \Membercare\Client\Model\ProductionNumberPut | 

try {
    $apiInstance->putProductionNumber($token, $debtor_account_number, $registration_number_cvr, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putProductionNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **registration_number_cvr** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ProductionNumberPut**](../Model/ProductionNumberPut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRegistrationNumberCvr**
> putRegistrationNumberCvr($token, $debtor_account_number, $id, $body)

Puts a RegistrationNumber (CVR)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberCVRPut(); // \Membercare\Client\Model\RegistrationNumberCVRPut | 

try {
    $apiInstance->putRegistrationNumberCvr($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putRegistrationNumberCvr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberCVRPut**](../Model/RegistrationNumberCVRPut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRegistrationNumberNorwegianCompanyNumber**
> putRegistrationNumberNorwegianCompanyNumber($token, $debtor_account_number, $body)

Puts a RegistrationNumber Norwegian Company Number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber(); // \Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber | 

try {
    $apiInstance->putRegistrationNumberNorwegianCompanyNumber($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putRegistrationNumberNorwegianCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberNorwegianCompanyNumber**](../Model/RegistrationNumberNorwegianCompanyNumber.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRegistrationNumberRut**
> putRegistrationNumberRut($token, $debtor_account_number, $id, $body)

Put a RegistrationNumber (RUT)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberRUTPut(); // \Membercare\Client\Model\RegistrationNumberRUTPut | 

try {
    $apiInstance->putRegistrationNumberRut($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putRegistrationNumberRut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberRUTPut**](../Model/RegistrationNumberRUTPut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRegistrationNumberSe**
> putRegistrationNumberSe($token, $debtor_account_number, $id, $body)

Put a RegistrationNumber (SE)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberSEPut(); // \Membercare\Client\Model\RegistrationNumberSEPut | 

try {
    $apiInstance->putRegistrationNumberSe($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putRegistrationNumberSe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberSEPut**](../Model/RegistrationNumberSEPut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRegistrationNumberSwedishCompanyNumber**
> putRegistrationNumberSwedishCompanyNumber($token, $debtor_account_number, $body)

Puts a RegistrationNumber (Swedish Company Number)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber(); // \Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber | 

try {
    $apiInstance->putRegistrationNumberSwedishCompanyNumber($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putRegistrationNumberSwedishCompanyNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberSwedishCompanyNumber**](../Model/RegistrationNumberSwedishCompanyNumber.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRegistrationNumberVat**
> putRegistrationNumberVat($token, $debtor_account_number, $id, $body)

Puts a VAT registration number for a Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\RegistrationNumberVATPut(); // \Membercare\Client\Model\RegistrationNumberVATPut | 

try {
    $apiInstance->putRegistrationNumberVat($token, $debtor_account_number, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->putRegistrationNumberVat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegistrationNumberVATPut**](../Model/RegistrationNumberVATPut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

