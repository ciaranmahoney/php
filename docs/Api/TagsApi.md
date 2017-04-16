# Swagger\Client\TagsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTags**](TagsApi.md#getTags) | **GET** /Tags | Gets a list of Tags used for a record type


# **getTags**
> \Swagger\Client\Model\Tag[] getTags($record_type, $skip, $top, $count_total)

Gets a list of Tags used for a record type

This endpoint returns a list of tags associated with a record type. The endpoint expects the query parameter            record_type=contacts|leads|opportunities|organisations|projects|emails, so to fetch a list of tags associated with contacts, your query would be            /Tags?record_type=contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TagsApi();
$record_type = "record_type_example"; // string | Required, filters tags by a given record type.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTags($record_type, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **record_type** | **string**| Required, filters tags by a given record type. |
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

