<?php

namespace BitmovinApiSdk\Models;

class H264MotionEstimationMethod extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DIA = 'DIA';

    /** @var string */
    private const HEX = 'HEX';

    /** @var string */
    private const UMH = 'UMH';

    /**
     * @param string $value
     * @return H264MotionEstimationMethod
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * diamond search, radius 1 (fast)
     *
     * @return H264MotionEstimationMethod
     */
    public static function DIA()
    {
        return new H264MotionEstimationMethod(self::DIA);
    }

    /**
     * hexagonal search, radius 2
     *
     * @return H264MotionEstimationMethod
     */
    public static function HEX()
    {
        return new H264MotionEstimationMethod(self::HEX);
    }

    /**
     * uneven multi-hexagon search
     *
     * @return H264MotionEstimationMethod
     */
    public static function UMH()
    {
        return new H264MotionEstimationMethod(self::UMH);
    }
}

