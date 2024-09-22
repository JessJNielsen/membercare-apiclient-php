# BoardMembershipPost

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**person** | [**\Membercare\Client\Model\Person**](Person.md) |  | [optional] 
**description** | **string** | Description of the BoardMembership. | [optional] 
**enroll_date** | [**\DateTime**](\DateTime.md) | The date of enrollment in the BoardMembership. | [optional] 
**with_draw_date** | [**\DateTime**](\DateTime.md) | The withdraw date if the BoardMembership is stopped.  This can be a future date. | [optional] 
**board_function** | [**\Membercare\Client\Model\BoardFunction**](BoardFunction.md) |  | [optional] 
**board_id** | **int** | The Id of the board you wish to create a boardmembership for  This is only necessary if multiple boards on organizations are allowed and the organization in question has more than one board | [optional] 
**organization** | [**\Membercare\Client\Model\SimpleOrganization**](SimpleOrganization.md) |  | [optional] 
**owner** | [**\Membercare\Client\Model\Member**](Member.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

