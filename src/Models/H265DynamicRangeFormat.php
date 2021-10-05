<?php

namespace BitmovinApiSdk\Models;

class H265DynamicRangeFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DOLBY_VISION = 'DOLBY_VISION';

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
     * Configures what kind of dynamic range the output should conform to. Can be used to convert from SDR to HDR, from HDR to SDR or between different HDR formats
     *
     * @return H265DynamicRangeFormat
     */
    public static function DOLBY_VISION()
    {
        return new H265DynamicRangeFormat(self::DOLBY_VISION);
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

