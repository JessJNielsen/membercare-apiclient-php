# Membercare\Client\VotingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVotingMembers**](VotingApi.md#getvotingmembers) | **POST** /api/v1/voting/members | Find members who are eligable to vote, based on submitted criteria

# **getVotingMembers**
> \Membercare\Client\Model\VotingMemberPagedResult getVotingMembers($token, $body, $page, $page_size)

Find members who are eligable to vote, based on submitted criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\VotingMemberCriteria(); // \Membercare\Client\Model\VotingMemberCriteria | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getVotingMembers($token, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->getVotingMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\VotingMemberCriteria**](../Model/VotingMemberCriteria.md)|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\VotingMemberPagedResult**](../Model/VotingMemberPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

