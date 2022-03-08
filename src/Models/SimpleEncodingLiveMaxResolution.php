<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingLiveMaxResolution extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FULL_HD = 'FULL_HD';

    /** @var string */
    private const HD = 'HD';

    /** @var string */
    private const SD = 'SD';

    /**
     * @param string $value
     * @return SimpleEncodingLiveMaxResolution
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * FULL_HD
     *
     * @return SimpleEncodingLiveMaxResolution
     */
    public static function FULL_HD()
    {
        return new SimpleEncodingLiveMaxResolution(self::FULL_HD);
    }

    /**
     * HD
     *
     * @return SimpleEncodingLiveMaxResolution
     */
    public static function HD()
    {
        return new SimpleEncodingLiveMaxResolution(self::HD);
    }

    /**
     * SD
     *
     * @return SimpleEncodingLiveMaxResolution
     */
    public static function SD()
    {
        return new SimpleEncodingLiveMaxResolution(self::SD);
    }
}

