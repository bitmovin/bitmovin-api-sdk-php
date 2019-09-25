<?php

namespace BitmovinApiSdk\Models;

class ChunkLengthMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SPEED_OPTIMIZED = 'SPEED_OPTIMIZED';

    /** @var string */
    private const CUSTOM = 'CUSTOM';

    /**
     * @param string $value
     * @return ChunkLengthMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The chunk length is optimized for fast turnaround times
     *
     * @return ChunkLengthMode
     */
    public static function SPEED_OPTIMIZED()
    {
        return new ChunkLengthMode(self::SPEED_OPTIMIZED);
    }

    /**
     * The chunk length is defined by the customChunkLength attribute
     *
     * @return ChunkLengthMode
     */
    public static function CUSTOM()
    {
        return new ChunkLengthMode(self::CUSTOM);
    }
}

