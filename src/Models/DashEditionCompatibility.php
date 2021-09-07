<?php

namespace BitmovinApiSdk\Models;

class DashEditionCompatibility extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const V4 = 'V4';

    /**
     * @param string $value
     * @return DashEditionCompatibility
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * States the compatibility of the DASH manifest with the standard DASH Edition. When set to V4, the endNumber attribute will be automatically added to the last Media Segment in the Representation of the Period, in order to improve playback compatibility. If the property is not set the endNumber attribute tag will not be added.
     *
     * @return DashEditionCompatibility
     */
    public static function V4()
    {
        return new DashEditionCompatibility(self::V4);
    }
}

