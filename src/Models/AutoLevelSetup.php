<?php

namespace BitmovinApiSdk\Models;

class AutoLevelSetup extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ENABLED = 'ENABLED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return AutoLevelSetup
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Enable automatic calculation of level, maxrate and bufsize
     *
     * @return AutoLevelSetup
     */
    public static function ENABLED()
    {
        return new AutoLevelSetup(self::ENABLED);
    }

    /**
     * Disable automatic calculation of level, maxrate and bufsize
     *
     * @return AutoLevelSetup
     */
    public static function DISABLED()
    {
        return new AutoLevelSetup(self::DISABLED);
    }
}

