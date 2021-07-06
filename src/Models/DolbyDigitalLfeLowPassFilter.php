<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalLfeLowPassFilter extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalLfeLowPassFilter
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable low frequency effects low pass filter
     *
     * @return DolbyDigitalLfeLowPassFilter
     */
    public static function ENABLED()
    {
        return new DolbyDigitalLfeLowPassFilter(self::ENABLED);
    }

    /**
     * Disable low frequency effects low pass filter
     *
     * @return DolbyDigitalLfeLowPassFilter
     */
    public static function DISABLED()
    {
        return new DolbyDigitalLfeLowPassFilter(self::DISABLED);
    }
}

