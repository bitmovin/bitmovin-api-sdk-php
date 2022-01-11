<?php

namespace BitmovinApiSdk\Models;

class DashRepresentationTypeDiscriminator extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const DRM_FMP4 = 'DRM_FMP4';

    /** @var string */
    private const FMP4 = 'FMP4';

    /** @var string */
    private const WEBM = 'WEBM';

    /** @var string */
    private const CMAF = 'CMAF';

    /** @var string */
    private const CHUNKED_TEXT = 'CHUNKED_TEXT';

    /** @var string */
    private const MP4 = 'MP4';

    /** @var string */
    private const DRM_MP4 = 'DRM_MP4';

    /** @var string */
    private const PROGRESSIVE_WEBM = 'PROGRESSIVE_WEBM';

    /** @var string */
    private const VTT = 'VTT';

    /** @var string */
    private const SPRITE = 'SPRITE';

    /** @var string */
    private const IMSC = 'IMSC';

    /** @var string */
    private const CONTENT_PROTECTION = 'CONTENT_PROTECTION';

    /**
     * @param string $value
     * @return DashRepresentationTypeDiscriminator
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * DRM_FMP4
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function DRM_FMP4()
    {
        return new DashRepresentationTypeDiscriminator(self::DRM_FMP4);
    }

    /**
     * FMP4
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function FMP4()
    {
        return new DashRepresentationTypeDiscriminator(self::FMP4);
    }

    /**
     * WEBM
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function WEBM()
    {
        return new DashRepresentationTypeDiscriminator(self::WEBM);
    }

    /**
     * CMAF
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function CMAF()
    {
        return new DashRepresentationTypeDiscriminator(self::CMAF);
    }

    /**
     * CHUNKED_TEXT
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function CHUNKED_TEXT()
    {
        return new DashRepresentationTypeDiscriminator(self::CHUNKED_TEXT);
    }

    /**
     * MP4
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function MP4()
    {
        return new DashRepresentationTypeDiscriminator(self::MP4);
    }

    /**
     * DRM_MP4
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function DRM_MP4()
    {
        return new DashRepresentationTypeDiscriminator(self::DRM_MP4);
    }

    /**
     * PROGRESSIVE_WEBM
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function PROGRESSIVE_WEBM()
    {
        return new DashRepresentationTypeDiscriminator(self::PROGRESSIVE_WEBM);
    }

    /**
     * VTT
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function VTT()
    {
        return new DashRepresentationTypeDiscriminator(self::VTT);
    }

    /**
     * SPRITE
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function SPRITE()
    {
        return new DashRepresentationTypeDiscriminator(self::SPRITE);
    }

    /**
     * IMSC
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function IMSC()
    {
        return new DashRepresentationTypeDiscriminator(self::IMSC);
    }

    /**
     * CONTENT_PROTECTION
     *
     * @return DashRepresentationTypeDiscriminator
     */
    public static function CONTENT_PROTECTION()
    {
        return new DashRepresentationTypeDiscriminator(self::CONTENT_PROTECTION);
    }
}

