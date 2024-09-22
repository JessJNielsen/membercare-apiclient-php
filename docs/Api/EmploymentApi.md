# Membercare\Client\EmploymentApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAgreements**](EmploymentApi.md#getagreements) | **GET** /api/v1/employments/agreements | Get agreements
[**getEmploymentCategories**](EmploymentApi.md#getemploymentcategories) | **GET** /api/v1/employments/categories | Get the employment Categories
[**getOccupationTitles**](EmploymentApi.md#getoccupationtitles) | **GET** /api/v1/employments/occupationtitles | Get the occupation titles
[**postEmploymentWorklistItem**](EmploymentApi.md#postemploymentworklistitem) | **POST** /api/v1/employments/{id}/worklistItem | Will insert a worklist item with regards to the employment
[**putEmployment**](EmploymentApi.md#putemployment) | **PUT** /api/v1/employments | Set new values to the specified employment

# **getAgreements**
> \Membercare\Client\Model\AgreementPagedResult getAgreements($token, $page, $page_size)

Get agreements

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of interests to display per paged result.

try {
    $result = $apiInstance->getAgreements($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentApi->getAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of interests to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\AgreementPagedResult**](../Model/AgreementPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmploymentCategories**
> \Membercare\Client\Model\EmploymentCategoryPagedResult getEmploymentCategories($token, $page, $page_size)

Get the employment Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of employment categories to display per paged result.

try {
    $result = $apiInstance->getEmploymentCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentApi->getEmploymentCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of employment categories to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\EmploymentCategoryPagedResult**](../Model/EmploymentCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOccupationTitles**
> \Membercare\Client\Model\OccupationTitlePagedResult getOccupationTitles($token, $page, $page_size)

Get the occupation titles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of interests to display per paged result.

try {
    $result = $apiInstance->getOccupationTitles($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentApi->getOccupationTitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of interests to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\OccupationTitlePagedResult**](../Model/OccupationTitlePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEmploymentWorklistItem**
> \Membercare\Client\Model\EmploymentWorklistItem postEmploymentWorklistItem($token, $id, $body)

Will insert a worklist item with regards to the employment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\EmploymentWorklistItem(); // \Membercare\Client\Model\EmploymentWorklistItem | 

try {
    $result = $apiInstance->postEmploymentWorklistItem($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentApi->postEmploymentWorklistItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\EmploymentWorklistItem**](../Model/EmploymentWorklistItem.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\EmploymentWorklistItem**](../Model/EmploymentWorklistItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEmployment**
> putEmployment($token, $body, $worklist_template_id)

Set new values to the specified employment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\Employment(); // \Membercare\Client\Model\Employment | 
$worklist_template_id = 789; // int | Optional, will initiate a worklistTemplate if endDate is set

try {
    $apiInstance->putEmployment($token, $body, $worklist_template_id);
} catch (Exception $e) {
    echo 'Exception when calling EmploymentApi->putEmployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\Employment**](../Model/Employment.md)|  | [optional]
 **worklist_template_id** | **int**| Optional, will initiate a worklistTemplate if endDate is set | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

