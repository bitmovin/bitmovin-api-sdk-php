<?php

namespace BitmovinApiSdk\Models;

class DashISO8601TimestampFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LONG = 'LONG';

    /** @var string */
    private const SHORT = 'SHORT';

    /**
     * @param string $value
     * @return DashISO8601TimestampFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Format for generating timestamps in PXXYXXMXXDTXXHXXMX.XXXS
     *
     * @return DashISO8601TimestampFormat
     */
    public static function LONG()
    {
        return new DashISO8601TimestampFormat(self::LONG);
    }

    /**
     * Format for generating timestamps in PTXXHXXMX.XXXS
     *
     * @return DashISO8601TimestampFormat
     */
    public static function SHORT()
    {
        return new DashISO8601TimestampFormat(self::SHORT);
    }
}

