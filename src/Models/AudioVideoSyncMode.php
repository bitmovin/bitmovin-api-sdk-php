<?php

namespace BitmovinApiSdk\Models;

class AudioVideoSyncMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STANDARD = 'STANDARD';

    /** @var string */
    private const RESYNC_AT_START = 'RESYNC_AT_START';

    /** @var string */
    private const RESYNC_AT_START_AND_END = 'RESYNC_AT_START_AND_END';

    /**
     * @param string $value
     * @return AudioVideoSyncMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Do not add or drop any audio samples.
     *
     * @return AudioVideoSyncMode
     */
    public static function STANDARD()
    {
        return new AudioVideoSyncMode(self::STANDARD);
    }

    /**
     * Drop audio samples or add audio silence samples at the start of the audio stream.
     *
     * @return AudioVideoSyncMode
     */
    public static function RESYNC_AT_START()
    {
        return new AudioVideoSyncMode(self::RESYNC_AT_START);
    }

    /**
     * Adds or drops audio samples at the start.&lt;br&gt; Adds silence audio samples at the end of the audio inputs.&lt;br&gt; This mode does not drop audio samples from the end.
     *
     * @return AudioVideoSyncMode
     */
    public static function RESYNC_AT_START_AND_END()
    {
        return new AudioVideoSyncMode(self::RESYNC_AT_START_AND_END);
    }
}

