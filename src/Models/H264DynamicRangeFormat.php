<?php

namespace BitmovinApiSdk\Models;

class H264DynamicRangeFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SDR = 'SDR';

    /**
     * @param string $value
     * @return H264DynamicRangeFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Ouput should be in Standard Definition Range (SDR).
     *
     * @return H264DynamicRangeFormat
     */
    public static function SDR()
    {
        return new H264DynamicRangeFormat(self::SDR);
    }
}

