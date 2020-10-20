<?php

namespace BitmovinApiSdk\Models;

class EnhancedDeinterlaceMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FRAME = 'FRAME';

    /** @var string */
    private const FIELD = 'FIELD';

    /**
     * @param string $value
     * @return EnhancedDeinterlaceMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Generate one frame for each frame
     *
     * @return EnhancedDeinterlaceMode
     */
    public static function FRAME()
    {
        return new EnhancedDeinterlaceMode(self::FRAME);
    }

    /**
     * Generate one frame for each field
     *
     * @return EnhancedDeinterlaceMode
     */
    public static function FIELD()
    {
        return new EnhancedDeinterlaceMode(self::FIELD);
    }
}

