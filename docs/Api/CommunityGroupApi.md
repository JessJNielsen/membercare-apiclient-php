# Membercare\Client\CommunityGroupApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommunityFileChanges**](CommunityGroupApi.md#getcommunityfilechanges) | **GET** /api/v1/communityGroups/Changes/Files | Get a paged result of community files changes for all groups.
[**getCommunityFileChangesByGroup**](CommunityGroupApi.md#getcommunityfilechangesbygroup) | **GET** /api/v1/communityGroups/{groupId}/Changes/Files | Get a paged result of community file changes for the chosen group.
[**getCommunityGroup**](CommunityGroupApi.md#getcommunitygroup) | **GET** /api/v1/communityGroups/{groupId} | Get a community group with origin
[**getCommunityGroupAnnouncementChanges**](CommunityGroupApi.md#getcommunitygroupannouncementchanges) | **GET** /api/v1/communityGroups/Changes/Announcements | Get a paged result of community group announcement changes for all groups.
[**getCommunityGroupAnnouncementChangesByGroup**](CommunityGroupApi.md#getcommunitygroupannouncementchangesbygroup) | **GET** /api/v1/communityGroups/{groupId}/Changes/Announcements | Get a paged result of community group announcement changes for the chosen group.
[**getCommunityGroupMeetingChanges**](CommunityGroupApi.md#getcommunitygroupmeetingchanges) | **GET** /api/v1/communityGroups/Changes/Meetings | Get a paged result of community group meeting changes for all groups.
[**getCommunityGroupMeetingChangesByGroup**](CommunityGroupApi.md#getcommunitygroupmeetingchangesbygroup) | **GET** /api/v1/communityGroups/{groupId}/Changes/Meetings | Get a paged result of community group meeting changes for the chosen group.
[**getCommunityGroupMembers**](CommunityGroupApi.md#getcommunitygroupmembers) | **GET** /api/v1/communityGroups/{groupId}/Members | Get members of a community group
[**getCommunityGroupMessageChanges**](CommunityGroupApi.md#getcommunitygroupmessagechanges) | **GET** /api/v1/communityGroups/Changes/Messages | Get a paged result of community group message changes for all groups.
[**getCommunityGroupMessageChangesByGroup**](CommunityGroupApi.md#getcommunitygroupmessagechangesbygroup) | **GET** /api/v1/communityGroups/{groupId}/Changes/Messages | Get a paged result of community group message changes for the chosen group.
[**getCommunityGroups**](CommunityGroupApi.md#getcommunitygroups) | **GET** /api/v1/communityGroups | Get a paged result of community groups with origin

# **getCommunityFileChanges**
> \Membercare\Client\Model\CommunityFileChangeInfoPagedResult getCommunityFileChanges($token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community files changes for all groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityFileChanges($token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityFileChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityFileChangeInfoPagedResult**](../Model/CommunityFileChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityFileChangesByGroup**
> \Membercare\Client\Model\CommunityFileChangeInfoPagedResult getCommunityFileChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community file changes for the chosen group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | 
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityFileChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityFileChangesByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityFileChangeInfoPagedResult**](../Model/CommunityFileChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroup**
> \Membercare\Client\Model\CommunityGroupWithOrigin getCommunityGroup($group_id, $token)

Get a community group with origin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getCommunityGroup($group_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\CommunityGroupWithOrigin**](../Model/CommunityGroupWithOrigin.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupAnnouncementChanges**
> \Membercare\Client\Model\CommunityGroupAnnouncementChangeInfoPagedResult getCommunityGroupAnnouncementChanges($token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community group announcement changes for all groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupAnnouncementChanges($token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroupAnnouncementChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupAnnouncementChangeInfoPagedResult**](../Model/CommunityGroupAnnouncementChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupAnnouncementChangesByGroup**
> \Membercare\Client\Model\CommunityGroupAnnouncementChangeInfoPagedResult getCommunityGroupAnnouncementChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community group announcement changes for the chosen group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | 
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupAnnouncementChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroupAnnouncementChangesByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupAnnouncementChangeInfoPagedResult**](../Model/CommunityGroupAnnouncementChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupMeetingChanges**
> \Membercare\Client\Model\CommunityGroupMeetingChangeInfoPagedResult getCommunityGroupMeetingChanges($token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community group meeting changes for all groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupMeetingChanges($token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroupMeetingChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupMeetingChangeInfoPagedResult**](../Model/CommunityGroupMeetingChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupMeetingChangesByGroup**
> \Membercare\Client\Model\CommunityGroupMeetingChangeInfoPagedResult getCommunityGroupMeetingChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community group meeting changes for the chosen group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | 
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupMeetingChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroupMeetingChangesByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupMeetingChangeInfoPagedResult**](../Model/CommunityGroupMeetingChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupMembers**
> \Membercare\Client\Model\CommunityGroupMemberPagedResult getCommunityGroupMembers($group_id, $token, $page, $page_size)

Get members of a community group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupMembers($group_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupMemberPagedResult**](../Model/CommunityGroupMemberPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupMessageChanges**
> \Membercare\Client\Model\CommunityGroupMessageChangeInfoPagedResult getCommunityGroupMessageChanges($token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community group message changes for all groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupMessageChanges($token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroupMessageChanges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupMessageChangeInfoPagedResult**](../Model/CommunityGroupMessageChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupMessageChangesByGroup**
> \Membercare\Client\Model\CommunityGroupMessageChangeInfoPagedResult getCommunityGroupMessageChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size)

Get a paged result of community group message changes for the chosen group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$group_id = 789; // int | 
$token = "token_example"; // string | access token
$changed_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$changed_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If not set current time will be used
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupMessageChangesByGroup($group_id, $token, $changed_after, $changed_before, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroupMessageChangesByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |
 **token** | **string**| access token |
 **changed_after** | **\DateTime**|  | [optional]
 **changed_before** | **\DateTime**| If not set current time will be used | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupMessageChangeInfoPagedResult**](../Model/CommunityGroupMessageChangeInfoPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroups**
> \Membercare\Client\Model\CommunityGroupWithOriginPagedResult getCommunityGroups($token, $valid_on, $page, $page_size)

Get a paged result of community groups with origin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\CommunityGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$valid_on = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroups($token, $valid_on, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityGroupApi->getCommunityGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **valid_on** | **\DateTime**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CommunityGroupWithOriginPagedResult**](../Model/CommunityGroupWithOriginPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

