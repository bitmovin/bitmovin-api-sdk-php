<?php

namespace BitmovinApiSdk\Models;

class BitrateSelectionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const OPTIMIZED = 'OPTIMIZED';

    /** @var string */
    private const COMPLEXITY_RANGE = 'COMPLEXITY_RANGE';

    /**
     * @param string $value
     * @return BitrateSelectionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Bitrate will be selected to provide the best quality for the resulting encoding profile.
     *
     * @return BitrateSelectionMode
     */
    public static function OPTIMIZED()
    {
        return new BitrateSelectionMode(self::OPTIMIZED);
    }

    /**
     * Bitrate will be selected based on the complexity range given in the configuration (&#x60;lowComplexityBoundaryForMaxBitrate&#x60; and &#x60;highComplexityBoundaryForMaxBitrate&#x60;). Complexity is defined by the max bitrate selected for the resulting encoding profile.
     *
     * @return BitrateSelectionMode
     */
    public static function COMPLEXITY_RANGE()
    {
        return new BitrateSelectionMode(self::COMPLEXITY_RANGE);
    }
}

