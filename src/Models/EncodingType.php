<?php

namespace BitmovinApiSdk\Models;

class EncodingType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LIVE = 'LIVE';

    /** @var string */
    private const VOD = 'VOD';

    /** @var string */
    private const NONE = 'NONE';

    /**
     * @param string $value
     * @return EncodingType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Live Encoding
     *
     * @return EncodingType
     */
    public static function LIVE()
    {
        return new EncodingType(self::LIVE);
    }

    /**
     * VOD Encoding
     *
     * @return EncodingType
     */
    public static function VOD()
    {
        return new EncodingType(self::VOD);
    }

    /**
     * Type of an Encoding which has not yet been started
     *
     * @return EncodingType
     */
    public static function NONE()
    {
        return new EncodingType(self::NONE);
    }
}

