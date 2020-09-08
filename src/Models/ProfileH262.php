<?php

namespace BitmovinApiSdk\Models;

class ProfileH262 extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MPEG2_422 = 'MPEG2_422';

    /**
     * @param string $value
     * @return ProfileH262
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * 4:2:2 profile
     *
     * @return ProfileH262
     */
    public static function MPEG2_422()
    {
        return new ProfileH262(self::MPEG2_422);
    }
}

