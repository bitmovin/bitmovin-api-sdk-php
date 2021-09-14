<?php

namespace BitmovinApiSdk\Models;

class HeAacV2Signaling extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const IMPLICIT = 'IMPLICIT';

    /** @var string */
    private const EXPLICIT_SBR = 'EXPLICIT_SBR';

    /** @var string */
    private const EXPLICIT_PS = 'EXPLICIT_PS';

    /** @var string */
    private const EXPLICIT_HIERARCHICAL = 'EXPLICIT_HIERARCHICAL';

    /**
     * @param string $value
     * @return HeAacV2Signaling
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Implicit backwards compatible signaling.
     *
     * @return HeAacV2Signaling
     */
    public static function IMPLICIT()
    {
        return new HeAacV2Signaling(self::IMPLICIT);
    }

    /**
     * Explicit SBR signaling. Implicit PS signaling. This is backwards compatible.
     *
     * @return HeAacV2Signaling
     */
    public static function EXPLICIT_SBR()
    {
        return new HeAacV2Signaling(self::EXPLICIT_SBR);
    }

    /**
     * Explicit SBR and PS signaling. This is backwards compatible.
     *
     * @return HeAacV2Signaling
     */
    public static function EXPLICIT_PS()
    {
        return new HeAacV2Signaling(self::EXPLICIT_PS);
    }

    /**
     * Explicit hierarchical signaling. This is not backwards compatible.
     *
     * @return HeAacV2Signaling
     */
    public static function EXPLICIT_HIERARCHICAL()
    {
        return new HeAacV2Signaling(self::EXPLICIT_HIERARCHICAL);
    }
}

