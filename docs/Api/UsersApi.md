# Swagger\Client\UsersApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUser**](UsersApi.md#getUser) | **GET** /Users/{id} | Gets a User
[**getUserMe**](UsersApi.md#getUserMe) | **GET** /Users/Me | Gets the User object for the calling user.
[**getUsers**](UsersApi.md#getUsers) | **GET** /Users | Gets a list of Users
[**getUsersBySearch**](UsersApi.md#getUsersBySearch) | **GET** /Users/Search | Gets a filtered list of Users


# **getUser**
> \Swagger\Client\Model\User getUser($id)

Gets a User

This read only endpoint returns the details for a specific user on an Insightly instance, same fields as            returned by the /Users endpoint, but only for a single identified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$id = 789; // int | A User's ID

try {
    $result = $api_instance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A User&#39;s ID |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserMe**
> \Swagger\Client\Model\APIUser getUserMe()

Gets the User object for the calling user.

This read only endpoint returns the details for the currently authenticated user on an Insightly instance, same fields as            returned by the /Users endpoint, but only for a single identified user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();

try {
    $result = $api_instance->getUserMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\APIUser**](../Model/APIUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Swagger\Client\Model\User[] getUsers($skip, $top, $count_total)

Gets a list of Users

This is a read only endpoint that returns a list of users associated with an Insightly instance.            Use this endpoint when you need to obtain a list of valid USER_IDs, for example, when you want to assign            a task to a specific user (do not confuse the USER_ID with their CONTACT_ID).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$skip = 56; // int | Optional, number of users to skip.
$top = 56; // int | Optional, maximum number of users to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getUsers($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of users to skip. | [optional]
 **top** | **int**| Optional, maximum number of users to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersBySearch**
> \Swagger\Client\Model\User[] getUsersBySearch($first_name, $last_name, $email, $updated_after_utc, $skip, $top, $count_total)

Gets a filtered list of Users

This is a read only endpoint that returns a list of users associated with an Insightly instance.            Use this endpoint when you need to obtain a list of valid USER_IDs, for example, when you want to assign            a task to a specific user (do not confuse the USER_ID with their CONTACT_ID). Only one optional parameter (excluding top, skip and count_total) can be specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$first_name = "first_name_example"; // string | Optional, first name.
$last_name = "last_name_example"; // string | Optional, last name.
$email = "email_example"; // string | Optional, user's email address.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when note was last updated.
$skip = 56; // int | Optional, number of users to skip.
$top = 56; // int | Optional, maximum number of users to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getUsersBySearch($first_name, $last_name, $email, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | **string**| Optional, first name. | [optional]
 **last_name** | **string**| Optional, last name. | [optional]
 **email** | **string**| Optional, user&#39;s email address. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when note was last updated. | [optional]
 **skip** | **int**| Optional, number of users to skip. | [optional]
 **top** | **int**| Optional, maximum number of users to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

