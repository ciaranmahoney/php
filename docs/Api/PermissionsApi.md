# Swagger\Client\PermissionsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPermissions**](PermissionsApi.md#getPermissions) | **GET** /Permissions | Gets the Permissions for a User


# **getPermissions**
> \Swagger\Client\Model\APIPermissions getPermissions()

Gets the Permissions for a User

Permissions determine if an individual user can read, edit, delete, or create records of a given object type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PermissionsApi();

try {
    $result = $api_instance->getPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\APIPermissions**](../Model/APIPermissions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

