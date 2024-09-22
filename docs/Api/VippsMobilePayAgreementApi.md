# Membercare\Client\VippsMobilePayAgreementApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVippsMobilePayAgreement**](VippsMobilePayAgreementApi.md#deletevippsmobilepayagreement) | **DELETE** /api/v1/vippsmobilepayagreements/{localIdentification} | 
[**getVippsMobilePayAgreementsByDebtorAccountNumber**](VippsMobilePayAgreementApi.md#getvippsmobilepayagreementsbydebtoraccountnumber) | **GET** /api/v1/vippsmobilepayagreements/{debtorAccountNumber} | 

# **deleteVippsMobilePayAgreement**
> deleteVippsMobilePayAgreement($local_identification, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\VippsMobilePayAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$local_identification = "local_identification_example"; // string | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteVippsMobilePayAgreement($local_identification, $token);
} catch (Exception $e) {
    echo 'Exception when calling VippsMobilePayAgreementApi->deleteVippsMobilePayAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **local_identification** | **string**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVippsMobilePayAgreementsByDebtorAccountNumber**
> \Membercare\Client\Model\VippsMobilePayAgreementPagedResult getVippsMobilePayAgreementsByDebtorAccountNumber($debtor_account_number, $token, $page, $page_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\VippsMobilePayAgreementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getVippsMobilePayAgreementsByDebtorAccountNumber($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VippsMobilePayAgreementApi->getVippsMobilePayAgreementsByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\VippsMobilePayAgreementPagedResult**](../Model/VippsMobilePayAgreementPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

