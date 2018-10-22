# Swagger\Client\LeadStatusesApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLeadStatus**](LeadStatusesApi.md#addLeadStatus) | **POST** /LeadStatuses | Adds a Lead Status
[**deleteLeadStatus**](LeadStatusesApi.md#deleteLeadStatus) | **DELETE** /LeadStatuses | Deletes a Lead Status
[**getLeadStatuses**](LeadStatusesApi.md#getLeadStatuses) | **GET** /LeadStatuses | Gets a list of Lead Statuses
[**updateLeadStatus**](LeadStatusesApi.md#updateLeadStatus) | **PUT** /LeadStatuses | Updates a Lead Status


# **addLeadStatus**
> \Swagger\Client\Model\LeadStatus addLeadStatus($lead_status, $authorization)

Adds a Lead Status

This endpoint is used to add a new lead status option to the instance. This endpoint is only accessible to users with administrator access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_status = new \Swagger\Client\Model\APILeadStatus(); // \Swagger\Client\Model\APILeadStatus | The Lead Status to add
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addLeadStatus($lead_status, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->addLeadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_status** | [**\Swagger\Client\Model\APILeadStatus**](../Model/APILeadStatus.md)| The Lead Status to add |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\LeadStatus**](../Model/LeadStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLeadStatus**
> deleteLeadStatus($id, $authorization)

Deletes a Lead Status

This endpoint is used to delete an existing lead status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Lead Status's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteLeadStatus($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->deleteLeadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead Status&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadStatuses**
> object[] getLeadStatuses($authorization, $include_converted, $skip, $top, $count_total)

Gets a list of Lead Statuses

This endpoint returns a list of the possible lead statuses that have been defined for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$include_converted = false; // bool | Optional, by default converted status is not included, pass in \"true\" to include it in the response
$skip = 56; // int | Optional, number of lead statuses to skip.
$top = 56; // int | Optional, maximum number of lead statuses to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getLeadStatuses($authorization, $include_converted, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->getLeadStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **include_converted** | **bool**| Optional, by default converted status is not included, pass in \&quot;true\&quot; to include it in the response | [optional] [default to false]
 **skip** | **int**| Optional, number of lead statuses to skip. | [optional]
 **top** | **int**| Optional, maximum number of lead statuses to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLeadStatus**
> \Swagger\Client\Model\LeadStatus updateLeadStatus($lead_status, $authorization)

Updates a Lead Status

This endpoint is used to update an existing lead status. This endpoint is only accessible to users with administrator access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LeadStatusesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_status = new \Swagger\Client\Model\APILeadStatus(); // \Swagger\Client\Model\APILeadStatus | A Lead Status
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->updateLeadStatus($lead_status, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->updateLeadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_status** | [**\Swagger\Client\Model\APILeadStatus**](../Model/APILeadStatus.md)| A Lead Status |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\LeadStatus**](../Model/LeadStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

