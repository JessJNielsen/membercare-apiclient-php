<?php
/**
 * TypeAttributes
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
 * TypeAttributes Class Doc Comment
 *
 * @category Class
 * @description 0 &#x3D; Class  1 &#x3D; Public  2 &#x3D; NestedPublic  3 &#x3D; NestedPrivate  4 &#x3D; NestedFamily  5 &#x3D; NestedAssembly  6 &#x3D; NestedFamANDAssem  7 &#x3D; NestedFamORAssem  8 &#x3D; SequentialLayout  16 &#x3D; ExplicitLayout  24 &#x3D; LayoutMask  32 &#x3D; ClassSemanticsMask  128 &#x3D; Abstract  256 &#x3D; Sealed  1024 &#x3D; SpecialName  2048 &#x3D; RTSpecialName  4096 &#x3D; Import  8192 &#x3D; Serializable  16384 &#x3D; WindowsRuntime  65536 &#x3D; UnicodeClass  131072 &#x3D; AutoClass  196608 &#x3D; CustomFormatClass  262144 &#x3D; HasSecurity  264192 &#x3D; ReservedMask  1048576 &#x3D; BeforeFieldInit  12582912 &#x3D; CustomFormatMask
 * @package  Membercare\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TypeAttributes
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
    const 7 = 7;
    const 8 = 8;
    const 16 = 16;
    const 24 = 24;
    const 32 = 32;
    const 128 = 128;
    const 256 = 256;
    const 1024 = 1024;
    const 2048 = 2048;
    const 4096 = 4096;
    const 8192 = 8192;
    const 16384 = 16384;
    const 65536 = 65536;
    const 131072 = 131072;
    const 196608 = 196608;
    const 262144 = 262144;
    const 264192 = 264192;
    const 1048576 = 1048576;
    const 12582912 = 12582912;
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
            self::7
            self::8
            self::16
            self::24
            self::32
            self::128
            self::256
            self::1024
            self::2048
            self::4096
            self::8192
            self::16384
            self::65536
            self::131072
            self::196608
            self::262144
            self::264192
            self::1048576
            self::12582912
        ];
    }
}
