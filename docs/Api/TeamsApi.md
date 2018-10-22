# Swagger\Client\TeamsApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTeam**](TeamsApi.md#addTeam) | **POST** /Teams | Adds a Team
[**addTeamMember**](TeamsApi.md#addTeamMember) | **POST** /Teams/{id}/TeamMembers | Adds a Team Member
[**deleteTeam**](TeamsApi.md#deleteTeam) | **DELETE** /Teams/{id} | Deletes a Team
[**deleteTeamMember**](TeamsApi.md#deleteTeamMember) | **DELETE** /Teams/{id}/TeamMembers/{permissionId} | Deletes a Team Member
[**getTeam**](TeamsApi.md#getTeam) | **GET** /Teams/{id} | Gets a Team
[**getTeams**](TeamsApi.md#getTeams) | **GET** /Teams | Gets a list of Teams.
[**updateTeam**](TeamsApi.md#updateTeam) | **PUT** /Teams | Updates a Team


# **addTeam**
> \Swagger\Client\Model\Team addTeam($api_team, $authorization)

Adds a Team

TEAM_NAME is required when creating a Team with ANONYMOUS_TEAM set to \"false\". When creating Anonymous Teams, e.g. ANONYMOUS_TEAM=true, you must include all the Team Members that should be part of the team. A minimum of one Team Member is required.             For more details, please refer to GET /Teams above.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_team = new \Swagger\Client\Model\APITeam(); // \Swagger\Client\Model\APITeam | The Team to add (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addTeam($api_team, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->addTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_team** | [**\Swagger\Client\Model\APITeam**](../Model/APITeam.md)| The Team to add (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTeamMember**
> \Swagger\Client\Model\TeamMember addTeamMember($id, $api_team_member, $authorization)

Adds a Team Member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Team's ID (TEAM_ID)
$api_team_member = new \Swagger\Client\Model\APITeamMember(); // \Swagger\Client\Model\APITeamMember | The Team Member to add (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addTeamMember($id, $api_team_member, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->addTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Team&#39;s ID (TEAM_ID) |
 **api_team_member** | [**\Swagger\Client\Model\APITeamMember**](../Model/APITeamMember.md)| The Team Member to add (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\TeamMember**](../Model/TeamMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTeam**
> deleteTeam($id, $authorization)

Deletes a Team



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Team's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteTeam($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->deleteTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Team&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTeamMember**
> deleteTeamMember($id, $permission_id, $authorization)

Deletes a Team Member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Team's ID (TEAM_ID)
$permission_id = 789; // int | A Team Members's ID (PERMISSION_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteTeamMember($id, $permission_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->deleteTeamMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Team&#39;s ID (TEAM_ID) |
 **permission_id** | **int**| A Team Members&#39;s ID (PERMISSION_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeam**
> \Swagger\Client\Model\Team getTeam($id, $authorization)

Gets a Team



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Team's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getTeam($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Team&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeams**
> object[] getTeams($authorization, $brief, $skip, $top, $count_total)

Gets a list of Teams.

Simple object graphs (excluding TEAMMEMBERS) are returned if \"brief=true\" is used in the query string.            <br /> The API responses may contain two types of Teams: a) regular Teams configured via System Settings and b) so called Anonymous Teams which are created by the system when you set a record permission visible to Individuals.            You can differentiate these two types on Teams by the ANONYMOUS_TEAM property. Anonymous Teams are a bit more restricted when it comes to modifying them via the API, they can only be created/updated/deleted via the root /Teams endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the team.
$skip = 56; // int | Optional, number of teams to skip.
$top = 56; // int | Optional, maximum number of teams to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getTeams($authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the team. | [optional] [default to false]
 **skip** | **int**| Optional, number of teams to skip. | [optional]
 **top** | **int**| Optional, maximum number of teams to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTeam**
> \Swagger\Client\Model\Team updateTeam($api_team, $authorization, $brief)

Updates a Team

When updating Anonymous Teams, the brief parameter has no effect and you must include all the Team Members that should be part of the team. A minimum of one Team Member is required.  For more details, please refer to GET /Teams above.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TeamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_team = new \Swagger\Client\Model\APITeam(); // \Swagger\Client\Model\APITeam | The Team to update (just include JSON object as request body)
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Team. When true, all sub-collections are ignored.

try {
    $result = $apiInstance->updateTeam($api_team, $authorization, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->updateTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_team** | [**\Swagger\Client\Model\APITeam**](../Model/APITeam.md)| The Team to update (just include JSON object as request body) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Team. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

