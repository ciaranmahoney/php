# Swagger\Client\CustomFieldGroupsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomFieldGroups**](CustomFieldGroupsApi.md#getCustomFieldGroups) | **GET** /CustomFieldGroups | Gets a list of Custom Field Groups defined for your instance


# **getCustomFieldGroups**
> \Swagger\Client\Model\CustomFieldGroup[] getCustomFieldGroups($skip, $top, $count_total)

Gets a list of Custom Field Groups defined for your instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomFieldGroupsApi();
$skip = 56; // int | Optional, number of custom field groups to skip.
$top = 56; // int | Optional, maximum number of custom field groups to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getCustomFieldGroups($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldGroupsApi->getCustomFieldGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of custom field groups to skip. | [optional]
 **top** | **int**| Optional, maximum number of custom field groups to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\CustomFieldGroup[]**](../Model/CustomFieldGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

