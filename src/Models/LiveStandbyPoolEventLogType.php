<?php

namespace BitmovinApiSdk\Models;

class LiveStandbyPoolEventLogType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const INFO = 'INFO';

    /** @var string */
    private const WARN = 'WARN';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return LiveStandbyPoolEventLogType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * Info log level
     *
     * @return LiveStandbyPoolEventLogType
     */
    public static function INFO()
    {
        return new LiveStandbyPoolEventLogType(self::INFO);
    }

    /**
     * Warning log level
     *
     * @return LiveStandbyPoolEventLogType
     */
    public static function WARN()
    {
        return new LiveStandbyPoolEventLogType(self::WARN);
    }

    /**
     * Error log level
     *
     * @return LiveStandbyPoolEventLogType
     */
    public static function ERROR()
    {
        return new LiveStandbyPoolEventLogType(self::ERROR);
    }
}

