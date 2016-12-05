# DialMyCalls\VanityNumbers

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVanityNumberById**](VanityNumbers.md#deletevanitynumberbyid) | **DELETE** /vanitynumber/{VanityNumberId} | Delete Vanity Number
[**getVanityNumberById**](VanityNumbers.md#getvanitynumberbyid) | **GET** /vanitynumber/{VanityNumberId} | Get Vanity Number
[**getVanityNumbers**](VanityNumbers.md#getvanitynumbers) | **GET** /vanitynumbers | List Vanity Numbers
[**updateVanityNumberById**](VanityNumbers.md#updatevanitynumberbyid) | **PUT** /vanitynumber/{VanityNumberId} | Update Vanity Number


# **deleteVanityNumberById**
> object deleteVanityNumberById($vanityNumberId)

Delete Vanity Number

Delete a vanity number. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/keyword/$VANITYNUMBER_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\VanityNumbers();
$vanityNumberId = "vanityNumberId_example"; // string | VanityNumberId

try {
    $result = $api_instance->deleteVanityNumberById($vanityNumberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VanityNumbers->deleteVanityNumberById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **VanityNumberId** | **string**| VanityNumberId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVanityNumberById**
> object getVanityNumberById($vanityNumberId)

Get Vanity Number

Retrieve a vanity number. <br><br> Returns a vanitynumber object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/vanitynumber/$VANITYNUMBER_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\VanityNumbers();
$vanityNumberId = "vanityNumberId_example"; // string | VanityNumberId

try {
    $result = $api_instance->getVanityNumberById($vanityNumberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VanityNumbers->getVanityNumberById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **VanityNumberId** | **string**| VanityNumberId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVanityNumbers**
> object getVanityNumbers($range)

List Vanity Numbers

Retrieve a list of vanity numbers. <br><br> Returns a list of vanitynumber objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/vanitynumbers ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\VanityNumbers();
$range = "range_example"; // string | Range (ie \"records=201-300\") of vanitynumbers requested

try {
    $result = $api_instance->getVanityNumbers($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VanityNumbers->getVanityNumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of vanitynumbers requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVanityNumberById**
> object updateVanityNumberById($updateVanityNumberByIdParameters, $vanityNumberId)

Update Vanity Number

Update a vanity number. <br><br> Returns a vanitynumber object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X PUT -d "{\"ptt_number_id\":\"aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeee\",\"call_options\":{\"voicemail\":true}}" https://$API_KEY@api.dialmycalls.com/2.0/vanitynumber/$VANITYNUMBER_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\VanityNumbers();
$updateVanityNumberByIdParameters = new \DialMyCalls\Models\UpdateVanityNumberByIdParameters(); // \DialMyCalls\Models\UpdateVanityNumberByIdParameters | Request body
$vanityNumberId = "vanityNumberId_example"; // string | VanityNumberId

try {
    $result = $api_instance->updateVanityNumberById($updateVanityNumberByIdParameters, $vanityNumberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VanityNumbers->updateVanityNumberById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateVanityNumberByIdParameters** | [**\DialMyCalls\Models\UpdateVanityNumberByIdParameters**](../Model/UpdateVanityNumberByIdParameters.md)| Request body |
 **VanityNumberId** | **string**| VanityNumberId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

