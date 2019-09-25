<?php

namespace BitmovinApiSdk\Models;

class SpriteUnit extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SECONDS = 'SECONDS';

    /** @var string */
    private const PERCENTS = 'PERCENTS';

    /**
     * @param string $value
     * @return SpriteUnit
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Unit of positions is in seconds
     *
     * @return SpriteUnit
     */
    public static function SECONDS()
    {
        return new SpriteUnit(self::SECONDS);
    }

    /**
     * Unit of positions is in percent
     *
     * @return SpriteUnit
     */
    public static function PERCENTS()
    {
        return new SpriteUnit(self::PERCENTS);
    }
}

