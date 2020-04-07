<?php

namespace BitmovinApiSdk\Models;

class OutputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AKAMAI_NETSTORAGE = 'AKAMAI_NETSTORAGE';

    /** @var string */
    private const AZURE = 'AZURE';

    /** @var string */
    private const GENERIC_S3 = 'GENERIC_S3';

    /** @var string */
    private const GCS = 'GCS';

    /** @var string */
    private const FTP = 'FTP';

    /** @var string */
    private const LOCAL = 'LOCAL';

    /** @var string */
    private const S3 = 'S3';

    /** @var string */
    private const S3_ROLE_BASED = 'S3_ROLE_BASED';

    /** @var string */
    private const SFTP = 'SFTP';

    /** @var string */
    private const AKAMAI_MSL = 'AKAMAI_MSL';

    /** @var string */
    private const LIVE_MEDIA_INGEST = 'LIVE_MEDIA_INGEST';

    /** @var string */
    private const GCS_SERVICE_ACCOUNT = 'GCS_SERVICE_ACCOUNT';

    /**
     * @param string $value
     * @return OutputType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AKAMAI_NETSTORAGE
     *
     * @return OutputType
     */
    public static function AKAMAI_NETSTORAGE()
    {
        return new OutputType(self::AKAMAI_NETSTORAGE);
    }

    /**
     * AZURE
     *
     * @return OutputType
     */
    public static function AZURE()
    {
        return new OutputType(self::AZURE);
    }

    /**
     * GENERIC_S3
     *
     * @return OutputType
     */
    public static function GENERIC_S3()
    {
        return new OutputType(self::GENERIC_S3);
    }

    /**
     * GCS
     *
     * @return OutputType
     */
    public static function GCS()
    {
        return new OutputType(self::GCS);
    }

    /**
     * FTP
     *
     * @return OutputType
     */
    public static function FTP()
    {
        return new OutputType(self::FTP);
    }

    /**
     * LOCAL
     *
     * @return OutputType
     */
    public static function LOCAL()
    {
        return new OutputType(self::LOCAL);
    }

    /**
     * S3
     *
     * @return OutputType
     */
    public static function S3()
    {
        return new OutputType(self::S3);
    }

    /**
     * S3_ROLE_BASED
     *
     * @return OutputType
     */
    public static function S3_ROLE_BASED()
    {
        return new OutputType(self::S3_ROLE_BASED);
    }

    /**
     * SFTP
     *
     * @return OutputType
     */
    public static function SFTP()
    {
        return new OutputType(self::SFTP);
    }

    /**
     * AKAMAI_MSL
     *
     * @return OutputType
     */
    public static function AKAMAI_MSL()
    {
        return new OutputType(self::AKAMAI_MSL);
    }

    /**
     * LIVE_MEDIA_INGEST
     *
     * @return OutputType
     */
    public static function LIVE_MEDIA_INGEST()
    {
        return new OutputType(self::LIVE_MEDIA_INGEST);
    }

    /**
     * GCS_SERVICE_ACCOUNT
     *
     * @return OutputType
     */
    public static function GCS_SERVICE_ACCOUNT()
    {
        return new OutputType(self::GCS_SERVICE_ACCOUNT);
    }
}

