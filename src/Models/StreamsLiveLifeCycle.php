<?php

namespace BitmovinApiSdk\Models;

class StreamsLiveLifeCycle extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const PROVISIONING = 'PROVISIONING';

    /** @var string */
    private const STOPPED = 'STOPPED';

    /** @var string */
    private const RUNNING = 'RUNNING';

    /** @var string */
    private const ERROR = 'ERROR';

    /**
     * @param string $value
     * @return StreamsLiveLifeCycle
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * PROVISIONING
     *
     * @return StreamsLiveLifeCycle
     */
    public static function PROVISIONING()
    {
        return new StreamsLiveLifeCycle(self::PROVISIONING);
    }

    /**
     * STOPPED
     *
     * @return StreamsLiveLifeCycle
     */
    public static function STOPPED()
    {
        return new StreamsLiveLifeCycle(self::STOPPED);
    }

    /**
     * RUNNING
     *
     * @return StreamsLiveLifeCycle
     */
    public static function RUNNING()
    {
        return new StreamsLiveLifeCycle(self::RUNNING);
    }

    /**
     * ERROR
     *
     * @return StreamsLiveLifeCycle
     */
    public static function ERROR()
    {
        return new StreamsLiveLifeCycle(self::ERROR);
    }
}

