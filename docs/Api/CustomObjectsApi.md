# Swagger\Client\CustomObjectsApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomObjects**](CustomObjectsApi.md#getCustomObjects) | **GET** /CustomObjects | Gets a list of custom objects
[**getCustomObjects_0**](CustomObjectsApi.md#getCustomObjects_0) | **GET** /CustomObjects/{customObjectName} | Gets a custom object by object name


# **getCustomObjects**
> \Swagger\Client\Model\APICustomObject[] getCustomObjects()

Gets a list of custom objects

This read only endpoint returns a list of the custom objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCustomObjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->getCustomObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\APICustomObject[]**](../Model/APICustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomObjects_0**
> \Swagger\Client\Model\CustomObject getCustomObjects_0($custom_object_name, $authorization)

Gets a custom object by object name

This read only endpoint returns a custom object by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_object_name = "custom_object_name_example"; // string | The custom object name
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getCustomObjects_0($custom_object_name, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->getCustomObjects_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_object_name** | **string**| The custom object name |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\CustomObject**](../Model/CustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

