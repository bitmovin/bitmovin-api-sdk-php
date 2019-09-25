<?php

namespace BitmovinApiSdk\Models;

class S3SignatureVersion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const V2 = 'S3_V2';

    /** @var string */
    private const V4 = 'S3_V4';

    /**
     * @param string $value
     * @return S3SignatureVersion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * V2
     *
     * @return S3SignatureVersion
     */
    public static function V2()
    {
        return new S3SignatureVersion(self::V2);
    }

    /**
     * V4
     *
     * @return S3SignatureVersion
     */
    public static function V4()
    {
        return new S3SignatureVersion(self::V4);
    }
}

