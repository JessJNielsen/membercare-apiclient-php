# Membercare\Client\InterestsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteInterestCategory**](InterestsApi.md#deleteinterestcategory) | **DELETE** /api/v1/interests/categories/{id} | Tries to delete an Interest Category based on the provided id
[**getInterestCategories**](InterestsApi.md#getinterestcategories) | **GET** /api/v1/interests/categories | Get the interest Categories
[**getInterestCategory**](InterestsApi.md#getinterestcategory) | **GET** /api/v1/interests/categories/{id} | Retrieves a specific interest category based on the provided id
[**getInterestCategoryGroups**](InterestsApi.md#getinterestcategorygroups) | **GET** /api/v1/interests/groups | Get the interest Category Groups
[**patchInterestCategory**](InterestsApi.md#patchinterestcategory) | **PATCH** /api/v1/interests/categories/{id} | Tries to patch an Interest Category with the provided properties
[**postInterestCategory**](InterestsApi.md#postinterestcategory) | **POST** /api/v1/interests/categories | Tries to create a new Interest Category
[**putInterestCategory**](InterestsApi.md#putinterestcategory) | **PUT** /api/v1/interests/categories/{id} | Tries to update an Interest Category

# **deleteInterestCategory**
> deleteInterestCategory($id, $token)

Tries to delete an Interest Category based on the provided id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InterestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteInterestCategory($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling InterestsApi->deleteInterestCategory: ', $e->getMessage(), PHP_EOL;
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

# **getInterestCategories**
> \Membercare\Client\Model\InterestCategoryPagedResult getInterestCategories($token, $page, $page_size)

Get the interest Categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InterestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of interests to display per paged result.

try {
    $result = $apiInstance->getInterestCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestsApi->getInterestCategories: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\InterestCategoryPagedResult**](../Model/InterestCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterestCategory**
> \Membercare\Client\Model\InterestCategory getInterestCategory($id, $token)

Retrieves a specific interest category based on the provided id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InterestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getInterestCategory($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestsApi->getInterestCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\InterestCategory**](../Model/InterestCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterestCategoryGroups**
> \Membercare\Client\Model\InterestCategoryGroupPagedResult getInterestCategoryGroups($token, $page, $page_size)

Get the interest Category Groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InterestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of interests to display per paged result.

try {
    $result = $apiInstance->getInterestCategoryGroups($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestsApi->getInterestCategoryGroups: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\InterestCategoryGroupPagedResult**](../Model/InterestCategoryGroupPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchInterestCategory**
> patchInterestCategory($token, $id, $body)

Tries to patch an Interest Category with the provided properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InterestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\InterestCategoryPatch(); // \Membercare\Client\Model\InterestCategoryPatch | 

try {
    $apiInstance->patchInterestCategory($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InterestsApi->patchInterestCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\InterestCategoryPatch**](../Model/InterestCategoryPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInterestCategory**
> \Membercare\Client\Model\InterestCategory postInterestCategory($token, $body)

Tries to create a new Interest Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InterestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\InterestCategoryPost(); // \Membercare\Client\Model\InterestCategoryPost | 

try {
    $result = $apiInstance->postInterestCategory($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InterestsApi->postInterestCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\InterestCategoryPost**](../Model/InterestCategoryPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\InterestCategory**](../Model/InterestCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putInterestCategory**
> putInterestCategory($token, $id, $body)

Tries to update an Interest Category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InterestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\InterestCategoryPut(); // \Membercare\Client\Model\InterestCategoryPut | 

try {
    $apiInstance->putInterestCategory($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling InterestsApi->putInterestCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\InterestCategoryPut**](../Model/InterestCategoryPut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

