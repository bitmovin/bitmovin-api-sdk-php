<?php

namespace BitmovinApiSdk\Models;

class HeAacV2Signaling extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DEFAULT = 'DEFAULT';

    /** @var string */
    private const IMPLICIT = 'IMPLICIT';

    /** @var string */
    private const EXPLICIT_SBR = 'EXPLICIT_SBR';

    /** @var string */
    private const EXPLICIT_HIERACHICAL = 'EXPLICIT_HIERACHICAL';

    /**
     * @param string $value
     * @return HeAacV2Signaling
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Choose signaling implicitly (explicit hierarchical by default, implicit if global header is disabled).
     *
     * @return HeAacV2Signaling
     */
    public static function DEFAULT()
    {
        return new HeAacV2Signaling(self::DEFAULT);
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
     * Explicit SBR, implicit PS signaling.
     *
     * @return HeAacV2Signaling
     */
    public static function EXPLICIT_SBR()
    {
        return new HeAacV2Signaling(self::EXPLICIT_SBR);
    }

    /**
     * Explicit hierarchical signaling.
     *
     * @return HeAacV2Signaling
     */
    public static function EXPLICIT_HIERACHICAL()
    {
        return new HeAacV2Signaling(self::EXPLICIT_HIERACHICAL);
    }
}

