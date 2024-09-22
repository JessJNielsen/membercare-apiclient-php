# Membercare\Client\QuickpaySubscriptionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteQuickpaySubscription**](QuickpaySubscriptionApi.md#deletequickpaysubscription) | **DELETE** /api/v1/quickpaysubscriptions/{quickpaySubscriptionIdentification} | Method to delete a Quickpay subscription and it&#x27;s payment gateway subscription
[**getQuickpaySubscriptionsByDebtorAccountNumber**](QuickpaySubscriptionApi.md#getquickpaysubscriptionsbydebtoraccountnumber) | **GET** /api/v1/quickpaysubscriptions/{debtorAccountNumber} | Get saved quickpay subscription by debtor account number
[**postQuickpaySubscription**](QuickpaySubscriptionApi.md#postquickpaysubscription) | **POST** /api/v1/quickpaysubscriptions/{debtorAccountNumber} | Method to save a quickpay subscription which may be a credit card or mobilepay subscription
[**updateQuickpaySubscription**](QuickpaySubscriptionApi.md#updatequickpaysubscription) | **PATCH** /api/v1/quickpaysubscriptions/{quickpayIdentification} | Method to patch a Quickpay subscription information

# **deleteQuickpaySubscription**
> deleteQuickpaySubscription($quickpay_subscription_identification, $token)

Method to delete a Quickpay subscription and it's payment gateway subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\QuickpaySubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quickpay_subscription_identification = "quickpay_subscription_identification_example"; // string | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteQuickpaySubscription($quickpay_subscription_identification, $token);
} catch (Exception $e) {
    echo 'Exception when calling QuickpaySubscriptionApi->deleteQuickpaySubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quickpay_subscription_identification** | **string**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuickpaySubscriptionsByDebtorAccountNumber**
> \Membercare\Client\Model\QuickpaySubscriptionPagedResult getQuickpaySubscriptionsByDebtorAccountNumber($debtor_account_number, $token, $page, $page_size)

Get saved quickpay subscription by debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\QuickpaySubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getQuickpaySubscriptionsByDebtorAccountNumber($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickpaySubscriptionApi->getQuickpaySubscriptionsByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\QuickpaySubscriptionPagedResult**](../Model/QuickpaySubscriptionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQuickpaySubscription**
> \Membercare\Client\Model\QuickpaySubscription postQuickpaySubscription($token, $debtor_account_number, $body)

Method to save a quickpay subscription which may be a credit card or mobilepay subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\QuickpaySubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\PostQuickpaySubscription(); // \Membercare\Client\Model\PostQuickpaySubscription | 

try {
    $result = $apiInstance->postQuickpaySubscription($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickpaySubscriptionApi->postQuickpaySubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\PostQuickpaySubscription**](../Model/PostQuickpaySubscription.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\QuickpaySubscription**](../Model/QuickpaySubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuickpaySubscription**
> \Membercare\Client\Model\QuickpaySubscription updateQuickpaySubscription($token, $quickpay_identification, $body)

Method to patch a Quickpay subscription information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\QuickpaySubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$quickpay_identification = "quickpay_identification_example"; // string | 
$body = new \Membercare\Client\Model\PatchQuickpaySubscription(); // \Membercare\Client\Model\PatchQuickpaySubscription | 

try {
    $result = $apiInstance->updateQuickpaySubscription($token, $quickpay_identification, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickpaySubscriptionApi->updateQuickpaySubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **quickpay_identification** | **string**|  |
 **body** | [**\Membercare\Client\Model\PatchQuickpaySubscription**](../Model/PatchQuickpaySubscription.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\QuickpaySubscription**](../Model/QuickpaySubscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

