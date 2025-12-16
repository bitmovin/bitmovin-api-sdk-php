<?php

namespace BitmovinApiSdk\Models;

class ClockSynchronizationMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const SYSTEM_CLOCK = 'SYSTEM_CLOCK';

    /** @var string */
    private const EMBEDDED = 'EMBEDDED';

    /**
     * @param string $value
     * @return ClockSynchronizationMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Use the current UTC date time
     *
     * @return ClockSynchronizationMode
     */
    public static function SYSTEM_CLOCK()
    {
        return new ClockSynchronizationMode(self::SYSTEM_CLOCK);
    }

    /**
     * Use the timecode in the source video. If no embedded timecode is found in the source, the encoding will fail.
     *
     * @return ClockSynchronizationMode
     */
    public static function EMBEDDED()
    {
        return new ClockSynchronizationMode(self::EMBEDDED);
    }
}

