# Membercare\Client\TokenApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken**](TokenApi.md#gettoken) | **GET** /api/v1/token | 
[**postToken**](TokenApi.md#posttoken) | **POST** /api/v1/token | 

# **getToken**
> \Membercare\Client\Model\Token getToken($client_api_key, $person_to_impersonate)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_api_key = "client_api_key_example"; // string | 
$person_to_impersonate = "person_to_impersonate_example"; // string | 

try {
    $result = $apiInstance->getToken($client_api_key, $person_to_impersonate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_api_key** | **string**|  | [optional]
 **person_to_impersonate** | **string**|  | [optional]

### Return type

[**\Membercare\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postToken**
> \Membercare\Client\Model\Token postToken($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\TokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Membercare\Client\Model\TokenRequest(); // \Membercare\Client\Model\TokenRequest | 

try {
    $result = $apiInstance->postToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenApi->postToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Membercare\Client\Model\TokenRequest**](../Model/TokenRequest.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

