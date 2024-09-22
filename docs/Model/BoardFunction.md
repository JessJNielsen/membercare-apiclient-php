# BoardFunction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The id | [optional] 
**name** | **string** | The name | [optional] 
**short_name** | **string** | The short name | [optional] 
**web_enabled** | **bool** | Should this be shown on web | [optional] 
**web_edit_enabled** | **bool** | Should this be editable on web | [optional] 
**valid** | **bool** | Is this valid for use | [optional] 
**sequence** | **int** | Sequence for ordering | [optional] 
**allows_data_access** | **bool** | Indicates that this function will allow a user to access data | [optional] 
**roles** | [**\Membercare\Client\Model\BoardMemberCategoryRole[]**](BoardMemberCategoryRole.md) | Roles and rights applied to this boardFunction | [optional] 
**max_months** | **int** | This is the max amount of months a BoardFuction can last. Null is equal to infinity | [optional] 
**roles_propagate_to_hierarchy** | **bool** | Indicates that the board member category roles of this board function propagates to all organizations in the underlying physical hierarchy | [optional] 
**use_board_membership_sequence** | **bool** | Indicates whether the BoardMember.Sequence should be appended to the category | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

