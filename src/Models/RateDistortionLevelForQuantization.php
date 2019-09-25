<?php

namespace BitmovinApiSdk\Models;

class RateDistortionLevelForQuantization extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const LEVELS = 'LEVELS';

    /** @var string */
    private const LEVELS_AND_CODING_GROUPS = 'LEVELS_AND_CODING_GROUPS';

    /**
     * @param string $value
     * @return RateDistortionLevelForQuantization
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Rate-distortion cost is not considered in quantization.
     *
     * @return RateDistortionLevelForQuantization
     */
    public static function DISABLED()
    {
        return new RateDistortionLevelForQuantization(self::DISABLED);
    }

    /**
     * Rate-distortion cost is used to find optimal rounding values for each level.
     *
     * @return RateDistortionLevelForQuantization
     */
    public static function LEVELS()
    {
        return new RateDistortionLevelForQuantization(self::LEVELS);
    }

    /**
     * Rate-distortion cost is used to make decimate decisions on each 4x4 coding group.
     *
     * @return RateDistortionLevelForQuantization
     */
    public static function LEVELS_AND_CODING_GROUPS()
    {
        return new RateDistortionLevelForQuantization(self::LEVELS_AND_CODING_GROUPS);
    }
}

