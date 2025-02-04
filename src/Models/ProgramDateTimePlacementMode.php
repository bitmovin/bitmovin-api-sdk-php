<?php

namespace BitmovinApiSdk\Models;

class ProgramDateTimePlacementMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ONCE_PER_PLAYLIST = 'ONCE_PER_PLAYLIST';

    /** @var string */
    private const SEGMENTS_INTERVAL = 'SEGMENTS_INTERVAL';

    /** @var string */
    private const SECONDS_INTERVAL = 'SECONDS_INTERVAL';

    /**
     * @param string $value
     * @return ProgramDateTimePlacementMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Only place the ProgramDateTime tag once at the first segment of a playlist
     *
     * @return ProgramDateTimePlacementMode
     */
    public static function ONCE_PER_PLAYLIST()
    {
        return new ProgramDateTimePlacementMode(self::ONCE_PER_PLAYLIST);
    }

    /**
     * Place the ProgramDateTime tag every X segments
     *
     * @return ProgramDateTimePlacementMode
     */
    public static function SEGMENTS_INTERVAL()
    {
        return new ProgramDateTimePlacementMode(self::SEGMENTS_INTERVAL);
    }

    /**
     * Place the ProgramDateTime tag every X seconds
     *
     * @return ProgramDateTimePlacementMode
     */
    public static function SECONDS_INTERVAL()
    {
        return new ProgramDateTimePlacementMode(self::SECONDS_INTERVAL);
    }
}

