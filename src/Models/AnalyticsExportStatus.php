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
     * Export has started
     *
     * @return AnalyticsExportStatus
     */
    public static function STARTED()
    {
        return new AnalyticsExportStatus(self::STARTED);
    }

    /**
     * Export has finished
     *
     * @return AnalyticsExportStatus
     */
    public static function FINISHED()
    {
        return new AnalyticsExportStatus(self::FINISHED);
    }

    /**
     * Export is queued and will be stared soon
     *
     * @return AnalyticsExportStatus
     */
    public static function QUEUED()
    {
        return new AnalyticsExportStatus(self::QUEUED);
    }

    /**
     * Error has happened during export
     *
     * @return AnalyticsExportStatus
     */
    public static function ERROR()
    {
        return new AnalyticsExportStatus(self::ERROR);
    }
}

