<?php

namespace BitmovinApiSdk\Models;

class DolbyDigitalSurroundMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const NOT_INDICATED = 'NOT_INDICATED';

    /**
     * @param string $value
     * @return DolbyDigitalSurroundMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable Dolby surround mode
     *
     * @return DolbyDigitalSurroundMode
     */
    public static function ENABLED()
    {
        return new DolbyDigitalSurroundMode(self::ENABLED);
    }

    /**
     * Disable Dolby surround mode. This is the default value for surroundExMode
     *
     * @return DolbyDigitalSurroundMode
     */
    public static function DISABLED()
    {
        return new DolbyDigitalSurroundMode(self::DISABLED);
    }

    /**
     * Dolby surround mode is not indicated. This is the default value for surroundMode
     *
     * @return DolbyDigitalSurroundMode
     */
    public static function NOT_INDICATED()
    {
        return new DolbyDigitalSurroundMode(self::NOT_INDICATED);
    }
}

