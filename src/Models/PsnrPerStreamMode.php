<?php

namespace BitmovinApiSdk\Models;

class PsnrPerStreamMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DISABLED = 'DISABLED';

    /** @var string */
    private const ENABLED = 'ENABLED';

    /**
     * @param string $value
     * @return PsnrPerStreamMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DISABLED
     *
     * @return PsnrPerStreamMode
     */
    public static function DISABLED()
    {
        return new PsnrPerStreamMode(self::DISABLED);
    }

    /**
     * ENABLED
     *
     * @return PsnrPerStreamMode
     */
    public static function ENABLED()
    {
        return new PsnrPerStreamMode(self::ENABLED);
    }
}

