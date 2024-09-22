# Membercare\Client\SecurityApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDataRoles**](SecurityApi.md#getdataroles) | **GET** /api/v1/security/dataroles | Get all security data roles
[**getMembercareUsers**](SecurityApi.md#getmembercareusers) | **GET** /api/v1/security/membercareUsers | Get all membercare users
[**getPersonPermissions**](SecurityApi.md#getpersonpermissions) | **GET** /api/v1/security/person/{debtorAccountNumber}/permissions | Get permissions for a person on its associated organizations. If a member debtor account number is provided get permissions only for the common organizations between the person and the member.
[**getRoles**](SecurityApi.md#getroles) | **GET** /api/v1/security/roles | Get all security roles
[**postMembercareUserDataRole**](SecurityApi.md#postmembercareuserdatarole) | **POST** /api/v1/security/membercareUsers/{id}/dataRoles | Create a DataRole for the given MembercareUser
[**postMembercareUserRole**](SecurityApi.md#postmembercareuserrole) | **POST** /api/v1/security/membercareUsers/{id}/roles | Create a Role for the given MembercareUser

# **getDataRoles**
> \Membercare\Client\Model\DataRolePagedResult getDataRoles($token, $page, $page_size)

Get all security data roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getDataRoles($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getDataRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\DataRolePagedResult**](../Model/DataRolePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembercareUsers**
> \Membercare\Client\Model\MembercareUserPagedResult getMembercareUsers($token, $page, $page_size)

Get all membercare users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getMembercareUsers($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getMembercareUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MembercareUserPagedResult**](../Model/MembercareUserPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonPermissions**
> \Membercare\Client\Model\PersonPermissions getPersonPermissions($debtor_account_number, $token, $member_debtor_account_number)

Get permissions for a person on its associated organizations. If a member debtor account number is provided get permissions only for the common organizations between the person and the member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$member_debtor_account_number = "member_debtor_account_number_example"; // string | 

try {
    $result = $apiInstance->getPersonPermissions($debtor_account_number, $token, $member_debtor_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getPersonPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **member_debtor_account_number** | **string**|  | [optional]

### Return type

[**\Membercare\Client\Model\PersonPermissions**](../Model/PersonPermissions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoles**
> \Membercare\Client\Model\RolePagedResult getRoles($token, $page, $page_size)

Get all security roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getRoles($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->getRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\RolePagedResult**](../Model/RolePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembercareUserDataRole**
> \Membercare\Client\Model\DataRole postMembercareUserDataRole($token, $id, $body)

Create a DataRole for the given MembercareUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\UserDataRolePost(); // \Membercare\Client\Model\UserDataRolePost | 

try {
    $result = $apiInstance->postMembercareUserDataRole($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->postMembercareUserDataRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\UserDataRolePost**](../Model/UserDataRolePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\DataRole**](../Model/DataRole.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembercareUserRole**
> \Membercare\Client\Model\Role postMembercareUserRole($token, $id, $body)

Create a Role for the given MembercareUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SecurityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\UserRolePost(); // \Membercare\Client\Model\UserRolePost | 

try {
    $result = $apiInstance->postMembercareUserRole($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityApi->postMembercareUserRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\UserRolePost**](../Model/UserRolePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Role**](../Model/Role.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

