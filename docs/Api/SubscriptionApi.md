# Membercare\Client\SubscriptionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1SubscriptionsSubscriptionIdDelete**](SubscriptionApi.md#apiv1subscriptionssubscriptioniddelete) | **DELETE** /api/v1/subscriptions/subscription/{id} | DEPRECATED - Deletes a subscription
[**apiV1SubscriptionsSubscriptionSubscriptionIdInvoicesGet**](SubscriptionApi.md#apiv1subscriptionssubscriptionsubscriptionidinvoicesget) | **GET** /api/v1/subscriptions/subscription/{subscriptionId}/invoices | DEPRECATED Gets invoices of a subscription
[**deletePaidSubscriptionDefinitionDifferentiatedPrice**](SubscriptionApi.md#deletepaidsubscriptiondefinitiondifferentiatedprice) | **DELETE** /api/v1/subscriptions/definitions/paid/{subscriptionDefinitionId}/differentiatedPrices/{id} | 
[**deleteSubscription**](SubscriptionApi.md#deletesubscription) | **DELETE** /api/v1/subscriptions/{id} | Deletes a subscription
[**getSubscription**](SubscriptionApi.md#getsubscription) | **GET** /api/v1/subscriptions/{id} | Get a subscription
[**getSubscriptionAreas**](SubscriptionApi.md#getsubscriptionareas) | **GET** /api/v1/subscriptions/areas | Retrieves a paged result of Subscription Area.
[**getSubscriptionCategories**](SubscriptionApi.md#getsubscriptioncategories) | **GET** /api/v1/subscriptions/categories | Retrieves a paged result of Subscription Category.
[**getSubscriptionDefinitions**](SubscriptionApi.md#getsubscriptiondefinitions) | **GET** /api/v1/subscriptions/definitions | Retrieves a paged result of SubscriptionDefinitions.
[**getSubscriptionGroups**](SubscriptionApi.md#getsubscriptiongroups) | **GET** /api/v1/subscriptions/groups | Retrieves a paged result of Subscription Groups.
[**getSubscriptionInvoices**](SubscriptionApi.md#getsubscriptioninvoices) | **GET** /api/v1/subscriptions/{id}/invoices | Gets invoices of a subscription
[**getSubscriptionsByDefinitionId**](SubscriptionApi.md#getsubscriptionsbydefinitionid) | **GET** /api/v1/subscriptions/definitions/{id}/subscriptions | Get subscriptions by Definition Id
[**patchPaidSubscriptionDefinition**](SubscriptionApi.md#patchpaidsubscriptiondefinition) | **PATCH** /api/v1/subscriptions/definitions/paid/{id} | Patches a paid subscription definition
[**patchPaidSubscriptionDefinitionDifferentiatedPrice**](SubscriptionApi.md#patchpaidsubscriptiondefinitiondifferentiatedprice) | **PATCH** /api/v1/subscriptions/definitions/paid/{subscriptionDefinitionId}/differentiatedPrices/{id} | Patch Differentiated Prices
[**patchSubscription**](SubscriptionApi.md#patchsubscription) | **PATCH** /api/v1/subscriptions/{id} | Updates a subscription
[**postPaidSubscriptionDefinitionDifferentiatedPrice**](SubscriptionApi.md#postpaidsubscriptiondefinitiondifferentiatedprice) | **POST** /api/v1/subscriptions/definitions/paid/{subscriptionDefinitionId}/differentiatedPrices | Posts Differentiated Prices
[**putPaidSubscriptionDefinitionDifferentiatedPrice**](SubscriptionApi.md#putpaidsubscriptiondefinitiondifferentiatedprice) | **PUT** /api/v1/subscriptions/definitions/paid/{subscriptionDefinitionId}/differentiatedPrices/{id} | Puts Differentiated Prices
[**putSubscription**](SubscriptionApi.md#putsubscription) | **PUT** /api/v1/subscriptions | Tries to update a Subscription where StartDate, EndDate, Quantity, Description, DeliveryWanted and MailRecipient are the only affected properties!

# **apiV1SubscriptionsSubscriptionIdDelete**
> apiV1SubscriptionsSubscriptionIdDelete($id, $token)

DEPRECATED - Deletes a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->apiV1SubscriptionsSubscriptionIdDelete($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiV1SubscriptionsSubscriptionIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **apiV1SubscriptionsSubscriptionSubscriptionIdInvoicesGet**
> apiV1SubscriptionsSubscriptionSubscriptionIdInvoicesGet($subscription_id, $token)

DEPRECATED Gets invoices of a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->apiV1SubscriptionsSubscriptionSubscriptionIdInvoicesGet($subscription_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiV1SubscriptionsSubscriptionSubscriptionIdInvoicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaidSubscriptionDefinitionDifferentiatedPrice**
> deletePaidSubscriptionDefinitionDifferentiatedPrice($subscription_definition_id, $id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_definition_id = 789; // int | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deletePaidSubscriptionDefinitionDifferentiatedPrice($subscription_definition_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deletePaidSubscriptionDefinitionDifferentiatedPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_definition_id** | **int**|  |
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

# **deleteSubscription**
> deleteSubscription($id, $token)

Deletes a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteSubscription($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
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

# **getSubscription**
> \Membercare\Client\Model\Subscription getSubscription($id, $token)

Get a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Must be larger than 0
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getSubscription($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Must be larger than 0 |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Subscription**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionAreas**
> \Membercare\Client\Model\SubscriptionAreaPagedResult getSubscriptionAreas($token, $page, $page_size)

Retrieves a paged result of Subscription Area.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of elements to display per paged result.

try {
    $result = $apiInstance->getSubscriptionAreas($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of elements to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SubscriptionAreaPagedResult**](../Model/SubscriptionAreaPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionCategories**
> \Membercare\Client\Model\SubscriptionCategoryPagedResult getSubscriptionCategories($token, $page, $page_size)

Retrieves a paged result of Subscription Category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of elements to display per paged result.

try {
    $result = $apiInstance->getSubscriptionCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of elements to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SubscriptionCategoryPagedResult**](../Model/SubscriptionCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionDefinitions**
> \Membercare\Client\Model\SubscriptionDefinitionPagedResult getSubscriptionDefinitions($token, $subscription_group_id, $subscription_category_id, $subscription_area_id, $page, $page_size)

Retrieves a paged result of SubscriptionDefinitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$subscription_group_id = 789; // int | The subscriptionGroupId that the returned subscriptiondefinitions must be part of.
$subscription_category_id = 789; // int | The subscriptionCategoryId that the returned subscriptiondefinitions must be part of.
$subscription_area_id = 789; // int | The subscriptionAreaId that the returned subscriptiondefinitions must be part of.
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of elements to display per paged result.

try {
    $result = $apiInstance->getSubscriptionDefinitions($token, $subscription_group_id, $subscription_category_id, $subscription_area_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **subscription_group_id** | **int**| The subscriptionGroupId that the returned subscriptiondefinitions must be part of. | [optional]
 **subscription_category_id** | **int**| The subscriptionCategoryId that the returned subscriptiondefinitions must be part of. | [optional]
 **subscription_area_id** | **int**| The subscriptionAreaId that the returned subscriptiondefinitions must be part of. | [optional]
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of elements to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SubscriptionDefinitionPagedResult**](../Model/SubscriptionDefinitionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionGroups**
> \Membercare\Client\Model\SubscriptionGroupPagedResult getSubscriptionGroups($token, $page, $page_size)

Retrieves a paged result of Subscription Groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of elements to display per paged result.

try {
    $result = $apiInstance->getSubscriptionGroups($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of elements to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SubscriptionGroupPagedResult**](../Model/SubscriptionGroupPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionInvoices**
> \Membercare\Client\Model\Invoice[] getSubscriptionInvoices($id, $token)

Gets invoices of a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getSubscriptionInvoices($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionsByDefinitionId**
> \Membercare\Client\Model\SubscriptionPagedResult getSubscriptionsByDefinitionId($id, $token, $only_valid, $page, $page_size)

Get subscriptions by Definition Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token
$only_valid = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getSubscriptionsByDefinitionId($id, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionsByDefinitionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to true]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SubscriptionPagedResult**](../Model/SubscriptionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPaidSubscriptionDefinition**
> patchPaidSubscriptionDefinition($token, $id, $body)

Patches a paid subscription definition

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\PaidSubscriptionDefinitionPatch(); // \Membercare\Client\Model\PaidSubscriptionDefinitionPatch | 

try {
    $apiInstance->patchPaidSubscriptionDefinition($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->patchPaidSubscriptionDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PaidSubscriptionDefinitionPatch**](../Model/PaidSubscriptionDefinitionPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPaidSubscriptionDefinitionDifferentiatedPrice**
> patchPaidSubscriptionDefinitionDifferentiatedPrice($token, $subscription_definition_id, $id, $body)

Patch Differentiated Prices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$subscription_definition_id = 789; // int | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePatch(); // \Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePatch | 

try {
    $apiInstance->patchPaidSubscriptionDefinitionDifferentiatedPrice($token, $subscription_definition_id, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->patchPaidSubscriptionDefinitionDifferentiatedPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **subscription_definition_id** | **int**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePatch**](../Model/PaidSubscriptionDefinitionDifferentiatedPricePatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSubscription**
> patchSubscription($token, $id, $body)

Updates a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\SubscriptionPatch(); // \Membercare\Client\Model\SubscriptionPatch | 

try {
    $apiInstance->patchSubscription($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->patchSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SubscriptionPatch**](../Model/SubscriptionPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPaidSubscriptionDefinitionDifferentiatedPrice**
> postPaidSubscriptionDefinitionDifferentiatedPrice($token, $subscription_definition_id, $body)

Posts Differentiated Prices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$subscription_definition_id = 789; // int | 
$body = array(new \Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePost()); // \Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePost[] | 

try {
    $apiInstance->postPaidSubscriptionDefinitionDifferentiatedPrice($token, $subscription_definition_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->postPaidSubscriptionDefinitionDifferentiatedPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **subscription_definition_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePost[]**](../Model/PaidSubscriptionDefinitionDifferentiatedPricePost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPaidSubscriptionDefinitionDifferentiatedPrice**
> putPaidSubscriptionDefinitionDifferentiatedPrice($token, $subscription_definition_id, $id, $body)

Puts Differentiated Prices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$subscription_definition_id = 789; // int | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePut(); // \Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePut | 

try {
    $apiInstance->putPaidSubscriptionDefinitionDifferentiatedPrice($token, $subscription_definition_id, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->putPaidSubscriptionDefinitionDifferentiatedPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **subscription_definition_id** | **int**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PaidSubscriptionDefinitionDifferentiatedPricePut**](../Model/PaidSubscriptionDefinitionDifferentiatedPricePut.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubscription**
> putSubscription($token, $body)

Tries to update a Subscription where StartDate, EndDate, Quantity, Description, DeliveryWanted and MailRecipient are the only affected properties!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\Subscription(); // \Membercare\Client\Model\Subscription | 

try {
    $apiInstance->putSubscription($token, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->putSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\Subscription**](../Model/Subscription.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

