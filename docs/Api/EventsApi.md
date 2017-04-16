# Swagger\Client\EventsApi

All URIs are relative to *https://api.insight.ly/v2.2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEvent**](EventsApi.md#addEvent) | **POST** /Events | Adds a Calendar Event
[**addEventLink**](EventsApi.md#addEventLink) | **POST** /Events/{id}/EventLinks | Adds an Event Link
[**deleteEvent**](EventsApi.md#deleteEvent) | **DELETE** /Events/{id} | Deletes a Calendar Event
[**deleteEventLink**](EventsApi.md#deleteEventLink) | **DELETE** /Events/{id}/EventLinks/{linkId} | Deletes an Event Link
[**getEvent**](EventsApi.md#getEvent) | **GET** /Events/{id} | Gets a Calendar Event
[**getEvents**](EventsApi.md#getEvents) | **GET** /Events | Gets a list of Calendar Events.
[**getEventsBySearch**](EventsApi.md#getEventsBySearch) | **GET** /Events/Search | Gets a filtered list of Calendar Events.
[**updateEvent**](EventsApi.md#updateEvent) | **PUT** /Events | Updates a Calendar Event


# **addEvent**
> \Swagger\Client\Model\CalendarEvent addEvent($api_event)

Adds a Calendar Event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$api_event = new \Swagger\Client\Model\APICalendarEvent(); // \Swagger\Client\Model\APICalendarEvent | The Event to add (just include JSON object as request body)

try {
    $result = $api_instance->addEvent($api_event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->addEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_event** | [**\Swagger\Client\Model\APICalendarEvent**](../Model/\Swagger\Client\Model\APICalendarEvent.md)| The Event to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEventLink**
> \Swagger\Client\Model\EventLink addEventLink($id, $api_link)

Adds an Event Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$id = 789; // int | An Event's ID (EVENT_ID)
$api_link = new \Swagger\Client\Model\APIEventLink(); // \Swagger\Client\Model\APIEventLink | The Event Link to add (just include JSON object as request body)

try {
    $result = $api_instance->addEventLink($id, $api_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->addEventLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Event&#39;s ID (EVENT_ID) |
 **api_link** | [**\Swagger\Client\Model\APIEventLink**](../Model/\Swagger\Client\Model\APIEventLink.md)| The Event Link to add (just include JSON object as request body) |

### Return type

[**\Swagger\Client\Model\EventLink**](../Model/EventLink.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEvent**
> deleteEvent($id)

Deletes a Calendar Event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$id = 789; // int | An Event's ID

try {
    $api_instance->deleteEvent($id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deleteEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Event&#39;s ID |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEventLink**
> deleteEventLink($id, $link_id)

Deletes an Event Link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$id = 789; // int | An Event's ID (EVENT_ID)
$link_id = 789; // int | A EVENT Link's ID (EVENT_LINK_ID)

try {
    $api_instance->deleteEventLink($id, $link_id);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->deleteEventLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Event&#39;s ID (EVENT_ID) |
 **link_id** | **int**| A EVENT Link&#39;s ID (EVENT_LINK_ID) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvent**
> \Swagger\Client\Model\CalendarEvent getEvent($id)

Gets a Calendar Event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$id = 789; // int | An Event's ID

try {
    $result = $api_instance->getEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| An Event&#39;s ID |

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \Swagger\Client\Model\CalendarEvent[] getEvents($brief, $skip, $top, $count_total)

Gets a list of Calendar Events.

Simple object graphs (excluding EVENTLINKS) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$brief = false; // bool | Optional, true if response should only contain top level properties of the event.
$skip = 56; // int | Optional, number of events to skip.
$top = 56; // int | Optional, maximum number of events to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEvents($brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brief** | **bool**| Optional, true if response should only contain top level properties of the event. | [optional] [default to false]
 **skip** | **int**| Optional, number of events to skip. | [optional]
 **top** | **int**| Optional, maximum number of events to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\CalendarEvent[]**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventsBySearch**
> \Swagger\Client\Model\CalendarEvent[] getEventsBySearch($title, $owner_user_id, $start_date_utc, $end_date_utc, $updated_after_utc, $brief, $skip, $top, $count_total)

Gets a filtered list of Calendar Events.

Only one optional parameter (excluding top, skip and count_total) can be specified. Simple object graphs (excluding EVENTLINKS) are returned if \"brief=true\" is used in the query string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$title = "title_example"; // string | Optional, event title.
$owner_user_id = 789; // int | Optional, id of the owner user.
$start_date_utc = new \DateTime(); // \DateTime | Optional, start date of the event. Only the date is considered, not the time.
$end_date_utc = new \DateTime(); // \DateTime | Optional, end date of the event. Only the date is considered, not the time.
$updated_after_utc = new \DateTime(); // \DateTime | Optional, earliest date when event was last updated. Date and time are considered.
$brief = false; // bool | Optional, true if response should only contain top level properties of the event.
$skip = 56; // int | Optional, number of events to skip.
$top = 56; // int | Optional, maximum number of events to return in the response.
$count_total = false; // bool | Optional, true if total number of records should be returned in the response headers.

try {
    $result = $api_instance->getEventsBySearch($title, $owner_user_id, $start_date_utc, $end_date_utc, $updated_after_utc, $brief, $skip, $top, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEventsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **title** | **string**| Optional, event title. | [optional]
 **owner_user_id** | **int**| Optional, id of the owner user. | [optional]
 **start_date_utc** | **\DateTime**| Optional, start date of the event. Only the date is considered, not the time. | [optional]
 **end_date_utc** | **\DateTime**| Optional, end date of the event. Only the date is considered, not the time. | [optional]
 **updated_after_utc** | **\DateTime**| Optional, earliest date when event was last updated. Date and time are considered. | [optional]
 **brief** | **bool**| Optional, true if response should only contain top level properties of the event. | [optional] [default to false]
 **skip** | **int**| Optional, number of events to skip. | [optional]
 **top** | **int**| Optional, maximum number of events to return in the response. | [optional]
 **count_total** | **bool**| Optional, true if total number of records should be returned in the response headers. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\CalendarEvent[]**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEvent**
> \Swagger\Client\Model\CalendarEvent updateEvent($api_event, $brief)

Updates a Calendar Event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventsApi();
$api_event = new \Swagger\Client\Model\APICalendarEvent(); // \Swagger\Client\Model\APICalendarEvent | The Event to update (just include JSON object as request body)
$brief = false; // bool | Optional, true if you wish to do a partial update containing only top level properties of the Event. When true, all sub-collections are ignored.

try {
    $result = $api_instance->updateEvent($api_event, $brief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->updateEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_event** | [**\Swagger\Client\Model\APICalendarEvent**](../Model/\Swagger\Client\Model\APICalendarEvent.md)| The Event to update (just include JSON object as request body) |
 **brief** | **bool**| Optional, true if you wish to do a partial update containing only top level properties of the Event. When true, all sub-collections are ignored. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\CalendarEvent**](../Model/CalendarEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

