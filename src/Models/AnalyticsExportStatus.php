<?php

namespace BitmovinApiSdk\Models;

class AnalyticsExportStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STARTED = 'STARTED';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /** @var string */
    private const QUEUED = 'QUEUED';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return AnalyticsExportStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * STARTED
     *
     * @return AnalyticsExportStatus
     */
    public static function STARTED()
    {
        return new AnalyticsExportStatus(self::STARTED);
    }

    /**
     * FINISHED
     *
     * @return AnalyticsExportStatus
     */
    public static function FINISHED()
    {
        return new AnalyticsExportStatus(self::FINISHED);
    }

    /**
     * QUEUED
     *
     * @return AnalyticsExportStatus
     */
    public static function QUEUED()
    {
        return new AnalyticsExportStatus(self::QUEUED);
    }

    /**
     * ERROR
     *
     * @return AnalyticsExportStatus
     */
    public static function ERROR()
    {
        return new AnalyticsExportStatus(self::ERROR);
    }
}

