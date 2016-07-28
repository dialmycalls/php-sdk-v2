# CreateCallParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | (Required)  Name the broadcast. | [optional] 
**calleridId** | **string** | (Required)  The caller id that the message should be sent from. | [optional] 
**recordingId** | **string** | (Required)  The recording id of the message that should be played. | [optional] 
**machineRecordingId** | **string** | The recording id of the message that should be played on answering machines.  If not supplied the recording_id will be used.  use_amd must be true in order for this feature to work. | [optional] 
**sendAt** | **string** | When the broadcast should be sent. (Ex: 2016-07-25T12:00:00+0000) | [optional] 
**sendImmediately** | **bool** | Should the broadcast go out immediately? | [optional] 
**useAmd** | **bool** | Using answering machine detection? | [optional] 
**sendEmail** | **bool** | Also send an email to the contacts? | [optional] 
**accessaccountId** | **string** | Schedule this broadcast as an access account. | [optional] 
**contacts** | [**\DialMyCalls\Models\ContactAttributes[]**](ContactAttributes.md) | (Required)  List of contact information that should be sent the broadcast. | [optional] 
**addOns** | [**\DialMyCalls\Models\PushToListenAgain[]**](PushToListenAgain.md) | A list of feature add-ons for the calls. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


