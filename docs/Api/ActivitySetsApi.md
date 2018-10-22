# Swagger\Client\ActivitySetsApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivitySet**](ActivitySetsApi.md#getActivitySet) | **GET** /ActivitySets/{id} | Gets a single Activity Set
[**getActivitySets**](ActivitySetsApi.md#getActivitySets) | **GET** /ActivitySets | Gets a list of Activity Sets


# **getActivitySet**
> \Swagger\Client\Model\ActivitySet getActivitySet($id, $authorization)

Gets a single Activity Set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivitySetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | An Activity Set's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getActivitySet($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitySetsApi->getActivitySet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Activity Set&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\ActivitySet**](../Model/ActivitySet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivitySets**
> object[] getActivitySets($authorization, $brief, $skip, $top, $count_total)

Gets a list of Activity Sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivitySetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the activity set.
$skip = 56; // int | Optional, number of activity sets to skip.
$top = 56; // int | Optional, maximum number of activity sets to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getActivitySets($authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitySetsApi->getActivitySets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the activity set. | [optional] [default to false]
 **skip** | **int**| Optional, number of activity sets to skip. | [optional]
 **top** | **int**| Optional, maximum number of activity sets to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

