<?php
/**
 * MembersiteOrderStagingDataPayloadFormat
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
 * MembersiteOrderStagingDataPayloadFormat Class Doc Comment
 *
 * @category Class
 * @description 0 &#x3D; Xml  1 &#x3D; Json
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MembersiteOrderStagingDataPayloadFormat
{
    /**
     * Possible values of this enum
     */
    const ZERO = 0;
    const ONE = 1;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ZERO,
            self::ONE,
        ];
    }
}
