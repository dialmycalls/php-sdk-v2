# DialMyCalls\Texts

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelTextById**](Texts.md#canceltextbyid) | **DELETE** /service/text/{TextId} | Cancel Text
[**createText**](Texts.md#createtext) | **POST** /service/text | Create Text
[**deleteIncomingTextById**](Texts.md#deleteincomingtextbyid) | **DELETE** /incoming/text/{TextId} | Delete Incoming Text
[**getIncomingTextById**](Texts.md#getincomingtextbyid) | **GET** /incoming/text/{TextId} | Get Incoming Text
[**getIncomingTexts**](Texts.md#getincomingtexts) | **GET** /incoming/texts | List Incoming Texts
[**getShortCodes**](Texts.md#getshortcodes) | **GET** /shortcodes | List Shortcodes
[**getTextById**](Texts.md#gettextbyid) | **GET** /service/text/{TextId} | Get Text
[**getTextRecipientsByTextId**](Texts.md#gettextrecipientsbytextid) | **GET** /service/text/{TextId}/recipients | Get Text Recipients
[**getTexts**](Texts.md#gettexts) | **GET** /service/texts | List Texts


# **cancelTextById**
> object cancelTextById($textId)

Cancel Text

Cancel an outgoing text. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/service/text/$TEXT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$textId = "textId_example"; // string | TextId

try {
    $result = $api_instance->cancelTextById($textId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->cancelTextById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **TextId** | **string**| TextId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createText**
> object createText($createTextParameters)

Create Text

Create an outgoing text broadcast. <br><br> Returns a service object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"keyword_id\": \"dfe49537-a0a8-4f4a-98a1-e03df388af11\", \"send_immediately\": true,\"messages\": [\"Testing testing\"], \"contacts\": [{\"phone\":\"1116551235\"},{\"phone\":\"1116551234\"}]}" https://$API_KEY@api.dialmycalls.com/2.0/service/text ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$createTextParameters = new \DialMyCalls\Models\CreateTextParameters(); // \DialMyCalls\Models\CreateTextParameters | Request body

try {
    $result = $api_instance->createText($createTextParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->createText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateTextParameters** | [**\DialMyCalls\Models\CreateTextParameters**](../Model/CreateTextParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIncomingTextById**
> object deleteIncomingTextById($textId)

Delete Incoming Text

Delete a incoming text. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/incoming/text/$TEXT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$textId = "textId_example"; // string | TextId

try {
    $result = $api_instance->deleteIncomingTextById($textId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->deleteIncomingTextById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **TextId** | **string**| TextId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIncomingTextById**
> object getIncomingTextById($textId)

Get Incoming Text

Retrieve a text. <br><br> Returns a Incoming Text object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/incoming/text/$TEXT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$textId = "textId_example"; // string | TextId

try {
    $result = $api_instance->getIncomingTextById($textId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->getIncomingTextById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **TextId** | **string**| TextId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIncomingTexts**
> object getIncomingTexts($range)

List Incoming Texts

Retrieve a list of texts. <br><br> Returns a list of Incoming Text objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/incoming/texts ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$range = "range_example"; // string | Range (ie \"records=201-300\") of texts requested

try {
    $result = $api_instance->getIncomingTexts($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->getIncomingTexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of texts requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShortCodes**
> object getShortCodes($range)

List Shortcodes

Retrieve a list of shortcodes. <br><br> Returns a list of shortcode objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/shortcodes ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$range = "range_example"; // string | Range (ie \"records=201-300\") of shortcodes requested

try {
    $result = $api_instance->getShortCodes($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->getShortCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of shortcodes requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTextById**
> object getTextById($textId)

Get Text

Retrieve a text. <br><br> Returns a service object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/service/text/$TEXT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$textId = "textId_example"; // string | TextId

try {
    $result = $api_instance->getTextById($textId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->getTextById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **TextId** | **string**| TextId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTextRecipientsByTextId**
> object getTextRecipientsByTextId($textId, $range)

Get Text Recipients

Retrieve a list of a text's recipients. <br><br> Returns a list of text recipient objects if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/service/text/$TEXT_ID/recipients ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$textId = "textId_example"; // string | TextId
$range = "range_example"; // string | Range (ie \"records=201-300\") of recipients requested

try {
    $result = $api_instance->getTextRecipientsByTextId($textId, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->getTextRecipientsByTextId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **TextId** | **string**| TextId |
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of recipients requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTexts**
> object getTexts($range)

List Texts

Retrieve a list of texts. <br><br> Returns a list of service objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/service/texts ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Texts();
$range = "range_example"; // string | Range (ie \"records=201-300\") of texts requested

try {
    $result = $api_instance->getTexts($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Texts->getTexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of texts requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

