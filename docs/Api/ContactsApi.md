# Swagger\Client\ContactsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActivitySetAssignment**](ContactsApi.md#addActivitySetAssignment) | **POST** /Contacts/{id}/ActivitySetAssignment | Adds an Activity Set to a Contact
[**addAddress**](ContactsApi.md#addAddress) | **POST** /Contacts/{id}/Addresses | Adds an Address
[**addContact**](ContactsApi.md#addContact) | **POST** /Contacts | Adds a Contact
[**addContactInfo**](ContactsApi.md#addContactInfo) | **POST** /Contacts/{id}/ContactInfos | Adds a Contact Info
[**addContactLink**](ContactsApi.md#addContactLink) | **POST** /Contacts/{id}/ContactLinks | Adds a Contact Link
[**addDate**](ContactsApi.md#addDate) | **POST** /Contacts/{id}/Dates | Adds a Contact Date
[**addFileAttachment**](ContactsApi.md#addFileAttachment) | **POST** /Contacts/{id}/FileAttachments | Adds a File Attachment to a Contact
[**addFollow**](ContactsApi.md#addFollow) | **POST** /Contacts/{id}/Follow | Start following a Contact
[**addLink**](ContactsApi.md#addLink) | **POST** /Contacts/{id}/Links | Adds a Link
[**addNote**](ContactsApi.md#addNote) | **POST** /Contacts/{id}/Notes | Adds a Note to a Contact
[**addTag**](ContactsApi.md#addTag) | **POST** /Contacts/{id}/Tags | Adds a Tag
[**deleteAddress**](ContactsApi.md#deleteAddress) | **DELETE** /Contacts/{id}/Addresses/{addressId} | Deletes an Address
[**deleteContact**](ContactsApi.md#deleteContact) | **DELETE** /Contacts/{id} | Deletes a Contact
[**deleteContactInfo**](ContactsApi.md#deleteContactInfo) | **DELETE** /Contacts/{id}/ContactInfos/{contactInfoId} | Deletes a Contact Info
[**deleteContactLink**](ContactsApi.md#deleteContactLink) | **DELETE** /Contacts/{id}/ContactLinks/{linkId} | Deletes a Contact Link
[**deleteCustomField**](ContactsApi.md#deleteCustomField) | **DELETE** /Contacts/{id}/CustomFields/{customFieldId} | Deletes a Custom Field
[**deleteDate**](ContactsApi.md#deleteDate) | **DELETE** /Contacts/{id}/Dates/{dateId} | Deletes a Contact Date
[**deleteFollow**](ContactsApi.md#deleteFollow) | **DELETE** /Contacts/{id}/Follow | Stop following a Contact
[**deleteImage**](ContactsApi.md#deleteImage) | **DELETE** /Contacts/{id}/Image | Deletes a Contact&#39;s Image
[**deleteLink**](ContactsApi.md#deleteLink) | **DELETE** /Contacts/{id}/Links/{linkId} | Deletes a Link
[**deleteTag**](ContactsApi.md#deleteTag) | **DELETE** /Contacts/{id}/Tags/{tagName} | Deletes a Tag
[**getContact**](ContactsApi.md#getContact) | **GET** /Contacts/{id} | Gets a Contact
[**getContacts**](ContactsApi.md#getContacts) | **GET** /Contacts | Gets a list of Contacts.
[**getContactsBySearch**](ContactsApi.md#getContactsBySearch) | **GET** /Contacts/Search | Gets a filtered list of Contacts.
[**getEmails**](ContactsApi.md#getEmails) | **GET** /Contacts/{id}/Emails | Gets a list of Contact&#39;s Emails
[**getEvents**](ContactsApi.md#getEvents) | **GET** /Contacts/{id}/Events | Gets a Contact&#39;s Events
[**getFileAttachments**](ContactsApi.md#getFileAttachments) | **GET** /Contacts/{id}/FileAttachments | Gets a Contact&#39;s File Attachments
[**getFollow**](ContactsApi.md#getFollow) | **GET** /Contacts/{id}/Follow | Gets a Follow record for the Contact
[**getImage**](ContactsApi.md#getImage) | **GET** /Contacts/{id}/Image | Gets a Contact&#39;s Image
[**getNotes**](ContactsApi.md#getNotes) | **GET** /Contacts/{id}/Notes | Gets a Contact&#39;s Notes
[**getTasks**](ContactsApi.md#getTasks) | **GET** /Contacts/{id}/Tasks | Gets a list of Contact&#39;s Tasks
[**updateAddress**](ContactsApi.md#updateAddress) | **PUT** /Contacts/{id}/Addresses | Updates an Address
[**updateContact**](ContactsApi.md#updateContact) | **PUT** /Contacts | Updates a Contact
[**updateContactInfo**](ContactsApi.md#updateContactInfo) | **PUT** /Contacts/{id}/ContactInfos | Updates a Contact Info
[**updateContactLink**](ContactsApi.md#updateContactLink) | **PUT** /Contacts/{id}/ContactLinks | Updates a Contact Link
[**updateCustomField**](ContactsApi.md#updateCustomField) | **PUT** /Contacts/{id}/CustomFields | Updates a Custom Field
[**updateDate**](ContactsApi.md#updateDate) | **PUT** /Contacts/{id}/Dates | Updates a Contact Date
[**updateImage**](ContactsApi.md#updateImage) | **PUT** /Contacts/{id}/Image/{filename} | Updates a Contact&#39;s Image
[**updateLink**](ContactsApi.md#updateLink) | **PUT** /Contacts/{id}/Links | Updates a Link


# **addActivitySetAssignment**
> addActivitySetAssignment($id, $api_activity_set_assignment)

Adds an Activity Set to a Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID
$api_activity_set_assignment = new \Swagger\Client\Model\APIActivitySetAssignment(); // \Swagger\Client\Model\APIActivitySetAssignment | The Activity Set Assignment object which contains the configuration information for the Activity Set

try {
    $api_instance->addActivitySetAssignment($id, $api_activity_set_assignment);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addActivitySetAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID |
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

Limited to two addresses, one Mailing Address and one Other Address. For more information, please refer to Body Schema.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_address = new \Swagger\Client\Model\APIAddress(); // \Swagger\Client\Model\APIAddress | The Address to add (just include JSON object as request body)

try {
    $result = $api_instance->addAddress($id, $api_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_address** | [**\Swagger\Client\Model\APIAddress**](../Model/\Swagger\Client\Model\APIAddress.md)| The Address to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContact**
> \Swagger\Client\Model\Contact addContact($api_contact)

Adds a Contact

If you have trouble with creating a contact, try creating contacts via the web interface, and then access those contacts via the API. This way you            can see examples of the fields and sub-elements attached to the object. A common source of problems during write/update request is caused when users omit            required fields, or insert invalid data in a field (e.g. reference a CATEGORY_ID that does not exist in the user's Insightly instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$api_contact = new \Swagger\Client\Model\APIContact(); // \Swagger\Client\Model\APIContact | The Contact to add (just include the JSON object as the request body)

try {
    $result = $api_instance->addContact($api_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_contact** | [**\Swagger\Client\Model\APIContact**](../Model/\Swagger\Client\Model\APIContact.md)| The Contact to add (just include the JSON object as the request body) |

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContactInfo**
> \Swagger\Client\Model\ContactInfo addContactInfo($id, $api_contact_info)

Adds a Contact Info

Limited to six Phone Numbers and one Email Address. For more information, please refer to Body Schema.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_contact_info = new \Swagger\Client\Model\APIContactInfo(); // \Swagger\Client\Model\APIContactInfo | The Contact Info to add (just include the JSON object in the request body)

try {
    $result = $api_instance->addContactInfo($id, $api_contact_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_contact_info** | [**\Swagger\Client\Model\APIContactInfo**](../Model/\Swagger\Client\Model\APIContactInfo.md)| The Contact Info to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\ContactInfo**](../Model/ContactInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContactLink**
> \Swagger\Client\Model\ContactLink addContactLink($id, $api_link)

Adds a Contact Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_link = new \Swagger\Client\Model\APIContactLink(); // \Swagger\Client\Model\APIContactLink | The Contact Link to add (just include the JSON object as request body)

try {
    $result = $api_instance->addContactLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_link** | [**\Swagger\Client\Model\APIContactLink**](../Model/\Swagger\Client\Model\APIContactLink.md)| The Contact Link to add (just include the JSON object as request body) |

### Return type

[**\Swagger\Client\Model\ContactLink**](../Model/ContactLink.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addDate**
> \Swagger\Client\Model\ContactDate addDate($id, $api_contact_date)

Adds a Contact Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_contact_date = new \Swagger\Client\Model\APIContactDate(); // \Swagger\Client\Model\APIContactDate | The Contact Date to add (just include JSON object as request body)

try {
    $result = $api_instance->addDate($id, $api_contact_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_contact_date** | [**\Swagger\Client\Model\APIContactDate**](../Model/\Swagger\Client\Model\APIContactDate.md)| The Contact Date to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\ContactDate**](../Model/ContactDate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFileAttachment**
> \Swagger\Client\Model\FileAttachment addFileAttachment($id, $file, $file_name, $content_type, $file_category_id)

Adds a File Attachment to a Contact

This endpoint expects multipart/form-data as the request payload. See Stack Overflow for examples of how to generate multipart requests, or see our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is generated. Only one file can be added per request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | Contact ID
$file = "/path/to/file.txt"; // \SplFileObject | The file part of the multipart/form-data request. Only one file can be added per request.
$file_name = "file_name_example"; // string | 
$content_type = "content_type_example"; // string | 
$file_category_id = 56; // int | 

try {
    $result = $api_instance->addFileAttachment($id, $file, $file_name, $content_type, $file_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addFileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Contact ID |
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

Start following a Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)

try {
    $result = $api_instance->addFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include JSON object as request body)

try {
    $result = $api_instance->addLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
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

Adds a Note to a Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_note = new \Swagger\Client\Model\APINote(); // \Swagger\Client\Model\APINote | The Note to add

try {
    $result = $api_instance->addNote($id, $api_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_note** | [**\Swagger\Client\Model\APINote**](../Model/\Swagger\Client\Model\APINote.md)| The Note to add |

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

Adds a Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_tag = new \Swagger\Client\Model\APITag(); // \Swagger\Client\Model\APITag | The Tag to add (just include the JSON object as the request body)

try {
    $result = $api_instance->addTag($id, $api_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_tag** | [**\Swagger\Client\Model\APITag**](../Model/\Swagger\Client\Model\APITag.md)| The Tag to add (just include the JSON object as the request body) |

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$address_id = 789; // int | An Address' ID (ADDRESS_ID)

try {
    $api_instance->deleteAddress($id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **address_id** | **int**| An Address&#39; ID (ADDRESS_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> deleteContact($id)

Deletes a Contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID

try {
    $api_instance->deleteContact($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID |

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$contact_info_id = 789; // int | A Contact Info's ID (CONTAC_INFO_ID)

try {
    $api_instance->deleteContactInfo($id, $contact_info_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **contact_info_id** | **int**| A Contact Info&#39;s ID (CONTAC_INFO_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactLink**
> deleteContactLink($id, $link_id)

Deletes a Contact Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$link_id = 789; // int | A Contact Link's ID (CONTACT_LINK_ID)

try {
    $api_instance->deleteContactLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContactLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **link_id** | **int**| A Contact Link&#39;s ID (CONTACT_LINK_ID) |

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$custom_field_id = "custom_field_id_example"; // string | A Custom Field's ID (CUSTOM_FIELD_ID)

try {
    $api_instance->deleteCustomField($id, $custom_field_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
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

Deletes a Contact Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$date_id = 789; // int | A Contact Date's ID (DATE_ID)

try {
    $api_instance->deleteDate($id, $date_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **date_id** | **int**| A Contact Date&#39;s ID (DATE_ID) |

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

Stop following a Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)

try {
    $api_instance->deleteFollow($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |

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

Deletes a Contact's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)

try {
    $api_instance->deleteImage($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$link_id = 789; // int | A Link's ID (LINK_ID)

try {
    $api_instance->deleteLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **link_id** | **int**| A Link&#39;s ID (LINK_ID) |

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$tag_name = "tag_name_example"; // string | A Tag's name

try {
    $api_instance->deleteTag($id, $tag_name);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **tag_name** | **string**| A Tag&#39;s name |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContact**
> \Swagger\Client\Model\Contact getContact($id)

Gets a Contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID

try {
    $result = $api_instance->getContact($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID |

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \Swagger\Client\Model\Contact[] getContacts($brief, $skip, $top, $count_total)

Gets a list of Contacts.

Simple object graphs (excluding ADDRESSES, CONTACTINFOS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the contact.
$skip = 56; // int | Optional, number of contacts to skip.
$top = 56; // int | Optional, maximum number of contacts to return in the response.
$count_total = false; // bool | Optional,true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getContacts($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the contact. | [optional] [default to false]
 **skip** | **int**| Optional, number of contacts to skip. | [optional]
 **top** | **int**| Optional, maximum number of contacts to return in the response. | [optional]
 **count_total** | **bool**| Optional,true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsBySearch**
> \Swagger\Client\Model\Contact[] getContactsBySearch($email, $tag, $phone_number, $first_name, $last_name, $city, $state, $postcode, $country, $organisation, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Contacts.

Only one optional parameter (excluding brief, top, skip and count_total) can be specified. Simple object graphs (excluding ADDRESSES, CONTACTINFOS, etc.) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$email = "email_example"; // string | Optional, email address.
$tag = "tag_example"; // string | Optional, a single tag. Performs an exact match.
$phone_number = "phone_number_example"; // string | Optional, phone number.
$first_name = "first_name_example"; // string | Optional, first name of the contact.
$last_name = "last_name_example"; // string | Optional, last name of the contact.
$city = "city_example"; // string | Optional, name of the city from contact address.
$state = "state_example"; // string | Optional, state from the contact address.
$postcode = "postcode_example"; // string | Optional, postal code from the contact address.
$country = "country_example"; // string | Optional, name of the country from contact address.
$organisation = "organisation_example"; // string | Optional, name of the default organisation.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when contact was last updated.
$brief = false; // bool | Optional, true if response should only contain top level properties of the contact.
$skip = 56; // int | Optional, number of contacts to skip.
$top = 56; // int | Optional, maximum number of contacts to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getContactsBySearch($email, $tag, $phone_number, $first_name, $last_name, $city, $state, $postcode, $country, $organisation, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getContactsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Optional, email address. | [optional]
 **tag** | **string**| Optional, a single tag. Performs an exact match. | [optional]
 **phone_number** | **string**| Optional, phone number. | [optional]
 **first_name** | **string**| Optional, first name of the contact. | [optional]
 **last_name** | **string**| Optional, last name of the contact. | [optional]
 **city** | **string**| Optional, name of the city from contact address. | [optional]
 **state** | **string**| Optional, state from the contact address. | [optional]
 **postcode** | **string**| Optional, postal code from the contact address. | [optional]
 **country** | **string**| Optional, name of the country from contact address. | [optional]
 **organisation** | **string**| Optional, name of the default organisation. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when contact was last updated. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the contact. | [optional] [default to false]
 **skip** | **int**| Optional, number of contacts to skip. | [optional]
 **top** | **int**| Optional, maximum number of contacts to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmails**
> \Swagger\Client\Model\Email[] getEmails($id, $updated_after_utc, $top, $skip, $brief, $count_total)

Gets a list of Contact's Emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when email was last updated.
$top = 56; // int | Optional, maximum number of emails to return.
$skip = 56; // int | Optional, number of emails to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEmails($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID |
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

Gets a Contact's Events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when event was last updated.
$top = 56; // int | Optional, maximum number of events to return.
$skip = 56; // int | Optional, number of events to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEvents($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
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

Gets a Contact's File Attachments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when file attachment was last updated.
$skip = 56; // int | Optional, number of file attachments to skip.
$top = 56; // int | Optional, maximum number of file attachments to return in the response.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getFileAttachments($id, $updated_after_utc, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFileAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
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

Gets a Follow record for the Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)

try {
    $result = $api_instance->getFollow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |

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

Gets a Contact's Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID

try {
    $api_instance->getImage($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID |

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

Gets a Contact's Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when note was last updated.
$top = 56; // int | Optional, maximum number of notes to return.
$skip = 56; // int | Optional, number of notes to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getNotes($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
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

Gets a list of Contact's Tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when task was last updated.
$top = 56; // int | Optional, maximum number of tasks to return.
$skip = 56; // int | Optional, number of tasks to skip.
$brief = false; // bool | true if only top level properties needs to be returned.
$count_total = false; // bool | true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getTasks($id, $updated_after_utc, $top, $skip, $brief, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID |
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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_address = new \Swagger\Client\Model\APIAddress(); // \Swagger\Client\Model\APIAddress | The Address to update (just include the JSON object as the request body)

try {
    $result = $api_instance->updateAddress($id, $api_address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_address** | [**\Swagger\Client\Model\APIAddress**](../Model/\Swagger\Client\Model\APIAddress.md)| The Address to update (just include the JSON object as the request body) |

### Return type

[**\Swagger\Client\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \Swagger\Client\Model\Contact updateContact($api_contact, $brief)

Updates a Contact

If you have trouble updating a contact, try accessing the contact via the GET request to inspect its fields and sub-elements. A common source of            problems with write/update requests occurs when users either omit required fields, or insert invalid data into a field (for example, by referring a            CATEGORY_ID or LINK_ID which does not exist.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$api_contact = new \Swagger\Client\Model\APIContact(); // \Swagger\Client\Model\APIContact | A Contact, just include the JSON object as the request body
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Contact. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateContact($api_contact, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_contact** | [**\Swagger\Client\Model\APIContact**](../Model/\Swagger\Client\Model\APIContact.md)| A Contact, just include the JSON object as the request body |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Contact. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_contact_info = new \Swagger\Client\Model\APIContactInfo(); // \Swagger\Client\Model\APIContactInfo | The Contact Info to add (just include the JSON object in the request body)

try {
    $result = $api_instance->updateContactInfo($id, $api_contact_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContactInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_contact_info** | [**\Swagger\Client\Model\APIContactInfo**](../Model/\Swagger\Client\Model\APIContactInfo.md)| The Contact Info to add (just include the JSON object in the request body) |

### Return type

[**\Swagger\Client\Model\ContactInfo**](../Model/ContactInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactLink**
> \Swagger\Client\Model\ContactLink updateContactLink($id, $api_link)

Updates a Contact Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_link = new \Swagger\Client\Model\APIContactLink(); // \Swagger\Client\Model\APIContactLink | The Contact Link to add (just include the JSON object as request body)

try {
    $result = $api_instance->updateContactLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContactLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_link** | [**\Swagger\Client\Model\APIContactLink**](../Model/\Swagger\Client\Model\APIContactLink.md)| The Contact Link to add (just include the JSON object as request body) |

### Return type

[**\Swagger\Client\Model\ContactLink**](../Model/ContactLink.md)

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_custom_field = new \Swagger\Client\Model\APICustomField(); // \Swagger\Client\Model\APICustomField | The Custom Field to edit (just include JSON object as request body)

try {
    $result = $api_instance->updateCustomField($id, $api_custom_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateCustomField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_custom_field** | [**\Swagger\Client\Model\APICustomField**](../Model/\Swagger\Client\Model\APICustomField.md)| The Custom Field to edit (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\CustomField**](../Model/CustomField.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDate**
> \Swagger\Client\Model\ContactDate updateDate($id, $api_contact_date)

Updates a Contact Date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_contact_date = new \Swagger\Client\Model\APIContactDate(); // \Swagger\Client\Model\APIContactDate | The Contact Date to add (just include the JSON object as request body)

try {
    $result = $api_instance->updateDate($id, $api_contact_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_contact_date** | [**\Swagger\Client\Model\APIContactDate**](../Model/\Swagger\Client\Model\APIContactDate.md)| The Contact Date to add (just include the JSON object as request body) |

### Return type

[**\Swagger\Client\Model\ContactDate**](../Model/ContactDate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImage**
> \Swagger\Client\Model\Contact updateImage($id, $filename, $file)

Updates a Contact's Image

This action will replace any existing Image attached to the Contact. The contents of the image data should be sent as binary data in the request payload. See our <a href=\"http://github.com/Insightly\" target=\"_blank\">client libraries</a> for an example of how this is done.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$filename = "filename_example"; // string | Name of Image File to be attached to Contact
$file = "B"; // string | File to upload

try {
    $result = $api_instance->updateImage($id, $filename, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **filename** | **string**| Name of Image File to be attached to Contact |
 **file** | **string**| File to upload |

### Return type

[**\Swagger\Client\Model\Contact**](../Model/Contact.md)

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

$api_instance = new Swagger\Client\Api\ContactsApi();
$id = 789; // int | A Contact's ID (CONTACT_ID)
$api_link = new \Swagger\Client\Model\APILink(); // \Swagger\Client\Model\APILink | The Link to add (just include JSON object as request body)

try {
    $result = $api_instance->updateLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| A Contact&#39;s ID (CONTACT_ID) |
 **api_link** | [**\Swagger\Client\Model\APILink**](../Model/\Swagger\Client\Model\APILink.md)| The Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\Link**](../Model/Link.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

