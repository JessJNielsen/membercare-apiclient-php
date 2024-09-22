# CustomFieldDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | The link to the current resource | [optional] 
**name** | **string** | Name of the CustomFieldType | [optional] 
**description** | **string** | The description of the CustomFieldType | [optional] 
**data_type** | [**\Membercare\Client\Model\CustomFieldType**](CustomFieldType.md) |  | [optional] 
**identifier** | **int** | The unique identifier for this CustomFieldType | [optional] 
**web_enabled** | **bool** | Indicates if this Type should be used on publicly accessible websites | [optional] 
**table_id** | **int** | Contains the ID of the table that is linked to this CustomField if the DataType is StringFromTable. | [optional] 
**table_values_string** | [**\Membercare\Client\Model\TableValueString[]**](TableValueString.md) | Contains all allowed string values If the DataType is StringFromTable. | [optional] 
**valid** | **bool** | Indicates whether or not this customFieldType is valid to use. | [optional] 
**for_specific_organizations** | **bool** | Indicates whether or not this customFieldType is to be used in specific organizations. | [optional] 
**default_value_bool** | **bool** | The default boolean value, if set and if customFieldType is boolean | [optional] 
**default_value_date_time** | [**\DateTime**](\DateTime.md) | The default datetime value, if set and if customFieldType is datetime | [optional] 
**default_value_decimal** | **double** | The default decimal value, if set and if customFieldType is decimal | [optional] 
**default_value_long** | **int** | The default double value, if set and if customFieldType is double | [optional] 
**default_value_string** | **string** | The default string value, if set and if customFieldType is string | [optional] 
**default_value_string_from_table** | **string** | The default string from table value, if set and if customFieldType is stringFromTable | [optional] 
**default_value_string_max** | **string** | The default stringMax value, if set and if customFieldType is stringMax | [optional] 
**group** | [**\Membercare\Client\Model\Group**](Group.md) |  | [optional] 
**allowed_parent_types** | [**\Membercare\Client\Model\CustomFieldParentTypeFlag[]**](CustomFieldParentTypeFlag.md) | A list of the valid parent types that a custom field value can be added to | [optional] 
**allow_edit** | **bool** | Indicates whether or not it is allowed to edit this custom field | [optional] 
**unique_field** | **bool** | Indicates whether only unique fields are allowed | [optional] 
**unique_value** | **bool** | Indicates whether only unique values are allowed | [optional] 
**sequence** | **int** | Sequence number | [optional] 
**mandatory** | **bool** | Indicates whether the value is mandatory | [optional] 
**organizations** | [**\Membercare\Client\Model\SimpleOrganization[]**](SimpleOrganization.md) | A list of organizations associated with the custom field definition | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

