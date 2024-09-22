# Membercare\Client\MembershipApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1MembershipsCategorygroupsIdMembershipsGet**](MembershipApi.md#apiv1membershipscategorygroupsidmembershipsget) | **GET** /api/v1/memberships/categorygroups/{id}/memberships | Get a paged result of memberships.  DEPRECATED USE api/v1/memberships/groups/{id}/memberships
[**deleteMembership**](MembershipApi.md#deletemembership) | **DELETE** /api/v1/memberships/{id} | Deletes a membership
[**getAffiliationReasons**](MembershipApi.md#getaffiliationreasons) | **GET** /api/v1/memberships/affiliationReasons | Returns affiliation reasons in the solution
[**getAffiliationSources**](MembershipApi.md#getaffiliationsources) | **GET** /api/v1/memberships/affiliationSources | Returns affiliation sources in the solution
[**getDisaffiliateReasons**](MembershipApi.md#getdisaffiliatereasons) | **GET** /api/v1/memberships/disaffiliateReasons | Returns disaffiliate reasons in the solution
[**getMembershipCategoryFeeServices**](MembershipApi.md#getmembershipcategoryfeeservices) | **GET** /api/v1/memberships/categories/{Id}/fees | UNDER DEVELOPMENT - NOT READY FOR PRODUCTION USE
[**getMembershipCategorySubscriptionDefinitions**](MembershipApi.md#getmembershipcategorysubscriptiondefinitions) | **GET** /api/v1/memberships/categories/{Id}/subscriptions | UNDER DEVELOPMENT - NOT READY FOR PRODUCTION USE
[**membershipCategoryByGroupApi**](MembershipApi.md#membershipcategorybygroupapi) | **GET** /api/v1/memberships/groups/{id}/categories | Get a paged result of membership categories.   With possibility to only get those with a given category groupid or to a given organization by identificationnumber.
[**membershipCategoryCustomFieldApi**](MembershipApi.md#membershipcategorycustomfieldapi) | **GET** /api/v1/memberships/categories/{id}/customFields | Get a paged result of customfields that the given membership categoryid reference to.
[**membershipCategoryGroupApi**](MembershipApi.md#membershipcategorygroupapi) | **GET** /api/v1/memberships/groups | Get a paged result of membership category groups.
[**membershipsByCategoryGroupApi**](MembershipApi.md#membershipsbycategorygroupapi) | **GET** /api/v1/memberships/groups/{id}/memberships | Get a paged result of memberships.
[**patchMembership**](MembershipApi.md#patchmembership) | **PATCH** /api/v1/memberships | 
[**postMembershipWorklistItem**](MembershipApi.md#postmembershipworklistitem) | **POST** /api/v1/memberships/{id}/worklistItem | Will insert a worklist item with regards to the membership
[**putMembership**](MembershipApi.md#putmembership) | **PUT** /api/v1/memberships | NOTE: ApplicationStatusComment is only updated if ApplicationStatus is Rejected

# **apiV1MembershipsCategorygroupsIdMembershipsGet**
> \Membercare\Client\Model\MembershipPagedResult apiV1MembershipsCategorygroupsIdMembershipsGet($id, $token, $only_valid, $page, $page_size)

Get a paged result of memberships.  DEPRECATED USE api/v1/memberships/groups/{id}/memberships

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The CategoryGroupId to get memberships by.
$token = "token_example"; // string | access token
$only_valid = false; // bool | Indicates whether or not to retrieve only valid memberships. Default is false
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->apiV1MembershipsCategorygroupsIdMembershipsGet($id, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->apiV1MembershipsCategorygroupsIdMembershipsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The CategoryGroupId to get memberships by. |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to retrieve only valid memberships. Default is false | [optional] [default to false]
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

# **deleteMembership**
> deleteMembership($id, $token)

Deletes a membership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteMembership($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->deleteMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **getAffiliationReasons**
> \Membercare\Client\Model\AffiliationReasonPagedResult getAffiliationReasons($token, $only_valid, $only_web_enabled, $page, $page_size)

Returns affiliation reasons in the solution

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | 
$only_web_enabled = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getAffiliationReasons($token, $only_valid, $only_web_enabled, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getAffiliationReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional]
 **only_web_enabled** | **bool**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\AffiliationReasonPagedResult**](../Model/AffiliationReasonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAffiliationSources**
> \Membercare\Client\Model\AffiliationSourcePagedResult getAffiliationSources($token, $only_valid, $only_web_enabled, $page, $page_size)

Returns affiliation sources in the solution

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | 
$only_web_enabled = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getAffiliationSources($token, $only_valid, $only_web_enabled, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getAffiliationSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional]
 **only_web_enabled** | **bool**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\AffiliationSourcePagedResult**](../Model/AffiliationSourcePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDisaffiliateReasons**
> \Membercare\Client\Model\DisaffiliateReasonPagedResult getDisaffiliateReasons($token, $only_valid, $only_web_enabled, $page, $page_size)

Returns disaffiliate reasons in the solution

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | 
$only_web_enabled = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getDisaffiliateReasons($token, $only_valid, $only_web_enabled, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getDisaffiliateReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional]
 **only_web_enabled** | **bool**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\DisaffiliateReasonPagedResult**](../Model/DisaffiliateReasonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipCategoryFeeServices**
> \Membercare\Client\Model\FeeServicePagedResult getMembershipCategoryFeeServices($id, $token, $year_period, $page, $page_size)

UNDER DEVELOPMENT - NOT READY FOR PRODUCTION USE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Membership category Id
$token = "token_example"; // string | access token
$year_period = 789; // int | NOTICE: If this is not provided, we'll return calculated rows for all periods
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getMembershipCategoryFeeServices($id, $token, $year_period, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipCategoryFeeServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Membership category Id |
 **token** | **string**| access token |
 **year_period** | **int**| NOTICE: If this is not provided, we&#x27;ll return calculated rows for all periods | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\FeeServicePagedResult**](../Model/FeeServicePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipCategorySubscriptionDefinitions**
> \Membercare\Client\Model\SubscriptionDefinitionPagedResult getMembershipCategorySubscriptionDefinitions($id, $token, $page, $page_size)

UNDER DEVELOPMENT - NOT READY FOR PRODUCTION USE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Membership category Id
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getMembershipCategorySubscriptionDefinitions($id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->getMembershipCategorySubscriptionDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Membership category Id |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SubscriptionDefinitionPagedResult**](../Model/SubscriptionDefinitionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipCategoryByGroupApi**
> \Membercare\Client\Model\MembershipCategoryPagedResult membershipCategoryByGroupApi($id, $token, $membership_category_context, $page, $page_size)

Get a paged result of membership categories.   With possibility to only get those with a given category groupid or to a given organization by identificationnumber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | If only membership categories with a specific category group is needed, apply the categoryGroupId.
$token = "token_example"; // string | access token
$membership_category_context = new \Membercare\Client\Model\UnitTypeContextFlag(); // \Membercare\Client\Model\UnitTypeContextFlag | 1 = Person  2 = Company
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipCategoryByGroupApi($id, $token, $membership_category_context, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->membershipCategoryByGroupApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| If only membership categories with a specific category group is needed, apply the categoryGroupId. |
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

# **membershipCategoryCustomFieldApi**
> \Membercare\Client\Model\CustomFieldDefinitionPagedResult membershipCategoryCustomFieldApi($id, $token, $only_mandatory, $page, $page_size)

Get a paged result of customfields that the given membership categoryid reference to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The membership categoryid to get customfields for.
$token = "token_example"; // string | access token
$only_mandatory = false; // bool | Only mandatory custom fields are returned
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipCategoryCustomFieldApi($id, $token, $only_mandatory, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->membershipCategoryCustomFieldApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The membership categoryid to get customfields for. |
 **token** | **string**| access token |
 **only_mandatory** | **bool**| Only mandatory custom fields are returned | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CustomFieldDefinitionPagedResult**](../Model/CustomFieldDefinitionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipCategoryGroupApi**
> \Membercare\Client\Model\MembershipCategoryGroupPagedResult membershipCategoryGroupApi($token, $page, $page_size)

Get a paged result of membership category groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipCategoryGroupApi($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->membershipCategoryGroupApi: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\MembershipCategoryGroupPagedResult**](../Model/MembershipCategoryGroupPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **membershipsByCategoryGroupApi**
> \Membercare\Client\Model\MembershipPagedResult membershipsByCategoryGroupApi($id, $token, $only_valid, $page, $page_size)

Get a paged result of memberships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The CategoryGroupId to get memberships by.
$token = "token_example"; // string | access token
$only_valid = false; // bool | Indicates whether or not to retrieve only valid memberships. Default is false
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->membershipsByCategoryGroupApi($id, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->membershipsByCategoryGroupApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The CategoryGroupId to get memberships by. |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to retrieve only valid memberships. Default is false | [optional] [default to false]
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

# **patchMembership**
> patchMembership($token, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\MembershipPatch(); // \Membercare\Client\Model\MembershipPatch | The Membership to update

try {
    $apiInstance->patchMembership($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->patchMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\MembershipPatch**](../Model/MembershipPatch.md)| The Membership to update | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipWorklistItem**
> \Membercare\Client\Model\MembershipWorklistItem postMembershipWorklistItem($token, $id, $body)

Will insert a worklist item with regards to the membership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\MembershipWorklistItemPost(); // \Membercare\Client\Model\MembershipWorklistItemPost | 

try {
    $result = $apiInstance->postMembershipWorklistItem($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->postMembershipWorklistItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\MembershipWorklistItemPost**](../Model/MembershipWorklistItemPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\MembershipWorklistItem**](../Model/MembershipWorklistItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMembership**
> putMembership($token, $body)

NOTE: ApplicationStatusComment is only updated if ApplicationStatus is Rejected

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\MembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\MembershipPut(); // \Membercare\Client\Model\MembershipPut | The Membership to update

try {
    $apiInstance->putMembership($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembershipApi->putMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\MembershipPut**](../Model/MembershipPut.md)| The Membership to update | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

