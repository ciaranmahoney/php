# Swagger\Client\LeadStatusesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLeadStatus**](LeadStatusesApi.md#addLeadStatus) | **POST** /LeadStatuses | Adds a Lead Status
[**deleteLeadStatus**](LeadStatusesApi.md#deleteLeadStatus) | **DELETE** /LeadStatuses/{id} | Deletes a Lead Status
[**getLeadStatuses**](LeadStatusesApi.md#getLeadStatuses) | **GET** /LeadStatuses | Gets a list of Lead Statuses
[**updateLeadStatus**](LeadStatusesApi.md#updateLeadStatus) | **PUT** /LeadStatuses | Updates a Lead Status


# **addLeadStatus**
> \Swagger\Client\Model\LeadStatus addLeadStatus($lead_status)

Adds a Lead Status

This endpoint is used to add a new lead status option to the instance. This endpoint is only accessible to users with administrator access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadStatusesApi();
$lead_status = new \Swagger\Client\Model\APILeadStatus(); // \Swagger\Client\Model\APILeadStatus | The Lead Status to add

try {
    $result = $api_instance->addLeadStatus($lead_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->addLeadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_status** | [**\Swagger\Client\Model\APILeadStatus**](../Model/\Swagger\Client\Model\APILeadStatus.md)| The Lead Status to add |

### Return type

[**\Swagger\Client\Model\LeadStatus**](../Model/LeadStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLeadStatus**
> deleteLeadStatus($id)

Deletes a Lead Status

This endpoint is used to delete an existing lead status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadStatusesApi();
$id = 789; // int | A Lead Status's ID

try {
    $api_instance->deleteLeadStatus($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->deleteLeadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead Status&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadStatuses**
> \Swagger\Client\Model\LeadStatus[] getLeadStatuses($include_converted, $skip, $top, $count_total)

Gets a list of Lead Statuses

This endpoint returns a list of the possible lead statuses that have been defined for the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadStatusesApi();
$include_converted = false; // bool | Optional, by default converted status is not included, pass in \"true\" to include it in the response
$skip = 56; // int | Optional, number of lead statuses to skip.
$top = 56; // int | Optional, maximum number of lead statuses to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getLeadStatuses($include_converted, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->getLeadStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_converted** | **bool**| Optional, by default converted status is not included, pass in \&quot;true\&quot; to include it in the response | [optional] [default to false]
 **skip** | **int**| Optional, number of lead statuses to skip. | [optional]
 **top** | **int**| Optional, maximum number of lead statuses to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\LeadStatus[]**](../Model/LeadStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLeadStatus**
> \Swagger\Client\Model\LeadStatus updateLeadStatus($lead_status)

Updates a Lead Status

This endpoint is used to update an existing lead status. This endpoint is only accessible to users with administrator access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadStatusesApi();
$lead_status = new \Swagger\Client\Model\APILeadStatus(); // \Swagger\Client\Model\APILeadStatus | A Lead Status

try {
    $result = $api_instance->updateLeadStatus($lead_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadStatusesApi->updateLeadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_status** | [**\Swagger\Client\Model\APILeadStatus**](../Model/\Swagger\Client\Model\APILeadStatus.md)| A Lead Status |

### Return type

[**\Swagger\Client\Model\LeadStatus**](../Model/LeadStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

