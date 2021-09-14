<?php

namespace BitmovinApiSdk\Models;

class HeAacV1Signaling extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const IMPLICIT = 'IMPLICIT';

    /** @var string */
    private const EXPLICIT_SBR = 'EXPLICIT_SBR';

    /** @var string */
    private const EXPLICIT_HIERARCHICAL = 'EXPLICIT_HIERARCHICAL';

    /**
     * @param string $value
     * @return HeAacV1Signaling
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Implicit backwards compatible signaling.
     *
     * @return HeAacV1Signaling
     */
    public static function IMPLICIT()
    {
        return new HeAacV1Signaling(self::IMPLICIT);
    }

    /**
     * Explicit SBR signaling. This is backwards compatible.
     *
     * @return HeAacV1Signaling
     */
    public static function EXPLICIT_SBR()
    {
        return new HeAacV1Signaling(self::EXPLICIT_SBR);
    }

    /**
     * Explicit hierarchical signaling. This is not backwards compatible.
     *
     * @return HeAacV1Signaling
     */
    public static function EXPLICIT_HIERARCHICAL()
    {
        return new HeAacV1Signaling(self::EXPLICIT_HIERARCHICAL);
    }
}

