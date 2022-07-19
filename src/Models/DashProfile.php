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
     * The profile to be used for fMP4 muxings
     *
     * @return DashProfile
     */
    public static function LIVE()
    {
        return new DashProfile(self::LIVE);
    }

    /**
     * The profile to be used for MP4 muxings
     *
     * @return DashProfile
     */
    public static function ON_DEMAND()
    {
        return new DashProfile(self::ON_DEMAND);
    }
}

