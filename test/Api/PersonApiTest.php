<?php
/**
 * PersonApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Membercare API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * Contact: support@membercare.dk
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Membercare\Client;

use Membercare\Client\Configuration;
use Membercare\Client\ApiException;
use Membercare\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * PersonApiTest Class Doc Comment
 *
 * @category Class
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for apiV1PersonsDebtorAccountNumberFamilyPut
     *
     * Updates a given familyRelation..
     *
     */
    public function testApiV1PersonsDebtorAccountNumberFamilyPut()
    {
    }

    /**
     * Test case for changeDebtorAccountNumberOnPerson
     *
     * Change DebtorAccountNumber for a Person.
     *
     */
    public function testChangeDebtorAccountNumberOnPerson()
    {
    }

    /**
     * Test case for deleteInterestForPerson
     *
     * Ends the interest.
     *
     */
    public function testDeleteInterestForPerson()
    {
    }

    /**
     * Test case for deletePersonDocument
     *
     * Deletes a PersonDocument by document identitifcation.
     *
     */
    public function testDeletePersonDocument()
    {
    }

    /**
     * Test case for deletePersonFoerignSystem
     *
     * Disassociate ForeginSystem with a Person.
     *
     */
    public function testDeletePersonFoerignSystem()
    {
    }

    /**
     * Test case for deletePersonProfilePicture
     *
     * Deletes a person profile picture.
     *
     */
    public function testDeletePersonProfilePicture()
    {
    }

    /**
     * Test case for deprecatedPasswordValidation
     *
     * WARNING!!! Not possible to use with complex passwords, due to URL rules!  - Please use api/v1/password/validator?password=XXX.
     *
     */
    public function testDeprecatedPasswordValidation()
    {
    }

    /**
     * Test case for familyRelationPostApi
     *
     * Creates a child familyRelation to the person..
     *
     */
    public function testFamilyRelationPostApi()
    {
    }

    /**
     * Test case for familyRelationsApi
     *
     * Retrieves a paged result of all families containing the person with the given debtorAccountNumber..
     *
     */
    public function testFamilyRelationsApi()
    {
    }

    /**
     * Test case for getAccessibleOrganizations
     *
     * Returns list of accessible ogranizations for the user based on the available data roles.
     *
     */
    public function testGetAccessibleOrganizations()
    {
    }

    /**
     * Test case for getBoardMembershipsForPerson
     *
     * Get a paged result of boardmemberships..
     *
     */
    public function testGetBoardMembershipsForPerson()
    {
    }

    /**
     * Test case for getCommunityGroupsByDebtorAccountNumber
     *
     * Gets community groups and their origin by debtor account number.
     *
     */
    public function testGetCommunityGroupsByDebtorAccountNumber()
    {
    }

    /**
     * Test case for getCustomFieldValuesForPerson
     *
     * Retrieves a paged result of all CustomFieldValues for the person with the given DebtorAccountNumber.
     *
     */
    public function testGetCustomFieldValuesForPerson()
    {
    }

    /**
     * Test case for getExternalLoginsByDebtorAccountNumber
     *
     * Gets all external logins the user is currently associated to.
     *
     */
    public function testGetExternalLoginsByDebtorAccountNumber()
    {
    }

    /**
     * Test case for getInterestsForPerson
     *
     * Get the persons interests.
     *
     */
    public function testGetInterestsForPerson()
    {
    }

    /**
     * Test case for getMembershipsForPerson
     *
     * Get a paged result of memberships..
     *
     */
    public function testGetMembershipsForPerson()
    {
    }

    /**
     * Test case for getNotPersonAcceptedTerms
     *
     * Returns the Terms the Person has not accepted ordered by MajorVerson and MinorVersion.
     *
     */
    public function testGetNotPersonAcceptedTerms()
    {
    }

    /**
     * Test case for getPasswordValidationRules
     *
     * Get PasswordValidationRules.
     *
     */
    public function testGetPasswordValidationRules()
    {
    }

    /**
     * Test case for getPersonAcceptedTerms
     *
     * Returns the newest Terms the Person has accepted.
     *
     */
    public function testGetPersonAcceptedTerms()
    {
    }

    /**
     * Test case for getPersonByLoginToken
     *
     * Retrieves a Person with the given loginToken.
     *
     */
    public function testGetPersonByLoginToken()
    {
    }

    /**
     * Test case for getPersonCloseReasons
     *
     * Returns a list of CloseReasons.
     *
     */
    public function testGetPersonCloseReasons()
    {
    }

    /**
     * Test case for getPersonConsents
     *
     * Returns all consents for this person.
     *
     */
    public function testGetPersonConsents()
    {
    }

    /**
     * Test case for getPersonDocuments
     *
     * Returns a list ot person documents.
     *
     */
    public function testGetPersonDocuments()
    {
    }

    /**
     * Test case for getPersonForeignSystem
     *
     * Get Persons via ForeginSystem.
     *
     */
    public function testGetPersonForeignSystem()
    {
    }

    /**
     * Test case for getPersonMembercareUser
     *
     * Gets a list of MembercareUsers for a person with the given DebtorAccountNumber.
     *
     */
    public function testGetPersonMembercareUser()
    {
    }

    /**
     * Test case for getPersonParticipations
     *
     * Gets participations for a given person.
     *
     */
    public function testGetPersonParticipations()
    {
    }

    /**
     * Test case for getPersonProfilePicture
     *
     * Gets a person profile picture.
     *
     */
    public function testGetPersonProfilePicture()
    {
    }

    /**
     * Test case for getPersonSubscriptions
     *
     * Get a persons subscriptions.
     *
     */
    public function testGetPersonSubscriptions()
    {
    }

    /**
     * Test case for getPersons
     *
     * Retrieves a list of all Persons.
     *
     */
    public function testGetPersons()
    {
    }

    /**
     * Test case for getPersonsByUserIdentification
     *
     * Returns persons with the given UserIdentification if found.
     *
     */
    public function testGetPersonsByUserIdentification()
    {
    }

    /**
     * Test case for getUnionRepresentativesByDebtorAccountNumber
     *
     * Gets all representatives of the person with given debtor account number.
     *
     */
    public function testGetUnionRepresentativesByDebtorAccountNumber()
    {
    }

    /**
     * Test case for getValidatePasswordResult
     *
     * Will validate the password.
     *
     */
    public function testGetValidatePasswordResult()
    {
    }

    /**
     * Test case for patchPassword
     *
     * Will set the users password to the provided string.
     *
     */
    public function testPatchPassword()
    {
    }

    /**
     * Test case for patchPerson
     *
     * Tries to Patch a Person.
     *
     */
    public function testPatchPerson()
    {
    }

    /**
     * Test case for patchPersonConsent
     *
     * Patch Accepted for a Consent associated with a Person.
     *
     */
    public function testPatchPersonConsent()
    {
    }

    /**
     * Test case for patchPersonMembercareUser
     *
     * Updates a specific MembercareUser for a person with the given DebtorAccountNumber.
     *
     */
    public function testPatchPersonMembercareUser()
    {
    }

    /**
     * Test case for personApi
     *
     * Retrieves a Person with the given DebtorAccountNumber.
     *
     */
    public function testPersonApi()
    {
    }

    /**
     * Test case for personByBirthdateAndLastFour
     *
     * Retrieves a person by birthdate and lastfour (from social security number).
     *
     */
    public function testPersonByBirthdateAndLastFour()
    {
    }

    /**
     * Test case for personByExternalIdApi
     *
     * Retrieves a Person with the given ExternalId.
     *
     */
    public function testPersonByExternalIdApi()
    {
    }

    /**
     * Test case for personEmploymentApi
     *
     * Retrieves a employment that the person have, from the given id..
     *
     */
    public function testPersonEmploymentApi()
    {
    }

    /**
     * Test case for personEmploymentsApi
     *
     * Retrieves a paged result of employments that the person have..
     *
     */
    public function testPersonEmploymentsApi()
    {
    }

    /**
     * Test case for personMemberEducations
     *
     * Retrieves a paged result of educations that the person have..
     *
     */
    public function testPersonMemberEducations()
    {
    }

    /**
     * Test case for postAddressesForPerson
     *
     * Takes a list of postaladdress, and inserts it for the given DebtorAccountNumber.  Note that the following values Must be assigned:      - debtorAccountNumber      - list of postaladdress (body object).
     *
     */
    public function testPostAddressesForPerson()
    {
    }

    /**
     * Test case for postContactsForPerson
     *
     * Takes a list of contacts, and inserts it for the given DebtorAccountNumber and EmploymentId (if given).  Note that the following values Must be assigned:      - debtorAccountNumber      - list of contacts (body object).
     *
     */
    public function testPostContactsForPerson()
    {
    }

    /**
     * Test case for postCustomFieldValueForPerson
     *
     * Takes a CustomFieldValue, and inserts it for the given Debtor.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned.
     *
     */
    public function testPostCustomFieldValueForPerson()
    {
    }

    /**
     * Test case for postEmploymentForPerson
     *
     * Saves a new employment on the person with the given debtorAccountNumber  - Employment.Company.DebtorAccountNumber is mandatory in order to find the Company  - Employment contacts are also saved.
     *
     */
    public function testPostEmploymentForPerson()
    {
    }

    /**
     * Test case for postExternalLoginToPerson
     *
     * Saves external login information after successful authentication by the login provider.
     *
     */
    public function testPostExternalLoginToPerson()
    {
    }

    /**
     * Test case for postFamilyRelations
     *
     * Creates a list of familyRelations.
     *
     */
    public function testPostFamilyRelations()
    {
    }

    /**
     * Test case for postInterestForPerson
     *
     * Saves the interest.
     *
     */
    public function testPostInterestForPerson()
    {
    }

    /**
     * Test case for postMembershipPerson
     *
     * Creates a membership for a person.    MembershipCategory, ApplicationDate, AffiliateDate, ApplicationStatus are mandatory..
     *
     */
    public function testPostMembershipPerson()
    {
    }

    /**
     * Test case for postPersonApi
     *
     * Inserts or Updates the provided person.  Addresses and Contact has to be empty. Use routes designed specific to handle insert/update of addresses and contacts..
     *
     */
    public function testPostPersonApi()
    {
    }

    /**
     * Test case for postPersonConsent
     *
     * Associate Consent with a Person.
     *
     */
    public function testPostPersonConsent()
    {
    }

    /**
     * Test case for postPersonDocument
     *
     * Saves a PersonDocument with content in it..
     *
     */
    public function testPostPersonDocument()
    {
    }

    /**
     * Test case for postPersonFoerignSystem
     *
     * Associate ForeginSystem with a Person.
     *
     */
    public function testPostPersonFoerignSystem()
    {
    }

    /**
     * Test case for postPersonMemberEducation
     *
     * Saves a new MemberEducation on the person with the given debtorAccountNumber.
     *
     */
    public function testPostPersonMemberEducation()
    {
    }

    /**
     * Test case for postPersonMembercareUser
     *
     * Creates a new MembercareUser for the person with the given DebtorAccountNumber.
     *
     */
    public function testPostPersonMembercareUser()
    {
    }

    /**
     * Test case for postPersonProfilePicture
     *
     * Uploads a profile picture to a person.
     *
     */
    public function testPostPersonProfilePicture()
    {
    }

    /**
     * Test case for postPersonStartEnd
     *
     * Update the start and end dates of the provided person.
     *
     */
    public function testPostPersonStartEnd()
    {
    }

    /**
     * Test case for postPersonSubscriptionPurchase
     *
     * Creates, invoice and set payment for the provided list of subscription definitions.  Discounts based on membership category are not supported in this webservice.
     *
     */
    public function testPostPersonSubscriptionPurchase()
    {
    }

    /**
     * Test case for postPersonTerms
     *
     * Associate Terms with a Person.
     *
     */
    public function testPostPersonTerms()
    {
    }

    /**
     * Test case for postPersonWorklistItem
     *
     * Will insert a worklist item with regards to the person.
     *
     */
    public function testPostPersonWorklistItem()
    {
    }

    /**
     * Test case for postSubscriptionPerson
     *
     * The Subscriber property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\" for persons  The Recipient property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\" for persons  The Payer property on Subscription will need to have a property telling which type the member is eg. \"$type\": \"Membercare.REST.Models.v1.Person.Person, Membercare.REST.Models\" for persons.
     *
     */
    public function testPostSubscriptionPerson()
    {
    }

    /**
     * Test case for putPassword
     *
     * Will set the users password to the provided string.
     *
     */
    public function testPutPassword()
    {
    }

    /**
     * Test case for putPersonMembercareUser
     *
     * Updates a specific MembercareUser for a person with the given DebtorAccountNumber  Roles and DataRoles are not affected.
     *
     */
    public function testPutPersonMembercareUser()
    {
    }

    /**
     * Test case for searchPerson
     *
     * Get a paged result of persons that match the search string..
     *
     */
    public function testSearchPerson()
    {
    }
}
