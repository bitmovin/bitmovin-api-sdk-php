<?php

namespace BitmovinApiSdk\Models;

class H265DynamicRangeFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DOLBY_VISION = 'DOLBY_VISION';

    /** @var string */
    private const DOLBY_VISION_PROFILE_5 = 'DOLBY_VISION_PROFILE_5';

    /** @var string */
    private const DOLBY_VISION_PROFILE_8_1 = 'DOLBY_VISION_PROFILE_8_1';

    /** @var string */
    private const HDR10 = 'HDR10';

    /** @var string */
    private const HLG = 'HLG';

    /** @var string */
    private const SDR = 'SDR';

    /**
     * @param string $value
     * @return H265DynamicRangeFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Configure the Output to be Dolby Vision Profile 5.
     *
     * @return H265DynamicRangeFormat
     */
    public static function DOLBY_VISION()
    {
        return new H265DynamicRangeFormat(self::DOLBY_VISION);
    }

    /**
     * Configure the Output to be Dolby Vision Profile 5
     *
     * @return H265DynamicRangeFormat
     */
    public static function DOLBY_VISION_PROFILE_5()
    {
        return new H265DynamicRangeFormat(self::DOLBY_VISION_PROFILE_5);
    }

    /**
     * Configure the Output to be Dolby Vision Profile 8.1 (HDR10 cross-compatibility)
     *
     * @return H265DynamicRangeFormat
     */
    public static function DOLBY_VISION_PROFILE_8_1()
    {
        return new H265DynamicRangeFormat(self::DOLBY_VISION_PROFILE_8_1);
    }

    /**
     * Configures what kind of dynamic range the output should conform to. Can be used to convert from SDR to HDR, from HDR to SDR or between different HDR formats
     *
     * @return H265DynamicRangeFormat
     */
    public static function HDR10()
    {
        return new H265DynamicRangeFormat(self::HDR10);
    }

    /**
     * Configures what kind of dynamic range the output should conform to. Can be used to convert from SDR to HDR, from HDR to SDR or between different HDR formats
     *
     * @return H265DynamicRangeFormat
     */
    public static function HLG()
    {
        return new H265DynamicRangeFormat(self::HLG);
    }

    /**
     * Configures what kind of dynamic range the output should conform to. Can be used to convert from SDR to HDR, from HDR to SDR or between different HDR formats
     *
     * @return H265DynamicRangeFormat
     */
    public static function SDR()
    {
        return new H265DynamicRangeFormat(self::SDR);
    }
}

