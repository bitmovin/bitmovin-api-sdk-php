<?php

namespace BitmovinApiSdk\Models;

class AnalyticsInterval extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const MINUTE = 'MINUTE';

    /** @var string */
    private const HOUR = 'HOUR';

    /** @var string */
    private const DAY = 'DAY';

    /** @var string */
    private const MONTH = 'MONTH';

    /**
     * @param string $value
     * @return AnalyticsInterval
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * MINUTE
     *
     * @return AnalyticsInterval
     */
    public static function MINUTE()
    {
        return new AnalyticsInterval(self::MINUTE);
    }

    /**
     * HOUR
     *
     * @return AnalyticsInterval
     */
    public static function HOUR()
    {
        return new AnalyticsInterval(self::HOUR);
    }

    /**
     * DAY
     *
     * @return AnalyticsInterval
     */
    public static function DAY()
    {
        return new AnalyticsInterval(self::DAY);
    }

    /**
     * MONTH
     *
     * @return AnalyticsInterval
     */
    public static function MONTH()
    {
        return new AnalyticsInterval(self::MONTH);
    }
}

