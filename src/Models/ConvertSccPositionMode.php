<?php

namespace BitmovinApiSdk\Models;

class ConvertSccPositionMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FULL = 'FULL';

    /** @var string */
    private const SIMPLE = 'SIMPLE';

    /** @var string */
    private const NONE = 'NONE';

    /**
     * @param string $value
     * @return ConvertSccPositionMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Use all position information in the output format.
     *
     * @return ConvertSccPositionMode
     */
    public static function FULL()
    {
        return new ConvertSccPositionMode(self::FULL);
    }

    /**
     * Convert to simple top/bottom center-aligned captions.
     *
     * @return ConvertSccPositionMode
     */
    public static function SIMPLE()
    {
        return new ConvertSccPositionMode(self::SIMPLE);
    }

    /**
     * This will remove all position information from the output
     *
     * @return ConvertSccPositionMode
     */
    public static function NONE()
    {
        return new ConvertSccPositionMode(self::NONE);
    }
}

