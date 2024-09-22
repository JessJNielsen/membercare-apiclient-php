# Membercare\Client\InvoicesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**arrangementByInvoiceApi**](InvoicesApi.md#arrangementbyinvoiceapi) | **GET** /api/v1/invoices/{id}/arrangement | Get a specific arrangement by an invoiceId
[**invoiceApi**](InvoicesApi.md#invoiceapi) | **GET** /api/v1/invoices/{id} | Retrieves a specific invoice
[**invoicesApi**](InvoicesApi.md#invoicesapi) | **GET** /api/v1/invoices | Method returns a paged list of Invoices.  The paged result includes a summary and links to next and prevoius page.
[**patchInvoiceApi**](InvoicesApi.md#patchinvoiceapi) | **PUT** /api/v1/invoices/{id} | Updates the financestatus of the invoice with the passed identifier.
[**patchInvoiceApi_0**](InvoicesApi.md#patchinvoiceapi_0) | **PATCH** /api/v1/invoices/{id} | Updates the financestatus of the invoice with the passed identifier.
[**patchInvoicesApi**](InvoicesApi.md#patchinvoicesapi) | **PATCH** /api/v1/invoices | Updates the financestatus of the invoices.
[**paymentAPI**](InvoicesApi.md#paymentapi) | **GET** /api/v1/invoices/{id}/payments | Get all the payments on this Invoice
[**postPaymentApi**](InvoicesApi.md#postpaymentapi) | **POST** /api/v1/invoices/{id}/payments | 

# **arrangementByInvoiceApi**
> \Membercare\Client\Model\Arrangement arrangementByInvoiceApi($id, $token, $include_services)

Get a specific arrangement by an invoiceId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token
$include_services = false; // bool | 

try {
    $result = $apiInstance->arrangementByInvoiceApi($id, $token, $include_services);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->arrangementByInvoiceApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |
 **include_services** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Arrangement**](../Model/Arrangement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceApi**
> \Membercare\Client\Model\Invoice invoiceApi($id, $token)

Retrieves a specific invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The identifier of the invoice.
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->invoiceApi($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoiceApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the invoice. |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoicesApi**
> \Membercare\Client\Model\InvoicePagedResult invoicesApi($token, $finance_status, $payment_finance_status, $page, $page_size)

Method returns a paged list of Invoices.  The paged result includes a summary and links to next and prevoius page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$finance_status = new \Membercare\Client\Model\FinanceStatus(); // \Membercare\Client\Model\FinanceStatus | Enables you to filter the request by FinanceStatus.  0 = NotProcessed  1 = ReadByFinancesystem  2 = HandledByFinanceSystem  3 = ReadyForCreditCardPayment  -1 = Error
$payment_finance_status = new \Membercare\Client\Model\FinanceStatus(); // \Membercare\Client\Model\FinanceStatus | Enables you to filter the request by FinanceStatus ON PAYMENTS.  0 = NotProcessed  1 = ReadByFinancesystem  2 = HandledByFinanceSystem  3 = ReadyForCreditCardPayment  -1 = Error
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->invoicesApi($token, $finance_status, $payment_finance_status, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **finance_status** | [**\Membercare\Client\Model\FinanceStatus**](../Model/.md)| Enables you to filter the request by FinanceStatus.  0 &#x3D; NotProcessed  1 &#x3D; ReadByFinancesystem  2 &#x3D; HandledByFinanceSystem  3 &#x3D; ReadyForCreditCardPayment  -1 &#x3D; Error | [optional]
 **payment_finance_status** | [**\Membercare\Client\Model\FinanceStatus**](../Model/.md)| Enables you to filter the request by FinanceStatus ON PAYMENTS.  0 &#x3D; NotProcessed  1 &#x3D; ReadByFinancesystem  2 &#x3D; HandledByFinanceSystem  3 &#x3D; ReadyForCreditCardPayment  -1 &#x3D; Error | [optional]
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

# **patchInvoiceApi**
> \Membercare\Client\Model\Invoice patchInvoiceApi($token, $id, $body)

Updates the financestatus of the invoice with the passed identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 56; // int | The identifier of the invoice.
$body = new \Membercare\Client\Model\InvoicePatch(); // \Membercare\Client\Model\InvoicePatch | the Invoice object to be updated - This object must contain a financestatus.

try {
    $result = $apiInstance->patchInvoiceApi($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->patchInvoiceApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**| The identifier of the invoice. |
 **body** | [**\Membercare\Client\Model\InvoicePatch**](../Model/InvoicePatch.md)| the Invoice object to be updated - This object must contain a financestatus. | [optional]

### Return type

[**\Membercare\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchInvoiceApi_0**
> \Membercare\Client\Model\Invoice patchInvoiceApi_0($token, $id, $body)

Updates the financestatus of the invoice with the passed identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 56; // int | The identifier of the invoice.
$body = new \Membercare\Client\Model\InvoicePatch(); // \Membercare\Client\Model\InvoicePatch | the Invoice object to be updated - This object must contain a financestatus.

try {
    $result = $apiInstance->patchInvoiceApi_0($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->patchInvoiceApi_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**| The identifier of the invoice. |
 **body** | [**\Membercare\Client\Model\InvoicePatch**](../Model/InvoicePatch.md)| the Invoice object to be updated - This object must contain a financestatus. | [optional]

### Return type

[**\Membercare\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchInvoicesApi**
> \Membercare\Client\Model\InvoicePatchResult patchInvoicesApi($token, $body)

Updates the financestatus of the invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array(new \Membercare\Client\Model\InvoicePatch()); // \Membercare\Client\Model\InvoicePatch[] | 

try {
    $result = $apiInstance->patchInvoicesApi($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->patchInvoicesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\InvoicePatch[]**](../Model/InvoicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\InvoicePatchResult**](../Model/InvoicePatchResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentAPI**
> \Membercare\Client\Model\PaymentPagedResult paymentAPI($id, $token, $page, $pagesize)

Get all the payments on this Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | 
$token = "token_example"; // string | access token
$page = 0; // int | 
$pagesize = 10; // int | 

try {
    $result = $apiInstance->paymentAPI($id, $token, $page, $pagesize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->paymentAPI: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 0]
 **pagesize** | **int**|  | [optional] [default to 10]

### Return type

[**\Membercare\Client\Model\PaymentPagedResult**](../Model/PaymentPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPaymentApi**
> \Membercare\Client\Model\Payment postPaymentApi($token, $id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 56; // int | 
$body = new \Membercare\Client\Model\PaymentPost(); // \Membercare\Client\Model\PaymentPost | 

try {
    $result = $apiInstance->postPaymentApi($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->postPaymentApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PaymentPost**](../Model/PaymentPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

