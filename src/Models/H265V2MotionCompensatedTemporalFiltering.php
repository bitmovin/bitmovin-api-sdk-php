<?php

namespace BitmovinApiSdk\Models;

class H265V2MotionCompensatedTemporalFiltering extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUTO = 'AUTO';

    /** @var string */
    private const OFF = 'OFF';

    /** @var string */
    private const ON = 'ON';

    /**
     * @param string $value
     * @return H265V2MotionCompensatedTemporalFiltering
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * -1: Automatic selection
     *
     * @return H265V2MotionCompensatedTemporalFiltering
     */
    public static function AUTO()
    {
        return new H265V2MotionCompensatedTemporalFiltering(self::AUTO);
    }

    /**
     * 0: Disable motion compensated temporal filtering
     *
     * @return H265V2MotionCompensatedTemporalFiltering
     */
    public static function OFF()
    {
        return new H265V2MotionCompensatedTemporalFiltering(self::OFF);
    }

    /**
     * 1: Enable motion compensated temporal filtering
     *
     * @return H265V2MotionCompensatedTemporalFiltering
     */
    public static function ON()
    {
        return new H265V2MotionCompensatedTemporalFiltering(self::ON);
    }
}

