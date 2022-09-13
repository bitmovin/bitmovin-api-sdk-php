<?php

namespace BitmovinApiSdk\Models;

class BitmovinStreamQuality extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const NONE = 'NONE';

    /** @var string */
    private const PREVIEW = 'PREVIEW';

    /** @var string */
    private const DEFAULT = 'DEFAULT';

    /**
     * @param string $value
     * @return BitmovinStreamQuality
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The loading placeholder displayed until the first encoding is done
     *
     * @return BitmovinStreamQuality
     */
    public static function NONE()
    {
        return new BitmovinStreamQuality(self::NONE);
    }

    /**
     * A lower quality preview encoding
     *
     * @return BitmovinStreamQuality
     */
    public static function PREVIEW()
    {
        return new BitmovinStreamQuality(self::PREVIEW);
    }

    /**
     * The default Per-title encoding
     *
     * @return BitmovinStreamQuality
     */
    public static function DEFAULT()
    {
        return new BitmovinStreamQuality(self::DEFAULT);
    }
}

