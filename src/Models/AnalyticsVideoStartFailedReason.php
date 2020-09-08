<?php

namespace BitmovinApiSdk\Models;

class AnalyticsVideoStartFailedReason extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PAGE_CLOSED = 'PAGE_CLOSED';

    /** @var string */
    private const PLAYER_ERROR = 'PLAYER_ERROR';

    /** @var string */
    private const TIMEOUT = 'TIMEOUT';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return AnalyticsVideoStartFailedReason
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * PAGE_CLOSED
     *
     * @return AnalyticsVideoStartFailedReason
     */
    public static function PAGE_CLOSED()
    {
        return new AnalyticsVideoStartFailedReason(self::PAGE_CLOSED);
    }

    /**
     * PLAYER_ERROR
     *
     * @return AnalyticsVideoStartFailedReason
     */
    public static function PLAYER_ERROR()
    {
        return new AnalyticsVideoStartFailedReason(self::PLAYER_ERROR);
    }

    /**
     * TIMEOUT
     *
     * @return AnalyticsVideoStartFailedReason
     */
    public static function TIMEOUT()
    {
        return new AnalyticsVideoStartFailedReason(self::TIMEOUT);
    }

    /**
     * UNKNOWN
     *
     * @return AnalyticsVideoStartFailedReason
     */
    public static function UNKNOWN()
    {
        return new AnalyticsVideoStartFailedReason(self::UNKNOWN);
    }
}

