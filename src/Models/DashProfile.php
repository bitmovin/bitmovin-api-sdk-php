<?php

namespace BitmovinApiSdk\Models;

class DashProfile extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LIVE = 'LIVE';

    /** @var string */
    private const ON_DEMAND = 'ON_DEMAND';

    /**
     * @param string $value
     * @return DashProfile
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Profile that supports segmented representations/muxings (FMP4, CMAF, WEBM, CHUNKED_TEXT)
     *
     * @return DashProfile
     */
    public static function LIVE()
    {
        return new DashProfile(self::LIVE);
    }

    /**
     * Profile that supports progressive representations/muxings (MP4, PROGRESSIVE_WEBM)
     *
     * @return DashProfile
     */
    public static function ON_DEMAND()
    {
        return new DashProfile(self::ON_DEMAND);
    }
}

