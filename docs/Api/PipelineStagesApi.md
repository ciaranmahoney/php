# Swagger\Client\PipelineStagesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPipelineStage**](PipelineStagesApi.md#getPipelineStage) | **GET** /PipelineStages/{id} | Gets a Pipeline Stage
[**getPipelineStages**](PipelineStagesApi.md#getPipelineStages) | **GET** /PipelineStages | Gets a list of Pipeline Stages


# **getPipelineStage**
> \Swagger\Client\Model\PipelineStage getPipelineStage($id)

Gets a Pipeline Stage

This endpoint returns the graph for a specific pipeline stage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PipelineStagesApi();
$id = 789; // int | A Pipeline Stage's ID

try {
    $result = $api_instance->getPipelineStage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelineStagesApi->getPipelineStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Pipeline Stage&#39;s ID |

### Return type

[**\Swagger\Client\Model\PipelineStage**](../Model/PipelineStage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPipelineStages**
> \Swagger\Client\Model\PipelineStage[] getPipelineStages($skip, $top, $count_total)

Gets a list of Pipeline Stages

This read only endpoint returns a list of the pipeline stages that have been set up for the Insightly instance.            Pipeline stages are used to indicate where a project or opportunity is in terms of its progression.            For example, stage 1 for the sales pipeline might be \"initial contact\", while stage 4 might be \"generating quote\".            The API for pipeline stages is read only, so to create or update pipeline stages, you'll need to use the web app to do so.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PipelineStagesApi();
$skip = 56; // int | Optional, number of stages to skip.
$top = 56; // int | Optional, maximum number of stages to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getPipelineStages($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PipelineStagesApi->getPipelineStages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of stages to skip. | [optional]
 **top** | **int**| Optional, maximum number of stages to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\PipelineStage[]**](../Model/PipelineStage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

