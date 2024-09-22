# Membercare\Client\ArrangementApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allowedParticipantCategoriesApi**](ArrangementApi.md#allowedparticipantcategoriesapi) | **GET** /api/v1/arrangements/{internalId}/allowedParticipantCategories | Get allowed participant categories of the arrangement, for the given person.
[**allowedParticipantCategoriesByEnroller**](ArrangementApi.md#allowedparticipantcategoriesbyenroller) | **GET** /api/v1/arrangements/{internalId}/allowedParticipantCategoriesByEnroller | Get allowed participant categories of the arrangement, for the given person.
[**apiV1ArrangementsInternalIdParticipantCategoriesGet**](ArrangementApi.md#apiv1arrangementsinternalidparticipantcategoriesget) | **GET** /api/v1/arrangements/{internalId}/participantCategories | Get allowed participant categories of the arrangement, for the given person.
[**apiV1ArrangementsInternalIdParticipantCategoriesIdPatch**](ArrangementApi.md#apiv1arrangementsinternalidparticipantcategoriesidpatch) | **PATCH** /api/v1/arrangements/{internalId}/participantCategories/{id} | Updates a allowed participant category
[**apiV1ArrangementsInternalIdParticipantCategoriesIdPut**](ArrangementApi.md#apiv1arrangementsinternalidparticipantcategoriesidput) | **PUT** /api/v1/arrangements/{internalId}/participantCategories/{id} | Updates a allowed participant category
[**apiV1ArrangementsInternalIdParticipantCategoryIdDelete**](ArrangementApi.md#apiv1arrangementsinternalidparticipantcategoryiddelete) | **DELETE** /api/v1/arrangements/{internalId}/participantCategory/{id} | Removes an allowed participant category from the given arrangement
[**apiV1ArrangementsInternalIdParticipantCategoryPost**](ArrangementApi.md#apiv1arrangementsinternalidparticipantcategorypost) | **POST** /api/v1/arrangements/{internalId}/participantCategory | Adds an allowed participant category to the given arrangement
[**calculateBestPriceServiceToEnroll**](ArrangementApi.md#calculatebestpriceservicetoenroll) | **POST** /api/v1/arrangements/{internalId}/calculator/bestprice | Get the set of calculated transactions with the best price from a list of serviceToEnroll. If you send more than one Discount/Subsidy, we will find the cheapest combination.
[**calculateServiceToEnrollApi**](ArrangementApi.md#calculateservicetoenrollapi) | **POST** /api/v1/arrangements/{internalId}/calculator | Get calculated transactions from a list of serviceToEnroll.
[**cancellationReasonsApi**](ArrangementApi.md#cancellationreasonsapi) | **GET** /api/v1/arrangements/cancellationReasons | Gets all valid cancellation reasons
[**deleteAllowedParticipantCategoryFromSession**](ArrangementApi.md#deleteallowedparticipantcategoryfromsession) | **DELETE** /api/v1/arrangements/{internalId}/Sessions/{sessionId}/allowedParticipantCategories/{id} | Removes an allowed participant category from the given arrangement
[**deleteArrangementAreas**](ArrangementApi.md#deletearrangementareas) | **DELETE** /api/v1/arrangements/{internalId}/areas/{id} | Deletes an association between an ArrangementArea and an Arrangement.
[**deleteArrangementCategories**](ArrangementApi.md#deletearrangementcategories) | **DELETE** /api/v1/arrangements/{internalId}/categories/{id} | Deletes an association between an ArrangementCategory and an Arrangement.
[**deleteArrangementGroups**](ArrangementApi.md#deletearrangementgroups) | **DELETE** /api/v1/arrangements/{internalId}/groups/{id} | Deletes an association between an ArrangementGroup and an Arrangement.
[**deleteArrangementHotel**](ArrangementApi.md#deletearrangementhotel) | **DELETE** /api/v1/arrangements/{internalId}/Hotels/{id} | 
[**deleteArrangementPlaces**](ArrangementApi.md#deletearrangementplaces) | **DELETE** /api/v1/arrangements/{internalId}/Places/{id} | 
[**deleteArrangementSequence**](ArrangementApi.md#deletearrangementsequence) | **DELETE** /api/v1/arrangements/sequence/{sequenceIdentification}/{internalId} | 
[**deleteArrangementServices**](ArrangementApi.md#deletearrangementservices) | **DELETE** /api/v1/arrangements/{internalId}/services/{id} | 
[**deleteArrangementSessionsService**](ArrangementApi.md#deletearrangementsessionsservice) | **DELETE** /api/v1/arrangements/{internalId}/Sessions/{sessionId}/Services/{id} | 
[**deleteArrangementSubCategories**](ArrangementApi.md#deletearrangementsubcategories) | **DELETE** /api/v1/arrangements/{internalId}/subCategories/{id} | Deletes an association between an ArrangementSubCategory and an Arrangement.
[**deleteArrangementTransactionParticipantService**](ArrangementApi.md#deletearrangementtransactionparticipantservice) | **DELETE** /api/v1/arrangements/{internalId}/Participants/{participantId}/Services/{id} | Delete course transaction from arrangment based on participant and service
[**deleteEventCrew**](ArrangementApi.md#deleteeventcrew) | **DELETE** /api/v1/arrangements/{internalId}/crew/{id} | Removes a member from the crew
[**deleteParticipantCategory**](ArrangementApi.md#deleteparticipantcategory) | **DELETE** /api/v1/arrangements/{internalId}/allowedParticipantCategories/{id} | Removes an allowed participant category from the given arrangement
[**deleteSession**](ArrangementApi.md#deletesession) | **DELETE** /api/v1/arrangements/{internalId}/sessions/{id} | 
[**deleteSessionServiceCourseTransaction**](ArrangementApi.md#deletesessionservicecoursetransaction) | **DELETE** /api/v1/arrangements/{internalId}/Participants/{participantId}/Sessions/{sessionId}/Services/{serviceId} | Deletes a course transaction from a service attached to a specifik participant who participates in a specific session
[**deleteSessionTrack**](ArrangementApi.md#deletesessiontrack) | **DELETE** /api/v1/arrangements/{internalId}/Tracks/{id} | Deletes a SessionTrack
[**getAllowedParticipantCategoryFromSession**](ArrangementApi.md#getallowedparticipantcategoryfromsession) | **GET** /api/v1/arrangements/{internalId}/Sessions/{sessionId}/allowedParticipantCategories | 
[**getArrangement**](ArrangementApi.md#getarrangement) | **GET** /api/v1/arrangements/{internalId} | Get a specific arrangement by it&#x27;s InternalId
[**getArrangementAreas**](ArrangementApi.md#getarrangementareas) | **GET** /api/v1/arrangements/areas | Gets all Arrangement areas
[**getArrangementCategories**](ArrangementApi.md#getarrangementcategories) | **GET** /api/v1/arrangements/categories | Gets all Arrangement categories
[**getArrangementCrew**](ArrangementApi.md#getarrangementcrew) | **GET** /api/v1/arrangements/{internalId}/crew | Gets an Arrangment&#x27;s crew members
[**getArrangementGroups**](ArrangementApi.md#getarrangementgroups) | **GET** /api/v1/arrangements/groups | Gets all Arrangement groups
[**getArrangementHotels**](ArrangementApi.md#getarrangementhotels) | **GET** /api/v1/arrangements/{internalId}/Hotels | Gets hotels for an arrangement
[**getArrangementNotifications**](ArrangementApi.md#getarrangementnotifications) | **POST** /api/v1/arrangements/{internalId}/notifications | Get notifications of a given arrangement
[**getArrangementPLaces**](ArrangementApi.md#getarrangementplaces) | **GET** /api/v1/arrangements/{internalId}/Places | Gets an arrangement&#x27;s places
[**getArrangementParticipantsByGlobalSearch**](ArrangementApi.md#getarrangementparticipantsbyglobalsearch) | **POST** /api/v1/arrangements/participants/search | Under development but stable.   Currently supports the following combinations:       (IncludeCancelled)           OR (ArrangementStartsAfter, ArrangementStartsBefore)   OR (RepresentersDebtorAccountNumbers)
[**getArrangementParticipantsBySearch**](ArrangementApi.md#getarrangementparticipantsbysearch) | **POST** /api/v1/arrangements/{internalId}/participants/search | Under development but stable.   Currently supports the following combinations:       (InternalId, IncludeParticipating, IncludeCancelled, IncludeOnWaitingList)   OR (InternalId, DebtorAccountNumbers)   OR (InternalId, DebtorAccountNumbers, ArrangementStartsAfter)   OR (InternalId, DebtorAccountNumbers, ArrangementStartsBefore)   OR (InternalId, DebtorAccountNumbers, ArrangementStartsAfter, ArrangementStartsBefore)
[**getArrangementQuestions**](ArrangementApi.md#getarrangementquestions) | **GET** /api/v1/arrangements/{internalId}/Questions | Gets the list of questions associated to the arrangement
[**getArrangementSearch**](ArrangementApi.md#getarrangementsearch) | **POST** /api/v1/arrangements/search | Gets arrangements by search criterias  When searching by custom fields it is necessary to provide only objects containing {\&quot;type\&quot;: {\&quot;identifier\&quot;: XX},\&quot;value\&quot;: \&quot;XX\&quot;}
[**getArrangementSections**](ArrangementApi.md#getarrangementsections) | **GET** /api/v1/arrangements/sections | Gets all Arrangement groups
[**getArrangementSubCategories**](ArrangementApi.md#getarrangementsubcategories) | **GET** /api/v1/arrangements/subCategories | Gets all Arrangement sub categories
[**getArrangementTracks**](ArrangementApi.md#getarrangementtracks) | **GET** /api/v1/arrangements/{InternalId}/Tracks | Gets tracks for an arrangment internalId
[**getArrangements**](ArrangementApi.md#getarrangements) | **GET** /api/v1/arrangements | Retrieves a paged result of arrangements with startdate after the given startsAfter date.
[**getArrangementsInSequence**](ArrangementApi.md#getarrangementsinsequence) | **GET** /api/v1/arrangements/sequence/{sequenceIdentification} | Retrieves a paged result of arrangements in a sequence with startdate after the given startsAfter date.
[**getCustomFieldValuesForArrangement**](ArrangementApi.md#getcustomfieldvaluesforarrangement) | **GET** /api/v1/arrangements/{internalId}/customFields/values | Retrieves a paged result of all CustomFieldValues for the arrangement with given internalId
[**getEventCrewCategories**](ArrangementApi.md#geteventcrewcategories) | **GET** /api/v1/arrangements/crewCategories | Get CrewCategories
[**getEventInvitationByArrangementInternalIdAndInvitationIdentification**](ArrangementApi.md#geteventinvitationbyarrangementinternalidandinvitationidentification) | **GET** /api/v1/arrangements/{internalId}/invitation/{identification} | Gets event invitation by the given event id and invitation code
[**getOrganizationsForCurrentAndFutureEvents**](ArrangementApi.md#getorganizationsforcurrentandfutureevents) | **GET** /api/v1/arrangements/currentAndFuture/organizations | Get a paged result of organizations that the current and future events belong to
[**getParticipantCategories**](ArrangementApi.md#getparticipantcategories) | **GET** /api/v1/arrangements/participantCategories | Gets Participant Categories.
[**getParticipantsCancelled**](ArrangementApi.md#getparticipantscancelled) | **GET** /api/v1/arrangements/{internalId}/participants/cancelled | Get a paged result of participants who are no longer enrolled in the arrangement
[**getParticipantsOnWaitingList**](ArrangementApi.md#getparticipantsonwaitinglist) | **GET** /api/v1/arrangements/{internalId}/participants/waitingList | Get a paged result of participants on waiting list in the arrangement
[**getSessions**](ArrangementApi.md#getsessions) | **GET** /api/v1/arrangements/{internalId}/Sessions | Returns all sessions for the conference
[**participantAllServicesApi**](ArrangementApi.md#participantallservicesapi) | **GET** /api/v1/arrangements/{internalId}/participantCategories/{participantCategoryId}/servicesAndSessionServices | Get all services including session services for the given debtorAccountNumber and participantCategoryId, that the participant is allowed to purchase.
[**participantApi**](ArrangementApi.md#participantapi) | **GET** /api/v1/arrangements/{internalId}/participants/{debtorAccountNumber} | Get a participant participating in the arrangement
[**participantEnrollmentApi**](ArrangementApi.md#participantenrollmentapi) | **POST** /api/v1/arrangements/{internalId}/participants | Enroll a list of participants (wrapped inside an enrollment object).  Include a Payment object if the enrollment should be registered as paid.
[**participantInvoicesApi**](ArrangementApi.md#participantinvoicesapi) | **GET** /api/v1/arrangements/{internalId}/participants/{debtorAccountNumber}/invoices | Get a paged result of a participants invoices, for the given arrangement.
[**participantPayEnrollmentApi**](ArrangementApi.md#participantpayenrollmentapi) | **POST** /api/v1/arrangements/{internalId}/participants/payment | FOR USE BY GROUPCARE ONLY! TAKES TOO MANY ASSUMPTIONS TO BE USED IN A GENERAL MANNER!
[**participantServicesApi**](ArrangementApi.md#participantservicesapi) | **GET** /api/v1/arrangements/{internalId}/participantCategories/{participantCategoryId}/services | Get services for the given debtorAccountNumber and participantCategoryId, that the participant is allowed to purchase.
[**participantsApi**](ArrangementApi.md#participantsapi) | **GET** /api/v1/arrangements/{internalId}/participants | Get a paged result of participants participating in the arrangement
[**patchAllowedParticipantCategory**](ArrangementApi.md#patchallowedparticipantcategory) | **PATCH** /api/v1/arrangements/{internalId}/allowedParticipantCategories/{id} | Updates a allowed participant category
[**patchArrangement**](ArrangementApi.md#patcharrangement) | **PATCH** /api/v1/arrangements/{internalId} | Patch an arrangement of type Course
[**patchArrangementCrew**](ArrangementApi.md#patcharrangementcrew) | **PATCH** /api/v1/arrangements/{internalId}/crew/{id} | 
[**patchArrangementHotel**](ArrangementApi.md#patcharrangementhotel) | **PATCH** /api/v1/arrangements/{internalId}/Hotels/{id} | 
[**patchArrangementParticipant**](ArrangementApi.md#patcharrangementparticipant) | **PATCH** /api/v1/arrangements/{internalId}/participants/{participantId} | Updates a participant
[**patchArrangementPlace**](ArrangementApi.md#patcharrangementplace) | **PATCH** /api/v1/arrangements/{internalId}/places/{id} | Updates a place
[**patchEventInvitation**](ArrangementApi.md#patcheventinvitation) | **PATCH** /api/v1/arrangements/{internalId}/invitation/{identification} | Updates status of an event invitation
[**patchEventParticipations**](ArrangementApi.md#patcheventparticipations) | **POST** /api/v1/arrangements/participants/addServices | Enrolls additional services to signed up event participations
[**patchServicesCancellation**](ArrangementApi.md#patchservicescancellation) | **PATCH** /api/v1/arrangements/{internalId}/services/cancellation | Updates a cancellation service
[**patchServicesCompanion**](ArrangementApi.md#patchservicescompanion) | **PATCH** /api/v1/arrangements/{internalId}/services/companion | Updates a companion service
[**patchServicesDiscount**](ArrangementApi.md#patchservicesdiscount) | **PATCH** /api/v1/arrangements/{internalId}/services/discount | Updates a discount service
[**patchServicesHotelRoom**](ArrangementApi.md#patchserviceshotelroom) | **PATCH** /api/v1/arrangements/{internalId}/services/hotelRoom | Updates a hotel room service
[**patchServicesRegular**](ArrangementApi.md#patchservicesregular) | **PATCH** /api/v1/arrangements/{internalId}/services/regular | Updates a regular service
[**patchServicesSessionsCompanion**](ArrangementApi.md#patchservicessessionscompanion) | **PATCH** /api/v1/arrangements/{internalId}/sessions/{sessionId}/services/companion | Updates a companion service
[**patchServicesSessionsRegular**](ArrangementApi.md#patchservicessessionsregular) | **PATCH** /api/v1/arrangements/{internalId}/sessions/{sessionId}/services/regular | Updates a regular service
[**patchServicesSubsidy**](ArrangementApi.md#patchservicessubsidy) | **PATCH** /api/v1/arrangements/{internalId}/services/subsidy | Updates a subsidy service
[**patchSession**](ArrangementApi.md#patchsession) | **PATCH** /api/v1/arrangements/{internalId}/sessions/{id} | Updates a Session
[**patchSessionTrack**](ArrangementApi.md#patchsessiontrack) | **PATCH** /api/v1/arrangements/{internalId}/tracks/{id} | Updates a SessionTrack
[**patchSessionsAllowedParticipantCategory**](ArrangementApi.md#patchsessionsallowedparticipantcategory) | **PATCH** /api/v1/arrangements/{internalId}/sessions/{sessionId}/allowedParticipantCategories/{id} | Updates a allowed participant category
[**postAllowedParticipantCategory**](ArrangementApi.md#postallowedparticipantcategory) | **POST** /api/v1/arrangements/{internalId}/allowedParticipantCategories | Adds an allowed participant category to the given arrangement
[**postArrangement**](ArrangementApi.md#postarrangement) | **POST** /api/v1/arrangements | Creates an arrangement
[**postArrangementAnswers**](ArrangementApi.md#postarrangementanswers) | **POST** /api/v1/arrangements/{internalId}/participant/{debtorAccountNumber}/answers | Post answers for a participant in a given arrangement
[**postArrangementAreas**](ArrangementApi.md#postarrangementareas) | **POST** /api/v1/arrangements/{internalId}/areas | Associates an ArrangementArea with an Arrangement. If Configuration AllowMultiSelectOnArea is false all other area associations is deleted first.
[**postArrangementCancellation**](ArrangementApi.md#postarrangementcancellation) | **POST** /api/v1/arrangements/{internalId}/cancellation | Cancel the arrangement
[**postArrangementCategories**](ArrangementApi.md#postarrangementcategories) | **POST** /api/v1/arrangements/{internalId}/categories | Associates an ArrangementCategory with an Arrangement. If Configuration AllowMultiSelectOnCategory is false all other category associations is deleted first.
[**postArrangementGroups**](ArrangementApi.md#postarrangementgroups) | **POST** /api/v1/arrangements/{internalId}/groups | Associates an ArrangementGroup with an Arrangement. If Configuration AllowMultiSelectOnGroup is false all other group associations is deleted first.
[**postArrangementHotel**](ArrangementApi.md#postarrangementhotel) | **POST** /api/v1/arrangements/{internalId}/Hotels | 
[**postArrangementNewSequence**](ArrangementApi.md#postarrangementnewsequence) | **POST** /api/v1/arrangements/sequence/{internalId} | 
[**postArrangementParticipantWorkListItem**](ArrangementApi.md#postarrangementparticipantworklistitem) | **POST** /api/v1/arrangements/{internalId}/participants/{debtorAccountNumber}/worklistItem | Will insert a worklist item with regards to the participation
[**postArrangementPlace**](ArrangementApi.md#postarrangementplace) | **POST** /api/v1/arrangements/{internalId}/places | Creates a place
[**postArrangementRegularService**](ArrangementApi.md#postarrangementregularservice) | **POST** /api/v1/arrangements/{internalId}/service | Adds a regular service to the given arrangement
[**postArrangementSequence**](ArrangementApi.md#postarrangementsequence) | **POST** /api/v1/arrangements/sequence/{sequenceIdentification}/{internalId} | 
[**postArrangementSubCategories**](ArrangementApi.md#postarrangementsubcategories) | **POST** /api/v1/arrangements/{internalId}/subCategories | Associates an ArrangementSubCategory with an Arrangement. If Configuration AllowMultiSelectOnSubCategory is false all other subcategory associations is deleted first.
[**postArrangementsByCustomFieldAndValue**](ArrangementApi.md#postarrangementsbycustomfieldandvalue) | **POST** /api/v1/arrangements/search/by/customField | Gets arrangements by customFieldValue.  Please provide an object containing:  {\&quot;type\&quot;: {\&quot;identifier\&quot;: XX},\&quot;value\&quot;: \&quot;XX\&quot;}
[**postCustomFieldValueForArrangement**](ArrangementApi.md#postcustomfieldvalueforarrangement) | **POST** /api/v1/arrangements/{internalId}/customFields/values | Takes a CustomFieldValue, and inserts it for the given arrangement internal id.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned
[**postEventCrew**](ArrangementApi.md#posteventcrew) | **POST** /api/v1/arrangements/{internalId}/crew | Adds a new member to the crew
[**postParticipantAttendance**](ArrangementApi.md#postparticipantattendance) | **POST** /api/v1/arrangements/{internalId}/participants/{participantId}/attendance | Set attendance for a Participant for the arrangement
[**postParticipantCancellation**](ArrangementApi.md#postparticipantcancellation) | **POST** /api/v1/arrangements/{internalId}/participants/{participantId}/cancellation | Cancel participation of a Participant for all participations on the arrangement
[**postParticipantServices**](ArrangementApi.md#postparticipantservices) | **POST** /api/v1/arrangements/{internalId}/participants/{participantId}/services | Adds a service to a participant
[**postParticipantSession**](ArrangementApi.md#postparticipantsession) | **POST** /api/v1/arrangements/{internalId}/participants/{participantId}/sessions | Associates a Participant with a Session
[**postParticipantSessionServices**](ArrangementApi.md#postparticipantsessionservices) | **POST** /api/v1/arrangements/{internalId}/participants/{participantId}/sessions/{sessionId}/services | Adds a service to a participant on a specific session
[**postParticipantSessionsCancellation**](ArrangementApi.md#postparticipantsessionscancellation) | **POST** /api/v1/arrangements/{internalId}/participants/{participantId}/sessions/{sessionId}/cancellation | Cancel participation of a participant for the given session
[**postServicesCancellation**](ArrangementApi.md#postservicescancellation) | **POST** /api/v1/arrangements/{internalId}/services/cancellation | Creates a cancellation service
[**postServicesCompanion**](ArrangementApi.md#postservicescompanion) | **POST** /api/v1/arrangements/{internalId}/services/companion | Creates a companion service
[**postServicesDiscount**](ArrangementApi.md#postservicesdiscount) | **POST** /api/v1/arrangements/{internalId}/services/discount | Creates a discount service
[**postServicesHotelRoom**](ArrangementApi.md#postserviceshotelroom) | **POST** /api/v1/arrangements/{internalId}/services/hotelRoom | Creates a hotel room service
[**postServicesRegular**](ArrangementApi.md#postservicesregular) | **POST** /api/v1/arrangements/{internalId}/services/regular | Creates a regular service
[**postServicesSessionsCompanion**](ArrangementApi.md#postservicessessionscompanion) | **POST** /api/v1/arrangements/{internalId}/sessions/{sessionId}/services/companion | Creates a companion service for the given Session
[**postServicesSessionsRegular**](ArrangementApi.md#postservicessessionsregular) | **POST** /api/v1/arrangements/{internalId}/sessions/{sessionId}/services/regular | Creates a regular service for the given Session
[**postServicesSubsidy**](ArrangementApi.md#postservicessubsidy) | **POST** /api/v1/arrangements/{internalId}/services/subsidy | Creates a subsidy service
[**postSession**](ArrangementApi.md#postsession) | **POST** /api/v1/arrangements/{internalId}/sessions | Creates a Session
[**postSessionTrack**](ArrangementApi.md#postsessiontrack) | **POST** /api/v1/arrangements/{internalId}/tracks | Creates a SessionTrack
[**postSessionsAllowedParticipantCategory**](ArrangementApi.md#postsessionsallowedparticipantcategory) | **POST** /api/v1/arrangements/{internalId}/sessions/{sessionId}/allowedParticipantCategories | Creates a allowed participant category
[**putAllowedParticipantCategory**](ArrangementApi.md#putallowedparticipantcategory) | **PUT** /api/v1/arrangements/{internalId}/allowedParticipantCategories/{id} | Updates a allowed participant category
[**putArrangement**](ArrangementApi.md#putarrangement) | **PUT** /api/v1/arrangements/{internalId} | Patch an arrangement of type Course
[**putArrangementHotel**](ArrangementApi.md#putarrangementhotel) | **PUT** /api/v1/arrangements/{internalId}/Hotels/{id} | 
[**putArrangementParticipant**](ArrangementApi.md#putarrangementparticipant) | **PUT** /api/v1/arrangements/{internalId}/participants/{participantId} | Updates a participant
[**putArrangementPlace**](ArrangementApi.md#putarrangementplace) | **PUT** /api/v1/arrangements/{internalId}/places/{id} | Updates a place
[**putServicesCancellation**](ArrangementApi.md#putservicescancellation) | **PUT** /api/v1/arrangements/{internalId}/services/cancellation | Updates a cancellation service
[**putServicesCompanion**](ArrangementApi.md#putservicescompanion) | **PUT** /api/v1/arrangements/{internalId}/services/companion | Updates a companion service
[**putServicesDiscount**](ArrangementApi.md#putservicesdiscount) | **PUT** /api/v1/arrangements/{internalId}/services/discount | Updates a discount service
[**putServicesHotelRoom**](ArrangementApi.md#putserviceshotelroom) | **PUT** /api/v1/arrangements/{internalId}/services/hotelRoom | Updates a hotel room service
[**putServicesRegular**](ArrangementApi.md#putservicesregular) | **PUT** /api/v1/arrangements/{internalId}/services/regular | Updates a regular service
[**putServicesSessionsCompanion**](ArrangementApi.md#putservicessessionscompanion) | **PUT** /api/v1/arrangements/{internalId}/sessions/{sessionId}/services/companion | Updates a companion service
[**putServicesSessionsRegular**](ArrangementApi.md#putservicessessionsregular) | **PUT** /api/v1/arrangements/{internalId}/sessions/{sessionId}/services/regular | Updates a regular service
[**putServicesSubsidy**](ArrangementApi.md#putservicessubsidy) | **PUT** /api/v1/arrangements/{internalId}/services/subsidy | Updates a subsidy service
[**putSession**](ArrangementApi.md#putsession) | **PUT** /api/v1/arrangements/{internalId}/sessions/{id} | Updates a Session
[**putSessionTrack**](ArrangementApi.md#putsessiontrack) | **PUT** /api/v1/arrangements/{internalId}/tracks/{id} | Updates a SessionTrack
[**putSessionsAllowedParticipantCategory**](ArrangementApi.md#putsessionsallowedparticipantcategory) | **PUT** /api/v1/arrangements/{internalId}/sessions/{sessionId}/allowedParticipantCategories/{id} | Updates a allowed participant category

# **allowedParticipantCategoriesApi**
> \Membercare\Client\Model\AllowedParticipantCategoryPagedResult allowedParticipantCategoriesApi($internal_id, $token, $debtor_account_number, $page, $page_size)

Get allowed participant categories of the arrangement, for the given person.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->allowedParticipantCategoriesApi($internal_id, $token, $debtor_account_number, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->allowedParticipantCategoriesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategoryPagedResult**](../Model/AllowedParticipantCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allowedParticipantCategoriesByEnroller**
> \Membercare\Client\Model\AllowedParticipantCategoryPagedResult allowedParticipantCategoriesByEnroller($internal_id, $token, $debtor_account_number, $enroller_debtor_account_number, $page, $page_size)

Get allowed participant categories of the arrangement, for the given person.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$enroller_debtor_account_number = "enroller_debtor_account_number_example"; // string | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->allowedParticipantCategoriesByEnroller($internal_id, $token, $debtor_account_number, $enroller_debtor_account_number, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->allowedParticipantCategoriesByEnroller: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  | [optional]
 **enroller_debtor_account_number** | **string**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategoryPagedResult**](../Model/AllowedParticipantCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ArrangementsInternalIdParticipantCategoriesGet**
> \Membercare\Client\Model\AllowedParticipantCategoryPagedResult apiV1ArrangementsInternalIdParticipantCategoriesGet($internal_id, $token, $debtor_account_number, $page, $page_size)

Get allowed participant categories of the arrangement, for the given person.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->apiV1ArrangementsInternalIdParticipantCategoriesGet($internal_id, $token, $debtor_account_number, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->apiV1ArrangementsInternalIdParticipantCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **debtor_account_number** | **string**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategoryPagedResult**](../Model/AllowedParticipantCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ArrangementsInternalIdParticipantCategoriesIdPatch**
> \Membercare\Client\Model\AllowedParticipantCategory apiV1ArrangementsInternalIdParticipantCategoriesIdPatch($token, $internal_id, $id, $body)

Updates a allowed participant category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\AllowedParticipantCategoryPatch(); // \Membercare\Client\Model\AllowedParticipantCategoryPatch | 

try {
    $result = $apiInstance->apiV1ArrangementsInternalIdParticipantCategoriesIdPatch($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->apiV1ArrangementsInternalIdParticipantCategoriesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategoryPatch**](../Model/AllowedParticipantCategoryPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ArrangementsInternalIdParticipantCategoriesIdPut**
> \Membercare\Client\Model\AllowedParticipantCategory apiV1ArrangementsInternalIdParticipantCategoriesIdPut($token, $internal_id, $id, $body)

Updates a allowed participant category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\AllowedParticipantCategoryPut(); // \Membercare\Client\Model\AllowedParticipantCategoryPut | 

try {
    $result = $apiInstance->apiV1ArrangementsInternalIdParticipantCategoriesIdPut($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->apiV1ArrangementsInternalIdParticipantCategoriesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategoryPut**](../Model/AllowedParticipantCategoryPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ArrangementsInternalIdParticipantCategoryIdDelete**
> apiV1ArrangementsInternalIdParticipantCategoryIdDelete($internal_id, $id, $token)

Removes an allowed participant category from the given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | Internal id of the arrangement
$id = 789; // int | Id of the AllowedParticipantCateogry
$token = "token_example"; // string | access token

try {
    $apiInstance->apiV1ArrangementsInternalIdParticipantCategoryIdDelete($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->apiV1ArrangementsInternalIdParticipantCategoryIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| Internal id of the arrangement |
 **id** | **int**| Id of the AllowedParticipantCateogry |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ArrangementsInternalIdParticipantCategoryPost**
> \Membercare\Client\Model\AllowedParticipantCategory apiV1ArrangementsInternalIdParticipantCategoryPost($token, $internal_id, $body)

Adds an allowed participant category to the given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | Internal id of the arrangement
$body = new \Membercare\Client\Model\AllowedParticipantCategory(); // \Membercare\Client\Model\AllowedParticipantCategory | 

try {
    $result = $apiInstance->apiV1ArrangementsInternalIdParticipantCategoryPost($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->apiV1ArrangementsInternalIdParticipantCategoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**| Internal id of the arrangement |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculateBestPriceServiceToEnroll**
> \Membercare\Client\Model\TransactionPagedResult calculateBestPriceServiceToEnroll($token, $internal_id, $body, $page, $page_size)

Get the set of calculated transactions with the best price from a list of serviceToEnroll. If you send more than one Discount/Subsidy, we will find the cheapest combination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | Used to verify that the services belongs to this
$body = array(new \Membercare\Client\Model\ServiceToEnroll()); // \Membercare\Client\Model\ServiceToEnroll[] | The list of serviceToEnroll
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->calculateBestPriceServiceToEnroll($token, $internal_id, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->calculateBestPriceServiceToEnroll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**| Used to verify that the services belongs to this |
 **body** | [**\Membercare\Client\Model\ServiceToEnroll[]**](../Model/ServiceToEnroll.md)| The list of serviceToEnroll | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\TransactionPagedResult**](../Model/TransactionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculateServiceToEnrollApi**
> \Membercare\Client\Model\TransactionPagedResult calculateServiceToEnrollApi($token, $internal_id, $body, $page, $page_size)

Get calculated transactions from a list of serviceToEnroll.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | Used to verify that the services belongs to this
$body = array(new \Membercare\Client\Model\ServiceToEnroll()); // \Membercare\Client\Model\ServiceToEnroll[] | The list of serviceToEnroll
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->calculateServiceToEnrollApi($token, $internal_id, $body, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->calculateServiceToEnrollApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**| Used to verify that the services belongs to this |
 **body** | [**\Membercare\Client\Model\ServiceToEnroll[]**](../Model/ServiceToEnroll.md)| The list of serviceToEnroll | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\TransactionPagedResult**](../Model/TransactionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancellationReasonsApi**
> \Membercare\Client\Model\CancellationReasonPagedResult cancellationReasonsApi($token, $page, $page_size)

Gets all valid cancellation reasons

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->cancellationReasonsApi($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->cancellationReasonsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\CancellationReasonPagedResult**](../Model/CancellationReasonPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllowedParticipantCategoryFromSession**
> deleteAllowedParticipantCategoryFromSession($internal_id, $session_id, $id, $token)

Removes an allowed participant category from the given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$id = 789; // int | Allowed participnatcategory id
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteAllowedParticipantCategoryFromSession($internal_id, $session_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteAllowedParticipantCategoryFromSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **id** | **int**| Allowed participnatcategory id |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArrangementAreas**
> deleteArrangementAreas($internal_id, $id, $token)

Deletes an association between an ArrangementArea and an Arrangement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementAreas($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteArrangementCategories**
> deleteArrangementCategories($internal_id, $id, $token)

Deletes an association between an ArrangementCategory and an Arrangement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementCategories($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteArrangementGroups**
> deleteArrangementGroups($internal_id, $id, $token)

Deletes an association between an ArrangementGroup and an Arrangement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementGroups($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteArrangementHotel**
> deleteArrangementHotel($internal_id, $id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementHotel($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementHotel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteArrangementPlaces**
> deleteArrangementPlaces($internal_id, $id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementPlaces($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementPlaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteArrangementSequence**
> \Membercare\Client\Model\EventModuleInfo deleteArrangementSequence($sequence_identification, $internal_id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence_identification = 789; // int | 
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->deleteArrangementSequence($sequence_identification, $internal_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence_identification** | **int**|  |
 **internal_id** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\EventModuleInfo**](../Model/EventModuleInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArrangementServices**
> deleteArrangementServices($internal_id, $id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementServices($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteArrangementSessionsService**
> deleteArrangementSessionsService($internal_id, $session_id, $id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | Session id
$id = 789; // int | Service id
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementSessionsService($internal_id, $session_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementSessionsService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **session_id** | **int**| Session id |
 **id** | **int**| Service id |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArrangementSubCategories**
> deleteArrangementSubCategories($internal_id, $id, $token)

Deletes an association between an ArrangementSubCategory and an Arrangement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementSubCategories($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementSubCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteArrangementTransactionParticipantService**
> deleteArrangementTransactionParticipantService($internal_id, $participant_id, $id, $token)

Delete course transaction from arrangment based on participant and service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteArrangementTransactionParticipantService($internal_id, $participant_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteArrangementTransactionParticipantService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
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

# **deleteEventCrew**
> deleteEventCrew($internal_id, $id, $token)

Removes a member from the crew

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteEventCrew($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteEventCrew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **deleteParticipantCategory**
> deleteParticipantCategory($internal_id, $id, $token)

Removes an allowed participant category from the given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | Internal id of the arrangement
$id = 789; // int | Id of the AllowedParticipantCateogry
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteParticipantCategory($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteParticipantCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| Internal id of the arrangement |
 **id** | **int**| Id of the AllowedParticipantCateogry |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSession**
> deleteSession($internal_id, $id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | Internal id of the arrangement
$id = 789; // int | Session id
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteSession($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| Internal id of the arrangement |
 **id** | **int**| Session id |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSessionServiceCourseTransaction**
> deleteSessionServiceCourseTransaction($internal_id, $session_id, $service_id, $participant_id, $token)

Deletes a course transaction from a service attached to a specifik participant who participates in a specific session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$service_id = 789; // int | 
$participant_id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteSessionServiceCourseTransaction($internal_id, $session_id, $service_id, $participant_id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteSessionServiceCourseTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **service_id** | **int**|  |
 **participant_id** | **int**|  |
 **token** | **string**| access token |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSessionTrack**
> deleteSessionTrack($internal_id, $id, $token)

Deletes a SessionTrack

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$token = "token_example"; // string | access token

try {
    $apiInstance->deleteSessionTrack($internal_id, $id, $token);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->deleteSessionTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
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

# **getAllowedParticipantCategoryFromSession**
> \Membercare\Client\Model\AllowedParticipantCategoryPagedResult getAllowedParticipantCategoryFromSession($internal_id, $session_id, $token, $page, $page_size)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getAllowedParticipantCategoryFromSession($internal_id, $session_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getAllowedParticipantCategoryFromSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategoryPagedResult**](../Model/AllowedParticipantCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangement**
> \Membercare\Client\Model\Arrangement getArrangement($internal_id, $token)

Get a specific arrangement by it's InternalId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangement($internal_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Arrangement**](../Model/Arrangement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementAreas**
> \Membercare\Client\Model\ArrangementArea[] getArrangementAreas($token)

Gets all Arrangement areas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangementAreas($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ArrangementArea[]**](../Model/ArrangementArea.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementCategories**
> \Membercare\Client\Model\ArrangementCategory[] getArrangementCategories($token)

Gets all Arrangement categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangementCategories($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ArrangementCategory[]**](../Model/ArrangementCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementCrew**
> \Membercare\Client\Model\EventCrewPagedResult getArrangementCrew($internal_id, $token, $page, $page_size)

Gets an Arrangment's crew members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementCrew($internal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementCrew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\EventCrewPagedResult**](../Model/EventCrewPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementGroups**
> \Membercare\Client\Model\ArrangementGroup[] getArrangementGroups($token)

Gets all Arrangement groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangementGroups($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ArrangementGroup[]**](../Model/ArrangementGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementHotels**
> \Membercare\Client\Model\HotelPagedResult getArrangementHotels($internal_id, $token, $page, $page_size)

Gets hotels for an arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementHotels($internal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementHotels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\HotelPagedResult**](../Model/HotelPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementNotifications**
> \Membercare\Client\Model\ArrangementNotificationMessage[] getArrangementNotifications($token, $internal_id, $body, $include_body)

Get notifications of a given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = array(new \Membercare\Client\Model\NotificationType()); // \Membercare\Client\Model\NotificationType[] | List of NotificationType to look for in the event
$include_body = true; // bool | Whethere the returned notifications should include content of the body

try {
    $result = $apiInstance->getArrangementNotifications($token, $internal_id, $body, $include_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\NotificationType[]**](../Model/NotificationType.md)| List of NotificationType to look for in the event | [optional]
 **include_body** | **bool**| Whethere the returned notifications should include content of the body | [optional]

### Return type

[**\Membercare\Client\Model\ArrangementNotificationMessage[]**](../Model/ArrangementNotificationMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementPLaces**
> \Membercare\Client\Model\PlacePagedResult getArrangementPLaces($internal_id, $token, $page, $page_size)

Gets an arrangement's places

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementPLaces($internal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementPLaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\PlacePagedResult**](../Model/PlacePagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementParticipantsByGlobalSearch**
> \Membercare\Client\Model\ParticipantPagedResult getArrangementParticipantsByGlobalSearch($token, $body, $include_transactions, $page, $page_size)

Under development but stable.   Currently supports the following combinations:       (IncludeCancelled)           OR (ArrangementStartsAfter, ArrangementStartsBefore)   OR (RepresentersDebtorAccountNumbers)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ParticipantSearchCriteria(); // \Membercare\Client\Model\ParticipantSearchCriteria | 
$include_transactions = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementParticipantsByGlobalSearch($token, $body, $include_transactions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementParticipantsByGlobalSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ParticipantSearchCriteria**](../Model/ParticipantSearchCriteria.md)|  | [optional]
 **include_transactions** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ParticipantPagedResult**](../Model/ParticipantPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementParticipantsBySearch**
> \Membercare\Client\Model\ParticipantPagedResult getArrangementParticipantsBySearch($token, $internal_id, $body, $include_transactions, $page, $page_size)

Under development but stable.   Currently supports the following combinations:       (InternalId, IncludeParticipating, IncludeCancelled, IncludeOnWaitingList)   OR (InternalId, DebtorAccountNumbers)   OR (InternalId, DebtorAccountNumbers, ArrangementStartsAfter)   OR (InternalId, DebtorAccountNumbers, ArrangementStartsBefore)   OR (InternalId, DebtorAccountNumbers, ArrangementStartsAfter, ArrangementStartsBefore)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ParticipantSearchCriteria(); // \Membercare\Client\Model\ParticipantSearchCriteria | 
$include_transactions = false; // bool | Indicates whether or not to include transactions.
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementParticipantsBySearch($token, $internal_id, $body, $include_transactions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementParticipantsBySearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ParticipantSearchCriteria**](../Model/ParticipantSearchCriteria.md)|  | [optional]
 **include_transactions** | **bool**| Indicates whether or not to include transactions. | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ParticipantPagedResult**](../Model/ParticipantPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementQuestions**
> \Membercare\Client\Model\QuestionForEnrollmentPagedResult getArrangementQuestions($internal_id, $token, $page, $page_size)

Gets the list of questions associated to the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementQuestions($internal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\QuestionForEnrollmentPagedResult**](../Model/QuestionForEnrollmentPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementSearch**
> \Membercare\Client\Model\ArrangementPagedResult getArrangementSearch($token, $body, $include_services, $include_texts, $page, $page_size)

Gets arrangements by search criterias  When searching by custom fields it is necessary to provide only objects containing {\"type\": {\"identifier\": XX},\"value\": \"XX\"}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ArrangementSearchCriteria(); // \Membercare\Client\Model\ArrangementSearchCriteria | 
$include_services = false; // bool | 
$include_texts = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementSearch($token, $body, $include_services, $include_texts, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ArrangementSearchCriteria**](../Model/ArrangementSearchCriteria.md)|  | [optional]
 **include_services** | **bool**|  | [optional] [default to false]
 **include_texts** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ArrangementPagedResult**](../Model/ArrangementPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementSections**
> \Membercare\Client\Model\ArrangementGroup[] getArrangementSections($token)

Gets all Arrangement groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangementSections($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ArrangementGroup[]**](../Model/ArrangementGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementSubCategories**
> \Membercare\Client\Model\ArrangementSubCategory[] getArrangementSubCategories($token)

Gets all Arrangement sub categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getArrangementSubCategories($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementSubCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\ArrangementSubCategory[]**](../Model/ArrangementSubCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementTracks**
> \Membercare\Client\Model\SessionTrackPagedResult getArrangementTracks($internal_id, $token, $page, $page_size)

Gets tracks for an arrangment internalId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementTracks($internal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementTracks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SessionTrackPagedResult**](../Model/SessionTrackPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangements**
> \Membercare\Client\Model\ArrangementPagedResult getArrangements($token, $starts_after, $include_services, $include_non_enrollable, $include_texts, $include_recurrences, $page, $page_size)

Retrieves a paged result of arrangements with startdate after the given startsAfter date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$starts_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date that is used to get arrangements with a startdate >= startsAfter
$include_services = false; // bool | include all services the arrangements have, including hotel services/rooms.
$include_non_enrollable = true; // bool | Indicates whether or not to include non enrollable. Non enrollable arrangements is arrangements where the EnrollBefore date is smaller than todays date.
$include_texts = true; // bool | It is recommended to lazy load these if possible - they may contain large images
$include_recurrences = false; // bool | By default only the first occurence of a recurring course is included
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangements($token, $starts_after, $include_services, $include_non_enrollable, $include_texts, $include_recurrences, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **starts_after** | **\DateTime**| The date that is used to get arrangements with a startdate &gt;&#x3D; startsAfter | [optional]
 **include_services** | **bool**| include all services the arrangements have, including hotel services/rooms. | [optional] [default to false]
 **include_non_enrollable** | **bool**| Indicates whether or not to include non enrollable. Non enrollable arrangements is arrangements where the EnrollBefore date is smaller than todays date. | [optional] [default to true]
 **include_texts** | **bool**| It is recommended to lazy load these if possible - they may contain large images | [optional] [default to true]
 **include_recurrences** | **bool**| By default only the first occurence of a recurring course is included | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ArrangementPagedResult**](../Model/ArrangementPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArrangementsInSequence**
> \Membercare\Client\Model\ArrangementPagedResult getArrangementsInSequence($sequence_identification, $token, $starts_after, $include_services, $page, $page_size)

Retrieves a paged result of arrangements in a sequence with startdate after the given startsAfter date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence_identification = 789; // int | 
$token = "token_example"; // string | access token
$starts_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The date that is used to get arrangements with a startdate >= startsAfter
$include_services = false; // bool | include all services the arrangements have, including hotel services/rooms.
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getArrangementsInSequence($sequence_identification, $token, $starts_after, $include_services, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getArrangementsInSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence_identification** | **int**|  |
 **token** | **string**| access token |
 **starts_after** | **\DateTime**| The date that is used to get arrangements with a startdate &gt;&#x3D; startsAfter | [optional]
 **include_services** | **bool**| include all services the arrangements have, including hotel services/rooms. | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ArrangementPagedResult**](../Model/ArrangementPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldValuesForArrangement**
> \Membercare\Client\Model\CustomFieldValuePagedResult getCustomFieldValuesForArrangement($internal_id, $token, $page, $page_size)

Retrieves a paged result of all CustomFieldValues for the arrangement with given internalId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | DebtorAccountNumber
$token = "token_example"; // string | access token
$page = 1; // int | Optional, represents the page you wish to see.
$page_size = 50; // int | Optional, represents the amount of invoices to display per paged result.

try {
    $result = $apiInstance->getCustomFieldValuesForArrangement($internal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getCustomFieldValuesForArrangement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| DebtorAccountNumber |
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

# **getEventCrewCategories**
> \Membercare\Client\Model\EventCrewCategoryPagedResult getEventCrewCategories($token, $page, $page_size)

Get CrewCategories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getEventCrewCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getEventCrewCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\EventCrewCategoryPagedResult**](../Model/EventCrewCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventInvitationByArrangementInternalIdAndInvitationIdentification**
> \Membercare\Client\Model\EventInvitation getEventInvitationByArrangementInternalIdAndInvitationIdentification($internal_id, $identification, $token)

Gets event invitation by the given event id and invitation code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$identification = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->getEventInvitationByArrangementInternalIdAndInvitationIdentification($internal_id, $identification, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getEventInvitationByArrangementInternalIdAndInvitationIdentification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **identification** | [**string**](../Model/.md)|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\EventInvitation**](../Model/EventInvitation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationsForCurrentAndFutureEvents**
> \Membercare\Client\Model\SimpleOrganizationPagedResult getOrganizationsForCurrentAndFutureEvents($token, $only_web_enabled, $page, $page_size)

Get a paged result of organizations that the current and future events belong to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$only_web_enabled = true; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getOrganizationsForCurrentAndFutureEvents($token, $only_web_enabled, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getOrganizationsForCurrentAndFutureEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **only_web_enabled** | **bool**|  | [optional]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SimpleOrganizationPagedResult**](../Model/SimpleOrganizationPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParticipantCategories**
> \Membercare\Client\Model\ParticipantCategoryPagedResult getParticipantCategories($token, $page, $page_size)

Gets Participant Categories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getParticipantCategories($token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getParticipantCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ParticipantCategoryPagedResult**](../Model/ParticipantCategoryPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParticipantsCancelled**
> \Membercare\Client\Model\ParticipantPagedResult getParticipantsCancelled($internal_id, $token, $include_answers, $include_transactions, $page, $page_size)

Get a paged result of participants who are no longer enrolled in the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | The internalId of the arrangement.
$token = "token_example"; // string | access token
$include_answers = true; // bool | 
$include_transactions = false; // bool | Indicates whether or not to include transactions.
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getParticipantsCancelled($internal_id, $token, $include_answers, $include_transactions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getParticipantsCancelled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| The internalId of the arrangement. |
 **token** | **string**| access token |
 **include_answers** | **bool**|  | [optional]
 **include_transactions** | **bool**| Indicates whether or not to include transactions. | [optional] [default to false]
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

# **getParticipantsOnWaitingList**
> \Membercare\Client\Model\ParticipantPagedResult getParticipantsOnWaitingList($internal_id, $token, $include_answers, $include_transactions, $page, $page_size)

Get a paged result of participants on waiting list in the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | The internalId of the arrangement.
$token = "token_example"; // string | access token
$include_answers = true; // bool | 
$include_transactions = false; // bool | Indicates whether or not to include transactions.
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getParticipantsOnWaitingList($internal_id, $token, $include_answers, $include_transactions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getParticipantsOnWaitingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| The internalId of the arrangement. |
 **token** | **string**| access token |
 **include_answers** | **bool**|  | [optional]
 **include_transactions** | **bool**| Indicates whether or not to include transactions. | [optional] [default to false]
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

# **getSessions**
> \Membercare\Client\Model\SessionPagedResult getSessions($internal_id, $token, $page, $page_size)

Returns all sessions for the conference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->getSessions($internal_id, $token, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->getSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\SessionPagedResult**](../Model/SessionPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **participantAllServicesApi**
> \Membercare\Client\Model\ParticipantServiceSet participantAllServicesApi($internal_id, $participant_category_id, $token, $debtor_account_number)

Get all services including session services for the given debtorAccountNumber and participantCategoryId, that the participant is allowed to purchase.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | The internalId of the arrangement.
$participant_category_id = 789; // int | The participantCategroyId chosen by the participating person.
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the participating person.

try {
    $result = $apiInstance->participantAllServicesApi($internal_id, $participant_category_id, $token, $debtor_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->participantAllServicesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| The internalId of the arrangement. |
 **participant_category_id** | **int**| The participantCategroyId chosen by the participating person. |
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtorAccountNumber of the participating person. | [optional]

### Return type

[**\Membercare\Client\Model\ParticipantServiceSet**](../Model/ParticipantServiceSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **participantApi**
> \Membercare\Client\Model\Participant participantApi($internal_id, $debtor_account_number, $token, $include_answers, $include_transactions)

Get a participant participating in the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token
$include_answers = true; // bool | 
$include_transactions = false; // bool | 

try {
    $result = $apiInstance->participantApi($internal_id, $debtor_account_number, $token, $include_answers, $include_transactions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->participantApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |
 **include_answers** | **bool**|  | [optional]
 **include_transactions** | **bool**|  | [optional] [default to false]

### Return type

[**\Membercare\Client\Model\Participant**](../Model/Participant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **participantEnrollmentApi**
> \Membercare\Client\Model\EnrollmentReceipt participantEnrollmentApi($token, $internal_id, $body)

Enroll a list of participants (wrapped inside an enrollment object).  Include a Payment object if the enrollment should be registered as paid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | The arrangement that the participant(s) should be enrolled to
$body = new \Membercare\Client\Model\Enrollment(); // \Membercare\Client\Model\Enrollment | An complex object with infomation about the payer and payment
            and a list of participants to enroll.

try {
    $result = $apiInstance->participantEnrollmentApi($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->participantEnrollmentApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**| The arrangement that the participant(s) should be enrolled to |
 **body** | [**\Membercare\Client\Model\Enrollment**](../Model/Enrollment.md)| An complex object with infomation about the payer and payment
            and a list of participants to enroll. | [optional]

### Return type

[**\Membercare\Client\Model\EnrollmentReceipt**](../Model/EnrollmentReceipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **participantInvoicesApi**
> \Membercare\Client\Model\Invoice[] participantInvoicesApi($internal_id, $debtor_account_number, $token)

Get a paged result of a participants invoices, for the given arrangement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$debtor_account_number = "debtor_account_number_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->participantInvoicesApi($internal_id, $debtor_account_number, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->participantInvoicesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **debtor_account_number** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\Invoice[]**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **participantPayEnrollmentApi**
> \Membercare\Client\Model\Payment participantPayEnrollmentApi($token, $internal_id, $body)

FOR USE BY GROUPCARE ONLY! TAKES TOO MANY ASSUMPTIONS TO BE USED IN A GENERAL MANNER!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\EnrollPayment(); // \Membercare\Client\Model\EnrollPayment | 

try {
    $result = $apiInstance->participantPayEnrollmentApi($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->participantPayEnrollmentApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\EnrollPayment**](../Model/EnrollPayment.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **participantServicesApi**
> \Membercare\Client\Model\ServiceSet participantServicesApi($internal_id, $participant_category_id, $token, $debtor_account_number)

Get services for the given debtorAccountNumber and participantCategoryId, that the participant is allowed to purchase.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | The internalId of the arrangement.
$participant_category_id = 789; // int | The participantCategroyId chosen by the participating person.
$token = "token_example"; // string | access token
$debtor_account_number = "debtor_account_number_example"; // string | The debtorAccountNumber of the participating person.

try {
    $result = $apiInstance->participantServicesApi($internal_id, $participant_category_id, $token, $debtor_account_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->participantServicesApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| The internalId of the arrangement. |
 **participant_category_id** | **int**| The participantCategroyId chosen by the participating person. |
 **token** | **string**| access token |
 **debtor_account_number** | **string**| The debtorAccountNumber of the participating person. | [optional]

### Return type

[**\Membercare\Client\Model\ServiceSet**](../Model/ServiceSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **participantsApi**
> \Membercare\Client\Model\ParticipantPagedResult participantsApi($internal_id, $token, $include_answers, $include_transactions, $page, $page_size)

Get a paged result of participants participating in the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | The internalId of the arrangement.
$token = "token_example"; // string | access token
$include_answers = true; // bool | Whether answers should be included
$include_transactions = false; // bool | Indicates whether or not to include transactions.
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->participantsApi($internal_id, $token, $include_answers, $include_transactions, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->participantsApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**| The internalId of the arrangement. |
 **token** | **string**| access token |
 **include_answers** | **bool**| Whether answers should be included | [optional]
 **include_transactions** | **bool**| Indicates whether or not to include transactions. | [optional] [default to false]
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

# **patchAllowedParticipantCategory**
> \Membercare\Client\Model\AllowedParticipantCategory patchAllowedParticipantCategory($token, $internal_id, $id, $body)

Updates a allowed participant category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\AllowedParticipantCategoryPatch(); // \Membercare\Client\Model\AllowedParticipantCategoryPatch | 

try {
    $result = $apiInstance->patchAllowedParticipantCategory($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchAllowedParticipantCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategoryPatch**](../Model/AllowedParticipantCategoryPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchArrangement**
> \Membercare\Client\Model\Arrangement patchArrangement($token, $internal_id, $body)

Patch an arrangement of type Course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ArrangementPatch(); // \Membercare\Client\Model\ArrangementPatch | 

try {
    $result = $apiInstance->patchArrangement($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchArrangement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ArrangementPatch**](../Model/ArrangementPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Arrangement**](../Model/Arrangement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchArrangementCrew**
> \Membercare\Client\Model\EventCrew patchArrangementCrew($token, $internal_id, $id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\EventCrewPatch(); // \Membercare\Client\Model\EventCrewPatch | 

try {
    $result = $apiInstance->patchArrangementCrew($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchArrangementCrew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\EventCrewPatch**](../Model/EventCrewPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\EventCrew**](../Model/EventCrew.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchArrangementHotel**
> \Membercare\Client\Model\Hotel patchArrangementHotel($token, $internal_id, $id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\HotelPatch(); // \Membercare\Client\Model\HotelPatch | 

try {
    $result = $apiInstance->patchArrangementHotel($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchArrangementHotel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\HotelPatch**](../Model/HotelPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Hotel**](../Model/Hotel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchArrangementParticipant**
> \Membercare\Client\Model\Participant patchArrangementParticipant($token, $internal_id, $participant_id, $body)

Updates a participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$body = new \Membercare\Client\Model\ParticipantPatch(); // \Membercare\Client\Model\ParticipantPatch | 

try {
    $result = $apiInstance->patchArrangementParticipant($token, $internal_id, $participant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchArrangementParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ParticipantPatch**](../Model/ParticipantPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Participant**](../Model/Participant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchArrangementPlace**
> \Membercare\Client\Model\Place patchArrangementPlace($token, $internal_id, $id, $body)

Updates a place

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\PlacePatch(); // \Membercare\Client\Model\PlacePatch | 

try {
    $result = $apiInstance->patchArrangementPlace($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchArrangementPlace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PlacePatch**](../Model/PlacePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Place**](../Model/Place.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchEventInvitation**
> \Membercare\Client\Model\EventInvitation patchEventInvitation($token, $internal_id, $identification, $body)

Updates status of an event invitation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$identification = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$body = new \Membercare\Client\Model\EventInvitationPatch(); // \Membercare\Client\Model\EventInvitationPatch | 

try {
    $result = $apiInstance->patchEventInvitation($token, $internal_id, $identification, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchEventInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **identification** | [**string**](../Model/.md)|  |
 **body** | [**\Membercare\Client\Model\EventInvitationPatch**](../Model/EventInvitationPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\EventInvitation**](../Model/EventInvitation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchEventParticipations**
> \Membercare\Client\Model\EnrollmentReceipt patchEventParticipations($token, $body)

Enrolls additional services to signed up event participations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ParticipantToEnroll(); // \Membercare\Client\Model\ParticipantToEnroll | Participant to enroll

try {
    $result = $apiInstance->patchEventParticipations($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchEventParticipations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ParticipantToEnroll**](../Model/ParticipantToEnroll.md)| Participant to enroll | [optional]

### Return type

[**\Membercare\Client\Model\EnrollmentReceipt**](../Model/EnrollmentReceipt.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesCancellation**
> \Membercare\Client\Model\CancellationService patchServicesCancellation($token, $internal_id, $body)

Updates a cancellation service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\CancellationServicePatch(); // \Membercare\Client\Model\CancellationServicePatch | 

try {
    $result = $apiInstance->patchServicesCancellation($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\CancellationServicePatch**](../Model/CancellationServicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CancellationService**](../Model/CancellationService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesCompanion**
> \Membercare\Client\Model\CompanionService patchServicesCompanion($token, $internal_id, $body)

Updates a companion service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\CompanionServicePatch(); // \Membercare\Client\Model\CompanionServicePatch | 

try {
    $result = $apiInstance->patchServicesCompanion($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesCompanion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\CompanionServicePatch**](../Model/CompanionServicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CompanionService**](../Model/CompanionService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesDiscount**
> \Membercare\Client\Model\DiscountService patchServicesDiscount($token, $internal_id, $body)

Updates a discount service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\DiscountServicePatch(); // \Membercare\Client\Model\DiscountServicePatch | 

try {
    $result = $apiInstance->patchServicesDiscount($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\DiscountServicePatch**](../Model/DiscountServicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\DiscountService**](../Model/DiscountService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesHotelRoom**
> \Membercare\Client\Model\HotelRoom patchServicesHotelRoom($token, $internal_id, $body)

Updates a hotel room service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\HotelRoomPatch(); // \Membercare\Client\Model\HotelRoomPatch | 

try {
    $result = $apiInstance->patchServicesHotelRoom($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesHotelRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\HotelRoomPatch**](../Model/HotelRoomPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\HotelRoom**](../Model/HotelRoom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesRegular**
> \Membercare\Client\Model\RegularService patchServicesRegular($token, $internal_id, $body)

Updates a regular service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\RegularServicePatch(); // \Membercare\Client\Model\RegularServicePatch | 

try {
    $result = $apiInstance->patchServicesRegular($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesRegular: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegularServicePatch**](../Model/RegularServicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\RegularService**](../Model/RegularService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesSessionsCompanion**
> \Membercare\Client\Model\CompanionService patchServicesSessionsCompanion($token, $internal_id, $session_id, $body)

Updates a companion service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\CompanionServicePatch(); // \Membercare\Client\Model\CompanionServicePatch | 

try {
    $result = $apiInstance->patchServicesSessionsCompanion($token, $internal_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesSessionsCompanion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\CompanionServicePatch**](../Model/CompanionServicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CompanionService**](../Model/CompanionService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesSessionsRegular**
> \Membercare\Client\Model\RegularService patchServicesSessionsRegular($token, $internal_id, $session_id, $body)

Updates a regular service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\RegularServicePatch(); // \Membercare\Client\Model\RegularServicePatch | 

try {
    $result = $apiInstance->patchServicesSessionsRegular($token, $internal_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesSessionsRegular: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegularServicePatch**](../Model/RegularServicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\RegularService**](../Model/RegularService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchServicesSubsidy**
> \Membercare\Client\Model\SubsidyService patchServicesSubsidy($token, $internal_id, $body)

Updates a subsidy service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\SubsidyServicePatch(); // \Membercare\Client\Model\SubsidyServicePatch | 

try {
    $result = $apiInstance->patchServicesSubsidy($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchServicesSubsidy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\SubsidyServicePatch**](../Model/SubsidyServicePatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\SubsidyService**](../Model/SubsidyService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSession**
> \Membercare\Client\Model\Session patchSession($token, $internal_id, $id, $body)

Updates a Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\SessionPatch(); // \Membercare\Client\Model\SessionPatch | 

try {
    $result = $apiInstance->patchSession($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SessionPatch**](../Model/SessionPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSessionTrack**
> \Membercare\Client\Model\SessionTrack patchSessionTrack($token, $internal_id, $id, $body)

Updates a SessionTrack

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\SessionTrackPatch(); // \Membercare\Client\Model\SessionTrackPatch | 

try {
    $result = $apiInstance->patchSessionTrack($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchSessionTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SessionTrackPatch**](../Model/SessionTrackPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\SessionTrack**](../Model/SessionTrack.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSessionsAllowedParticipantCategory**
> \Membercare\Client\Model\AllowedParticipantCategory patchSessionsAllowedParticipantCategory($token, $internal_id, $session_id, $id, $body)

Updates a allowed participant category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\AllowedParticipantCategoryPatch(); // \Membercare\Client\Model\AllowedParticipantCategoryPatch | 

try {
    $result = $apiInstance->patchSessionsAllowedParticipantCategory($token, $internal_id, $session_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->patchSessionsAllowedParticipantCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategoryPatch**](../Model/AllowedParticipantCategoryPatch.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAllowedParticipantCategory**
> \Membercare\Client\Model\AllowedParticipantCategory postAllowedParticipantCategory($token, $internal_id, $body)

Adds an allowed participant category to the given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | Internal id of the arrangement
$body = new \Membercare\Client\Model\AllowedParticipantCategory(); // \Membercare\Client\Model\AllowedParticipantCategory | 

try {
    $result = $apiInstance->postAllowedParticipantCategory($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postAllowedParticipantCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**| Internal id of the arrangement |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangement**
> \Membercare\Client\Model\Arrangement postArrangement($token, $body)

Creates an arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\ArrangementPost(); // \Membercare\Client\Model\ArrangementPost | 

try {
    $result = $apiInstance->postArrangement($token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\ArrangementPost**](../Model/ArrangementPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Arrangement**](../Model/Arrangement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementAnswers**
> postArrangementAnswers($token, $internal_id, $debtor_account_number, $body)

Post answers for a participant in a given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = array(new \Membercare\Client\Model\AnswerPost()); // \Membercare\Client\Model\AnswerPost[] | 

try {
    $apiInstance->postArrangementAnswers($token, $internal_id, $debtor_account_number, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementAnswers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\AnswerPost[]**](../Model/AnswerPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementAreas**
> postArrangementAreas($token, $internal_id, $body)

Associates an ArrangementArea with an Arrangement. If Configuration AllowMultiSelectOnArea is false all other area associations is deleted first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ArrangementArea(); // \Membercare\Client\Model\ArrangementArea | 

try {
    $apiInstance->postArrangementAreas($token, $internal_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ArrangementArea**](../Model/ArrangementArea.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementCancellation**
> postArrangementCancellation($token, $internal_id, $body)

Cancel the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ArrangementCancellationPost(); // \Membercare\Client\Model\ArrangementCancellationPost | 

try {
    $apiInstance->postArrangementCancellation($token, $internal_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ArrangementCancellationPost**](../Model/ArrangementCancellationPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementCategories**
> postArrangementCategories($token, $internal_id, $body)

Associates an ArrangementCategory with an Arrangement. If Configuration AllowMultiSelectOnCategory is false all other category associations is deleted first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ArrangementCategory(); // \Membercare\Client\Model\ArrangementCategory | 

try {
    $apiInstance->postArrangementCategories($token, $internal_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ArrangementCategory**](../Model/ArrangementCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementGroups**
> postArrangementGroups($token, $internal_id, $body)

Associates an ArrangementGroup with an Arrangement. If Configuration AllowMultiSelectOnGroup is false all other group associations is deleted first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ArrangementGroup(); // \Membercare\Client\Model\ArrangementGroup | 

try {
    $apiInstance->postArrangementGroups($token, $internal_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ArrangementGroup**](../Model/ArrangementGroup.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementHotel**
> \Membercare\Client\Model\Hotel postArrangementHotel($token, $internal_id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\HotelPost(); // \Membercare\Client\Model\HotelPost | 

try {
    $result = $apiInstance->postArrangementHotel($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementHotel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\HotelPost**](../Model/HotelPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Hotel**](../Model/Hotel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementNewSequence**
> \Membercare\Client\Model\EventModuleInfo postArrangementNewSequence($internal_id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->postArrangementNewSequence($internal_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementNewSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\EventModuleInfo**](../Model/EventModuleInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementParticipantWorkListItem**
> \Membercare\Client\Model\ParticipantWorkListItem postArrangementParticipantWorkListItem($token, $internal_id, $debtor_account_number, $body)

Will insert a worklist item with regards to the participation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$debtor_account_number = "debtor_account_number_example"; // string | 
$body = new \Membercare\Client\Model\ParticipantWorkListItem(); // \Membercare\Client\Model\ParticipantWorkListItem | 

try {
    $result = $apiInstance->postArrangementParticipantWorkListItem($token, $internal_id, $debtor_account_number, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementParticipantWorkListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **debtor_account_number** | **string**|  |
 **body** | [**\Membercare\Client\Model\ParticipantWorkListItem**](../Model/ParticipantWorkListItem.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\ParticipantWorkListItem**](../Model/ParticipantWorkListItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementPlace**
> \Membercare\Client\Model\Place postArrangementPlace($token, $internal_id, $body)

Creates a place

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\PlacePost(); // \Membercare\Client\Model\PlacePost | 

try {
    $result = $apiInstance->postArrangementPlace($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementPlace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\PlacePost**](../Model/PlacePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Place**](../Model/Place.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementRegularService**
> \Membercare\Client\Model\RegularService postArrangementRegularService($token, $internal_id, $body)

Adds a regular service to the given arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\PostArrangementTemplateRegularService(); // \Membercare\Client\Model\PostArrangementTemplateRegularService | 

try {
    $result = $apiInstance->postArrangementRegularService($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementRegularService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\PostArrangementTemplateRegularService**](../Model/PostArrangementTemplateRegularService.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\RegularService**](../Model/RegularService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementSequence**
> \Membercare\Client\Model\EventModuleInfo postArrangementSequence($sequence_identification, $internal_id, $token)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sequence_identification = 789; // int | 
$internal_id = "internal_id_example"; // string | 
$token = "token_example"; // string | access token

try {
    $result = $apiInstance->postArrangementSequence($sequence_identification, $internal_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequence_identification** | **int**|  |
 **internal_id** | **string**|  |
 **token** | **string**| access token |

### Return type

[**\Membercare\Client\Model\EventModuleInfo**](../Model/EventModuleInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementSubCategories**
> postArrangementSubCategories($token, $internal_id, $body)

Associates an ArrangementSubCategory with an Arrangement. If Configuration AllowMultiSelectOnSubCategory is false all other subcategory associations is deleted first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ArrangementSubCategory(); // \Membercare\Client\Model\ArrangementSubCategory | 

try {
    $apiInstance->postArrangementSubCategories($token, $internal_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementSubCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ArrangementSubCategory**](../Model/ArrangementSubCategory.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArrangementsByCustomFieldAndValue**
> \Membercare\Client\Model\ArrangementPagedResult postArrangementsByCustomFieldAndValue($token, $body, $starts_after, $include_services, $include_texts, $page, $page_size)

Gets arrangements by customFieldValue.  Please provide an object containing:  {\"type\": {\"identifier\": XX},\"value\": \"XX\"}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$body = new \Membercare\Client\Model\CustomFieldValue(); // \Membercare\Client\Model\CustomFieldValue | 
$starts_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$include_services = false; // bool | 
$include_texts = false; // bool | 
$page = 1; // int | 
$page_size = 50; // int | 

try {
    $result = $apiInstance->postArrangementsByCustomFieldAndValue($token, $body, $starts_after, $include_services, $include_texts, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postArrangementsByCustomFieldAndValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **body** | [**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)|  | [optional]
 **starts_after** | **\DateTime**|  | [optional]
 **include_services** | **bool**|  | [optional] [default to false]
 **include_texts** | **bool**|  | [optional] [default to false]
 **page** | **int**|  | [optional] [default to 1]
 **page_size** | **int**|  | [optional] [default to 50]

### Return type

[**\Membercare\Client\Model\ArrangementPagedResult**](../Model/ArrangementPagedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomFieldValueForArrangement**
> \Membercare\Client\Model\CustomFieldValue postCustomFieldValueForArrangement($token, $internal_id, $body)

Takes a CustomFieldValue, and inserts it for the given arrangement internal id.  Note that the following values Must be assigned:      - CustomFieldValue.Type.Id      - CustomFieldValue.StartDate      - CustomFieldValue.Value      - Optional, the EndDate can be assigned      - Optional, the Description can be assigned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\CustomFieldValue(); // \Membercare\Client\Model\CustomFieldValue | The actual Value to be inserted

try {
    $result = $apiInstance->postCustomFieldValueForArrangement($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postCustomFieldValueForArrangement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)| The actual Value to be inserted | [optional]

### Return type

[**\Membercare\Client\Model\CustomFieldValue**](../Model/CustomFieldValue.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postEventCrew**
> \Membercare\Client\Model\EventCrew postEventCrew($token, $internal_id, $body)

Adds a new member to the crew

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\EventCrew(); // \Membercare\Client\Model\EventCrew | 

try {
    $result = $apiInstance->postEventCrew($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postEventCrew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\EventCrew**](../Model/EventCrew.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\EventCrew**](../Model/EventCrew.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postParticipantAttendance**
> postParticipantAttendance($internal_id, $participant_id, $token, $attended)

Set attendance for a Participant for the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$token = "token_example"; // string | access token
$attended = true; // bool | 

try {
    $apiInstance->postParticipantAttendance($internal_id, $participant_id, $token, $attended);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postParticipantAttendance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **token** | **string**| access token |
 **attended** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postParticipantCancellation**
> postParticipantCancellation($token, $internal_id, $participant_id, $body)

Cancel participation of a Participant for all participations on the arrangement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$body = new \Membercare\Client\Model\ParticipantCancellationPost(); // \Membercare\Client\Model\ParticipantCancellationPost | 

try {
    $apiInstance->postParticipantCancellation($token, $internal_id, $participant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postParticipantCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ParticipantCancellationPost**](../Model/ParticipantCancellationPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postParticipantServices**
> \Membercare\Client\Model\Transaction postParticipantServices($token, $internal_id, $participant_id, $body)

Adds a service to a participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$body = new \Membercare\Client\Model\ServiceToEnroll(); // \Membercare\Client\Model\ServiceToEnroll | 

try {
    $result = $apiInstance->postParticipantServices($token, $internal_id, $participant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postParticipantServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ServiceToEnroll**](../Model/ServiceToEnroll.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postParticipantSession**
> postParticipantSession($token, $internal_id, $participant_id, $body)

Associates a Participant with a Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$body = new \Membercare\Client\Model\SessionToEnroll(); // \Membercare\Client\Model\SessionToEnroll | 

try {
    $apiInstance->postParticipantSession($token, $internal_id, $participant_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postParticipantSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SessionToEnroll**](../Model/SessionToEnroll.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postParticipantSessionServices**
> \Membercare\Client\Model\Transaction postParticipantSessionServices($token, $internal_id, $participant_id, $session_id, $body)

Adds a service to a participant on a specific session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\ServiceToEnroll(); // \Membercare\Client\Model\ServiceToEnroll | 

try {
    $result = $apiInstance->postParticipantSessionServices($token, $internal_id, $participant_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postParticipantSessionServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ServiceToEnroll**](../Model/ServiceToEnroll.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postParticipantSessionsCancellation**
> postParticipantSessionsCancellation($token, $internal_id, $participant_id, $session_id, $body)

Cancel participation of a participant for the given session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\ParticipantCancellationPost(); // \Membercare\Client\Model\ParticipantCancellationPost | 

try {
    $apiInstance->postParticipantSessionsCancellation($token, $internal_id, $participant_id, $session_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postParticipantSessionsCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ParticipantCancellationPost**](../Model/ParticipantCancellationPost.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesCancellation**
> \Membercare\Client\Model\CancellationService postServicesCancellation($token, $internal_id, $body)

Creates a cancellation service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\CancellationServicePost(); // \Membercare\Client\Model\CancellationServicePost | 

try {
    $result = $apiInstance->postServicesCancellation($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\CancellationServicePost**](../Model/CancellationServicePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CancellationService**](../Model/CancellationService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesCompanion**
> \Membercare\Client\Model\CompanionService postServicesCompanion($token, $internal_id, $body)

Creates a companion service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\CompanionServicePost(); // \Membercare\Client\Model\CompanionServicePost | 

try {
    $result = $apiInstance->postServicesCompanion($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesCompanion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\CompanionServicePost**](../Model/CompanionServicePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CompanionService**](../Model/CompanionService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesDiscount**
> \Membercare\Client\Model\DiscountService postServicesDiscount($token, $internal_id, $body)

Creates a discount service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\DiscountServicePost(); // \Membercare\Client\Model\DiscountServicePost | 

try {
    $result = $apiInstance->postServicesDiscount($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\DiscountServicePost**](../Model/DiscountServicePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\DiscountService**](../Model/DiscountService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesHotelRoom**
> \Membercare\Client\Model\HotelRoom postServicesHotelRoom($token, $internal_id, $body)

Creates a hotel room service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\HotelRoomPost(); // \Membercare\Client\Model\HotelRoomPost | 

try {
    $result = $apiInstance->postServicesHotelRoom($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesHotelRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\HotelRoomPost**](../Model/HotelRoomPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\HotelRoom**](../Model/HotelRoom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesRegular**
> \Membercare\Client\Model\RegularService postServicesRegular($token, $internal_id, $body)

Creates a regular service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\RegularServicePost(); // \Membercare\Client\Model\RegularServicePost | 

try {
    $result = $apiInstance->postServicesRegular($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesRegular: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegularServicePost**](../Model/RegularServicePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\RegularService**](../Model/RegularService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesSessionsCompanion**
> \Membercare\Client\Model\CompanionService postServicesSessionsCompanion($token, $internal_id, $session_id, $body)

Creates a companion service for the given Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\CompanionServicePost(); // \Membercare\Client\Model\CompanionServicePost | 

try {
    $result = $apiInstance->postServicesSessionsCompanion($token, $internal_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesSessionsCompanion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\CompanionServicePost**](../Model/CompanionServicePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CompanionService**](../Model/CompanionService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesSessionsRegular**
> \Membercare\Client\Model\RegularService postServicesSessionsRegular($token, $internal_id, $session_id, $body)

Creates a regular service for the given Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\RegularServicePost(); // \Membercare\Client\Model\RegularServicePost | 

try {
    $result = $apiInstance->postServicesSessionsRegular($token, $internal_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesSessionsRegular: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegularServicePost**](../Model/RegularServicePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\RegularService**](../Model/RegularService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postServicesSubsidy**
> \Membercare\Client\Model\SubsidyService postServicesSubsidy($token, $internal_id, $body)

Creates a subsidy service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\SubsidyServicePost(); // \Membercare\Client\Model\SubsidyServicePost | 

try {
    $result = $apiInstance->postServicesSubsidy($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postServicesSubsidy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\SubsidyServicePost**](../Model/SubsidyServicePost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\SubsidyService**](../Model/SubsidyService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSession**
> \Membercare\Client\Model\Session postSession($token, $internal_id, $body)

Creates a Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\SessionPost(); // \Membercare\Client\Model\SessionPost | 

try {
    $result = $apiInstance->postSession($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\SessionPost**](../Model/SessionPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSessionTrack**
> \Membercare\Client\Model\SessionTrack postSessionTrack($token, $internal_id, $body)

Creates a SessionTrack

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\SessionTrackPost(); // \Membercare\Client\Model\SessionTrackPost | 

try {
    $result = $apiInstance->postSessionTrack($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postSessionTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\SessionTrackPost**](../Model/SessionTrackPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\SessionTrack**](../Model/SessionTrack.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSessionsAllowedParticipantCategory**
> \Membercare\Client\Model\AllowedParticipantCategory postSessionsAllowedParticipantCategory($token, $internal_id, $session_id, $body)

Creates a allowed participant category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\AllowedParticipantCategoryPost(); // \Membercare\Client\Model\AllowedParticipantCategoryPost | 

try {
    $result = $apiInstance->postSessionsAllowedParticipantCategory($token, $internal_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->postSessionsAllowedParticipantCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategoryPost**](../Model/AllowedParticipantCategoryPost.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAllowedParticipantCategory**
> \Membercare\Client\Model\AllowedParticipantCategory putAllowedParticipantCategory($token, $internal_id, $id, $body)

Updates a allowed participant category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\AllowedParticipantCategoryPut(); // \Membercare\Client\Model\AllowedParticipantCategoryPut | 

try {
    $result = $apiInstance->putAllowedParticipantCategory($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putAllowedParticipantCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategoryPut**](../Model/AllowedParticipantCategoryPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArrangement**
> \Membercare\Client\Model\Arrangement putArrangement($token, $internal_id, $body)

Patch an arrangement of type Course

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\ArrangementPut(); // \Membercare\Client\Model\ArrangementPut | 

try {
    $result = $apiInstance->putArrangement($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putArrangement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\ArrangementPut**](../Model/ArrangementPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Arrangement**](../Model/Arrangement.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArrangementHotel**
> \Membercare\Client\Model\Hotel putArrangementHotel($token, $internal_id, $id, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\HotelPut(); // \Membercare\Client\Model\HotelPut | 

try {
    $result = $apiInstance->putArrangementHotel($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putArrangementHotel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\HotelPut**](../Model/HotelPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Hotel**](../Model/Hotel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArrangementParticipant**
> \Membercare\Client\Model\Participant putArrangementParticipant($token, $internal_id, $participant_id, $body)

Updates a participant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$participant_id = 789; // int | 
$body = new \Membercare\Client\Model\ParticipantPut(); // \Membercare\Client\Model\ParticipantPut | 

try {
    $result = $apiInstance->putArrangementParticipant($token, $internal_id, $participant_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putArrangementParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **participant_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\ParticipantPut**](../Model/ParticipantPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Participant**](../Model/Participant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArrangementPlace**
> \Membercare\Client\Model\Place putArrangementPlace($token, $internal_id, $id, $body)

Updates a place

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\PlacePut(); // \Membercare\Client\Model\PlacePut | 

try {
    $result = $apiInstance->putArrangementPlace($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putArrangementPlace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\PlacePut**](../Model/PlacePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Place**](../Model/Place.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesCancellation**
> \Membercare\Client\Model\CancellationService putServicesCancellation($token, $internal_id, $body)

Updates a cancellation service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\CancellationServicePut(); // \Membercare\Client\Model\CancellationServicePut | 

try {
    $result = $apiInstance->putServicesCancellation($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesCancellation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\CancellationServicePut**](../Model/CancellationServicePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CancellationService**](../Model/CancellationService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesCompanion**
> \Membercare\Client\Model\CompanionService putServicesCompanion($token, $internal_id, $body)

Updates a companion service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\CompanionServicePut(); // \Membercare\Client\Model\CompanionServicePut | 

try {
    $result = $apiInstance->putServicesCompanion($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesCompanion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\CompanionServicePut**](../Model/CompanionServicePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CompanionService**](../Model/CompanionService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesDiscount**
> \Membercare\Client\Model\DiscountService putServicesDiscount($token, $internal_id, $body)

Updates a discount service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\DiscountServicePut(); // \Membercare\Client\Model\DiscountServicePut | 

try {
    $result = $apiInstance->putServicesDiscount($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\DiscountServicePut**](../Model/DiscountServicePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\DiscountService**](../Model/DiscountService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesHotelRoom**
> \Membercare\Client\Model\HotelRoom putServicesHotelRoom($token, $internal_id, $body)

Updates a hotel room service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\HotelRoomPut(); // \Membercare\Client\Model\HotelRoomPut | 

try {
    $result = $apiInstance->putServicesHotelRoom($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesHotelRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\HotelRoomPut**](../Model/HotelRoomPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\HotelRoom**](../Model/HotelRoom.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesRegular**
> \Membercare\Client\Model\RegularService putServicesRegular($token, $internal_id, $body)

Updates a regular service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\RegularServicePut(); // \Membercare\Client\Model\RegularServicePut | 

try {
    $result = $apiInstance->putServicesRegular($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesRegular: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\RegularServicePut**](../Model/RegularServicePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\RegularService**](../Model/RegularService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesSessionsCompanion**
> \Membercare\Client\Model\CompanionService putServicesSessionsCompanion($token, $internal_id, $session_id, $body)

Updates a companion service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\CompanionServicePut(); // \Membercare\Client\Model\CompanionServicePut | 

try {
    $result = $apiInstance->putServicesSessionsCompanion($token, $internal_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesSessionsCompanion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\CompanionServicePut**](../Model/CompanionServicePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\CompanionService**](../Model/CompanionService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesSessionsRegular**
> \Membercare\Client\Model\RegularService putServicesSessionsRegular($token, $internal_id, $session_id, $body)

Updates a regular service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$body = new \Membercare\Client\Model\RegularServicePut(); // \Membercare\Client\Model\RegularServicePut | 

try {
    $result = $apiInstance->putServicesSessionsRegular($token, $internal_id, $session_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesSessionsRegular: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **body** | [**\Membercare\Client\Model\RegularServicePut**](../Model/RegularServicePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\RegularService**](../Model/RegularService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putServicesSubsidy**
> \Membercare\Client\Model\SubsidyService putServicesSubsidy($token, $internal_id, $body)

Updates a subsidy service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$body = new \Membercare\Client\Model\SubsidyServicePut(); // \Membercare\Client\Model\SubsidyServicePut | 

try {
    $result = $apiInstance->putServicesSubsidy($token, $internal_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putServicesSubsidy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **body** | [**\Membercare\Client\Model\SubsidyServicePut**](../Model/SubsidyServicePut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\SubsidyService**](../Model/SubsidyService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSession**
> \Membercare\Client\Model\Session putSession($token, $internal_id, $id, $body)

Updates a Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\SessionPut(); // \Membercare\Client\Model\SessionPut | 

try {
    $result = $apiInstance->putSession($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SessionPut**](../Model/SessionPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSessionTrack**
> \Membercare\Client\Model\SessionTrack putSessionTrack($token, $internal_id, $id, $body)

Updates a SessionTrack

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\SessionTrackPut(); // \Membercare\Client\Model\SessionTrackPut | 

try {
    $result = $apiInstance->putSessionTrack($token, $internal_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putSessionTrack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\SessionTrackPut**](../Model/SessionTrackPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\SessionTrack**](../Model/SessionTrack.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSessionsAllowedParticipantCategory**
> \Membercare\Client\Model\AllowedParticipantCategory putSessionsAllowedParticipantCategory($token, $internal_id, $session_id, $id, $body)

Updates a allowed participant category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Membercare\Client\Api\ArrangementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | access token
$internal_id = "internal_id_example"; // string | 
$session_id = 789; // int | 
$id = 789; // int | 
$body = new \Membercare\Client\Model\AllowedParticipantCategoryPut(); // \Membercare\Client\Model\AllowedParticipantCategoryPut | 

try {
    $result = $apiInstance->putSessionsAllowedParticipantCategory($token, $internal_id, $session_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArrangementApi->putSessionsAllowedParticipantCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| access token |
 **internal_id** | **string**|  |
 **session_id** | **int**|  |
 **id** | **int**|  |
 **body** | [**\Membercare\Client\Model\AllowedParticipantCategoryPut**](../Model/AllowedParticipantCategoryPut.md)|  | [optional]

### Return type

[**\Membercare\Client\Model\AllowedParticipantCategory**](../Model/AllowedParticipantCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

