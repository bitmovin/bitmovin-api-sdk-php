<?php

namespace BitmovinApiSdk\Models;

class DolbyVisionProfile extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DVHE_04 = 'DVHE_04';

    /** @var string */
    private const DVHE_05 = 'DVHE_05';

    /** @var string */
    private const DVHE_07 = 'DVHE_07';

    /** @var string */
    private const HEV1_08 = 'HEV1_08';

    /** @var string */
    private const AVC3_09 = 'AVC3_09';

    /**
     * @param string $value
     * @return DolbyVisionProfile
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * dvhe.04
     *
     * @return DolbyVisionProfile
     */
    public static function DVHE_04()
    {
        return new DolbyVisionProfile(self::DVHE_04);
    }

    /**
     * dvhe.05
     *
     * @return DolbyVisionProfile
     */
    public static function DVHE_05()
    {
        return new DolbyVisionProfile(self::DVHE_05);
    }

    /**
     * dvhe.07
     *
     * @return DolbyVisionProfile
     */
    public static function DVHE_07()
    {
        return new DolbyVisionProfile(self::DVHE_07);
    }

    /**
     * hev1.08
     *
     * @return DolbyVisionProfile
     */
    public static function HEV1_08()
    {
        return new DolbyVisionProfile(self::HEV1_08);
    }

    /**
     * avc3.09
     *
     * @return DolbyVisionProfile
     */
    public static function AVC3_09()
    {
        return new DolbyVisionProfile(self::AVC3_09);
    }
}

