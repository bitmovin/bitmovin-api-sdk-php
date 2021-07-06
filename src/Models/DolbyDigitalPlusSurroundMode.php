<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalPlusSurroundMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const NOT_INDICATED = 'NOT_INDICATED';

    /**
     * @param string $value
     * @return DolbyDigitalPlusSurroundMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dolby surround mode
     *
     * @return DolbyDigitalPlusSurroundMode
     */
    public static function ENABLED()
    {
        return new DolbyDigitalPlusSurroundMode(self::ENABLED);
    }

    /**
     * Disable Dolby surround mode. This is the default value for surroundExMode
     *
     * @return DolbyDigitalPlusSurroundMode
     */
    public static function DISABLED()
    {
        return new DolbyDigitalPlusSurroundMode(self::DISABLED);
    }

    /**
     * Dolby surround mode is not indicated. This is the default value for surroundMode
     *
     * @return DolbyDigitalPlusSurroundMode
     */
    public static function NOT_INDICATED()
    {
        return new DolbyDigitalPlusSurroundMode(self::NOT_INDICATED);
    }
}

