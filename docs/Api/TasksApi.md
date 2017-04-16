# Swagger\Client\TasksApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addComment**](TasksApi.md#addComment) | **POST** /Tasks/{id}/Comments | Adds a Comment to a task.
[**addFollow**](TasksApi.md#addFollow) | **POST** /Tasks/{id}/Follow | Start following a Task
[**addTask**](TasksApi.md#addTask) | **POST** /Tasks | Adds a Task
[**addTaskLink**](TasksApi.md#addTaskLink) | **POST** /Tasks/{id}/TaskLinks | Adds a Task Link
[**deleteFollow**](TasksApi.md#deleteFollow) | **DELETE** /Tasks/{id}/Follow | Stop following a Task
[**deleteTask**](TasksApi.md#deleteTask) | **DELETE** /Tasks/{id} | Deletes a Task
[**deleteTaskLink**](TasksApi.md#deleteTaskLink) | **DELETE** /Tasks/{id}/TaskLinks/{linkId} | Deletes a Task Link
[**getComments**](TasksApi.md#getComments) | **GET** /Tasks/{id}/Comments | Gets a Task&#39;s Comments
[**getFollow**](TasksApi.md#getFollow) | **GET** /Tasks/{id}/Follow | Gets a Follow record for the Task
[**getTask**](TasksApi.md#getTask) | **GET** /Tasks/{id} | Gets a Task
[**getTasks**](TasksApi.md#getTasks) | **GET** /Tasks | Gets a list of Tasks.
[**getTasksBySearch**](TasksApi.md#getTasksBySearch) | **GET** /Tasks/Search | Gets a filtered list of Tasks.
[**updateTask**](TasksApi.md#updateTask) | **PUT** /Tasks | Updates a Task


# **addComment**
> \Swagger\Client\Model\Comment addComment($id, $api_comment)

Adds a Comment to a task.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID (TASK_ID)
$api_comment = new \Swagger\Client\Model\APIComment(); // \Swagger\Client\Model\APIComment | The Comment to add (just include JSON object as request body)

try {
    $result = $api_instance->addComment($id, $api_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->addComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID (TASK_ID) |
 **api_comment** | [**\Swagger\Client\Model\APIComment**](../Model/\Swagger\Client\Model\APIComment.md)| The Comment to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFollow**
> \Swagger\Client\Model\Follow addFollow($id)

Start following a Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID (TASK_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID (TASK_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTask**
> \Swagger\Client\Model\Task addTask($api_task)

Adds a Task

A common source of problems when creating tasks occurs when users omit required fields, or insert             invalid data into a field. A good troubleshooting technique             is to create a few tasks via the web interface, with representative data, links, etc, and then access             these tasks via the API, and inspect the returned object graph.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$api_task = new \Swagger\Client\Model\APITask(); // \Swagger\Client\Model\APITask | The Task to add (just include JSON object as request body)

try {
    $result = $api_instance->addTask($api_task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->addTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_task** | [**\Swagger\Client\Model\APITask**](../Model/\Swagger\Client\Model\APITask.md)| The Task to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTaskLink**
> \Swagger\Client\Model\TaskLink addTaskLink($id, $api_link)

Adds a Task Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID (TASK_ID)
$api_link = new \Swagger\Client\Model\APITaskLink(); // \Swagger\Client\Model\APITaskLink | The Task Link to add (just include JSON object as request body)

try {
    $result = $api_instance->addTaskLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->addTaskLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID (TASK_ID) |
 **api_link** | [**\Swagger\Client\Model\APITaskLink**](../Model/\Swagger\Client\Model\APITaskLink.md)| The Task Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\TaskLink**](../Model/TaskLink.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFollow**
> deleteFollow($id)

Stop following a Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID (TASK_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID (TASK_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTask**
> deleteTask($id)

Deletes a Task



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID

try {
    $api_instance->deleteTask($id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaskLink**
> deleteTaskLink($id, $link_id)

Deletes a Task Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID (TASK_ID)
$link_id = 789; // int | A Task Link's ID (TASK_LINK_ID)

try {
    $api_instance->deleteTaskLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteTaskLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID (TASK_ID) |
 **link_id** | **int**| A Task Link&#39;s ID (TASK_LINK_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getComments**
> \Swagger\Client\Model\Comment[] getComments($id, $updated_after_utc, $skip, $top, $count_total)

Gets a Task's Comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID (TASK_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when comment was last updated.
$skip = 56; // int | Optional, number of comments to skip.
$top = 56; // int | Optional, maximum number of comments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getComments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID (TASK_ID) |
 **updated_after_utc** | **\DateTime**| Optional, earliest date when comment was last updated. | [optional]
 **skip** | **int**| Optional, number of comments to skip. | [optional]
 **top** | **int**| Optional, maximum number of comments to return in the response. | [optional]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Comment[]**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFollow**
> \Swagger\Client\Model\Follow getFollow($id)

Gets a Follow record for the Task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID (TASK_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID (TASK_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> \Swagger\Client\Model\Task getTask($id)

Gets a Task



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$id = 789; // int | A Task's ID

try {
    $result = $api_instance->getTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Task&#39;s ID |

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \Swagger\Client\Model\Task[] getTasks($brief, $skip, $top, $count_total)

Gets a list of Tasks.

Simple object graphs (excluding TASKLINKS) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the task.
$skip = 56; // int | Optional, number of tasks to skip.
$top = 56; // int | Optional, maximum number of tasks to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTasks($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the task. | [optional] [default to false]
 **skip** | **int**| Optional, number of tasks to skip. | [optional]
 **top** | **int**| Optional, maximum number of tasks to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Task[]**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasksBySearch**
> \Swagger\Client\Model\Task[] getTasksBySearch($title, $status, $category_id, $owner_user_id, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Tasks.

Only one optional parameter (excluding brief, top, skip and count_total) can be specified. Simple object graphs (excluding TASKLINKS) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$title = "title_example"; // string | Optional, task title.
$status = "status_example"; // string | Optional, status of the task.
$category_id = 789; // int | Optional, category id.
$owner_user_id = 789; // int | Optional, id of the owner user.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when task was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the task.
$skip = 56; // int | Optional, number of tasks to skip.
$top = 56; // int | Optional, maximum number of tasks to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTasksBySearch($title, $status, $category_id, $owner_user_id, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTasksBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| Optional, task title. | [optional]
 **status** | **string**| Optional, status of the task. | [optional]
 **category_id** | **int**| Optional, category id. | [optional]
 **owner_user_id** | **int**| Optional, id of the owner user. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when task was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the task. | [optional] [default to false]
 **skip** | **int**| Optional, number of tasks to skip. | [optional]
 **top** | **int**| Optional, maximum number of tasks to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Task[]**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> \Swagger\Client\Model\Task updateTask($api_task, $brief)

Updates a Task

A common source of problems when updating tasks occurs when users omit required fields, or insert             invalid data into a field. A good troubleshooting technique             is to create a few tasks via the web interface, with representative data, links, etc, and then access             these tasks via the API, and inspect the returned object graph.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TasksApi();
$api_task = new \Swagger\Client\Model\APITask(); // \Swagger\Client\Model\APITask | The Task to update (just include JSON object as request body)
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Task. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateTask($api_task, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_task** | [**\Swagger\Client\Model\APITask**](../Model/\Swagger\Client\Model\APITask.md)| The Task to update (just include JSON object as request body) |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Task. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Task**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

