# DialMyCalls\Recordings

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRecording**](Recordings.md#createrecording) | **POST** /recording/tts | Create Recording (Text-to-Speech)
[**createRecordingByPhone**](Recordings.md#createrecordingbyphone) | **POST** /recording/phone | Create Recording (Phone)
[**createRecordingByUrl**](Recordings.md#createrecordingbyurl) | **POST** /recording/url | Create Recording (URL)
[**deleteRecordingById**](Recordings.md#deleterecordingbyid) | **DELETE** /recording/{RecordingId} | Delete Recording
[**getRecordingById**](Recordings.md#getrecordingbyid) | **GET** /recording/{RecordingId} | Get Recording
[**getRecordings**](Recordings.md#getrecordings) | **GET** /recordings | List Recordings
[**updateRecordingById**](Recordings.md#updaterecordingbyid) | **PUT** /recording/{RecordingId} | Update Recording


# **createRecording**
> object createRecording($createRecordingParameters)

Create Recording (Text-to-Speech)

Create a new recording using text-to-speech. <br><br> Returns a recording object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"name\": \"Test Recording\", \"gender\": \"M\", \"language\": \"en\", \"text\": \"This is just a test.\"}" https://$API_KEY@api.dialmycalls.com/2.0/recording/tts ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Recordings();
$createRecordingParameters = new \DialMyCalls\Models\CreateRecordingParameters(); // \DialMyCalls\Models\CreateRecordingParameters | Request body

try {
    $result = $api_instance->createRecording($createRecordingParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Recordings->createRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateRecordingParameters** | [**\DialMyCalls\Models\CreateRecordingParameters**](../Model/CreateRecordingParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRecordingByPhone**
> object createRecordingByPhone($createRecordingByPhoneParameters)

Create Recording (Phone)

Create a new recording by phone. <br><br> Returns a recording object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"name\": \"Test Recording\", \"phone\": \"5551234567\", \"callerid_id\": \"$CALLERID_ID\"}" https://$API_KEY@api.dialmycalls.com/2.0/recording/phone ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Recordings();
$createRecordingByPhoneParameters = new \DialMyCalls\Models\CreateRecordingByPhoneParameters(); // \DialMyCalls\Models\CreateRecordingByPhoneParameters | Request body

try {
    $result = $api_instance->createRecordingByPhone($createRecordingByPhoneParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Recordings->createRecordingByPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateRecordingByPhoneParameters** | [**\DialMyCalls\Models\CreateRecordingByPhoneParameters**](../Model/CreateRecordingByPhoneParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRecordingByUrl**
> object createRecordingByUrl($createRecordingByUrlParameters)

Create Recording (URL)

Create a new recording from a URL. <br><br> Returns a recording object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"name\": \"Test Recording\", \"url\": \"https://ia700200.us.archive.org/1/items/testmp3testfile/mpthreetest.mp3\"}" https://$API_KEY@api.dialmycalls.com/2.0/recording/url ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Recordings();
$createRecordingByUrlParameters = new \DialMyCalls\Models\CreateRecordingByUrlParameters(); // \DialMyCalls\Models\CreateRecordingByUrlParameters | Request body

try {
    $result = $api_instance->createRecordingByUrl($createRecordingByUrlParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Recordings->createRecordingByUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateRecordingByUrlParameters** | [**\DialMyCalls\Models\CreateRecordingByUrlParameters**](../Model/CreateRecordingByUrlParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecordingById**
> object deleteRecordingById($recordingId)

Delete Recording

Delete a recording. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/recording/$RECORDING_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Recordings();
$recordingId = "recordingId_example"; // string | RecordingId

try {
    $result = $api_instance->deleteRecordingById($recordingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Recordings->deleteRecordingById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RecordingId** | **string**| RecordingId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingById**
> object getRecordingById($recordingId)

Get Recording

Retrieve a recording. <br><br> Returns a recording object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/recording/$RECORDING_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Recordings();
$recordingId = "recordingId_example"; // string | RecordingId

try {
    $result = $api_instance->getRecordingById($recordingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Recordings->getRecordingById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **RecordingId** | **string**| RecordingId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordings**
> object getRecordings($range)

List Recordings

Retrieve a list of recordings. <br><br> Returns a list of recording objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/recordings ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Recordings();
$range = "range_example"; // string | Range (ie \"records=201-300\") of recordings requested

try {
    $result = $api_instance->getRecordings($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Recordings->getRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of recordings requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecordingById**
> object updateRecordingById($updateRecordingByIdParameters, $recordingId)

Update Recording

Update an existing recording. <br><br> Returns a recording object if a valid identifier was provided and input validation passed, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X PUT -d "{\"name\": \"Test Recording Updated\"}" https://$API_KEY@api.dialmycalls.com/2.0/recording/$RECORDING_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Recordings();
$updateRecordingByIdParameters = new \DialMyCalls\Models\UpdateRecordingByIdParameters(); // \DialMyCalls\Models\UpdateRecordingByIdParameters | Request body
$recordingId = "recordingId_example"; // string | RecordingId

try {
    $result = $api_instance->updateRecordingById($updateRecordingByIdParameters, $recordingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Recordings->updateRecordingById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateRecordingByIdParameters** | [**\DialMyCalls\Models\UpdateRecordingByIdParameters**](../Model/UpdateRecordingByIdParameters.md)| Request body |
 **RecordingId** | **string**| RecordingId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

