<?php

namespace BitmovinApiSdk\Models;

class PerTitleFixedResolutionAndBitrateConfigurationMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LAST_CALCULATED_BITRATE = 'LAST_CALCULATED_BITRATE';

    /** @var string */
    private const MINIMUM = 'MINIMUM';

    /** @var string */
    private const MAXIMUM = 'MAXIMUM';

    /** @var string */
    private const AVERAGE = 'AVERAGE';

    /**
     * @param string $value
     * @return PerTitleFixedResolutionAndBitrateConfigurationMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The next bitrate for the forced representation is the calculated bitrate of the Per-Title representation multiplied by the factor.
     *
     * @return PerTitleFixedResolutionAndBitrateConfigurationMode
     */
    public static function LAST_CALCULATED_BITRATE()
    {
        return new PerTitleFixedResolutionAndBitrateConfigurationMode(self::LAST_CALCULATED_BITRATE);
    }

    /**
     * The next bitrate for the forced representation is the minimum bitrate defined in the Per-Title template stream multiplied by the factor.
     *
     * @return PerTitleFixedResolutionAndBitrateConfigurationMode
     */
    public static function MINIMUM()
    {
        return new PerTitleFixedResolutionAndBitrateConfigurationMode(self::MINIMUM);
    }

    /**
     * The next bitrate for the forced representation is the maximum bitrate defined in the Per-Title template stream multiplied by the factor.
     *
     * @return PerTitleFixedResolutionAndBitrateConfigurationMode
     */
    public static function MAXIMUM()
    {
        return new PerTitleFixedResolutionAndBitrateConfigurationMode(self::MAXIMUM);
    }

    /**
     * The next bitrate for the forced representation is the average bitrate defined in the Per-Title template stream multiplied by the factor.
     *
     * @return PerTitleFixedResolutionAndBitrateConfigurationMode
     */
    public static function AVERAGE()
    {
        return new PerTitleFixedResolutionAndBitrateConfigurationMode(self::AVERAGE);
    }
}

