# Membercare\Client\ArrangementTemplatesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getArrangementTemplate**](ArrangementTemplatesApi.md#getarrangementtemplate) | **GET** /api/v1/arrangementTemplates/{id} | Get arrangement templates with the provided id
[**getArrangementTemplates**](ArrangementTemplatesApi.md#getarrangementtemplates) | **GET** /api/v1/arrangementTemplates | Get arrangement templates
[**postArrangementTemplates**](ArrangementTemplatesApi.md#postarrangementtemplates) | **POST** /api/v1/arrangementTemplates | Create an arrangement via a specific arrangement template

# **getArrangementTemplate**
> \Membercare\Client\Model\ArrangementTemplate[] getArrangementTemplate($id, $token)

Get arrangement templates with the provided id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangementTemplate($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementTemplatesApi->getArrangementTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ArrangementTemplate[]**](../Model/ArrangementTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementTemplates**
> \Membercare\Client\Model\ArrangementTemplate[] getArrangementTemplates($token)

Get arrangement templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangementTemplates($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementTemplatesApi->getArrangementTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ArrangementTemplate[]**](../Model/ArrangementTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementTemplates**
> \Membercare\Client\Model\Arrangement postArrangementTemplates($token, $body)

Create an arrangement via a specific arrangement template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ArrangementTemplatePost(); // \Membercare\Client\Model\ArrangementTemplatePost | 

try {
    $result = $apiInstance->postArrangementTemplates($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementTemplatesApi->postArrangementTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ArrangementTemplatePost**](../Model/ArrangementTemplatePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Arrangement**](../Model/Arrangement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

