<?php

namespace BitmovinApiSdk\Models;

class H265V2RateControlModeConfigType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PERCEPTUAL_QUALITY_MODE = 'PERCEPTUAL_QUALITY_MODE';

    /** @var string */
    private const CONSTANT_BITRATE_MODE = 'CONSTANT_BITRATE_MODE';

    /**
     * @param string $value
     * @return H265V2RateControlModeConfigType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * PERCEPTUAL_QUALITY_MODE
     *
     * @return H265V2RateControlModeConfigType
     */
    public static function PERCEPTUAL_QUALITY_MODE()
    {
        return new H265V2RateControlModeConfigType(self::PERCEPTUAL_QUALITY_MODE);
    }

    /**
     * CONSTANT_BITRATE_MODE
     *
     * @return H265V2RateControlModeConfigType
     */
    public static function CONSTANT_BITRATE_MODE()
    {
        return new H265V2RateControlModeConfigType(self::CONSTANT_BITRATE_MODE);
    }
}

