# Swagger\Client\LeadSourcesApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLeadSource**](LeadSourcesApi.md#addLeadSource) | **POST** /LeadSources | Adds a Lead Source
[**deleteLeadSource**](LeadSourcesApi.md#deleteLeadSource) | **DELETE** /LeadSources | Deletes a Lead Source
[**getLeadSources**](LeadSourcesApi.md#getLeadSources) | **GET** /LeadSources | Gets a list of Lead Sources
[**updateLeadSource**](LeadSourcesApi.md#updateLeadSource) | **PUT** /LeadSources | Updates a Lead Source


# **addLeadSource**
> \Swagger\Client\Model\LeadSource addLeadSource($lead_source, $authorization)

Adds a Lead Source

This endpoint is used to define a new lead source. This endpoint is only accessible to users with administrator access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source = new \Swagger\Client\Model\APILeadSource(); // \Swagger\Client\Model\APILeadSource | The Lead Source to add
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addLeadSource($lead_source, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->addLeadSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_source** | [**\Swagger\Client\Model\APILeadSource**](../Model/APILeadSource.md)| The Lead Source to add |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLeadSource**
> deleteLeadSource($id, $authorization)

Deletes a Lead Source

This endpoint is used to delete an existing lead source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Lead Source's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteLeadSource($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->deleteLeadSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead Source&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadSources**
> object[] getLeadSources($authorization, $skip, $top, $count_total)

Gets a list of Lead Sources

This endpoint returns a list of the lead sources that have been defined on the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$skip = 56; // int | Optional, number of lead sources to skip.
$top = 56; // int | Optional, maximum number of lead sources to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getLeadSources($authorization, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->getLeadSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **skip** | **int**| Optional, number of lead sources to skip. | [optional]
 **top** | **int**| Optional, maximum number of lead sources to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLeadSource**
> \Swagger\Client\Model\LeadSource updateLeadSource($lead_source, $authorization)

Updates a Lead Source

This endpoint is used to update an existing lead source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadSourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_source = new \Swagger\Client\Model\APILeadSource(); // \Swagger\Client\Model\APILeadSource | A Lead Source
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->updateLeadSource($lead_source, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->updateLeadSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_source** | [**\Swagger\Client\Model\APILeadSource**](../Model/APILeadSource.md)| A Lead Source |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

