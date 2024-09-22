# Membercare\Client\OrganizationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1OrganizationsOrganizationIdentificationLocalFilesDelete**](OrganizationApi.md#apiv1organizationsorganizationidentificationlocalfilesdelete) | **DELETE** /api/v1/organizations/{organizationIdentification}/localFiles | 
[**apiV1OrganizationsOrganizationIdentificationLocalFilesGet**](OrganizationApi.md#apiv1organizationsorganizationidentificationlocalfilesget) | **GET** /api/v1/organizations/{organizationIdentification}/localFiles | 
[**apiV1OrganizationsOrganizationIdentificationLocalFilesPost**](OrganizationApi.md#apiv1organizationsorganizationidentificationlocalfilespost) | **POST** /api/v1/organizations/{organizationIdentification}/localFiles | 
[**boardmemberByOrganizationApi**](OrganizationApi.md#boardmemberbyorganizationapi) | **GET** /api/v1/organizations/{organizationIdentification}/boardMembers | Gets boardmembers in the organization given by a Organization identification number.
[**boardmembersByOrganizationsApi**](OrganizationApi.md#boardmembersbyorganizationsapi) | **POST** /api/v1/organizations/boardMembers/search | Search board functions by organization identifications.
[**getAllBoardMemberships**](OrganizationApi.md#getallboardmemberships) | **GET** /api/v1/organizations/boardMembers | Gets ALL boardmembers in the system.
[**getBoardFunctionLimits**](OrganizationApi.md#getboardfunctionlimits) | **GET** /api/v1/organizations/{organizationIdentification}/boardFunctionLimits | Get limits for all boards in an organization
[**getBoardFunctions**](OrganizationApi.md#getboardfunctions) | **GET** /api/v1/organizations/boards/boardFunctions | Get all board functions
[**getBoardFunctionsByOrganization**](OrganizationApi.md#getboardfunctionsbyorganization) | **GET** /api/v1/organizations/{organizationIdentification}/boardFunctions | Get board functions of an organization
[**getBoardsByOrganization**](OrganizationApi.md#getboardsbyorganization) | **GET** /api/v1/organizations/{organizationIdentification}/boards | Get all boards of an organization
[**getCustomFieldValuesForOrganization**](OrganizationApi.md#getcustomfieldvaluesfororganization) | **GET** /api/v1/organizations/{organizationIdentification}/customFields/values | Retrieves a paged result of all CustomFieldValues for the organization with given organizationIdentification
[**getOrganizationsByCategory**](OrganizationApi.md#getorganizationsbycategory) | **GET** /api/v1/organizations/categories/{id}/organizations | Get a paged result of Organizations with a given organization categoryid.
[**membershipCategoryByOrganizationApi**](OrganizationApi.md#membershipcategorybyorganizationapi) | **GET** /api/v1/organizations/{organizationIdentification}/memberships/categories | Get a paged result of membership categories.   With possibility to only get those with a given category groupid or to a given organization by identificationnumber.
[**membershipCategoryByOrganizations**](OrganizationApi.md#membershipcategorybyorganizations) | **POST** /api/v1/organizations/memberships/categories | Get a paged result of membership categories.   With possibility to only get those with a given category groupid or to a given organization by identificationnumber.
[**membershipMembersByOrganizationApi**](OrganizationApi.md#membershipmembersbyorganizationapi) | **GET** /api/v1/organizations/{organizationIdentification}/members | Gets membership members of the organization given by a Organization identification number.
[**organizationApi**](OrganizationApi.md#organizationapi) | **GET** /api/v1/organizations/{organizationIdentification} | Get an Organization by the given Organization identification number.
[**organizationCategoriesApi**](OrganizationApi.md#organizationcategoriesapi) | **GET** /api/v1/organizations/categories | Gets a paged result of Organization categories.
[**organizationsApi**](OrganizationApi.md#organizationsapi) | **GET** /api/v1/organizations | Get a paged result of Organizations.
[**organizationsByDownRelatedOrganizationApi**](OrganizationApi.md#organizationsbydownrelatedorganizationapi) | **GET** /api/v1/organizations/{organizationIdentification}/childOrganizations | Get a paged result of Organizations.  With possibility to only get those with a given organization categoryid.
[**organizationsByUpRelatedOrganizationApi**](OrganizationApi.md#organizationsbyuprelatedorganizationapi) | **GET** /api/v1/organizations/{organizationIdentification}/parentOrganizations | Get a paged result of Organizations.  With possibility to only get those with a given organization categoryid.
[**patchOrganization**](OrganizationApi.md#patchorganization) | **PATCH** /api/v1/organizations/{organizationIdentification} | 
[**postCustomFieldValuesForOrganization**](OrganizationApi.md#postcustomfieldvaluesfororganization) | **POST** /api/v1/organizations/{organizationIdentification}/customFields/values | Takes a CustomFieldValue, and inserts it for the given Debtor.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned
[**postOrganization**](OrganizationApi.md#postorganization) | **POST** /api/v1/organizations | 
[**postOrganizationMembershipCategory**](OrganizationApi.md#postorganizationmembershipcategory) | **POST** /api/v1/organizations/{organizationIdentification}/memberships/categories | 
[**postOrganizationsHierarchiesSearch**](OrganizationApi.md#postorganizationshierarchiessearch) | **POST** /api/v1/organizations/hierarchies/search | Returns OrganizationHierarchies where the child and parent Organization has the given OrganizationCategories

# **apiV1OrganizationsOrganizationIdentificationLocalFilesDelete**
> apiV1OrganizationsOrganizationIdentificationLocalFilesDelete($organization_identification, $token, $file_name)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | 
$token = "token_example"; // string | access token
$file_name = "file_name_example"; // string | 

try {
    $apiInstance->apiV1OrganizationsOrganizationIdentificationLocalFilesDelete($organization_identification, $token, $file_name);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV1OrganizationsOrganizationIdentificationLocalFilesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**|  |
 **token** | **string**| access token |
 **file_name** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1OrganizationsOrganizationIdentificationLocalFilesGet**
> \Membercare\Client\Model\LocalFileEntryGet[] apiV1OrganizationsOrganizationIdentificationLocalFilesGet($organization_identification, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->apiV1OrganizationsOrganizationIdentificationLocalFilesGet($organization_identification, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV1OrganizationsOrganizationIdentificationLocalFilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\LocalFileEntryGet[]**](../Model/LocalFileEntryGet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1OrganizationsOrganizationIdentificationLocalFilesPost**
> apiV1OrganizationsOrganizationIdentificationLocalFilesPost($token, $organization_identification, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$organization_identification = "organization_identification_example"; // string | 
$body = new \Membercare\Client\Model\LocalFilePost(); // \Membercare\Client\Model\LocalFilePost | 

try {
    $apiInstance->apiV1OrganizationsOrganizationIdentificationLocalFilesPost($token, $organization_identification, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV1OrganizationsOrganizationIdentificationLocalFilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **organization_identification** | **string**|  |
 **body** | [**\Membercare\Client\Model\LocalFilePost**](../Model/LocalFilePost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **boardmemberByOrganizationApi**
> \Membercare\Client\Model\BoardMembershipPagedResult boardmemberByOrganizationApi($organization_identification, $token, $only_valid, $include_addresses, $page, $page_size)

Gets boardmembers in the organization given by a Organization identification number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | The organization identification number
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates wheter or not to include historical boardmembers.
$include_addresses = false; // bool | Indicates wheter or not to include addresses
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->boardmemberByOrganizationApi($organization_identification, $token, $only_valid, $include_addresses, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->boardmemberByOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| The organization identification number |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates wheter or not to include historical boardmembers. | [optional] [default to true]
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

# **boardmembersByOrganizationsApi**
> \Membercare\Client\Model\BoardMembershipPagedResult boardmembersByOrganizationsApi($token, $body, $only_valid, $include_addresses, $page, $page_size)

Search board functions by organization identifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array("body_example"); // string[] | 
$only_valid = false; // bool | 
$include_addresses = false; // bool | Indicates wheter or not to include addresses
$page = 1; // int | Page number
$page_size = 50; // int | Number of items in a page

try {
    $result = $apiInstance->boardmembersByOrganizationsApi($token, $body, $only_valid, $include_addresses, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->boardmembersByOrganizationsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**string[]**](../Model/string.md)|  | [optional]
 **only_valid** | **bool**|  | [optional] [default to false]
 **include_addresses** | **bool**| Indicates wheter or not to include addresses | [optional] [default to false]
 **page** | **int**| Page number | [optional] [default to 1]
 **page_size** | **int**| Number of items in a page | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BoardMembershipPagedResult**](../Model/BoardMembershipPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBoardMemberships**
> \Membercare\Client\Model\BoardMembershipPagedResult getAllBoardMemberships($token, $only_valid, $include_addresses, $page, $page_size)

Gets ALL boardmembers in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates wheter or not to include historical boardmembers.
$include_addresses = false; // bool | Indicates wheter or not to include addresses
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getAllBoardMemberships($token, $only_valid, $include_addresses, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getAllBoardMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates wheter or not to include historical boardmembers. | [optional] [default to true]
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

# **getBoardFunctionLimits**
> \Membercare\Client\Model\BoardFunctionLimit[] getBoardFunctionLimits($organization_identification, $token, $only_valid)

Get limits for all boards in an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | If only membership categories for a specific organization is needed, apply the organizations identificationnumber.
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getBoardFunctionLimits($organization_identification, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getBoardFunctionLimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| If only membership categories for a specific organization is needed, apply the organizations identificationnumber. |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\BoardFunctionLimit[]**](../Model/BoardFunctionLimit.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoardFunctions**
> \Membercare\Client\Model\BoardFunctionPagedResult getBoardFunctions($token, $page, $page_size)

Get all board functions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getBoardFunctions($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getBoardFunctions: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\BoardFunctionPagedResult**](../Model/BoardFunctionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoardFunctionsByOrganization**
> \Membercare\Client\Model\BoardFunctionPagedResult getBoardFunctionsByOrganization($organization_identification, $token, $page, $page_size)

Get board functions of an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getBoardFunctionsByOrganization($organization_identification, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getBoardFunctionsByOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BoardFunctionPagedResult**](../Model/BoardFunctionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoardsByOrganization**
> \Membercare\Client\Model\Board[] getBoardsByOrganization($organization_identification, $token)

Get all boards of an organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getBoardsByOrganization($organization_identification, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getBoardsByOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Board[]**](../Model/Board.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldValuesForOrganization**
> \Membercare\Client\Model\CustomFieldValuePagedResult getCustomFieldValuesForOrganization($organization_identification, $token, $page, $page_size)

Retrieves a paged result of all CustomFieldValues for the organization with given organizationIdentification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | DebtorAccountNumber
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->getCustomFieldValuesForOrganization($organization_identification, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getCustomFieldValuesForOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| DebtorAccountNumber |
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

# **getOrganizationsByCategory**
> \Membercare\Client\Model\OrganizationPagedResult getOrganizationsByCategory($id, $token, $page, $page_size, $include_geographic_districts, $only_valid)

Get a paged result of Organizations with a given organization categoryid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The organization category id
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 
$include_geographic_districts = false; // bool | Will include electoral Districts in the result
$only_valid = false; // bool | 

try {
    $result = $apiInstance->getOrganizationsByCategory($id, $token, $page, $page_size, $include_geographic_districts, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationsByCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The organization category id |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]
 **include_geographic_districts** | **bool**| Will include electoral Districts in the result | [optional] [default to false]
 **only_valid** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\OrganizationPagedResult**](../Model/OrganizationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipCategoryByOrganizationApi**
> \Membercare\Client\Model\MembershipCategoryPagedResult membershipCategoryByOrganizationApi($organization_identification, $token, $membership_category_context, $page, $page_size)

Get a paged result of membership categories.   With possibility to only get those with a given category groupid or to a given organization by identificationnumber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | If only membership categories for a specific organization is needed, apply the organizations identificationnumber.
$token = "token_example"; // string | access token
$membership_category_context = new \Membercare\Client\Model\UnitTypeContextFlag(); // \Membercare\Client\Model\UnitTypeContextFlag | 1 = Person  2 = Company
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipCategoryByOrganizationApi($organization_identification, $token, $membership_category_context, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->membershipCategoryByOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| If only membership categories for a specific organization is needed, apply the organizations identificationnumber. |
 **token** | **string**| access token |
 **membership_category_context** | [**\Membercare\Client\Model\UnitTypeContextFlag**](../Model/.md)| 1 &#x3D; Person  2 &#x3D; Company | [optional]
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

# **membershipCategoryByOrganizations**
> \Membercare\Client\Model\MembershipCategoryPagedResult membershipCategoryByOrganizations($token, $body, $membership_category_context, $page, $page_size)

Get a paged result of membership categories.   With possibility to only get those with a given category groupid or to a given organization by identificationnumber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array("body_example"); // string[] | If only membership categories for a specific organization is needed, apply the organizations identificationnumber.
$membership_category_context = new \Membercare\Client\Model\UnitTypeContextFlag(); // \Membercare\Client\Model\UnitTypeContextFlag | 1 = Person  2 = Company
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipCategoryByOrganizations($token, $body, $membership_category_context, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->membershipCategoryByOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**string[]**](../Model/string.md)| If only membership categories for a specific organization is needed, apply the organizations identificationnumber. | [optional]
 **membership_category_context** | [**\Membercare\Client\Model\UnitTypeContextFlag**](../Model/.md)| 1 &#x3D; Person  2 &#x3D; Company | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MembershipCategoryPagedResult**](../Model/MembershipCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipMembersByOrganizationApi**
> \Membercare\Client\Model\MembershipPagedResult membershipMembersByOrganizationApi($organization_identification, $token, $only_valid, $include_addresses, $page, $page_size)

Gets membership members of the organization given by a Organization identification number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | The organization identification number
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates wheter or not to include historical memberships.
$include_addresses = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipMembersByOrganizationApi($organization_identification, $token, $only_valid, $include_addresses, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->membershipMembersByOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| The organization identification number |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates wheter or not to include historical memberships. | [optional] [default to true]
 **include_addresses** | **bool**|  | [optional] [default to false]
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

# **organizationApi**
> \Membercare\Client\Model\Organization organizationApi($organization_identification, $token, $include_geographic_districts)

Get an Organization by the given Organization identification number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | The organization identification number
$token = "token_example"; // string | access token
$include_geographic_districts = false; // bool | Will include electoral Districts in the result

try {
    $result = $apiInstance->organizationApi($organization_identification, $token, $include_geographic_districts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**| The organization identification number |
 **token** | **string**| access token |
 **include_geographic_districts** | **bool**| Will include electoral Districts in the result | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationCategoriesApi**
> \Membercare\Client\Model\OrganizationCategoryPagedResult organizationCategoriesApi($token, $page, $page_size)

Gets a paged result of Organization categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->organizationCategoriesApi($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationCategoriesApi: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\OrganizationCategoryPagedResult**](../Model/OrganizationCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsApi**
> \Membercare\Client\Model\OrganizationPagedResult organizationsApi($token, $page, $page_size, $include_geographic_districts, $only_valid)

Get a paged result of Organizations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 
$include_geographic_districts = false; // bool | Will include electoral Districts in the result
$only_valid = false; // bool | 

try {
    $result = $apiInstance->organizationsApi($token, $page, $page_size, $include_geographic_districts, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]
 **include_geographic_districts** | **bool**| Will include electoral Districts in the result | [optional] [default to false]
 **only_valid** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\OrganizationPagedResult**](../Model/OrganizationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organizationsByDownRelatedOrganizationApi**
> \Membercare\Client\Model\OrganizationPagedResult organizationsByDownRelatedOrganizationApi($organization_identification, $token, $page, $page_size, $include_geographic_districts)

Get a paged result of Organizations.  With possibility to only get those with a given organization categoryid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 
$include_geographic_districts = false; // bool | Will include electoral Districts in the result

try {
    $result = $apiInstance->organizationsByDownRelatedOrganizationApi($organization_identification, $token, $page, $page_size, $include_geographic_districts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationsByDownRelatedOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**|  |
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

# **organizationsByUpRelatedOrganizationApi**
> \Membercare\Client\Model\OrganizationPagedResult organizationsByUpRelatedOrganizationApi($organization_identification, $token, $page, $page_size, $include_geographic_districts)

Get a paged result of Organizations.  With possibility to only get those with a given organization categoryid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_identification = "organization_identification_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 
$include_geographic_districts = false; // bool | Will include electoral Districts in the result

try {
    $result = $apiInstance->organizationsByUpRelatedOrganizationApi($organization_identification, $token, $page, $page_size, $include_geographic_districts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->organizationsByUpRelatedOrganizationApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_identification** | **string**|  |
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

# **patchOrganization**
> \Membercare\Client\Model\Organization patchOrganization($token, $organization_identification, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$organization_identification = "organization_identification_example"; // string | 
$body = new \Membercare\Client\Model\OrganizationPatch(); // \Membercare\Client\Model\OrganizationPatch | 

try {
    $result = $apiInstance->patchOrganization($token, $organization_identification, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->patchOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **organization_identification** | **string**|  |
 **body** | [**\Membercare\Client\Model\OrganizationPatch**](../Model/OrganizationPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomFieldValuesForOrganization**
> \Membercare\Client\Model\CustomFieldValue postCustomFieldValuesForOrganization($token, $organization_identification, $body)

Takes a CustomFieldValue, and inserts it for the given Debtor.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$organization_identification = "organization_identification_example"; // string | The Member this value should be present on
$body = new \Membercare\Client\Model\CustomFieldValue(); // \Membercare\Client\Model\CustomFieldValue | The actual Value to be inserted

try {
    $result = $apiInstance->postCustomFieldValuesForOrganization($token, $organization_identification, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->postCustomFieldValuesForOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **organization_identification** | **string**| The Member this value should be present on |
 **body** | [**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)| The actual Value to be inserted | [optional]

### Return type

[**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrganization**
> \Membercare\Client\Model\Organization postOrganization($token, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\OrganizationPost(); // \Membercare\Client\Model\OrganizationPost | 

try {
    $result = $apiInstance->postOrganization($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->postOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\OrganizationPost**](../Model/OrganizationPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrganizationMembershipCategory**
> \Membercare\Client\Model\MembershipCategory postOrganizationMembershipCategory($token, $organization_identification, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$organization_identification = "organization_identification_example"; // string | 
$body = new \Membercare\Client\Model\MembershipCategoryPost(); // \Membercare\Client\Model\MembershipCategoryPost | 

try {
    $result = $apiInstance->postOrganizationMembershipCategory($token, $organization_identification, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->postOrganizationMembershipCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **organization_identification** | **string**|  |
 **body** | [**\Membercare\Client\Model\MembershipCategoryPost**](../Model/MembershipCategoryPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\MembershipCategory**](../Model/MembershipCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrganizationsHierarchiesSearch**
> \Membercare\Client\Model\OrganizationHierarchyPagedResult postOrganizationsHierarchiesSearch($token, $body, $page, $page_size)

Returns OrganizationHierarchies where the child and parent Organization has the given OrganizationCategories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\OrganizationHierarchySearch(); // \Membercare\Client\Model\OrganizationHierarchySearch | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->postOrganizationsHierarchiesSearch($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->postOrganizationsHierarchiesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\OrganizationHierarchySearch**](../Model/OrganizationHierarchySearch.md)|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\OrganizationHierarchyPagedResult**](../Model/OrganizationHierarchyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

