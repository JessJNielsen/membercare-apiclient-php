# Membercare\Client\ConfigurationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**areDuplicateEmailsAllowed**](ConfigurationApi.md#areduplicateemailsallowed) | **GET** /api/v1/configuration/areDuplicateEmailsAllowed | Check if duplicate emails are allowed

# **areDuplicateEmailsAllowed**
> bool areDuplicateEmailsAllowed($token)

Check if duplicate emails are allowed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->areDuplicateEmailsAllowed($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->areDuplicateEmailsAllowed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

