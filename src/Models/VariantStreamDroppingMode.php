<?php

namespace BitmovinApiSdk\Models;

class VariantStreamDroppingMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STREAM = 'STREAM';

    /** @var string */
    private const AUDIO = 'AUDIO';

    /**
     * @param string $value
     * @return VariantStreamDroppingMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Variant stream dropping mode.
     *
     * @return VariantStreamDroppingMode
     */
    public static function STREAM()
    {
        return new VariantStreamDroppingMode(self::STREAM);
    }

    /**
     * Variant stream dropping mode.
     *
     * @return VariantStreamDroppingMode
     */
    public static function AUDIO()
    {
        return new VariantStreamDroppingMode(self::AUDIO);
    }
}

