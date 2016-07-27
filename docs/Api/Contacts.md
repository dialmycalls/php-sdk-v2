# DialMyCalls\Contacts

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContact**](Contacts.md#createcontact) | **POST** /contact | Add Contact
[**deleteContactById**](Contacts.md#deletecontactbyid) | **DELETE** /contact/{ContactId} | Delete Contact
[**getContactById**](Contacts.md#getcontactbyid) | **GET** /contact/{ContactId} | Get Contact
[**getContacts**](Contacts.md#getcontacts) | **GET** /contacts | List Contacts
[**getContactsByGroupId**](Contacts.md#getcontactsbygroupid) | **GET** /contacts/{GroupId} | List Contacts in Group
[**updateContactById**](Contacts.md#updatecontactbyid) | **PUT** /contact/{ContactId} | Update Contact


# **createContact**
> object createContact($createContactParameters)

Add Contact

Add a contact to your contact list. <br><br> Returns a contact object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"phone\": \"5555555555\"}" https://$API_KEY@api.dialmycalls.com/2.0/contact ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Contacts();
$createContactParameters = new \DialMyCalls\Models\CreateContactParameters(); // \DialMyCalls\Models\CreateContactParameters | Request body

try {
    $result = $api_instance->createContact($createContactParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contacts->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateContactParameters** | [**\DialMyCalls\Models\CreateContactParameters**](../Model/CreateContactParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactById**
> object deleteContactById($contactId)

Delete Contact

Delete a contact from your contact list. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/contact/$CONTACT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Contacts();
$contactId = "contactId_example"; // string | ContactId

try {
    $result = $api_instance->deleteContactById($contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contacts->deleteContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ContactId** | **string**| ContactId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactById**
> object getContactById($contactId)

Get Contact

Retrieve a contact to your contact list. <br><br> Returns a contact object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/contact/$CONTACT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Contacts();
$contactId = "contactId_example"; // string | ContactId

try {
    $result = $api_instance->getContactById($contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contacts->getContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ContactId** | **string**| ContactId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> object getContacts($range)

List Contacts

Retrieve a list of contacts. <br><br> Returns a list of contact objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/contacts ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Contacts();
$range = "range_example"; // string | Range (ie \"records=201-300\") of contacts requested

try {
    $result = $api_instance->getContacts($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contacts->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of contacts requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactsByGroupId**
> object getContactsByGroupId($groupId)

List Contacts in Group

Retrieve a list of contacts in a contact group. <br><br> Returns a list of contact objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/contacts/$GROUP_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Contacts();
$groupId = "groupId_example"; // string | GroupId

try {
    $result = $api_instance->getContactsByGroupId($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contacts->getContactsByGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **GroupId** | **string**| GroupId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactById**
> object updateContactById($updateContactByIdParameters, $contactId)

Update Contact

Update an existing contact in your contact list. <br><br> Returns a contact object if a valid identifier was provided and input validation passed, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X PUT -d "{\"phone\": \"5555555555\"}" https://$API_KEY@api.dialmycalls.com/2.0/contact/$CONTACT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Contacts();
$updateContactByIdParameters = new \DialMyCalls\Models\UpdateContactByIdParameters(); // \DialMyCalls\Models\UpdateContactByIdParameters | Request body
$contactId = "contactId_example"; // string | ContactId

try {
    $result = $api_instance->updateContactById($updateContactByIdParameters, $contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Contacts->updateContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateContactByIdParameters** | [**\DialMyCalls\Models\UpdateContactByIdParameters**](../Model/UpdateContactByIdParameters.md)| Request body |
 **ContactId** | **string**| ContactId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

