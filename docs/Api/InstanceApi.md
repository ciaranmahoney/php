# Swagger\Client\InstanceApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInstance**](InstanceApi.md#getInstance) | **GET** /Instance | Gets the Instance


# **getInstance**
> \Swagger\Client\Model\APIInstance getInstance()

Gets the Instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\InstanceApi();

try {
    $result = $api_instance->getInstance();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\APIInstance**](../Model/APIInstance.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

