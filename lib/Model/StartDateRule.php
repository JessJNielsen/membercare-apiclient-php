<?php
/**
 * StartDateRule
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
 * StartDateRule Class Doc Comment
 *
 * @category Class
 * @description 0 &#x3D; NotSet  1 &#x3D; TodaysDate  2 &#x3D; FirstDayOfWeek  3 &#x3D; FirstDayOfMonth  4 &#x3D; FirstDayOfQuarter  5 &#x3D; FirstDayOfHalfYear  6 &#x3D; FirstDayOfYear  10 &#x3D; FirstDayOfPeriod
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StartDateRule
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 1 = 1;
    const 2 = 2;
    const 3 = 3;
    const 4 = 4;
    const 5 = 5;
    const 6 = 6;
    const 10 = 10;
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
            self::4
            self::5
            self::6
            self::10
        ];
    }
}
