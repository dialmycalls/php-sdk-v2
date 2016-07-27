# DialMyCalls\DoNotContacts

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDoNotContacts**](DoNotContacts.md#getdonotcontacts) | **GET** /donotcontacts | List DoNotContacts


# **getDoNotContacts**
> object getDoNotContacts($range)

List DoNotContacts

Retrieve a list of donotcontacts. <br><br> Returns a list of donotcontact objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/donotcontacts ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\DoNotContacts();
$range = "range_example"; // string | Range (ie \"records=201-300\") of donotcontacts requested

try {
    $result = $api_instance->getDoNotContacts($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DoNotContacts->getDoNotContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of donotcontacts requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

