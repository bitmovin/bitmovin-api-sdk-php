<?php

namespace BitmovinApiSdk\Models;

class AudioVideoSyncMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STANDARD = 'STANDARD';

    /** @var string */
    private const RESYNC_AT_START = 'RESYNC_AT_START';

    /**
     * @param string $value
     * @return AudioVideoSyncMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Default audio video sync handling
     *
     * @return AudioVideoSyncMode
     */
    public static function STANDARD()
    {
        return new AudioVideoSyncMode(self::STANDARD);
    }

    /**
     * Adds a sync at the start of the file. Useful if the source file was cut out of already encoded content.
     *
     * @return AudioVideoSyncMode
     */
    public static function RESYNC_AT_START()
    {
        return new AudioVideoSyncMode(self::RESYNC_AT_START);
    }
}

