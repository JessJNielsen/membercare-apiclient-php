<?php
/**
 * MethodImplAttributes
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
 * MethodImplAttributes Class Doc Comment
 *
 * @category Class
 * @description 0 &#x3D; Managed  1 &#x3D; Native  2 &#x3D; OPTIL  3 &#x3D; Runtime  4 &#x3D; Unmanaged  8 &#x3D; NoInlining  16 &#x3D; ForwardRef  32 &#x3D; Synchronized  64 &#x3D; NoOptimization  128 &#x3D; PreserveSig  256 &#x3D; AggressiveInlining  512 &#x3D; AggressiveOptimization  4096 &#x3D; InternalCall  65535 &#x3D; MaxMethodImplVal
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MethodImplAttributes
{
    /**
     * Possible values of this enum
     */
    const 0 = 0;
    const 1 = 1;
    const 2 = 2;
    const 3 = 3;
    const 4 = 4;
    const 8 = 8;
    const 16 = 16;
    const 32 = 32;
    const 64 = 64;
    const 128 = 128;
    const 256 = 256;
    const 512 = 512;
    const 4096 = 4096;
    const 65535 = 65535;
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
            self::8
            self::16
            self::32
            self::64
            self::128
            self::256
            self::512
            self::4096
            self::65535
        ];
    }
}
