# Swagger\Client\OpportunitiesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitySetAssignment**](OpportunitiesApi.md#addActivitySetAssignment) | **POST** /Opportunities/{id}/ActivitySetAssignment | Adds an Activity Set to an Opportunity
[**addFileAttachment**](OpportunitiesApi.md#addFileAttachment) | **POST** /Opportunities/{id}/FileAttachments | Adds a File Attachment to an Opportunity
[**addFollow**](OpportunitiesApi.md#addFollow) | **POST** /Opportunities/{id}/Follow | Start following an Opportunity
[**addLink**](OpportunitiesApi.md#addLink) | **POST** /Opportunities/{id}/Links | Adds a Link
[**addNote**](OpportunitiesApi.md#addNote) | **POST** /Opportunities/{id}/Notes | Adds a Note to an Opportunity.
[**addOpportunity**](OpportunitiesApi.md#addOpportunity) | **POST** /Opportunities | Adds an Opportunity
[**addTag**](OpportunitiesApi.md#addTag) | **POST** /Opportunities/{id}/Tags | Adds a Tag for an Opportunity
[**deleteCustomField**](OpportunitiesApi.md#deleteCustomField) | **DELETE** /Opportunities/{id}/CustomFields/{customFieldId} | Deletes a Custom Field
[**deleteFollow**](OpportunitiesApi.md#deleteFollow) | **DELETE** /Opportunities/{id}/Follow | Stop following an Opportunity
[**deleteImage**](OpportunitiesApi.md#deleteImage) | **DELETE** /Opportunities/{id}/Image | Deletes an Opportunity&#39;s Image
[**deleteLink**](OpportunitiesApi.md#deleteLink) | **DELETE** /Opportunities/{id}/Links/{linkId} | Deletes a Link
[**deleteOpportunity**](OpportunitiesApi.md#deleteOpportunity) | **DELETE** /Opportunities/{id} | Deletes an Opportunity
[**deletePipeline**](OpportunitiesApi.md#deletePipeline) | **DELETE** /Opportunities/{id}/Pipeline | Clears pipeline for the opportunity.
[**deleteTag**](OpportunitiesApi.md#deleteTag) | **DELETE** /Opportunities/{id}/Tags/{tagName} | Deletes a Tag from an Opportunity
[**getEmails**](OpportunitiesApi.md#getEmails) | **GET** /Opportunities/{id}/Emails | Gets a list of Opportunity&#39;s Emails
[**getEvents**](OpportunitiesApi.md#getEvents) | **GET** /Opportunities/{id}/Events | Gets an Opportunity&#39;s Events
[**getFileAttachments**](OpportunitiesApi.md#getFileAttachments) | **GET** /Opportunities/{id}/FileAttachments | Gets an Opportunity&#39;s File Attachments
[**getFollow**](OpportunitiesApi.md#getFollow) | **GET** /Opportunities/{id}/Follow | Gets a Follow record for the Opportunity
[**getImage**](OpportunitiesApi.md#getImage) | **GET** /Opportunities/{id}/Image | Gets an Opportunity&#39;s Image
[**getLinkEmailAddress**](OpportunitiesApi.md#getLinkEmailAddress) | **GET** /Opportunities/{id}/LinkEmailAddress | Gets the email address to use for linking with the opportunity
[**getNotes**](OpportunitiesApi.md#getNotes) | **GET** /Opportunities/{id}/Notes | Gets an Opportunity&#39;s Notes
[**getOpportunities**](OpportunitiesApi.md#getOpportunities) | **GET** /Opportunities | Gets a list of Opportunities.
[**getOpportunitiesBySearch**](OpportunitiesApi.md#getOpportunitiesBySearch) | **GET** /Opportunities/Search | Gets a filtered list of Opportunities.
[**getOpportunity**](OpportunitiesApi.md#getOpportunity) | **GET** /Opportunities/{id} | Gets an Opportunity
[**getStateHistory**](OpportunitiesApi.md#getStateHistory) | **GET** /Opportunities/{id}/StateHistory | Gets the history of States and Reasons for an Opportunity.
[**getTasks**](OpportunitiesApi.md#getTasks) | **GET** /Opportunities/{id}/Tasks | Gets a list of Opportunity&#39;s Tasks
[**updateCustomField**](OpportunitiesApi.md#updateCustomField) | **PUT** /Opportunities/{id}/CustomFields | Updates a Custom Field
[**updateImage**](OpportunitiesApi.md#updateImage) | **PUT** /Opportunities/{id}/Image/{filename} | Updates an Opportunity&#39;s Image
[**updateLink**](OpportunitiesApi.md#updateLink) | **PUT** /Opportunities/{id}/Links | Updates a Link
[**updateOpportunity**](OpportunitiesApi.md#updateOpportunity) | **PUT** /Opportunities | Updates an Opportunity
[**updatePipeline**](OpportunitiesApi.md#updatePipeline) | **PUT** /Opportunities/{id}/Pipeline | Changes current pipeline for the opportunity.
[**updatePipelineStage**](OpportunitiesApi.md#updatePipelineStage) | **PUT** /Opportunities/{id}/PipelineStage | Changes current pipeline stage for the opportunity.


# **addActivitySetAssignment**
> addActivitySetAssignment($id, $api_activity_set_assignment)

Adds an Activity Set to an Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | A Opportunity's ID
$api_activity_set_assignment = new \Swagger\Client\Model\APIActivitySetAssignment(); // \Swagger\Client\Model\APIActivitySetAssignment | The Activity Set Assignment object which contains the configuration information for the Activity Set (just include JSON object as request body)

try {
    $api_instance->addActivitySetAssignment($id, $api_activity_set_assignment);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->addActivitySetAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Opportunity&#39;s ID |
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

Adds a File Attachment to an Opportunity

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $api_instance->addFileAttachment($id, $file, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
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

Start following an Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |

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

Adds a Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include JSON object as request body)

try {
    $result = $api_instance->addLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->addLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
 **api_link** | [**\Swagger\Client\Model\APILink**](../Model/\Swagger\Client\Model\APILink.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNote**
> \Swagger\Client\Model\Note addNote($id, $api_note)

Adds a Note to an Opportunity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$api_note = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The Note to add (just include JSON object as request body)

try {
    $result = $api_instance->addNote($id, $api_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->addNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
 **api_note** | [**\Swagger\Client\Model\APINote**](../Model/\Swagger\Client\Model\APINote.md)| The Note to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOpportunity**
> \Swagger\Client\Model\Opportunity addOpportunity($api_opportunity)

Adds an Opportunity

A common source of problems when creating opportunities occurs when users omit required fields, or insert             invalid data into a field (for example by referencing an invalid CATEGORY_ID). A good troubleshooting technique             is to create a few opportunities via the web interface, with representative data, links, etc, and then access             these opportunities via the GET method, and inspect the returned object graph. Also, note: The STAGE_ID and             PIPELINE_ID properties of opportunities are read-only. (There are separate endpoints to update pipelines/stages.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$api_opportunity = new \Swagger\Client\Model\APIOpportunity(); // \Swagger\Client\Model\APIOpportunity | The Opportunity to add (just include JSON object as request body)

try {
    $result = $api_instance->addOpportunity($api_opportunity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->addOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_opportunity** | [**\Swagger\Client\Model\APIOpportunity**](../Model/\Swagger\Client\Model\APIOpportunity.md)| The Opportunity to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \Swagger\Client\Model\Tag addTag($id, $api_tag)

Adds a Tag for an Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$api_tag = new \Swagger\Client\Model\APITag(); // \Swagger\Client\Model\APITag | The Tag to add (just include JSON object as request body)

try {
    $result = $api_instance->addTag($id, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
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

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$custom_field_id = "custom_field_id_example"; // string | A Custom Field's ID (CUSTOM_FIELD_ID)

try {
    $api_instance->deleteCustomField($id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
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

Stop following an Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |

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

Deletes an Opportunity's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)

try {
    $api_instance->deleteImage($id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |

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

Deletes a Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$link_id = 789; // int | A Link's ID (LINK_ID)

try {
    $api_instance->deleteLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
 **link_id** | **int**| A Link&#39;s ID (LINK_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOpportunity**
> deleteOpportunity($id)

Deletes an Opportunity



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID

try {
    $api_instance->deleteOpportunity($id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePipeline**
> \Swagger\Client\Model\Opportunity deletePipeline($id)

Clears pipeline for the opportunity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID

try {
    $result = $api_instance->deletePipeline($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deletePipeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |

### Return type

[**\Swagger\Client\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> deleteTag($id, $tag_name)

Deletes a Tag from an Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$tag_name = "tag_name_example"; // string | A Tag's name

try {
    $api_instance->deleteTag($id, $tag_name);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
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

Gets a list of Opportunity's Emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when email was last updated.
$top = 56; // int | Optional, maximum number of emails to return.
$skip = 56; // int | Optional, number of emails to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEmails($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |
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

Gets an Opportunity's Events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when event was last updated.
$top = 56; // int | Optional, maximum number of events to return.
$skip = 56; // int | Optional, number of events to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEvents($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
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

Gets an Opportunity's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
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

Gets a Follow record for the Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |

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

Gets an Opportunity's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)

try {
    $api_instance->getImage($id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |

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

Gets the email address to use for linking with the opportunity

An email address to use as a maildrop for the Opportunity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID

try {
    $result = $api_instance->getLinkEmailAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getLinkEmailAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |

### Return type

[**\Swagger\Client\Model\LinkEmailAddress**](../Model/LinkEmailAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotes**
> \Swagger\Client\Model\Note[] getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets an Opportunity's Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORRTUNITY_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when note was last updated.
$top = 56; // int | Optional, maximum number of notes to return.
$skip = 56; // int | Optional, number of notes to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORRTUNITY_ID) |
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

# **getOpportunities**
> \Swagger\Client\Model\Opportunity[] getOpportunities($brief, $skip, $top, $count_total)

Gets a list of Opportunities.

Simple object graphs (excluding Custom Fields, Tags, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the opportunity.
$skip = 56; // int | Optional, number of opportunities to skip.
$top = 56; // int | Optional, maximum number of opportunities to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getOpportunities($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the opportunity. | [optional] [default to false]
 **skip** | **int**| Optional, number of opportunities to skip. | [optional]
 **top** | **int**| Optional, maximum number of opportunities to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Opportunity[]**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunitiesBySearch**
> \Swagger\Client\Model\Opportunity[] getOpportunitiesBySearch($tag, $opportunity_name, $opportunity_state, $category_id, $pipeline_id, $stage_id, $responsible_user_id, $owner_user_id, $forecast_close_date, $actual_close_date, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Opportunities.

Only one optional parameter (excluding brief, top, skip and count_total) can be specified. Simple object graphs (excluding Custom Fields, Tags, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$tag = "tag_example"; // string | Optional, a single tag.
$opportunity_name = "opportunity_name_example"; // string | Optional, opportuinty name.
$opportunity_state = "opportunity_state_example"; // string | Optional, opportunity state.
$category_id = 789; // int | Optional, category id.
$pipeline_id = 789; // int | Optional, pipeline id.
$stage_id = 789; // int | Optional, stage id.
$responsible_user_id = 789; // int | Optional, responsible user id.
$owner_user_id = 789; // int | Optional, owner user id.
$forecast_close_date = new \DateTime(); // \DateTime | Optional, forecast close date.
$actual_close_date = new \DateTime(); // \DateTime | Optional, actual close date.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when opportunity was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the opportunity.
$skip = 56; // int | Optional, number of opportunities to skip.
$top = 56; // int | Optional, maximum number of opportunities to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getOpportunitiesBySearch($tag, $opportunity_name, $opportunity_state, $category_id, $pipeline_id, $stage_id, $responsible_user_id, $owner_user_id, $forecast_close_date, $actual_close_date, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | **string**| Optional, a single tag. | [optional]
 **opportunity_name** | **string**| Optional, opportuinty name. | [optional]
 **opportunity_state** | **string**| Optional, opportunity state. | [optional]
 **category_id** | **int**| Optional, category id. | [optional]
 **pipeline_id** | **int**| Optional, pipeline id. | [optional]
 **stage_id** | **int**| Optional, stage id. | [optional]
 **responsible_user_id** | **int**| Optional, responsible user id. | [optional]
 **owner_user_id** | **int**| Optional, owner user id. | [optional]
 **forecast_close_date** | **\DateTime**| Optional, forecast close date. | [optional]
 **actual_close_date** | **\DateTime**| Optional, actual close date. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when opportunity was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the opportunity. | [optional] [default to false]
 **skip** | **int**| Optional, number of opportunities to skip. | [optional]
 **top** | **int**| Optional, maximum number of opportunities to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Opportunity[]**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunity**
> \Swagger\Client\Model\Opportunity getOpportunity($id)

Gets an Opportunity

Returns the Opportunity object's full graph. Prior to attempting POST and PUT operations,             we recommend using this method to fetch an existing object and make incremental changes to it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID

try {
    $result = $api_instance->getOpportunity($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |

### Return type

[**\Swagger\Client\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateHistory**
> \Swagger\Client\Model\OpportunityState[] getStateHistory($id)

Gets the history of States and Reasons for an Opportunity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID

try {
    $result = $api_instance->getStateHistory($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getStateHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |

### Return type

[**\Swagger\Client\Model\OpportunityState[]**](../Model/OpportunityState.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \Swagger\Client\Model\Task[] getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of Opportunity's Tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when task was last updated.
$top = 56; // int | Optional, maximum number of tasks to return.
$skip = 56; // int | Optional, number of tasks to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |
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

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$api_custom_field = new \Swagger\Client\Model\APICustomField(); // \Swagger\Client\Model\APICustomField | The Custom Field to edit (just include JSON object as request body)

try {
    $result = $api_instance->updateCustomField($id, $api_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
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
> \Swagger\Client\Model\Opportunity updateImage($id, $filename, $file)

Updates an Opportunity's Image

This action will replace any existing Image attached to the Opportunity. Image file contents should be sent as binary data in request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$filename = "filename_example"; // string | Name of Image File to be attached to Opportunity
$file = "B"; // string | File to upload

try {
    $result = $api_instance->updateImage($id, $filename, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->updateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
 **filename** | **string**| Name of Image File to be attached to Opportunity |
 **file** | **string**| File to upload |

### Return type

[**\Swagger\Client\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLink**
> \Swagger\Client\Model\Link updateLink($id, $api_link)

Updates a Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID (OPPORTUNITY_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include JSON object as request body)

try {
    $result = $api_instance->updateLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID (OPPORTUNITY_ID) |
 **api_link** | [**\Swagger\Client\Model\APILink**](../Model/\Swagger\Client\Model\APILink.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOpportunity**
> \Swagger\Client\Model\Opportunity updateOpportunity($api_opportunity, $brief)

Updates an Opportunity

A common source of problems when updating opportunities occurs when users omit required fields, or insert             invalid data into a field (for example by referencing an invalid CATEGORY_ID). A good troubleshooting technique             is to create a few opportunities via the web interface, with representative data, links, etc, and then access             these opportunities via the GET method, and inspect the returned object graph. Also, note: The STAGE_ID and             PIPELINE_ID properties of opportunities are read-only. (There are separate endpoints to update pipelines/stages.)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$api_opportunity = new \Swagger\Client\Model\APIOpportunity(); // \Swagger\Client\Model\APIOpportunity | An Opportunity (just include JSON object as request body)
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Opportunity. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateOpportunity($api_opportunity, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->updateOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_opportunity** | [**\Swagger\Client\Model\APIOpportunity**](../Model/\Swagger\Client\Model\APIOpportunity.md)| An Opportunity (just include JSON object as request body) |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Opportunity. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePipeline**
> \Swagger\Client\Model\Opportunity updatePipeline($id, $api_pipeline_change)

Changes current pipeline for the opportunity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID
$api_pipeline_change = new \Swagger\Client\Model\APIPipelineChange(); // \Swagger\Client\Model\APIPipelineChange | Pipeline change parameters (just include JSON object as request body)

try {
    $result = $api_instance->updatePipeline($id, $api_pipeline_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->updatePipeline: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |
 **api_pipeline_change** | [**\Swagger\Client\Model\APIPipelineChange**](../Model/\Swagger\Client\Model\APIPipelineChange.md)| Pipeline change parameters (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePipelineStage**
> \Swagger\Client\Model\Opportunity updatePipelineStage($id, $api_stage_change)

Changes current pipeline stage for the opportunity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OpportunitiesApi();
$id = 789; // int | An Opportunity's ID
$api_stage_change = new \Swagger\Client\Model\APIPipelineStageChange(); // \Swagger\Client\Model\APIPipelineStageChange | Pipeline stage change parameters (just include JSON object as request body)

try {
    $result = $api_instance->updatePipelineStage($id, $api_stage_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->updatePipelineStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Opportunity&#39;s ID |
 **api_stage_change** | [**\Swagger\Client\Model\APIPipelineStageChange**](../Model/\Swagger\Client\Model\APIPipelineStageChange.md)| Pipeline stage change parameters (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Opportunity**](../Model/Opportunity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

