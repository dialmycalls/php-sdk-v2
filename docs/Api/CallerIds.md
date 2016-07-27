# DialMyCalls\CallerIds

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCallerId**](CallerIds.md#createcallerid) | **POST** /callerid | Add Caller ID
[**createUnverifiedCallerId**](CallerIds.md#createunverifiedcallerid) | **POST** /verify/callerid | Add Caller ID (Unverified)
[**deleteCallerIdById**](CallerIds.md#deletecalleridbyid) | **DELETE** /callerid/{CalleridId} | Delete Caller ID
[**getCallerIdById**](CallerIds.md#getcalleridbyid) | **GET** /callerid/{CalleridId} | Get Caller ID
[**getCallerIds**](CallerIds.md#getcallerids) | **GET** /callerids | List Caller IDs
[**updateCallerIdById**](CallerIds.md#updatecalleridbyid) | **PUT** /callerid/{CalleridId} | Update Caller ID
[**verifyCallerIdById**](CallerIds.md#verifycalleridbyid) | **PUT** /verify/callerid/{CalleridId} | Verify Caller ID


# **createCallerId**
> object createCallerId($createCallerIdParameters)

Add Caller ID

Add a caller ID. <br><br> Returns a caller ID object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"phone\": \"5555555555\", \"name\": \"New Number\"}" https://$API_KEY@api.dialmycalls.com/2.0/callerid ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\CallerIds();
$createCallerIdParameters = new \DialMyCalls\Models\CreateCallerIdParameters(); // \DialMyCalls\Models\CreateCallerIdParameters | Request body

try {
    $result = $api_instance->createCallerId($createCallerIdParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallerIds->createCallerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateCallerIdParameters** | [**\DialMyCalls\Models\CreateCallerIdParameters**](../Model/CreateCallerIdParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUnverifiedCallerId**
> object createUnverifiedCallerId($createUnverifiedCallerIdParameters)

Add Caller ID (Unverified)

Initiate adding a new caller ID when you need to go through the verification process. You will receive a phone call at the phone number provided and will need to make a subsequent API call with the PIN code that you are provided. <br><br> Returns a caller ID object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"phone\": \"5555555555\", \"name\": \"New Number\"}" https://$API_KEY@api.dialmycalls.com/2.0/verify/callerid ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\CallerIds();
$createUnverifiedCallerIdParameters = new \DialMyCalls\Models\CreateUnverifiedCallerIdParameters(); // \DialMyCalls\Models\CreateUnverifiedCallerIdParameters | Request body

try {
    $result = $api_instance->createUnverifiedCallerId($createUnverifiedCallerIdParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallerIds->createUnverifiedCallerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateUnverifiedCallerIdParameters** | [**\DialMyCalls\Models\CreateUnverifiedCallerIdParameters**](../Model/CreateUnverifiedCallerIdParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCallerIdById**
> object deleteCallerIdById($calleridId)

Delete Caller ID

Delete a caller ID. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/callerid/$CALLERID_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\CallerIds();
$calleridId = "calleridId_example"; // string | CalleridId

try {
    $result = $api_instance->deleteCallerIdById($calleridId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallerIds->deleteCallerIdById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CalleridId** | **string**| CalleridId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallerIdById**
> object getCallerIdById($calleridId)

Get Caller ID

Retrieve a caller ID. <br><br> Returns a caller ID object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/callerid/$CALLERID_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\CallerIds();
$calleridId = "calleridId_example"; // string | CalleridId

try {
    $result = $api_instance->getCallerIdById($calleridId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallerIds->getCallerIdById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CalleridId** | **string**| CalleridId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallerIds**
> object getCallerIds($range)

List Caller IDs

Retrieve a list of caller IDs. <br><br> Returns a list of caller ID objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/callerids ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\CallerIds();
$range = "range_example"; // string | Range (ie \"records=201-300\") of callerids requested

try {
    $result = $api_instance->getCallerIds($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallerIds->getCallerIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of callerids requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCallerIdById**
> object updateCallerIdById($updateCallerIdByIdParameters, $calleridId)

Update Caller ID

Update an existing caller ID. <br><br> Returns a caller ID object if a valid identifier was provided and input validation passed, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X PUT -d "{\"name\": \"New Number Updated\"}" https://$API_KEY@api.dialmycalls.com/2.0/callerid/$CALLERID_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\CallerIds();
$updateCallerIdByIdParameters = new \DialMyCalls\Models\UpdateCallerIdByIdParameters(); // \DialMyCalls\Models\UpdateCallerIdByIdParameters | Request body
$calleridId = "calleridId_example"; // string | CalleridId

try {
    $result = $api_instance->updateCallerIdById($updateCallerIdByIdParameters, $calleridId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallerIds->updateCallerIdById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateCallerIdByIdParameters** | [**\DialMyCalls\Models\UpdateCallerIdByIdParameters**](../Model/UpdateCallerIdByIdParameters.md)| Request body |
 **CalleridId** | **string**| CalleridId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **verifyCallerIdById**
> object verifyCallerIdById($verifyCallerIdByIdParameters, $calleridId)

Verify Caller ID

Verify a new caller ID. <br><br> Returns a caller ID object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"phone\": \"5555555555\", \"name\": \"New Number\"}" https://$API_KEY@api.dialmycalls.com/2.0/verify/callerid/$CALLERID_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\CallerIds();
$verifyCallerIdByIdParameters = new \DialMyCalls\Models\VerifyCallerIdByIdParameters(); // \DialMyCalls\Models\VerifyCallerIdByIdParameters | Request body
$calleridId = "calleridId_example"; // string | CalleridId

try {
    $result = $api_instance->verifyCallerIdById($verifyCallerIdByIdParameters, $calleridId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallerIds->verifyCallerIdById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **VerifyCallerIdByIdParameters** | [**\DialMyCalls\Models\VerifyCallerIdByIdParameters**](../Model/VerifyCallerIdByIdParameters.md)| Request body |
 **CalleridId** | **string**| CalleridId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

