# Swagger\Client\ProjectsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitySetAssignment**](ProjectsApi.md#addActivitySetAssignment) | **POST** /Projects/{id}/ActivitySetAssignment | Adds an Activity Set to a Project
[**addFileAttachment**](ProjectsApi.md#addFileAttachment) | **POST** /Projects/{id}/FileAttachments | Adds a File Attachment to a Project
[**addFollow**](ProjectsApi.md#addFollow) | **POST** /Projects/{id}/Follow | Start following a Project
[**addLink**](ProjectsApi.md#addLink) | **POST** /Projects/{id}/Links | Adds a Link to a project
[**addMilestone**](ProjectsApi.md#addMilestone) | **POST** /Projects/{id}/Milestones | Adds a Milestone to a Project
[**addNote**](ProjectsApi.md#addNote) | **POST** /Projects/{id}/Notes | Adds a Note to a Project.
[**addProject**](ProjectsApi.md#addProject) | **POST** /Projects | Adds a Project
[**addTag**](ProjectsApi.md#addTag) | **POST** /Projects/{id}/Tags | Adds a Tag for a Project
[**deleteCustomField**](ProjectsApi.md#deleteCustomField) | **DELETE** /Projects/{id}/CustomFields/{customFieldId} | Deletes a Custom Field
[**deleteFollow**](ProjectsApi.md#deleteFollow) | **DELETE** /Projects/{id}/Follow | Stop following a Project
[**deleteImage**](ProjectsApi.md#deleteImage) | **DELETE** /Projects/{id}/Image | Deletes a Project&#39;s Image
[**deleteLink**](ProjectsApi.md#deleteLink) | **DELETE** /Projects/{id}/Links/{linkId} | Deletes a Link from a project
[**deleteMilestone**](ProjectsApi.md#deleteMilestone) | **DELETE** /Projects/{id}/Milestones/{milestoneId} | Deletes a Milestone from a Project
[**deletePipeline**](ProjectsApi.md#deletePipeline) | **DELETE** /Projects/{id}/Pipeline | Clears pipeline for the Project.
[**deleteProject**](ProjectsApi.md#deleteProject) | **DELETE** /Projects/{id} | Deletes a Project
[**deleteTag**](ProjectsApi.md#deleteTag) | **DELETE** /Projects/{id}/Tags/{tagName} | Deletes a Tag from a Project
[**getEmails**](ProjectsApi.md#getEmails) | **GET** /Projects/{id}/Emails | Gets a list of Project&#39;s Emails
[**getEvents**](ProjectsApi.md#getEvents) | **GET** /Projects/{id}/Events | Gets a Project&#39;s Events
[**getFileAttachments**](ProjectsApi.md#getFileAttachments) | **GET** /Projects/{id}/FileAttachments | Gets a Project&#39;s File Attachments
[**getFollow**](ProjectsApi.md#getFollow) | **GET** /Projects/{id}/Follow | Gets a Follow record for the Project
[**getImage**](ProjectsApi.md#getImage) | **GET** /Projects/{id}/Image | Gets a Project&#39;s Image
[**getLinkEmailAddress**](ProjectsApi.md#getLinkEmailAddress) | **GET** /Projects/{id}/LinkEmailAddress | Gets the email address to use for linking with the Project
[**getMilestones**](ProjectsApi.md#getMilestones) | **GET** /Projects/{id}/Milestones | Gets a list of Milestones for a Project
[**getNotes**](ProjectsApi.md#getNotes) | **GET** /Projects/{id}/Notes | Gets a Project&#39;s Notes
[**getProject**](ProjectsApi.md#getProject) | **GET** /Projects/{id} | Gets a Project
[**getProjects**](ProjectsApi.md#getProjects) | **GET** /Projects | Gets a list of Projects.
[**getProjectsBySearch**](ProjectsApi.md#getProjectsBySearch) | **GET** /Projects/Search | Gets a filtered list of Projects.
[**getTasks**](ProjectsApi.md#getTasks) | **GET** /Projects/{id}/Tasks | Gets a list of Project&#39;s Tasks
[**updateCustomField**](ProjectsApi.md#updateCustomField) | **PUT** /Projects/{id}/CustomFields | Updates a Custom Field
[**updateImage**](ProjectsApi.md#updateImage) | **PUT** /Projects/{id}/Image/{filename} | Updates a Project&#39;s Image
[**updateLink**](ProjectsApi.md#updateLink) | **PUT** /Projects/{id}/Links | Updates a Link for a project
[**updateMilestone**](ProjectsApi.md#updateMilestone) | **PUT** /Projects/{id}/Milestones | Updates a Milestone for a Project
[**updatePipeline**](ProjectsApi.md#updatePipeline) | **PUT** /Projects/{id}/Pipeline | Changes current pipeline for the project.
[**updatePipelineStage**](ProjectsApi.md#updatePipelineStage) | **PUT** /Projects/{id}/PipelineStage | Changes current pipeline stage for the project.
[**updateProject**](ProjectsApi.md#updateProject) | **PUT** /Projects | Updates a Project


# **addActivitySetAssignment**
> addActivitySetAssignment($id, $api_activity_set_assignment)

Adds an Activity Set to a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID
$api_activity_set_assignment = new \Swagger\Client\Model\APIActivitySetAssignment(); // \Swagger\Client\Model\APIActivitySetAssignment | The Activity Set Assignment object which contains the configuration information for the Activity Set (just include JSON object as request body)

try {
    $api_instance->addActivitySetAssignment($id, $api_activity_set_assignment);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addActivitySetAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |
 **api_activity_set_assignment** | [**\Swagger\Client\Model\APIActivitySetAssignment**](../Model/\Swagger\Client\Model\APIActivitySetAssignment.md)| The Activity Set Assignment object which contains the configuration information for the Activity Set (just include JSON object as request body) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFileAttachment**
> \Swagger\Client\Model\FileAttachment addFileAttachment($id, $file, $file_name, $content_type, $file_category_id)

Adds a File Attachment to a Project

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $api_instance->addFileAttachment($id, $file, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **file** | **\SplFileObject**| The file part of the multipart/form-data request. Only one file can be added per request. |
 **file_name** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **file_category_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\FileAttachment**](../Model/FileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFollow**
> \Swagger\Client\Model\Follow addFollow($id)

Start following a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLink**
> \Swagger\Client\Model\Link addLink($id, $api_link)

Adds a Link to a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include JSON object as request body)

try {
    $result = $api_instance->addLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **api_link** | [**\Swagger\Client\Model\APILink**](../Model/\Swagger\Client\Model\APILink.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMilestone**
> \Swagger\Client\Model\Milestone addMilestone($id, $api_milestone)

Adds a Milestone to a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$api_milestone = new \Swagger\Client\Model\APIMilestone(); // \Swagger\Client\Model\APIMilestone | The Milestone to add (just include JSON object as request body)

try {
    $result = $api_instance->addMilestone($id, $api_milestone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **api_milestone** | [**\Swagger\Client\Model\APIMilestone**](../Model/\Swagger\Client\Model\APIMilestone.md)| The Milestone to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNote**
> \Swagger\Client\Model\Note addNote($id, $api_note)

Adds a Note to a Project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$api_note = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The Note to add (just include JSON object as request body)

try {
    $result = $api_instance->addNote($id, $api_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **api_note** | [**\Swagger\Client\Model\APINote**](../Model/\Swagger\Client\Model\APINote.md)| The Note to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addProject**
> \Swagger\Client\Model\Project addProject($api_project)

Adds a Project

A common source of problems when creating projects occurs when users omit required fields, or insert             invalid data into a field (for example by referencing an invalid CATEGORY_ID). A good troubleshooting technique             is to create a few projects via the web interface, with representative data, links, etc, and then access             these projects via the API, and inspect the returned object graph. Also, note: The STAGE_ID and PIPELINE_ID             properties of projects are read-only. (There are separate endpoints to update pipelines/stages.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$api_project = new \Swagger\Client\Model\APIProject(); // \Swagger\Client\Model\APIProject | The Project to add (just include JSON object as request body)

try {
    $result = $api_instance->addProject($api_project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_project** | [**\Swagger\Client\Model\APIProject**](../Model/\Swagger\Client\Model\APIProject.md)| The Project to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \Swagger\Client\Model\Tag addTag($id, $api_tag)

Adds a Tag for a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$api_tag = new \Swagger\Client\Model\APITag(); // \Swagger\Client\Model\APITag | The Tag to add (just include JSON object as request body)

try {
    $result = $api_instance->addTag($id, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **api_tag** | [**\Swagger\Client\Model\APITag**](../Model/\Swagger\Client\Model\APITag.md)| The Tag to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomField**
> deleteCustomField($id, $custom_field_id)

Deletes a Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (Project_ID)
$custom_field_id = "custom_field_id_example"; // string | A Custom Field's ID (CUSTOM_FIELD_ID)

try {
    $api_instance->deleteCustomField($id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (Project_ID) |
 **custom_field_id** | **string**| A Custom Field&#39;s ID (CUSTOM_FIELD_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFollow**
> deleteFollow($id)

Stop following a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImage**
> deleteImage($id)

Deletes a Project's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)

try {
    $api_instance->deleteImage($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLink**
> deleteLink($id, $link_id)

Deletes a Link from a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$link_id = 789; // int | A Link's ID (LINK_ID)

try {
    $api_instance->deleteLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **link_id** | **int**| A Link&#39;s ID (LINK_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMilestone**
> deleteMilestone($id, $milestone_id)

Deletes a Milestone from a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$milestone_id = 789; // int | A Milestone's ID (MILESTONE_ID)

try {
    $api_instance->deleteMilestone($id, $milestone_id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **milestone_id** | **int**| A Milestone&#39;s ID (MILESTONE_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePipeline**
> \Swagger\Client\Model\Project deletePipeline($id)

Clears pipeline for the Project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID

try {
    $result = $api_instance->deletePipeline($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deletePipeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> deleteProject($id)

Deletes a Project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID

try {
    $api_instance->deleteProject($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> deleteTag($id, $tag_name)

Deletes a Tag from a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$tag_name = "tag_name_example"; // string | A Tag's name

try {
    $api_instance->deleteTag($id, $tag_name);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **tag_name** | **string**| A Tag&#39;s name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmails**
> \Swagger\Client\Model\Email[] getEmails($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of Project's Emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when email was last updated.
$top = 56; // int | Optional, maximum number of emails to return.
$skip = 56; // int | Optional, number of emails to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEmails($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |
 **updated_after_utc** | **\DateTime**| Optional, earliest date when email was last updated. | [optional]
 **top** | **int**| Optional, maximum number of emails to return. | [optional]
 **skip** | **int**| Optional, number of emails to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Email[]**](../Model/Email.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \Swagger\Client\Model\CalendarEvent[] getEvents($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a Project's Events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when event was last updated.
$top = 56; // int | Optional, maximum number of events to return.
$skip = 56; // int | Optional, number of events to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEvents($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **updated_after_utc** | **\DateTime**| Optional, earliest date when event was last updated. | [optional]
 **top** | **int**| Optional, maximum number of events to return. | [optional]
 **skip** | **int**| Optional, number of events to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\CalendarEvent[]**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileAttachments**
> \Swagger\Client\Model\FileAttachment[] getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total)

Gets a Project's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **updated_after_utc** | **\DateTime**| Optional, earliest date when file attachment was last updated. | [optional]
 **skip** | **int**| Optional, number of file attachments to skip. | [optional]
 **top** | **int**| Optional, maximum number of file attachments to return in the response. | [optional]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\FileAttachment[]**](../Model/FileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFollow**
> \Swagger\Client\Model\Follow getFollow($id)

Gets a Follow record for the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImage**
> getImage($id)

Gets a Project's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)

try {
    $api_instance->getImage($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkEmailAddress**
> \Swagger\Client\Model\LinkEmailAddress getLinkEmailAddress($id)

Gets the email address to use for linking with the Project

An email address to use as a maildrop for the Project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID

try {
    $result = $api_instance->getLinkEmailAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getLinkEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |

### Return type

[**\Swagger\Client\Model\LinkEmailAddress**](../Model/LinkEmailAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMilestones**
> \Swagger\Client\Model\Milestone[] getMilestones($id)

Gets a list of Milestones for a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)

try {
    $result = $api_instance->getMilestones($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |

### Return type

[**\Swagger\Client\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotes**
> \Swagger\Client\Model\Note[] getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a Project's Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when note was last updated.
$top = 56; // int | Optional, maximum number of notes to return.
$skip = 56; // int | Optional, number of notes to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **updated_after_utc** | **\DateTime**| Optional, earliest date when note was last updated. | [optional]
 **top** | **int**| Optional, maximum number of notes to return. | [optional]
 **skip** | **int**| Optional, number of notes to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Note[]**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \Swagger\Client\Model\Project getProject($id)

Gets a Project



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID

try {
    $result = $api_instance->getProject($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjects**
> \Swagger\Client\Model\Project[] getProjects($brief, $skip, $top, $count_total)

Gets a list of Projects.

Simple object graphs (excluding CUSTOMFIELDS, TAGS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the project.
$skip = 56; // int | Optional, number of projects to skip.
$top = 56; // int | Optional, maximum number of projects to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getProjects($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the project. | [optional] [default to false]
 **skip** | **int**| Optional, number of projects to skip. | [optional]
 **top** | **int**| Optional, maximum number of projects to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectsBySearch**
> \Swagger\Client\Model\Project[] getProjectsBySearch($tag, $project_name, $status, $category_id, $pipeline_id, $stage_id, $responsible_user_id, $owner_user_id, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Projects.

Only one optional parameter (excluding brief, top, skip and count_total) can be specified. Simple object graphs (excluding CUSTOMFIELDS, TAGS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$tag = "tag_example"; // string | Optional, a single tag.
$project_name = "project_name_example"; // string | Optional, project name.
$status = "status_example"; // string | Optional, project status.
$category_id = 789; // int | Optional, category id.
$pipeline_id = 789; // int | Optional, pipeline id.
$stage_id = 789; // int | Optional, stage id.
$responsible_user_id = 789; // int | Optional, responsible user id.
$owner_user_id = 789; // int | Optional, owner user id.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when project was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the project.
$skip = 56; // int | Optional, number of projects to skip.
$top = 56; // int | Optional, maximum number of projects to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getProjectsBySearch($tag, $project_name, $status, $category_id, $pipeline_id, $stage_id, $responsible_user_id, $owner_user_id, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **string**| Optional, a single tag. | [optional]
 **project_name** | **string**| Optional, project name. | [optional]
 **status** | **string**| Optional, project status. | [optional]
 **category_id** | **int**| Optional, category id. | [optional]
 **pipeline_id** | **int**| Optional, pipeline id. | [optional]
 **stage_id** | **int**| Optional, stage id. | [optional]
 **responsible_user_id** | **int**| Optional, responsible user id. | [optional]
 **owner_user_id** | **int**| Optional, owner user id. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when project was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the project. | [optional] [default to false]
 **skip** | **int**| Optional, number of projects to skip. | [optional]
 **top** | **int**| Optional, maximum number of projects to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Project[]**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \Swagger\Client\Model\Task[] getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of Project's Tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when task was last updated.
$top = 56; // int | Optional, maximum number of tasks to return.
$skip = 56; // int | Optional, number of tasks to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |
 **updated_after_utc** | **\DateTime**| Optional, earliest date when task was last updated. | [optional]
 **top** | **int**| Optional, maximum number of tasks to return. | [optional]
 **skip** | **int**| Optional, number of tasks to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Task[]**](../Model/Task.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomField**
> \Swagger\Client\Model\CustomField updateCustomField($id, $api_custom_field)

Updates a Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (Project_ID)
$api_custom_field = new \Swagger\Client\Model\APICustomField(); // \Swagger\Client\Model\APICustomField | The Custom Field to edit (just include JSON object as request body)

try {
    $result = $api_instance->updateCustomField($id, $api_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (Project_ID) |
 **api_custom_field** | [**\Swagger\Client\Model\APICustomField**](../Model/\Swagger\Client\Model\APICustomField.md)| The Custom Field to edit (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\CustomField**](../Model/CustomField.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImage**
> \Swagger\Client\Model\Project updateImage($id, $filename, $file)

Updates a Project's Image

This action will replace any existing Image attached to the Project. Image file contents should be sent as binary data in request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$filename = "filename_example"; // string | Name of Image File to be attached to Project
$file = "B"; // string | File to upload

try {
    $result = $api_instance->updateImage($id, $filename, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **filename** | **string**| Name of Image File to be attached to Project |
 **file** | **string**| File to upload |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLink**
> \Swagger\Client\Model\Link updateLink($id, $api_link)

Updates a Link for a project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include JSON object as request body)

try {
    $result = $api_instance->updateLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **api_link** | [**\Swagger\Client\Model\APILink**](../Model/\Swagger\Client\Model\APILink.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMilestone**
> \Swagger\Client\Model\Milestone updateMilestone($id, $api_milestone)

Updates a Milestone for a Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID (PROJECT_ID)
$api_milestone = new \Swagger\Client\Model\APIMilestone(); // \Swagger\Client\Model\APIMilestone | The Milestone to update (just include JSON object as request body)

try {
    $result = $api_instance->updateMilestone($id, $api_milestone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateMilestone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID (PROJECT_ID) |
 **api_milestone** | [**\Swagger\Client\Model\APIMilestone**](../Model/\Swagger\Client\Model\APIMilestone.md)| The Milestone to update (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Milestone**](../Model/Milestone.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePipeline**
> \Swagger\Client\Model\Project updatePipeline($id, $api_pipeline_change)

Changes current pipeline for the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID
$api_pipeline_change = new \Swagger\Client\Model\APIPipelineChange(); // \Swagger\Client\Model\APIPipelineChange | Pipeline change parameters (just include JSON object as request body)

try {
    $result = $api_instance->updatePipeline($id, $api_pipeline_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updatePipeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |
 **api_pipeline_change** | [**\Swagger\Client\Model\APIPipelineChange**](../Model/\Swagger\Client\Model\APIPipelineChange.md)| Pipeline change parameters (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePipelineStage**
> \Swagger\Client\Model\Project updatePipelineStage($id, $api_stage_change)

Changes current pipeline stage for the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$id = 789; // int | A Project's ID
$api_stage_change = new \Swagger\Client\Model\APIPipelineStageChange(); // \Swagger\Client\Model\APIPipelineStageChange | Pipeline stage change parameters (just include JSON object as request body)

try {
    $result = $api_instance->updatePipelineStage($id, $api_stage_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updatePipelineStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Project&#39;s ID |
 **api_stage_change** | [**\Swagger\Client\Model\APIPipelineStageChange**](../Model/\Swagger\Client\Model\APIPipelineStageChange.md)| Pipeline stage change parameters (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProject**
> \Swagger\Client\Model\Project updateProject($api_project, $brief)

Updates a Project

A common source of problems when updating projects occurs when users omit required fields, or insert             invalid data into a field (for example by referencing an invalid CATEGORY_ID). A good troubleshooting technique             is to create a few projects via the web interface, with representative data, links, etc, and then access             these projects via the API, and inspect the returned object graph. Also, note: The STAGE_ID and PIPELINE_ID             properties of projects are read-only. (There are separate endpoints to update pipelines/stages.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProjectsApi();
$api_project = new \Swagger\Client\Model\APIProject(); // \Swagger\Client\Model\APIProject | A Project (just include JSON object as request body)
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Project. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateProject($api_project, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_project** | [**\Swagger\Client\Model\APIProject**](../Model/\Swagger\Client\Model\APIProject.md)| A Project (just include JSON object as request body) |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Project. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

