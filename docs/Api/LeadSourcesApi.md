# Swagger\Client\LeadSourcesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLeadSource**](LeadSourcesApi.md#addLeadSource) | **POST** /LeadSources | Adds a Lead Source
[**deleteLeadSource**](LeadSourcesApi.md#deleteLeadSource) | **DELETE** /LeadSources/{id} | Deletes a Lead Source
[**getLeadSources**](LeadSourcesApi.md#getLeadSources) | **GET** /LeadSources | Gets a list of Lead Sources
[**updateLeadSource**](LeadSourcesApi.md#updateLeadSource) | **PUT** /LeadSources | Updates a Lead Source


# **addLeadSource**
> \Swagger\Client\Model\LeadSource addLeadSource($lead_source)

Adds a Lead Source

This endpoint is used to define a new lead source. This endpoint is only accessible to users with administrator access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadSourcesApi();
$lead_source = new \Swagger\Client\Model\APILeadSource(); // \Swagger\Client\Model\APILeadSource | The Lead Source to add

try {
    $result = $api_instance->addLeadSource($lead_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->addLeadSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_source** | [**\Swagger\Client\Model\APILeadSource**](../Model/\Swagger\Client\Model\APILeadSource.md)| The Lead Source to add |

### Return type

[**\Swagger\Client\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLeadSource**
> deleteLeadSource($id)

Deletes a Lead Source

This endpoint is used to delete an existing lead source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadSourcesApi();
$id = 789; // int | A Lead Source's ID

try {
    $api_instance->deleteLeadSource($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->deleteLeadSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead Source&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadSources**
> \Swagger\Client\Model\LeadSource[] getLeadSources($skip, $top, $count_total)

Gets a list of Lead Sources

This endpoint returns a list of the lead sources that have been defined on the Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadSourcesApi();
$skip = 56; // int | Optional, number of lead sources to skip.
$top = 56; // int | Optional, maximum number of lead sources to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getLeadSources($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->getLeadSources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of lead sources to skip. | [optional]
 **top** | **int**| Optional, maximum number of lead sources to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\LeadSource[]**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLeadSource**
> \Swagger\Client\Model\LeadSource updateLeadSource($lead_source)

Updates a Lead Source

This endpoint is used to update an existing lead source.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadSourcesApi();
$lead_source = new \Swagger\Client\Model\APILeadSource(); // \Swagger\Client\Model\APILeadSource | A Lead Source

try {
    $result = $api_instance->updateLeadSource($lead_source);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadSourcesApi->updateLeadSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_source** | [**\Swagger\Client\Model\APILeadSource**](../Model/\Swagger\Client\Model\APILeadSource.md)| A Lead Source |

### Return type

[**\Swagger\Client\Model\LeadSource**](../Model/LeadSource.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

