# Membercare\Client\SmsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendBulkSms**](SmsApi.md#sendbulksms) | **POST** /api/v1/sms/queue | Enqueuees the smses in the Membercare sms queue.
[**sendSms**](SmsApi.md#sendsms) | **POST** /api/v1/sms/send | Send the sms directly without waiting in the queue.
[**sendSmsToListOfDebtorAccountNumbers**](SmsApi.md#sendsmstolistofdebtoraccountnumbers) | **POST** /api/v1/sms/queue2 | Enqueuees an sms for a list of debtor account numbers in the Membercare sms queue.

# **sendBulkSms**
> sendBulkSms($token, $body)

Enqueuees the smses in the Membercare sms queue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\SmsShot(); // \Membercare\Client\Model\SmsShot | 

try {
    $apiInstance->sendBulkSms($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->sendBulkSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\SmsShot**](../Model/SmsShot.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSms**
> sendSms($token, $body)

Send the sms directly without waiting in the queue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\Sms(); // \Membercare\Client\Model\Sms | 

try {
    $apiInstance->sendSms($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->sendSms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\Sms**](../Model/Sms.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSmsToListOfDebtorAccountNumbers**
> sendSmsToListOfDebtorAccountNumbers($token, $body)

Enqueuees an sms for a list of debtor account numbers in the Membercare sms queue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\SmsToDebtorAccountNumbersPost(); // \Membercare\Client\Model\SmsToDebtorAccountNumbersPost | 

try {
    $apiInstance->sendSmsToListOfDebtorAccountNumbers($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->sendSmsToListOfDebtorAccountNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\SmsToDebtorAccountNumbersPost**](../Model/SmsToDebtorAccountNumbersPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

