<?php

namespace BitmovinApiSdk\Models;

class PaddingDurationUnit extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SECONDS = 'SECONDS';

    /** @var string */
    private const FRAMES = 'FRAMES';

    /**
     * @param string $value
     * @return PaddingDurationUnit
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Duration will be specified in seconds
     *
     * @return PaddingDurationUnit
     */
    public static function SECONDS()
    {
        return new PaddingDurationUnit(self::SECONDS);
    }

    /**
     * Duration will be specified in number of frames
     *
     * @return PaddingDurationUnit
     */
    public static function FRAMES()
    {
        return new PaddingDurationUnit(self::FRAMES);
    }
}

