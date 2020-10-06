<?php

namespace BitmovinApiSdk\Models;

class StatisticsResolution extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SD = 'SD';

    /** @var string */
    private const HD = 'HD';

    /** @var string */
    private const UHD = 'UHD';

    /** @var string */
    private const UHD_8K = 'UHD_8K';

    /**
     * @param string $value
     * @return StatisticsResolution
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * SD
     *
     * @return StatisticsResolution
     */
    public static function SD()
    {
        return new StatisticsResolution(self::SD);
    }

    /**
     * HD
     *
     * @return StatisticsResolution
     */
    public static function HD()
    {
        return new StatisticsResolution(self::HD);
    }

    /**
     * UHD
     *
     * @return StatisticsResolution
     */
    public static function UHD()
    {
        return new StatisticsResolution(self::UHD);
    }

    /**
     * UHD_8K
     *
     * @return StatisticsResolution
     */
    public static function UHD_8K()
    {
        return new StatisticsResolution(self::UHD_8K);
    }
}

