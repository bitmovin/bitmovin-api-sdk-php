<?php

namespace BitmovinApiSdk\Models;

class InputType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AKAMAI_NETSTORAGE = 'AKAMAI_NETSTORAGE';

    /** @var string */
    private const ASPERA = 'ASPERA';

    /** @var string */
    private const AZURE = 'AZURE';

    /** @var string */
    private const REDUNDANT_RTMP = 'REDUNDANT_RTMP';

    /** @var string */
    private const FTP = 'FTP';

    /** @var string */
    private const GENERIC_S3 = 'GENERIC_S3';

    /** @var string */
    private const GCS = 'GCS';

    /** @var string */
    private const HTTP = 'HTTP';

    /** @var string */
    private const HTTPS = 'HTTPS';

    /** @var string */
    private const LOCAL = 'LOCAL';

    /** @var string */
    private const RTMP = 'RTMP';

    /** @var string */
    private const S3 = 'S3';

    /** @var string */
    private const S3_ROLE_BASED = 'S3_ROLE_BASED';

    /** @var string */
    private const SFTP = 'SFTP';

    /** @var string */
    private const TCP = 'TCP';

    /** @var string */
    private const UDP = 'UDP';

    /** @var string */
    private const UDP_MULTICAST = 'UDP_MULTICAST';

    /** @var string */
    private const ZIXI = 'ZIXI';

    /** @var string */
    private const SRT = 'SRT';

    /**
     * @param string $value
     * @return InputType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AKAMAI_NETSTORAGE
     *
     * @return InputType
     */
    public static function AKAMAI_NETSTORAGE()
    {
        return new InputType(self::AKAMAI_NETSTORAGE);
    }

    /**
     * ASPERA
     *
     * @return InputType
     */
    public static function ASPERA()
    {
        return new InputType(self::ASPERA);
    }

    /**
     * AZURE
     *
     * @return InputType
     */
    public static function AZURE()
    {
        return new InputType(self::AZURE);
    }

    /**
     * REDUNDANT_RTMP
     *
     * @return InputType
     */
    public static function REDUNDANT_RTMP()
    {
        return new InputType(self::REDUNDANT_RTMP);
    }

    /**
     * FTP
     *
     * @return InputType
     */
    public static function FTP()
    {
        return new InputType(self::FTP);
    }

    /**
     * GENERIC_S3
     *
     * @return InputType
     */
    public static function GENERIC_S3()
    {
        return new InputType(self::GENERIC_S3);
    }

    /**
     * GCS
     *
     * @return InputType
     */
    public static function GCS()
    {
        return new InputType(self::GCS);
    }

    /**
     * HTTP
     *
     * @return InputType
     */
    public static function HTTP()
    {
        return new InputType(self::HTTP);
    }

    /**
     * HTTPS
     *
     * @return InputType
     */
    public static function HTTPS()
    {
        return new InputType(self::HTTPS);
    }

    /**
     * LOCAL
     *
     * @return InputType
     */
    public static function LOCAL()
    {
        return new InputType(self::LOCAL);
    }

    /**
     * RTMP
     *
     * @return InputType
     */
    public static function RTMP()
    {
        return new InputType(self::RTMP);
    }

    /**
     * S3
     *
     * @return InputType
     */
    public static function S3()
    {
        return new InputType(self::S3);
    }

    /**
     * S3_ROLE_BASED
     *
     * @return InputType
     */
    public static function S3_ROLE_BASED()
    {
        return new InputType(self::S3_ROLE_BASED);
    }

    /**
     * SFTP
     *
     * @return InputType
     */
    public static function SFTP()
    {
        return new InputType(self::SFTP);
    }

    /**
     * TCP
     *
     * @return InputType
     */
    public static function TCP()
    {
        return new InputType(self::TCP);
    }

    /**
     * UDP
     *
     * @return InputType
     */
    public static function UDP()
    {
        return new InputType(self::UDP);
    }

    /**
     * UDP_MULTICAST
     *
     * @return InputType
     */
    public static function UDP_MULTICAST()
    {
        return new InputType(self::UDP_MULTICAST);
    }

    /**
     * ZIXI
     *
     * @return InputType
     */
    public static function ZIXI()
    {
        return new InputType(self::ZIXI);
    }

    /**
     * SRT
     *
     * @return InputType
     */
    public static function SRT()
    {
        return new InputType(self::SRT);
    }
}

