# Swagger\Client\CustomFieldsApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomFields**](CustomFieldsApi.md#getCustomFields) | **GET** /CustomFields/{objectName} | Gets a list of Custom Fields
[**getCustomfieldBySearch**](CustomFieldsApi.md#getCustomfieldBySearch) | **GET** /CustomFields/{objectName}/Search | Gets a Custom Field by name


# **getCustomFields**
> \Swagger\Client\Model\APICustomFieldMetadata[] getCustomFields($object_name)

Gets a list of Custom Fields

Use this API call to get a list of custom fields metadata. The properties FIELD_NAME and FIELD_ORDER can be used to determine which fields belong to a particular object. A common problem API users have is to reference an invalid FIELD_NAME when referencing custom fields in a newly created or updated object.            If you plan to use custom fields in your API based application, be sure you are working with valid custom field names. To add or update custom fields for your Insightly instance, you'll need to go to the web app to do so.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | 

try {
    $result = $apiInstance->getCustomFields($object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\APICustomFieldMetadata[]**](../Model/APICustomFieldMetadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomfieldBySearch**
> \Swagger\Client\Model\CustomFieldMetadata getCustomfieldBySearch($object_name, $field_name, $authorization)

Gets a Custom Field by name

This read only endpoint returns a custom field by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$object_name = "object_name_example"; // string | The object name
$field_name = "field_name_example"; // string | The custom field name
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getCustomfieldBySearch($object_name, $field_name, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| The object name |
 **field_name** | **string**| The custom field name |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\CustomFieldMetadata**](../Model/CustomFieldMetadata.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

