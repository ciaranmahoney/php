# Swagger\Client\LeadsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitySetAssignment**](LeadsApi.md#addActivitySetAssignment) | **POST** /Leads/{id}/ActivitySetAssignment | Adds an Activity Set to a Lead
[**addFileAttachment**](LeadsApi.md#addFileAttachment) | **POST** /Leads/{id}/FileAttachments | Adds a File Attachment to a Lead
[**addFollow**](LeadsApi.md#addFollow) | **POST** /Leads/{id}/Follow | Start following a Lead
[**addLead**](LeadsApi.md#addLead) | **POST** /Leads | Adds a Lead
[**addNote**](LeadsApi.md#addNote) | **POST** /Leads/{id}/Notes | Adds a Note to a Lead.
[**addTag**](LeadsApi.md#addTag) | **POST** /Leads/{id}/Tags | Adds a Tag for a Lead
[**deleteCustomField**](LeadsApi.md#deleteCustomField) | **DELETE** /Leads/{id}/CustomFields/{customFieldId} | Deletes a Custom Field
[**deleteFollow**](LeadsApi.md#deleteFollow) | **DELETE** /Leads/{id}/Follow | Stop following a Lead
[**deleteImage**](LeadsApi.md#deleteImage) | **DELETE** /Leads/{id}/Image | Deletes a Lead&#39;s Image
[**deleteLead**](LeadsApi.md#deleteLead) | **DELETE** /Leads/{id} | Deletes a Lead
[**deleteTag**](LeadsApi.md#deleteTag) | **DELETE** /Leads/{id}/Tags/{tagName} | Deletes a Tag from a Lead
[**getEmails**](LeadsApi.md#getEmails) | **GET** /Leads/{id}/Emails | Gets a list of Lead&#39;s Emails
[**getEvents**](LeadsApi.md#getEvents) | **GET** /Leads/{id}/Events | Gets a Lead&#39;s Events
[**getFileAttachments**](LeadsApi.md#getFileAttachments) | **GET** /Leads/{id}/FileAttachments | Gets a Lead&#39;s File Attachments
[**getFollow**](LeadsApi.md#getFollow) | **GET** /Leads/{id}/Follow | Gets a Follow record for the Lead
[**getImage**](LeadsApi.md#getImage) | **GET** /Leads/{id}/Image | Gets a Lead&#39;s Image
[**getLead**](LeadsApi.md#getLead) | **GET** /Leads/{id} | Gets a Lead
[**getLeads**](LeadsApi.md#getLeads) | **GET** /Leads | Gets a list of Leads.
[**getLeadsBySearch**](LeadsApi.md#getLeadsBySearch) | **GET** /Leads/Search | Gets a filtered list of Leads.
[**getNotes**](LeadsApi.md#getNotes) | **GET** /Leads/{id}/Notes | Gets a Lead&#39;s Notes
[**getTasks**](LeadsApi.md#getTasks) | **GET** /Leads/{id}/Tasks | Gets a list of Lead&#39;s Tasks
[**updateCustomField**](LeadsApi.md#updateCustomField) | **PUT** /Leads/{id}/CustomFields | Updates a Custom Field
[**updateImage**](LeadsApi.md#updateImage) | **PUT** /Leads/{id}/Image/{filename} | Updates a Lead&#39;s Image
[**updateLead**](LeadsApi.md#updateLead) | **PUT** /Leads | Updates a Lead


# **addActivitySetAssignment**
> addActivitySetAssignment($id, $api_activity_set_assignment)

Adds an Activity Set to a Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID
$api_activity_set_assignment = new \Swagger\Client\Model\APIActivitySetAssignment(); // \Swagger\Client\Model\APIActivitySetAssignment | The Activity Set Assignment object which contains the configuration information for the Activity Set

try {
    $api_instance->addActivitySetAssignment($id, $api_activity_set_assignment);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addActivitySetAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID |
 **api_activity_set_assignment** | [**\Swagger\Client\Model\APIActivitySetAssignment**](../Model/\Swagger\Client\Model\APIActivitySetAssignment.md)| The Activity Set Assignment object which contains the configuration information for the Activity Set |

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

Adds a File Attachment to a Lead

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $api_instance->addFileAttachment($id, $file, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
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

Start following a Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLead**
> \Swagger\Client\Model\Lead addLead($api_lead)

Adds a Lead

A common source of problems when creating leads occurs when users omit required fields, or insert             invalid data into a field. A good troubleshooting technique             is to create a few leads via the web interface, with representative data, links, etc, and then access             these leads via the API, and inspect the returned object graph.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$api_lead = new \Swagger\Client\Model\APILead(); // \Swagger\Client\Model\APILead | The Lead to add (just include JSON object as request body)

try {
    $result = $api_instance->addLead($api_lead);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_lead** | [**\Swagger\Client\Model\APILead**](../Model/\Swagger\Client\Model\APILead.md)| The Lead to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Lead**](../Model/Lead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNote**
> \Swagger\Client\Model\Note addNote($id, $api_note)

Adds a Note to a Lead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$api_note = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The Note to add (just include JSON object as request body)

try {
    $result = $api_instance->addNote($id, $api_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
 **api_note** | [**\Swagger\Client\Model\APINote**](../Model/\Swagger\Client\Model\APINote.md)| The Note to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \Swagger\Client\Model\Tag addTag($id, $api_tag)

Adds a Tag for a Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$api_tag = new \Swagger\Client\Model\APITag(); // \Swagger\Client\Model\APITag | The Tag to add (just include the JSON object in request body.

try {
    $result = $api_instance->addTag($id, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
 **api_tag** | [**\Swagger\Client\Model\APITag**](../Model/\Swagger\Client\Model\APITag.md)| The Tag to add (just include the JSON object in request body. |

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

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$custom_field_id = "custom_field_id_example"; // string | A Custom Field's ID (CUSTOM_FIELD_ID)

try {
    $api_instance->deleteCustomField($id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
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

Stop following a Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |

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

Deletes a Lead's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)

try {
    $api_instance->deleteImage($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLead**
> deleteLead($id)

Deletes a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID

try {
    $api_instance->deleteLead($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID |

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

Deletes a Tag from a Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$tag_name = "tag_name_example"; // string | A Tag's name

try {
    $api_instance->deleteTag($id, $tag_name);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
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

Gets a list of Lead's Emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when email was last updated.
$top = 56; // int | Optional, maximum number of emails to return.
$skip = 56; // int | Optional, number of emails to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEmails($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID |
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

Gets a Lead's Events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when event was last updated.
$top = 56; // int | Optional, maximum number of events to return.
$skip = 56; // int | Optional, number of events to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEvents($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
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

Gets a Lead's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
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

Gets a Follow record for the Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |

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

Gets a Lead's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)

try {
    $api_instance->getImage($id);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLead**
> \Swagger\Client\Model\Lead getLead($id)

Gets a Lead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID

try {
    $result = $api_instance->getLead($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID |

### Return type

[**\Swagger\Client\Model\Lead**](../Model/Lead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeads**
> \Swagger\Client\Model\Lead[] getLeads($include_converted, $brief, $skip, $top, $count_total)

Gets a list of Leads.

Simple object graphs (excluding Custom Fields, Tags, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$include_converted = false; // bool | Optional, by default converted leads are not included, pass in \"true\" to include them in the response
$brief = false; // bool | Optional, true if response should only contain top level properties of the lead.
$skip = 56; // int | Optional, number of lead to skip.
$top = 56; // int | Optional, maximum number of lead to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getLeads($include_converted, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLeads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_converted** | **bool**| Optional, by default converted leads are not included, pass in \&quot;true\&quot; to include them in the response | [optional] [default to false]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the lead. | [optional] [default to false]
 **skip** | **int**| Optional, number of lead to skip. | [optional]
 **top** | **int**| Optional, maximum number of lead to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Lead[]**](../Model/Lead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadsBySearch**
> \Swagger\Client\Model\Lead[] getLeadsBySearch($email, $tag, $phone_number, $first_name, $last_name, $city, $state, $postcode, $country, $organisation, $updated_after_utc, $include_converted, $brief, $skip, $top, $count_total)

Gets a filtered list of Leads.

Only one optional parameter (excluding include_converted, top, skip and count_total) can be specified. Simple object graphs (excluding Custom Fields, Tags, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$email = "email_example"; // string | Optional, email address.
$tag = "tag_example"; // string | Optional, a single tag.
$phone_number = "phone_number_example"; // string | Optional, phone number.
$first_name = "first_name_example"; // string | Optional, first name of the contact.
$last_name = "last_name_example"; // string | Optional, last name of the contact.
$city = "city_example"; // string | Optional, name of the city from lead address.
$state = "state_example"; // string | Optional, state from the lead address.
$postcode = "postcode_example"; // string | Optional, postal code from the lead address.
$country = "country_example"; // string | Optional, name of the country from lead address.
$organisation = "organisation_example"; // string | Optional, name of the default organisation.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when lead was last updated.
$include_converted = false; // bool | Optional, by default converted leads are not included, pass in \"true\" to include them in the response
$brief = false; // bool | Optional, true if response should only contain top level properties of the lead.
$skip = 56; // int | Optional, number of lead to skip.
$top = 56; // int | Optional, maximum number of lead to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getLeadsBySearch($email, $tag, $phone_number, $first_name, $last_name, $city, $state, $postcode, $country, $organisation, $updated_after_utc, $include_converted, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLeadsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Optional, email address. | [optional]
 **tag** | **string**| Optional, a single tag. | [optional]
 **phone_number** | **string**| Optional, phone number. | [optional]
 **first_name** | **string**| Optional, first name of the contact. | [optional]
 **last_name** | **string**| Optional, last name of the contact. | [optional]
 **city** | **string**| Optional, name of the city from lead address. | [optional]
 **state** | **string**| Optional, state from the lead address. | [optional]
 **postcode** | **string**| Optional, postal code from the lead address. | [optional]
 **country** | **string**| Optional, name of the country from lead address. | [optional]
 **organisation** | **string**| Optional, name of the default organisation. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when lead was last updated. | [optional]
 **include_converted** | **bool**| Optional, by default converted leads are not included, pass in \&quot;true\&quot; to include them in the response | [optional] [default to false]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the lead. | [optional] [default to false]
 **skip** | **int**| Optional, number of lead to skip. | [optional]
 **top** | **int**| Optional, maximum number of lead to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Lead[]**](../Model/Lead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotes**
> \Swagger\Client\Model\Note[] getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a Lead's Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when note was last updated.
$top = 56; // int | Optional, maximum number of notes to return.
$skip = 56; // int | Optional, number of notes to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
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

# **getTasks**
> \Swagger\Client\Model\Task[] getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of Lead's Tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when task was last updated.
$top = 56; // int | Optional, maximum number of tasks to return.
$skip = 56; // int | Optional, number of tasks to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID |
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

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$api_custom_field = new \Swagger\Client\Model\APICustomField(); // \Swagger\Client\Model\APICustomField | The Custom Field to edit (just include JSON object as request body)

try {
    $result = $api_instance->updateCustomField($id, $api_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
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
> \Swagger\Client\Model\Lead updateImage($id, $filename, $file)

Updates a Lead's Image

This action will replace any existing Image attached to the Lead. The contents of the image file should be sent as binary data in the request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$id = 789; // int | A Lead's ID (LEAD_ID)
$filename = "filename_example"; // string | Name of Image File to be attached to Lead
$file = "B"; // string | File to upload

try {
    $result = $api_instance->updateImage($id, $filename, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Lead&#39;s ID (LEAD_ID) |
 **filename** | **string**| Name of Image File to be attached to Lead |
 **file** | **string**| File to upload |

### Return type

[**\Swagger\Client\Model\Lead**](../Model/Lead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLead**
> \Swagger\Client\Model\Lead updateLead($api_lead, $brief)

Updates a Lead

A common source of problems when updating leads occurs when users omit required fields, or insert             invalid data into a field. A good troubleshooting technique             is to create a few leads via the web interface, with representative data, links, etc, and then access             these leads via the API, and inspect the returned object graph.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LeadsApi();
$api_lead = new \Swagger\Client\Model\APILead(); // \Swagger\Client\Model\APILead | A Lead (just include JSON object as request body)
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Lead. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateLead($api_lead, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updateLead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_lead** | [**\Swagger\Client\Model\APILead**](../Model/\Swagger\Client\Model\APILead.md)| A Lead (just include JSON object as request body) |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Lead. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Lead**](../Model/Lead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

