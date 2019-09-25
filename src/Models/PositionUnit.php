<?php

namespace BitmovinApiSdk\Models;

class PositionUnit extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PIXELS = 'PIXELS';

    /** @var string */
    private const PERCENTS = 'PERCENTS';

    /**
     * @param string $value
     * @return PositionUnit
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * PIXELS
     *
     * @return PositionUnit
     */
    public static function PIXELS()
    {
        return new PositionUnit(self::PIXELS);
    }

    /**
     * PERCENTS
     *
     * @return PositionUnit
     */
    public static function PERCENTS()
    {
        return new PositionUnit(self::PERCENTS);
    }
}

