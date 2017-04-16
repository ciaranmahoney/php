# Swagger\Client\FileAttachmentsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFileAttachment**](FileAttachmentsApi.md#deleteFileAttachment) | **DELETE** /FileAttachments/{id} | Deletes a File Attachment
[**getFileAttachment**](FileAttachmentsApi.md#getFileAttachment) | **GET** /FileAttachments/{id} | Gets a File Attachment


# **deleteFileAttachment**
> deleteFileAttachment($id)

Deletes a File Attachment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileAttachmentsApi();
$id = 789; // int | A File Attachment's ID

try {
    $api_instance->deleteFileAttachment($id);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->deleteFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A File Attachment&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileAttachment**
> getFileAttachment($id)

Gets a File Attachment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileAttachmentsApi();
$id = 789; // int | A File Attachment's ID

try {
    $api_instance->getFileAttachment($id);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->getFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A File Attachment&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

