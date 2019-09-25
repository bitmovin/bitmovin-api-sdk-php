<?php

namespace BitmovinApiSdk\Models;

class Av1KeyPlacementMode extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AUTO = 'AUTO';

    /** @var string */
    private const FIXED = 'FIXED';

    /** @var string */
    private const DISABLED = 'DISABLED';

    /**
     * @param string $value
     * @return Av1KeyPlacementMode
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Specifies whether keyframes should be placed at fixed intervals or the encoder may determine optimal placement automatically
     *
     * @return Av1KeyPlacementMode
     */
    public static function AUTO()
    {
        return new Av1KeyPlacementMode(self::AUTO);
    }

    /**
     * Specifies whether keyframes should be placed at fixed intervals or the encoder may determine optimal placement automatically
     *
     * @return Av1KeyPlacementMode
     */
    public static function FIXED()
    {
        return new Av1KeyPlacementMode(self::FIXED);
    }

    /**
     * Specifies whether keyframes should be placed at fixed intervals or the encoder may determine optimal placement automatically
     *
     * @return Av1KeyPlacementMode
     */
    public static function DISABLED()
    {
        return new Av1KeyPlacementMode(self::DISABLED);
    }
}

