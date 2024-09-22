# Membercare\Client\EducationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEducationsBySearchString**](EducationApi.md#geteducationsbysearchstring) | **GET** /api/v1/educations | Get a paged result of educations.

# **getEducationsBySearchString**
> \Membercare\Client\Model\EducationPagedResult getEducationsBySearchString($token, $only_valid, $only_web_enabled, $search_string, $page, $page_size)

Get a paged result of educations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EducationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | 
$only_web_enabled = true; // bool | 
$search_string = ""; // string | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getEducationsBySearchString($token, $only_valid, $only_web_enabled, $search_string, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EducationApi->getEducationsBySearchString: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional]
 **only_web_enabled** | **bool**|  | [optional]
 **search_string** | **string**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\EducationPagedResult**](../Model/EducationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

