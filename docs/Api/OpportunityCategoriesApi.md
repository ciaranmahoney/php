# Swagger\Client\OpportunityCategoriesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOpportunityCategory**](OpportunityCategoriesApi.md#addOpportunityCategory) | **POST** /OpportunityCategories | Adds an Opportunity Category
[**deleteOpportunityCategory**](OpportunityCategoriesApi.md#deleteOpportunityCategory) | **DELETE** /OpportunityCategories/{id} | Deactivates an Opportunity Category
[**getOpportunityCategories**](OpportunityCategoriesApi.md#getOpportunityCategories) | **GET** /OpportunityCategories | Gets a list of Opportunity Categories
[**getOpportunityCategory**](OpportunityCategoriesApi.md#getOpportunityCategory) | **GET** /OpportunityCategories/{id} | Gets an Opportunity Category
[**updateOpportunityCategory**](OpportunityCategoriesApi.md#updateOpportunityCategory) | **PUT** /OpportunityCategories | Updates an Opportunity Category


# **addOpportunityCategory**
> \Swagger\Client\Model\Category addOpportunityCategory($category)

Adds an Opportunity Category

This endpoint is used to create a new opportunity category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunityCategoriesApi();
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | The Opportunity Category to add (just include JSON object as request body)

try {
    $result = $api_instance->addOpportunityCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->addOpportunityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/\Swagger\Client\Model\APICategory.md)| The Opportunity Category to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOpportunityCategory**
> deleteOpportunityCategory($id)

Deactivates an Opportunity Category

The endpoint is used to deactivate an existing opportunity category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunityCategoriesApi();
$id = 789; // int | An Opportunity Category's ID

try {
    $api_instance->deleteOpportunityCategory($id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->deleteOpportunityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity Category&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunityCategories**
> \Swagger\Client\Model\Category[] getOpportunityCategories($skip, $top, $count_total)

Gets a list of Opportunity Categories

This read only endpoint returns a list of opportunity categories set up for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunityCategoriesApi();
$skip = 56; // int | Optional, number of categories to skip.
$top = 56; // int | Optional, maximum number of categories to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getOpportunityCategories($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->getOpportunityCategories: ', $e->getMessage(), PHP_EOL;
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

# **getOpportunityCategory**
> \Swagger\Client\Model\Category getOpportunityCategory($id)

Gets an Opportunity Category

This endpoint returns the graph for a specific opportunity category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunityCategoriesApi();
$id = 789; // int | An Opportunity Category's ID

try {
    $result = $api_instance->getOpportunityCategory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->getOpportunityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity Category&#39;s ID |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOpportunityCategory**
> \Swagger\Client\Model\Category updateOpportunityCategory($category)

Updates an Opportunity Category

This endpoint is used to update an existing opportunity category (for example, to change the background color for its label in the user interace). This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunityCategoriesApi();
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | An Opportunity Category (just include JSON object as request body)

try {
    $result = $api_instance->updateOpportunityCategory($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->updateOpportunityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/\Swagger\Client\Model\APICategory.md)| An Opportunity Category (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

