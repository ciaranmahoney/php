# Swagger\Client\MilestoneApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteEntity**](MilestoneApi.md#deleteEntity) | **DELETE** /Milestone/{id} | Deletes a Milestone
[**getEntities**](MilestoneApi.md#getEntities) | **GET** /Milestone | Gets a list of Milestone
[**getEntitiesBySearch**](MilestoneApi.md#getEntitiesBySearch) | **GET** /Milestone/Search | Gets a filtered list of Milestone
[**getEntity**](MilestoneApi.md#getEntity) | **GET** /Milestone/{id} | Gets a Milestone


# **deleteEntity**
> deleteEntity($id, $authorization)

Deletes a Milestone



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MilestoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Entity's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteEntity($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling MilestoneApi->deleteEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Entity&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntities**
> object[] getEntities($authorization, $brief, $skip, $top, $count_total)

Gets a list of Milestone

Simple object graphs (excluding LINKS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MilestoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional,true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntities($authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestoneApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional,true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesBySearch**
> object[] getEntitiesBySearch($authorization, $field_name, $field_value, $brief, $skip, $top, $count_total)

Gets a filtered list of Milestone

To filter with a field name and value, both field_name and field_value parameters must be provided.            <br /> Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MilestoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$field_name = "field_name_example"; // string | Optional, field name for object
$field_value = "field_value_example"; // string | Optional, field value of the record
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntitiesBySearch($authorization, $field_name, $field_value, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestoneApi->getEntitiesBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_name** | **string**| Optional, field name for object | [optional]
 **field_value** | **string**| Optional, field value of the record | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntity**
> \Swagger\Client\Model\Milestone getEntity($id, $authorization)

Gets a Milestone



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MilestoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getEntity($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MilestoneApi->getEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

