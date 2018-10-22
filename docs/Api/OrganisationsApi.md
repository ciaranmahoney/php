# Swagger\Client\OrganisationsApi

All URIs are relative to *https://api.insightly.com/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitySetAssignment**](OrganisationsApi.md#addActivitySetAssignment) | **POST** /Organisations/{id}/ActivitySetAssignment | Adds an Activity Set to an Organization
[**addDate**](OrganisationsApi.md#addDate) | **POST** /Organisations/{id}/Dates | Adds a Date
[**addEmailDomain**](OrganisationsApi.md#addEmailDomain) | **POST** /Organisations/{id}/EmailDomains | Adds an Email Domain
[**addEntity**](OrganisationsApi.md#addEntity) | **POST** /Organisations | Adds an Organization
[**addFileAttachment**](OrganisationsApi.md#addFileAttachment) | **POST** /Organisations/{id}/FileAttachments | Adds a File Attachment to an Organization
[**addFollow**](OrganisationsApi.md#addFollow) | **POST** /Organisations/{id}/Follow | Start following an Organization
[**addLink**](OrganisationsApi.md#addLink) | **POST** /v3.0/Organisations/{id}/Links | Adds a Link
[**addNotes**](OrganisationsApi.md#addNotes) | **POST** /Organisations/{id}/Notes | Adds a Note to an Organization
[**addTag**](OrganisationsApi.md#addTag) | **POST** /Organisations/{id}/Tags | Adds a Tag
[**deleteDate**](OrganisationsApi.md#deleteDate) | **DELETE** /Organisations/{id}/Dates/{dateId} | Deletes a Date
[**deleteEmailDomain**](OrganisationsApi.md#deleteEmailDomain) | **DELETE** /Organisations/{id}/EmailDomains/{emailDomainId} | Deletes an Email Domain
[**deleteEntity**](OrganisationsApi.md#deleteEntity) | **DELETE** /Organisations/{id} | Deletes an Organization
[**deleteFollow**](OrganisationsApi.md#deleteFollow) | **DELETE** /Organisations/{id}/Follow | Stop following an Organization
[**deleteImage**](OrganisationsApi.md#deleteImage) | **DELETE** /Organisations/{id}/Image | Deletes an Organization&#39;s Image
[**deleteLink**](OrganisationsApi.md#deleteLink) | **DELETE** /Organisations/{id}/Links/{linkId} | Deletes a Link
[**deleteTag**](OrganisationsApi.md#deleteTag) | **DELETE** /Organisations/{id}/Tags/{tagName} | Deletes a Tag
[**getEmails**](OrganisationsApi.md#getEmails) | **GET** /Organisations/{id}/Emails | Gets a list of an Organization&#39;s Emails
[**getEntities**](OrganisationsApi.md#getEntities) | **GET** /Organisations | Gets a list of Organizations
[**getEntitiesBySearch**](OrganisationsApi.md#getEntitiesBySearch) | **GET** /Organisations/Search | Gets a filtered list of Organizations
[**getEntitiesByTag**](OrganisationsApi.md#getEntitiesByTag) | **GET** /Organisations/SearchByTag | Gets a list of Organizations filtered by tags
[**getEntity**](OrganisationsApi.md#getEntity) | **GET** /Organisations/{id} | Gets an Organization
[**getEvents**](OrganisationsApi.md#getEvents) | **GET** /Organisations/{id}/Events | Gets an Organization&#39;s Events
[**getFileAttachments**](OrganisationsApi.md#getFileAttachments) | **GET** /Organisations/{id}/FileAttachments | Gets an Organization&#39;s File Attachments
[**getFollow**](OrganisationsApi.md#getFollow) | **GET** /Organisations/{id}/Follow | Gets a Follow state for an Organization
[**getImage**](OrganisationsApi.md#getImage) | **GET** /Organisations/{id}/Image | Gets an Organization&#39;s Image
[**getLinks**](OrganisationsApi.md#getLinks) | **GET** /v3.0/Organisations/{id}/Links | Gets an Organization&#39;s Links
[**getNotes**](OrganisationsApi.md#getNotes) | **GET** /Organisations/{id}/Notes | Gets an Organization&#39;s Notes
[**getTasks**](OrganisationsApi.md#getTasks) | **GET** /Organisations/{id}/Tasks | Gets a list of an Organization&#39;s Tasks
[**updateDate**](OrganisationsApi.md#updateDate) | **PUT** /Organisations/{id}/Dates | Updates a Date
[**updateEmailDomain**](OrganisationsApi.md#updateEmailDomain) | **PUT** /Organisations/{id}/EmailDomains | Updates an Email Domain
[**updateEntity**](OrganisationsApi.md#updateEntity) | **PUT** /Organisations | Updates an Organization
[**updateImage**](OrganisationsApi.md#updateImage) | **PUT** /Organisations/{id}/Image/{filename} | Updates an Organization&#39;s Image
[**updateLink**](OrganisationsApi.md#updateLink) | **PUT** /v3.0/Organisations/{id}/Links | Updates a Link
[**updateNotes**](OrganisationsApi.md#updateNotes) | **PUT** /Organisations/{id}/Notes | Updates a note of an Organization


# **addActivitySetAssignment**
> \Swagger\Client\Model\APIActivitySetAssignment addActivitySetAssignment($id, $authorization, $api_activity_set_assignment)

Adds an Activity Set to an Organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_activity_set_assignment = new \Swagger\Client\Model\APIActivitySetAssignment(); // \Swagger\Client\Model\APIActivitySetAssignment | The Activity Set Assignment object which contains the configuration information for the Activity Set (just include JSON object as request body)

try {
    $result = $apiInstance->addActivitySetAssignment($id, $authorization, $api_activity_set_assignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addActivitySetAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_activity_set_assignment** | [**\Swagger\Client\Model\APIActivitySetAssignment**](../Model/APIActivitySetAssignment.md)| The Activity Set Assignment object which contains the configuration information for the Activity Set (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\APIActivitySetAssignment**](../Model/APIActivitySetAssignment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDate**
> \Swagger\Client\Model\APIDate addDate($id, $authorization, $api_date)

Adds a Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Contact's ID (CONTACT_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$api_date = new \Swagger\Client\Model\APIDate(); // \Swagger\Client\Model\APIDate | The Contact Date to add (just include JSON object as request body)

try {
    $result = $apiInstance->addDate($id, $authorization, $api_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_date** | [**\Swagger\Client\Model\APIDate**](../Model/APIDate.md)| The Contact Date to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\APIDate**](../Model/APIDate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEmailDomain**
> \Swagger\Client\Model\APIEmailDomain addEmailDomain($id, $authorization, $api_email_domain)

Adds an Email Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_email_domain = new \Swagger\Client\Model\APIEmailDomain(); // \Swagger\Client\Model\APIEmailDomain | The Email Domain to add (just include JSON object as request body)

try {
    $result = $apiInstance->addEmailDomain($id, $authorization, $api_email_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addEmailDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_email_domain** | [**\Swagger\Client\Model\APIEmailDomain**](../Model/APIEmailDomain.md)| The Email Domain to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\APIEmailDomain**](../Model/APIEmailDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEntity**
> \Swagger\Client\Model\Organisation addEntity($authorization, $field_values)

Adds an Organization

If you have trouble with creating an Organization, try creating Organizations via the web interface, and then access those Organizations via the API. This way you            can see examples of the fields and sub-elements attached to the Organization. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \Swagger\Client\Model\Organisation2(); // \Swagger\Client\Model\Organisation2 | The record to add (just include the JSON object as the request body)

try {
    $result = $apiInstance->addEntity($authorization, $field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\Swagger\Client\Model\Organisation2**](../Model/Organisation2.md)| The record to add (just include the JSON object as the request body) |

### Return type

[**\Swagger\Client\Model\Organisation**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFileAttachment**
> \Swagger\Client\Model\APIFileAttachment addFileAttachment($id, $file, $authorization, $file_name, $content_type, $file_category_id)

Adds a File Attachment to an Organization

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Record ID
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$authorization = "{{Authorization}}"; // string | Authorization
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $apiInstance->addFileAttachment($id, $file, $authorization, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Record ID |
 **file** | **\SplFileObject**| The file part of the multipart/form-data request. Only one file can be added per request. |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **file_name** | **string**|  | [optional]
 **content_type** | **string**|  | [optional]
 **file_category_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\APIFileAttachment**](../Model/APIFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFollow**
> \Swagger\Client\Model\APIFollow addFollow($id, $authorization)

Start following an Organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->addFollow($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\APIFollow**](../Model/APIFollow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addLink**
> \Swagger\Client\Model\APILinkDto addLink($id, $authorization, $api_link)

Adds a Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$api_link = new \Swagger\Client\Model\APILinkDto(); // \Swagger\Client\Model\APILinkDto | The Link to add (just include JSON object as request body)

try {
    $result = $apiInstance->addLink($id, $authorization, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_link** | [**\Swagger\Client\Model\APILinkDto**](../Model/APILinkDto.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\APILinkDto**](../Model/APILinkDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addNotes**
> \Swagger\Client\Model\APINote addNotes($id, $authorization, $field_values)

Adds a Note to an Organization

If you have trouble with creating an Organization, try creating Organizations via the web interface, and then access those Organizations via the API. This way you            can see examples of the fields and sub-elements attached to the Organization. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The record to add (just include the JSON object as the request body)

try {
    $result = $apiInstance->addNotes($id, $authorization, $field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\Swagger\Client\Model\APINote**](../Model/APINote.md)| The record to add (just include the JSON object as the request body) |

### Return type

[**\Swagger\Client\Model\APINote**](../Model/APINote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \Swagger\Client\Model\APITag addTag($id, $authorization, $api_tag)

Adds a Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_tag = new \Swagger\Client\Model\APITag(); // \Swagger\Client\Model\APITag | The Tag to add (just include the JSON object as the request body)

try {
    $result = $apiInstance->addTag($id, $authorization, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_tag** | [**\Swagger\Client\Model\APITag**](../Model/APITag.md)| The Tag to add (just include the JSON object as the request body) |

### Return type

[**\Swagger\Client\Model\APITag**](../Model/APITag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDate**
> deleteDate($id, $date_id, $authorization)

Deletes a Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$date_id = 789; // int | A Date's ID (DATE_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteDate($id, $date_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **date_id** | **int**| A Date&#39;s ID (DATE_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailDomain**
> deleteEmailDomain($id, $email_domain_id, $authorization)

Deletes an Email Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$email_domain_id = 789; // int | An Email Domain's ID (EMAIL_DOMAIN_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteEmailDomain($id, $email_domain_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteEmailDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **email_domain_id** | **int**| An Email Domain&#39;s ID (EMAIL_DOMAIN_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEntity**
> deleteEntity($id, $authorization)

Deletes an Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Entity's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteEntity($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Entity&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFollow**
> deleteFollow($id, $authorization)

Stop following an Organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteFollow($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImage**
> deleteImage($id, $authorization)

Deletes an Organization's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteImage($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLink**
> deleteLink($id, $link_id, $authorization)

Deletes a Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$link_id = 789; // int | A Link's ID (LINK_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteLink($id, $link_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **link_id** | **int**| A Link&#39;s ID (LINK_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> deleteTag($id, $tag_name, $authorization)

Deletes a Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$tag_name = "tag_name_example"; // string | A Tag's name
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->deleteTag($id, $tag_name, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **tag_name** | **string**| A Tag&#39;s name |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmails**
> \Swagger\Client\Model\APIEmail[] getEmails($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of an Organization's Emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when email was last updated.
$top = 56; // int | Optional, maximum number of emails to return.
$skip = 56; // int | Optional, number of emails to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEmails($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when email was last updated. | [optional]
 **top** | **int**| Optional, maximum number of emails to return. | [optional]
 **skip** | **int**| Optional, number of emails to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\APIEmail[]**](../Model/APIEmail.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntities**
> object[] getEntities($authorization, $brief, $skip, $top, $count_total)

Gets a list of Organizations

Simple object graphs (excluding LINKS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional,true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntities($authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional,true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesBySearch**
> object[] getEntitiesBySearch($authorization, $field_name, $field_value, $brief, $skip, $top, $count_total)

Gets a filtered list of Organizations

To filter with a field name and value, both field_name and field_value parameters must be provided.            <br /> Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$field_name = "field_name_example"; // string | Optional, field name for object
$field_value = "field_value_example"; // string | Optional, field value of the record
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntitiesBySearch($authorization, $field_name, $field_value, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEntitiesBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_name** | **string**| Optional, field name for object | [optional]
 **field_value** | **string**| Optional, field value of the record | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntitiesByTag**
> object[] getEntitiesByTag($tag_name, $authorization, $brief, $skip, $top, $count_total)

Gets a list of Organizations filtered by tags

Simple object graphs (excluding TAGS, CUSTOMFIELDS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_name = "tag_name_example"; // string | Tag name to filter on
$authorization = "{{Authorization}}"; // string | Authorization
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.
$skip = 56; // int | Optional, number of records to skip.
$top = 56; // int | Optional, maximum number of records to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEntitiesByTag($tag_name, $authorization, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEntitiesByTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_name** | **string**| Tag name to filter on |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]
 **skip** | **int**| Optional, number of records to skip. | [optional]
 **top** | **int**| Optional, maximum number of records to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEntity**
> \Swagger\Client\Model\Organisation getEntity($id, $authorization)

Gets an Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | The record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getEntity($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\Organisation**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \Swagger\Client\Model\APIEvent[] getEvents($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets an Organization's Events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when event was last updated.
$top = 56; // int | Optional, maximum number of events to return.
$skip = 56; // int | Optional, number of events to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getEvents($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when event was last updated. | [optional]
 **top** | **int**| Optional, maximum number of events to return. | [optional]
 **skip** | **int**| Optional, number of events to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\APIEvent[]**](../Model/APIEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileAttachments**
> \Swagger\Client\Model\APIFileAttachment[] getFileAttachments($id, $authorization, $updated_after_utc, $skip, $top, $count_total)

Gets an Organization's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getFileAttachments($id, $authorization, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when file attachment was last updated. | [optional]
 **skip** | **int**| Optional, number of file attachments to skip. | [optional]
 **top** | **int**| Optional, maximum number of file attachments to return in the response. | [optional]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\APIFileAttachment[]**](../Model/APIFileAttachment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFollow**
> \Swagger\Client\Model\APIFollow getFollow($id, $authorization)

Gets a Follow state for an Organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getFollow($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\APIFollow**](../Model/APIFollow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImage**
> getImage($id, $authorization)

Gets an Organization's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $apiInstance->getImage($id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinks**
> \Swagger\Client\Model\APILinkDto[] getLinks($id, $authorization)

Gets an Organization's Links

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization

try {
    $result = $apiInstance->getLinks($id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]

### Return type

[**\Swagger\Client\Model\APILinkDto[]**](../Model/APILinkDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotes**
> \Swagger\Client\Model\APINote[] getNotes($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets an Organization's Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when note was last updated.
$top = 56; // int | Optional, maximum number of notes to return.
$skip = 56; // int | Optional, number of notes to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getNotes($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when note was last updated. | [optional]
 **top** | **int**| Optional, maximum number of notes to return. | [optional]
 **skip** | **int**| Optional, number of notes to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\APINote[]**](../Model/APINote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \Swagger\Client\Model\APITask[] getTasks($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of an Organization's Tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$updated_after_utc = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional, earliest date when task was last updated.
$top = 56; // int | Optional, maximum number of tasks to return.
$skip = 56; // int | Optional, number of tasks to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $apiInstance->getTasks($id, $authorization, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when task was last updated. | [optional]
 **top** | **int**| Optional, maximum number of tasks to return. | [optional]
 **skip** | **int**| Optional, number of tasks to skip. | [optional]
 **brief** | **bool**| true if only top level properties needs to be returned. | [optional] [default to false]
 **count_total** | **bool**| true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\APITask[]**](../Model/APITask.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDate**
> \Swagger\Client\Model\APIDate updateDate($id, $authorization, $api_contact_date)

Updates a Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_contact_date = new \Swagger\Client\Model\APIDate(); // \Swagger\Client\Model\APIDate | The Date to add (just include the JSON object as request body)

try {
    $result = $apiInstance->updateDate($id, $authorization, $api_contact_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_contact_date** | [**\Swagger\Client\Model\APIDate**](../Model/APIDate.md)| The Date to add (just include the JSON object as request body) |

### Return type

[**\Swagger\Client\Model\APIDate**](../Model/APIDate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailDomain**
> \Swagger\Client\Model\APIEmailDomain updateEmailDomain($id, $authorization, $api_email_domain)

Updates an Email Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$authorization = "{{Authorization}}"; // string | Authorization
$api_email_domain = new \Swagger\Client\Model\APIEmailDomain(); // \Swagger\Client\Model\APIEmailDomain | The Email Domain to update (just include the JSON object as request body)

try {
    $result = $apiInstance->updateEmailDomain($id, $authorization, $api_email_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateEmailDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_email_domain** | [**\Swagger\Client\Model\APIEmailDomain**](../Model/APIEmailDomain.md)| The Email Domain to update (just include the JSON object as request body) |

### Return type

[**\Swagger\Client\Model\APIEmailDomain**](../Model/APIEmailDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEntity**
> \Swagger\Client\Model\Organisation updateEntity($authorization, $field_values)

Updates an Organization

If you have trouble updating an Organization, try accessing the Organization via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \Swagger\Client\Model\Organisation1(); // \Swagger\Client\Model\Organisation1 | The record to update (just include the JSON object as the request body)

try {
    $result = $apiInstance->updateEntity($authorization, $field_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\Swagger\Client\Model\Organisation1**](../Model/Organisation1.md)| The record to update (just include the JSON object as the request body) |

### Return type

[**\Swagger\Client\Model\Organisation**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImage**
> object[] updateImage($id, $filename, $authorization, $file)

Updates an Organization's Image

This action will replace any existing Image attached to the Organization. The contents of the image data should be sent as binary data in the request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID
$filename = "filename_example"; // string | Name of Image File to be attached to Record
$authorization = "{{Authorization}}"; // string | Authorization
$file = "B"; // string | File to upload

try {
    $result = $apiInstance->updateImage($id, $filename, $authorization, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID |
 **filename** | **string**| Name of Image File to be attached to Record |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **file** | **string**| File to upload |

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLink**
> \Swagger\Client\Model\APILinkDto updateLink($id, $authorization, $api_link)

Updates a Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$api_link = new \Swagger\Client\Model\APILinkDto(); // \Swagger\Client\Model\APILinkDto | The Link to add (just include JSON object as request body)

try {
    $result = $apiInstance->updateLink($id, $authorization, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **api_link** | [**\Swagger\Client\Model\APILinkDto**](../Model/APILinkDto.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\APILinkDto**](../Model/APILinkDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotes**
> \Swagger\Client\Model\APINote updateNotes($id, $authorization, $field_values, $brief)

Updates a note of an Organization

If you have trouble updating an Organization, try accessing the Organization via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrganisationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | A Record's ID (RECORD_ID)
$authorization = "{{Authorization}}"; // string | Authorization
$field_values = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The record to update (just include the JSON object as the request body)
$brief = false; // bool | Optional, true if response should only contain top level properties of the record.

try {
    $result = $apiInstance->updateNotes($id, $authorization, $field_values, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Record&#39;s ID (RECORD_ID) |
 **authorization** | **string**| Authorization | [default to {{Authorization}}]
 **field_values** | [**\Swagger\Client\Model\APINote**](../Model/APINote.md)| The record to update (just include the JSON object as the request body) |
 **brief** | **bool**| Optional, true if response should only contain top level properties of the record. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\APINote**](../Model/APINote.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

