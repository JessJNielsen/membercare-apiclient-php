# Membercare\Client\ForeignSystemApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFoerignSystem**](ForeignSystemApi.md#deletefoerignsystem) | **DELETE** /api/v1/foreignSystems/{id} | Delete a ForeginSystem
[**getCompaniesByForeignSystem**](ForeignSystemApi.md#getcompaniesbyforeignsystem) | **GET** /api/v1/foreignSystems/{id}/companies | Get Persons via ForeginSystem
[**getFoerignSystem**](ForeignSystemApi.md#getfoerignsystem) | **GET** /api/v1/foreignSystems/{id} | Get a ForeginSystem
[**getFoerignSystems**](ForeignSystemApi.md#getfoerignsystems) | **GET** /api/v1/foreignSystems | Get all ForeginSystems
[**getOrganizationsByForeignSystem**](ForeignSystemApi.md#getorganizationsbyforeignsystem) | **GET** /api/v1/foreignSystems/{id}/organizations | Get Organizations via ForeginSystem
[**getPersonsForeignSystem**](ForeignSystemApi.md#getpersonsforeignsystem) | **GET** /api/v1/foreignSystems/{id}/persons | Get Persons via ForeignSystem
[**patchFoerignSystem**](ForeignSystemApi.md#patchfoerignsystem) | **PATCH** /api/v1/foreignSystems/{id} | Update ForeginSystem
[**postFoerignSystem**](ForeignSystemApi.md#postfoerignsystem) | **POST** /api/v1/foreignSystems | Create a ForeginSystem

# **deleteFoerignSystem**
> deleteFoerignSystem($id, $token)

Delete a ForeginSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteFoerignSystem($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->deleteFoerignSystem: ', $e->getMessage(), PHP_EOL;
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

# **getCompaniesByForeignSystem**
> \Membercare\Client\Model\CompanyPagedResult getCompaniesByForeignSystem($id, $token, $external_id, $only_valid, $page, $page_size)

Get Persons via ForeginSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token
$external_id = "external_id_example"; // string | 
$only_valid = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCompaniesByForeignSystem($id, $token, $external_id, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->getCompaniesByForeignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |
 **external_id** | **string**|  | [optional]
 **only_valid** | **bool**|  | [optional] [default to true]
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

# **getFoerignSystem**
> \Membercare\Client\Model\ForeignSystem getFoerignSystem($id, $token)

Get a ForeginSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getFoerignSystem($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->getFoerignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ForeignSystem**](../Model/ForeignSystem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFoerignSystems**
> \Membercare\Client\Model\ForeignSystem[] getFoerignSystems($token)

Get all ForeginSystems

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getFoerignSystems($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->getFoerignSystems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ForeignSystem[]**](../Model/ForeignSystem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationsByForeignSystem**
> \Membercare\Client\Model\OrganizationPagedResult getOrganizationsByForeignSystem($id, $token, $external_id, $only_valid, $page, $page_size)

Get Organizations via ForeginSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token
$external_id = "external_id_example"; // string | 
$only_valid = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getOrganizationsByForeignSystem($id, $token, $external_id, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->getOrganizationsByForeignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |
 **external_id** | **string**|  | [optional]
 **only_valid** | **bool**|  | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\OrganizationPagedResult**](../Model/OrganizationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonsForeignSystem**
> \Membercare\Client\Model\PersonPagedResult getPersonsForeignSystem($id, $token, $external_id, $only_valid, $unit_closed_after, $page, $page_size)

Get Persons via ForeignSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token
$external_id = "external_id_example"; // string | 
$only_valid = true; // bool | 
$unit_closed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only used when externalId is null and onlyValid is false
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonsForeignSystem($id, $token, $external_id, $only_valid, $unit_closed_after, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->getPersonsForeignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |
 **external_id** | **string**|  | [optional]
 **only_valid** | **bool**|  | [optional] [default to true]
 **unit_closed_after** | **\DateTime**| Only used when externalId is null and onlyValid is false | [optional]
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

# **patchFoerignSystem**
> \Membercare\Client\Model\ForeignSystem patchFoerignSystem($token, $id, $body)

Update ForeginSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\ForeignSystemPatch(); // \Membercare\Client\Model\ForeignSystemPatch | 

try {
    $result = $apiInstance->patchFoerignSystem($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->patchFoerignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ForeignSystemPatch**](../Model/ForeignSystemPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\ForeignSystem**](../Model/ForeignSystem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFoerignSystem**
> \Membercare\Client\Model\ForeignSystem postFoerignSystem($token, $body)

Create a ForeginSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ForeignSystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ForeignSystem(); // \Membercare\Client\Model\ForeignSystem | 

try {
    $result = $apiInstance->postFoerignSystem($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForeignSystemApi->postFoerignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ForeignSystem**](../Model/ForeignSystem.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\ForeignSystem**](../Model/ForeignSystem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

