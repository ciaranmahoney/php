# Swagger\Client\FileCategoriesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFileCategory**](FileCategoriesApi.md#addFileCategory) | **POST** /FileCategories | Adds a File Category
[**deleteFileCategory**](FileCategoriesApi.md#deleteFileCategory) | **DELETE** /FileCategories/{id} | Deactivates a File Category
[**getFileCategories**](FileCategoriesApi.md#getFileCategories) | **GET** /FileCategories | Gets a list of File Categories
[**getFileCategory**](FileCategoriesApi.md#getFileCategory) | **GET** /FileCategories/{id} | Gets a File Category
[**updateFileCategory**](FileCategoriesApi.md#updateFileCategory) | **PUT** /FileCategories | Updates a File Category


# **addFileCategory**
> \Swagger\Client\Model\Category addFileCategory($category)

Adds a File Category

This endpoint is used to create a new File Category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileCategoriesApi();
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | The File Category to add (just include JSON object as request body)

try {
    $result = $api_instance->addFileCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileCategoriesApi->addFileCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/\Swagger\Client\Model\APICategory.md)| The File Category to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFileCategory**
> deleteFileCategory($id)

Deactivates a File Category

This endpoint is used to deactivate an existing File Category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileCategoriesApi();
$id = 789; // int | A File Category's ID

try {
    $api_instance->deleteFileCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling FileCategoriesApi->deleteFileCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A File Category&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileCategories**
> \Swagger\Client\Model\Category[] getFileCategories($skip, $top, $count_total)

Gets a list of File Categories

This read only endpoint returns a list of file categories that have been set up for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileCategoriesApi();
$skip = 56; // int | Optional, number of file categories to skip.
$top = 56; // int | Optional, maximum number of file categories to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileCategories($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileCategoriesApi->getFileCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of file categories to skip. | [optional]
 **top** | **int**| Optional, maximum number of file categories to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Category[]**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileCategory**
> \Swagger\Client\Model\Category getFileCategory($id)

Gets a File Category

This endpoint returns the graph for a specific file category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileCategoriesApi();
$id = 789; // int | A File Category's ID

try {
    $result = $api_instance->getFileCategory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileCategoriesApi->getFileCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A File Category&#39;s ID |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFileCategory**
> \Swagger\Client\Model\Category updateFileCategory($category)

Updates a File Category

This endpoint is used to update an existing File Category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileCategoriesApi();
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | A File Category (just include JSON object as request body)

try {
    $result = $api_instance->updateFileCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileCategoriesApi->updateFileCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/\Swagger\Client\Model\APICategory.md)| A File Category (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

