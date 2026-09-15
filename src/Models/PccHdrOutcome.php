<?php

namespace BitmovinApiSdk\Models;

class PccHdrOutcome extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HDR = 'hdr';

    /** @var string */
    private const SDR = 'sdr';

    /** @var string */
    private const CLAIMED = 'claimed';

    /** @var string */
    private const DENIED = 'denied';

    /** @var string */
    private const UNESTABLISHED = 'unestablished';

    /** @var string */
    private const UNREPORTED = 'unreported';

    /**
     * @param string $value
     * @return PccHdrOutcome
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * HDR
     *
     * @return PccHdrOutcome
     */
    public static function HDR()
    {
        return new PccHdrOutcome(self::HDR);
    }

    /**
     * SDR
     *
     * @return PccHdrOutcome
     */
    public static function SDR()
    {
        return new PccHdrOutcome(self::SDR);
    }

    /**
     * CLAIMED
     *
     * @return PccHdrOutcome
     */
    public static function CLAIMED()
    {
        return new PccHdrOutcome(self::CLAIMED);
    }

    /**
     * DENIED
     *
     * @return PccHdrOutcome
     */
    public static function DENIED()
    {
        return new PccHdrOutcome(self::DENIED);
    }

    /**
     * UNESTABLISHED
     *
     * @return PccHdrOutcome
     */
    public static function UNESTABLISHED()
    {
        return new PccHdrOutcome(self::UNESTABLISHED);
    }

    /**
     * UNREPORTED
     *
     * @return PccHdrOutcome
     */
    public static function UNREPORTED()
    {
        return new PccHdrOutcome(self::UNREPORTED);
    }
}

