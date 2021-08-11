<?php

namespace BitmovinApiSdk\Models;

class AnalyticsHttpRequestType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DRM_LICENSE_WIDEVINE = 'DRM_LICENSE_WIDEVINE,';

    /** @var string */
    private const MEDIA_THUMBNAILS = 'MEDIA_THUMBNAILS,';

    /** @var string */
    private const MEDIA_VIDEO = 'MEDIA_VIDEO,';

    /** @var string */
    private const MEDIA_AUDIO = 'MEDIA_AUDIO,';

    /** @var string */
    private const MEDIA_PROGRESSIVE = 'MEDIA_PROGRESSIVE,';

    /** @var string */
    private const MEDIA_SUBTITLES = 'MEDIA_SUBTITLES,';

    /** @var string */
    private const MANIFEST_DASH = 'MANIFEST_DASH,';

    /** @var string */
    private const MANIFEST_HLS_MASTER = 'MANIFEST_HLS_MASTER,';

    /** @var string */
    private const MANIFEST_HLS_VARIANT = 'MANIFEST_HLS_VARIANT,';

    /** @var string */
    private const MANIFEST_SMOOTH = 'MANIFEST_SMOOTH,';

    /** @var string */
    private const KEY_HLS_AES = 'KEY_HLS_AES,';

    /** @var string */
    private const UNKNOWN = 'UNKNOWN';

    /**
     * @param string $value
     * @return AnalyticsHttpRequestType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DRM_LICENSE_WIDEVINE
     *
     * @return AnalyticsHttpRequestType
     */
    public static function DRM_LICENSE_WIDEVINE()
    {
        return new AnalyticsHttpRequestType(self::DRM_LICENSE_WIDEVINE);
    }

    /**
     * MEDIA_THUMBNAILS
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MEDIA_THUMBNAILS()
    {
        return new AnalyticsHttpRequestType(self::MEDIA_THUMBNAILS);
    }

    /**
     * MEDIA_VIDEO
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MEDIA_VIDEO()
    {
        return new AnalyticsHttpRequestType(self::MEDIA_VIDEO);
    }

    /**
     * MEDIA_AUDIO
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MEDIA_AUDIO()
    {
        return new AnalyticsHttpRequestType(self::MEDIA_AUDIO);
    }

    /**
     * MEDIA_PROGRESSIVE
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MEDIA_PROGRESSIVE()
    {
        return new AnalyticsHttpRequestType(self::MEDIA_PROGRESSIVE);
    }

    /**
     * MEDIA_SUBTITLES
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MEDIA_SUBTITLES()
    {
        return new AnalyticsHttpRequestType(self::MEDIA_SUBTITLES);
    }

    /**
     * MANIFEST_DASH
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MANIFEST_DASH()
    {
        return new AnalyticsHttpRequestType(self::MANIFEST_DASH);
    }

    /**
     * MANIFEST_HLS_MASTER
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MANIFEST_HLS_MASTER()
    {
        return new AnalyticsHttpRequestType(self::MANIFEST_HLS_MASTER);
    }

    /**
     * MANIFEST_HLS_VARIANT
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MANIFEST_HLS_VARIANT()
    {
        return new AnalyticsHttpRequestType(self::MANIFEST_HLS_VARIANT);
    }

    /**
     * MANIFEST_SMOOTH
     *
     * @return AnalyticsHttpRequestType
     */
    public static function MANIFEST_SMOOTH()
    {
        return new AnalyticsHttpRequestType(self::MANIFEST_SMOOTH);
    }

    /**
     * KEY_HLS_AES
     *
     * @return AnalyticsHttpRequestType
     */
    public static function KEY_HLS_AES()
    {
        return new AnalyticsHttpRequestType(self::KEY_HLS_AES);
    }

    /**
     * UNKNOWN
     *
     * @return AnalyticsHttpRequestType
     */
    public static function UNKNOWN()
    {
        return new AnalyticsHttpRequestType(self::UNKNOWN);
    }
}

