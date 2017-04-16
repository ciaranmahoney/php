# Swagger\Client\ProjectCategoriesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addProjectCategory**](ProjectCategoriesApi.md#addProjectCategory) | **POST** /ProjectCategories | Adds a Project Category
[**deleteProjectCategory**](ProjectCategoriesApi.md#deleteProjectCategory) | **DELETE** /ProjectCategories/{id} | Deactivates a Project Category
[**getProjectCategories**](ProjectCategoriesApi.md#getProjectCategories) | **GET** /ProjectCategories | Gets a list of Project Categories
[**getProjectCategory**](ProjectCategoriesApi.md#getProjectCategory) | **GET** /ProjectCategories/{id} | Gets a Project Category
[**updateProjectCategory**](ProjectCategoriesApi.md#updateProjectCategory) | **PUT** /ProjectCategories | Updates a Project Category


# **addProjectCategory**
> \Swagger\Client\Model\Category addProjectCategory($category)

Adds a Project Category

This endpoint is used to create a new project category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectCategoriesApi();
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | The Project Category to add (just include JSON object as request body)

try {
    $result = $api_instance->addProjectCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->addProjectCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/\Swagger\Client\Model\APICategory.md)| The Project Category to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProjectCategory**
> deleteProjectCategory($id)

Deactivates a Project Category

This endpoint is used to deactivate an existing project category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectCategoriesApi();
$id = 789; // int | A Project Category's ID

try {
    $api_instance->deleteProjectCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->deleteProjectCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project Category&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectCategories**
> \Swagger\Client\Model\Category[] getProjectCategories($skip, $top, $count_total)

Gets a list of Project Categories

This read only endpoint returns a list of the project categories that have been configured for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectCategoriesApi();
$skip = 56; // int | Optional, number of categories to skip.
$top = 56; // int | Optional, maximum number of categories to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getProjectCategories($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->getProjectCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of categories to skip. | [optional]
 **top** | **int**| Optional, maximum number of categories to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Category[]**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectCategory**
> \Swagger\Client\Model\Category getProjectCategory($id)

Gets a Project Category

This endpoint is used to retrieve the graph for a specific project category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectCategoriesApi();
$id = 789; // int | A Project Category's ID

try {
    $result = $api_instance->getProjectCategory($id);
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

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProjectCategory**
> \Swagger\Client\Model\Category updateProjectCategory($category)

Updates a Project Category

This endpoint is used to update an existing project category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectCategoriesApi();
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | A Project Category (just include JSON object as request body)

try {
    $result = $api_instance->updateProjectCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectCategoriesApi->updateProjectCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/\Swagger\Client\Model\APICategory.md)| A Project Category (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

