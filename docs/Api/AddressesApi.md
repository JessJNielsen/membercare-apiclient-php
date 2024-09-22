# Membercare\Client\AddressesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAddress**](AddressesApi.md#deleteaddress) | **DELETE** /api/v1/addresses/address/{id} | Deletes an address
[**deleteInvoiceAddress**](AddressesApi.md#deleteinvoiceaddress) | **DELETE** /api/v1/addresses/invoiceAddresses/{id} | Deletes an invoice address
[**deleteReaddressing**](AddressesApi.md#deletereaddressing) | **DELETE** /api/v1/addresses/readdressing/{id} | Deletes an readdressing
[**getAddressCategories**](AddressesApi.md#getaddresscategories) | **GET** /api/v1/addresses/addressCategories | Gets a list of address categories available in the system
[**getCounties**](AddressesApi.md#getcounties) | **GET** /api/v1/addresses/counties | Gets a list of counties available in the system
[**getCountries**](AddressesApi.md#getcountries) | **GET** /api/v1/addresses/countries | Gets a list of countries available in the system
[**getCountry**](AddressesApi.md#getcountry) | **GET** /api/v1/addresses/countries/{iso2Letter} | Gets the country with the provided two-letter country code.
[**getMembershipCategoriesFromCountryZipCodeStreetHouseNumber**](AddressesApi.md#getmembershipcategoriesfromcountryzipcodestreethousenumber) | **GET** /api/v1/addresses/membershipCategories | 
[**getMunicipalities**](AddressesApi.md#getmunicipalities) | **GET** /api/v1/addresses/municipalities | Gets a list of municipalities available in the system
[**getPostalCodesByCountryCodeApi**](AddressesApi.md#getpostalcodesbycountrycodeapi) | **GET** /api/v1/addresses/countries/{iso2Letter}/postalCodes | Gets the postal codes from the country with the provided two-letter country code.
[**patchInvoiceAddress**](AddressesApi.md#patchinvoiceaddress) | **PATCH** /api/v1/addresses/invoiceAddresses/{id} | Patch start or end date on an invoice address
[**patchReaddressing**](AddressesApi.md#patchreaddressing) | **PATCH** /api/v1/addresses/readdressing/{id} | Patch start or end date on a readdressing
[**postPostalCodesToCountryCodeApi**](AddressesApi.md#postpostalcodestocountrycodeapi) | **POST** /api/v1/addresses/countries/{iso2Letter}/postalCodes | Create a postal codes in the country with the provided two-letter country code.
[**postSearchPostalAddress**](AddressesApi.md#postsearchpostaladdress) | **POST** /api/v1/addresses/postalAddresses/search | 

# **deleteAddress**
> deleteAddress($id, $token)

Deletes an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteAddress($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
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

# **deleteInvoiceAddress**
> deleteInvoiceAddress($id, $token)

Deletes an invoice address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteInvoiceAddress($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteInvoiceAddress: ', $e->getMessage(), PHP_EOL;
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

# **deleteReaddressing**
> deleteReaddressing($id, $token)

Deletes an readdressing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteReaddressing($id, $token);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteReaddressing: ', $e->getMessage(), PHP_EOL;
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

# **getAddressCategories**
> \Membercare\Client\Model\AddressCategoryPagedResult getAddressCategories($token, $page, $page_size)

Gets a list of address categories available in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getAddressCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressCategories: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\AddressCategoryPagedResult**](../Model/AddressCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCounties**
> \Membercare\Client\Model\CountyPagedResult getCounties($token, $page, $page_size)

Gets a list of counties available in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCounties($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getCounties: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\CountyPagedResult**](../Model/CountyPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountries**
> \Membercare\Client\Model\CountryPagedResult getCountries($token, $page, $page_size)

Gets a list of countries available in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCountries($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getCountries: ', $e->getMessage(), PHP_EOL;
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

[**\Membercare\Client\Model\CountryPagedResult**](../Model/CountryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountry**
> \Membercare\Client\Model\Country getCountry($iso2_letter, $token)

Gets the country with the provided two-letter country code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$iso2_letter = "iso2_letter_example"; // string | A two-letter country code.
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCountry($iso2_letter, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iso2_letter** | **string**| A two-letter country code. |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Country**](../Model/Country.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipCategoriesFromCountryZipCodeStreetHouseNumber**
> \Membercare\Client\Model\MembershipCategoryPagedResult getMembershipCategoriesFromCountryZipCodeStreetHouseNumber($token, $iso2_letter, $zip_code, $street, $house_number, $letter, $membership_category_context, $include_subscription_definitions, $page, $page_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$iso2_letter = "iso2_letter_example"; // string | A two-letter country code.
$zip_code = "zip_code_example"; // string | 
$street = "street_example"; // string | 
$house_number = "house_number_example"; // string | 
$letter = "letter_example"; // string | 
$membership_category_context = new \Membercare\Client\Model\UnitTypeContextFlag(); // \Membercare\Client\Model\UnitTypeContextFlag | 1 = Person  2 = Company
$include_subscription_definitions = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getMembershipCategoriesFromCountryZipCodeStreetHouseNumber($token, $iso2_letter, $zip_code, $street, $house_number, $letter, $membership_category_context, $include_subscription_definitions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getMembershipCategoriesFromCountryZipCodeStreetHouseNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **iso2_letter** | **string**| A two-letter country code. | [optional]
 **zip_code** | **string**|  | [optional]
 **street** | **string**|  | [optional]
 **house_number** | **string**|  | [optional]
 **letter** | **string**|  | [optional]
 **membership_category_context** | [**\Membercare\Client\Model\UnitTypeContextFlag**](../Model/.md)| 1 &#x3D; Person  2 &#x3D; Company | [optional]
 **include_subscription_definitions** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MembershipCategoryPagedResult**](../Model/MembershipCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMunicipalities**
> \Membercare\Client\Model\MunicipalityPagedResult getMunicipalities($token, $county_official_code, $country_iso2_letter_code, $page, $page_size)

Gets a list of municipalities available in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$county_official_code = "county_official_code_example"; // string | possible to filter by County by using the officialCode
$country_iso2_letter_code = "country_iso2_letter_code_example"; // string | possible to filter by country by using the 2 letter country code (ISO 3166-1 alpha-2)
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getMunicipalities($token, $county_official_code, $country_iso2_letter_code, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getMunicipalities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **county_official_code** | **string**| possible to filter by County by using the officialCode | [optional]
 **country_iso2_letter_code** | **string**| possible to filter by country by using the 2 letter country code (ISO 3166-1 alpha-2) | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MunicipalityPagedResult**](../Model/MunicipalityPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostalCodesByCountryCodeApi**
> \Membercare\Client\Model\PostalCodePagedResult getPostalCodesByCountryCodeApi($iso2_letter, $token, $page, $page_size)

Gets the postal codes from the country with the provided two-letter country code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$iso2_letter = "iso2_letter_example"; // string | A two-letter country code.
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPostalCodesByCountryCodeApi($iso2_letter, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getPostalCodesByCountryCodeApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iso2_letter** | **string**| A two-letter country code. |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PostalCodePagedResult**](../Model/PostalCodePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchInvoiceAddress**
> patchInvoiceAddress($token, $id, $body)

Patch start or end date on an invoice address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\AddressLinkPatch(); // \Membercare\Client\Model\AddressLinkPatch | 

try {
    $apiInstance->patchInvoiceAddress($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->patchInvoiceAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AddressLinkPatch**](../Model/AddressLinkPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchReaddressing**
> patchReaddressing($token, $id, $body)

Patch start or end date on a readdressing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$id = 789; // int | 
$body = new \Membercare\Client\Model\AddressLinkPatch(); // \Membercare\Client\Model\AddressLinkPatch | 

try {
    $apiInstance->patchReaddressing($token, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->patchReaddressing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AddressLinkPatch**](../Model/AddressLinkPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPostalCodesToCountryCodeApi**
> \Membercare\Client\Model\PostalCode postPostalCodesToCountryCodeApi($token, $iso2_letter, $body)

Create a postal codes in the country with the provided two-letter country code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$iso2_letter = "iso2_letter_example"; // string | A two-letter country code.
$body = new \Membercare\Client\Model\PostalCode(); // \Membercare\Client\Model\PostalCode | 

try {
    $result = $apiInstance->postPostalCodesToCountryCodeApi($token, $iso2_letter, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->postPostalCodesToCountryCodeApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **iso2_letter** | **string**| A two-letter country code. |
 **body** | [**\Membercare\Client\Model\PostalCode**](../Model/PostalCode.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\PostalCode**](../Model/PostalCode.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSearchPostalAddress**
> \Membercare\Client\Model\PostalAddressPagedResult postSearchPostalAddress($token, $body, $page, $page_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\PostalAddressSearchCriteria(); // \Membercare\Client\Model\PostalAddressSearchCriteria | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->postSearchPostalAddress($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->postSearchPostalAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\PostalAddressSearchCriteria**](../Model/PostalAddressSearchCriteria.md)|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PostalAddressPagedResult**](../Model/PostalAddressPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

