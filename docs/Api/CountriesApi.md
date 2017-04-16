# Swagger\Client\CountriesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries**](CountriesApi.md#getCountries) | **GET** /Countries | Gets a list of Countries used by Insightly


# **getCountries**
> \Swagger\Client\Model\APICountry[] getCountries()

Gets a list of Countries used by Insightly

This read only endpoint returns a list of the countries Insightly recognizes for use in addresses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CountriesApi();

try {
    $result = $api_instance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountriesApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\APICountry[]**](../Model/APICountry.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

