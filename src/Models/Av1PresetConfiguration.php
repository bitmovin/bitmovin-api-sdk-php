<?php

namespace BitmovinApiSdk\Models;

class Av1PresetConfiguration extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const VOD_QUALITY = 'VOD_QUALITY';

    /** @var string */
    private const VOD_STANDARD = 'VOD_STANDARD';

    /** @var string */
    private const VOD_SPEED = 'VOD_SPEED';

    /**
     * @param string $value
     * @return Av1PresetConfiguration
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * VOD_QUALITY
     *
     * @return Av1PresetConfiguration
     */
    public static function VOD_QUALITY()
    {
        return new Av1PresetConfiguration(self::VOD_QUALITY);
    }

    /**
     * VOD_STANDARD
     *
     * @return Av1PresetConfiguration
     */
    public static function VOD_STANDARD()
    {
        return new Av1PresetConfiguration(self::VOD_STANDARD);
    }

    /**
     * VOD_SPEED
     *
     * @return Av1PresetConfiguration
     */
    public static function VOD_SPEED()
    {
        return new Av1PresetConfiguration(self::VOD_SPEED);
    }
}

