# DialMyCalls\Groups

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGroup**](Groups.md#creategroup) | **POST** /group | Add Group
[**deleteGroupById**](Groups.md#deletegroupbyid) | **DELETE** /group/{GroupId} | Delete Group
[**getGroupById**](Groups.md#getgroupbyid) | **GET** /group/{GroupId} | Get Group
[**getGroups**](Groups.md#getgroups) | **GET** /groups | List Groups
[**updateGroupById**](Groups.md#updategroupbyid) | **PUT** /group/{GroupId} | Update Group


# **createGroup**
> object createGroup($createGroupParameters)

Add Group

Add a contact group. <br><br> Returns a group object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"name\": \"Test Group\"}" https://$API_KEY@api.dialmycalls.com/2.0/group ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Groups();
$createGroupParameters = new \DialMyCalls\Models\CreateGroupParameters(); // \DialMyCalls\Models\CreateGroupParameters | Request body

try {
    $result = $api_instance->createGroup($createGroupParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Groups->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateGroupParameters** | [**\DialMyCalls\Models\CreateGroupParameters**](../Model/CreateGroupParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupById**
> object deleteGroupById($groupId)

Delete Group

Delete a contact group. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/group/$GROUP_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Groups();
$groupId = "groupId_example"; // string | GroupId

try {
    $result = $api_instance->deleteGroupById($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Groups->deleteGroupById: ', $e->getMessage(), PHP_EOL;
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

# **getGroupById**
> object getGroupById($groupId)

Get Group

Retrieve a contact group. <br><br> Returns a group object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/group/$GROUP_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Groups();
$groupId = "groupId_example"; // string | GroupId

try {
    $result = $api_instance->getGroupById($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Groups->getGroupById: ', $e->getMessage(), PHP_EOL;
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

# **getGroups**
> object getGroups($range)

List Groups

Retrieve a list of contact groups. <br><br> Returns a list of group objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/groups ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Groups();
$range = "range_example"; // string | Range (ie \"records=201-300\") of groups requested

try {
    $result = $api_instance->getGroups($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Groups->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of groups requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupById**
> object updateGroupById($updateGroupByIdParameters, $groupId)

Update Group

Update an existing contact group. <br><br> Returns a group object if a valid identifier was provided and input validation passed, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X PUT -d "{\"name\": \"Test Group Updated\"}" https://$API_KEY@api.dialmycalls.com/2.0/group/$GROUP_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

$api_instance = new \DialMyCalls\Api\Groups();
$updateGroupByIdParameters = new \DialMyCalls\Models\UpdateGroupByIdParameters(); // \DialMyCalls\Models\UpdateGroupByIdParameters | Request body
$groupId = "groupId_example"; // string | GroupId

try {
    $result = $api_instance->updateGroupById($updateGroupByIdParameters, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Groups->updateGroupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateGroupByIdParameters** | [**\DialMyCalls\Models\UpdateGroupByIdParameters**](../Model/UpdateGroupByIdParameters.md)| Request body |
 **GroupId** | **string**| GroupId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

