# Membercare\Client\FeeApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**defaultPeriodApi**](FeeApi.md#defaultperiodapi) | **GET** /api/v1/fee/periods/default | Gets the default period
[**feeAmountAllApi**](FeeApi.md#feeamountallapi) | **GET** /api/v1/fee/member/{debtorAccountNumber}/amounts/all | Gets all amount for the provided debtoraccountnumber
[**feeAmountApi**](FeeApi.md#feeamountapi) | **GET** /api/v1/fee/member/{debtorAccountNumber}/amounts | Gets all amount for the provided debtoraccountnumber
[**feeAmountCategoryApi**](FeeApi.md#feeamountcategoryapi) | **GET** /api/v1/fee/amountCategories | Gets all amount categories.
[**feeAmountRegistationCategoriesApi**](FeeApi.md#feeamountregistationcategoriesapi) | **GET** /api/v1/fee/registrationCategories | Gets all registration categories.
[**feeAmountReporterApi**](FeeApi.md#feeamountreporterapi) | **GET** /api/v1/fee/member/{debtorAccountNumber}/reporter | Gets the reporter for the provided member debtorAccountNumber
[**getCompaniesForFeeAmountReporter**](FeeApi.md#getcompaniesforfeeamountreporter) | **GET** /api/v1/fee/reporter/{debtorAccountNumber}/companies | Get the companies for which the person is registered as fee amount reporter
[**getFeeServices**](FeeApi.md#getfeeservices) | **GET** /api/v1/fee/services/{identification} | UNDER DEVELOPMENT!  Will give you a list of fee Services based on the provided criteria
[**getPreviousFeePeriod**](FeeApi.md#getpreviousfeeperiod) | **GET** /api/v1/fee/period/{id}/previousPeriod | Get previos fee period from the given period id
[**periodApi**](FeeApi.md#periodapi) | **GET** /api/v1/fee/periods/{yearPeriod} | Gets the period by the provided yearperiod
[**periodsApi**](FeeApi.md#periodsapi) | **GET** /api/v1/fee/periods | Gets all periods in the system
[**postCommunicationPreferenceApi**](FeeApi.md#postcommunicationpreferenceapi) | **POST** /api/v1/fee/member/{debtorAccountNumber}/communicationPreference | Sets feeamount communication preference for the member with the provided debtoraccountnumber
[**postFeeAmountsApi**](FeeApi.md#postfeeamountsapi) | **POST** /api/v1/fee/member/{debtorAccountNumber}/amounts | Inserts amounts
[**postFeeMemberSpecificEmail**](FeeApi.md#postfeememberspecificemail) | **POST** /api/v1/fee/member/{debtorAccountNumber}/specificEmail | Sets feeamount specific email address for the member with the provided debtoraccountnumber
[**postFeeServicesAndGetFeeServiceTransactions**](FeeApi.md#postfeeservicesandgetfeeservicetransactions) | **POST** /api/v1/fee/calculator | Receives a list of FeeServices, a yearPeriod, membership startdate and a membership enddate
[**postReporterApi**](FeeApi.md#postreporterapi) | **POST** /api/v1/fee/member/{debtorAccountNumber}/reporter | Inserts/Updates feeamount reporter.

# **defaultPeriodApi**
> \Membercare\Client\Model\Period defaultPeriodApi($token)

Gets the default period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->defaultPeriodApi($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->defaultPeriodApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Period**](../Model/Period.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feeAmountAllApi**
> \Membercare\Client\Model\FeeAmountPagedResult feeAmountAllApi($debtor_account_number, $token, $fee_period_id, $page, $page_size)

Gets all amount for the provided debtoraccountnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the member to retrieve amounts from.
$token = "token_example"; // string | access token
$fee_period_id = 789; // int | Primary key for a fee periode
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->feeAmountAllApi($debtor_account_number, $token, $fee_period_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->feeAmountAllApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtorAccountNumber of the member to retrieve amounts from. |
 **token** | **string**| access token |
 **fee_period_id** | **int**| Primary key for a fee periode | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\FeeAmountPagedResult**](../Model/FeeAmountPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feeAmountApi**
> \Membercare\Client\Model\FeeAmountPagedResult feeAmountApi($debtor_account_number, $token, $year_period, $validation_code, $frequence_type, $page, $page_size)

Gets all amount for the provided debtoraccountnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the member to retrieve amounts from.
$token = "token_example"; // string | access token
$year_period = 789; // int | 6 digit identification of the period, if only amount for a given period is needed.
$validation_code = "validation_code_example"; // string | 
$frequence_type = new \Membercare\Client\Model\FrequenceType(); // \Membercare\Client\Model\FrequenceType | FrequenceType  1 = Yearly  2 = Quarterly  3 = Monthly  4 = HalfYearly
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->feeAmountApi($debtor_account_number, $token, $year_period, $validation_code, $frequence_type, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->feeAmountApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtorAccountNumber of the member to retrieve amounts from. |
 **token** | **string**| access token |
 **year_period** | **int**| 6 digit identification of the period, if only amount for a given period is needed. | [optional]
 **validation_code** | **string**|  | [optional]
 **frequence_type** | [**\Membercare\Client\Model\FrequenceType**](../Model/.md)| FrequenceType  1 &#x3D; Yearly  2 &#x3D; Quarterly  3 &#x3D; Monthly  4 &#x3D; HalfYearly | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\FeeAmountPagedResult**](../Model/FeeAmountPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feeAmountCategoryApi**
> \Membercare\Client\Model\FeeAmountCategoryPagedResult feeAmountCategoryApi($token, $page, $page_size)

Gets all amount categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->feeAmountCategoryApi($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->feeAmountCategoryApi: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\FeeAmountCategoryPagedResult**](../Model/FeeAmountCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feeAmountRegistationCategoriesApi**
> \Membercare\Client\Model\RegistrationCategoryPagedResult feeAmountRegistationCategoriesApi($token, $page, $page_size)

Gets all registration categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->feeAmountRegistationCategoriesApi($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->feeAmountRegistationCategoriesApi: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\RegistrationCategoryPagedResult**](../Model/RegistrationCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **feeAmountReporterApi**
> \Membercare\Client\Model\Reporter feeAmountReporterApi($debtor_account_number, $token)

Gets the reporter for the provided member debtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->feeAmountReporterApi($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->feeAmountReporterApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Reporter**](../Model/Reporter.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompaniesForFeeAmountReporter**
> \Membercare\Client\Model\Company[] getCompaniesForFeeAmountReporter($debtor_account_number, $token)

Get the companies for which the person is registered as fee amount reporter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtor account number of the person to get companies for
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCompaniesForFeeAmountReporter($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->getCompaniesForFeeAmountReporter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtor account number of the person to get companies for |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Company[]**](../Model/Company.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeeServices**
> \Membercare\Client\Model\FeeServicePagedResult getFeeServices($identification, $token, $year_period, $page, $page_size)

UNDER DEVELOPMENT!  Will give you a list of fee Services based on the provided criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identification = "identification_example"; // string | 
$token = "token_example"; // string | access token
$year_period = 56; // int | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getFeeServices($identification, $token, $year_period, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->getFeeServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identification** | **string**|  |
 **token** | **string**| access token |
 **year_period** | **int**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\FeeServicePagedResult**](../Model/FeeServicePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPreviousFeePeriod**
> \Membercare\Client\Model\Period getPreviousFeePeriod($id, $token)

Get previos fee period from the given period id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPreviousFeePeriod($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->getPreviousFeePeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Period**](../Model/Period.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **periodApi**
> \Membercare\Client\Model\Period periodApi($year_period, $token)

Gets the period by the provided yearperiod

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$year_period = 789; // int | The yearPeriod of the periode to return
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->periodApi($year_period, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->periodApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year_period** | **int**| The yearPeriod of the periode to return |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Period**](../Model/Period.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **periodsApi**
> \Membercare\Client\Model\PeriodPagedResult periodsApi($token, $page, $page_size)

Gets all periods in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->periodsApi($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->periodsApi: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\PeriodPagedResult**](../Model/PeriodPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCommunicationPreferenceApi**
> postCommunicationPreferenceApi($token, $debtor_account_number, $body)

Sets feeamount communication preference for the member with the provided debtoraccountnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtoraccountnumber of the member
$body = 56; // int | The CommunicationPreference to be updated to on the member

try {
    $apiInstance->postCommunicationPreferenceApi($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->postCommunicationPreferenceApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtoraccountnumber of the member |
 **body** | [**int**](../Model/int.md)| The CommunicationPreference to be updated to on the member | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFeeAmountsApi**
> postFeeAmountsApi($token, $debtor_account_number, $body)

Inserts amounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = array(new \Membercare\Client\Model\FeeAmountPost()); // \Membercare\Client\Model\FeeAmountPost[] | 

try {
    $apiInstance->postFeeAmountsApi($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->postFeeAmountsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\FeeAmountPost[]**](../Model/FeeAmountPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFeeMemberSpecificEmail**
> postFeeMemberSpecificEmail($token, $debtor_account_number, $body)

Sets feeamount specific email address for the member with the provided debtoraccountnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtoraccountnumber of the member
$body = "body_example"; // string | 

try {
    $apiInstance->postFeeMemberSpecificEmail($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->postFeeMemberSpecificEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtoraccountnumber of the member |
 **body** | [**string**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFeeServicesAndGetFeeServiceTransactions**
> \Membercare\Client\Model\FeeTransactionPagedResult postFeeServicesAndGetFeeServiceTransactions($token, $body, $page, $page_size)

Receives a list of FeeServices, a yearPeriod, membership startdate and a membership enddate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\FeeCalculatorParam(); // \Membercare\Client\Model\FeeCalculatorParam | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->postFeeServicesAndGetFeeServiceTransactions($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->postFeeServicesAndGetFeeServiceTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\FeeCalculatorParam**](../Model/FeeCalculatorParam.md)|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\FeeTransactionPagedResult**](../Model/FeeTransactionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReporterApi**
> postReporterApi($token, $debtor_account_number, $body)

Inserts/Updates feeamount reporter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\FeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\ReporterPost(); // \Membercare\Client\Model\ReporterPost | 

try {
    $apiInstance->postReporterApi($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling FeeApi->postReporterApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\ReporterPost**](../Model/ReporterPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

