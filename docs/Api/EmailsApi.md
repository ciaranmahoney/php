# Swagger\Client\EmailsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addComment**](EmailsApi.md#addComment) | **POST** /Emails/{id}/Comments | Adds a Comment to an email.
[**addEmailLink**](EmailsApi.md#addEmailLink) | **POST** /Emails/{id}/EmailLinks | Adds an Email Link
[**addFollow**](EmailsApi.md#addFollow) | **POST** /Emails/{id}/Follow | Start following an Email
[**addTag**](EmailsApi.md#addTag) | **POST** /Emails/{id}/Tags | Adds a Tag for an Email
[**deleteEmailLink**](EmailsApi.md#deleteEmailLink) | **DELETE** /Emails/{id}/EmailLinks/{linkId} | Deletes an Email Link
[**deleteFollow**](EmailsApi.md#deleteFollow) | **DELETE** /Emails/{id}/Follow | Stop following an Email
[**deleteTag**](EmailsApi.md#deleteTag) | **DELETE** /Emails/{id}/Tags/{tagName} | Deletes a Tag from an Email
[**getComments**](EmailsApi.md#getComments) | **GET** /Emails/{id}/Comments | Gets an Email&#39;s Comments
[**getEmail**](EmailsApi.md#getEmail) | **GET** /Emails/{id} | Gets an Email
[**getEmails**](EmailsApi.md#getEmails) | **GET** /Emails | Gets a list of Emails.
[**getEmailsBySearch**](EmailsApi.md#getEmailsBySearch) | **GET** /Emails/Search | Gets a filtered list of Emails.
[**getFileAttachments**](EmailsApi.md#getFileAttachments) | **GET** /Emails/{id}/FileAttachments | Gets an Email&#39;s File Attachments
[**getFollow**](EmailsApi.md#getFollow) | **GET** /Emails/{id}/Follow | Gets a Follow record for the Email


# **addComment**
> \Swagger\Client\Model\Comment addComment($id, $api_comment)

Adds a Comment to an email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)
$api_comment = new \Swagger\Client\Model\APIComment(); // \Swagger\Client\Model\APIComment | The Comment to add (just include JSON object as request body)

try {
    $result = $api_instance->addComment($id, $api_comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->addComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |
 **api_comment** | [**\Swagger\Client\Model\APIComment**](../Model/\Swagger\Client\Model\APIComment.md)| The Comment to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Comment**](../Model/Comment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEmailLink**
> \Swagger\Client\Model\EmailLink addEmailLink($id, $api_link)

Adds an Email Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)
$api_link = new \Swagger\Client\Model\APIEmailLink(); // \Swagger\Client\Model\APIEmailLink | The Email Link to add (just include JSON object as request body)

try {
    $result = $api_instance->addEmailLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->addEmailLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |
 **api_link** | [**\Swagger\Client\Model\APIEmailLink**](../Model/\Swagger\Client\Model\APIEmailLink.md)| The Email Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\EmailLink**](../Model/EmailLink.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFollow**
> \Swagger\Client\Model\Follow addFollow($id)

Start following an Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \Swagger\Client\Model\Tag addTag($id, $api_tag)

Adds a Tag for an Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)
$api_tag = new \Swagger\Client\Model\APITag(); // \Swagger\Client\Model\APITag | The Tag to add

try {
    $result = $api_instance->addTag($id, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |
 **api_tag** | [**\Swagger\Client\Model\APITag**](../Model/\Swagger\Client\Model\APITag.md)| The Tag to add |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailLink**
> deleteEmailLink($id, $link_id)

Deletes an Email Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)
$link_id = 789; // int | An Email Link's ID (EMAIL_LINK_ID)

try {
    $api_instance->deleteEmailLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteEmailLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |
 **link_id** | **int**| An Email Link&#39;s ID (EMAIL_LINK_ID) |

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

Stop following an Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |

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

Deletes a Tag from an Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)
$tag_name = "tag_name_example"; // string | A Tag's name

try {
    $api_instance->deleteTag($id, $tag_name);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |
 **tag_name** | **string**| A Tag&#39;s name |

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

Gets an Email's Comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Emails's ID (EMAIL_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when comment was last updated.
$skip = 56; // int | Optional, number of comments to skip.
$top = 56; // int | Optional, maximum number of comments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getComments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Emails&#39;s ID (EMAIL_ID) |
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

# **getEmail**
> \Swagger\Client\Model\Email getEmail($id)

Gets an Email



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID

try {
    $result = $api_instance->getEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID |

### Return type

[**\Swagger\Client\Model\Email**](../Model/Email.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmails**
> \Swagger\Client\Model\Email[] getEmails($brief, $skip, $top, $count_total)

Gets a list of Emails.

Simple object graphs (excluding EMAILLINKS, TAGS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the email.
$skip = 56; // int | Optional, number of emails to skip.
$top = 56; // int | Optional, maximum number of emails to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEmails($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the email. | [optional] [default to false]
 **skip** | **int**| Optional, number of emails to skip. | [optional]
 **top** | **int**| Optional, maximum number of emails to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Email[]**](../Model/Email.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailsBySearch**
> \Swagger\Client\Model\Email[] getEmailsBySearch($email_from, $email_to, $tag, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Emails.

Only one optional parameter (excluding brief, top, skip and count_total) can be specified.             Simple object graphs (excluding EMAILLINKS, TAGS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$email_from = "email_from_example"; // string | Optional, from email address.
$email_to = "email_to_example"; // string | Optional, to email address.
$tag = "tag_example"; // string | Optional, a single tag.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when email was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the email.
$skip = 56; // int | Optional, number of emails to skip.
$top = 56; // int | Optional, maximum number of emails to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEmailsBySearch($email_from, $email_to, $tag, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_from** | **string**| Optional, from email address. | [optional]
 **email_to** | **string**| Optional, to email address. | [optional]
 **tag** | **string**| Optional, a single tag. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when email was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the email. | [optional] [default to false]
 **skip** | **int**| Optional, number of emails to skip. | [optional]
 **top** | **int**| Optional, maximum number of emails to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Email[]**](../Model/Email.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileAttachments**
> \Swagger\Client\Model\FileAttachment[] getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total)

Gets an Email's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |
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

Gets a Follow record for the Email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 789; // int | An Email's ID (EMAIL_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Email&#39;s ID (EMAIL_ID) |

### Return type

[**\Swagger\Client\Model\Follow**](../Model/Follow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

