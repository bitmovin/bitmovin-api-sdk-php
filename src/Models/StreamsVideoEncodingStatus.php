<?php

namespace BitmovinApiSdk\Models;

class StreamsVideoEncodingStatus extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const STARTED = 'STARTED';

    /** @var string */
    private const ERROR = 'ERROR';

    /** @var string */
    private const FINISHED = 'FINISHED';

    /**
     * @param string $value
     * @return StreamsVideoEncodingStatus
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * The encoding has been started and is in progress
     *
     * @return StreamsVideoEncodingStatus
     */
    public static function STARTED()
    {
        return new StreamsVideoEncodingStatus(self::STARTED);
    }

    /**
     * The encoding did not succeed
     *
     * @return StreamsVideoEncodingStatus
     */
    public static function ERROR()
    {
        return new StreamsVideoEncodingStatus(self::ERROR);
    }

    /**
     * The encoding finished successfully
     *
     * @return StreamsVideoEncodingStatus
     */
    public static function FINISHED()
    {
        return new StreamsVideoEncodingStatus(self::FINISHED);
    }
}

