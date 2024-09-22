# Membercare\Client\DocumentApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDocument**](DocumentApi.md#getdocument) | **GET** /api/v1/documents/{identification} | Returns a document
[**postDocuments**](DocumentApi.md#postdocuments) | **POST** /api/v1/documents | Saves the document in the database

# **getDocument**
> \Membercare\Client\Model\Document getDocument($identification, $token, $include_content)

Returns a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identification = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$token = "token_example"; // string | access token
$include_content = true; // bool | 

try {
    $result = $apiInstance->getDocument($identification, $token, $include_content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identification** | [**string**](../Model/.md)|  |
 **token** | **string**| access token |
 **include_content** | **bool**|  | [optional]

### Return type

[**\Membercare\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDocuments**
> \Membercare\Client\Model\Document postDocuments($token, $body)

Saves the document in the database

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\Document(); // \Membercare\Client\Model\Document | 

try {
    $result = $apiInstance->postDocuments($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->postDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\Document**](../Model/Document.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Document**](../Model/Document.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

