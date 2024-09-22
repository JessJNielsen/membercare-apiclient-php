# Membercare\Client\ExternalPurchaseApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postExternalOrderApi**](ExternalPurchaseApi.md#postexternalorderapi) | **POST** /api/v1/externalPurchase | Inserts an external purchased order with payment if given.

# **postExternalOrderApi**
> \Membercare\Client\Model\Invoice postExternalOrderApi($token, $body)

Inserts an external purchased order with payment if given.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ExternalPurchaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ExternalPurchase(); // \Membercare\Client\Model\ExternalPurchase | An ExternalPurchase object.

try {
    $result = $apiInstance->postExternalOrderApi($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalPurchaseApi->postExternalOrderApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ExternalPurchase**](../Model/ExternalPurchase.md)| An ExternalPurchase object. | [optional]

### Return type

[**\Membercare\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

