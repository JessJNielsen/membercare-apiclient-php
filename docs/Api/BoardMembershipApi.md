# Membercare\Client\BoardMembershipApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBoardMembership**](BoardMembershipApi.md#deleteboardmembership) | **DELETE** /api/v1/boardMemberships/{id} | Delete the boardMembership
[**getBoardFunctionsByOrganizations**](BoardMembershipApi.md#getboardfunctionsbyorganizations) | **POST** /api/v1/boardMemberships/boardFunctions/search | Search board functions by organization identifications.
[**patchBoardMembership**](BoardMembershipApi.md#patchboardmembership) | **PATCH** /api/v1/boardMemberships/{id} | Patch the boardMembership
[**postBoardMembership**](BoardMembershipApi.md#postboardmembership) | **POST** /api/v1/boardMemberships | Post boardMembership

# **deleteBoardMembership**
> deleteBoardMembership($id, $token)

Delete the boardMembership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\BoardMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteBoardMembership($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling BoardMembershipApi->deleteBoardMembership: ', $e->getMessage(), PHP_EOL;
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

# **getBoardFunctionsByOrganizations**
> \Membercare\Client\Model\BoardFunctionPagedResult getBoardFunctionsByOrganizations($token, $body, $page, $page_size)

Search board functions by organization identifications.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\BoardMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array("body_example"); // string[] | 
$page = 1; // int | Page number
$page_size = 50; // int | Number of items in a page

try {
    $result = $apiInstance->getBoardFunctionsByOrganizations($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardMembershipApi->getBoardFunctionsByOrganizations: ', $e->getMessage(), PHP_EOL;
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

# **patchBoardMembership**
> patchBoardMembership($token, $id, $body)

Patch the boardMembership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\BoardMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\BoardMembershipPatch(); // \Membercare\Client\Model\BoardMembershipPatch | 

try {
    $apiInstance->patchBoardMembership($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling BoardMembershipApi->patchBoardMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\BoardMembershipPatch**](../Model/BoardMembershipPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBoardMembership**
> \Membercare\Client\Model\BoardMembership postBoardMembership($token, $body)

Post boardMembership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\BoardMembershipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\BoardMembershipPost(); // \Membercare\Client\Model\BoardMembershipPost | 

try {
    $result = $apiInstance->postBoardMembership($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BoardMembershipApi->postBoardMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\BoardMembershipPost**](../Model/BoardMembershipPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\BoardMembership**](../Model/BoardMembership.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

