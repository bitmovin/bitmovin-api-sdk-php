<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalThreeDbAttenuation extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalThreeDbAttenuation
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable 3 dB attenuation
     *
     * @return DolbyDigitalThreeDbAttenuation
     */
    public static function ENABLED()
    {
        return new DolbyDigitalThreeDbAttenuation(self::ENABLED);
    }

    /**
     * Disable 3 dB attenuation
     *
     * @return DolbyDigitalThreeDbAttenuation
     */
    public static function DISABLED()
    {
        return new DolbyDigitalThreeDbAttenuation(self::DISABLED);
    }
}

