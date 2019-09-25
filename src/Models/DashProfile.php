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
     * LIVE can only use fMP4 muxing
     *
     * @return DashProfile
     */
    public static function LIVE()
    {
        return new DashProfile(self::LIVE);
    }

    /**
     * ON_DEMAND can only use MP4 muxing
     *
     * @return DashProfile
     */
    public static function ON_DEMAND()
    {
        return new DashProfile(self::ON_DEMAND);
    }
}

