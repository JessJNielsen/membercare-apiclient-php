# Membercare\Client\DebtorApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**debtorApi**](DebtorApi.md#debtorapi) | **GET** /api/v1/debtors/{debtorAccountNumber} | Gets a Debtor by the given debtorAccountNumber
[**debtorsApi**](DebtorApi.md#debtorsapi) | **GET** /api/v1/debtors | Gets Debtors that has changed after the given date.
[**deleteOpenPaymentByExternalId**](DebtorApi.md#deleteopenpaymentbyexternalid) | **DELETE** /api/v1/debtors/payments/open/byExternalId/{externalid} | Deletes all open payments matching given external id.
[**deleteOpenPaymentById**](DebtorApi.md#deleteopenpaymentbyid) | **DELETE** /api/v1/debtors/payments/open/byId/{id} | Deletes an open payment by given id.
[**getBalanceByDebtorAccountNumber**](DebtorApi.md#getbalancebydebtoraccountnumber) | **GET** /api/v1/debtors/{debtorAccountNumber}/balance | Gets balance of a Debtor by the given debtorAccountNumber
[**getDebtorsBalance**](DebtorApi.md#getdebtorsbalance) | **GET** /api/v1/debtors/balance | Gets balance of a Debtor by the given debtorAccountNumber
[**getImportExports**](DebtorApi.md#getimportexports) | **GET** /api/v1/debtors/{debtorAccountNumber}/invoiceExports | Gets InvoiceExports of a Debtor by the given debtorAccountNumber
[**getOpenPayments**](DebtorApi.md#getopenpayments) | **GET** /api/v1/debtors/{debtorAccountNumber}/payments/open | Method returns a paged list of open payments.  The paged result includes a summary and links to next and prevoius page.
[**getUpdatedImportExport**](DebtorApi.md#getupdatedimportexport) | **GET** /api/v1/debtors/{debtorAccountNumber}/updatedInvoiceExport | Method returns InvoiceExport for currently due invoices.  Will create a new one of if one doesn&#x27;t exist or if it is outdated
[**invoicesByDebtorApi**](DebtorApi.md#invoicesbydebtorapi) | **GET** /api/v1/debtors/{debtorAccountNumber}/invoices | Returns all invoices which has the given DebtorAccountNumber as the payer.
[**postOpenPayment**](DebtorApi.md#postopenpayment) | **POST** /api/v1/debtors/{debtorAccountNumber}/payments/open | Method adds an open payment with no invoice to match

# **debtorApi**
> \Membercare\Client\Model\Debtor debtorApi($debtor_account_number, $token)

Gets a Debtor by the given debtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtoraccountnumber the get the debtor by.
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->debtorApi($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->debtorApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtoraccountnumber the get the debtor by. |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Debtor**](../Model/Debtor.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **debtorsApi**
> \Membercare\Client\Model\DebtorPagedResult debtorsApi($token, $changed_after, $include_memberships, $include_creditors, $page, $page_size)

Gets Debtors that has changed after the given date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date to get changed debtors that has changed since that date.
$include_memberships = false; // bool | Should valid memberships be included in the returned objects
$include_creditors = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->debtorsApi($token, $changed_after, $include_memberships, $include_creditors, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->debtorsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **changed_after** | **\DateTime**| The date to get changed debtors that has changed since that date. | [optional]
 **include_memberships** | **bool**| Should valid memberships be included in the returned objects | [optional] [default to false]
 **include_creditors** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\DebtorPagedResult**](../Model/DebtorPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOpenPaymentByExternalId**
> deleteOpenPaymentByExternalId($external_id, $token)

Deletes all open payments matching given external id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteOpenPaymentByExternalId($external_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->deleteOpenPaymentByExternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOpenPaymentById**
> deleteOpenPaymentById($id, $token)

Deletes an open payment by given id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteOpenPaymentById($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->deleteOpenPaymentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBalanceByDebtorAccountNumber**
> \Membercare\Client\Model\DebtorBalance getBalanceByDebtorAccountNumber($debtor_account_number, $token)

Gets balance of a Debtor by the given debtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtoraccountnumber the get the debtor by.
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getBalanceByDebtorAccountNumber($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->getBalanceByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtoraccountnumber the get the debtor by. |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\DebtorBalance**](../Model/DebtorBalance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDebtorsBalance**
> \Membercare\Client\Model\DebtorBalancePagedResult getDebtorsBalance($token, $page, $page_size)

Gets balance of a Debtor by the given debtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getDebtorsBalance($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->getDebtorsBalance: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\DebtorBalancePagedResult**](../Model/DebtorBalancePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportExports**
> \Membercare\Client\Model\InvoiceExportPagedResult getImportExports($debtor_account_number, $token, $include_invoices, $page, $page_size)

Gets InvoiceExports of a Debtor by the given debtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$include_invoices = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getImportExports($debtor_account_number, $token, $include_invoices, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->getImportExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **include_invoices** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\InvoiceExportPagedResult**](../Model/InvoiceExportPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpenPayments**
> \Membercare\Client\Model\PaymentOpenPagedResult getOpenPayments($debtor_account_number, $token, $page, $page_size)

Method returns a paged list of open payments.  The paged result includes a summary and links to next and prevoius page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The DebtorAccountNumber of the payer
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->getOpenPayments($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->getOpenPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The DebtorAccountNumber of the payer |
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of invoices to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PaymentOpenPagedResult**](../Model/PaymentOpenPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUpdatedImportExport**
> \Membercare\Client\Model\InvoiceExport getUpdatedImportExport($debtor_account_number, $token)

Method returns InvoiceExport for currently due invoices.  Will create a new one of if one doesn't exist or if it is outdated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The DebtorAccountNumber of the payer
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getUpdatedImportExport($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->getUpdatedImportExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The DebtorAccountNumber of the payer |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\InvoiceExport**](../Model/InvoiceExport.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesByDebtorApi**
> \Membercare\Client\Model\InvoicePagedResult invoicesByDebtorApi($debtor_account_number, $token, $financed_after, $reverse_order, $page, $page_size)

Returns all invoices which has the given DebtorAccountNumber as the payer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The DebtorAccountNumber of the payer
$token = "token_example"; // string | access token
$financed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only invoices with a finance date later than the given date will be returned
$reverse_order = false; // bool | Will return the invoices in reverse order by invoiceId
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->invoicesByDebtorApi($debtor_account_number, $token, $financed_after, $reverse_order, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->invoicesByDebtorApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The DebtorAccountNumber of the payer |
 **token** | **string**| access token |
 **financed_after** | **\DateTime**| Only invoices with a finance date later than the given date will be returned | [optional]
 **reverse_order** | **bool**| Will return the invoices in reverse order by invoiceId | [optional] [default to false]
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of invoices to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\InvoicePagedResult**](../Model/InvoicePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOpenPayment**
> \Membercare\Client\Model\PaymentOpen postOpenPayment($token, $debtor_account_number, $body)

Method adds an open payment with no invoice to match

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\DebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\PaymentOpen(); // \Membercare\Client\Model\PaymentOpen | 

try {
    $result = $apiInstance->postOpenPayment($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DebtorApi->postOpenPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\PaymentOpen**](../Model/PaymentOpen.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\PaymentOpen**](../Model/PaymentOpen.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

