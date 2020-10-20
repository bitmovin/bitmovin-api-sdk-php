<?php

namespace BitmovinApiSdk\Models;

class EnhancedDeinterlaceAutoEnable extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ALWAYS_ON = 'ALWAYS_ON';

    /** @var string */
    private const META_DATA_BASED = 'META_DATA_BASED';

    /**
     * @param string $value
     * @return EnhancedDeinterlaceAutoEnable
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The content will always be deinterlaced with the settings specified (mode, parity)
     *
     * @return EnhancedDeinterlaceAutoEnable
     */
    public static function ALWAYS_ON()
    {
        return new EnhancedDeinterlaceAutoEnable(self::ALWAYS_ON);
    }

    /**
     * The Enhanced Deinterlace filter will only be applied when interlaced content is signaled in the meta data of the input stream.
     *
     * @return EnhancedDeinterlaceAutoEnable
     */
    public static function META_DATA_BASED()
    {
        return new EnhancedDeinterlaceAutoEnable(self::META_DATA_BASED);
    }
}

