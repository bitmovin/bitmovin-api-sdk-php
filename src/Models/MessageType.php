<?php

namespace BitmovinApiSdk\Models;

class MessageType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const WARNING = 'WARNING';

    /** @var string */
    private const INFO = 'INFO';

    /** @var string */
    private const DEBUG = 'DEBUG';

    /** @var string */
    private const TRACE = 'TRACE';

    /**
     * @param string $value
     * @return MessageType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * ERROR
     *
     * @return MessageType
     */
    public static function ERROR()
    {
        return new MessageType(self::ERROR);
    }

    /**
     * WARNING
     *
     * @return MessageType
     */
    public static function WARNING()
    {
        return new MessageType(self::WARNING);
    }

    /**
     * INFO
     *
     * @return MessageType
     */
    public static function INFO()
    {
        return new MessageType(self::INFO);
    }

    /**
     * DEBUG
     *
     * @return MessageType
     */
    public static function DEBUG()
    {
        return new MessageType(self::DEBUG);
    }

    /**
     * TRACE
     *
     * @return MessageType
     */
    public static function TRACE()
    {
        return new MessageType(self::TRACE);
    }
}

