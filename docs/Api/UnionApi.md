# Membercare\Client\UnionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUnionGroups**](UnionApi.md#getuniongroups) | **GET** /api/v1/union/unionGroups | Get union groups
[**getUnionMembersByRespresentativesDebtorAccountNumber**](UnionApi.md#getunionmembersbyrespresentativesdebtoraccountnumber) | **GET** /api/v1/union/{debtorAccountNumber}/unionMembers | Get union members by representative&#x27;s debtor account number
[**getUnionRepresentatives**](UnionApi.md#getunionrepresentatives) | **GET** /api/v1/union | Get all UnionRepresentatives

# **getUnionGroups**
> \Membercare\Client\Model\UnionGroupPagedResult getUnionGroups($token, $incude_organization_primary_address, $only_valid, $page, $page_size)

Get union groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\UnionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$incude_organization_primary_address = false; // bool | 
$only_valid = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getUnionGroups($token, $incude_organization_primary_address, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnionApi->getUnionGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **incude_organization_primary_address** | **bool**|  | [optional] [default to false]
 **only_valid** | **bool**|  | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\UnionGroupPagedResult**](../Model/UnionGroupPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnionMembersByRespresentativesDebtorAccountNumber**
> \Membercare\Client\Model\UnionMember[] getUnionMembersByRespresentativesDebtorAccountNumber($debtor_account_number, $token, $validity_date, $include_personal_contacts)

Get union members by representative's debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\UnionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$validity_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$include_personal_contacts = false; // bool | 

try {
    $result = $apiInstance->getUnionMembersByRespresentativesDebtorAccountNumber($debtor_account_number, $token, $validity_date, $include_personal_contacts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnionApi->getUnionMembersByRespresentativesDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **validity_date** | **\DateTime**|  | [optional]
 **include_personal_contacts** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\UnionMember[]**](../Model/UnionMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnionRepresentatives**
> \Membercare\Client\Model\UnionRepresentativePagedResult getUnionRepresentatives($token, $page, $page_size)

Get all UnionRepresentatives

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\UnionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getUnionRepresentatives($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnionApi->getUnionRepresentatives: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\UnionRepresentativePagedResult**](../Model/UnionRepresentativePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

