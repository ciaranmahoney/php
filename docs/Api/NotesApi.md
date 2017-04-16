# Swagger\Client\NotesApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addComment**](NotesApi.md#addComment) | **POST** /Notes/{id}/Comments | Adds a Comment to a Note
[**addFileAttachment**](NotesApi.md#addFileAttachment) | **POST** /Notes/{id}/FileAttachments | Adds a File Attachment to a Note
[**addFollow**](NotesApi.md#addFollow) | **POST** /Notes/{id}/Follow | Start following a Note
[**addNoteLink**](NotesApi.md#addNoteLink) | **POST** /Notes/{id}/NoteLinks | Adds a Note Link
[**deleteFollow**](NotesApi.md#deleteFollow) | **DELETE** /Notes/{id}/Follow | Stop following a Note
[**deleteNote**](NotesApi.md#deleteNote) | **DELETE** /Notes/{id} | Deletes a Note
[**deleteNoteLink**](NotesApi.md#deleteNoteLink) | **DELETE** /Notes/{id}/NoteLinks/{linkId} | Deletes a Note Link
[**getComments**](NotesApi.md#getComments) | **GET** /Notes/{id}/Comments | Gets a Note&#39;s Comments
[**getFileAttachments**](NotesApi.md#getFileAttachments) | **GET** /Notes/{id}/FileAttachments | Gets a Note&#39;s File Attachments
[**getFollow**](NotesApi.md#getFollow) | **GET** /Notes/{id}/Follow | Gets a Follow record for the Note
[**getNote**](NotesApi.md#getNote) | **GET** /Notes/{id} | Gets a Note
[**getNotes**](NotesApi.md#getNotes) | **GET** /Notes | Gets a list of Notes.
[**getNotesBySearch**](NotesApi.md#getNotesBySearch) | **GET** /Notes/Search | Gets a filtered list of Notes.
[**updateNote**](NotesApi.md#updateNote) | **PUT** /Notes | Updates a Note


# **addComment**
> \Swagger\Client\Model\Comment addComment($id, $api_comment)

Adds a Comment to a Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)
$api_comment = new \Swagger\Client\Model\APIComment(); // \Swagger\Client\Model\APIComment | The Comment to add (just include JSON object as request body)

try {
    $result = $api_instance->addComment($id, $api_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->addComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |
 **api_comment** | [**\Swagger\Client\Model\APIComment**](../Model/\Swagger\Client\Model\APIComment.md)| The Comment to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFileAttachment**
> \Swagger\Client\Model\FileAttachment addFileAttachment($id, $file, $file_name, $content_type, $file_category_id)

Adds a File Attachment to a Note

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | Note ID
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $api_instance->addFileAttachment($id, $file, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Note ID |
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

Start following a Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNoteLink**
> \Swagger\Client\Model\NoteLink addNoteLink($id, $api_link)

Adds a Note Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)
$api_link = new \Swagger\Client\Model\APINoteLink(); // \Swagger\Client\Model\APINoteLink | The Note Link to add (just include JSON object as request body)

try {
    $result = $api_instance->addNoteLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->addNoteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |
 **api_link** | [**\Swagger\Client\Model\APINoteLink**](../Model/\Swagger\Client\Model\APINoteLink.md)| The Note Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\NoteLink**](../Model/NoteLink.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFollow**
> deleteFollow($id)

Stop following a Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNote**
> deleteNote($id)

Deletes a Note



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID

try {
    $api_instance->deleteNote($id);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->deleteNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNoteLink**
> deleteNoteLink($id, $link_id)

Deletes a Note Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)
$link_id = 789; // int | A Note Link's ID (NOTE_LINK_ID)

try {
    $api_instance->deleteNoteLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->deleteNoteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |
 **link_id** | **int**| A Note Link&#39;s ID (NOTE_LINK_ID) |

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

Gets a Note's Comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when comment was last updated.
$skip = 56; // int | Optional, number of comments to skip.
$top = 56; // int | Optional, maximum number of comments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getComments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |
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

# **getFileAttachments**
> \Swagger\Client\Model\FileAttachment[] getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total)

Gets a Note's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |
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

Gets a Follow record for the Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID (NOTE_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID (NOTE_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNote**
> \Swagger\Client\Model\Note getNote($id)

Gets a Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$id = 789; // int | A Note's ID

try {
    $result = $api_instance->getNote($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->getNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Note&#39;s ID |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotes**
> \Swagger\Client\Model\Note[] getNotes($brief, $skip, $top, $count_total)

Gets a list of Notes.

Simple object graphs (excluding NOTELINKS) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the note.
$skip = 56; // int | Optional, number of notes to skip.
$top = 56; // int | Optional, maximum number of notes to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getNotes($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the note. | [optional] [default to false]
 **skip** | **int**| Optional, number of notes to skip. | [optional]
 **top** | **int**| Optional, maximum number of notes to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Note[]**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotesBySearch**
> \Swagger\Client\Model\Note[] getNotesBySearch($title, $owner_user_id, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Notes.

Only one optional parameter (excluding top, skip and count_total) can be specified. Simple object graphs (excluding NOTELINKS) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$title = "title_example"; // string | Optional, note title.
$owner_user_id = 789; // int | Optional, id of the owner user.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when note was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the note.
$skip = 56; // int | Optional, number of notes to skip.
$top = 56; // int | Optional, maximum number of notes to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getNotesBySearch($title, $owner_user_id, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->getNotesBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| Optional, note title. | [optional]
 **owner_user_id** | **int**| Optional, id of the owner user. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when note was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the note. | [optional] [default to false]
 **skip** | **int**| Optional, number of notes to skip. | [optional]
 **top** | **int**| Optional, maximum number of notes to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Note[]**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNote**
> \Swagger\Client\Model\Note updateNote($api_note, $brief)

Updates a Note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotesApi();
$api_note = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The Note to add (just include JSON object as request body)
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Note. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateNote($api_note, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotesApi->updateNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_note** | [**\Swagger\Client\Model\APINote**](../Model/\Swagger\Client\Model\APINote.md)| The Note to add (just include JSON object as request body) |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Note. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

