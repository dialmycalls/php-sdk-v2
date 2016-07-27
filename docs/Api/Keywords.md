# DialMyCalls\Keywords

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteKeywordByID**](Keywords.md#deletekeywordbyid) | **DELETE** /keyword/{KeywordId} | Delete Keyword
[**getKeywordByID**](Keywords.md#getkeywordbyid) | **GET** /keyword/{KeywordId} | Get Keyword
[**getKeywords**](Keywords.md#getkeywords) | **GET** /keywords | List Keywords


# **deleteKeywordByID**
> object deleteKeywordByID($keywordId)

Delete Keyword

Delete a keyword. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/keyword/$KEYWORD_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Keywords();
$keywordId = "keywordId_example"; // string | KeywordId

try {
    $result = $api_instance->deleteKeywordByID($keywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Keywords->deleteKeywordByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **KeywordId** | **string**| KeywordId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeywordByID**
> object getKeywordByID($keywordId)

Get Keyword

Retrieve a keyword. <br><br> Returns a keyword object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/keyword/$KEYWORD_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Keywords();
$keywordId = "keywordId_example"; // string | KeywordId

try {
    $result = $api_instance->getKeywordByID($keywordId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Keywords->getKeywordByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **KeywordId** | **string**| KeywordId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKeywords**
> object getKeywords($range)

List Keywords

Retrieve a list of keywords. <br><br> Returns a list of keyword objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/keywords ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Keywords();
$range = "range_example"; // string | Range (ie \"records=201-300\") of keywords requested

try {
    $result = $api_instance->getKeywords($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Keywords->getKeywords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of keywords requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

