<?php

namespace BitmovinApiSdk\Models;

class ThumbnailUnit extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SECONDS = 'SECONDS';

    /** @var string */
    private const PERCENTS = 'PERCENTS';

    /**
     * @param string $value
     * @return ThumbnailUnit
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Unit of positions is in seconds
     *
     * @return ThumbnailUnit
     */
    public static function SECONDS()
    {
        return new ThumbnailUnit(self::SECONDS);
    }

    /**
     * Unit of positions is in percent
     *
     * @return ThumbnailUnit
     */
    public static function PERCENTS()
    {
        return new ThumbnailUnit(self::PERCENTS);
    }
}

