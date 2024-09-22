# Membercare\Client\ExternalLoginApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteExternalLogin**](ExternalLoginApi.md#deleteexternallogin) | **DELETE** /api/v1/externalLogins | Deletes an External login association by given externallogin info
[**getExternalLoginInfoByProviderInfo**](ExternalLoginApi.md#getexternallogininfobyproviderinfo) | **GET** /api/v1/externalLogins | Retrieves external login information by given externallogin info
[**postExternalLogin**](ExternalLoginApi.md#postexternallogin) | **POST** /api/v1/externalLogins/externallogin | Saves external login information after successful authentication by the login provider

# **deleteExternalLogin**
> deleteExternalLogin($token, $body)

Deletes an External login association by given externallogin info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ExternalLoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ExternalLogin(); // \Membercare\Client\Model\ExternalLogin | 

try {
    $apiInstance->deleteExternalLogin($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLoginApi->deleteExternalLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ExternalLogin**](../Model/ExternalLogin.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalLoginInfoByProviderInfo**
> \Membercare\Client\Model\ExternalLogin getExternalLoginInfoByProviderInfo($token, $external_login_provider, $provider_key)

Retrieves external login information by given externallogin info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ExternalLoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$external_login_provider = new \Membercare\Client\Model\IdentityProvider(); // \Membercare\Client\Model\IdentityProvider | 0 = Unknown  1 = Facebook  2 = Google  3 = LinkedIn  4 = CoopDK  5 = Twitter  6 = AzureAD  7 = Criipto_BankId_Sweden  8 = Criipto_MitId_Denmark  9 = Criipto_Vipps_Norway  10 = Criipto_BankId_Norway  11 = GenericOpenIdConnect  12 = OpenId_Vipps_Norway
$provider_key = "provider_key_example"; // string | 

try {
    $result = $apiInstance->getExternalLoginInfoByProviderInfo($token, $external_login_provider, $provider_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLoginApi->getExternalLoginInfoByProviderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **external_login_provider** | [**\Membercare\Client\Model\IdentityProvider**](../Model/.md)| 0 &#x3D; Unknown  1 &#x3D; Facebook  2 &#x3D; Google  3 &#x3D; LinkedIn  4 &#x3D; CoopDK  5 &#x3D; Twitter  6 &#x3D; AzureAD  7 &#x3D; Criipto_BankId_Sweden  8 &#x3D; Criipto_MitId_Denmark  9 &#x3D; Criipto_Vipps_Norway  10 &#x3D; Criipto_BankId_Norway  11 &#x3D; GenericOpenIdConnect  12 &#x3D; OpenId_Vipps_Norway | [optional]
 **provider_key** | **string**|  | [optional]

### Return type

[**\Membercare\Client\Model\ExternalLogin**](../Model/ExternalLogin.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExternalLogin**
> \Membercare\Client\Model\ExternalLogin postExternalLogin($token, $body)

Saves external login information after successful authentication by the login provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ExternalLoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ExternalLogin(); // \Membercare\Client\Model\ExternalLogin | 

try {
    $result = $apiInstance->postExternalLogin($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLoginApi->postExternalLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ExternalLogin**](../Model/ExternalLogin.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\ExternalLogin**](../Model/ExternalLogin.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

