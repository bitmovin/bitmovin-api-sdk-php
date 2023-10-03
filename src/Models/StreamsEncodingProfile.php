<?php

namespace BitmovinApiSdk\Models;

class StreamsEncodingProfile extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PER_TITLE = 'PER_TITLE';

    /** @var string */
    private const FIXED_RESOLUTIONS = 'FIXED_RESOLUTIONS';

    /**
     * @param string $value
     * @return StreamsEncodingProfile
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * PER_TITLE
     *
     * @return StreamsEncodingProfile
     */
    public static function PER_TITLE()
    {
        return new StreamsEncodingProfile(self::PER_TITLE);
    }

    /**
     * FIXED_RESOLUTIONS
     *
     * @return StreamsEncodingProfile
     */
    public static function FIXED_RESOLUTIONS()
    {
        return new StreamsEncodingProfile(self::FIXED_RESOLUTIONS);
    }
}

