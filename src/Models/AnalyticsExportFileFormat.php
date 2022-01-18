<?php

namespace BitmovinApiSdk\Models;

class AnalyticsExportFileFormat extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CSV = 'CSV';

    /** @var string */
    private const PARQUET = 'PARQUET';

    /**
     * @param string $value
     * @return AnalyticsExportFileFormat
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Export file will be in CSV format
     *
     * @return AnalyticsExportFileFormat
     */
    public static function CSV()
    {
        return new AnalyticsExportFileFormat(self::CSV);
    }

    /**
     * Export file will be in PARQUET format
     *
     * @return AnalyticsExportFileFormat
     */
    public static function PARQUET()
    {
        return new AnalyticsExportFileFormat(self::PARQUET);
    }
}

