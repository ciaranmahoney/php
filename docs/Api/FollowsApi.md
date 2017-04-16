# Swagger\Client\FollowsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFollows**](FollowsApi.md#getFollows) | **GET** /Follows | Gets a list of followed records for the user


# **getFollows**
> \Swagger\Client\Model\UserFollow[] getFollows($record_type, $skip, $top, $count_total)

Gets a list of followed records for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FollowsApi();
$record_type = "record_type_example"; // string | Optional, filters followed records by a given record type.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFollows($record_type, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowsApi->getFollows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_type** | **string**| Optional, filters followed records by a given record type. | [optional]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\UserFollow[]**](../Model/UserFollow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

