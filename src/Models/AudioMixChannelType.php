<?php

namespace BitmovinApiSdk\Models;

class AudioMixChannelType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CHANNEL_NUMBER = 'CHANNEL_NUMBER';

    /** @var string */
    private const FRONT_LEFT = 'FRONT_LEFT';

    /** @var string */
    private const FRONT_RIGHT = 'FRONT_RIGHT';

    /** @var string */
    private const CENTER = 'CENTER';

    /** @var string */
    private const LOW_FREQUENCY = 'LOW_FREQUENCY';

    /** @var string */
    private const BACK_LEFT = 'BACK_LEFT';

    /** @var string */
    private const BACK_RIGHT = 'BACK_RIGHT';

    /** @var string */
    private const SURROUND_LEFT = 'SURROUND_LEFT';

    /** @var string */
    private const SURROUND_RIGHT = 'SURROUND_RIGHT';

    /**
     * @param string $value
     * @return AudioMixChannelType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function CHANNEL_NUMBER()
    {
        return new AudioMixChannelType(self::CHANNEL_NUMBER);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function FRONT_LEFT()
    {
        return new AudioMixChannelType(self::FRONT_LEFT);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function FRONT_RIGHT()
    {
        return new AudioMixChannelType(self::FRONT_RIGHT);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function CENTER()
    {
        return new AudioMixChannelType(self::CENTER);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function LOW_FREQUENCY()
    {
        return new AudioMixChannelType(self::LOW_FREQUENCY);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function BACK_LEFT()
    {
        return new AudioMixChannelType(self::BACK_LEFT);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function BACK_RIGHT()
    {
        return new AudioMixChannelType(self::BACK_RIGHT);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function SURROUND_LEFT()
    {
        return new AudioMixChannelType(self::SURROUND_LEFT);
    }

    /**
     * Type of this channel
     *
     * @return AudioMixChannelType
     */
    public static function SURROUND_RIGHT()
    {
        return new AudioMixChannelType(self::SURROUND_RIGHT);
    }
}

