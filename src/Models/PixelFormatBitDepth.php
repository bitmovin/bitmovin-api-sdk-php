<?php

namespace BitmovinApiSdk\Models;

class PixelFormatBitDepth extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const EIGHT_BIT = 'EIGHT_BIT';

    /** @var string */
    private const TEN_BIT = 'TEN_BIT';

    /**
     * @param string $value
     * @return PixelFormatBitDepth
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Indicates that a pixel format with a bit depth of 8 bit was used
     *
     * @return PixelFormatBitDepth
     */
    public static function EIGHT_BIT()
    {
        return new PixelFormatBitDepth(self::EIGHT_BIT);
    }

    /**
     * Indicates that a pixel format with a bit depth of 10 bit was used
     *
     * @return PixelFormatBitDepth
     */
    public static function TEN_BIT()
    {
        return new PixelFormatBitDepth(self::TEN_BIT);
    }
}

