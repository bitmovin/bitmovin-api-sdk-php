<?php

namespace BitmovinApiSdk\Models;

class ForceFlushMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const ALL_FRAMES = 'ALL_FRAMES';

    /** @var string */
    private const SLICE_TYPE = 'SLICE_TYPE';

    /**
     * @param string $value
     * @return ForceFlushMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Flush the encoder only when all the input pictures are over
     *
     * @return ForceFlushMode
     */
    public static function DISABLED()
    {
        return new ForceFlushMode(self::DISABLED);
    }

    /**
     * Flush all the frames even when the input is not over
     *
     * @return ForceFlushMode
     */
    public static function ALL_FRAMES()
    {
        return new ForceFlushMode(self::ALL_FRAMES);
    }

    /**
     * Flush the slicetype decided frames only
     *
     * @return ForceFlushMode
     */
    public static function SLICE_TYPE()
    {
        return new ForceFlushMode(self::SLICE_TYPE);
    }
}

