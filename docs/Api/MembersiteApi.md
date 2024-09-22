# Membercare\Client\MembersiteApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**boardmembershipCategoriesByOrganizationsApi**](MembersiteApi.md#boardmembershipcategoriesbyorganizationsapi) | **POST** /api/v1/membersite/boardFunctions/search | Search board functions by organization identifications.
[**customFieldTypesAndValuesForPerson**](MembersiteApi.md#customfieldtypesandvaluesforperson) | **GET** /api/v1/membersite/person/{debtorAccountNumber}/customFields/typesAndSelectedValues | Retrieves all CustomFieldTypes and selected values for the given debtor account number
[**customFieldTypesSearch**](MembersiteApi.md#customfieldtypessearch) | **POST** /api/v1/membersite/customFields/search/types | Gets all CustomFieldTypes for the given custom field definition seach criteria
[**getArrangmentParticipantByIdentificationKey**](MembersiteApi.md#getarrangmentparticipantbyidentificationkey) | **GET** /api/v1/membersite/arrangements/{identificationKey}/participant | Get event participant by identificationKey
[**getArrangmentParticipantListAccessStatus**](MembersiteApi.md#getarrangmentparticipantlistaccessstatus) | **GET** /api/v1/membersite/arrangements/{internalId}/participantlist/{debtorAccountNumber}/hasAccess | Get if the person with debtor account number has access the participant list of the arrangement
[**getAvailableChildMembershipCategoriesByDebtorAccountNumber**](MembersiteApi.md#getavailablechildmembershipcategoriesbydebtoraccountnumber) | **GET** /api/v1/membersite/myFamily/{debtorAccountNumber}/membershipCategories | 
[**getBoardMembershipsForPersonWithOrganizationsInHierarchy**](MembersiteApi.md#getboardmembershipsforpersonwithorganizationsinhierarchy) | **GET** /api/v1/membersite/persons/{debtorAccountNumber}/boardmembershipsWithOrganizationsInHierarchy | Get a paged result of boardmemberships with organizations in hierarchy.
[**getCompaniesForAddingEmploymentsToProfile**](MembersiteApi.md#getcompaniesforaddingemploymentstoprofile) | **GET** /api/v1/membersite/profile/employments/availableCompanies | Get Companies to choose from when adding employments to profile.
[**getCompaniesFromCompanyRegistryForAddingEmploymentsToProfile**](MembersiteApi.md#getcompaniesfromcompanyregistryforaddingemploymentstoprofile) | **GET** /api/v1/membersite/profile/employments/{countryCode}/availableCompanies | 
[**getExternalDonationTransactions**](MembersiteApi.md#getexternaldonationtransactions) | **GET** /api/v1/membersite/persons/{debtorAccountNumber}/externalDonationTransactions | Get external donation transactions by the given debtor account number
[**getFamilyRelationCategories**](MembersiteApi.md#getfamilyrelationcategories) | **GET** /api/v1/membersite/family/relationCategories | Gets FamilyRelationCategories.
[**getInternalDonationTransactions**](MembersiteApi.md#getinternaldonationtransactions) | **GET** /api/v1/membersite/persons/{debtorAccountNumber}/internalDonationTransactions | Get internal donation transactions by the given debtor account number
[**getMemberStatistics**](MembersiteApi.md#getmemberstatistics) | **POST** /api/v1/membersite/myOrganization/{debtorAccountNumber}/memberStatistics | Get membershipStatistics for &#x27;My organizations&#x27;. Based on the users data access in Membercare.
[**getMembersAndBoardMembersReceivingSmsAndEmail**](MembersiteApi.md#getmembersandboardmembersreceivingsmsandemail) | **POST** /api/v1/membersite/smsAndEmailRecipients/search | Gets members and board members receiving SMS and e-mail based on params given in the body.
[**getMyOrganizations**](MembersiteApi.md#getmyorganizations) | **GET** /api/v1/membersite/myOrganization/{debtorAccountNumber}/organizations | Get Organizations for &#x27;My organizations&#x27;. Based on the users data access in Membercare.
[**getOverlappingEmployments**](MembersiteApi.md#getoverlappingemployments) | **GET** /api/v1/membersite/employments/{employmentId}/overlapping | Get internal donation transactions by the given debtor account number
[**getPaymentGatewayNextOrderNumber**](MembersiteApi.md#getpaymentgatewaynextordernumber) | **GET** /api/v1/membersite/paymentGateway/nextOrderNumber | Returns an auto generated next unique order number for payment gateway.
[**getPersonAccessibleArrangementTemplates**](MembersiteApi.md#getpersonaccessiblearrangementtemplates) | **GET** /api/v1/membersite/persons/{debtorAccountNumber}/arrangementTemplates/accessible | Gets accessible arrangement templates for a person via boardmemberfunction with intersecting organizations
[**getPersonAccessibleArrangements**](MembersiteApi.md#getpersonaccessiblearrangements) | **GET** /api/v1/membersite/persons/{debtorAccountNumber}/arrangements/accessible | Gets accessible arrangements for a person via boardmemberfunctions with intersecting organizations
[**getPersonByOrganization**](MembersiteApi.md#getpersonbyorganization) | **GET** /api/v1/membersite/organizations/{organizationIdentification}/persons/accessible | Gets accessible persons using various measures via organization association
[**getPersonByOrganizationInHierarchy**](MembersiteApi.md#getpersonbyorganizationinhierarchy) | **GET** /api/v1/membersite/organizations/{organizationIdentification}/hierarchy/persons/accessible | Search persons in organization and the underlying hierarchy - Members and board members
[**getPersonsByDebtorAccountNumberAndBirthDateAsync**](MembersiteApi.md#getpersonsbydebtoraccountnumberandbirthdateasync) | **GET** /api/v1/membersite/persons/{debtorAccountNumber}/birthDate/{birthDate} | Search for persons with a specific debtorAccountNumber and birthDate
[**getPersonsWithBoardMembershipByOrganization**](MembersiteApi.md#getpersonswithboardmembershipbyorganization) | **GET** /api/v1/membersite/organizations/{organizationIdentification}/persons/hasBoardmembership | Search with search string from persons with board memberships in an organization
[**getReport**](MembersiteApi.md#getreport) | **GET** /api/v1/membersite/report/{id} | Get a report by its ID
[**getReportNumberOfViews**](MembersiteApi.md#getreportnumberofviews) | **GET** /api/v1/membersite/reportnumberofviews | Get number of report view
[**getReports**](MembersiteApi.md#getreports) | **GET** /api/v1/membersite/reports | 
[**getSalesOrganization**](MembersiteApi.md#getsalesorganization) | **GET** /api/v1/membersite/myInvoices/salesOrganization | Gets the sales organization and company
[**membershipMembersAndBalanceInMyOrganizationApi**](MembersiteApi.md#membershipmembersandbalanceinmyorganizationapi) | **POST** /api/v1/membersite/myOrganization/{debtorAccountNumber}/membersAndBalance | Get a list of membership members in &#x27;My organizations&#x27;. Based on the users data access in Membercare. Included is also the balance related to the Member.
[**membershipMembersAndKeyAffiliateDatesInMyOrganizationApi**](MembersiteApi.md#membershipmembersandkeyaffiliatedatesinmyorganizationapi) | **POST** /api/v1/membersite/myOrganization/{debtorAccountNumber}/membersAndKeyAffiliateDates | Get a paged result of membership members and key affiliate dates in &#x27;My organization&#x27;. Based on the users data access in Membercare.
[**membershipMembersInMyOrganizationApi**](MembersiteApi.md#membershipmembersinmyorganizationapi) | **GET** /api/v1/membersite/myOrganization/{debtorAccountNumber}/members | Get a paged result of membership members in &#x27;My organization&#x27;. Based on the users data access in Membercare.
[**membershipMembersWithDueAmount**](MembersiteApi.md#membershipmemberswithdueamount) | **POST** /api/v1/membersite/myOrganization/{debtorAccountNumber}/membersWithDueAmount | Get a list of membership members in &#x27;My organizations&#x27;. Based on the users data access in Membercare. Included is also the due amount related to the Member.
[**membersiteOrderStagingDataGetByShopOrderId**](MembersiteApi.md#membersiteorderstagingdatagetbyshoporderid) | **GET** /api/v1/membersite/MembersiteOrderStagingData/{shopOrderId} | 
[**membersiteOrderStagingDataInsert**](MembersiteApi.md#membersiteorderstagingdatainsert) | **POST** /api/v1/membersite/MembersiteOrderStagingData | 
[**patchMembersiteOrderStagingData**](MembersiteApi.md#patchmembersiteorderstagingdata) | **PATCH** /api/v1/membersite/MembersiteOrderStagingData/{shopOrderId} | 
[**postBoardMembershipSearchCriteria**](MembersiteApi.md#postboardmembershipsearchcriteria) | **POST** /api/v1/membersite/myOrganization/search/boardMembers | Get a list of board members based on given search criteria
[**postCalculatedFeeServices**](MembersiteApi.md#postcalculatedfeeservices) | **POST** /api/v1/membersite/fee/membershipCategories/transactions | Calculate individual prices for memberships by membership category
[**postInvoicePayments**](MembersiteApi.md#postinvoicepayments) | **POST** /api/v1/membersite/invoices/payments | 
[**postMembershipsPurchase**](MembersiteApi.md#postmembershipspurchase) | **POST** /api/v1/membersite/membership/purchase | Purchase memberships
[**postRegisterMember**](MembersiteApi.md#postregistermember) | **POST** /api/v1/membersite/membership/registermember | Register memberships
[**postReportServiceAccessLog**](MembersiteApi.md#postreportserviceaccesslog) | **POST** /api/v1/membersite/postreportserviceaccesslog | Log an attempted access to a ReportService
[**smsRecipientsByOrganizations**](MembersiteApi.md#smsrecipientsbyorganizations) | **POST** /api/v1/membersite/smsRecipients/search | Gets membership members of the organization given by a Organization identification number.

# **boardmembershipCategoriesByOrganizationsApi**
> \Membercare\Client\Model\BoardFunctionPagedResult boardmembershipCategoriesByOrganizationsApi($token, $body, $page, $page_size)

Search board functions by organization identifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array("body_example"); // string[] | 
$page = 1; // int | Page number
$page_size = 50; // int | Number of items in a page

try {
    $result = $apiInstance->boardmembershipCategoriesByOrganizationsApi($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->boardmembershipCategoriesByOrganizationsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **page_size** | **int**| Number of items in a page | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BoardFunctionPagedResult**](../Model/BoardFunctionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldTypesAndValuesForPerson**
> \Membercare\Client\Model\CustomFieldDefinitionsAndSelectedValues customFieldTypesAndValuesForPerson($debtor_account_number, $token, $saved_only)

Retrieves all CustomFieldTypes and selected values for the given debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | Debtor account number
$token = "token_example"; // string | access token
$saved_only = false; // bool | Only saved custom field values for the person and their definitions to be returned

try {
    $result = $apiInstance->customFieldTypesAndValuesForPerson($debtor_account_number, $token, $saved_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->customFieldTypesAndValuesForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| Debtor account number |
 **token** | **string**| access token |
 **saved_only** | **bool**| Only saved custom field values for the person and their definitions to be returned | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\CustomFieldDefinitionsAndSelectedValues**](../Model/CustomFieldDefinitionsAndSelectedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldTypesSearch**
> \Membercare\Client\Model\CustomFieldDefinitionsAndSelectedValues customFieldTypesSearch($token, $body)

Gets all CustomFieldTypes for the given custom field definition seach criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\CustomFieldDefinitionSearchCriteria(); // \Membercare\Client\Model\CustomFieldDefinitionSearchCriteria | 

try {
    $result = $apiInstance->customFieldTypesSearch($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->customFieldTypesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\CustomFieldDefinitionSearchCriteria**](../Model/CustomFieldDefinitionSearchCriteria.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CustomFieldDefinitionsAndSelectedValues**](../Model/CustomFieldDefinitionsAndSelectedValues.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangmentParticipantByIdentificationKey**
> \Membercare\Client\Model\Participant getArrangmentParticipantByIdentificationKey($identification_key, $token)

Get event participant by identificationKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identification_key = "identification_key_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangmentParticipantByIdentificationKey($identification_key, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getArrangmentParticipantByIdentificationKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identification_key** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Participant**](../Model/Participant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangmentParticipantListAccessStatus**
> bool getArrangmentParticipantListAccessStatus($internal_id, $debtor_account_number, $token)

Get if the person with debtor account number has access the participant list of the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangmentParticipantListAccessStatus($internal_id, $debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getArrangmentParticipantListAccessStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableChildMembershipCategoriesByDebtorAccountNumber**
> \Membercare\Client\Model\MembershipCategoryPagedResult getAvailableChildMembershipCategoriesByDebtorAccountNumber($debtor_account_number, $token, $page, $page_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getAvailableChildMembershipCategoriesByDebtorAccountNumber($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getAvailableChildMembershipCategoriesByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MembershipCategoryPagedResult**](../Model/MembershipCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoardMembershipsForPersonWithOrganizationsInHierarchy**
> \Membercare\Client\Model\BoardMembershipWithOrganizationsInHierarchyPagedResult getBoardMembershipsForPersonWithOrganizationsInHierarchy($debtor_account_number, $token, $only_valid, $include_addresses, $page, $page_size)

Get a paged result of boardmemberships with organizations in hierarchy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the person to get boardmemberships for.
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates whether or not to include historical boardmemberships.
$include_addresses = false; // bool | Indicates wheter or not to include addresses
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getBoardMembershipsForPersonWithOrganizationsInHierarchy($debtor_account_number, $token, $only_valid, $include_addresses, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getBoardMembershipsForPersonWithOrganizationsInHierarchy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtorAccountNumber of the person to get boardmemberships for. |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to include historical boardmemberships. | [optional] [default to true]
 **include_addresses** | **bool**| Indicates wheter or not to include addresses | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BoardMembershipWithOrganizationsInHierarchyPagedResult**](../Model/BoardMembershipWithOrganizationsInHierarchyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompaniesForAddingEmploymentsToProfile**
> \Membercare\Client\Model\CompanyPagedResult getCompaniesForAddingEmploymentsToProfile($token, $search_string, $page, $page_size)

Get Companies to choose from when adding employments to profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$search_string = ""; // string | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCompaniesForAddingEmploymentsToProfile($token, $search_string, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getCompaniesForAddingEmploymentsToProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **search_string** | **string**|  | [optional]
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

# **getCompaniesFromCompanyRegistryForAddingEmploymentsToProfile**
> \Membercare\Client\Model\Company[] getCompaniesFromCompanyRegistryForAddingEmploymentsToProfile($country_code, $token, $search_string, $page_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$country_code = "country_code_example"; // string | 
$token = "token_example"; // string | access token
$search_string = ""; // string | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCompaniesFromCompanyRegistryForAddingEmploymentsToProfile($country_code, $token, $search_string, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getCompaniesFromCompanyRegistryForAddingEmploymentsToProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**|  |
 **token** | **string**| access token |
 **search_string** | **string**|  | [optional]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\Company[]**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalDonationTransactions**
> \Membercare\Client\Model\DonationTransaction[] getExternalDonationTransactions($debtor_account_number, $token)

Get external donation transactions by the given debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getExternalDonationTransactions($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getExternalDonationTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\DonationTransaction[]**](../Model/DonationTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFamilyRelationCategories**
> \Membercare\Client\Model\FamilyRelationCategory[] getFamilyRelationCategories($token)

Gets FamilyRelationCategories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getFamilyRelationCategories($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getFamilyRelationCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\FamilyRelationCategory[]**](../Model/FamilyRelationCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInternalDonationTransactions**
> \Membercare\Client\Model\DonationTransaction[] getInternalDonationTransactions($debtor_account_number, $token)

Get internal donation transactions by the given debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getInternalDonationTransactions($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getInternalDonationTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\DonationTransaction[]**](../Model/DonationTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberStatistics**
> \Membercare\Client\Model\MembershipStatistics[] getMemberStatistics($token, $debtor_account_number, $body, $from_date)

Get membershipStatistics for 'My organizations'. Based on the users data access in Membercare.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = array(56); // int[] | 
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getMemberStatistics($token, $debtor_account_number, $body, $from_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getMemberStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**int[]**](../Model/int.md)|  | [optional]
 **from_date** | **\DateTime**|  | [optional]

### Return type

[**\Membercare\Client\Model\MembershipStatistics[]**](../Model/MembershipStatistics.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembersAndBoardMembersReceivingSmsAndEmail**
> \Membercare\Client\Model\OrganizationsSmsAndEmailReceiversInfo[] getMembersAndBoardMembersReceivingSmsAndEmail($token, $body)

Gets members and board members receiving SMS and e-mail based on params given in the body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\MyOrganizationSendSmsAndEmailParams(); // \Membercare\Client\Model\MyOrganizationSendSmsAndEmailParams | 

try {
    $result = $apiInstance->getMembersAndBoardMembersReceivingSmsAndEmail($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getMembersAndBoardMembersReceivingSmsAndEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\MyOrganizationSendSmsAndEmailParams**](../Model/MyOrganizationSendSmsAndEmailParams.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\OrganizationsSmsAndEmailReceiversInfo[]**](../Model/OrganizationsSmsAndEmailReceiversInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyOrganizations**
> \Membercare\Client\Model\OrganizationPagedResult getMyOrganizations($debtor_account_number, $token, $page, $page_size, $include_geographic_districts)

Get Organizations for 'My organizations'. Based on the users data access in Membercare.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 
$include_geographic_districts = false; // bool | Will include electoral Districts in the result

try {
    $result = $apiInstance->getMyOrganizations($debtor_account_number, $token, $page, $page_size, $include_geographic_districts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getMyOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]
 **include_geographic_districts** | **bool**| Will include electoral Districts in the result | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\OrganizationPagedResult**](../Model/OrganizationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOverlappingEmployments**
> \Membercare\Client\Model\Employment[] getOverlappingEmployments($employment_id, $token)

Get internal donation transactions by the given debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$employment_id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getOverlappingEmployments($employment_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getOverlappingEmployments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employment_id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Employment[]**](../Model/Employment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentGatewayNextOrderNumber**
> \Membercare\Client\Model\NextOrderNumber getPaymentGatewayNextOrderNumber($token)

Returns an auto generated next unique order number for payment gateway.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPaymentGatewayNextOrderNumber($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getPaymentGatewayNextOrderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\NextOrderNumber**](../Model/NextOrderNumber.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonAccessibleArrangementTemplates**
> \Membercare\Client\Model\PersonAccessibleArrangementTemplatePagedResult getPersonAccessibleArrangementTemplates($debtor_account_number, $token, $board_member_category_roles, $only_ids, $page, $page_size)

Gets accessible arrangement templates for a person via boardmemberfunction with intersecting organizations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The members debtor account number
$token = "token_example"; // string | access token
$board_member_category_roles = 789; // int | Flags enum BoardMemberCategoryRoles integer value
$only_ids = true; // bool | Omits the arrangement in the result if true
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonAccessibleArrangementTemplates($debtor_account_number, $token, $board_member_category_roles, $only_ids, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getPersonAccessibleArrangementTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The members debtor account number |
 **token** | **string**| access token |
 **board_member_category_roles** | **int**| Flags enum BoardMemberCategoryRoles integer value | [optional]
 **only_ids** | **bool**| Omits the arrangement in the result if true | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonAccessibleArrangementTemplatePagedResult**](../Model/PersonAccessibleArrangementTemplatePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonAccessibleArrangements**
> \Membercare\Client\Model\PersonAccessibleArrangementPagedResult getPersonAccessibleArrangements($debtor_account_number, $token, $board_member_category_roles, $web_enabled, $only_ids, $exclude_html_text, $page, $page_size)

Gets accessible arrangements for a person via boardmemberfunctions with intersecting organizations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The members debtor account number
$token = "token_example"; // string | access token
$board_member_category_roles = 789; // int | Flags enum BoardMemberCategoryRoles integer value
$web_enabled = true; // bool | Applicable arrangements with this value or any if omitted
$only_ids = true; // bool | Omits the arrangement in the result if true
$exclude_html_text = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonAccessibleArrangements($debtor_account_number, $token, $board_member_category_roles, $web_enabled, $only_ids, $exclude_html_text, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getPersonAccessibleArrangements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The members debtor account number |
 **token** | **string**| access token |
 **board_member_category_roles** | **int**| Flags enum BoardMemberCategoryRoles integer value | [optional]
 **web_enabled** | **bool**| Applicable arrangements with this value or any if omitted | [optional]
 **only_ids** | **bool**| Omits the arrangement in the result if true | [optional]
 **exclude_html_text** | **bool**|  | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonAccessibleArrangementPagedResult**](../Model/PersonAccessibleArrangementPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonByOrganization**
> \Membercare\Client\Model\PersonPagedResult getPersonByOrganization($organization_identification, $token, $search_string, $only_valid, $page, $page_size)

Gets accessible persons using various measures via organization association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | The organizations identification
$token = "token_example"; // string | access token
$search_string = "search_string_example"; // string | Narrow result to persons containing this in fullname
$only_valid = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonByOrganization($organization_identification, $token, $search_string, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getPersonByOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| The organizations identification |
 **token** | **string**| access token |
 **search_string** | **string**| Narrow result to persons containing this in fullname | [optional]
 **only_valid** | **bool**|  | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonPagedResult**](../Model/PersonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonByOrganizationInHierarchy**
> \Membercare\Client\Model\PersonPagedResult getPersonByOrganizationInHierarchy($organization_identification, $token, $search_string, $page, $page_size)

Search persons in organization and the underlying hierarchy - Members and board members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | The organizations identification
$token = "token_example"; // string | access token
$search_string = "search_string_example"; // string | Narrow result to persons containing this in fullname
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonByOrganizationInHierarchy($organization_identification, $token, $search_string, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getPersonByOrganizationInHierarchy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| The organizations identification |
 **token** | **string**| access token |
 **search_string** | **string**| Narrow result to persons containing this in fullname | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonPagedResult**](../Model/PersonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonsByDebtorAccountNumberAndBirthDateAsync**
> \Membercare\Client\Model\Person[] getPersonsByDebtorAccountNumberAndBirthDateAsync($debtor_account_number, $birth_date, $token)

Search for persons with a specific debtorAccountNumber and birthDate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$birth_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPersonsByDebtorAccountNumberAndBirthDateAsync($debtor_account_number, $birth_date, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getPersonsByDebtorAccountNumberAndBirthDateAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **birth_date** | **\DateTime**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Person[]**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonsWithBoardMembershipByOrganization**
> \Membercare\Client\Model\PersonPagedResult getPersonsWithBoardMembershipByOrganization($organization_identification, $token, $search_string, $only_valid, $page, $page_size)

Search with search string from persons with board memberships in an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | The organizations identification
$token = "token_example"; // string | access token
$search_string = "search_string_example"; // string | Narrow result to persons containing this in fullname
$only_valid = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonsWithBoardMembershipByOrganization($organization_identification, $token, $search_string, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getPersonsWithBoardMembershipByOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| The organizations identification |
 **token** | **string**| access token |
 **search_string** | **string**| Narrow result to persons containing this in fullname | [optional]
 **only_valid** | **bool**|  | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonPagedResult**](../Model/PersonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReport**
> \Membercare\Client\Model\ReportService getReport($id, $token)

Get a report by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the report
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getReport($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the report |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ReportService**](../Model/ReportService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportNumberOfViews**
> \Membercare\Client\Model\ReportServiceAccessLogViews getReportNumberOfViews($token, $seconds_ago)

Get number of report view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$seconds_ago = 789; // int | Number of seconds back in time that views are included for count

try {
    $result = $apiInstance->getReportNumberOfViews($token, $seconds_ago);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getReportNumberOfViews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **seconds_ago** | **int**| Number of seconds back in time that views are included for count | [optional]

### Return type

[**\Membercare\Client\Model\ReportServiceAccessLogViews**](../Model/ReportServiceAccessLogViews.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReports**
> \Membercare\Client\Model\ReportService[] getReports($token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getReports($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ReportService[]**](../Model/ReportService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesOrganization**
> \Membercare\Client\Model\Company getSalesOrganization($token)

Gets the sales organization and company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getSalesOrganization($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->getSalesOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Company**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipMembersAndBalanceInMyOrganizationApi**
> \Membercare\Client\Model\MembershipAndBalance[] membershipMembersAndBalanceInMyOrganizationApi($token, $debtor_account_number, $body, $valid_on)

Get a list of membership members in 'My organizations'. Based on the users data access in Membercare. Included is also the balance related to the Member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = array(56); // int[] | 
$valid_on = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->membershipMembersAndBalanceInMyOrganizationApi($token, $debtor_account_number, $body, $valid_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->membershipMembersAndBalanceInMyOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**int[]**](../Model/int.md)|  | [optional]
 **valid_on** | **\DateTime**|  | [optional]

### Return type

[**\Membercare\Client\Model\MembershipAndBalance[]**](../Model/MembershipAndBalance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipMembersAndKeyAffiliateDatesInMyOrganizationApi**
> \Membercare\Client\Model\MembershipAndKeyAffiliateDatesPagedResult membershipMembersAndKeyAffiliateDatesInMyOrganizationApi($token, $debtor_account_number, $body, $valid_on, $page, $page_size)

Get a paged result of membership members and key affiliate dates in 'My organization'. Based on the users data access in Membercare.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | /
$body = array(56); // int[] | 
$valid_on = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipMembersAndKeyAffiliateDatesInMyOrganizationApi($token, $debtor_account_number, $body, $valid_on, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->membershipMembersAndKeyAffiliateDatesInMyOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| / |
 **body** | [**int[]**](../Model/int.md)|  | [optional]
 **valid_on** | **\DateTime**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MembershipAndKeyAffiliateDatesPagedResult**](../Model/MembershipAndKeyAffiliateDatesPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipMembersInMyOrganizationApi**
> \Membercare\Client\Model\MembershipPagedResult membershipMembersInMyOrganizationApi($debtor_account_number, $token, $valid_on, $page, $page_size)

Get a paged result of membership members in 'My organization'. Based on the users data access in Membercare.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$valid_on = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipMembersInMyOrganizationApi($debtor_account_number, $token, $valid_on, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->membershipMembersInMyOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **valid_on** | **\DateTime**|  | [optional]
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

# **membershipMembersWithDueAmount**
> \Membercare\Client\Model\MembershipAndDueAmount[] membershipMembersWithDueAmount($token, $debtor_account_number, $body, $valid_on)

Get a list of membership members in 'My organizations'. Based on the users data access in Membercare. Included is also the due amount related to the Member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = array(56); // int[] | 
$valid_on = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->membershipMembersWithDueAmount($token, $debtor_account_number, $body, $valid_on);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->membershipMembersWithDueAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**int[]**](../Model/int.md)|  | [optional]
 **valid_on** | **\DateTime**|  | [optional]

### Return type

[**\Membercare\Client\Model\MembershipAndDueAmount[]**](../Model/MembershipAndDueAmount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersiteOrderStagingDataGetByShopOrderId**
> \Membercare\Client\Model\MembersiteOrderStagingData membersiteOrderStagingDataGetByShopOrderId($shop_order_id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$shop_order_id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->membersiteOrderStagingDataGetByShopOrderId($shop_order_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->membersiteOrderStagingDataGetByShopOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shop_order_id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\MembersiteOrderStagingData**](../Model/MembersiteOrderStagingData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membersiteOrderStagingDataInsert**
> \Membercare\Client\Model\MembersiteOrderStagingData membersiteOrderStagingDataInsert($token, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\MembersiteOrderStagingData(); // \Membercare\Client\Model\MembersiteOrderStagingData | 

try {
    $result = $apiInstance->membersiteOrderStagingDataInsert($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->membersiteOrderStagingDataInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\MembersiteOrderStagingData**](../Model/MembersiteOrderStagingData.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\MembersiteOrderStagingData**](../Model/MembersiteOrderStagingData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchMembersiteOrderStagingData**
> \Membercare\Client\Model\MembersiteOrderStagingData patchMembersiteOrderStagingData($token, $shop_order_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$shop_order_id = 789; // int | 
$body = new \Membercare\Client\Model\MembersiteOrderStagingDataPatch(); // \Membercare\Client\Model\MembersiteOrderStagingDataPatch | 

try {
    $result = $apiInstance->patchMembersiteOrderStagingData($token, $shop_order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->patchMembersiteOrderStagingData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **shop_order_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\MembersiteOrderStagingDataPatch**](../Model/MembersiteOrderStagingDataPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\MembersiteOrderStagingData**](../Model/MembersiteOrderStagingData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBoardMembershipSearchCriteria**
> \Membercare\Client\Model\BoardMembershipPagedResult postBoardMembershipSearchCriteria($token, $body, $page, $page_size)

Get a list of board members based on given search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\BoardMembershipSearchCriteria(); // \Membercare\Client\Model\BoardMembershipSearchCriteria | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->postBoardMembershipSearchCriteria($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->postBoardMembershipSearchCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\BoardMembershipSearchCriteria**](../Model/BoardMembershipSearchCriteria.md)|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BoardMembershipPagedResult**](../Model/BoardMembershipPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCalculatedFeeServices**
> \Membercare\Client\Model\FeeCalculatorResult[] postCalculatedFeeServices($token, $body)

Calculate individual prices for memberships by membership category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\FeeCalculatorParams(); // \Membercare\Client\Model\FeeCalculatorParams | 

try {
    $result = $apiInstance->postCalculatedFeeServices($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->postCalculatedFeeServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\FeeCalculatorParams**](../Model/FeeCalculatorParams.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\FeeCalculatorResult[]**](../Model/FeeCalculatorResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInvoicePayments**
> \Membercare\Client\Model\Payment[] postInvoicePayments($token, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\InvoicePaymentParams(); // \Membercare\Client\Model\InvoicePaymentParams | 

try {
    $result = $apiInstance->postInvoicePayments($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->postInvoicePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\InvoicePaymentParams**](../Model/InvoicePaymentParams.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Payment[]**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipsPurchase**
> postMembershipsPurchase($token, $body)

Purchase memberships

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\MembershipPurchaseParams(); // \Membercare\Client\Model\MembershipPurchaseParams | 

try {
    $apiInstance->postMembershipsPurchase($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->postMembershipsPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\MembershipPurchaseParams**](../Model/MembershipPurchaseParams.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRegisterMember**
> postRegisterMember($token, $body)

Register memberships

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\MembershipPurchaseParams(); // \Membercare\Client\Model\MembershipPurchaseParams | 

try {
    $apiInstance->postRegisterMember($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->postRegisterMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\MembershipPurchaseParams**](../Model/MembershipPurchaseParams.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReportServiceAccessLog**
> postReportServiceAccessLog($token, $body)

Log an attempted access to a ReportService

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ReportServiceAccessLogPost(); // \Membercare\Client\Model\ReportServiceAccessLogPost | Object containing whom is viewing and what report is viewed

try {
    $apiInstance->postReportServiceAccessLog($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->postReportServiceAccessLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ReportServiceAccessLogPost**](../Model/ReportServiceAccessLogPost.md)| Object containing whom is viewing and what report is viewed | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **smsRecipientsByOrganizations**
> \Membercare\Client\Model\SmsSenderOrganizationInfo[] smsRecipientsByOrganizations($token, $body)

Gets membership members of the organization given by a Organization identification number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembersiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array("body_example"); // string[] | The list of organization identification numbers

try {
    $result = $apiInstance->smsRecipientsByOrganizations($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersiteApi->smsRecipientsByOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**string[]**](../Model/string.md)| The list of organization identification numbers | [optional]

### Return type

[**\Membercare\Client\Model\SmsSenderOrganizationInfo[]**](../Model/SmsSenderOrganizationInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

