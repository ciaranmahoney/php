# Swagger\Client\PipelinesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPipeline**](PipelinesApi.md#getPipeline) | **GET** /Pipelines/{id} | Gets a Pipeline
[**getPipelines**](PipelinesApi.md#getPipelines) | **GET** /Pipelines | Gets a list of Pipelines


# **getPipeline**
> getPipeline($id)

Gets a Pipeline

This endpoint returns the graph for a specific pipeline.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PipelinesApi();
$id = 789; // int | A Pipeline's ID

try {
    $api_instance->getPipeline($id);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getPipeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Pipeline&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPipelines**
> \Swagger\Client\Model\Pipeline[] getPipelines($skip, $top, $count_total)

Gets a list of Pipelines

This read only endpoint returns a list of pipelines that have been set up for the Insightly instance.            Pipelines can be defined for both projects and opportunities, and are used to track the progression of projects and opportunities.            To create and update pipelines, you'll need to go to the web app (API access is read-only).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PipelinesApi();
$skip = 56; // int | Optional, number of pipelines to skip.
$top = 56; // int | Optional, maximum number of pipelines to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getPipelines($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelinesApi->getPipelines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of pipelines to skip. | [optional]
 **top** | **int**| Optional, maximum number of pipelines to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Pipeline[]**](../Model/Pipeline.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

