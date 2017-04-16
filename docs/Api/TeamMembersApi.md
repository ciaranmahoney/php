# Swagger\Client\TeamMembersApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTeamMember**](TeamMembersApi.md#addTeamMember) | **POST** /TeamMembers | Adds a new Team Member
[**deleteTeamMember**](TeamMembersApi.md#deleteTeamMember) | **DELETE** /TeamMembers/{id} | Deletes a Team Member
[**getTeamMember**](TeamMembersApi.md#getTeamMember) | **GET** /TeamMembers/{id} | Gets a Team Member
[**getTeamMembers**](TeamMembersApi.md#getTeamMembers) | **GET** /TeamMembers | Gets a list of Team Members


# **addTeamMember**
> \Swagger\Client\Model\TeamMember addTeamMember($api_team_member)

Adds a new Team Member

Note: Team Members of Anonymous Teams can only be created via the /Teams endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamMembersApi();
$api_team_member = new \Swagger\Client\Model\APITeamMember(); // \Swagger\Client\Model\APITeamMember | The Team Member to add (just include JSON object as request body)

try {
    $result = $api_instance->addTeamMember($api_team_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMembersApi->addTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_team_member** | [**\Swagger\Client\Model\APITeamMember**](../Model/\Swagger\Client\Model\APITeamMember.md)| The Team Member to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTeamMember**
> deleteTeamMember($id)

Deletes a Team Member

Note: Team Members of Anonymous Teams can only be deleted via the /Teams endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamMembersApi();
$id = 789; // int | A Team Member's ID (PERMISSION_ID)

try {
    $api_instance->deleteTeamMember($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamMembersApi->deleteTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Team Member&#39;s ID (PERMISSION_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeamMember**
> \Swagger\Client\Model\TeamMember getTeamMember($id)

Gets a Team Member



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamMembersApi();
$id = 789; // int | A Team Member's ID (PERMISSION_ID)

try {
    $result = $api_instance->getTeamMember($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMembersApi->getTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Team Member&#39;s ID (PERMISSION_ID) |

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeamMembers**
> \Swagger\Client\Model\TeamMember[] getTeamMembers($skip, $top, $count_total)

Gets a list of Team Members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TeamMembersApi();
$skip = 56; // int | Optional, number of team members to skip.
$top = 56; // int | Optional, maximum number of team members to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTeamMembers($skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamMembersApi->getTeamMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Optional, number of team members to skip. | [optional]
 **top** | **int**| Optional, maximum number of team members to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\TeamMember[]**](../Model/TeamMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

