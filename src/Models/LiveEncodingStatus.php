<?php

namespace BitmovinApiSdk\Models;

class LiveEncodingStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CONNECTED = 'CONNECTED';

    /** @var string */
    private const DISCONNECTED = 'DISCONNECTED';

    /** @var string */
    private const WAITING_FOR_FIRST_CONNECT = 'WAITING_FOR_FIRST_CONNECT';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const NOT_AVAILABLE = 'NOT_AVAILABLE';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /**
     * @param string $value
     * @return LiveEncodingStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * CONNECTED
     *
     * @return LiveEncodingStatus
     */
    public static function CONNECTED()
    {
        return new LiveEncodingStatus(self::CONNECTED);
    }

    /**
     * DISCONNECTED
     *
     * @return LiveEncodingStatus
     */
    public static function DISCONNECTED()
    {
        return new LiveEncodingStatus(self::DISCONNECTED);
    }

    /**
     * WAITING_FOR_FIRST_CONNECT
     *
     * @return LiveEncodingStatus
     */
    public static function WAITING_FOR_FIRST_CONNECT()
    {
        return new LiveEncodingStatus(self::WAITING_FOR_FIRST_CONNECT);
    }

    /**
     * ERROR
     *
     * @return LiveEncodingStatus
     */
    public static function ERROR()
    {
        return new LiveEncodingStatus(self::ERROR);
    }

    /**
     * NOT_AVAILABLE
     *
     * @return LiveEncodingStatus
     */
    public static function NOT_AVAILABLE()
    {
        return new LiveEncodingStatus(self::NOT_AVAILABLE);
    }

    /**
     * FINISHED
     *
     * @return LiveEncodingStatus
     */
    public static function FINISHED()
    {
        return new LiveEncodingStatus(self::FINISHED);
    }
}

