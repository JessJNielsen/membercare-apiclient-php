<?php
/**
 * CourseEventInvitationStatus
 *
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
 * Do not edit the class manually.
 */

namespace Membercare\Client\Model;
use \Membercare\Client\ObjectSerializer;

/**
 * CourseEventInvitationStatus Class Doc Comment
 *
 * @category Class
 * @description 0 &#x3D; Pending  1 &#x3D; Sent  2 &#x3D; Accepted  3 &#x3D; Declined  -1 &#x3D; DoNotSend
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseEventInvitationStatus
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 1 = 1;
    const 2 = 2;
    const 3 = 3;
    const MINUS_1 = -1;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::0
            self::1
            self::2
            self::3
            self::MINUS_1
        ];
    }
}
