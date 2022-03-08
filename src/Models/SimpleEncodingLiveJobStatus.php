<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingLiveJobStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED = 'CREATED';

    /** @var string */
    private const EXECUTING = 'EXECUTING';

    /** @var string */
    private const FAILURE = 'FAILURE';

    /** @var string */
    private const STARTING = 'STARTING';

    /** @var string */
    private const RUNNING = 'RUNNING';

    /** @var string */
    private const STOPPED = 'STOPPED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const CANCELED = 'CANCELED';

    /**
     * @param string $value
     * @return SimpleEncodingLiveJobStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The Simple Encoding Live Job has been created and is waiting to be executed
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function CREATED()
    {
        return new SimpleEncodingLiveJobStatus(self::CREATED);
    }

    /**
     * The Simple Encoding Live Job is currently being executed and creating the encoding
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function EXECUTING()
    {
        return new SimpleEncodingLiveJobStatus(self::EXECUTING);
    }

    /**
     * The Simple Encoding Live Job could not create the encoding, check the details for more information
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function FAILURE()
    {
        return new SimpleEncodingLiveJobStatus(self::FAILURE);
    }

    /**
     * The Simple Encoding Live Job has triggered the encoding and is currently starting
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function STARTING()
    {
        return new SimpleEncodingLiveJobStatus(self::STARTING);
    }

    /**
     * The Simple Encoding Live Job has triggered the encoding and is accepting/encoding ingress
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function RUNNING()
    {
        return new SimpleEncodingLiveJobStatus(self::RUNNING);
    }

    /**
     * The Simple Encoding Live Job has been executed and the encoding has finished
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function STOPPED()
    {
        return new SimpleEncodingLiveJobStatus(self::STOPPED);
    }

    /**
     * The Simple Encoding Live Job has been executed but the encoding failed, check the encoding details for more information
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function ERROR()
    {
        return new SimpleEncodingLiveJobStatus(self::ERROR);
    }

    /**
     * The Simple Encoding Live Job has been executed but the encoding has been canceled manually by the user
     *
     * @return SimpleEncodingLiveJobStatus
     */
    public static function CANCELED()
    {
        return new SimpleEncodingLiveJobStatus(self::CANCELED);
    }
}

