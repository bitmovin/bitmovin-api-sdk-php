<?php

namespace BitmovinApiSdk\Models;

class H265V2PresetConfiguration extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VOD_SPEED = 'VOD_SPEED';

    /** @var string */
    private const VOD_STANDARD = 'VOD_STANDARD';

    /** @var string */
    private const VOD_QUALITY = 'VOD_QUALITY';

    /** @var string */
    private const VOD_HIGH_QUALITY = 'VOD_HIGH_QUALITY';

    /**
     * @param string $value
     * @return H265V2PresetConfiguration
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * VOD_SPEED
     *
     * @return H265V2PresetConfiguration
     */
    public static function VOD_SPEED()
    {
        return new H265V2PresetConfiguration(self::VOD_SPEED);
    }

    /**
     * VOD_STANDARD
     *
     * @return H265V2PresetConfiguration
     */
    public static function VOD_STANDARD()
    {
        return new H265V2PresetConfiguration(self::VOD_STANDARD);
    }

    /**
     * VOD_QUALITY
     *
     * @return H265V2PresetConfiguration
     */
    public static function VOD_QUALITY()
    {
        return new H265V2PresetConfiguration(self::VOD_QUALITY);
    }

    /**
     * VOD_HIGH_QUALITY
     *
     * @return H265V2PresetConfiguration
     */
    public static function VOD_HIGH_QUALITY()
    {
        return new H265V2PresetConfiguration(self::VOD_HIGH_QUALITY);
    }
}

