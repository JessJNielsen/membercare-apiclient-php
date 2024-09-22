# Membercare\Client\CreditCardApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCreditCard**](CreditCardApi.md#deletecreditcard) | **DELETE** /api/v1/creditcards/{creditCardIdentification} | Method to delete a credit card and it&#x27;s payment gateway subscription
[**getCreditCardsByDebtorAccountNumber**](CreditCardApi.md#getcreditcardsbydebtoraccountnumber) | **GET** /api/v1/creditcards/{debtorAccountNumber} | Get saved credit cards by debtor account number
[**postCreditCard**](CreditCardApi.md#postcreditcard) | **POST** /api/v1/creditcards/{debtorAccountNumber} | Method to save a credit card subscription information
[**updateCreditCard**](CreditCardApi.md#updatecreditcard) | **PATCH** /api/v1/creditcards/{creditCardIdentification} | Method to save a credit card subscription information

# **deleteCreditCard**
> deleteCreditCard($credit_card_identification, $token)

Method to delete a credit card and it's payment gateway subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$credit_card_identification = "credit_card_identification_example"; // string | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteCreditCard($credit_card_identification, $token);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->deleteCreditCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credit_card_identification** | **string**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCreditCardsByDebtorAccountNumber**
> \Membercare\Client\Model\CreditCard[] getCreditCardsByDebtorAccountNumber($debtor_account_number, $token)

Get saved credit cards by debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCreditCardsByDebtorAccountNumber($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->getCreditCardsByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\CreditCard[]**](../Model/CreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCreditCard**
> \Membercare\Client\Model\CreditCard postCreditCard($token, $debtor_account_number, $body)

Method to save a credit card subscription information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\CreditCard(); // \Membercare\Client\Model\CreditCard | 

try {
    $result = $apiInstance->postCreditCard($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->postCreditCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\CreditCard**](../Model/CreditCard.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CreditCard**](../Model/CreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCreditCard**
> \Membercare\Client\Model\CreditCard updateCreditCard($token, $credit_card_identification, $body)

Method to save a credit card subscription information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CreditCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$credit_card_identification = "credit_card_identification_example"; // string | 
$body = new \Membercare\Client\Model\CreditCardPatch(); // \Membercare\Client\Model\CreditCardPatch | 

try {
    $result = $apiInstance->updateCreditCard($token, $credit_card_identification, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditCardApi->updateCreditCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **credit_card_identification** | **string**|  |
 **body** | [**\Membercare\Client\Model\CreditCardPatch**](../Model/CreditCardPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CreditCard**](../Model/CreditCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

