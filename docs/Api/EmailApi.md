# Membercare\Client\EmailApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**insertEmailApi**](EmailApi.md#insertemailapi) | **POST** /api/v1/emails/queue | Enqueues the e-mails in the Membercare e-mail queue.
[**personByEmailApi**](EmailApi.md#personbyemailapi) | **GET** /api/v1/emails/{emailAddress}/persons | Checks if the provided email address already exists as an valid email adresse.  Get all persons with a given e-mail at a specifik point in time.
[**postEmailToMany**](EmailApi.md#postemailtomany) | **POST** /api/v1/emails/queue2 | EXPERIMENTAL - WILL BE SUBJECT TO BREAKING CHANGES - DO NOT USE IN PRODUCTION - Enqueues an e-mail for multiple receivers in the Membercare e-mail queue.
[**sendEmail**](EmailApi.md#sendemail) | **POST** /api/v1/emails/send | Sends the email directly without enqueuing it

# **insertEmailApi**
> insertEmailApi($token, $body)

Enqueues the e-mails in the Membercare e-mail queue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\EmailShot(); // \Membercare\Client\Model\EmailShot | 

try {
    $apiInstance->insertEmailApi($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->insertEmailApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\EmailShot**](../Model/EmailShot.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personByEmailApi**
> \Membercare\Client\Model\PersonPagedResult personByEmailApi($email_address, $token, $valid_date, $page, $page_size)

Checks if the provided email address already exists as an valid email adresse.  Get all persons with a given e-mail at a specifik point in time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_address = "email_address_example"; // string | The Email address to check if exists.
$token = "token_example"; // string | access token
$valid_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, it will get persons who has the email on that date. If not provided, current date will be used.
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->personByEmailApi($email_address, $token, $valid_date, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->personByEmailApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_address** | **string**| The Email address to check if exists. |
 **token** | **string**| access token |
 **valid_date** | **\DateTime**| If provided, it will get persons who has the email on that date. If not provided, current date will be used. | [optional]
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

# **postEmailToMany**
> postEmailToMany($token, $body)

EXPERIMENTAL - WILL BE SUBJECT TO BREAKING CHANGES - DO NOT USE IN PRODUCTION - Enqueues an e-mail for multiple receivers in the Membercare e-mail queue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\EmailToListParameters(); // \Membercare\Client\Model\EmailToListParameters | 

try {
    $apiInstance->postEmailToMany($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->postEmailToMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\EmailToListParameters**](../Model/EmailToListParameters.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmail**
> sendEmail($token, $body)

Sends the email directly without enqueuing it

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\EmailShot(); // \Membercare\Client\Model\EmailShot | 

try {
    $apiInstance->sendEmail($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\EmailShot**](../Model/EmailShot.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

