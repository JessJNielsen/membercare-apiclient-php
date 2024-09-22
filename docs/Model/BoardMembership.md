# BoardMembership

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The BoardMembership&#x27;s Id | [optional] 
**person** | [**\Membercare\Client\Model\Person**](Person.md) |  | [optional] 
**description** | **string** | Description of the BoardMembership. | [optional] 
**enroll_date** | [**\DateTime**](\DateTime.md) | The date of enrollment in the BoardMembership. | [optional] 
**with_draw_date** | [**\DateTime**](\DateTime.md) | The withdraw date if the BoardMembership is stopped.  This can be a future date. | [optional] 
**sequence** | **int** | The sequence of the boardmember.  This is not related to BoardFunction.Sequence. | [optional] 
**board_function** | [**\Membercare\Client\Model\BoardFunction**](BoardFunction.md) |  | [optional] 
**board** | [**\Membercare\Client\Model\Board**](Board.md) |  | [optional] 
**organization** | [**\Membercare\Client\Model\SimpleOrganization**](SimpleOrganization.md) |  | [optional] 
**owner** | [**\Membercare\Client\Model\Member**](Member.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

