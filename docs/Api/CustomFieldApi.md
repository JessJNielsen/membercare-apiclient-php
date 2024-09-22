# Membercare\Client\CustomFieldApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customFieldTypeApi**](CustomFieldApi.md#customfieldtypeapi) | **GET** /api/v1/customFields/types/{id} | Retrieves a specific CustomFieldType which corresponds to the given identifier.
[**customFieldTypesApi**](CustomFieldApi.md#customfieldtypesapi) | **GET** /api/v1/customFields/types | Retrieves a paged result of all CustomFieldTypes defined in Membercare
[**customFieldValueApi**](CustomFieldApi.md#customfieldvalueapi) | **GET** /api/v1/customFields/values/{id} | Retrieves a specific CustomFieldValue which corresponds to the passed identifier.
[**customFieldValuesApi**](CustomFieldApi.md#customfieldvaluesapi) | **GET** /api/v1/customFields/types/{id}/values | Retrieves a paged result of all CustomFieldValues for the given CustomFieldType
[**deleteCustomFieldTableValueOrganization**](CustomFieldApi.md#deletecustomfieldtablevalueorganization) | **DELETE** /api/v1/customFields/tablevalue/{id}/organizations | Delete link between organization and Customfieldtablevalue
[**deleteCustomFieldTypeOrganization**](CustomFieldApi.md#deletecustomfieldtypeorganization) | **DELETE** /api/v1/customFields/types/{id}/organizations | Removes the connection between the customfieldDefinition and the organization
[**deleteCustomFieldValue**](CustomFieldApi.md#deletecustomfieldvalue) | **DELETE** /api/v1/customFields/values/{id} | Deletes a custom field value
[**deleteCustomFieldValueDEPRECATED**](CustomFieldApi.md#deletecustomfieldvaluedeprecated) | **DELETE** /api/v1/customFields/customfieldvalue/{id} | Deletes a custom field value
[**postCustomFieldTableValueOrganization**](CustomFieldApi.md#postcustomfieldtablevalueorganization) | **POST** /api/v1/customFields/tablevalue/{id}/organizations | Create link between organization and Customfieldtablevalue
[**postCustomFieldTableValueString**](CustomFieldApi.md#postcustomfieldtablevaluestring) | **POST** /api/v1/customFields/tables/{id}/values | Save a new table value of type \&quot;string\&quot; on a customfield table
[**postCustomFieldTypeOrganization**](CustomFieldApi.md#postcustomfieldtypeorganization) | **POST** /api/v1/customFields/types/{id}/organizations | Creates a connection between the customfieldDefinition and the organization
[**putCustomFieldValue**](CustomFieldApi.md#putcustomfieldvalue) | **PUT** /api/v1/customFields/values | Takes a CustomFieldValue, and updates its StartDate, EndDate and Value.  Note that the following values Must be assigned:      - CustomFieldValue.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned

# **customFieldTypeApi**
> \Membercare\Client\Model\CustomFieldDefinition customFieldTypeApi($id, $token)

Retrieves a specific CustomFieldType which corresponds to the given identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The unique key defining the CustomFieldType in Membercare
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->customFieldTypeApi($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->customFieldTypeApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique key defining the CustomFieldType in Membercare |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\CustomFieldDefinition**](../Model/CustomFieldDefinition.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldTypesApi**
> \Membercare\Client\Model\CustomFieldDefinitionPagedResult customFieldTypesApi($token, $page, $page_size)

Retrieves a paged result of all CustomFieldTypes defined in Membercare

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 0.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->customFieldTypesApi($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->customFieldTypesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 0. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of invoices to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CustomFieldDefinitionPagedResult**](../Model/CustomFieldDefinitionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldValueApi**
> \Membercare\Client\Model\CustomFieldValue customFieldValueApi($id, $token)

Retrieves a specific CustomFieldValue which corresponds to the passed identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The unique value which identifies a specific CustomFieldValue
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->customFieldValueApi($id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->customFieldValueApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique value which identifies a specific CustomFieldValue |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customFieldValuesApi**
> \Membercare\Client\Model\CustomFieldValuePagedResult customFieldValuesApi($id, $token, $page, $page_size)

Retrieves a paged result of all CustomFieldValues for the given CustomFieldType

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The unique value which identifies a specific CustomFieldType
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->customFieldValuesApi($id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->customFieldValuesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The unique value which identifies a specific CustomFieldType |
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of invoices to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CustomFieldValuePagedResult**](../Model/CustomFieldValuePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomFieldTableValueOrganization**
> deleteCustomFieldTableValueOrganization($token, $id, $body)

Delete link between organization and Customfieldtablevalue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\SimpleOrganization(); // \Membercare\Client\Model\SimpleOrganization | 

try {
    $apiInstance->deleteCustomFieldTableValueOrganization($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->deleteCustomFieldTableValueOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SimpleOrganization**](../Model/SimpleOrganization.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomFieldTypeOrganization**
> deleteCustomFieldTypeOrganization($token, $id, $body)

Removes the connection between the customfieldDefinition and the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | The unique key defining the CustomFieldType in Membercare
$body = new \Membercare\Client\Model\SimpleOrganization(); // \Membercare\Client\Model\SimpleOrganization | The Organization in Membercare

try {
    $apiInstance->deleteCustomFieldTypeOrganization($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->deleteCustomFieldTypeOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**| The unique key defining the CustomFieldType in Membercare |
 **body** | [**\Membercare\Client\Model\SimpleOrganization**](../Model/SimpleOrganization.md)| The Organization in Membercare | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomFieldValue**
> deleteCustomFieldValue($id, $token)

Deletes a custom field value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteCustomFieldValue($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->deleteCustomFieldValue: ', $e->getMessage(), PHP_EOL;
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

# **deleteCustomFieldValueDEPRECATED**
> deleteCustomFieldValueDEPRECATED($id, $token)

Deletes a custom field value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteCustomFieldValueDEPRECATED($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->deleteCustomFieldValueDEPRECATED: ', $e->getMessage(), PHP_EOL;
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

# **postCustomFieldTableValueOrganization**
> postCustomFieldTableValueOrganization($token, $id, $body)

Create link between organization and Customfieldtablevalue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\SimpleOrganization(); // \Membercare\Client\Model\SimpleOrganization | 

try {
    $apiInstance->postCustomFieldTableValueOrganization($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->postCustomFieldTableValueOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SimpleOrganization**](../Model/SimpleOrganization.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomFieldTableValueString**
> \Membercare\Client\Model\TableValueString postCustomFieldTableValueString($token, $id, $body)

Save a new table value of type \"string\" on a customfield table

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | The CustomfieldTableId
$body = new \Membercare\Client\Model\TableValueStringPost(); // \Membercare\Client\Model\TableValueStringPost | The TableValueString to be saved

try {
    $result = $apiInstance->postCustomFieldTableValueString($token, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->postCustomFieldTableValueString: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**| The CustomfieldTableId |
 **body** | [**\Membercare\Client\Model\TableValueStringPost**](../Model/TableValueStringPost.md)| The TableValueString to be saved | [optional]

### Return type

[**\Membercare\Client\Model\TableValueString**](../Model/TableValueString.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomFieldTypeOrganization**
> postCustomFieldTypeOrganization($token, $id, $body)

Creates a connection between the customfieldDefinition and the organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | The unique key defining the CustomFieldType in Membercare
$body = new \Membercare\Client\Model\SimpleOrganization(); // \Membercare\Client\Model\SimpleOrganization | The Organization in Membercare

try {
    $apiInstance->postCustomFieldTypeOrganization($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->postCustomFieldTypeOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**| The unique key defining the CustomFieldType in Membercare |
 **body** | [**\Membercare\Client\Model\SimpleOrganization**](../Model/SimpleOrganization.md)| The Organization in Membercare | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCustomFieldValue**
> \Membercare\Client\Model\CustomFieldValue putCustomFieldValue($token, $body)

Takes a CustomFieldValue, and updates its StartDate, EndDate and Value.  Note that the following values Must be assigned:      - CustomFieldValue.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CustomFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\CustomFieldValue(); // \Membercare\Client\Model\CustomFieldValue | The actual object of Value containing the new Values to be updated

try {
    $result = $apiInstance->putCustomFieldValue($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldApi->putCustomFieldValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)| The actual object of Value containing the new Values to be updated | [optional]

### Return type

[**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

