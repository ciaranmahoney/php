# Swagger\Client\OpportunityStateReasonsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOpportunityStateReasons**](OpportunityStateReasonsApi.md#getOpportunityStateReasons) | **GET** /OpportunityStateReasons | Gets a list of Opportunity State Reasons


# **getOpportunityStateReasons**
> \Swagger\Client\Model\OpportunityStateReason[] getOpportunityStateReasons($skip, $top, $count_total)

Gets a list of Opportunity State Reasons

This endpoint returns a list of opportunity state reasons set up for the Insightly instance.            This is a read only endpoint, so to add or update opportunity state reasons, you will need to do that via the web app.            Opportunity state reasons are used to indicate why the opportunity state was set to its current value.            For example, you can use this to indicate why you lost a particular sale.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunityStateReasonsApi();
$skip = 56; // int | Optional, number of states to skip.
$top = 56; // int | Optional, maximum number of states to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getOpportunityStateReasons($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityStateReasonsApi->getOpportunityStateReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of states to skip. | [optional]
 **top** | **int**| Optional, maximum number of states to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\OpportunityStateReason[]**](../Model/OpportunityStateReason.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

