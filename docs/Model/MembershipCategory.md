# MembershipCategory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**id** | **int** | The id of the membership category. | [optional] 
**description** | **string** | The description of the membership category | [optional] 
**primary_membership** | **bool** | Indicates wether or not the membership category is primary. | [optional] 
**valid** | **bool** | Indicates wether or not the membership category is valid.  If false, the membership category cannot be used for creating new membership. | [optional] 
**web_enabled** | **bool** | Indicates wether or not this membership category should be shown on web. | [optional] 
**context** | [**\Membercare\Client\Model\UnitTypeContextFlag**](UnitTypeContextFlag.md) |  | [optional] 
**membership_category_group** | [**\Membercare\Client\Model\MembershipCategoryGroup**](MembershipCategoryGroup.md) |  | [optional] 
**organization** | [**\Membercare\Client\Model\SimpleOrganization**](SimpleOrganization.md) |  | [optional] 
**subscription_definitions** | [**\Membercare\Client\Model\SubscriptionDefinition[]**](SubscriptionDefinition.md) |  | [optional] 
**mandatory_subscription_definitions** | [**\Membercare\Client\Model\SubscriptionDefinition[]**](SubscriptionDefinition.md) |  | [optional] 
**parent_membership_categories** | [**\Membercare\Client\Model\MembershipCategory[]**](MembershipCategory.md) | A list of parent membership categories | [optional] 
**child_membership_categories** | [**\Membercare\Client\Model\MembershipCategory[]**](MembershipCategory.md) | A list of child membership categories | [optional] 
**tags** | **string[]** | A list of tag names | [optional] 
**validation_rule** | [**\Membercare\Client\Model\MembershipCategoryValidationRule**](MembershipCategoryValidationRule.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

