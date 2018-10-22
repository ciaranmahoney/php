# Swagger\Client\ProjectCategoriesApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProjectCategory**](ProjectCategoriesApi.md#addProjectCategory) | **POST** /ProjectCategories | Adds a Project Category
[**deleteProjectCategory**](ProjectCategoriesApi.md#deleteProjectCategory) | **DELETE** /ProjectCategories/{id} | Deactivates a Project Category
[**getProjectCategories**](ProjectCategoriesApi.md#getProjectCategories) | **GET** /ProjectCategories | Gets a list of Project Categories
[**getProjectCategory**](ProjectCategoriesApi.md#getProjectCategory) | **GET** /ProjectCategories/{id} | Gets a Project Category
[**updateProjectCategory**](ProjectCategoriesApi.md#updateProjectCategory) | **PUT** /ProjectCategories | Updates a Project Category


# **addProjectCategory**
> \Swagger\Client\Model\Category addProjectCategory($category, $authorization)

Adds a Project Category

This endpoint is used to create a new project category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | The Project Category to add (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addProjectCategory($category, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->addProjectCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/APICategory.md)| The Project Category to add (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProjectCategory**
> deleteProjectCategory($id, $authorization)

Deactivates a Project Category

This endpoint is used to deactivate an existing project category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Project Category's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteProjectCategory($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->deleteProjectCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project Category&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectCategories**
> object[] getProjectCategories($authorization, $skip, $top, $count_total)

Gets a list of Project Categories

This read only endpoint returns a list of the project categories that have been configured for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$skip = 56; // int | Optional, number of categories to skip.
$top = 56; // int | Optional, maximum number of categories to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getProjectCategories($authorization, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->getProjectCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **skip** | **int**| Optional, number of categories to skip. | [optional]
 **top** | **int**| Optional, maximum number of categories to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectCategory**
> \Swagger\Client\Model\Category getProjectCategory($id, $authorization)

Gets a Project Category

This endpoint is used to retrieve the graph for a specific project category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Project Category's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getProjectCategory($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->getProjectCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project Category&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProjectCategory**
> \Swagger\Client\Model\Category updateProjectCategory($category, $authorization)

Updates a Project Category

This endpoint is used to update an existing project category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ProjectCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | A Project Category (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->updateProjectCategory($category, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->updateProjectCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/APICategory.md)| A Project Category (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

