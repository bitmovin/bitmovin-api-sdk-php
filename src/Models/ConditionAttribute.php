<?php

namespace BitmovinApiSdk\Models;

class ConditionAttribute extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const HEIGHT = 'HEIGHT';

    /** @var string */
    private const WIDTH = 'WIDTH';

    /** @var string */
    private const BITRATE = 'BITRATE';

    /** @var string */
    private const FPS = 'FPS';

    /** @var string */
    private const ASPECTRATIO = 'ASPECTRATIO';

    /** @var string */
    private const INPUTSTREAM = 'INPUTSTREAM';

    /** @var string */
    private const LANGUAGE = 'LANGUAGE';

    /** @var string */
    private const CHANNELFORMAT = 'CHANNELFORMAT';

    /** @var string */
    private const CHANNELLAYOUT = 'CHANNELLAYOUT';

    /** @var string */
    private const STREAMCOUNT = 'STREAMCOUNT';

    /** @var string */
    private const AUDIOSTREAMCOUNT = 'AUDIOSTREAMCOUNT';

    /** @var string */
    private const VIDEOSTREAMCOUNT = 'VIDEOSTREAMCOUNT';

    /** @var string */
    private const DURATION = 'DURATION';

    /** @var string */
    private const ROTATION = 'ROTATION';

    /** @var string */
    private const CONNECTION_STATUS = 'CONNECTION_STATUS';

    /** @var string */
    private const CONNECTION_STATUS_JUST_CHANGED = 'CONNECTION_STATUS_JUST_CHANGED';

    /**
     * @param string $value
     * @return ConditionAttribute
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Height of the input
     *
     * @return ConditionAttribute
     */
    public static function HEIGHT()
    {
        return new ConditionAttribute(self::HEIGHT);
    }

    /**
     * Width of the input
     *
     * @return ConditionAttribute
     */
    public static function WIDTH()
    {
        return new ConditionAttribute(self::WIDTH);
    }

    /**
     * Bitrate of the input
     *
     * @return ConditionAttribute
     */
    public static function BITRATE()
    {
        return new ConditionAttribute(self::BITRATE);
    }

    /**
     * Frames per second of the input
     *
     * @return ConditionAttribute
     */
    public static function FPS()
    {
        return new ConditionAttribute(self::FPS);
    }

    /**
     * Aspect ratio of the input (greater 1 &#x3D; landscape; smaller 1 &#x3D; portrait)
     *
     * @return ConditionAttribute
     */
    public static function ASPECTRATIO()
    {
        return new ConditionAttribute(self::ASPECTRATIO);
    }

    /**
     * Input stream is present (boolean)
     *
     * @return ConditionAttribute
     */
    public static function INPUTSTREAM()
    {
        return new ConditionAttribute(self::INPUTSTREAM);
    }

    /**
     * The language of the audio stream (string)
     *
     * @return ConditionAttribute
     */
    public static function LANGUAGE()
    {
        return new ConditionAttribute(self::LANGUAGE);
    }

    /**
     * The channel format of the audio stream (string)
     *
     * @return ConditionAttribute
     */
    public static function CHANNELFORMAT()
    {
        return new ConditionAttribute(self::CHANNELFORMAT);
    }

    /**
     * The channel layout of the audio stream (integer)
     *
     * @return ConditionAttribute
     */
    public static function CHANNELLAYOUT()
    {
        return new ConditionAttribute(self::CHANNELLAYOUT);
    }

    /**
     * The total numbers of streams in the input file (integer)
     *
     * @return ConditionAttribute
     */
    public static function STREAMCOUNT()
    {
        return new ConditionAttribute(self::STREAMCOUNT);
    }

    /**
     * The total numbers of audio streams in the input file (integer)
     *
     * @return ConditionAttribute
     */
    public static function AUDIOSTREAMCOUNT()
    {
        return new ConditionAttribute(self::AUDIOSTREAMCOUNT);
    }

    /**
     * The total numbers of video streams in the input file (integer)
     *
     * @return ConditionAttribute
     */
    public static function VIDEOSTREAMCOUNT()
    {
        return new ConditionAttribute(self::VIDEOSTREAMCOUNT);
    }

    /**
     * The duration of the input file (double)
     *
     * @return ConditionAttribute
     */
    public static function DURATION()
    {
        return new ConditionAttribute(self::DURATION);
    }

    /**
     * The rotation of the input file (double)
     *
     * @return ConditionAttribute
     */
    public static function ROTATION()
    {
        return new ConditionAttribute(self::ROTATION);
    }

    /**
     * String value representing the changed connection status
     *
     * @return ConditionAttribute
     */
    public static function CONNECTION_STATUS()
    {
        return new ConditionAttribute(self::CONNECTION_STATUS);
    }

    /**
     * Boolean value if the connection status changed
     *
     * @return ConditionAttribute
     */
    public static function CONNECTION_STATUS_JUST_CHANGED()
    {
        return new ConditionAttribute(self::CONNECTION_STATUS_JUST_CHANGED);
    }
}

