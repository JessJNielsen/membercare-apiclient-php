# Membercare\Client\WorklistApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWorkGroups**](WorklistApi.md#getworkgroups) | **GET** /api/v1/worklist/workGroups | Gets a list of Work Groups available in the system
[**patchWorklistItem**](WorklistApi.md#patchworklistitem) | **PATCH** /api/v1/worklist/{id} | Updates a Worklist item

# **getWorkGroups**
> \Membercare\Client\Model\WorkGroupPagedResult getWorkGroups($token, $page, $page_size)

Gets a list of Work Groups available in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\WorklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getWorkGroups($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorklistApi->getWorkGroups: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\WorkGroupPagedResult**](../Model/WorkGroupPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorklistItem**
> patchWorklistItem($token, $id, $body)

Updates a Worklist item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\WorklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\WorklistItemPatch(); // \Membercare\Client\Model\WorklistItemPatch | 

try {
    $apiInstance->patchWorklistItem($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorklistApi->patchWorklistItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\WorklistItemPatch**](../Model/WorklistItemPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

