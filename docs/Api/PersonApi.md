# Membercare\Client\PersonApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1PersonsDebtorAccountNumberFamilyPut**](PersonApi.md#apiv1personsdebtoraccountnumberfamilyput) | **PUT** /api/v1/persons/{debtorAccountNumber}/family | Updates a given familyRelation.
[**changeDebtorAccountNumberOnPerson**](PersonApi.md#changedebtoraccountnumberonperson) | **PATCH** /api/v1/persons/{debtorAccountNumber}/changeDebtorAccountNumber | Change DebtorAccountNumber for a Person
[**deleteInterestForPerson**](PersonApi.md#deleteinterestforperson) | **DELETE** /api/v1/persons/{debtorAccountNumber}/interests | Ends the interest
[**deletePersonDocument**](PersonApi.md#deletepersondocument) | **DELETE** /api/v1/persons/document/{identification} | Deletes a PersonDocument by document identitifcation
[**deletePersonFoerignSystem**](PersonApi.md#deletepersonfoerignsystem) | **DELETE** /api/v1/persons/{debtorAccountNumber}/foreignSystem/{id} | Disassociate ForeginSystem with a Person
[**deletePersonProfilePicture**](PersonApi.md#deletepersonprofilepicture) | **DELETE** /api/v1/persons/{debtorAccountNumber}/profilePicture | Deletes a person profile picture
[**deprecatedPasswordValidation**](PersonApi.md#deprecatedpasswordvalidation) | **GET** /api/v1/persons/password/validator/{password} | WARNING!!! Not possible to use with complex passwords, due to URL rules!  - Please use api/v1/password/validator?password&#x3D;XXX
[**familyRelationPostApi**](PersonApi.md#familyrelationpostapi) | **POST** /api/v1/persons/{debtorAccountNumber}/family | Creates a child familyRelation to the person.
[**familyRelationsApi**](PersonApi.md#familyrelationsapi) | **GET** /api/v1/persons/{debtorAccountNumber}/family | Retrieves a paged result of all families containing the person with the given debtorAccountNumber.
[**getAccessibleOrganizations**](PersonApi.md#getaccessibleorganizations) | **GET** /api/v1/persons/{debtorAccountNumber}/organizations/accessible | Returns list of accessible ogranizations for the user based on the available data roles
[**getBoardMembershipsForPerson**](PersonApi.md#getboardmembershipsforperson) | **GET** /api/v1/persons/{debtorAccountNumber}/boardMemberships | Get a paged result of boardmemberships.
[**getCommunityGroupsByDebtorAccountNumber**](PersonApi.md#getcommunitygroupsbydebtoraccountnumber) | **GET** /api/v1/persons/{debtorAccountNumber}/CommunityGroups | Gets community groups and their origin by debtor account number
[**getCustomFieldValuesForPerson**](PersonApi.md#getcustomfieldvaluesforperson) | **GET** /api/v1/persons/{debtorAccountNumber}/customFields/values | Retrieves a paged result of all CustomFieldValues for the person with the given DebtorAccountNumber
[**getExternalLoginsByDebtorAccountNumber**](PersonApi.md#getexternalloginsbydebtoraccountnumber) | **GET** /api/v1/persons/{debtorAccountNumber}/externalLogins | Gets all external logins the user is currently associated to
[**getInterestsForPerson**](PersonApi.md#getinterestsforperson) | **GET** /api/v1/persons/{debtorAccountNumber}/interests | Get the persons interests
[**getMembershipsForPerson**](PersonApi.md#getmembershipsforperson) | **GET** /api/v1/persons/{debtorAccountNumber}/memberships | Get a paged result of memberships.
[**getNotPersonAcceptedTerms**](PersonApi.md#getnotpersonacceptedterms) | **GET** /api/v1/persons/{debtorAccountNumber}/notAcceptedTerms | Returns the Terms the Person has not accepted ordered by MajorVerson and MinorVersion
[**getPasswordValidationRules**](PersonApi.md#getpasswordvalidationrules) | **GET** /api/v1/persons/password/validationRules | Get PasswordValidationRules
[**getPersonAcceptedTerms**](PersonApi.md#getpersonacceptedterms) | **GET** /api/v1/persons/{debtorAccountNumber}/acceptedTerms | Returns the newest Terms the Person has accepted
[**getPersonByLoginToken**](PersonApi.md#getpersonbylogintoken) | **GET** /api/v1/persons/search/by/loginToken | Retrieves a Person with the given loginToken
[**getPersonCloseReasons**](PersonApi.md#getpersonclosereasons) | **GET** /api/v1/persons/closeReasons | Returns a list of CloseReasons
[**getPersonConsents**](PersonApi.md#getpersonconsents) | **GET** /api/v1/persons/{debtorAccountNumber}/consents | Returns all consents for this person
[**getPersonDocuments**](PersonApi.md#getpersondocuments) | **GET** /api/v1/persons/{debtorAccountNumber}/documents | Returns a list ot person documents
[**getPersonForeignSystem**](PersonApi.md#getpersonforeignsystem) | **GET** /api/v1/persons/{debtorAccountNumber}/foreignSystem/{id} | Get Persons via ForeginSystem
[**getPersonMembercareUser**](PersonApi.md#getpersonmembercareuser) | **GET** /api/v1/persons/{debtorAccountNumber}/membercareUsers | Gets a list of MembercareUsers for a person with the given DebtorAccountNumber
[**getPersonParticipations**](PersonApi.md#getpersonparticipations) | **GET** /api/v1/persons/{debtorAccountNumber}/participations | Gets participations for a given person
[**getPersonProfilePicture**](PersonApi.md#getpersonprofilepicture) | **GET** /api/v1/persons/{debtorAccountNumber}/profilePicture | Gets a person profile picture
[**getPersonSubscriptions**](PersonApi.md#getpersonsubscriptions) | **GET** /api/v1/persons/{debtorAccountNumber}/subscriptions | Get a persons subscriptions
[**getPersons**](PersonApi.md#getpersons) | **GET** /api/v1/persons | Retrieves a list of all Persons
[**getPersonsByUserIdentification**](PersonApi.md#getpersonsbyuseridentification) | **GET** /api/v1/persons/search/by/userIdentification/{userIdentification} | Returns persons with the given UserIdentification if found
[**getUnionRepresentativesByDebtorAccountNumber**](PersonApi.md#getunionrepresentativesbydebtoraccountnumber) | **GET** /api/v1/persons/{debtorAccountNumber}/unionrepresentatives | Gets all representatives of the person with given debtor account number
[**getValidatePasswordResult**](PersonApi.md#getvalidatepasswordresult) | **GET** /api/v1/persons/password/validator | Will validate the password
[**patchPassword**](PersonApi.md#patchpassword) | **PATCH** /api/v1/persons/{debtorAccountNumber}/password | Will set the users password to the provided string
[**patchPerson**](PersonApi.md#patchperson) | **PATCH** /api/v1/persons/{debtorAccountNumber} | Tries to Patch a Person
[**patchPersonConsent**](PersonApi.md#patchpersonconsent) | **PATCH** /api/v1/persons/{debtorAccountNumber}/consent | Patch Accepted for a Consent associated with a Person
[**patchPersonMembercareUser**](PersonApi.md#patchpersonmembercareuser) | **PATCH** /api/v1/persons/{debtorAccountNumber}/membercareUsers | Updates a specific MembercareUser for a person with the given DebtorAccountNumber
[**personApi**](PersonApi.md#personapi) | **GET** /api/v1/persons/{debtorAccountNumber} | Retrieves a Person with the given DebtorAccountNumber
[**personByBirthdateAndLastFour**](PersonApi.md#personbybirthdateandlastfour) | **GET** /api/v1/persons/birthdate/{year}/{month}/{day} | Retrieves a person by birthdate and lastfour (from social security number)
[**personByExternalIdApi**](PersonApi.md#personbyexternalidapi) | **GET** /api/v1/persons/search/by/externalid | Retrieves a Person with the given ExternalId
[**personEmploymentApi**](PersonApi.md#personemploymentapi) | **GET** /api/v1/persons/{debtorAccountNumber}/employments/{id} | Retrieves a employment that the person have, from the given id.
[**personEmploymentsApi**](PersonApi.md#personemploymentsapi) | **GET** /api/v1/persons/{debtorAccountNumber}/employments | Retrieves a paged result of employments that the person have.
[**personMemberEducations**](PersonApi.md#personmembereducations) | **GET** /api/v1/persons/{debtorAccountNumber}/memberEducations | Retrieves a paged result of educations that the person have.
[**postAddressesForPerson**](PersonApi.md#postaddressesforperson) | **POST** /api/v1/persons/{debtorAccountNumber}/addresses | Takes a list of postaladdress, and inserts it for the given DebtorAccountNumber.  Note that the following values Must be assigned:      - debtorAccountNumber      - list of postaladdress (body object)
[**postContactsForPerson**](PersonApi.md#postcontactsforperson) | **POST** /api/v1/persons/{debtorAccountNumber}/contacts | Takes a list of contacts, and inserts it for the given DebtorAccountNumber and EmploymentId (if given).  Note that the following values Must be assigned:      - debtorAccountNumber      - list of contacts (body object)
[**postCustomFieldValueForPerson**](PersonApi.md#postcustomfieldvalueforperson) | **POST** /api/v1/persons/{debtorAccountNumber}/customFields/values | Takes a CustomFieldValue, and inserts it for the given Debtor.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned
[**postEmploymentForPerson**](PersonApi.md#postemploymentforperson) | **POST** /api/v1/persons/{debtorAccountNumber}/employments | Saves a new employment on the person with the given debtorAccountNumber  - Employment.Company.DebtorAccountNumber is mandatory in order to find the Company  - Employment contacts are also saved
[**postExternalLoginToPerson**](PersonApi.md#postexternallogintoperson) | **POST** /api/v1/persons/{debtorAccountNumber}/externalLogin | Saves external login information after successful authentication by the login provider
[**postFamilyRelations**](PersonApi.md#postfamilyrelations) | **POST** /api/v1/persons/families | Creates a list of familyRelations
[**postInterestForPerson**](PersonApi.md#postinterestforperson) | **POST** /api/v1/persons/{debtorAccountNumber}/interests | Saves the interest
[**postMembershipPerson**](PersonApi.md#postmembershipperson) | **POST** /api/v1/persons/{debtorAccountNumber}/memberships | Creates a membership for a person.    MembershipCategory, ApplicationDate, AffiliateDate, ApplicationStatus are mandatory.
[**postPersonApi**](PersonApi.md#postpersonapi) | **POST** /api/v1/persons | Inserts or Updates the provided person.  Addresses and Contact has to be empty. Use routes designed specific to handle insert/update of addresses and contacts.
[**postPersonConsent**](PersonApi.md#postpersonconsent) | **POST** /api/v1/persons/{debtorAccountNumber}/consent | Associate Consent with a Person
[**postPersonDocument**](PersonApi.md#postpersondocument) | **POST** /api/v1/persons/{debtorAccountNumber}/document | Saves a PersonDocument with content in it.
[**postPersonFoerignSystem**](PersonApi.md#postpersonfoerignsystem) | **POST** /api/v1/persons/{debtorAccountNumber}/foreignSystem/{id} | Associate ForeginSystem with a Person
[**postPersonMemberEducation**](PersonApi.md#postpersonmembereducation) | **POST** /api/v1/persons/{debtorAccountNumber}/memberEducations | Saves a new MemberEducation on the person with the given debtorAccountNumber
[**postPersonMembercareUser**](PersonApi.md#postpersonmembercareuser) | **POST** /api/v1/persons/{debtorAccountNumber}/membercareUsers | Creates a new MembercareUser for the person with the given DebtorAccountNumber
[**postPersonProfilePicture**](PersonApi.md#postpersonprofilepicture) | **POST** /api/v1/persons/{debtorAccountNumber}/profilePicture | Uploads a profile picture to a person
[**postPersonStartEnd**](PersonApi.md#postpersonstartend) | **PUT** /api/v1/persons | Update the start and end dates of the provided person
[**postPersonSubscriptionPurchase**](PersonApi.md#postpersonsubscriptionpurchase) | **POST** /api/v1/persons/{debtorAccountNumber}/subscriptions/purchase | Creates, invoice and set payment for the provided list of subscription definitions.  Discounts based on membership category are not supported in this webservice
[**postPersonTerms**](PersonApi.md#postpersonterms) | **POST** /api/v1/persons/{debtorAccountNumber}/terms | Associate Terms with a Person
[**postPersonWorklistItem**](PersonApi.md#postpersonworklistitem) | **POST** /api/v1/persons/{debtorAccountNumber}/worklistItem | Will insert a worklist item with regards to the person
[**postSubscriptionPerson**](PersonApi.md#postsubscriptionperson) | **POST** /api/v1/persons/{debtorAccountNumber}/subscriptions | The Subscriber property on Subscription will need to have a property telling which type the member is eg. \&quot;$type\&quot;: \&quot;Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\&quot; for persons  The Recipient property on Subscription will need to have a property telling which type the member is eg. \&quot;$type\&quot;: \&quot;Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\&quot; for persons  The Payer property on Subscription will need to have a property telling which type the member is eg. \&quot;$type\&quot;: \&quot;Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\&quot; for persons
[**putPassword**](PersonApi.md#putpassword) | **PUT** /api/v1/persons/{debtorAccountNumber}/password | Will set the users password to the provided string
[**putPersonMembercareUser**](PersonApi.md#putpersonmembercareuser) | **PUT** /api/v1/persons/{debtorAccountNumber}/membercareUsers/{id} | Updates a specific MembercareUser for a person with the given DebtorAccountNumber  Roles and DataRoles are not affected
[**searchPerson**](PersonApi.md#searchperson) | **POST** /api/v1/persons/search | Get a paged result of persons that match the search string.

# **apiV1PersonsDebtorAccountNumberFamilyPut**
> \Membercare\Client\Model\FamilyRelation apiV1PersonsDebtorAccountNumberFamilyPut($token, $debtor_account_number, $body)

Updates a given familyRelation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\FamilyRelation(); // \Membercare\Client\Model\FamilyRelation | Note that the following values Must be assigned:
- FamilyRelation.FamilyRelationId
- FamilyRelation.StartDate
- Optional, FamilyRelation.EndDate

try {
    $result = $apiInstance->apiV1PersonsDebtorAccountNumberFamilyPut($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->apiV1PersonsDebtorAccountNumberFamilyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\FamilyRelation**](../Model/FamilyRelation.md)| Note that the following values Must be assigned:
- FamilyRelation.FamilyRelationId
- FamilyRelation.StartDate
- Optional, FamilyRelation.EndDate | [optional]

### Return type

[**\Membercare\Client\Model\FamilyRelation**](../Model/FamilyRelation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeDebtorAccountNumberOnPerson**
> \Membercare\Client\Model\Person changeDebtorAccountNumberOnPerson($debtor_account_number, $token, $new_debtor_account_number)

Change DebtorAccountNumber for a Person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$new_debtor_account_number = "new_debtor_account_number_example"; // string | 

try {
    $result = $apiInstance->changeDebtorAccountNumberOnPerson($debtor_account_number, $token, $new_debtor_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->changeDebtorAccountNumberOnPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **new_debtor_account_number** | **string**|  | [optional]

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInterestForPerson**
> deleteInterestForPerson($token, $debtor_account_number, $body)

Ends the interest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$body = new \Membercare\Client\Model\InterestCategory(); // \Membercare\Client\Model\InterestCategory | 

try {
    $apiInstance->deleteInterestForPerson($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deleteInterestForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **body** | [**\Membercare\Client\Model\InterestCategory**](../Model/InterestCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePersonDocument**
> deletePersonDocument($identification, $token)

Deletes a PersonDocument by document identitifcation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identification = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deletePersonDocument($identification, $token);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePersonDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identification** | [**string**](../Model/.md)|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePersonFoerignSystem**
> deletePersonFoerignSystem($debtor_account_number, $id, $token)

Disassociate ForeginSystem with a Person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deletePersonFoerignSystem($debtor_account_number, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePersonFoerignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePersonProfilePicture**
> deletePersonProfilePicture($debtor_account_number, $token)

Deletes a person profile picture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deletePersonProfilePicture($debtor_account_number, $token);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deletePersonProfilePicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deprecatedPasswordValidation**
> \Membercare\Client\Model\PasswordValidationError[] deprecatedPasswordValidation($password, $token)

WARNING!!! Not possible to use with complex passwords, due to URL rules!  - Please use api/v1/password/validator?password=XXX

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password = "password_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->deprecatedPasswordValidation($password, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->deprecatedPasswordValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\PasswordValidationError[]**](../Model/PasswordValidationError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **familyRelationPostApi**
> \Membercare\Client\Model\FamilyRelation familyRelationPostApi($token, $debtor_account_number, $body)

Creates a child familyRelation to the person.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the parent person.
$body = new \Membercare\Client\Model\FamilyRelation(); // \Membercare\Client\Model\FamilyRelation | Note that the following values Must be assigned:
- FamilyRelation.Child.DebtorAccountNumber
- FamilyRelation.StartDate
- FamilyRelation.FamilyRelationCategory.CategoryId
- Optional, FamilyRelation.EndDate

try {
    $result = $apiInstance->familyRelationPostApi($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->familyRelationPostApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtorAccountNumber of the parent person. |
 **body** | [**\Membercare\Client\Model\FamilyRelation**](../Model/FamilyRelation.md)| Note that the following values Must be assigned:
- FamilyRelation.Child.DebtorAccountNumber
- FamilyRelation.StartDate
- FamilyRelation.FamilyRelationCategory.CategoryId
- Optional, FamilyRelation.EndDate | [optional]

### Return type

[**\Membercare\Client\Model\FamilyRelation**](../Model/FamilyRelation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **familyRelationsApi**
> \Membercare\Client\Model\FamilyRelationPagedResult familyRelationsApi($debtor_account_number, $token, $only_valid, $page, $page_size)

Retrieves a paged result of all families containing the person with the given debtorAccountNumber.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | Id of the person
$token = "token_example"; // string | access token
$only_valid = true; // bool | if false only families which fulfill the following requirements will be returned:  EndDate of null, equal or higher than today and StartDate must be equal to or lower than today
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->familyRelationsApi($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->familyRelationsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| Id of the person |
 **token** | **string**| access token |
 **only_valid** | **bool**| if false only families which fulfill the following requirements will be returned:  EndDate of null, equal or higher than today and StartDate must be equal to or lower than today | [optional] [default to true]
 **page** | **int**| Optional, represents the page you wish to see. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of invoices to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\FamilyRelationPagedResult**](../Model/FamilyRelationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessibleOrganizations**
> \Membercare\Client\Model\OrganizationPagedResult getAccessibleOrganizations($debtor_account_number, $token, $web_enabled, $page, $page_size, $include_geographic_districts)

Returns list of accessible ogranizations for the user based on the available data roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$web_enabled = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 
$include_geographic_districts = false; // bool | Will include electoral Districts in the result

try {
    $result = $apiInstance->getAccessibleOrganizations($debtor_account_number, $token, $web_enabled, $page, $page_size, $include_geographic_districts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getAccessibleOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **web_enabled** | **bool**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]
 **include_geographic_districts** | **bool**| Will include electoral Districts in the result | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\OrganizationPagedResult**](../Model/OrganizationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBoardMembershipsForPerson**
> \Membercare\Client\Model\BoardMembershipPagedResult getBoardMembershipsForPerson($debtor_account_number, $token, $only_valid, $include_addresses, $page, $page_size)

Get a paged result of boardmemberships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the person to get boardmemberships for.
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates whether or not to include historical boardmemberships.
$include_addresses = false; // bool | Indicates wheter or not to include addresses
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getBoardMembershipsForPerson($debtor_account_number, $token, $only_valid, $include_addresses, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getBoardMembershipsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtorAccountNumber of the person to get boardmemberships for. |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to include historical boardmemberships. | [optional] [default to true]
 **include_addresses** | **bool**| Indicates wheter or not to include addresses | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\BoardMembershipPagedResult**](../Model/BoardMembershipPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityGroupsByDebtorAccountNumber**
> \Membercare\Client\Model\Person getCommunityGroupsByDebtorAccountNumber($debtor_account_number, $token, $valid_on, $page, $page_size)

Gets community groups and their origin by debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$valid_on = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getCommunityGroupsByDebtorAccountNumber($debtor_account_number, $token, $valid_on, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getCommunityGroupsByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **valid_on** | **\DateTime**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldValuesForPerson**
> \Membercare\Client\Model\CustomFieldValuePagedResult getCustomFieldValuesForPerson($debtor_account_number, $token, $page, $page_size)

Retrieves a paged result of all CustomFieldValues for the person with the given DebtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | DebtorAccountNumber of a member, can be either a person or company
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->getCustomFieldValuesForPerson($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getCustomFieldValuesForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| DebtorAccountNumber of a member, can be either a person or company |
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of invoices to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CustomFieldValuePagedResult**](../Model/CustomFieldValuePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalLoginsByDebtorAccountNumber**
> \Membercare\Client\Model\ExternalLogin[] getExternalLoginsByDebtorAccountNumber($debtor_account_number, $token)

Gets all external logins the user is currently associated to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getExternalLoginsByDebtorAccountNumber($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getExternalLoginsByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ExternalLogin[]**](../Model/ExternalLogin.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInterestsForPerson**
> \Membercare\Client\Model\InterestPagedResult getInterestsForPerson($debtor_account_number, $token, $only_valid, $page, $page_size)

Get the persons interests

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$token = "token_example"; // string | access token
$only_valid = true; // bool | Default true
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of interests to display per paged result.

try {
    $result = $apiInstance->getInterestsForPerson($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getInterestsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **token** | **string**| access token |
 **only_valid** | **bool**| Default true | [optional] [default to true]
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of interests to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\InterestPagedResult**](../Model/InterestPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipsForPerson**
> \Membercare\Client\Model\MembershipPagedResult getMembershipsForPerson($debtor_account_number, $token, $only_valid, $validity, $include_from_hierarchy, $page, $page_size)

Get a paged result of memberships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the Person
$token = "token_example"; // string | access token
$only_valid = true; // bool | OBSOLETE: please use validity instead!
$validity = new \Membercare\Client\Model\SearchAssociatedValid(); // \Membercare\Client\Model\SearchAssociatedValid | If this value is provided, onlyValid is ignored! ChooseDate is not supported  0 = All  1 = CurrentAndFuture  2 = Current  3 = ChooseDate
$include_from_hierarchy = false; // bool | We bring in the memberships from the companies where the person is currently employed
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getMembershipsForPerson($debtor_account_number, $token, $only_valid, $validity, $include_from_hierarchy, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getMembershipsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtorAccountNumber of the Person |
 **token** | **string**| access token |
 **only_valid** | **bool**| OBSOLETE: please use validity instead! | [optional] [default to true]
 **validity** | [**\Membercare\Client\Model\SearchAssociatedValid**](../Model/.md)| If this value is provided, onlyValid is ignored! ChooseDate is not supported  0 &#x3D; All  1 &#x3D; CurrentAndFuture  2 &#x3D; Current  3 &#x3D; ChooseDate | [optional]
 **include_from_hierarchy** | **bool**| We bring in the memberships from the companies where the person is currently employed | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MembershipPagedResult**](../Model/MembershipPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotPersonAcceptedTerms**
> \Membercare\Client\Model\Terms[] getNotPersonAcceptedTerms($debtor_account_number, $token)

Returns the Terms the Person has not accepted ordered by MajorVerson and MinorVersion

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getNotPersonAcceptedTerms($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getNotPersonAcceptedTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Terms[]**](../Model/Terms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPasswordValidationRules**
> \Membercare\Client\Model\ConfigValue[] getPasswordValidationRules($token)

Get PasswordValidationRules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPasswordValidationRules($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPasswordValidationRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ConfigValue[]**](../Model/ConfigValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonAcceptedTerms**
> \Membercare\Client\Model\Terms getPersonAcceptedTerms($debtor_account_number, $token)

Returns the newest Terms the Person has accepted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPersonAcceptedTerms($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonAcceptedTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Terms**](../Model/Terms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonByLoginToken**
> \Membercare\Client\Model\Person getPersonByLoginToken($token, $login_token, $include_name_history)

Retrieves a Person with the given loginToken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$login_token = "login_token_example"; // string | The login token
$include_name_history = false; // bool | 

try {
    $result = $apiInstance->getPersonByLoginToken($token, $login_token, $include_name_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonByLoginToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **login_token** | **string**| The login token | [optional]
 **include_name_history** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonCloseReasons**
> \Membercare\Client\Model\CloseReason[] getPersonCloseReasons($token)

Returns a list of CloseReasons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPersonCloseReasons($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonCloseReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\CloseReason[]**](../Model/CloseReason.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonConsents**
> \Membercare\Client\Model\Consent[] getPersonConsents($debtor_account_number, $token, $skip_text, $skip_summary)

Returns all consents for this person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$skip_text = true; // bool | 
$skip_summary = true; // bool | 

try {
    $result = $apiInstance->getPersonConsents($debtor_account_number, $token, $skip_text, $skip_summary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonConsents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **skip_text** | **bool**|  | [optional]
 **skip_summary** | **bool**|  | [optional]

### Return type

[**\Membercare\Client\Model\Consent[]**](../Model/Consent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonDocuments**
> \Membercare\Client\Model\PersonDocumentPagedResult getPersonDocuments($debtor_account_number, $token, $include_content, $page, $page_size)

Returns a list ot person documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$include_content = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonDocuments($debtor_account_number, $token, $include_content, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **include_content** | **bool**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonDocumentPagedResult**](../Model/PersonDocumentPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonForeignSystem**
> \Membercare\Client\Model\Person getPersonForeignSystem($debtor_account_number, $id, $token)

Get Persons via ForeginSystem

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPersonForeignSystem($debtor_account_number, $id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonForeignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonMembercareUser**
> \Membercare\Client\Model\MembercareUser[] getPersonMembercareUser($debtor_account_number, $token)

Gets a list of MembercareUsers for a person with the given DebtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPersonMembercareUser($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonMembercareUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\MembercareUser[]**](../Model/MembercareUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonParticipations**
> \Membercare\Client\Model\ParticipantPagedResult getPersonParticipations($debtor_account_number, $token, $arrangement_starts_after, $arrangement_starts_before, $arrangement_ends_after, $page, $page_size)

Gets participations for a given person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$arrangement_starts_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$arrangement_starts_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$arrangement_ends_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getPersonParticipations($debtor_account_number, $token, $arrangement_starts_after, $arrangement_starts_before, $arrangement_ends_after, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonParticipations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **arrangement_starts_after** | **\DateTime**|  | [optional]
 **arrangement_starts_before** | **\DateTime**|  | [optional]
 **arrangement_ends_after** | **\DateTime**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ParticipantPagedResult**](../Model/ParticipantPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonProfilePicture**
> \Membercare\Client\Model\PersonProfilePicture getPersonProfilePicture($debtor_account_number, $token)

Gets a person profile picture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getPersonProfilePicture($debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonProfilePicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\PersonProfilePicture**](../Model/PersonProfilePicture.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonSubscriptions**
> \Membercare\Client\Model\Subscription[] getPersonSubscriptions($debtor_account_number, $token, $only_valid)

Get a persons subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The debtor account number of the person to get subscriptions for
$token = "token_example"; // string | access token
$only_valid = true; // bool | Indicates whether or not to only include valid subscriptions.

try {
    $result = $apiInstance->getPersonSubscriptions($debtor_account_number, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The debtor account number of the person to get subscriptions for |
 **token** | **string**| access token |
 **only_valid** | **bool**| Indicates whether or not to only include valid subscriptions. | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersons**
> \Membercare\Client\Model\PersonPagedResult getPersons($token, $page, $page_size, $include_employments, $include_memberships, $include_board_memberships, $include_union_representatives, $include_union_groups, $only_valid, $include_custom_fields, $include_interests, $include_profile_picture_identification)

Retrieves a list of all Persons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 
$include_employments = false; // bool | 
$include_memberships = false; // bool | 
$include_board_memberships = false; // bool | 
$include_union_representatives = false; // bool | 
$include_union_groups = false; // bool | 
$only_valid = true; // bool | 
$include_custom_fields = false; // bool | 
$include_interests = false; // bool | 
$include_profile_picture_identification = false; // bool | 

try {
    $result = $apiInstance->getPersons($token, $page, $page_size, $include_employments, $include_memberships, $include_board_memberships, $include_union_representatives, $include_union_groups, $only_valid, $include_custom_fields, $include_interests, $include_profile_picture_identification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]
 **include_employments** | **bool**|  | [optional] [default to false]
 **include_memberships** | **bool**|  | [optional] [default to false]
 **include_board_memberships** | **bool**|  | [optional] [default to false]
 **include_union_representatives** | **bool**|  | [optional] [default to false]
 **include_union_groups** | **bool**|  | [optional] [default to false]
 **only_valid** | **bool**|  | [optional] [default to true]
 **include_custom_fields** | **bool**|  | [optional] [default to false]
 **include_interests** | **bool**|  | [optional] [default to false]
 **include_profile_picture_identification** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\PersonPagedResult**](../Model/PersonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonsByUserIdentification**
> \Membercare\Client\Model\Person[] getPersonsByUserIdentification($user_identification, $token, $only_valid)

Returns persons with the given UserIdentification if found

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_identification = "user_identification_example"; // string | 
$token = "token_example"; // string | access token
$only_valid = false; // bool | 

try {
    $result = $apiInstance->getPersonsByUserIdentification($user_identification, $token, $only_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getPersonsByUserIdentification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_identification** | **string**|  |
 **token** | **string**| access token |
 **only_valid** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Person[]**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnionRepresentativesByDebtorAccountNumber**
> \Membercare\Client\Model\UnionRepresentative[] getUnionRepresentativesByDebtorAccountNumber($debtor_account_number, $token, $validity_date)

Gets all representatives of the person with given debtor account number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$validity_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getUnionRepresentativesByDebtorAccountNumber($debtor_account_number, $token, $validity_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getUnionRepresentativesByDebtorAccountNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **validity_date** | **\DateTime**|  | [optional]

### Return type

[**\Membercare\Client\Model\UnionRepresentative[]**](../Model/UnionRepresentative.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getValidatePasswordResult**
> \Membercare\Client\Model\PasswordValidationError[] getValidatePasswordResult($token, $password)

Will validate the password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$password = "password_example"; // string | 

try {
    $result = $apiInstance->getValidatePasswordResult($token, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->getValidatePasswordResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **password** | **string**|  | [optional]

### Return type

[**\Membercare\Client\Model\PasswordValidationError[]**](../Model/PasswordValidationError.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPassword**
> patchPassword($debtor_account_number, $token, $password)

Will set the users password to the provided string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$password = "password_example"; // string | 

try {
    $apiInstance->patchPassword($debtor_account_number, $token, $password);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPerson**
> patchPerson($token, $debtor_account_number, $body)

Tries to Patch a Person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\PersonPatch(); // \Membercare\Client\Model\PersonPatch | 

try {
    $apiInstance->patchPerson($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\PersonPatch**](../Model/PersonPatch.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPersonConsent**
> \Membercare\Client\Model\Consent patchPersonConsent($token, $debtor_account_number, $body)

Patch Accepted for a Consent associated with a Person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\Consent(); // \Membercare\Client\Model\Consent | 

try {
    $result = $apiInstance->patchPersonConsent($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPersonConsent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\Consent**](../Model/Consent.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Consent**](../Model/Consent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPersonMembercareUser**
> \Membercare\Client\Model\MembercareUser patchPersonMembercareUser($token, $debtor_account_number, $body)

Updates a specific MembercareUser for a person with the given DebtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\MembercareUserPatch(); // \Membercare\Client\Model\MembercareUserPatch | 

try {
    $result = $apiInstance->patchPersonMembercareUser($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->patchPersonMembercareUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\MembercareUserPatch**](../Model/MembercareUserPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\MembercareUser**](../Model/MembercareUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personApi**
> \Membercare\Client\Model\Person personApi($debtor_account_number, $token, $include_name_history, $include_employments, $include_memberships, $include_board_memberships, $include_union_representatives, $include_union_groups, $include_custom_fields, $only_valid, $include_interests, $include_profile_picture_identification)

Retrieves a Person with the given DebtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The Members DebtorAccountNumber
$token = "token_example"; // string | access token
$include_name_history = false; // bool | 
$include_employments = false; // bool | 
$include_memberships = false; // bool | 
$include_board_memberships = false; // bool | 
$include_union_representatives = false; // bool | 
$include_union_groups = false; // bool | 
$include_custom_fields = false; // bool | 
$only_valid = true; // bool | 
$include_interests = false; // bool | 
$include_profile_picture_identification = false; // bool | 

try {
    $result = $apiInstance->personApi($debtor_account_number, $token, $include_name_history, $include_employments, $include_memberships, $include_board_memberships, $include_union_representatives, $include_union_groups, $include_custom_fields, $only_valid, $include_interests, $include_profile_picture_identification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->personApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The Members DebtorAccountNumber |
 **token** | **string**| access token |
 **include_name_history** | **bool**|  | [optional] [default to false]
 **include_employments** | **bool**|  | [optional] [default to false]
 **include_memberships** | **bool**|  | [optional] [default to false]
 **include_board_memberships** | **bool**|  | [optional] [default to false]
 **include_union_representatives** | **bool**|  | [optional] [default to false]
 **include_union_groups** | **bool**|  | [optional] [default to false]
 **include_custom_fields** | **bool**|  | [optional] [default to false]
 **only_valid** | **bool**|  | [optional] [default to true]
 **include_interests** | **bool**|  | [optional] [default to false]
 **include_profile_picture_identification** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personByBirthdateAndLastFour**
> \Membercare\Client\Model\PersonPagedResult personByBirthdateAndLastFour($year, $month, $day, $token, $lastfour, $last_five, $page, $page_size)

Retrieves a person by birthdate and lastfour (from social security number)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$year = 56; // int | The year of the birthdate.
$month = 56; // int | The month of the birthdate.
$day = 56; // int | The day of the birthdate.
$token = "token_example"; // string | access token
$lastfour = "lastfour_example"; // string | The last four numbers from a social security number
$last_five = "last_five_example"; // string | The last five numbers from a social security number (Norway)
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->personByBirthdateAndLastFour($year, $month, $day, $token, $lastfour, $last_five, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->personByBirthdateAndLastFour: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| The year of the birthdate. |
 **month** | **int**| The month of the birthdate. |
 **day** | **int**| The day of the birthdate. |
 **token** | **string**| access token |
 **lastfour** | **string**| The last four numbers from a social security number | [optional]
 **last_five** | **string**| The last five numbers from a social security number (Norway) | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonPagedResult**](../Model/PersonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personByExternalIdApi**
> \Membercare\Client\Model\Person personByExternalIdApi($token, $external_id, $include_name_history)

Retrieves a Person with the given ExternalId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$external_id = "external_id_example"; // string | The Members ExternalId
$include_name_history = false; // bool | 

try {
    $result = $apiInstance->personByExternalIdApi($token, $external_id, $include_name_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->personByExternalIdApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **external_id** | **string**| The Members ExternalId | [optional]
 **include_name_history** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personEmploymentApi**
> \Membercare\Client\Model\Employment personEmploymentApi($debtor_account_number, $id, $token)

Retrieves a employment that the person have, from the given id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$id = 789; // int | The Id of the wanted employment (EmploymentId)
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->personEmploymentApi($debtor_account_number, $id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->personEmploymentApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **id** | **int**| The Id of the wanted employment (EmploymentId) |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Employment**](../Model/Employment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personEmploymentsApi**
> \Membercare\Client\Model\EmploymentPagedResult personEmploymentsApi($debtor_account_number, $token, $only_valid, $page, $page_size)

Retrieves a paged result of employments that the person have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$token = "token_example"; // string | access token
$only_valid = false; // bool | Include historical and future employments?
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of employments to display per paged result.

try {
    $result = $apiInstance->personEmploymentsApi($debtor_account_number, $token, $only_valid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->personEmploymentsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **token** | **string**| access token |
 **only_valid** | **bool**| Include historical and future employments? | [optional] [default to false]
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of employments to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\EmploymentPagedResult**](../Model/EmploymentPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **personMemberEducations**
> \Membercare\Client\Model\MemberEducationPagedResult personMemberEducations($debtor_account_number, $token, $page, $page_size)

Retrieves a paged result of educations that the person have.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see, starting at 1.
$page_size = 50; // int | Optional, represents the amount of educations to display per paged result.

try {
    $result = $apiInstance->personMemberEducations($debtor_account_number, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->personMemberEducations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **token** | **string**| access token |
 **page** | **int**| Optional, represents the page you wish to see, starting at 1. | [optional] [default to 1]
 **page_size** | **int**| Optional, represents the amount of educations to display per paged result. | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\MemberEducationPagedResult**](../Model/MemberEducationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAddressesForPerson**
> \Membercare\Client\Model\PostalAddress[] postAddressesForPerson($token, $debtor_account_number, $body)

Takes a list of postaladdress, and inserts it for the given DebtorAccountNumber.  Note that the following values Must be assigned:      - debtorAccountNumber      - list of postaladdress (body object)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The Member this value should be present on
$body = array(new \Membercare\Client\Model\PostalAddress()); // \Membercare\Client\Model\PostalAddress[] | The list of postal address to be created

try {
    $result = $apiInstance->postAddressesForPerson($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postAddressesForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The Member this value should be present on |
 **body** | [**\Membercare\Client\Model\PostalAddress[]**](../Model/PostalAddress.md)| The list of postal address to be created | [optional]

### Return type

[**\Membercare\Client\Model\PostalAddress[]**](../Model/PostalAddress.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactsForPerson**
> \Membercare\Client\Model\Contact[] postContactsForPerson($token, $debtor_account_number, $body, $employment_id)

Takes a list of contacts, and inserts it for the given DebtorAccountNumber and EmploymentId (if given).  Note that the following values Must be assigned:      - debtorAccountNumber      - list of contacts (body object)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The Member this value should be present on
$body = array(new \Membercare\Client\Model\Contact()); // \Membercare\Client\Model\Contact[] | The list of contacts to be created
$employment_id = 56; // int | The Id for the Employment that the list of contacts should be referenced

try {
    $result = $apiInstance->postContactsForPerson($token, $debtor_account_number, $body, $employment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postContactsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The Member this value should be present on |
 **body** | [**\Membercare\Client\Model\Contact[]**](../Model/Contact.md)| The list of contacts to be created | [optional]
 **employment_id** | **int**| The Id for the Employment that the list of contacts should be referenced | [optional]

### Return type

[**\Membercare\Client\Model\Contact[]**](../Model/Contact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomFieldValueForPerson**
> \Membercare\Client\Model\CustomFieldValue postCustomFieldValueForPerson($token, $debtor_account_number, $body)

Takes a CustomFieldValue, and inserts it for the given Debtor.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The Member this value should be present on
$body = new \Membercare\Client\Model\CustomFieldValue(); // \Membercare\Client\Model\CustomFieldValue | The actual Value to be inserted

try {
    $result = $apiInstance->postCustomFieldValueForPerson($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postCustomFieldValueForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The Member this value should be present on |
 **body** | [**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)| The actual Value to be inserted | [optional]

### Return type

[**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEmploymentForPerson**
> \Membercare\Client\Model\Employment postEmploymentForPerson($token, $debtor_account_number, $body, $create_employment_worklist_template_id, $end_employment_worklist_template_id)

Saves a new employment on the person with the given debtorAccountNumber  - Employment.Company.DebtorAccountNumber is mandatory in order to find the Company  - Employment contacts are also saved

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$body = new \Membercare\Client\Model\Employment(); // \Membercare\Client\Model\Employment | The employment object to save.
$create_employment_worklist_template_id = 789; // int | 
$end_employment_worklist_template_id = 789; // int | 

try {
    $result = $apiInstance->postEmploymentForPerson($token, $debtor_account_number, $body, $create_employment_worklist_template_id, $end_employment_worklist_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postEmploymentForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **body** | [**\Membercare\Client\Model\Employment**](../Model/Employment.md)| The employment object to save. | [optional]
 **create_employment_worklist_template_id** | **int**|  | [optional]
 **end_employment_worklist_template_id** | **int**|  | [optional]

### Return type

[**\Membercare\Client\Model\Employment**](../Model/Employment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExternalLoginToPerson**
> \Membercare\Client\Model\ExternalLogin postExternalLoginToPerson($token, $debtor_account_number, $body)

Saves external login information after successful authentication by the login provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\ExternalLogin(); // \Membercare\Client\Model\ExternalLogin | 

try {
    $result = $apiInstance->postExternalLoginToPerson($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postExternalLoginToPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\ExternalLogin**](../Model/ExternalLogin.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\ExternalLogin**](../Model/ExternalLogin.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFamilyRelations**
> \Membercare\Client\Model\FamilyRelation postFamilyRelations($token, $body)

Creates a list of familyRelations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = array(new \Membercare\Client\Model\FamilyRelation()); // \Membercare\Client\Model\FamilyRelation[] | Note that the following values Must be assigned:
- FamilyRelation.Parent.DebtorAccountNumber
- FamilyRelation.Child.DebtorAccountNumber
- FamilyRelation.StartDate
- FamilyRelation.FamilyRelationCategory.CategoryId
- Optional, FamilyRelation.EndDate

try {
    $result = $apiInstance->postFamilyRelations($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postFamilyRelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\FamilyRelation[]**](../Model/FamilyRelation.md)| Note that the following values Must be assigned:
- FamilyRelation.Parent.DebtorAccountNumber
- FamilyRelation.Child.DebtorAccountNumber
- FamilyRelation.StartDate
- FamilyRelation.FamilyRelationCategory.CategoryId
- Optional, FamilyRelation.EndDate | [optional]

### Return type

[**\Membercare\Client\Model\FamilyRelation**](../Model/FamilyRelation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInterestForPerson**
> postInterestForPerson($token, $debtor_account_number, $body)

Saves the interest

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$body = new \Membercare\Client\Model\InterestCategory(); // \Membercare\Client\Model\InterestCategory | 

try {
    $apiInstance->postInterestForPerson($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postInterestForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **body** | [**\Membercare\Client\Model\InterestCategory**](../Model/InterestCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMembershipPerson**
> \Membercare\Client\Model\Membership postMembershipPerson($token, $debtor_account_number, $body)

Creates a membership for a person.    MembershipCategory, ApplicationDate, AffiliateDate, ApplicationStatus are mandatory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the person to add the provided Membership to.
$body = new \Membercare\Client\Model\MembershipPost(); // \Membercare\Client\Model\MembershipPost | The Membership to insert

try {
    $result = $apiInstance->postMembershipPerson($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postMembershipPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtorAccountNumber of the person to add the provided Membership to. |
 **body** | [**\Membercare\Client\Model\MembershipPost**](../Model/MembershipPost.md)| The Membership to insert | [optional]

### Return type

[**\Membercare\Client\Model\Membership**](../Model/Membership.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonApi**
> \Membercare\Client\Model\Person postPersonApi($token, $body, $use_automatic_debtor_account_number)

Inserts or Updates the provided person.  Addresses and Contact has to be empty. Use routes designed specific to handle insert/update of addresses and contacts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\Person(); // \Membercare\Client\Model\Person | The Person object to create or update person from.
$use_automatic_debtor_account_number = true; // bool | 

try {
    $result = $apiInstance->postPersonApi($token, $body, $use_automatic_debtor_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\Person**](../Model/Person.md)| The Person object to create or update person from. | [optional]
 **use_automatic_debtor_account_number** | **bool**|  | [optional] [default to true]

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonConsent**
> \Membercare\Client\Model\Consent postPersonConsent($token, $debtor_account_number, $body)

Associate Consent with a Person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\Consent(); // \Membercare\Client\Model\Consent | 

try {
    $result = $apiInstance->postPersonConsent($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonConsent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\Consent**](../Model/Consent.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Consent**](../Model/Consent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonDocument**
> \Membercare\Client\Model\PersonDocument postPersonDocument($token, $debtor_account_number, $body)

Saves a PersonDocument with content in it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$body = new \Membercare\Client\Model\PersonDocument(); // \Membercare\Client\Model\PersonDocument | 

try {
    $result = $apiInstance->postPersonDocument($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **body** | [**\Membercare\Client\Model\PersonDocument**](../Model/PersonDocument.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\PersonDocument**](../Model/PersonDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonFoerignSystem**
> postPersonFoerignSystem($debtor_account_number, $id, $token, $external_id)

Associate ForeginSystem with a Person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token
$external_id = "external_id_example"; // string | 

try {
    $apiInstance->postPersonFoerignSystem($debtor_account_number, $id, $token, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonFoerignSystem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **token** | **string**| access token |
 **external_id** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonMemberEducation**
> postPersonMemberEducation($token, $debtor_account_number, $body)

Saves a new MemberEducation on the person with the given debtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The person's DebtorAccountNumber
$body = new \Membercare\Client\Model\MemberEducation(); // \Membercare\Client\Model\MemberEducation | The MemberEducation object to save.

try {
    $apiInstance->postPersonMemberEducation($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonMemberEducation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The person&#x27;s DebtorAccountNumber |
 **body** | [**\Membercare\Client\Model\MemberEducation**](../Model/MemberEducation.md)| The MemberEducation object to save. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonMembercareUser**
> \Membercare\Client\Model\MembercareUser postPersonMembercareUser($token, $debtor_account_number, $body)

Creates a new MembercareUser for the person with the given DebtorAccountNumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\MembercareUser(); // \Membercare\Client\Model\MembercareUser | 

try {
    $result = $apiInstance->postPersonMembercareUser($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonMembercareUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\MembercareUser**](../Model/MembercareUser.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\MembercareUser**](../Model/MembercareUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonProfilePicture**
> postPersonProfilePicture($token, $debtor_account_number, $body)

Uploads a profile picture to a person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\PersonProfilePicturePost(); // \Membercare\Client\Model\PersonProfilePicturePost | 

try {
    $apiInstance->postPersonProfilePicture($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonProfilePicture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\PersonProfilePicturePost**](../Model/PersonProfilePicturePost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonStartEnd**
> \Membercare\Client\Model\Person postPersonStartEnd($token, $body)

Update the start and end dates of the provided person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\PersonStartEnd(); // \Membercare\Client\Model\PersonStartEnd | 

try {
    $result = $apiInstance->postPersonStartEnd($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonStartEnd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\PersonStartEnd**](../Model/PersonStartEnd.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Person**](../Model/Person.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonSubscriptionPurchase**
> \Membercare\Client\Model\Subscription[] postPersonSubscriptionPurchase($token, $debtor_account_number, $body)

Creates, invoice and set payment for the provided list of subscription definitions.  Discounts based on membership category are not supported in this webservice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtor account number of the person who is buying the subscription(s)
$body = new \Membercare\Client\Model\SubscriptionDefinitionPurchase(); // \Membercare\Client\Model\SubscriptionDefinitionPurchase | A list of subscription definitions to purchase and a payment

try {
    $result = $apiInstance->postPersonSubscriptionPurchase($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonSubscriptionPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtor account number of the person who is buying the subscription(s) |
 **body** | [**\Membercare\Client\Model\SubscriptionDefinitionPurchase**](../Model/SubscriptionDefinitionPurchase.md)| A list of subscription definitions to purchase and a payment | [optional]

### Return type

[**\Membercare\Client\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonTerms**
> \Membercare\Client\Model\Terms postPersonTerms($token, $debtor_account_number, $body)

Associate Terms with a Person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\Terms(); // \Membercare\Client\Model\Terms | 

try {
    $result = $apiInstance->postPersonTerms($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonTerms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\Terms**](../Model/Terms.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Terms**](../Model/Terms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPersonWorklistItem**
> \Membercare\Client\Model\PersonWorkListItem postPersonWorklistItem($token, $debtor_account_number, $body)

Will insert a worklist item with regards to the person

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\PersonWorkListItem(); // \Membercare\Client\Model\PersonWorkListItem | 

try {
    $result = $apiInstance->postPersonWorklistItem($token, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postPersonWorklistItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\PersonWorkListItem**](../Model/PersonWorkListItem.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\PersonWorkListItem**](../Model/PersonWorkListItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubscriptionPerson**
> postSubscriptionPerson($token, $debtor_account_number, $body)

The Subscriber property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\" for persons  The Recipient property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\" for persons  The Payer property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\" for persons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\Subscription(); // \Membercare\Client\Model\Subscription | 

try {
    $apiInstance->postSubscriptionPerson($token, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->postSubscriptionPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\Subscription**](../Model/Subscription.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPassword**
> putPassword($debtor_account_number, $token, $password)

Will set the users password to the provided string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$password = "password_example"; // string | 

try {
    $apiInstance->putPassword($debtor_account_number, $token, $password);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->putPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPersonMembercareUser**
> \Membercare\Client\Model\MembercareUser putPersonMembercareUser($token, $debtor_account_number, $id, $body)

Updates a specific MembercareUser for a person with the given DebtorAccountNumber  Roles and DataRoles are not affected

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\MembercareUserPut(); // \Membercare\Client\Model\MembercareUserPut | 

try {
    $result = $apiInstance->putPersonMembercareUser($token, $debtor_account_number, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->putPersonMembercareUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\MembercareUserPut**](../Model/MembercareUserPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\MembercareUser**](../Model/MembercareUser.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPerson**
> \Membercare\Client\Model\PersonPagedResult searchPerson($token, $body, $include_memberships, $include_board_memberships, $include_custom_fields, $include_interests, $page, $page_size)

Get a paged result of persons that match the search string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\PersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\PersonSearch(); // \Membercare\Client\Model\PersonSearch | Search string container object
$include_memberships = false; // bool | 
$include_board_memberships = false; // bool | 
$include_custom_fields = false; // bool | 
$include_interests = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->searchPerson($token, $body, $include_memberships, $include_board_memberships, $include_custom_fields, $include_interests, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonApi->searchPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\PersonSearch**](../Model/PersonSearch.md)| Search string container object | [optional]
 **include_memberships** | **bool**|  | [optional] [default to false]
 **include_board_memberships** | **bool**|  | [optional] [default to false]
 **include_custom_fields** | **bool**|  | [optional] [default to false]
 **include_interests** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PersonPagedResult**](../Model/PersonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

