<?php

namespace BitmovinApiSdk\Models;

class DolbyVisionPerStreamMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const ENABLED = 'ENABLED';

    /**
     * @param string $value
     * @return DolbyVisionPerStreamMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DISABLED
     *
     * @return DolbyVisionPerStreamMode
     */
    public static function DISABLED()
    {
        return new DolbyVisionPerStreamMode(self::DISABLED);
    }

    /**
     * ENABLED
     *
     * @return DolbyVisionPerStreamMode
     */
    public static function ENABLED()
    {
        return new DolbyVisionPerStreamMode(self::ENABLED);
    }
}

