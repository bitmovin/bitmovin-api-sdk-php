<?php

namespace BitmovinApiSdk\Models;

class SourceChannelType extends \BitmovinApiSdk\Common\Enum
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
     * @return SourceChannelType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function CHANNEL_NUMBER()
    {
        return new SourceChannelType(self::CHANNEL_NUMBER);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function FRONT_LEFT()
    {
        return new SourceChannelType(self::FRONT_LEFT);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function FRONT_RIGHT()
    {
        return new SourceChannelType(self::FRONT_RIGHT);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function CENTER()
    {
        return new SourceChannelType(self::CENTER);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function LOW_FREQUENCY()
    {
        return new SourceChannelType(self::LOW_FREQUENCY);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function BACK_LEFT()
    {
        return new SourceChannelType(self::BACK_LEFT);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function BACK_RIGHT()
    {
        return new SourceChannelType(self::BACK_RIGHT);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function SURROUND_LEFT()
    {
        return new SourceChannelType(self::SURROUND_LEFT);
    }

    /**
     * Type of this source channel
     *
     * @return SourceChannelType
     */
    public static function SURROUND_RIGHT()
    {
        return new SourceChannelType(self::SURROUND_RIGHT);
    }
}

