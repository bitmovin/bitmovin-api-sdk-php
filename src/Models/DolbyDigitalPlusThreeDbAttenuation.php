<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusThreeDbAttenuation extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return DolbyDigitalPlusThreeDbAttenuation
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable 3 dB attenuation
     *
     * @return DolbyDigitalPlusThreeDbAttenuation
     */
    public static function ENABLED()
    {
        return new DolbyDigitalPlusThreeDbAttenuation(self::ENABLED);
    }

    /**
     * Disable 3 dB attenuation
     *
     * @return DolbyDigitalPlusThreeDbAttenuation
     */
    public static function DISABLED()
    {
        return new DolbyDigitalPlusThreeDbAttenuation(self::DISABLED);
    }
}

