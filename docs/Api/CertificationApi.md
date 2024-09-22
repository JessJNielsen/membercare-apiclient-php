# Membercare\Client\CertificationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCertificationCertificates**](CertificationApi.md#getcertificationcertificates) | **GET** /api/v1/certifications/{debtorAccountNumber}/Certificates | Retrieves a list of certificates for the person with the given debtor account number

# **getCertificationCertificates**
> \Membercare\Client\Model\CertificatePagedResult getCertificationCertificates($debtor_account_number, $token, $page, $page_size)

Retrieves a list of certificates for the person with the given debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CertificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCertificationCertificates($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CertificationApi->getCertificationCertificates: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\CertificatePagedResult**](../Model/CertificatePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

