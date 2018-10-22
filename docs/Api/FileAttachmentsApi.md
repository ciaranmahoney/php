# Swagger\Client\FileAttachmentsApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFileAttachment**](FileAttachmentsApi.md#deleteFileAttachment) | **DELETE** /FileAttachments/{id} | Deletes a File Attachment
[**getFileAttachment**](FileAttachmentsApi.md#getFileAttachment) | **GET** /FileAttachments/{id} | Gets a File Attachment


# **deleteFileAttachment**
> deleteFileAttachment($id, $authorization)

Deletes a File Attachment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A File Attachment's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteFileAttachment($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->deleteFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A File Attachment&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileAttachment**
> getFileAttachment($id, $authorization)

Gets a File Attachment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FileAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A File Attachment's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->getFileAttachment($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling FileAttachmentsApi->getFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A File Attachment&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

