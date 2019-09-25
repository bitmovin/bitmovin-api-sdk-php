<?php

namespace BitmovinApiSdk\Models;

class LogLevel extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const TRACE = 'TRACE';

    /** @var string */
    private const DEBUG = 'DEBUG';

    /** @var string */
    private const INFO = 'INFO';

    /** @var string */
    private const WARN = 'WARN';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const FATAL = 'FATAL';

    /** @var string */
    private const OFF = 'OFF';

    /**
     * @param string $value
     * @return LogLevel
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * TRACE
     *
     * @return LogLevel
     */
    public static function TRACE()
    {
        return new LogLevel(self::TRACE);
    }

    /**
     * DEBUG
     *
     * @return LogLevel
     */
    public static function DEBUG()
    {
        return new LogLevel(self::DEBUG);
    }

    /**
     * INFO
     *
     * @return LogLevel
     */
    public static function INFO()
    {
        return new LogLevel(self::INFO);
    }

    /**
     * WARN
     *
     * @return LogLevel
     */
    public static function WARN()
    {
        return new LogLevel(self::WARN);
    }

    /**
     * ERROR
     *
     * @return LogLevel
     */
    public static function ERROR()
    {
        return new LogLevel(self::ERROR);
    }

    /**
     * FATAL
     *
     * @return LogLevel
     */
    public static function FATAL()
    {
        return new LogLevel(self::FATAL);
    }

    /**
     * OFF
     *
     * @return LogLevel
     */
    public static function OFF()
    {
        return new LogLevel(self::OFF);
    }
}

