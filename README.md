 DialMyCalls
The DialMyCalls API


For more information, please visit [https://www.dialmycalls.com](https://www.dialmycalls.com)

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/dialmycalls/php-sdk-v2.git"
    }
  ],
  "require": {
    "dialmycalls/php-sdk-v2": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DialMyCalls/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DialMyCalls\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-ApiKey', 'YOUR_API_KEY');

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

## Documentation for API Endpoints

All URIs are relative to *https://api.dialmycalls.com/2.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*Accounts* | [**createAccessAccount**](docs/Api/Accounts.md#createaccessaccount) | **POST** /accessaccount | Add Access Account
*Accounts* | [**deleteAccessAccountById**](docs/Api/Accounts.md#deleteaccessaccountbyid) | **DELETE** /accessaccount/{AccessAccountId} | Delete Access Account
*Accounts* | [**getAccessAccountById**](docs/Api/Accounts.md#getaccessaccountbyid) | **GET** /accessaccount/{AccessAccountId} | Get Access Account
*Accounts* | [**getAccessAccounts**](docs/Api/Accounts.md#getaccessaccounts) | **GET** /accessaccounts | List Access Accounts
*Accounts* | [**getAccount**](docs/Api/Accounts.md#getaccount) | **GET** /account | Get Account
*Accounts* | [**updateAccessAccountById**](docs/Api/Accounts.md#updateaccessaccountbyid) | **PUT** /accessaccount/{AccessAccountId} | Update Access Account
*CallerIds* | [**createCallerId**](docs/Api/CallerIds.md#createcallerid) | **POST** /callerid | Add Caller ID
*CallerIds* | [**createUnverifiedCallerId**](docs/Api/CallerIds.md#createunverifiedcallerid) | **POST** /verify/callerid | Add Caller ID (Unverified)
*CallerIds* | [**deleteCallerIdById**](docs/Api/CallerIds.md#deletecalleridbyid) | **DELETE** /callerid/{CalleridId} | Delete Caller ID
*CallerIds* | [**getCallerIdById**](docs/Api/CallerIds.md#getcalleridbyid) | **GET** /callerid/{CalleridId} | Get Caller ID
*CallerIds* | [**getCallerIds**](docs/Api/CallerIds.md#getcallerids) | **GET** /callerids | List Caller IDs
*CallerIds* | [**updateCallerIdById**](docs/Api/CallerIds.md#updatecalleridbyid) | **PUT** /callerid/{CalleridId} | Update Caller ID
*CallerIds* | [**verifyCallerIdById**](docs/Api/CallerIds.md#verifycalleridbyid) | **PUT** /verify/callerid/{CalleridId} | Verify Caller ID
*Calls* | [**cancelCallById**](docs/Api/Calls.md#cancelcallbyid) | **DELETE** /service/call/{CallId} | Cancel Call
*Calls* | [**createCall**](docs/Api/Calls.md#createcall) | **POST** /service/call | Create Call
*Calls* | [**getCallById**](docs/Api/Calls.md#getcallbyid) | **GET** /service/call/{CallId} | Get Call
*Calls* | [**getCallRecipientsByCallId**](docs/Api/Calls.md#getcallrecipientsbycallid) | **GET** /service/call/{CallId}/recipients | Get Call Recipients
*Calls* | [**getCalls**](docs/Api/Calls.md#getcalls) | **GET** /service/calls | List Calls
*Contacts* | [**createContact**](docs/Api/Contacts.md#createcontact) | **POST** /contact | Add Contact
*Contacts* | [**deleteContactById**](docs/Api/Contacts.md#deletecontactbyid) | **DELETE** /contact/{ContactId} | Delete Contact
*Contacts* | [**getContactById**](docs/Api/Contacts.md#getcontactbyid) | **GET** /contact/{ContactId} | Get Contact
*Contacts* | [**getContacts**](docs/Api/Contacts.md#getcontacts) | **GET** /contacts | List Contacts
*Contacts* | [**getContactsByGroupId**](docs/Api/Contacts.md#getcontactsbygroupid) | **GET** /contacts/{GroupId} | List Contacts in Group
*Contacts* | [**updateContactById**](docs/Api/Contacts.md#updatecontactbyid) | **PUT** /contact/{ContactId} | Update Contact
*DoNotContacts* | [**getDoNotContacts**](docs/Api/DoNotContacts.md#getdonotcontacts) | **GET** /donotcontacts | List DoNotContacts
*Groups* | [**createGroup**](docs/Api/Groups.md#creategroup) | **POST** /group | Add Group
*Groups* | [**deleteGroupById**](docs/Api/Groups.md#deletegroupbyid) | **DELETE** /group/{GroupId} | Delete Group
*Groups* | [**getGroupById**](docs/Api/Groups.md#getgroupbyid) | **GET** /group/{GroupId} | Get Group
*Groups* | [**getGroups**](docs/Api/Groups.md#getgroups) | **GET** /groups | List Groups
*Groups* | [**updateGroupById**](docs/Api/Groups.md#updategroupbyid) | **PUT** /group/{GroupId} | Update Group
*Keywords* | [**deleteKeywordByID**](docs/Api/Keywords.md#deletekeywordbyid) | **DELETE** /keyword/{KeywordId} | Delete Keyword
*Keywords* | [**getKeywordByID**](docs/Api/Keywords.md#getkeywordbyid) | **GET** /keyword/{KeywordId} | Get Keyword
*Keywords* | [**getKeywords**](docs/Api/Keywords.md#getkeywords) | **GET** /keywords | List Keywords
*Recordings* | [**createRecording**](docs/Api/Recordings.md#createrecording) | **POST** /recording/tts | Create Recording (Text-to-Speech)
*Recordings* | [**createRecordingByPhone**](docs/Api/Recordings.md#createrecordingbyphone) | **POST** /recording/phone | Create Recording (Phone)
*Recordings* | [**createRecordingByUrl**](docs/Api/Recordings.md#createrecordingbyurl) | **POST** /recording/url | Create Recording (URL)
*Recordings* | [**deleteRecordingById**](docs/Api/Recordings.md#deleterecordingbyid) | **DELETE** /recording/{RecordingId} | Delete Recording
*Recordings* | [**getRecordingById**](docs/Api/Recordings.md#getrecordingbyid) | **GET** /recording/{RecordingId} | Get Recording
*Recordings* | [**getRecordings**](docs/Api/Recordings.md#getrecordings) | **GET** /recordings | List Recordings
*Recordings* | [**updateRecordingById**](docs/Api/Recordings.md#updaterecordingbyid) | **PUT** /recording/{RecordingId} | Update Recording
*Texts* | [**cancelTextById**](docs/Api/Texts.md#canceltextbyid) | **DELETE** /service/text/{TextId} | Cancel Text
*Texts* | [**createText**](docs/Api/Texts.md#createtext) | **POST** /service/text | Create Text
*Texts* | [**deleteIncomingTextById**](docs/Api/Texts.md#deleteincomingtextbyid) | **DELETE** /incoming/text/{TextId} | Delete Incoming Text
*Texts* | [**getIncomingTextById**](docs/Api/Texts.md#getincomingtextbyid) | **GET** /incoming/text/{TextId} | Get Incoming Text
*Texts* | [**getIncomingTexts**](docs/Api/Texts.md#getincomingtexts) | **GET** /incoming/texts | List Incoming Texts
*Texts* | [**getShortCodes**](docs/Api/Texts.md#getshortcodes) | **GET** /shortcodes | List Shortcodes
*Texts* | [**getTextById**](docs/Api/Texts.md#gettextbyid) | **GET** /service/text/{TextId} | Get Text
*Texts* | [**getTextRecipientsByTextId**](docs/Api/Texts.md#gettextrecipientsbytextid) | **GET** /service/text/{TextId}/recipients | Get Text Recipients
*Texts* | [**getTexts**](docs/Api/Texts.md#gettexts) | **GET** /service/texts | List Texts
*VanityNumbers* | [**deleteVanityNumberById**](docs/Api/VanityNumbers.md#deletevanitynumberbyid) | **DELETE** /vanitynumber/{VanityNumberId} | Delete Vanity Number
*VanityNumbers* | [**getVanityNumberById**](docs/Api/VanityNumbers.md#getvanitynumberbyid) | **GET** /vanitynumber/{VanityNumberId} | Get Vanity Number
*VanityNumbers* | [**getVanityNumbers**](docs/Api/VanityNumbers.md#getvanitynumbers) | **GET** /vanitynumbers | List Vanity Numbers
*VanityNumbers* | [**updateVanityNumberById**](docs/Api/VanityNumbers.md#updatevanitynumberbyid) | **PUT** /vanitynumber/{VanityNumberId} | Update Vanity Number


## Documentation For Models

 - [Accessaccount](docs/Model/Accessaccount.md)
 - [Account](docs/Model/Account.md)
 - [CallRecipient](docs/Model/CallRecipient.md)
 - [Callerid](docs/Model/Callerid.md)
 - [Callservice](docs/Model/Callservice.md)
 - [Contact](docs/Model/Contact.md)
 - [ContactAttributes](docs/Model/ContactAttributes.md)
 - [CreateAccessAccountParameters](docs/Model/CreateAccessAccountParameters.md)
 - [CreateCallParameters](docs/Model/CreateCallParameters.md)
 - [CreateCallerIdParameters](docs/Model/CreateCallerIdParameters.md)
 - [CreateContactParameters](docs/Model/CreateContactParameters.md)
 - [CreateGroupParameters](docs/Model/CreateGroupParameters.md)
 - [CreateRecordingByPhoneParameters](docs/Model/CreateRecordingByPhoneParameters.md)
 - [CreateRecordingByUrlParameters](docs/Model/CreateRecordingByUrlParameters.md)
 - [CreateRecordingParameters](docs/Model/CreateRecordingParameters.md)
 - [CreateTextParameters](docs/Model/CreateTextParameters.md)
 - [CreateUnverifiedCallerIdParameters](docs/Model/CreateUnverifiedCallerIdParameters.md)
 - [Donotcontact](docs/Model/Donotcontact.md)
 - [Group](docs/Model/Group.md)
 - [Identifier](docs/Model/Identifier.md)
 - [Incomingtext](docs/Model/Incomingtext.md)
 - [Keyword](docs/Model/Keyword.md)
 - [Polling](docs/Model/Polling.md)
 - [PushToListenAgain](docs/Model/PushToListenAgain.md)
 - [PushToOptOut](docs/Model/PushToOptOut.md)
 - [PushToRecord](docs/Model/PushToRecord.md)
 - [PushToTalk](docs/Model/PushToTalk.md)
 - [Recording](docs/Model/Recording.md)
 - [Service](docs/Model/Service.md)
 - [Shortcode](docs/Model/Shortcode.md)
 - [TextRecipient](docs/Model/TextRecipient.md)
 - [UpdateAccessAccountByIdParameters](docs/Model/UpdateAccessAccountByIdParameters.md)
 - [UpdateCallerIdByIdParameters](docs/Model/UpdateCallerIdByIdParameters.md)
 - [UpdateContactByIdParameters](docs/Model/UpdateContactByIdParameters.md)
 - [UpdateGroupByIdParameters](docs/Model/UpdateGroupByIdParameters.md)
 - [UpdateRecordingByIdParameters](docs/Model/UpdateRecordingByIdParameters.md)
 - [UpdateVanityNumberByIdParameters](docs/Model/UpdateVanityNumberByIdParameters.md)
 - [Vanitynumber](docs/Model/Vanitynumber.md)
 - [VerifyCallerIdByIdParameters](docs/Model/VerifyCallerIdByIdParameters.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: X-Auth-ApiKey
- **Location**: HTTP header


## Author

support@dialmycalls.com


