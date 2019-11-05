<?php

namespace BitmovinApiSdk\Models;

class PresetConfiguration extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const LIVE_ULTRAHIGH_QUALITY = 'LIVE_ULTRAHIGH_QUALITY';

    /** @var string */
    private const LIVE_VERYHIGH_QUALITY = 'LIVE_VERYHIGH_QUALITY';

    /** @var string */
    private const LIVE_HIGH_QUALITY = 'LIVE_HIGH_QUALITY';

    /** @var string */
    private const LIVE_STANDARD = 'LIVE_STANDARD';

    /** @var string */
    private const LIVE_LOW_LATENCY = 'LIVE_LOW_LATENCY';

    /** @var string */
    private const LIVE_LOWER_LATENCY = 'LIVE_LOWER_LATENCY';

    /** @var string */
    private const LIVE_VERYLOW_LATENCY = 'LIVE_VERYLOW_LATENCY';

    /** @var string */
    private const VOD_HIGH_QUALITY = 'VOD_HIGH_QUALITY';

    /** @var string */
    private const VOD_HIGH_SPEED = 'VOD_HIGH_SPEED';

    /** @var string */
    private const VOD_SPEED = 'VOD_SPEED';

    /** @var string */
    private const VOD_STANDARD = 'VOD_STANDARD';

    /** @var string */
    private const VOD_EXTRAHIGH_SPEED = 'VOD_EXTRAHIGH_SPEED';

    /** @var string */
    private const VOD_VERYHIGH_SPEED = 'VOD_VERYHIGH_SPEED';

    /** @var string */
    private const VOD_SUPERHIGH_SPEED = 'VOD_SUPERHIGH_SPEED';

    /** @var string */
    private const VOD_ULTRAHIGH_SPEED = 'VOD_ULTRAHIGH_SPEED';

    /**
     * @param string $value
     * @return PresetConfiguration
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * LIVE_ULTRAHIGH_QUALITY
     *
     * @return PresetConfiguration
     */
    public static function LIVE_ULTRAHIGH_QUALITY()
    {
        return new PresetConfiguration(self::LIVE_ULTRAHIGH_QUALITY);
    }

    /**
     * LIVE_VERYHIGH_QUALITY
     *
     * @return PresetConfiguration
     */
    public static function LIVE_VERYHIGH_QUALITY()
    {
        return new PresetConfiguration(self::LIVE_VERYHIGH_QUALITY);
    }

    /**
     * LIVE_HIGH_QUALITY
     *
     * @return PresetConfiguration
     */
    public static function LIVE_HIGH_QUALITY()
    {
        return new PresetConfiguration(self::LIVE_HIGH_QUALITY);
    }

    /**
     * LIVE_STANDARD
     *
     * @return PresetConfiguration
     */
    public static function LIVE_STANDARD()
    {
        return new PresetConfiguration(self::LIVE_STANDARD);
    }

    /**
     * LIVE_LOW_LATENCY
     *
     * @return PresetConfiguration
     */
    public static function LIVE_LOW_LATENCY()
    {
        return new PresetConfiguration(self::LIVE_LOW_LATENCY);
    }

    /**
     * LIVE_LOWER_LATENCY
     *
     * @return PresetConfiguration
     */
    public static function LIVE_LOWER_LATENCY()
    {
        return new PresetConfiguration(self::LIVE_LOWER_LATENCY);
    }

    /**
     * LIVE_VERYLOW_LATENCY
     *
     * @return PresetConfiguration
     */
    public static function LIVE_VERYLOW_LATENCY()
    {
        return new PresetConfiguration(self::LIVE_VERYLOW_LATENCY);
    }

    /**
     * VOD_HIGH_QUALITY
     *
     * @return PresetConfiguration
     */
    public static function VOD_HIGH_QUALITY()
    {
        return new PresetConfiguration(self::VOD_HIGH_QUALITY);
    }

    /**
     * VOD_HIGH_SPEED
     *
     * @return PresetConfiguration
     */
    public static function VOD_HIGH_SPEED()
    {
        return new PresetConfiguration(self::VOD_HIGH_SPEED);
    }

    /**
     * VOD_SPEED
     *
     * @return PresetConfiguration
     */
    public static function VOD_SPEED()
    {
        return new PresetConfiguration(self::VOD_SPEED);
    }

    /**
     * VOD_STANDARD
     *
     * @return PresetConfiguration
     */
    public static function VOD_STANDARD()
    {
        return new PresetConfiguration(self::VOD_STANDARD);
    }

    /**
     * VOD_EXTRAHIGH_SPEED
     *
     * @return PresetConfiguration
     */
    public static function VOD_EXTRAHIGH_SPEED()
    {
        return new PresetConfiguration(self::VOD_EXTRAHIGH_SPEED);
    }

    /**
     * VOD_VERYHIGH_SPEED
     *
     * @return PresetConfiguration
     */
    public static function VOD_VERYHIGH_SPEED()
    {
        return new PresetConfiguration(self::VOD_VERYHIGH_SPEED);
    }

    /**
     * VOD_SUPERHIGH_SPEED
     *
     * @return PresetConfiguration
     */
    public static function VOD_SUPERHIGH_SPEED()
    {
        return new PresetConfiguration(self::VOD_SUPERHIGH_SPEED);
    }

    /**
     * VOD_ULTRAHIGH_SPEED
     *
     * @return PresetConfiguration
     */
    public static function VOD_ULTRAHIGH_SPEED()
    {
        return new PresetConfiguration(self::VOD_ULTRAHIGH_SPEED);
    }
}

