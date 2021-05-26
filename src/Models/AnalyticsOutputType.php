<?php

namespace BitmovinApiSdk\Models;

class AnalyticsOutputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const S3_ROLE_BASED = 'S3_ROLE_BASED';

    /** @var string */
    private const GCS_SERVICE_ACCOUNT = 'GCS_SERVICE_ACCOUNT';

    /** @var string */
    private const AZURE = 'AZURE';

    /**
     * @param string $value
     * @return AnalyticsOutputType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * S3_ROLE_BASED
     *
     * @return AnalyticsOutputType
     */
    public static function S3_ROLE_BASED()
    {
        return new AnalyticsOutputType(self::S3_ROLE_BASED);
    }

    /**
     * GCS_SERVICE_ACCOUNT
     *
     * @return AnalyticsOutputType
     */
    public static function GCS_SERVICE_ACCOUNT()
    {
        return new AnalyticsOutputType(self::GCS_SERVICE_ACCOUNT);
    }

    /**
     * AZURE
     *
     * @return AnalyticsOutputType
     */
    public static function AZURE()
    {
        return new AnalyticsOutputType(self::AZURE);
    }
}

