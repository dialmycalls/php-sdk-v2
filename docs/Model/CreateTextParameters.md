# CreateTextParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | (Required)  Name the broadcast. | [optional] 
**keywordId** | **string** | (Required)  The keyword id that should be associated with this broadcast. | [optional] 
**messages** | **string[]** | (Required)  List of messages to send (up to 10). | [optional] 
**sendAt** | **string** | When the broadcast should be sent. | [optional] 
**sendImmediately** | **bool** | Should the broadcast go out immediately? | [optional] 
**sendEmail** | **bool** | Also send an email to the contacts? | [optional] 
**accessaccountId** | **string** | Schedule this broadcast as an access account. | [optional] 
**shortcodeId** | **string** | The shortcode id that the broadcast will be sent from. | [optional] 
**concatenateSms** | **bool** | Combine all SMS messages into 1 message on the end users device. | [optional] 
**contacts** | [**\DialMyCalls\Models\ContactAttributes[]**](ContactAttributes.md) | (Required)  List of contact information that should be sent the broadcast. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


