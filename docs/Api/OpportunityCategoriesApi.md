# Swagger\Client\OpportunityCategoriesApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOpportunityCategory**](OpportunityCategoriesApi.md#addOpportunityCategory) | **POST** /OpportunityCategories | Adds an Opportunity Category
[**deleteOpportunityCategory**](OpportunityCategoriesApi.md#deleteOpportunityCategory) | **DELETE** /OpportunityCategories/{id} | Deactivates an Opportunity Category
[**getOpportunityCategories**](OpportunityCategoriesApi.md#getOpportunityCategories) | **GET** /OpportunityCategories | Gets a list of Opportunity Categories
[**getOpportunityCategory**](OpportunityCategoriesApi.md#getOpportunityCategory) | **GET** /OpportunityCategories/{id} | Gets an Opportunity Category
[**updateOpportunityCategory**](OpportunityCategoriesApi.md#updateOpportunityCategory) | **PUT** /OpportunityCategories | Updates an Opportunity Category


# **addOpportunityCategory**
> \Swagger\Client\Model\Category addOpportunityCategory($category, $authorization)

Adds an Opportunity Category

This endpoint is used to create a new opportunity category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunityCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | The Opportunity Category to add (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addOpportunityCategory($category, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->addOpportunityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/APICategory.md)| The Opportunity Category to add (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOpportunityCategory**
> deleteOpportunityCategory($id, $authorization)

Deactivates an Opportunity Category

The endpoint is used to deactivate an existing opportunity category. This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunityCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | An Opportunity Category's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteOpportunityCategory($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->deleteOpportunityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity Category&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunityCategories**
> object[] getOpportunityCategories($authorization, $skip, $top, $count_total)

Gets a list of Opportunity Categories

This read only endpoint returns a list of opportunity categories set up for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunityCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$skip = 56; // int | Optional, number of categories to skip.
$top = 56; // int | Optional, maximum number of categories to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getOpportunityCategories($authorization, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->getOpportunityCategories: ', $e->getMessage(), PHP_EOL;
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

# **getOpportunityCategory**
> \Swagger\Client\Model\Category getOpportunityCategory($id, $authorization)

Gets an Opportunity Category

This endpoint returns the graph for a specific opportunity category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunityCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | An Opportunity Category's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getOpportunityCategory($id, $authorization);
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
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOpportunityCategory**
> \Swagger\Client\Model\Category updateOpportunityCategory($category, $authorization)

Updates an Opportunity Category

This endpoint is used to update an existing opportunity category (for example, to change the background color for its label in the user interace). This endpoint is only accessible to users with administrator permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OpportunityCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$category = new \Swagger\Client\Model\APICategory(); // \Swagger\Client\Model\APICategory | An Opportunity Category (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->updateOpportunityCategory($category, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityCategoriesApi->updateOpportunityCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\APICategory**](../Model/APICategory.md)| An Opportunity Category (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Category**](../Model/Category.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

