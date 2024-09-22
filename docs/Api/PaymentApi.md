# Membercare\Client\PaymentApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1PaymentsOpenAllDelete**](PaymentApi.md#apiv1paymentsopenalldelete) | **DELETE** /api/v1/payments/open/all | Deletes all open payments - use carefully
[**patchPaymentApi**](PaymentApi.md#patchpaymentapi) | **PUT** /api/v1/payments/{id} | Updates the status of the payment.  NB: only the status is updated other fields are ignored.
[**patchPaymentApi_0**](PaymentApi.md#patchpaymentapi_0) | **PATCH** /api/v1/payments/{id} | Updates the status of the payment.  NB: only the status is updated other fields are ignored.
[**patchPaymentsApi**](PaymentApi.md#patchpaymentsapi) | **PATCH** /api/v1/payments | Updates the status of the payments.  NB: only the status is updated other fields are ignored.

# **apiV1PaymentsOpenAllDelete**
> apiV1PaymentsOpenAllDelete($token)

Deletes all open payments - use carefully

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $apiInstance->apiV1PaymentsOpenAllDelete($token);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->apiV1PaymentsOpenAllDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPaymentApi**
> \Membercare\Client\Model\Payment patchPaymentApi($token, $id, $body)

Updates the status of the payment.  NB: only the status is updated other fields are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 56; // int | 
$body = new \Membercare\Client\Model\PaymentPatch(); // \Membercare\Client\Model\PaymentPatch | 

try {
    $result = $apiInstance->patchPaymentApi($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->patchPaymentApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PaymentPatch**](../Model/PaymentPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPaymentApi_0**
> \Membercare\Client\Model\Payment patchPaymentApi_0($token, $id, $body)

Updates the status of the payment.  NB: only the status is updated other fields are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 56; // int | 
$body = new \Membercare\Client\Model\PaymentPatch(); // \Membercare\Client\Model\PaymentPatch | 

try {
    $result = $apiInstance->patchPaymentApi_0($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->patchPaymentApi_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PaymentPatch**](../Model/PaymentPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPaymentsApi**
> \Membercare\Client\Model\PaymentPatchResult patchPaymentsApi($token, $body)

Updates the status of the payments.  NB: only the status is updated other fields are ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array(new \Membercare\Client\Model\PaymentPatch()); // \Membercare\Client\Model\PaymentPatch[] | 

try {
    $result = $apiInstance->patchPaymentsApi($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentApi->patchPaymentsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\PaymentPatch[]**](../Model/PaymentPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\PaymentPatchResult**](../Model/PaymentPatchResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

