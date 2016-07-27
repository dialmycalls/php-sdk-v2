# DialMyCalls\Calls

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelCallById**](Calls.md#cancelcallbyid) | **DELETE** /service/call/{CallId} | Cancel Call
[**createCall**](Calls.md#createcall) | **POST** /service/call | Create Call
[**getCallById**](Calls.md#getcallbyid) | **GET** /service/call/{CallId} | Get Call
[**getCallRecipientsByCallId**](Calls.md#getcallrecipientsbycallid) | **GET** /service/call/{CallId}/recipients | Get Call Recipients
[**getCalls**](Calls.md#getcalls) | **GET** /service/calls | List Calls


# **cancelCallById**
> object cancelCallById($callId)

Cancel Call

Cancel an outgoing call. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/service/call/$CALL_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Calls();
$callId = "callId_example"; // string | CallId

try {
    $result = $api_instance->cancelCallById($callId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Calls->cancelCallById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CallId** | **string**| CallId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCall**
> object createCall($createCallParameters)

Create Call

Create an outgoing call broadcast. <br><br> Returns a call service object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"name\": \"Test\", \"callerid_id\": \"8bc6748e-d8a0-11e4-8b2d-00163e603cea\", \"recording_id\": \"079ff28a-1b75-11e5-88eb-00163e603cea\", \"send_immediately\": true, \"use_amd\": true, \"contacts\": [{\"phone\":\"1116551235\"},{\"phone\":\"1116551234\"}]}" https://$API_KEY@api.dialmycalls.com/2.0/service/call ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Calls();
$createCallParameters = new \DialMyCalls\Models\CreateCallParameters(); // \DialMyCalls\Models\CreateCallParameters | Request body

try {
    $result = $api_instance->createCall($createCallParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Calls->createCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateCallParameters** | [**\DialMyCalls\Models\CreateCallParameters**](../Model/CreateCallParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallById**
> object getCallById($callId)

Get Call

Retrieve a call. <br><br> Returns a call service object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/service/call/$CALL_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Calls();
$callId = "callId_example"; // string | CallId

try {
    $result = $api_instance->getCallById($callId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Calls->getCallById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CallId** | **string**| CallId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallRecipientsByCallId**
> object getCallRecipientsByCallId($callId, $range)

Get Call Recipients

Retrieve a list of a call's recipients. <br><br> Returns a list of call recipient objects if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/service/call/$CALL_ID/recipients ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Calls();
$callId = "callId_example"; // string | CallId
$range = "range_example"; // string | Range (ie \"records=201-300\") of recipients requested

try {
    $result = $api_instance->getCallRecipientsByCallId($callId, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Calls->getCallRecipientsByCallId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CallId** | **string**| CallId |
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of recipients requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCalls**
> object getCalls($range)

List Calls

Retrieve a list of calls. <br><br> Returns a list of call service objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/service/calls ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Calls();
$range = "range_example"; // string | Range (ie \"records=201-300\") of calls requested

try {
    $result = $api_instance->getCalls($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Calls->getCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of calls requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

