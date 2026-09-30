<?php

namespace BitmovinApiSdk\Models;

class Av1DynamicRangeFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DOLBY_VISION_PROFILE_10_0 = 'DOLBY_VISION_PROFILE_10_0';

    /** @var string */
    private const DOLBY_VISION_PROFILE_10_1 = 'DOLBY_VISION_PROFILE_10_1';

    /** @var string */
    private const HDR10 = 'HDR10';

    /** @var string */
    private const SDR = 'SDR';

    /**
     * @param string $value
     * @return Av1DynamicRangeFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Configure the Output to be Dolby Vision Profile 10.0
     *
     * @return Av1DynamicRangeFormat
     */
    public static function DOLBY_VISION_PROFILE_10_0()
    {
        return new Av1DynamicRangeFormat(self::DOLBY_VISION_PROFILE_10_0);
    }

    /**
     * Configure the Output to be Dolby Vision Profile 10.1 (HDR10 cross-compatibility)
     *
     * @return Av1DynamicRangeFormat
     */
    public static function DOLBY_VISION_PROFILE_10_1()
    {
        return new Av1DynamicRangeFormat(self::DOLBY_VISION_PROFILE_10_1);
    }

    /**
     * Configures what kind of dynamic range the output should conform to. Can be used to convert between different HDR formats.
     *
     * @return Av1DynamicRangeFormat
     */
    public static function HDR10()
    {
        return new Av1DynamicRangeFormat(self::HDR10);
    }

    /**
     * Configures what kind of dynamic range the output should conform to. Can be used to convert between different HDR formats.
     *
     * @return Av1DynamicRangeFormat
     */
    public static function SDR()
    {
        return new Av1DynamicRangeFormat(self::SDR);
    }
}

