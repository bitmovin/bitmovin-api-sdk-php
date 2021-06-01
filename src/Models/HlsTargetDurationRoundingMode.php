<?php

namespace BitmovinApiSdk\Models;

class HlsTargetDurationRoundingMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const UPWARD_ROUNDING = 'UPWARD_ROUNDING';

    /** @var string */
    private const NORMAL_ROUNDING = 'NORMAL_ROUNDING';

    /**
     * @param string $value
     * @return HlsTargetDurationRoundingMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The target duration will be always rounded upwards.  For example: if the target duration is 4.2 this will be rounded to 5.
     *
     * @return HlsTargetDurationRoundingMode
     */
    public static function UPWARD_ROUNDING()
    {
        return new HlsTargetDurationRoundingMode(self::UPWARD_ROUNDING);
    }

    /**
     * The target duration will be normally rounded.   For example: if the target duration is 4.2 this will be rounded to 4.
     *
     * @return HlsTargetDurationRoundingMode
     */
    public static function NORMAL_ROUNDING()
    {
        return new HlsTargetDurationRoundingMode(self::NORMAL_ROUNDING);
    }
}

