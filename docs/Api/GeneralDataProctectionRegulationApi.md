# Membercare\Client\GeneralDataProctectionRegulationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConsentDeclarationCategories**](GeneralDataProctectionRegulationApi.md#getconsentdeclarationcategories) | **GET** /api/v1/generalDataProctectionRegulation/consentDeclarationCategories | Retrieves ConsentDeclarations ordered by MajorVerson and MinorVersion
[**getConsentDeclarations**](GeneralDataProctectionRegulationApi.md#getconsentdeclarations) | **GET** /api/v1/generalDataProctectionRegulation/consentDeclarations | Retrieves ConsentDeclarations ordered by MajorVerson and MinorVersion
[**getCurrentConsentDeclaration**](GeneralDataProctectionRegulationApi.md#getcurrentconsentdeclaration) | **GET** /api/v1/generalDataProctectionRegulation/currentConsentDeclaration/{consentDeclarationCategoryId} | Retrieves current ConsentDeclaration
[**getCurrentTerms**](GeneralDataProctectionRegulationApi.md#getcurrentterms) | **GET** /api/v1/generalDataProctectionRegulation/currentTerms | Retrieves current Terms
[**getTerms**](GeneralDataProctectionRegulationApi.md#getterms) | **GET** /api/v1/generalDataProctectionRegulation/terms | Retrieves Terms ordered by MajorVerson and MinorVersion

# **getConsentDeclarationCategories**
> \Membercare\Client\Model\ConsentDeclaration[] getConsentDeclarationCategories($token, $only_valid)

Retrieves ConsentDeclarations ordered by MajorVerson and MinorVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\GeneralDataProctectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getConsentDeclarationCategories($token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProctectionRegulationApi->getConsentDeclarationCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional]

### Return type

[**\Membercare\Client\Model\ConsentDeclaration[]**](../Model/ConsentDeclaration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsentDeclarations**
> \Membercare\Client\Model\ConsentDeclaration[] getConsentDeclarations($token, $consent_declaration_category_id, $only_valid)

Retrieves ConsentDeclarations ordered by MajorVerson and MinorVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\GeneralDataProctectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$consent_declaration_category_id = 789; // int | 
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getConsentDeclarations($token, $consent_declaration_category_id, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProctectionRegulationApi->getConsentDeclarations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **consent_declaration_category_id** | **int**|  | [optional]
 **only_valid** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\ConsentDeclaration[]**](../Model/ConsentDeclaration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentConsentDeclaration**
> \Membercare\Client\Model\ConsentDeclaration getCurrentConsentDeclaration($consent_declaration_category_id, $token)

Retrieves current ConsentDeclaration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\GeneralDataProctectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$consent_declaration_category_id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCurrentConsentDeclaration($consent_declaration_category_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProctectionRegulationApi->getCurrentConsentDeclaration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consent_declaration_category_id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ConsentDeclaration**](../Model/ConsentDeclaration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentTerms**
> \Membercare\Client\Model\Terms getCurrentTerms($token)

Retrieves current Terms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\GeneralDataProctectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCurrentTerms($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProctectionRegulationApi->getCurrentTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Terms**](../Model/Terms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTerms**
> \Membercare\Client\Model\Terms[] getTerms($token, $only_valid)

Retrieves Terms ordered by MajorVerson and MinorVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\GeneralDataProctectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | 

try {
    $result = $apiInstance->getTerms($token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProctectionRegulationApi->getTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional]

### Return type

[**\Membercare\Client\Model\Terms[]**](../Model/Terms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

