<?php

namespace BitmovinApiSdk\Models;

class DrmType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const WIDEVINE = 'WIDEVINE';

    /** @var string */
    private const PLAYREADY = 'PLAYREADY';

    /** @var string */
    private const PRIMETIME = 'PRIMETIME';

    /** @var string */
    private const FAIRPLAY = 'FAIRPLAY';

    /** @var string */
    private const MARLIN = 'MARLIN';

    /** @var string */
    private const CLEARKEY = 'CLEARKEY';

    /** @var string */
    private const AES = 'AES';

    /** @var string */
    private const CENC = 'CENC';

    /** @var string */
    private const SPEKE = 'SPEKE';

    /**
     * @param string $value
     * @return DrmType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function WIDEVINE()
    {
        return new DrmType(self::WIDEVINE);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function PLAYREADY()
    {
        return new DrmType(self::PLAYREADY);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function PRIMETIME()
    {
        return new DrmType(self::PRIMETIME);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function FAIRPLAY()
    {
        return new DrmType(self::FAIRPLAY);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function MARLIN()
    {
        return new DrmType(self::MARLIN);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function CLEARKEY()
    {
        return new DrmType(self::CLEARKEY);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function AES()
    {
        return new DrmType(self::AES);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function CENC()
    {
        return new DrmType(self::CENC);
    }

    /**
     * The type of the drm
     *
     * @return DrmType
     */
    public static function SPEKE()
    {
        return new DrmType(self::SPEKE);
    }
}

