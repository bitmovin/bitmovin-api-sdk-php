<?php

namespace BitmovinApiSdk\Models;

class AudioVolumeUnit extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PERCENT = 'PERCENT';

    /** @var string */
    private const DB = 'DB';

    /**
     * @param string $value
     * @return AudioVolumeUnit
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Change the audio volume in percent, e.g., volume 100 will leave the audio volume unchanged, volume 50 will halve the audio volume.
     *
     * @return AudioVolumeUnit
     */
    public static function PERCENT()
    {
        return new AudioVolumeUnit(self::PERCENT);
    }

    /**
     * Change the audio volume in decibels. E.g., volume 4 will increase audio volume by 4 decibels.
     *
     * @return AudioVolumeUnit
     */
    public static function DB()
    {
        return new AudioVolumeUnit(self::DB);
    }
}

