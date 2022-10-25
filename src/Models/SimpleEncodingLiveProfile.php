<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingLiveProfile extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const INCREASED_QUALITY = 'INCREASED_QUALITY';

    /** @var string */
    private const LOWER_LATENCY = 'LOWER_LATENCY';

    /**
     * @param string $value
     * @return SimpleEncodingLiveProfile
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * It provides a higher quality output with a tradeoff in latency
     *
     * @return SimpleEncodingLiveProfile
     */
    public static function INCREASED_QUALITY()
    {
        return new SimpleEncodingLiveProfile(self::INCREASED_QUALITY);
    }

    /**
     * It provides a lower latency output with a tradeoff in quality
     *
     * @return SimpleEncodingLiveProfile
     */
    public static function LOWER_LATENCY()
    {
        return new SimpleEncodingLiveProfile(self::LOWER_LATENCY);
    }
}

