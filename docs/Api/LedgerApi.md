# Membercare\Client\LedgerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLedgerAccounts**](LedgerApi.md#getledgeraccounts) | **GET** /api/v1/ledger/accounts | Get ledger accounts (paged)
[**getLedgerBatches**](LedgerApi.md#getledgerbatches) | **GET** /api/v1/ledger/journals | Get ledger journals (paged)
[**getLedgerItemsByAccountNumber**](LedgerApi.md#getledgeritemsbyaccountnumber) | **GET** /api/v1/ledger/accounts/{accountNumber}/ledgerItems | Get ledger items by account (paged)
[**getLedgerItemsByBatchId**](LedgerApi.md#getledgeritemsbybatchid) | **GET** /api/v1/ledger/journals/{journalId}/ledgerItems | Get ledger items by journal id (paged)
[**patchLedgerBatchApi**](LedgerApi.md#patchledgerbatchapi) | **PUT** /api/v1/ledger/journals/{journalId} | Updates the financestatus of the ledger journal with the passed identifier.
[**patchLedgerBatchApi_0**](LedgerApi.md#patchledgerbatchapi_0) | **PATCH** /api/v1/ledger/journals/{journalId} | Updates the financestatus of the ledger journal with the passed identifier.

# **getLedgerAccounts**
> \Membercare\Client\Model\LedgerAccountPagedResult getLedgerAccounts($token, $only_valid, $page, $page_size)

Get ledger accounts (paged)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_valid = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getLedgerAccounts($token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLedgerAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\LedgerAccountPagedResult**](../Model/LedgerAccountPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerBatches**
> \Membercare\Client\Model\LedgerJournalPagedResult getLedgerBatches($token, $finance_status, $created_after, $reverse_order, $page, $page_size)

Get ledger journals (paged)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$finance_status = new \Membercare\Client\Model\FinanceStatus(); // \Membercare\Client\Model\FinanceStatus | 0 = NotProcessed  1 = ReadByFinancesystem  2 = HandledByFinanceSystem  3 = ReadyForCreditCardPayment  -1 = Error
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$reverse_order = false; // bool | true means newest first...
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getLedgerBatches($token, $finance_status, $created_after, $reverse_order, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLedgerBatches: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **finance_status** | [**\Membercare\Client\Model\FinanceStatus**](../Model/.md)| 0 &#x3D; NotProcessed  1 &#x3D; ReadByFinancesystem  2 &#x3D; HandledByFinanceSystem  3 &#x3D; ReadyForCreditCardPayment  -1 &#x3D; Error | [optional]
 **created_after** | **\DateTime**|  | [optional]
 **reverse_order** | **bool**| true means newest first... | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\LedgerJournalPagedResult**](../Model/LedgerJournalPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerItemsByAccountNumber**
> \Membercare\Client\Model\LedgerItemPagedResult getLedgerItemsByAccountNumber($account_number, $token, $page, $page_size)

Get ledger items by account (paged)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_number = "account_number_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getLedgerItemsByAccountNumber($account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLedgerItemsByAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_number** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\LedgerItemPagedResult**](../Model/LedgerItemPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLedgerItemsByBatchId**
> \Membercare\Client\Model\LedgerItemPagedResult getLedgerItemsByBatchId($journal_id, $token, $page, $page_size)

Get ledger items by journal id (paged)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$journal_id = 789; // int | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getLedgerItemsByBatchId($journal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->getLedgerItemsByBatchId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **journal_id** | **int**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\LedgerItemPagedResult**](../Model/LedgerItemPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLedgerBatchApi**
> \Membercare\Client\Model\LedgerJournal patchLedgerBatchApi($token, $journal_id, $body)

Updates the financestatus of the ledger journal with the passed identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$journal_id = 789; // int | The identifier of the ledger jornal.
$body = new \Membercare\Client\Model\LedgerJournalPatch(); // \Membercare\Client\Model\LedgerJournalPatch | the ledger journal object to be updated - This object must contain a financestatus.

try {
    $result = $apiInstance->patchLedgerBatchApi($token, $journal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->patchLedgerBatchApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **journal_id** | **int**| The identifier of the ledger jornal. |
 **body** | [**\Membercare\Client\Model\LedgerJournalPatch**](../Model/LedgerJournalPatch.md)| the ledger journal object to be updated - This object must contain a financestatus. | [optional]

### Return type

[**\Membercare\Client\Model\LedgerJournal**](../Model/LedgerJournal.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchLedgerBatchApi_0**
> \Membercare\Client\Model\LedgerJournal patchLedgerBatchApi_0($token, $journal_id, $body)

Updates the financestatus of the ledger journal with the passed identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\LedgerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$journal_id = 789; // int | The identifier of the ledger jornal.
$body = new \Membercare\Client\Model\LedgerJournalPatch(); // \Membercare\Client\Model\LedgerJournalPatch | the ledger journal object to be updated - This object must contain a financestatus.

try {
    $result = $apiInstance->patchLedgerBatchApi_0($token, $journal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LedgerApi->patchLedgerBatchApi_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **journal_id** | **int**| The identifier of the ledger jornal. |
 **body** | [**\Membercare\Client\Model\LedgerJournalPatch**](../Model/LedgerJournalPatch.md)| the ledger journal object to be updated - This object must contain a financestatus. | [optional]

### Return type

[**\Membercare\Client\Model\LedgerJournal**](../Model/LedgerJournal.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

