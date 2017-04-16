# Swagger\Client\CustomFieldsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomFields**](CustomFieldsApi.md#getCustomFields) | **GET** /CustomFields | Gets a list of Custom Fields


# **getCustomFields**
> \Swagger\Client\Model\CustomFieldMetadata[] getCustomFields($skip, $top, $count_total)

Gets a list of Custom Fields

Use this API call to get a list of custom fields metadata. The properties FIELD_FOR, GROUP_ID, and ORDER_ID can be used to determine which fields belong to a particular object. See CustomFieldGroups if more data on a custom field's group is needed. A common problem API users have is to reference an invalid CUSTOM_FIELD_ID when referencing custom fields in a newly created or updated object.            If you plan to use custom fields in your API based application, be sure you are working with valid custom field IDs. To add or update custom fields for your Insightly instance, you'll need to go to the web app to do so.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomFieldsApi();
$skip = 56; // int | Optional, number of custom fields to skip.
$top = 56; // int | Optional, maximum number of custom fields to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getCustomFields($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of custom fields to skip. | [optional]
 **top** | **int**| Optional, maximum number of custom fields to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\CustomFieldMetadata[]**](../Model/CustomFieldMetadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

