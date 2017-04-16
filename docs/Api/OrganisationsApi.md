# Swagger\Client\OrganisationsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitySetAssignment**](OrganisationsApi.md#addActivitySetAssignment) | **POST** /Organisations/{id}/ActivitySetAssignment | Adds an Activity Set to an Organisation
[**addAddress**](OrganisationsApi.md#addAddress) | **POST** /Organisations/{id}/Addresses | Adds an Address
[**addContactInfo**](OrganisationsApi.md#addContactInfo) | **POST** /Organisations/{id}/ContactInfos | Adds a Contact Info
[**addDate**](OrganisationsApi.md#addDate) | **POST** /Organisations/{id}/Dates | Adds an Organisation Date
[**addFileAttachment**](OrganisationsApi.md#addFileAttachment) | **POST** /Organisations/{id}/FileAttachments | Adds a File Attachment to an Organisation
[**addFollow**](OrganisationsApi.md#addFollow) | **POST** /Organisations/{id}/Follow | Start following an Organisation
[**addLink**](OrganisationsApi.md#addLink) | **POST** /Organisations/{id}/Links | Adds a Link
[**addNote**](OrganisationsApi.md#addNote) | **POST** /Organisations/{id}/Notes | Adds a Note to an Organisation
[**addOrganisation**](OrganisationsApi.md#addOrganisation) | **POST** /Organisations | Adds an Organisation
[**addOrganisationLink**](OrganisationsApi.md#addOrganisationLink) | **POST** /Organisations/{id}/OrganisationLinks | Adds an Organisation Link
[**addTag**](OrganisationsApi.md#addTag) | **POST** /Organisations/{id}/Tags | Adds a Tag
[**deleteAddress**](OrganisationsApi.md#deleteAddress) | **DELETE** /Organisations/{id}/Addresses/{addressId} | Deletes an Address
[**deleteContactInfo**](OrganisationsApi.md#deleteContactInfo) | **DELETE** /Organisations/{id}/ContactInfos/{contactInfoId} | Deletes a Contact Info
[**deleteCustomField**](OrganisationsApi.md#deleteCustomField) | **DELETE** /Organisations/{id}/CustomFields/{customFieldId} | Deletes a Custom Field
[**deleteDate**](OrganisationsApi.md#deleteDate) | **DELETE** /Organisations/{id}/Dates/{dateId} | Deletes an Organisation Date
[**deleteFollow**](OrganisationsApi.md#deleteFollow) | **DELETE** /Organisations/{id}/Follow | Stop following an Organisation
[**deleteImage**](OrganisationsApi.md#deleteImage) | **DELETE** /Organisations/{id}/Image | Deletes an Organisation&#39;s Image
[**deleteLink**](OrganisationsApi.md#deleteLink) | **DELETE** /Organisations/{id}/Links/{linkId} | Deletes a Link
[**deleteOrganisation**](OrganisationsApi.md#deleteOrganisation) | **DELETE** /Organisations/{id} | Deletes an Organisation
[**deleteOrganisationLink**](OrganisationsApi.md#deleteOrganisationLink) | **DELETE** /Organisations/{id}/OrganisationLinks/{linkId} | Deletes an Organisation Link
[**deleteTag**](OrganisationsApi.md#deleteTag) | **DELETE** /Organisations/{id}/Tags/{tagName} | Deletes a Tag
[**getEmails**](OrganisationsApi.md#getEmails) | **GET** /Organisations/{id}/Emails | Gets a list of Organisation&#39;s Emails
[**getEvents**](OrganisationsApi.md#getEvents) | **GET** /Organisations/{id}/Events | Gets an Organisation&#39;s Events
[**getFileAttachments**](OrganisationsApi.md#getFileAttachments) | **GET** /Organisations/{id}/FileAttachments | Gets an Organisation&#39;s File Attachments
[**getFollow**](OrganisationsApi.md#getFollow) | **GET** /Organisations/{id}/Follow | Gets a Follow record for the Organisation
[**getImage**](OrganisationsApi.md#getImage) | **GET** /Organisations/{id}/Image | Gets an Organisations&#39;s Image
[**getNotes**](OrganisationsApi.md#getNotes) | **GET** /Organisations/{id}/Notes | Gets an Organisation&#39;s Notes
[**getOrganisation**](OrganisationsApi.md#getOrganisation) | **GET** /Organisations/{id} | Gets an Organisation
[**getOrganisations**](OrganisationsApi.md#getOrganisations) | **GET** /Organisations | Gets a list of Organisations.
[**getOrganisationsBySearch**](OrganisationsApi.md#getOrganisationsBySearch) | **GET** /Organisations/Search | Gets a filtered list of Organisations.
[**getTasks**](OrganisationsApi.md#getTasks) | **GET** /Organisations/{id}/Tasks | Gets a list of Organisation&#39;s Tasks
[**updateAddress**](OrganisationsApi.md#updateAddress) | **PUT** /Organisations/{id}/Addresses | Updates an Address
[**updateContactInfo**](OrganisationsApi.md#updateContactInfo) | **PUT** /Organisations/{id}/ContactInfos | Updates a Contact Info
[**updateCustomField**](OrganisationsApi.md#updateCustomField) | **PUT** /Organisations/{id}/CustomFields | Updates a Custom Field
[**updateDate**](OrganisationsApi.md#updateDate) | **PUT** /Organisations/{id}/Dates | Updates an Organisation Date
[**updateImage**](OrganisationsApi.md#updateImage) | **PUT** /Organisations/{id}/Image/{filename} | Updates an Organisation&#39;s Image
[**updateLink**](OrganisationsApi.md#updateLink) | **PUT** /Organisations/{id}/Links | Updates a Link
[**updateOrganisation**](OrganisationsApi.md#updateOrganisation) | **PUT** /Organisations | Updates an Organisation
[**updateOrganisationLink**](OrganisationsApi.md#updateOrganisationLink) | **PUT** /Organisations/{id}/OrganisationLinks | Updates an Organisation Link


# **addActivitySetAssignment**
> addActivitySetAssignment($id, $api_activity_set_assignment)

Adds an Activity Set to an Organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | A Organisaton's ID
$api_activity_set_assignment = new \Swagger\Client\Model\APIActivitySetAssignment(); // \Swagger\Client\Model\APIActivitySetAssignment | The Activity Set Assignment object which contains the configuration information for the Activity Set

try {
    $api_instance->addActivitySetAssignment($id, $api_activity_set_assignment);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addActivitySetAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Organisaton&#39;s ID |
 **api_activity_set_assignment** | [**\Swagger\Client\Model\APIActivitySetAssignment**](../Model/\Swagger\Client\Model\APIActivitySetAssignment.md)| The Activity Set Assignment object which contains the configuration information for the Activity Set |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAddress**
> \Swagger\Client\Model\Address addAddress($id, $api_address)

Adds an Address

Limited to two addresses, one Shipping Address and one Billing Address. For more information, please refer to Body Schema.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_address = new \Swagger\Client\Model\APIAddress(); // \Swagger\Client\Model\APIAddress | The Address to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addAddress($id, $api_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_address** | [**\Swagger\Client\Model\APIAddress**](../Model/\Swagger\Client\Model\APIAddress.md)| The Address to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContactInfo**
> \Swagger\Client\Model\ContactInfo addContactInfo($id, $api_contact_info)

Adds a Contact Info

Limited to two Phone Numbers and one Website. For more information, please refer to Body Schema.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_contact_info = new \Swagger\Client\Model\APIContactInfo(); // \Swagger\Client\Model\APIContactInfo | The Contact Info to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addContactInfo($id, $api_contact_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_contact_info** | [**\Swagger\Client\Model\APIContactInfo**](../Model/\Swagger\Client\Model\APIContactInfo.md)| The Contact Info to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\ContactInfo**](../Model/ContactInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDate**
> \Swagger\Client\Model\OrganisationDate addDate($id, $api_date)

Adds an Organisation Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_date = new \Swagger\Client\Model\APIOrganisationDate(); // \Swagger\Client\Model\APIOrganisationDate | The Organisation Date to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addDate($id, $api_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_date** | [**\Swagger\Client\Model\APIOrganisationDate**](../Model/\Swagger\Client\Model\APIOrganisationDate.md)| The Organisation Date to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\OrganisationDate**](../Model/OrganisationDate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFileAttachment**
> \Swagger\Client\Model\FileAttachment addFileAttachment($id, $file, $file_name, $content_type, $file_category_id)

Adds a File Attachment to an Organisation

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $api_instance->addFileAttachment($id, $file, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
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

Start following an Organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |

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

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_link** | [**\Swagger\Client\Model\APILink**](../Model/\Swagger\Client\Model\APILink.md)| The Link to add (just include the JSON object in the request body) |

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

Adds a Note to an Organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_note = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The Note to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addNote($id, $api_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_note** | [**\Swagger\Client\Model\APINote**](../Model/\Swagger\Client\Model\APINote.md)| The Note to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrganisation**
> \Swagger\Client\Model\Organisation addOrganisation($api_organisation)

Adds an Organisation

If you have trouble with creating an organisation, try creating organisations via the web interface, and then access those organisations via the API. This way you            can see examples of the fields and sub-elements attached to the object. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$api_organisation = new \Swagger\Client\Model\APIOrganisation(); // \Swagger\Client\Model\APIOrganisation | The Organisation to add (just include JSON object as request body)

try {
    $result = $api_instance->addOrganisation($api_organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addOrganisation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_organisation** | [**\Swagger\Client\Model\APIOrganisation**](../Model/\Swagger\Client\Model\APIOrganisation.md)| The Organisation to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Organisation**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrganisationLink**
> \Swagger\Client\Model\OrganisationLink addOrganisationLink($id, $api_link)

Adds an Organisation Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_link = new \Swagger\Client\Model\APIOrganisationLink(); // \Swagger\Client\Model\APIOrganisationLink | The Organisation Link to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addOrganisationLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addOrganisationLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_link** | [**\Swagger\Client\Model\APIOrganisationLink**](../Model/\Swagger\Client\Model\APIOrganisationLink.md)| The Organisation Link to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\OrganisationLink**](../Model/OrganisationLink.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addTag**
> \Swagger\Client\Model\Tag addTag($id, $api_tag)

Adds a Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_tag = new \Swagger\Client\Model\APITag(); // \Swagger\Client\Model\APITag | The Tag to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addTag($id, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_tag** | [**\Swagger\Client\Model\APITag**](../Model/\Swagger\Client\Model\APITag.md)| The Tag to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\Tag**](../Model/Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddress**
> deleteAddress($id, $address_id)

Deletes an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$address_id = 789; // int | An Address' ID (ADDRESS_ID)

try {
    $api_instance->deleteAddress($id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **address_id** | **int**| An Address&#39; ID (ADDRESS_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactInfo**
> deleteContactInfo($id, $contact_info_id)

Deletes a Contact Info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$contact_info_id = 789; // int | A Contact Info's ID (CONTACT_INFO_ID)

try {
    $api_instance->deleteContactInfo($id, $contact_info_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **contact_info_id** | **int**| A Contact Info&#39;s ID (CONTACT_INFO_ID) |

### Return type

void (empty response body)

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

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$custom_field_id = "custom_field_id_example"; // string | A Custom Field's ID (CUSTOM_FIELD_ID)

try {
    $api_instance->deleteCustomField($id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **custom_field_id** | **string**| A Custom Field&#39;s ID (CUSTOM_FIELD_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDate**
> deleteDate($id, $date_id)

Deletes an Organisation Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$date_id = 789; // int | An Organisation Date's ID (DATE_ID)

try {
    $api_instance->deleteDate($id, $date_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **date_id** | **int**| An Organisation Date&#39;s ID (DATE_ID) |

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

Stop following an Organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |

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

Deletes an Organisation's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)

try {
    $api_instance->deleteImage($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |

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

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$link_id = 789; // int | A Link's ID (LINK_ID)

try {
    $api_instance->deleteLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **link_id** | **int**| A Link&#39;s ID (LINK_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrganisation**
> deleteOrganisation($id)

Deletes an Organisation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID

try {
    $api_instance->deleteOrganisation($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteOrganisation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrganisationLink**
> deleteOrganisationLink($id, $link_id)

Deletes an Organisation Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$link_id = 789; // int | An Organisation Link's ID (ORG_LINK_ID)

try {
    $api_instance->deleteOrganisationLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteOrganisationLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **link_id** | **int**| An Organisation Link&#39;s ID (ORG_LINK_ID) |

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

Deletes a Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$tag_name = "tag_name_example"; // string | A Tag's name

try {
    $api_instance->deleteTag($id, $tag_name);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
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

Gets a list of Organisation's Emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when email was last updated.
$top = 56; // int | Optional, maximum number of emails to return.
$skip = 56; // int | Optional, number of emails to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEmails($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID |
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

Gets an Organisation's Events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when event was last updated.
$top = 56; // int | Optional, maximum number of events to return.
$skip = 56; // int | Optional, number of events to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEvents($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
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

Gets an Organisation's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
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

Gets a Follow record for the Organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |

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

Gets an Organisations's Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)

try {
    $api_instance->getImage($id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotes**
> \Swagger\Client\Model\Note[] getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets an Organisation's Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when note was last updated.
$top = 56; // int | Optional, maximum number of notes to return.
$skip = 56; // int | Optional, number of notes to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
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

# **getOrganisation**
> \Swagger\Client\Model\Organisation getOrganisation($id)

Gets an Organisation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID

try {
    $result = $api_instance->getOrganisation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getOrganisation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID |

### Return type

[**\Swagger\Client\Model\Organisation**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisations**
> \Swagger\Client\Model\Organisation[] getOrganisations($brief, $skip, $top, $count_total)

Gets a list of Organisations.

Simple object graphs (excluding ADDRESSES, CONTACTINFOS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the organisation.
$skip = 56; // int | Optional, number of organisations to skip.
$top = 56; // int | Optional, maximum number of organisations to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getOrganisations($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getOrganisations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the organisation. | [optional] [default to false]
 **skip** | **int**| Optional, number of organisations to skip. | [optional]
 **top** | **int**| Optional, maximum number of organisations to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Organisation[]**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisationsBySearch**
> \Swagger\Client\Model\Organisation[] getOrganisationsBySearch($email, $email_domain, $tag, $phone_number, $organisation_name, $city, $state, $postcode, $country, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Organisations.

Only one optional parameter (excluding brief, top, skip and count_total) can be specified. Simple object graphs (excluding ADDRESSES, CONTACTINFOS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$email = "email_example"; // string | Optional, email address.
$email_domain = "email_domain_example"; // string | Optional, email domain.
$tag = "tag_example"; // string | Optional, a single tag.
$phone_number = "phone_number_example"; // string | Optional, phone number.
$organisation_name = "organisation_name_example"; // string | Optional, name of the organisation.
$city = "city_example"; // string | Optional, name of the city from organisation address.
$state = "state_example"; // string | Optional, state from the organisation address.
$postcode = "postcode_example"; // string | Optional, postal code from the organisation address.
$country = "country_example"; // string | Optional, name of the country from organisation address.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when organisation was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the organisation.
$skip = 56; // int | Optional, number of organisations to skip.
$top = 56; // int | Optional, maximum number of organisations to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getOrganisationsBySearch($email, $email_domain, $tag, $phone_number, $organisation_name, $city, $state, $postcode, $country, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getOrganisationsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Optional, email address. | [optional]
 **email_domain** | **string**| Optional, email domain. | [optional]
 **tag** | **string**| Optional, a single tag. | [optional]
 **phone_number** | **string**| Optional, phone number. | [optional]
 **organisation_name** | **string**| Optional, name of the organisation. | [optional]
 **city** | **string**| Optional, name of the city from organisation address. | [optional]
 **state** | **string**| Optional, state from the organisation address. | [optional]
 **postcode** | **string**| Optional, postal code from the organisation address. | [optional]
 **country** | **string**| Optional, name of the country from organisation address. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when organisation was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the organisation. | [optional] [default to false]
 **skip** | **int**| Optional, number of organisations to skip. | [optional]
 **top** | **int**| Optional, maximum number of organisations to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Organisation[]**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \Swagger\Client\Model\Task[] getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of Organisation's Tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when task was last updated.
$top = 56; // int | Optional, maximum number of tasks to return.
$skip = 56; // int | Optional, number of tasks to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID |
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

# **updateAddress**
> \Swagger\Client\Model\Address updateAddress($id, $api_address)

Updates an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_address = new \Swagger\Client\Model\APIAddress(); // \Swagger\Client\Model\APIAddress | The Address to update (just include the JSON object in the request body)

try {
    $result = $api_instance->updateAddress($id, $api_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_address** | [**\Swagger\Client\Model\APIAddress**](../Model/\Swagger\Client\Model\APIAddress.md)| The Address to update (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactInfo**
> \Swagger\Client\Model\ContactInfo updateContactInfo($id, $api_contact_info)

Updates a Contact Info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_contact_info = new \Swagger\Client\Model\APIContactInfo(); // \Swagger\Client\Model\APIContactInfo | The Contact Info to add (just include the JSON object in the request body)

try {
    $result = $api_instance->updateContactInfo($id, $api_contact_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_contact_info** | [**\Swagger\Client\Model\APIContactInfo**](../Model/\Swagger\Client\Model\APIContactInfo.md)| The Contact Info to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\ContactInfo**](../Model/ContactInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomField**
> \Swagger\Client\Model\CustomField updateCustomField($id, $api_custom_field)

Updates a Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_custom_field = new \Swagger\Client\Model\APICustomField(); // \Swagger\Client\Model\APICustomField | The Custom Field to edit (just include the JSON object in the request body)

try {
    $result = $api_instance->updateCustomField($id, $api_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_custom_field** | [**\Swagger\Client\Model\APICustomField**](../Model/\Swagger\Client\Model\APICustomField.md)| The Custom Field to edit (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\CustomField**](../Model/CustomField.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDate**
> \Swagger\Client\Model\OrganisationDate updateDate($id, $api_date)

Updates an Organisation Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_date = new \Swagger\Client\Model\APIOrganisationDate(); // \Swagger\Client\Model\APIOrganisationDate | The Organisation Date to add (just include the JSON object in the request body)

try {
    $result = $api_instance->updateDate($id, $api_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_date** | [**\Swagger\Client\Model\APIOrganisationDate**](../Model/\Swagger\Client\Model\APIOrganisationDate.md)| The Organisation Date to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\OrganisationDate**](../Model/OrganisationDate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImage**
> \Swagger\Client\Model\Organisation updateImage($id, $filename, $file)

Updates an Organisation's Image

This action will replace any existing Image attached to the Organisation. Image file contents should be sent as binary data in request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$filename = "filename_example"; // string | Name of Image File to be attached to Organisation
$file = "B"; // string | File to upload

try {
    $result = $api_instance->updateImage($id, $filename, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **filename** | **string**| Name of Image File to be attached to Organisation |
 **file** | **string**| File to upload |

### Return type

[**\Swagger\Client\Model\Organisation**](../Model/Organisation.md)

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

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include the JSON object in the request body)

try {
    $result = $api_instance->updateLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_link** | [**\Swagger\Client\Model\APILink**](../Model/\Swagger\Client\Model\APILink.md)| The Link to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganisation**
> \Swagger\Client\Model\Organisation updateOrganisation($api_organisation, $brief)

Updates an Organisation

If you have trouble updating an organisation, try accessing the organisation via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$api_organisation = new \Swagger\Client\Model\APIOrganisation(); // \Swagger\Client\Model\APIOrganisation | An Organisation (just include JSON object as request body)
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Organisation. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateOrganisation($api_organisation, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateOrganisation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_organisation** | [**\Swagger\Client\Model\APIOrganisation**](../Model/\Swagger\Client\Model\APIOrganisation.md)| An Organisation (just include JSON object as request body) |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Organisation. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Organisation**](../Model/Organisation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrganisationLink**
> \Swagger\Client\Model\OrganisationLink updateOrganisationLink($id, $api_link)

Updates an Organisation Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganisationsApi();
$id = 789; // int | An Organisation's ID (ORGANISATION_ID)
$api_link = new \Swagger\Client\Model\APIOrganisationLink(); // \Swagger\Client\Model\APIOrganisationLink | The Organisation Link to add (just include the JSON object in the request body)

try {
    $result = $api_instance->updateOrganisationLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationsApi->updateOrganisationLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Organisation&#39;s ID (ORGANISATION_ID) |
 **api_link** | [**\Swagger\Client\Model\APIOrganisationLink**](../Model/\Swagger\Client\Model\APIOrganisationLink.md)| The Organisation Link to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\OrganisationLink**](../Model/OrganisationLink.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

