# DialMyCalls\Accounts

All URIs are relative to *https://api.dialmycalls.com/2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccessAccount**](Accounts.md#createaccessaccount) | **POST** /accessaccount | Add Access Account
[**deleteAccessAccountById**](Accounts.md#deleteaccessaccountbyid) | **DELETE** /accessaccount/{AccessAccountId} | Delete Access Account
[**getAccessAccountById**](Accounts.md#getaccessaccountbyid) | **GET** /accessaccount/{AccessAccountId} | Get Access Account
[**getAccessAccounts**](Accounts.md#getaccessaccounts) | **GET** /accessaccounts | List Access Accounts
[**getAccount**](Accounts.md#getaccount) | **GET** /account | Get Account
[**updateAccessAccountById**](Accounts.md#updateaccessaccountbyid) | **PUT** /accessaccount/{AccessAccountId} | Update Access Account


# **createAccessAccount**
> object createAccessAccount($createAccessAccountParameters)

Add Access Account

Add a access account. <br><br> Returns a access account object on success, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X POST -d "{\"email\": \"test@test.com\", \"password\": \"1234A5678\", \"name\": \"John Doe\"}" https://$API_KEY@api.dialmycalls.com/2.0/accessaccount ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Accounts();
$createAccessAccountParameters = new \DialMyCalls\Models\CreateAccessAccountParameters(); // \DialMyCalls\Models\CreateAccessAccountParameters | Request body

try {
    $result = $api_instance->createAccessAccount($createAccessAccountParameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounts->createAccessAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **CreateAccessAccountParameters** | [**\DialMyCalls\Models\CreateAccessAccountParameters**](../Model/CreateAccessAccountParameters.md)| Request body |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccessAccountById**
> object deleteAccessAccountById($accessAccountId)

Delete Access Account

Delete a access account. <br><br> Returns the following if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X DELETE https://$API_KEY@api.dialmycalls.com/2.0/accessaccount/$ACCESSACCOUNT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Accounts();
$accessAccountId = "accessAccountId_example"; // string | AccessAccountId

try {
    $result = $api_instance->deleteAccessAccountById($accessAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounts->deleteAccessAccountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **AccessAccountId** | **string**| AccessAccountId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessAccountById**
> object getAccessAccountById($accessAccountId)

Get Access Account

Retrieve an access account. <br><br> Returns a access account object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/accessaccount/$ACCESSACCOUNT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Accounts();
$accessAccountId = "accessAccountId_example"; // string | AccessAccountId

try {
    $result = $api_instance->getAccessAccountById($accessAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounts->getAccessAccountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **AccessAccountId** | **string**| AccessAccountId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessAccounts**
> object getAccessAccounts($range)

List Access Accounts

Retrieve a list of access accounts. <br><br> Returns a list of access account objects. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/accessaccounts ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Accounts();
$range = "range_example"; // string | Range (ie \"records=201-300\") of accessaccounts requested

try {
    $result = $api_instance->getAccessAccounts($range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounts->getAccessAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **Range** | **string**| Range (ie \&quot;records&#x3D;201-300\&quot;) of accessaccounts requested | [optional]

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> object getAccount()

Get Account

Retrieve account details. <br><br> Returns a account object if a valid identifier was provided, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X GET https://$API_KEY@api.dialmycalls.com/2.0/account ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Accounts();

try {
    $result = $api_instance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounts->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccessAccountById**
> object updateAccessAccountById($updateAccessAccountByIdParameters, $accessAccountId)

Update Access Account

Update an existing access account. <br><br> Returns a access account object if a valid identifier was provided and input validation passed, and returns an error otherwise. <br><br> ``` curl -i -H "Content-Type: application/json" -X PUT -d "{\"name\": \"New Name\"}" https://$API_KEY@api.dialmycalls.com/2.0/accessaccount/$ACCESSACCOUNT_ID ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');
// Configure HTTP basic authorization: basicAuth
DialMyCalls\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
DialMyCalls\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new \DialMyCalls\Api\Accounts();
$updateAccessAccountByIdParameters = new \DialMyCalls\Models\UpdateAccessAccountByIdParameters(); // \DialMyCalls\Models\UpdateAccessAccountByIdParameters | Request body
$accessAccountId = "accessAccountId_example"; // string | AccessAccountId

try {
    $result = $api_instance->updateAccessAccountById($updateAccessAccountByIdParameters, $accessAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Accounts->updateAccessAccountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **UpdateAccessAccountByIdParameters** | [**\DialMyCalls\Models\UpdateAccessAccountByIdParameters**](../Model/UpdateAccessAccountByIdParameters.md)| Request body |
 **AccessAccountId** | **string**| AccessAccountId |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

