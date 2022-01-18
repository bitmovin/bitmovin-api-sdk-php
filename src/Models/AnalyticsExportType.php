<?php

namespace BitmovinApiSdk\Models;

class AnalyticsExportType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ADS = 'ADS';

    /** @var string */
    private const SESSIONS = 'SESSIONS';

    /**
     * @param string $value
     * @return AnalyticsExportType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Export ads sessions
     *
     * @return AnalyticsExportType
     */
    public static function ADS()
    {
        return new AnalyticsExportType(self::ADS);
    }

    /**
     * Export sessions
     *
     * @return AnalyticsExportType
     */
    public static function SESSIONS()
    {
        return new AnalyticsExportType(self::SESSIONS);
    }
}

