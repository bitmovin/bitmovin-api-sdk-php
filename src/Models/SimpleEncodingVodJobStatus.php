<?php

namespace BitmovinApiSdk\Models;

class SimpleEncodingVodJobStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const CREATED = 'CREATED';

    /** @var string */
    private const EXECUTING = 'EXECUTING';

    /** @var string */
    private const FAILURE = 'FAILURE';

    /** @var string */
    private const RUNNING = 'RUNNING';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const CANCELED = 'CANCELED';

    /**
     * @param string $value
     * @return SimpleEncodingVodJobStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The Simple Encoding VOD Job has been created and is waiting to be executed
     *
     * @return SimpleEncodingVodJobStatus
     */
    public static function CREATED()
    {
        return new SimpleEncodingVodJobStatus(self::CREATED);
    }

    /**
     * The Simple Encoding VOD Job is currently being executed and creating the encoding
     *
     * @return SimpleEncodingVodJobStatus
     */
    public static function EXECUTING()
    {
        return new SimpleEncodingVodJobStatus(self::EXECUTING);
    }

    /**
     * The Simple Encoding VOD Job could not create the encoding, check the details for more information
     *
     * @return SimpleEncodingVodJobStatus
     */
    public static function FAILURE()
    {
        return new SimpleEncodingVodJobStatus(self::FAILURE);
    }

    /**
     * The Simple Encoding VOD Job has triggered the encoding
     *
     * @return SimpleEncodingVodJobStatus
     */
    public static function RUNNING()
    {
        return new SimpleEncodingVodJobStatus(self::RUNNING);
    }

    /**
     * The Simple Encoding VOD Job has been executed and the encoding has finished
     *
     * @return SimpleEncodingVodJobStatus
     */
    public static function FINISHED()
    {
        return new SimpleEncodingVodJobStatus(self::FINISHED);
    }

    /**
     * The Simple Encoding VOD Job has been executed but the encoding failed, check the encoding details for more information
     *
     * @return SimpleEncodingVodJobStatus
     */
    public static function ERROR()
    {
        return new SimpleEncodingVodJobStatus(self::ERROR);
    }

    /**
     * The Simple Encoding VOD Job has been executed but the encoding has been canceled manually by the user
     *
     * @return SimpleEncodingVodJobStatus
     */
    public static function CANCELED()
    {
        return new SimpleEncodingVodJobStatus(self::CANCELED);
    }
}

