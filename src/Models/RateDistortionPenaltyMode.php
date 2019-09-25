<?php

namespace BitmovinApiSdk\Models;

class RateDistortionPenaltyMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const NORMAL = 'NORMAL';

    /** @var string */
    private const MAXIMUM = 'MAXIMUM';

    /**
     * @param string $value
     * @return RateDistortionPenaltyMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Rate distortion penalty disabled.
     *
     * @return RateDistortionPenaltyMode
     */
    public static function DISABLED()
    {
        return new RateDistortionPenaltyMode(self::DISABLED);
    }

    /**
     * Transform units of size 32x32 are given a 4x bit cost penalty compared to smaller transform units, in intra coded CUs in P or B slices.
     *
     * @return RateDistortionPenaltyMode
     */
    public static function NORMAL()
    {
        return new RateDistortionPenaltyMode(self::NORMAL);
    }

    /**
     * Transform units of size 32x32 are not even attempted, unless otherwise required by the maximum recursion depth.
     *
     * @return RateDistortionPenaltyMode
     */
    public static function MAXIMUM()
    {
        return new RateDistortionPenaltyMode(self::MAXIMUM);
    }
}

