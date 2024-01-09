<?php

namespace BitmovinApiSdk\Models;

class S3AccessStyle extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VIRTUAL_HOSTED = 'VIRTUAL_HOSTED';

    /** @var string */
    private const PATH = 'PATH';

    /**
     * @param string $value
     * @return S3AccessStyle
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * virtual-hosted style (example: bucket-name.s3.example.com)
     *
     * @return S3AccessStyle
     */
    public static function VIRTUAL_HOSTED()
    {
        return new S3AccessStyle(self::VIRTUAL_HOSTED);
    }

    /**
     * path style (example: s3.example.com/bucket-name)
     *
     * @return S3AccessStyle
     */
    public static function PATH()
    {
        return new S3AccessStyle(self::PATH);
    }
}

