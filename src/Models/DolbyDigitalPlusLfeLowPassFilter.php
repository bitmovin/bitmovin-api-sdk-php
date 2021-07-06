<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusLfeLowPassFilter extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalPlusLfeLowPassFilter
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable low frequency effects low pass filter
     *
     * @return DolbyDigitalPlusLfeLowPassFilter
     */
    public static function ENABLED()
    {
        return new DolbyDigitalPlusLfeLowPassFilter(self::ENABLED);
    }

    /**
     * Disable low frequency effects low pass filter
     *
     * @return DolbyDigitalPlusLfeLowPassFilter
     */
    public static function DISABLED()
    {
        return new DolbyDigitalPlusLfeLowPassFilter(self::DISABLED);
    }
}

