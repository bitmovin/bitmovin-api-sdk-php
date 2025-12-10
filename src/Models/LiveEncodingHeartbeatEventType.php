<?php

namespace BitmovinApiSdk\Models;

class LiveEncodingHeartbeatEventType extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const FIRST_CONNECT = 'FIRST_CONNECT';

    /** @var string */
    private const DISCONNECT = 'DISCONNECT';

    /** @var string */
    private const RECONNECT = 'RECONNECT';

    /** @var string */
    private const WARNING = 'WARNING';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return LiveEncodingHeartbeatEventType
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * First connection of the ingest
     *
     * @return LiveEncodingHeartbeatEventType
     */
    public static function FIRST_CONNECT()
    {
        return new LiveEncodingHeartbeatEventType(self::FIRST_CONNECT);
    }

    /**
     * Ingest has disconnected
     *
     * @return LiveEncodingHeartbeatEventType
     */
    public static function DISCONNECT()
    {
        return new LiveEncodingHeartbeatEventType(self::DISCONNECT);
    }

    /**
     * Ingest has reconnected
     *
     * @return LiveEncodingHeartbeatEventType
     */
    public static function RECONNECT()
    {
        return new LiveEncodingHeartbeatEventType(self::RECONNECT);
    }

    /**
     * Warning occurred, please see the message for further details
     *
     * @return LiveEncodingHeartbeatEventType
     */
    public static function WARNING()
    {
        return new LiveEncodingHeartbeatEventType(self::WARNING);
    }

    /**
     * Error occurred, please see the message for further details
     *
     * @return LiveEncodingHeartbeatEventType
     */
    public static function ERROR()
    {
        return new LiveEncodingHeartbeatEventType(self::ERROR);
    }
}

