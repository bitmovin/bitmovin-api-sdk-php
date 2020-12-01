<?php

namespace BitmovinApiSdk\Models;

class FileInputStreamType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TTML = 'TTML';

    /** @var string */
    private const WEBVTT = 'WEBVTT';

    /**
     * @param string $value
     * @return FileInputStreamType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specifies that the sidecar file conforms to the TTML standard
     *
     * @return FileInputStreamType
     */
    public static function TTML()
    {
        return new FileInputStreamType(self::TTML);
    }

    /**
     * Specifies that the sidecar file conforms to the WEBVTT standard
     *
     * @return FileInputStreamType
     */
    public static function WEBVTT()
    {
        return new FileInputStreamType(self::WEBVTT);
    }
}

