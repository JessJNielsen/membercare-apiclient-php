<?php
/**
 * WorklistStatus
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
 * WorklistStatus Class Doc Comment
 *
 * @category Class
 * @description 1 &#x3D; New  2 &#x3D; Started  3 &#x3D; Waiting  4 &#x3D; Finished  5 &#x3D; Rejected  -1 &#x3D; Error
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorklistStatus
{
    /**
     * Possible values of this enum
     */
    const 1 = 1;
    const 2 = 2;
    const 3 = 3;
    const 4 = 4;
    const 5 = 5;
    const MINUS_1 = -1;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::1
            self::2
            self::3
            self::4
            self::5
            self::MINUS_1
        ];
    }
}
